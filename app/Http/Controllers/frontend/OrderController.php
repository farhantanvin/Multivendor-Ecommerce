<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $orders = Order::where('customer_id','=',auth()->id())->paginate(15);
        return view('frontend.dashboard.order',compact('orders'));
    }

    public function orderView($order_id){
        $orderId = decrypt($order_id);
        $order = Order::with('orderDetail','orderDetail.product')
            ->find($orderId);
        return view('frontend.dashboard.order-view',compact('order','siteSetting'));
    }
}
