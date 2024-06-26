<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts= About::Paginate(1);

        return view('Admin.About.edit',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'mobile_no'=>'required|digits:10',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'required|mimes:jpg,png,webp',
        ]);

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        about::create([
            'title'=>$request->title,
            'mobile_no'=>$request->mobile_no,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title'=>'required|max:255',
            'mobile_no'=>'required|digits:10',
            'description'=>'required',
            'meta_title'=>'required|max:255',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'image'=>'mimes:jpg,png,webp',
            'old_image'=>'required',
        ]);
        if (empty($request->image)) {

            $about->update([
                'title'=>$request->title,
                'mobile_no'=>$request->mobile_no,
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

        $about->update([
            'title'=>$request->title,
            'mobile_no'=>$request->mobile_no,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'image'=>$image1,
        ]);
       }

       return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
