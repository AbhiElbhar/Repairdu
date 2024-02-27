<?php

namespace App\Http\Controllers\Admin;

use App\Models\counter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter= counter::Paginate(4);

        return view('Admin.Counter.index',compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Counter.create');
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
            'counter'=>'required|numeric'
        ]);

        counter::create([
            'title'=>$request->title,
            'counter'=>$request->counter
        ]);

        return redirect()->route('counter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(counter $counter)
    {
        if (empty($counter)) {
            return redirect()->route('counter.index');
        }
        else {
            return view ('Admin.Counter.edit',compact('counter'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, counter $counter)
    {
        $request->validate([
            'title'=>'required|max:255',
            'counter'=>'required|numeric'
        ]);

        $counter->update([
            'title'=>$request->title,
            'counter'=>$request->counter
        ]);

       return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(counter $counter)
    {
        $counter->delete();

        return redirect()->route('counter.index');
    }
}
