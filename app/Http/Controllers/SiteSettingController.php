<?php

namespace App\Http\Controllers;

use App\Model\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CustomClass\OwnLibrary;

class SiteSettingController extends Controller
{

    public function edit()
    {

        $setting = SiteSetting::find(1);
        return view('backend.site-setting.edit', compact('setting'));
    }

    public function update(Request $request)
    {


        $rules = [
            'name'          => 'required',
            'copyright'     => 'required',
            'email'         => 'required',
            'phone_number'  => 'required',
            'address'       => 'required',
            'icon'          => 'image',
            'logo'          => 'image',
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }

        $setting = SiteSetting::find(1);

        $setting->name         = $request->name ?? Null;
        $setting->email        = $request->email ?? Null;
        $setting->phone_number = $request->phone_number ?? Null;
        $setting->address      = $request->address ?? Null;
        $setting->slogan       = $request->slogan ?? Null;
        $setting->copyright    = $request->copyright ?? Null;


        if ($request->hasFile('icon')) {
            if (!empty($setting->icon)) {
                @unlink($setting->icon);
            }
            $setting->icon =
                OwnLibrary::uploadFile($request->icon, "site-setting'");
        }

        if ($request->hasFile('logo')) {
            if (!empty($setting->logo)) {
                @unlink($setting->logo);
            }
            $setting->logo = OwnLibrary::uploadFile($request->logo, 'site-setting');
        }

        if ($setting->save()) {
            session()->flash("success", "Site Setting Updated");
            return redirect()->route("site.setting.edit");
        } else {
            session()->flash("error", "Site Setting Not Updated");
            return redirect()->back()->withInput();
        }
    }
}
