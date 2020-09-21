<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Product\ProductReview;
use App\CustomClass\OwnLibrary;
use App\Model\Product\ProductComments;

class ProductDetailController extends Controller
{
    public function index($slug)
    {

        $productDetail     = Product::with('category', 'vendor', 'brand', 'user', 'gallery')->where('slug', $slug)->first();
        $moreProductShop   = Product::where('vendor_id', $productDetail->vendor_id)->where('id', '!=', $productDetail->id)->limit(3)->get();
        $productReview     = ProductReview::with('user')->where('product_id', $productDetail->id)->where('status', 1)->paginate(2);
        $reletedProduct    = Product::with('category', 'vendor', 'brand', 'user')->where('id', '!=', $productDetail->id)->orWhere('category_id', $productDetail->category_id)->orWhere('subcategory_id', $productDetail->subcategory_id)->get();
        $countReview       = ProductReview::where('status', '1')->where('product_id', $productDetail->id)->count();
        $productComments   = ProductComments::with('user', 'reply')->where('product_id', $productDetail->id)->where('reply_for_id', '=', null)->where('status', 1)->paginate(2);

        return view('frontend.product.product-details', compact('productDetail', 'moreProductShop', 'reletedProduct', 'productReview', 'countReview', 'productComments'));
    }

    public function productReviewStore(Request $request)

    {

        $request->validate(
            [
                'review'              => 'required',
            ],
            [
                'review.required'     => 'write something about product',
            ]
        );


        $image    = "";

        if ($request->review_image) {
            $image = OwnLibrary::uploadFile($request->review_image, "product-review-image");
        }



        $productReview                   = new ProductReview();
        $productReview->product_id       = $request->product_id;
        $productReview->user_id          = $request->user_id;
        $productReview->review           = $request->review;
        $productReview->review_image     = $image ?? null;
        $productReview->rating           = $request->rating ?? 0;
        $productReview->vendor_id        = $request->vendor_id ?? null;
        $productReview->status           = 0;


        if ($productReview->save()) {
            session()->flash("success", "Succesful Review");
            return redirect()->back();
        } else {
            session()->flash("error", "Review failed");
            return redirect()->back();
        }
    }


    public function productCommentStore(Request $request)
    {

        $request->validate(
            [
                'comments'              => 'required',
            ],
            [
                'comments.required'      => 'write question about this product',
            ]
        );

        $productComments                   = new ProductComments();
        $productComments->product_id       = $request->product_id;
        $productComments->user_id          = $request->user_id;
        $productComments->comments         = $request->comments;
        $productComments->vendor_id        = $request->vendor_id ?? null;
        $productComments->status           = 0;


        if ($productComments->save()) {
            session()->flash("success", "Succesful");
            return redirect()->back();
        } else {
            session()->flash("error", "Failed");
            return redirect()->back();
        }
    }
}
