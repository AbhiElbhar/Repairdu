<?php

namespace App\Http\Controllers\Admin;

use App\Models\policy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies = policy::get();

        return view('Admin.Policy.edit',compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Policy.create');
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
            'policy'=>'required',
            'terms'=>'required'
        ]);

        policy::create([
            'policy'=>$request->policy,
            'terms'=>$request->terms
        ]);

        return redirect()->route('policy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function show(policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function edit(policy $policy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, policy $policy)
    {
        $request->validate([
            'policy'=>'required',
            'terms'=>'required'
        ]);

        $policy->update([
            'policy'=>$request->policy,
            'terms'=>$request->terms
        ]);

        return redirect()->route('policy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function destroy(policy $policy)
    {
        //
    }
}
