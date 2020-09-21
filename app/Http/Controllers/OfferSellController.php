<?php

namespace App\Http\Controllers;

use App\Model\OfferSell;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Offer;

class OfferSellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offerSale = OfferSell::with('product', 'offer')->orderBy("id")->paginate(20);
        return view('backend.offer-sale.index', compact('offerSale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::where('status', 1)->get();
        $offer   = Offer::where('status', 1)->get();
        return view('backend.offer-sale.create', compact('product', 'offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'offer_id'             => 'required',
                'product_id'           => 'required',

            ],
            [
                'offer_id.required'     => 'Select Offer required',
                'product_id.required'   => 'Select product required',

            ]
        );

        $offerSale = new OfferSell();
        $offerSale->product_id = $request->product_id;
        $offerSale->offer_id = $request->offer_id;

        if ($offerSale->save()) {
            session()->flash("success", "successfully created");
            return redirect()->route('offer-sale.index');
        } else {
            session()->flash("error", "Not created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\OfferSell  $offerSell
     * @return \Illuminate\Http\Response
     */
    public function show(OfferSell $offerSell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OfferSell  $offerSell
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $offerSell = OfferSell::find($id);
        $product   = Product::where('status', 1)->get();
        $offer   = Offer::where('status', 1)->get();
        return view('backend.offer-sale.edit', compact('product', 'offerSell', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OfferSell  $offerSell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'offer_id'             => 'required',
                'product_id'           => 'required',

            ],
            [
                'offer_id.required'     => 'Select Offer required',
                'product_id.required'   => 'Select product required',

            ]
        );

        $offerSell             = OfferSell::find($id);
        $offerSell->product_id = $request->product_id;
        $offerSell->offer_id   = $request->offer_id;
        $offerSell->status     = $request->status;

        if ($offerSell->save()) {
            session()->flash("success", "Updated");
            return redirect()->route("offer-sale.index");
        } else {
            session()->flash("error", "Not Updated");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OfferSell  $offerSell
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offerSale = OfferSell::find($id);
        if ($offerSale->delete()) {
            session()->flash('success', 'Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
