<?php

namespace App\Http\Controllers;

use App\Model\VendorSubscriptionPlans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VendorSubscriptionPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendorPlans = VendorSubscriptionPlans::paginate(10);
        return view('backend.vendor-subscription-plan.index',compact('vendorPlans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor-subscription-plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'           => 'required|max:100',
                'price'           => 'numeric|nullable',
                'duration'           => 'required|numeric',
                'product_limitation'           => 'required|numeric',
                'description'           => 'max:200',

            ],
            [
                'product_limitation.required'   => 'No. of Product is required',
                'product_limitation.numeric'   => 'No. of Product must be a numeric value',
            ]
        );

        $vendorPlan = new VendorSubscriptionPlans();

        $vendorPlan->title = $request->title;
        $vendorPlan->price = $request->price ?? 0;
        $vendorPlan->duration = $request->duration;
        $vendorPlan->product_limitation = $request->product_limitation;
        $vendorPlan->description = $request->description;

        if ($vendorPlan->save()){
            Session::flash('success','Vendor Subscription Plan Added');
            return redirect()->route('vendor-subscription-plan.index');
        }else{
            Session::flash('error','Vendor Subscription Plan Not Added');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\VendorSubscriptionPlans  $vendorSubscriptionPlans
     * @return \Illuminate\Http\Response
     */
    public function show(VendorSubscriptionPlans $vendorSubscriptionPlans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\VendorSubscriptionPlans  $vendorSubscriptionPlans
     * @return \Illuminate\Http\Response
     */
    public function edit(VendorSubscriptionPlans $vendorSubscriptionPlan)
    {
        return view('backend.vendor-subscription-plan.edit',compact('vendorSubscriptionPlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\VendorSubscriptionPlans  $vendorSubscriptionPlans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VendorSubscriptionPlans $vendorSubscriptionPlan)
    {
        $request->validate(
            [
                'title'           => 'required|max:100',
                'price'           => 'numeric|nullable',
                'duration'           => 'required|numeric',
                'product_limitation'           => 'required|numeric',
                'description'           => 'max:200',
                'status'           => 'required',

            ],
            [
                'product_limitation.required'   => 'No. of Product is required',
                'product_limitation.numeric'   => 'No. of Product must be a numeric value',
            ]
        );

        $vendorSubscriptionPlan->title = $request->title;
        $vendorSubscriptionPlan->price = $request->price ?? 0;
        $vendorSubscriptionPlan->duration = $request->duration;
        $vendorSubscriptionPlan->product_limitation = $request->product_limitation;
        $vendorSubscriptionPlan->description = $request->description;
        $vendorSubscriptionPlan->status = $request->status;

        if ($vendorSubscriptionPlan->save()){
            Session::flash('success','Vendor Subscription Plan Added');
            return redirect()->route('vendor-subscription-plan.index');
        }else{
            Session::flash('error','Vendor Subscription Plan Not Added');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\VendorSubscriptionPlans  $vendorSubscriptionPlans
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendorSubscriptionPlans $vendorSubscriptionPlan)
    {
        if ($vendorSubscriptionPlan->delete()){
            Session::flash('success','Vendor Subscription Plan Deleted');
            return redirect()->back();
        }else{
            Session::flash('error','Vendor Subscription Plan Not Deleted');
            return redirect()->back();
        }
    }
}
