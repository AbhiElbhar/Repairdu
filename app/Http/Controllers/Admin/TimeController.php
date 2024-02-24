<?php

namespace App\Http\Controllers\Admin;

use App\Models\time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time= time::Paginate(2);

        return view('Admin.Time.index',compact('time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Time.create');
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
            'time'=>'required|max:255'
        ]);

        time::create([
            'time'=>$request->time
        ]);

        return redirect()->route('time.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function show(time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function edit(time $time)
    {
        if (empty($time)) {
            return redirect()->route('time.index');
        }
        else {
            return view ('Admin.Time.edit',compact('time'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, time $time)
    {
        $request->validate([
            'time'=>'required|max:255'
        ]);

        $time->update([
            'time'=>$request->time
        ]);

       return redirect()->route('time.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\time  $time
     * @return \Illuminate\Http\Response
     */
    public function destroy(time $time)
    {
        $time->delete();

        return redirect()->route('time.index');
    }
}
