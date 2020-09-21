<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\WishList;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function add($id){
        $findWishList = WishList::where('user_id','=',auth()->id())->where('product_id','=',$id)->first();
        if ($findWishList){
            session()->flash('error','Product already in your wishlist');
            return redirect()->back();
        }else{
            $config = [
                'table' => 'wish_lists',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            $wishList = new WishList();
            $wishList->id = IdGenerator::generate($config);
            $wishList->user_id = auth()->id();
            $wishList->product_id = $id;
            if ($wishList->save()){
                session()->flash('success','Product added to your wishlist');
                return redirect()->back();
            }else{
                session()->flash('error','Unable to add product to your wishlist');
                return redirect()->back();
            }
        }
    }

    public function remove($id){
        $findWishList = WishList::where('user_id','=',auth()->id())->where('id','=',$id)->first();
        if ($findWishList->delete()){
            session()->flash('success','Product deleted from your wishlist');
            return redirect()->back();
        }else{
            session()->flash('error','Unable to deete product from your wishlist');
            return redirect()->back();
        }
    }
}
