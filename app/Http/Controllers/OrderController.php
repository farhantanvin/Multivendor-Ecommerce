<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\SiteSetting;
use App\Model\User;
use App\Model\OrderShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(){
        $orders = Order::paginate(15);
        return view('backend.order.index',compact('orders'));
    }

    public function orderView($order_id){
        $orderId = decrypt($order_id);
        $order = Order::with('orderDetail','orderDetail.product')
            ->find($orderId);
        return view('backend.order.order-detail',compact('order'));
    }

    public function vendorOrder(){
        $orders = OrderDetail::where('vendor_id','=',auth()->id())->paginate(15);
        return view('backend.order.vendor-order',compact('orders'));
    }

    public function orderVendorDetails($order_id){
        $orderId = decrypt($order_id);
        $order = OrderDetail::with('orderInfo','product')
            ->find($orderId);
        return view('backend.order.vendor-order-detail',compact('order'));
    }

    public function orderInvoice($order_id){
        $orderId = decrypt($order_id);
        $order = Order::with('orderDetail','orderDetail.product')
            ->find($orderId);
        $siteSetting = SiteSetting::find(1);
        return view('print.invoice',compact('order','siteSetting'));
    }

    public function orderVendorInvoice($order_id){
        $orderId = decrypt($order_id);
        $order = OrderDetail::with('orderInfo','product')
            ->find($orderId);
        $siteSetting = SiteSetting::find(1);
        return view('print.vendor-invoice',compact('order','siteSetting'));
    }
}
