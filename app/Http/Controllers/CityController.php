<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\State;
use App\Model\Country;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\CitiesEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::join('states', 'states.id', '=', 'cities.state_id')
                        ->join('countries', 'countries.id', '=', 'states.country_id')
                        ->select("cities.*", "states.state_name", "countries.country_name");
        if(Auth::user()->role_id == 10){
            $cities->where("cities.vendor_id","=",Auth::user()->id);
        }
        $cities->orderBy("cities.id");
        $cities = $cities->paginate(10);
        return view('backend.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id==10){
            $states = State::where("vendor_id","=",Auth::id())->get();
        } else {
            $states = State::whereNull("vendor_id")->get();
        }
        return view('backend.city.create', compact('states'));
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
            'city_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('cities')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "state_id" => "required|integer|min:1|max:11",

        ];

        $message = [
            "city_name.required" => "The City Name is required.",
            "city_name.max" => "The City Name may not be greater than 255 characters.",
            "city_name.min" => "The City Name may not be lass than 2 characters.",
            "state_id.required" => "The State Name is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $result = event(new CitiesEvnt($data));

            if ($result) {
                session()->flash("success", "City successfully created");
                return redirect()->route('city.index');
            } else {
                session()->flash("error", "City not created");
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
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        if(Auth::user()->role_id==10){
            $states = State::where("vendor_id","=",Auth::id())->get();
        } else {
            $states = State::whereNull("vendor_id")->get();
        }
        return view("backend.city.edit",compact('city', 'states'));
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
            'city_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('cities')->ignore($id)->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "state_id" => "required|integer|min:1|max:11",

        ];

        $message = [
            "city_name.required" => "The City Name is required.",
            "city_name.max" => "The City Name may not be greater than 255 characters.",
            "city_name.min" => "The City Name may not be lass than 2 characters.",
            "state_id.required" => "The State Name is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'request' => $request,
                'id' => $id,
            ];
            $result = event(new CitiesEvnt($data));

            if($result){
                session()->flash('success','City updated');
                return redirect()->route('city.index');
            }else{
                session()->flash('error','City Not updated');
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
    public function destroy(City $city)
    {
        if ($city->delete()) {
            session()->flash("success", "City Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "City Not Deleted");
            return redirect()->back();
        }
    }

}
