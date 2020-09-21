<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product\ProductReview;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;

class ReviewApprovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingProductReview      = ProductReview::with('user', 'product');

        if (Auth::user()->user_type == 2) {
            $pendingProductReview  = $pendingProductReview->where('vendor_id', '=', Auth::user()->id);
        }

        $pendingProductReview = $pendingProductReview->where('status', 0)->paginate(20);

        return view('backend.product-review-approved.index', compact('pendingProductReview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //upadate product review table
        $pendingProductReview         = ProductReview::find($id);
        $pendingProductReview->status = 1;

        //update and calculate product review average and store
        $product            = Product::where('id', '=', $pendingProductReview->product_id)->first();

        if (empty($product->rating)) {
            $averageRating = $pendingProductReview->rating;
        } else {
            $averageRating = ($product->rating + $pendingProductReview->rating) / 2;
        }

        $product->rating  = $averageRating;

        if ($pendingProductReview->save() && $product->save()) {
            session()->flash('success', 'Review Approved');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendingProductReview = ProductReview::find($id);

        if ($pendingProductReview->delete()) {
            session()->flash('success', 'Review Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
