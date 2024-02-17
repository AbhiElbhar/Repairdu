<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature= feature::Paginate(2);

        return view('Admin.Feature.index',compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Feature.create');
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
            'heading'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'required|mimes:jpg,png,webp',
        ]);

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        feature::create([
            'title'=>$request->title,
            'heading'=>$request->heading,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);

        return redirect()->route('feature.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        if (empty($feature)) {
            return redirect()->route('feature.index');
        }
        else {
            return view ('Admin.Feature.edit',compact('feature'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title'=>'required|max:255',
            'heading'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'mimes:jpg,png,webp',
            'old_image'=>'required',
        ]);
        if (empty($request->image)) {

            $feature->update([
                'title'=>$request->title,
                'heading'=>$request->heading,
                'description'=>$request->description,
                'meta_title'=>$request->meta_title,
                'meta_keyword'=>$request->meta_keyword,
                'meta_description'=>$request->meta_description,
                'image'=>$request->old_image
            ]);
        }
        else {

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        $feature->update([
            'title'=>$request->title,
            'heading'=>$request->heading,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);
       }

       return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();

        return redirect()->route('feature.index');
    }
}
