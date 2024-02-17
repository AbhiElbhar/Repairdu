<?php

namespace App\Http\Controllers\Admin;

use App\Models\industry;
use App\Http\Controllers\Controller;
use App\Models\industry_category;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry= industry::Paginate(2);

        return view('Admin.Industry.index',compact('industry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = industry_category::get();

        return view('Admin.Industry.create',compact('category'));
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
            'category_id'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'required|mimes:jpg,png,webp',
        ]);

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        industry::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);

        return redirect()->route('industry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(industry $industry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(industry $industry)
    {
        if (empty($industry)) {

            return redirect()->route('industry.index');
        }
        else {

            $category = industry_category::get();

            return view ('Admin.Industry.edit',compact('industry'),compact('category'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, industry $industry)
    {
        $request->validate([
            'title'=>'required|max:255',
            'category_id'=>'required|max:255',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'mimes:jpg,png,webp',
            'old_image'=>'required',
        ]);
        if (empty($request->image)) {

            $industry->update([
                'title'=>$request->title,
                'category_id'=>$request->category_id,
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

        $industry->update([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);
       }

       return redirect()->route('industry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(industry $industry)
    {
        $industry->delete();

        return redirect()->route('industry.index');
    }
}
