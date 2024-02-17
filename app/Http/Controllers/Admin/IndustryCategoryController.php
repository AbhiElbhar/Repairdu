<?php

namespace App\Http\Controllers\Admin;

use App\Models\industry_category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry_category= industry_category::Paginate(2);

        return view('Admin.Industry_category.index',compact('industry_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Industry_category.create');
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
            'name'=>'required|max:255'
        ]);

        industry_category::create([
            'name'=>$request->name
        ]);

        return redirect()->route('industry_category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\industry_category  $industry_category
     * @return \Illuminate\Http\Response
     */
    public function show(industry_category $industry_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\industry_category  $industry_category
     * @return \Illuminate\Http\Response
     */
    public function edit(industry_category $industry_category)
    {
        if (empty($industry_category)) {
            return redirect()->route('industry_category.index');
        }
        else {
            return view ('Admin.industry_category.edit',compact('industry_category'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\industry_category  $industry_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, industry_category $industry_category)
    {
        $request->validate([
            'name'=>'required|max:255'
        ]);

        $industry_category->update([
            'name'=>$request->name
        ]);

       return redirect()->route('industry_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\industry_category  $industry_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(industry_category $industry_category)
    {
        $industry_category->delete();

        return redirect()->route('industry_category.index');
    }
}
