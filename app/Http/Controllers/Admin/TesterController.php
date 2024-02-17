<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tester;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tester= Tester::Paginate(2);

        return view('Admin.Tester.index',compact('tester'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Tester.create');
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
            'name'=>'required|max:255',
            'position'=>'required|max:255',
            'description'=>'required'
        ]);

        Tester::create([
            'name'=>$request->name,
            'position'=>$request->position,
            'description'=>$request->description
        ]);

        return redirect()->route('tester.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function show(Tester $tester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function edit(Tester $tester)
    {
        if (empty($tester)) {
            return redirect()->route('tester.index');
        }
        else {
            return view ('Admin.Tester.edit',compact('tester'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tester $tester)
    {
        $request->validate([
            'name'=>'required|max:255',
            'position'=>'required|max:255',
            'description'=>'required'
        ]);

        $tester->update([
            'name'=>$request->name,
            'position'=>$request->position,
            'description'=>$request->description
        ]);

       return redirect()->route('tester.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tester $tester)
    {
        $tester->delete();

        return redirect()->route('tester.index');
    }
}
