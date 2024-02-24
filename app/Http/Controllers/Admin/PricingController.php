<?php

namespace App\Http\Controllers\Admin;

use App\Models\pricing;
use App\Http\Controllers\Controller;
use App\Models\time;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = time::with('pricing')->get();
        $time = time::get();

        return view('Admin/Pricing/index',compact(['pricing','time']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $time = time::get();

        return view('Admin.Pricing.create',compact('time'));
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
            'package'=>'required',
            'price'=>'required',
            'staff_accounts'=>'required',
            'contacts_limit'=>'required',
            'invoice_limit'=>'required',
            'quotation_limit'=>'required',
            'project_management'=>'required',
            'recurring_transaction'=>'required',
            'inventory_module'=>'required',
            'live_chat'=>'required',
            'file_manager'=>'required',
            'online_payment'=>'required',
            'time_id'=>'required'
        ]);

        pricing::create([
            'package'=>$request->package,
            'price'=>$request->price,
            'staff_accounts'=>$request->staff_accounts,
            'contacts_limit'=>$request->contacts_limit,
            'invoice_limit'=>$request->invoice_limit,
            'quotation_limit'=>$request->quotation_limit,
            'project_management'=>$request->project_management,
            'recurring_transaction'=>$request->recurring_transaction,
            'inventory_module'=>$request->inventory_module,
            'live_chat'=>$request->live_chat,
            'file_manager'=>$request->file_manager,
            'online_payment'=>$request->online_payment,
            'time_id'=>$request->time_id
        ]);

        return redirect()->route('pricing.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(pricing $pricing)
    {
        $time = time::get();

        return view('Admin.Pricing.edit',compact(['time','pricing']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pricing $pricing)
    {
        $request->validate([
            'package'=>'required',
            'price'=>'required',
            'staff_accounts'=>'required',
            'contacts_limit'=>'required',
            'invoice_limit'=>'required',
            'quotation_limit'=>'required',
            'project_management'=>'required',
            'recurring_transaction'=>'required',
            'inventory_module'=>'required',
            'live_chat'=>'required',
            'file_manager'=>'required',
            'online_payment'=>'required',
            'time_id'=>'required'
        ]);

        $pricing->update([
            'package'=>$request->package,
            'price'=>$request->price,
            'staff_accounts'=>$request->staff_accounts,
            'contacts_limit'=>$request->contacts_limit,
            'invoice_limit'=>$request->invoice_limit,
            'quotation_limit'=>$request->quotation_limit,
            'project_management'=>$request->project_management,
            'recurring_transaction'=>$request->recurring_transaction,
            'inventory_module'=>$request->inventory_module,
            'live_chat'=>$request->live_chat,
            'file_manager'=>$request->file_manager,
            'online_payment'=>$request->online_payment,
            'time_id'=>$request->time_id
        ]);

        return redirect()->route('pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('pricing.index');
    }
    
}
