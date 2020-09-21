<?php

namespace App\Http\Controllers\paymentgetway;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\PaymentGateway;
use App\Model\PaymentResponce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\CustomClass\SslcommerzLogInfo;



class SslcommerzController extends Controller
{
    public function sslCommerz($result=null, $act=null, Request $request){

        $client_info       = PaymentGateway::find(5);
        $store_id          = $client_info->key_id;
        $store_password    = $client_info->secret_token;

//        $store_id          = "lemon5eebbf0bd097e";
//        $store_password    = "lemon5eebbf0bd097e@ssl";

        $total= $request->input('total', 50);
        $orderId=$request->input('order_id',null);

        $return_result = SslcommerzLogInfo::SslcommerzInfo($total,$orderId, $store_id, $store_password);
    }

    function sslRedirect($action=null,Request $request){
        if($action=="success"){
            $order = Order::find($request->request->get('value_a'));
            $order->payment_status = 'success';
            $order->save();
            $this->paymentResponce($request);
            Session::flash('success','Order Placed');
            return redirect()->route('checkout-step-four',$request->request->get('value_a'));
        }

        elseif($action=="fail"){
            $order = Order::find($request->request->get('value_a'));
            $order->payment_status = 'failed';
            $order->save();
            $this->paymentResponce($request);
            Session::flash('error','Payment failed');
            return redirect('/');
        }

        elseif($action=="cancel"){
            $order = Order::find($request->request->get('value_a'));
            $order->payment_status = 'canceled';
            $order->save();
            $this->paymentResponce($request);
            Session::flash('error','Payment canceled');
            return redirect('/');
        }
    }

    private function paymentResponce($request){

        $paymentResponce = new PaymentResponce();

        $paymentResponce->order_id = $request->request->get('value_a');
        $paymentResponce->status = $request->request->get('status') ?? null;
        $paymentResponce->tran_date = $request->request->get('tran_date') ?? null;
        $paymentResponce->tran_id = $request->request->get('tran_id') ?? null;
        $paymentResponce->amount = $request->request->get('amount') ?? null;
        $paymentResponce->store_amount = $request->request->get('store_amount') ?? null;
        $paymentResponce->currency = $request->request->get('currency') ?? null;
        $paymentResponce->bank_tran_id = $request->request->get('bank_tran_id') ?? null;
        $paymentResponce->card_type = $request->request->get('card_type') ?? null;
        $paymentResponce->card_no = $request->request->get('card_no') ?? null;
        $paymentResponce->card_issuer = $request->request->get('card_issuer') ?? null;
        $paymentResponce->card_brand = $request->request->get('card_brand') ?? null;
        $paymentResponce->card_issuer_country = $request->request->get('card_issuer_country') ?? null;
        $paymentResponce->card_issuer_country_code = $request->request->get('card_issuer_country_code') ?? null;
        $paymentResponce->currency_type = $request->request->get('currency_type') ?? null;
        $paymentResponce->currency_amount = $request->request->get('currency_amount') ?? null;
        $paymentResponce->currency_rate = $request->request->get('currency_rate') ?? null;
        $paymentResponce->base_fair = $request->request->get('base_fair') ?? null;
        $paymentResponce->save();
    }
}
