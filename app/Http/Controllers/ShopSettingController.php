<?php

namespace App\Http\Controllers;

use App\Model\ShopSetting;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\ShopSettingEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ShopSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_settings = ShopSetting::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $shop_settings->where("vendor_id","=",Auth::user()->id);
        }
        $shop_settings->orderBy("id");
        $shop_settings = $shop_settings->paginate(10);
        return view('backend.shop-setting.index',compact('shop_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shop-setting.create');
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
            "logo" => "required|mimes:jpeg,jpg,png|max:1024",
            "banner" => "required|mimes:jpeg,jpg,png|max:1024",
        ];

        $message = [

        ];
        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $check_existing = ShopSetting::where('vendor_id','=',Auth::user()->id)->count();
            if($check_existing>0){
                session()->flash("error", "Shop already created");
                return redirect()->back();
            }

            $data = [
                'request' => $request,
                'id' => null,
            ];
            $result = event(new ShopSettingEvnt($data));

            if ($result) {
                session()->flash("success", "Shop setting successfully created");
                return redirect()->route('shop-setting.index');
            } else {
                session()->flash("error", "Shop setting not created");
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
    public function edit(ShopSetting $shopSetting)
    {
        return view("backend.shop-setting.edit",compact('shopSetting'));
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
            "logo" => "required|mimes:jpeg,jpg,png",
            "banner" => "required|mimes:jpeg,jpg,png",
        ];

        $message = [

        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $shopSetting = ShopSetting::find($id);

            if (!$shopSetting){
                $shopSetting = new ShopSetting();
                $shopSetting->vendor_id = auth()->id();
            }
            if ($request->logo) {
                if (!empty($shopSetting->logo)){
                    @unlink($shopSetting->logo);
                }
                $shopLogo = OwnLibrary::uploadFile($request->logo, "shop-logo");
                $shopSetting->logo = $shopLogo;
            }

            if ($request->banner) {
                if (!empty($shopSetting->banner)){
                    @unlink($shopSetting->banner);
                }
                $shopBanner = OwnLibrary::uploadFile($request->banner, "shop-logo");
                $shopSetting->banner = $shopBanner;
            }

            $shopSetting->status = $request->status;

            if($shopSetting->save()){
                session()->flash('success','Shop setting updated');
                return redirect()->back();
            }else{
                session()->flash('error','Shop setting Not updated');
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
    public function destroy(ShopSetting $shopSetting)
    {
        if ($shopSetting->delete()) {
            session()->flash("success", "Shop setting Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Shop setting Not Deleted");
            return redirect()->back();
        }
    }

    public function showLogoBanner($action=null, $id=null){
        $target = ShopSetting::find($id);
        if($target){
            if($action=='logo'){
                return response()->file($target->logo);
            }
            elseif($action=='banner'){
                return response()->file($target->banner);
            }
        }else{
            dd("Nothing to show.");
        }
    }

    public function vendor(){
        $shopSetting = ShopSetting::where('vendor_id','=',auth()->id())->first();
        return view("backend.shop-setting.edit",compact('shopSetting'));
    }
}
