<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ref = $request->query('ref'); //ref can be 'arrival', 'departure', 'selatan',
        // dd($ref);
        $templateList = Template::all();
        return view('post.existing-template', [
            'templateList' => $templateList,
            
        ])->with(compact('ref'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create-template');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'template_name' => 'required',
            'case' => 'required',
            'summary' => 'required',
            'chronology' => 'required',
            'measure' => 'required',
            'conclusion' => 'required',
        ]);
        
        Template::create($validated);
        
        return redirect('/create');
    }

    public function createFromTemplate(Request $request, $id)
    {   
        $ref = $request->query('ref');
        $template = Template::find($id);
        $inputs = $template->setupInputs();
        return view('livewire.templates.inputs-components', [
            'template' => $template,
            'inputNames' => $inputs,
        ])->with(compact('ref'));
            // sebenernya bisa aja sih gak pake with, pake di array parameter kedua view
            // jadinya 'ref' => $ref

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
