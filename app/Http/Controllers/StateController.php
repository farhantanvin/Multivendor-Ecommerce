<?php

namespace App\Http\Controllers;

use App\Model\State;
use App\Model\Country;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\StatesEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $states->where("vendor_id","=",Auth::user()->id);
        }
        $states->orderBy("id");
        $states = $states->paginate(10);
        return view('backend.state.index',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id==10){
            $countries = Country::where("vendor_id","=",Auth::id())->get();
        } else {
            $countries = Country::whereNUll("vendor_id")->get();
        }

        return view('backend.state.create', compact('countries'));
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
            'state_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('states')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "country_id" => "required|integer|min:1|max:11",

        ];

        $message = [
            "state_name.required" => "The State Name is required.",
            "state_name.max" => "The State Name may not be greater than 255 characters.",
            "state_name.min" => "The State Name may not be lass than 2 characters.",
            "country_id.required" => "The Country Name is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $result = event(new StatesEvnt($data));

            if ($result) {
                session()->flash("success", "State successfully created");
                return redirect()->route('state.index');
            } else {
                session()->flash("error", "State not created");
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
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        if(Auth::user()->role_id==10){
            $countries = Country::where("vendor_id","=",Auth::id())->get();
        } else {
            $countries = Country::whereNUll("vendor_id")->get();
        }

        return view("backend.state.edit",compact('state', 'countries'));
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
            'state_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('states')->ignore($id)->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "country_id" => "required|integer|min:1|max:11",

        ];

        $message = [
            "state_name.required" => "The State Name is required.",
            "state_name.max" => "The State Name may not be greater than 255 characters.",
            "state_name.min" => "The State Name may not be lass than 2 characters.",
            "country_id.required" => "The Country Name is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'request' => $request,
                'id' => $id,
            ];
            $result = event(new StatesEvnt($data));

            if($result){
                session()->flash('success','State updated');
                return redirect()->route('state.index');
            }else{
                session()->flash('error','State Not updated');
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
    public function destroy(State $state)
    {
        if ($state->delete()) {
            session()->flash("success", "State Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "State Not Deleted");
            return redirect()->back();
        }
    }

}
