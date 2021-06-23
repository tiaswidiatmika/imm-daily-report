<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Template;
use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest as StorePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware(['auth'])->only(['create', 'store']);
    // }

    public function interpolateStringFromTemplate($templateId, $request)
    {
        $template = Template::find($templateId);
        $collumnsToFill = $template->getFillables();
        $inputs = $template->setupInputs();
        $container = [];

        foreach ($collumnsToFill as $tableCollumn) {
            $sentence = $template->$tableCollumn;
            foreach ($inputs as $input) {
                $pattern = '/\[' . $input .'\]/';
                $input = preg_replace('/\s/', '_', $input);
                $sentence = preg_replace($pattern, $request->$input, $sentence);
            }
            $container[$tableCollumn] = $sentence;
        }
        return $container;

    } 

    public function htmlMarkup($post)
    {
        $date = now();
        $translateMonths = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        $translateDays = [
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => "Jum'at",
            'Sat' => 'Sabtu'
        ];
        $post['title'] = '';
        $post['tanggal_nesia'] = "{$translateDays[$date->format('D')]}, {$date->format('d')} {$translateMonths[$date->format('m')]} {$date->format('Y')}";
        foreach ($post as $attribute => $value) {
            switch ($attribute) {
                case 'title':
                    $post['title'] = "<table>
                    <tr>
                    <td>Hari / Tanggal</td>
                    <td>:</td>
                    <td class='p-1'>
                        {$post['tanggal_nesia']}
                    </td>
                    </tr>
                
                    <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td class='p-1'>12.00 Wita</td>
                    </tr>
                
                    <tr>
                    <td>Tempat</td>
                    <td>:</td>
                    <td class='p-1'>Keberangkatan Internasional
                    TPI Ngurah Rai</td>
                    </tr>
                </table>";
                    break;
                
                case 'case':
                    $post['case']= "<p>{$value}</p>";
                    break;
                
                case 'summary':
                    $post['summary']= "<p>
                                <b><u>Uraian Singkat Kejadian: </u></b>
                            </p>
                            <p>{$value}</p>";
                    break;

                case 'chronology':
                    $post['chronology']= "
                        <p>
                            <b><u>Kronologis: </u></b>
                        </p>
                        <p>{$value}</p>";
                    break;
                
                case 'measure' :
                    $post['measure'] = "
                    <p>
                        <b><u>Tindakan yang telah diambil: </u></b>
                    </p>
                    <p>{$value}</p>";
                    break;

                case 'conclusion' :
                    $post['conclusion'] = "
                    <p>
                        <b><u>Kesimpulan: </u></b>
                    </p>
                    <p>{$value}
                    </p>";
                    break;


                default:
                    # code...
                    break;
            }
        }
        return $post;
    }
    public function index()
    {
        // view all posts by all user in descending order
        return Post::all()->sortByDesc('created_at');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create($request);
    }

    public function storeFromTemplate(Request $request)
    {
        $newPost = $this->interpolateStringFromTemplate($request->templateId, $request);
        // protected $fillable = ['user_id','title', 'case', 'summary', 'chronology', 'measure', 'conclusion', 'tanggal_nesia'];
        $newPost = $this->htmlMarkup($newPost);

        $post = Post::create(
            ['user_id' => 1] + $newPost
        );

        return view('post.show-post', [
            'post' => $post]
        );
    }
    
    public function storeBak(StorePost $request)
    {
        /*
         * main post builder
         *=====================================================*/
        $postData = $request->validated(); //has title and body
        $fileData = array_splice($postData, -4); // has everything but title and body
        
        $post = auth()->user()->posts()->create([
            'user_id' => auth()->user()->id
            ] + $postData
        );

        $attachment = $post->attachments()->create([
            'title' => $fileData['attachment_title'],
            'post_id' => $post->id,
            'category' => $fileData['category'],
            'path' => $fileData['path'],
        ]);

        /*
         * main post builder
         *=====================================================*/

        if ($post && $attachment) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post.show-post',[
            'post' => Post::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function arrival()
    {
        return view('sections.arrival');
    }

    public function departure()
    {
        return view('sections.departure');
    }

    public function selatan()
    {
        return view('sections.selatan');
    }
    
}
