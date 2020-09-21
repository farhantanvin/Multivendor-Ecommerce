<?php

namespace App\Http\Controllers;

use App\Model\HomeSetup;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeSetupController extends Controller
{

    public function edit()
    {
        $category = Category::all();
        $homeSetup = HomeSetup::where('option_name', '=', 'selected_category')->first();
        return view('backend.home-page-setup.edit', compact('homeSetup', 'category'));
    }



    public function update(Request $request, $id)
    {

        $uid = base64_decode($id);
        $rules = [

            'option_value'        => 'required',
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }

        $homeSetup = HomeSetup::find($uid);

        $homeSetup->option_value               = $request->option_value ?? Null;



        if ($homeSetup->save()) {
            session()->flash("success", "Category Selected");
            return redirect()->back();
        } else {
            session()->flash("error", "Error!");
            return redirect()->back()->withInput();
        }
    }
}
