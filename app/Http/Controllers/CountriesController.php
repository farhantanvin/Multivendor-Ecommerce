<?php

namespace App\Http\Controllers;

use App\Model\Country;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\CountriesEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $countries->where("vendor_id","=",Auth::user()->id);
        }
        $countries->orderBy("id");
        $countries = $countries->paginate(10);
        return view('backend.countires.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.countires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'country_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('countries')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
        ];

        $message = [
            "country_name.required" => "The Country Name is required.",
            "country_name.max" => "The Country Name may not be greater than 255 characters.",
            "country_name.min" => "The Country Name may not be lass than 2 characters.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $result = event(new CountriesEvnt($data));

            if ($result) {
                session()->flash("success", "Country successfully created");
                return redirect()->route('countries.index');
            } else {
                session()->flash("error", "Country not created");
                return redirect()->back();
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view("backend.countires.edit",compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'country_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('countries')->ignore($id)->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
        ];

        $message = [
            "country_name.required" => "The Country Name is required.",
            "country_name.max" => "The Country Name may not be greater than 255 characters.",
            "country_name.min" => "The Country Name may not be lass than 2 characters.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'request' => $request,
                'id' => $id,
            ];
            $result = event(new CountriesEvnt($data));

            if($result){
                session()->flash('success','Country updated');
                return redirect()->route('countries.index');
            }else{
                session()->flash('error','Country Not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if ($country->delete()) {
            session()->flash("success", "Country Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Country Not Deleted");
            return redirect()->back();
        }
    }

}
