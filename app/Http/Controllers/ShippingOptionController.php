<?php

namespace App\Http\Controllers;

use App\Model\ShippingOption;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\ShippingOptionEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ShippingOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipping_options = ShippingOption::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $shipping_options->where("vendor_id","=",Auth::user()->id);
        }
        $shipping_options = $shipping_options->orderBy("id")->paginate(20);
        return view('backend.shipping-option.index',compact('shipping_options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shipping-option.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'method_name' => [
                'required',
                'min:2',
                'max:250',
                Rule::unique('shipping_options')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            //"method_name" => "required|min:2|max:250|unique:shipping_options",
            "charge" => "required|numeric|min:1|max:999999999",
        ];

        $message = [
            "method_name.required" => "The Shipping Name is required.",
            "method_name.max" => "The Shipping Name may not be greater than 250 characters.",
            "method_name.min" => "The Shipping Name may not be lass than 2 characters.",
            "charge.required" => "Charge is required.",
            "charge.numeric" => "Charge should be numeric number.",
            "charge.max" => "Charge may not be greater than 50.",
            "charge.min" => "Charge may not be lass than 1.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $result = event(new ShippingOptionEvnt($data));

            if ($result) {
                session()->flash("success", "Shipping option successfully created");
                return redirect()->route('shipping-option.index');
            } else {
                session()->flash("error", "Shipping option not created");
                return redirect()->back();
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingOption $shippingOption)
    {
        return view("backend.shipping-option.edit",compact('shippingOption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'method_name' => [
                'required',
                'min:2',
                'max:250',
                Rule::unique('shipping_options')->ignore($id)->where(function($query) use($id) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            //"method_name" => "required|min:2|max:250|unique:shipping_options,method_name," . $id,
            "charge" => "required|numeric|min:1|max:999999999",
        ];

        $message = [
            "method_name.required" => "The Shipping Name is required.",
            "method_name.max" => "The Shipping Name may not be greater than 250 characters.",
            "method_name.min" => "The Shipping Name may not be lass than 2 characters.",
            "charge.required" => "Charge is required.",
            "charge.numeric" => "Charge should be numeric number.",
            "charge.max" => "Charge may not be greater than 50.",
            "charge.min" => "Charge may not be lass than 1.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'request' => $request,
                'id' => $id,
            ];

            $result = event(new ShippingOptionEvnt($data));

            if($result){
                session()->flash('success','Shipping option updated');
                return redirect()->route('shipping-option.index');
            }else{
                session()->flash('error','Shipping option Not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingOption $shippingOption)
    {
        if ($shippingOption->delete()) {
            session()->flash("success", "Shipping Option Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Shipping Option Not Deleted");
            return redirect()->back();
        }
    }

}
