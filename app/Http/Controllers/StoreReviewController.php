<?php

namespace App\Http\Controllers;

use App\Model\StoreReview;
use App\Model\User;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\StoreReviewEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store_reviews = StoreReview::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $store_reviews->where("vendor_id","=",Auth::user()->id);
        }
        $store_reviews->orderBy("id");
        $store_reviews = $store_reviews->paginate(10);

        return view('backend.store-review.index',compact('store_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where("role_id","=",10)->get();

        return view('backend.store-review.create', compact('users'));
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
            "vendor_id" => "required|integer|min:1|max:11",
            "customer_name" => "required|min:2|max:255",
            "review" => "required|min:2|max:191",
            'email' => 'required|email|min:5|max:250',
            "rating" => "required|integer|min:1|max:20",
        ];

        $message = [
            "vendor_id.required" => "Vendor name is required.",
            "vendor_id.max" => "Vendor name may not be greater than 11 digits.",
            "vendor_id.min" => "Vendor name may not be lass than 1 digit.",
            "customer_name.required" => "Customer Name is required.",
            "customer_name.max" => "Customer may not be greater than 255 characters.",
            "customer_name.min" => "Customer may not be lass than 2 characters.",
            "review.required" => "Last name is required.",
            "review.max" => "Last name may not be greater than 500 characters.",
            "review.min" => "Last name may not be lass than 2 characters.",
            "email.required" => "Email is required.",
            "email.max" => "Email may not be greater than 255 characters.",
            "email.min" => "Email may not be lass than 5 characters.",
            "email.email" => "Email should be a valid email address.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $check_existing = StoreReview::where('vendor_id','=', $request->vendor_id)
                ->where('email','=', $request->email)
                ->get();

            if(count($check_existing)>0){
                $target = StoreReview::find($check_existing->id);
            }else{
                $target = new StoreReview();
            }

            $target->vendor_id     = $request->vendor_id;
            $target->customer_name = $request->customer_name;
            $target->email         = $request->email;
            $target->review        = $request->review;
            $target->rating        = $request->rating;
            $target->status        = $request->status;

            if ($target->save()) {
                $this->averaageReview($target->vendor_id);
                session()->flash("success", "Review successfully created");
                return redirect()->route('store-review.index');
            } else {
                session()->flash("error", "Review not created");
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
    public function show(StoreReview $storeReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreReview $storeReview)
    {
        $users = User::where("role_id","=",10)->get();
        return view("backend.store-review.edit",compact('users', 'storeReview'));
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
            "vendor_id" => "required|integer|min:1|max:11",
            "customer_name" => "required|min:2|max:255",
            "review" => "required|min:2|max:191",
            'email' => 'required|email|min:5|max:250',
            "rating" => "required|integer|min:1|max:20",
        ];

        $message = [
            "vendor_id.required" => "Vendor name is required.",
            "vendor_id.max" => "Vendor name may not be greater than 11 digits.",
            "vendor_id.min" => "Vendor name may not be lass than 1 digit.",
            "customer_name.required" => "Customer Name is required.",
            "customer_name.max" => "Customer may not be greater than 255 characters.",
            "customer_name.min" => "Customer may not be lass than 2 characters.",
            "review.required" => "Last name is required.",
            "review.max" => "Last name may not be greater than 500 characters.",
            "review.min" => "Last name may not be lass than 2 characters.",
            "email.required" => "Email is required.",
            "email.max" => "Email may not be greater than 255 characters.",
            "email.min" => "Email may not be lass than 5 characters.",
            "email.email" => "Email should be a valid email address.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $target = StoreReview::find($id);

            $target->vendor_id     = $request->vendor_id;
            $target->customer_name = $request->customer_name;
            $target->email         = $request->email;
            $target->review        = $request->review;
            $target->rating        = $request->rating;
            $target->status        = $request->status;

            if ($target->save()) {
                $this->averaageReview($target->vendor_id);
                session()->flash("success", "Review successfully updated");
                return redirect()->route('store-review.index');
            } else {
                session()->flash("error", "Review not created");
                return redirect()->back();
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreReview $storeReview)
    {
        if ($storeReview->delete()) {
            session()->flash("success", "Review deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Review not deleted");
            return redirect()->back();
        }
    }

    function averaageReview($vendor_id=null){
        $vendor_id = $vendor_id;
        $average_rating = StoreReview::where('vendor_id','=',$vendor_id)
                                        ->where('status','=',1)
                                        ->avg('rating');

        $target_up = User::find($vendor_id);
        $target_up->vendor_rating = $average_rating;
        $target_up->save();
    }

}
