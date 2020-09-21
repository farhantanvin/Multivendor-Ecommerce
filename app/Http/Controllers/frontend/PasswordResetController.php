<?php

namespace App\Http\Controllers\frontend;

use App\Model\User;
use App\Model\SiteSetting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    public function passwordResetView()
    {
        return view('frontend.login.password-reset');
    }

    public function sendMail(Request $request)
    {

        $rules = ['email' => 'required|exists:users,email'];

        $message = [];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = User::where('email', '=', $request->email)->first();

            if ($user->role_id != 0) {
                session()->flash('error', "You can't reset password");
                return redirect()->back()->withInput();
            }

            $token =  Str::random(20);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $tokenData = DB::table('password_resets')
                ->where('token', $token)->first();

            $setting = SiteSetting::find(1);

            $data = [
                'user' => $user,
                'tokenData' => $tokenData,
                'setting' => $setting
            ];



            Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\ForgotPassword($data));
            session()->flash('success', 'We have send reset link to your email address');
            return redirect()->back();
        }
    }

    public function resetForm($token)
    {
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        if (!$tokenData) {
            session()->flash('error', 'Invalid token. Please try again');
            return redirect()->route('front.forgot.password.view');
        } else {
            $currentTime = strtotime(Carbon::now());
            $tokenTime = strtotime($tokenData->created_at);

            $timeDifference = round(abs($currentTime - $tokenTime) / 60);

            if ($timeDifference > 60) {

                session()->flash('error', 'Token expaire. Please try again');
                return redirect()->route('front.forgot.password.view');
            } else {
                return view('frontend.login.password-reset-entry', compact('token'));
            }
        }
    }

    public function newPassword(Request $request)
    {
        $rules = [
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password|min:5',
        ];

        $message = [
            'role_id.required' => 'Role is required',
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        } else {
            $tokenData = DB::table('password_resets')
                ->where('token', $request->reset_token)->first();
            if (!$tokenData) {
                session()->flash('error', 'Invalid token. Please try again');
                return redirect()->route('front.forgot.password.view');
            } else {
                $currentTime = strtotime(Carbon::now());
                $tokenTime = strtotime($tokenData->created_at);

                $timeDifference = round(abs($currentTime - $tokenTime) / 60);

                if ($timeDifference > 60) {
                    session()->flash('error', 'Token expaire. Please try again');
                    return redirect()->route('front.forgot.password.view');
                } else {
                    $user = User::where('email', '=', $tokenData->email)->first();

                    $user->password = Hash::make($request->password);
                    if ($user->save()) {
                        session()->flash('success', 'Password Changed Successfully');
                        return redirect()->route('user.login');
                    } else {
                        session()->flash('error', 'Password Not Changed');
                        return redirect()->back();
                    }
                }
            }
        }
    }
}
