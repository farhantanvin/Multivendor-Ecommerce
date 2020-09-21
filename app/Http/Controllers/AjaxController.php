<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\ProductVarient;
use App\Model\State;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function subCategory(Request $request){

        $subcategories = Category::select('id','category_name')->orderBy('category_name')->where('status','=',1)->where('parent_id','=',$request->category_id)->get();
        return response()->json($subcategories);
    }

    public function state(Request $request){
        $states = State::select('id','state_name')->orderBy('state_name')->where('country_id','=',$request->id)->where('status','=',1)->get();
        return response()->json($states);
    }

    public function changeOrderStatus(Request $request){
        $orderDetail = OrderDetail::find($request->orderDetailId);
        $orderDetail->order_status = $request->orderStatus;

        if ($request->orderStatus == 5){

            $product = Product::find($orderDetail->product_id);
            $product->quantity = $product->quantity - $orderDetail->quantity;
            $product->save();

            $productVarient = ProductVarient::find($orderDetail->product_varient_id);
            $productVarient->product_quantity = $productVarient->product_quantity - $orderDetail->quantity;
            $productVarient->save();
        }
        if ($orderDetail->save()){
            return response()->json(1);
        }else{
            return response()->json(2);
        }
    }

}
