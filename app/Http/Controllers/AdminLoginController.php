<?php

namespace App\Http\Controllers;

use App\Model\ModuleToUser;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function loginView(){
        return view('backend.login');
    }

    public function loginSubmit(Request $request){

        $rules =[
            'email' => 'email|required',
            'password' => 'required'
        ];
        $message = [];

        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput($request->except('password'));
        }

        $user = array(
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        );

        $remember_me = $request->has('remember') ? true : false;

        if (Auth::attempt($user,$remember_me)) {
            $dataArr = ModuleToUser::where('user_id', Auth::user()->id)->get();

            $accessArr = array();
            if (!empty($dataArr)) {
                foreach ($dataArr as $item) {
                    $accessArr[$item->module_id][$item->activity_id] = $item->activity_id;
                }
            }

            User::where('id',auth()->id())->update(['lastLoginTime' => Carbon::now()]);

            Session::put('acl', $accessArr);
            return Redirect::to('/dashboard');
        } else {
            Session::flash('error', 'Your username or password was incorrect.!');
            return redirect()->back()->withInput($request->except('password'));
        }
    }

    public function logout(){

        $isAdmin = 0;

        if (Auth::user()->user_type == 2){
            $isAdmin =1;
        }
        Auth::logout();
        Session::flush();
        if ($isAdmin == 0){
        return Redirect::route('admin.login');
        }else{
            return Redirect::route('user.logout');
        }
    }
}
