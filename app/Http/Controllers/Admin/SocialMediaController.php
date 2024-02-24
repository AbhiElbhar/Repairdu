<?php

namespace App\Http\Controllers\Admin;

use App\Models\social_media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_medias = social_media::get();

        return view('Admin.Social_media.edit',compact('social_medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Social_media.create');
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
            'facebook'=>'required|max:255',
            'twitter'=>'required|max:255',
            'linkedin'=>'required|max:255',
            'instagram'=>'required|max:255'
        ]);

        social_media::create([
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram
        ]);

        return redirect()->route('social_media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function show(social_media $social_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function edit(social_media $social_media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, social_media $social_media)
    {
        $request->validate([
            'facebook'=>'required|max:255',
            'twitter'=>'required|max:255',
            'linkedin'=>'required|max:255',
            'instagram'=>'required|max:255'
        ]);

        $social_media->update([
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram
        ]);

        return redirect()->route('social_media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function destroy(social_media $social_media)
    {
        //
    }
}
