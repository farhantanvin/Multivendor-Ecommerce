<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $pendingItemInOrder = OrderDetail::where('order_status','=',3)->count();
        $processingItemInOrder = OrderDetail::where('order_status','=',4)->count();
        $completeItemInOrder = OrderDetail::where('order_status','=',5)->count();
        $cancelItemInOrder = OrderDetail::where('order_status','=',1)->count();

        $data =[
            'pendingItemInOrder' => $pendingItemInOrder,
            'processingItemInOrder' => $processingItemInOrder,
            'completeItemInOrder' => $completeItemInOrder,
            'cancelItemInOrder' => $cancelItemInOrder,
        ];

        return view('backend.dashboard.index',$data);
    }
}
