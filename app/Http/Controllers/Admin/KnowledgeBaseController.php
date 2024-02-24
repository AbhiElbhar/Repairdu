<?php

namespace App\Http\Controllers\Admin;

use App\Models\knowledge_base;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledge_base= knowledge_base::Paginate(2);

        return view('Admin.Knowledge_base.index',compact('knowledge_base'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Knowledge_base.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required'
        ]);

        knowledge_base::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description
        ]);

        return redirect()->route('knowledge_base.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\knowledge_base  $knowledge_base
     * @return \Illuminate\Http\Response
     */
    public function show(knowledge_base $knowledge_base)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\knowledge_base  $knowledge_base
     * @return \Illuminate\Http\Response
     */
    public function edit(knowledge_base $knowledge_base)
    {
        if (empty($knowledge_base)) {
            return redirect()->route('knowledge_base.index');
        }
        else {
            return view ('Admin.Knowledge_base.edit',compact('knowledge_base'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\knowledge_base  $knowledge_base
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, knowledge_base $knowledge_base)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required'
        ]);

        $knowledge_base->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description
        ]);

        return redirect()->route('knowledge_base.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\knowledge_base  $knowledge_base
     * @return \Illuminate\Http\Response
     */
    public function destroy(knowledge_base $knowledge_base)
    {
        $knowledge_base->delete();

        return redirect()->route('knowledge_base.index');
    }
}
