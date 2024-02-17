<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider= Slider::Paginate(2);

        return view('Admin.Slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slider.create');
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
            'url'=>'max:255',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,webp',
        ]);

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        Slider::create([
            'title'=>$request->title,
            'url'=>$request->url,
            'description'=>$request->description,
            'image'=>$image1
        ]);

        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        if (empty($slider)) {
            return redirect()->route('slider.index');
        }
        else {
            return view ('Admin.Slider.edit',compact('slider'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title'=>'required|max:255',
            'url'=>'max:255',
            'description'=>'required',
            'image'=>'mimes:jpg,png,webp',
            'old_image'=>'required',
        ]);
        if (empty($request->image)) {

            $slider->update([
                'title'=>$request->title,
                'url'=>$request->url,
                'description'=>$request->description,
                'image'=>$request->old_image
            ]);
        }
        else {

        $image1=time().'.'.$request->image->extension();
        $request->image->move(public_path('admin/images'),$image1);

        $slider->update([
            'title'=>$request->title,
            'url'=>$request->url,
            'description'=>$request->description,
            'image'=>$image1
        ]);
       }

       return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('slider.index');
    }
}
