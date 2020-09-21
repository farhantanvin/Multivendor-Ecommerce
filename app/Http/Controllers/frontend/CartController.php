<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\ProductVarient;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(){
        $products = Product::with('category')->where('status','=',1)->inRandomOrder()->limit(5)->get();
        return view('frontend.checkout.cart',compact('products'));
    }

    public function cartAdd(Request $request){

        $items = Cart::content();

        $checkCart = 0;

        foreach ($items as $item)
        {
            if($item->id == $request->id)
            {
                Cart::update($item->rowId, $item->qty+$request->quantity);
                $checkCart = 1;
            }
        }


        if ($checkCart == 0){
            $product = Product::find($request->id);
            $varient = ProductVarient::find($request->varient_id);

            $sellPrice = '';
            $regularPrice = '';
            $deliveryCharge = '';

            if (!empty($product->regular_price)){
                $price = $product->sell_price;
                $regularPrice = $product->regular_price;
            }else{
                $price = $varient->product_price;
                $regularPrice = 0;
            }

            if ($product->free_shipping == 0){
                $deliveryCharge = $product->delivery_charge;
            }else{
                $deliveryCharge = 0;
            }

            Cart::add([
                'id' => $request->id,
                'name' => $product->product_name,
                'qty' => $request->quantity,
                'price' => $price,
                'weight' => 0,
                'options' => [
                    'product_varient_id' => $request->varient_id,
                    'product_varient' => ($varient->product_varient != null) ? '|'.$varient->product_varient : '',
                    'image_url' => $product->product_image,
                    'vendor_id' => $product->vendor_id ?? 0,
                    'regular_price' => $regularPrice,
                    'delivery' => $deliveryCharge,
                    'price_plus_delivery' => $price + $deliveryCharge,
                    'slug' => $product->slug
                ],
                'taxRate' => $product->vat,
            ]);
        }
        return view('frontend.ajax.minicart');
    }

    public function cartGet(){
        return view('frontend.ajax.minicart');
    }

    public function removeCart($rowId){
        Cart::remove($rowId);
        return view('frontend.ajax.minicart');
    }

    public function mainCartGet(){
        return view('frontend.ajax.maincart');
    }

    public function updateMainCart(Request $request){
        Cart::update($request->rowId, $request->quantity);
        return view('frontend.ajax.maincart');
    }

    public function removeMainCart($rowId){
        Cart::remove($rowId);
        return view('frontend.ajax.maincart');
    }
}
