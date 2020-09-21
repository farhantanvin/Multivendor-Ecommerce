<?php

namespace App\Http\Controllers;

use App\Model\Discount;
use App\Model\DiscountToUser;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\StoreDiscountEvnt;
use App\Events\UpdateDiscountEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $discounts->where("vendor_id","=",Auth::user()->id);
        }
        $discounts->orderBy("id");
        $discounts = $discounts->paginate(10);
        return view('backend.discount.index',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\Model\User::whereNotNull('id')->get();
        return view('backend.discount.create',compact('users'));
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
            "name" => "required|min:2|max:250",
            "description" => "required|min:2|max:1000",
            "coupon_type" => "required|min:2|max:25",
            "start_date" => "required|date|date_format:Y-m-d H:i",
            "expired_date" => "required|date|date_format:Y-m-d H:i|after:start_date",
            //"status" => "required|integer|min:1|max:4",
            'amount' => 'required|numeric|min:1|max:999999999',
            "validity_times" => "required|integer|min:1|max:11",
        ];

        if($request->coupon_type=='specific_user'){
            $rules["users.*"] = "required|min:1|max:11";
        }

        $message = [
            "name.required" => "The Name is required.",
            "name.max" => "The Name may not be greater than 250 characters.",
            "name.min" => "The Name may not be lass than 2 characters.",
            "coupon_type.required" => "The coupon type is required.",
            "coupon_type.max" => "The coupon type may not be greater than 25 characters.",
            "coupon_type.min" => "The coupon type may not be lass than 2 characters.",
            "description.required" => "Return policy is required.",
            "description.max" => "Return policy may not be greater than 1000 characters.",
            "description.min" => "Return policy may not be lass than 2 characters.",
            "status.required" => "Status is required.",
            "status.max" => "The Status not be greater than 11.",
            "status.min" => "The Status not be lass than 1.",
            'users.*.required' => ' The SKU is required.',
            "amount.required" => "Amount is required.",
            "amount.numeric" => "Amount should be numeric number.",
            "amount.max" => "Amount may not be greater than 50.",
            "amount.min" => "Amount may not be lass than 1.",
            "validity_times.required" => "Use time is required.",
            "validity_times.max" => "Use time may not be greater than 11.",
            "validity_times.min" => "Use time may not be lass than 1.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $result = event(new StoreDiscountEvnt($request));

            if ($result) {
                session()->flash("success", "Discount successfully created");
                return redirect()->route('discount.index');
            } else {
                session()->flash("error", "Discount not created");
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
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        $users = \App\Model\User::whereNotNull('id')->get();
        $selected_users = array();
        if($discount->coupon_type=='specific_user'){
            $selected_users = array_map("current", DiscountToUser::select('user_id')->where('discount_id','=',$discount->id)->get()->toArray());
        }
        return view("backend.discount.edit",compact('users','discount','selected_users'));
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
            "name" => "required|min:2|max:250",
            "description" => "required|min:2|max:1000",
            "coupon_type" => "required|min:2|max:25",
            "start_date" => "required|date|date_format:Y-m-d H:i",
            "expired_date" => "required|date|date_format:Y-m-d H:i|after:start_date",
            //"status" => "required|integer|min:1|max:4",
            'amount' => 'required|numeric|min:1|max:999999999',
            "validity_times" => "required|integer|min:1|max:11",
        ];

        if($request->coupon_type=='specific_user'){
            $rules["users.*"] = "required|min:1|max:11";
        }

        $message = [
            "name.required" => "The Name is required.",
            "name.max" => "The Name may not be greater than 250 characters.",
            "name.min" => "The Name may not be lass than 2 characters.",
            "coupon_type.required" => "The coupon type is required.",
            "coupon_type.max" => "The coupon type may not be greater than 25 characters.",
            "coupon_type.min" => "The coupon type may not be lass than 2 characters.",
            "description.required" => "Return policy is required.",
            "description.max" => "Return policy may not be greater than 1000 characters.",
            "description.min" => "Return policy may not be lass than 2 characters.",
            "status.required" => "Status is required.",
            "status.max" => "The Status not be greater than 11.",
            "status.min" => "The Status not be lass than 1.",
            'users.*.required' => ' The SKU is required.',
            "amount.required" => "Amount is required.",
            "amount.numeric" => "Amount should be numeric number.",
            "amount.max" => "Amount may not be greater than 50.",
            "amount.min" => "Amount may not be lass than 1.",
            "validity_times.required" => "Use time is required.",
            "validity_times.max" => "Use time may not be greater than 11.",
            "validity_times.min" => "Use time may not be lass than 1.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'data' => $request,
                'id' => $id,
            ];
            $result = event(new UpdateDiscountEvnt($data));

            if($result){
                session()->flash('success','Discount updated');
                return redirect()->route('discount.index');
            }else{
                session()->flash('error','Discount Not updated');
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
    public function destroy(Discount $discount)
    {
        if ($discount->delete()) {

            DiscountToUser::where('discount_id', $discount->id)->delete();

            session()->flash("success", "Discount Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Discount Not Deleted");
            return redirect()->back();
        }
    }

    public function getDiscountUserList(Request $request){
        $id = decrypt($request->id);

        $user_list = DiscountToUser::where("discount_id",'=',$id)->get();
        if($user_list){
            $html = '<ol>';
            $html .= '<div class="row">';
            foreach ($user_list as $k => $v) {
                $html .= '<div class="col-md-4">';
                $html .= '<li>'.$v->user->name.' ('.$v->coupon_used_times.')</li>';
                $html .= '</div>';
            }
            $html .= '</div>';
            $html .= '</ol>';

            return $html;
        }
    }
}
