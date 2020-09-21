<?php

namespace App\Http\Controllers;

use App\Model\PaymentGateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentGatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentGateways = PaymentGateway::orderBy('created_at')->paginate(20);
        return view('backend.payment-gateway.index',compact('paymentGateways'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentGateway = new PaymentGateway();
        return view('backend.payment-gateway.create',compact('paymentGateway'));
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
            "info_text" => "required",
            "status" => "required"
        ];

        $message = [
            "name.required" => "Name is required",
            "info_text.required" => "Info is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $paymentGateway = new PaymentGateway();
            $paymentGateway->name = $request->name;
            $paymentGateway->key_id = $request->key_id;
            $paymentGateway->secret_token = $request->secret_token;
            $paymentGateway->info_text = $request->info_text;
            $paymentGateway->sandbox = $request->sandbox;
            $paymentGateway->email = $request->email;
            $paymentGateway->website = $request->website;
            $paymentGateway->retail = $request->retail;
            $paymentGateway->publisher_key = $request->publisher_key;
            $paymentGateway->commission = $request->commission;
            $paymentGateway->commission_type = $request->commission_type;
            $paymentGateway->status = $request->status;

            if ($paymentGateway->save()){
                session()->flash('success','Payment gateway information saved');
                return redirect('payment-gateway');
            }else{
                session()->flash('error','Payment gateway information not saved');
                return redirect()->back()->withInput();
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentGateway $paymentGateway)
    {
        return view('backend.payment-gateway.show',compact('paymentGateway'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentGateway $paymentGateway)
    {
        return view('backend.payment-gateway.edit',compact('paymentGateway'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentGateway $paymentGateway)
    {
        $rules = [
            "name" => "required",
            "info_text" => "required",
            "status" => "required"
        ];

        $message = [
            "name.required" => "Name is required",
            "info_text.required" => "Info is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $paymentGateway->name = $request->name;
            $paymentGateway->key_id = $request->key_id;
            $paymentGateway->secret_token = $request->secret_token;
            $paymentGateway->info_text = $request->info_text;
            $paymentGateway->sandbox = $request->sandbox;
            $paymentGateway->email = $request->email;
            $paymentGateway->website = $request->website;
            $paymentGateway->retail = $request->retail;
            $paymentGateway->publisher_key = $request->publisher_key;
            $paymentGateway->commission = $request->commission;
            $paymentGateway->commission_type = $request->commission_type;
            $paymentGateway->status = $request->status;

            if ($paymentGateway->save()){
                session()->flash('success','Payment gateway information updated');
                return redirect('payment-gateway');
            }else{
                session()->flash('error','Payment gateway information not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentGateway $paymentGateway)
    {
        if ($paymentGateway->delete()){
            session()->flash('success','Payment gateway Deleted');
            return redirect('payment-gateway');
        }else{
            session()->flash('error','Payment gateway not deleted');
            return redirect('payment-gateway');
        }
    }
}
