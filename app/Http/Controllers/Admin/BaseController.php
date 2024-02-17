<?php

namespace App\Http\Controllers\Admin;

use App\Models\base;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $base= base::Paginate(2);

        return view('Admin.Base.index',compact('base'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Base.create');
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

        base::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description
        ]);

        return redirect()->route('knowledge-base.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\base  $base
     * @return \Illuminate\Http\Response
     */
    public function show(base $base)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\base  $base
     * @return \Illuminate\Http\Response
     */
    public function edit(base $base)
    {
        if (empty($base)) {
            return redirect()->route('knowledge-base.index');
        }
        else {
            return view ('Admin.Base.edit',compact('base'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\base  $base
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, base $base)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required'
        ]);

        $base->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description
        ]);

        return redirect()->route('knowledge-base.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\base  $base
     * @return \Illuminate\Http\Response
     */
    public function destroy(base $base)
    {
        $base->delete();

        return redirect()->route('knowledge-base.index');
    }
}
