<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function index()
    {
        // view all posts by all user in descending order
        
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
    public function store(StorePost $request)
    {
        
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
        //
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
}
