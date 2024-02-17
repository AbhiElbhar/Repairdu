<?php

namespace App\Http\Controllers\Admin;

use App\Models\detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details= detail::Paginate(1);

        return view('Admin.Details.edit',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Details.create');
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
            'email'=>'required|max:255',
            'mobile_no'=>'required|digits:10',
            'address'=>'required',
            'logo'=>'required|mimes:jpg,png,webp',
            'favicon'=>'required|mimes:jpg,png,webp'
        ]);

        $image1=time().'.'.$request->logo->extension();
        $request->logo->move(public_path('admin/images'),$image1);

        $image2=time().'.'.$request->favicon->extension();
        $request->favicon->move(public_path('admin/images'),$image2);

        detail::create([
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'address'=>$request->address,
            'logo'=>$image1,
            'favicon'=>$image2
        ]);

        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        $request->validate([
            'email'=>'required|max:255',
            'mobile_no'=>'required|digits:10',
            'address'=>'required',
            'logo'=>'mimes:jpg,png,webp',
            'old_logo'=>'required',
            'favicon'=>'mimes:jpg,png,webp',
            'old_favicon'=>'required',
        ]);
        if (empty($request->logo) && empty($request->favicon)) {

            $detail->update([
                'email'=>$request->email,
                'mobile_no'=>$request->mobile_no,
                'address'=>$request->address,
                'logo'=>$request->old_logo,
                'favicon'=>$request->old_favicon
            ]);
        }
        elseif (empty($request->logo)) {
            
            $image2=time().'.'.$request->favicon->extension();
            $request->favicon->move(public_path('admin/images'),$image2);

            $detail->update([
                'email'=>$request->email,
                'mobile_no'=>$request->mobile_no,
                'address'=>$request->address,
                'logo'=>$request->old_logo,
                'favicon'=>$image2
            ]);
        }
        elseif (empty($request->favicon)) {
            
            $image1=time().'.'.$request->logo->extension();
            $request->logo->move(public_path('admin/images'),$image1);

            $detail->update([
                'email'=>$request->email,
                'mobile_no'=>$request->mobile_no,
                'address'=>$request->address,
                'logo'=>$image1,
                'favicon'=>$request->old_favicon
            ]);
        }
        else {

        $image1=time().'.'.$request->logo->extension();
        $request->logo->move(public_path('admin/images'),$image1);

        $image2=time().'.'.$request->favicon->extension();
        $request->favicon->move(public_path('admin/images'),$image2);

        $detail->update([
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'address'=>$request->address,
            'logo'=>$image1,
            'favicon'=>$image2
        ]);
       }

       return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $detail)
    {
        //
    }
}
