<?php

namespace App\Http\Controllers;

use App\Model\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{

    public function index()
    {
        $offer = Offer::orderBy("id")->paginate(20);
        return view('backend.offer.index', compact('offer'));
    }


    public function create()
    {
        return view('backend.offer.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'offer_name'          => 'required',
            'offer_amount'        => 'required',
            'start_date'          => 'required',
            'end_date'            => 'required',
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }

        $offer = new Offer();

        $offer->offer_name         = $request->offer_name  ?? 0;
        $offer->offer_amount       = $request->offer_amount  ?? 0;
        $offer->start_date         = $request->start_date  ?? Null;
        $offer->end_date           = $request->end_date  ?? Null;
        $offer->status             = $request->status ?? 1;

        if ($offer->save()) {
            session()->flash("success", "Offer Created");
            return redirect()->route('offer.index');
        } else {
            session()->flash("error", "Offer Not Created");
            return redirect()->back()->withInput();
        }
    }


    public function edit()
    {

        $offer = Offer::find(1);
        return view('backend.offer.edit', compact('offer'));
    }



    public function update(Request $request, $id)
    {

        $rules = [
            'offer_name'          => 'required',
            'offer_amount'        => 'required',
            'start_date'          => 'required',
            'end_date'            => 'required',
        ];
        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }

        $offer = Offer::find($id);

        $offer->offer_name         = $request->offer_name  ?? 0;
        $offer->offer_amount       = $request->offer_amount  ?? 0;
        $offer->start_date         = $request->start_date  ?? Null;
        $offer->end_date           = $request->end_date  ?? Null;
        $offer->status             = $request->status ?? 1;



        if ($offer->save()) {
            session()->flash("success", "Offer Updated");
            return redirect()->route('offer.index');
        } else {
            session()->flash("error", "Offer Not Updated");
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        $offer = Offer::find($id);
        if ($offer->delete()) {
            session()->flash('success', 'Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
