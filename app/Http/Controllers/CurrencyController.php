<?php

namespace App\Http\Controllers;

use App\Model\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencys = Currency::orderBy('created_at')->paginate(20);
        return view('backend.currency.index',compact('currencys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency = new Currency();
        return view('backend.currency.create',compact('currency'));
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
            "name" => "required",
            "symbol" => "required",
            "multiplication_of_doller" => "required|numeric|min:1",
            "status" => "required"
        ];

        $message = [
            "multiplication_of_doller.required" => "Multiplication of USD is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $currency = new Currency();
            $currency->name = $request->name;
            $currency->symbol = $request->symbol;
            $currency->multiplication_of_doller = $request->multiplication_of_doller;
            $currency->status = $request->status;

            if ($currency->save()){
                session()->flash('success','Currency information saved');
                return redirect('currencys');
            }else{
                session()->flash('error','Currency information not saved');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('backend.currency.edit',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        $rules = [
            "name" => "required",
            "symbol" => "required",
            "multiplication_of_doller" => "required|numeric|min:1",
            "status" => "required"
        ];

        $message = [
            "multiplication_of_doller.required" => "Multiplication of USD is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $currency->name = $request->name;
            $currency->symbol = $request->symbol;
            $currency->multiplication_of_doller = $request->multiplication_of_doller;
            $currency->status = $request->status;

            if ($currency->save()){
                session()->flash('success','Currency information updated');
                return redirect('currencys');
            }else{
                session()->flash('error','Currency information not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        if ($currency->delete()){
            session()->flash('success','Currency deleted');
            return redirect('currencys');
        }else{
            session()->flash('error','Currency deleted');
            return redirect()->back()->withInput();
        }
    }
}
