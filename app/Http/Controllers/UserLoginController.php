<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use App\Model\User;

class UserLoginController extends Controller
{
    public function loginView()
    {
        return view('frontend.login.index');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate(
            [
                'login_email'                => 'email|required',
                'login_password'             => 'required',
            ],
            [
                'login_email.required'       => 'Enter a valid Email',
                'login_password.required'    => 'Enter Valid Password'
            ]
        );

        $user = array(
            'email'    => $request->login_email,
            'password' => $request->login_password,
            'status' => 1
        );

    

        $remember_me = $request->has('remember') ? true : false;

        if (Auth::attempt($user, $remember_me)) {
            if (auth()->user()->user_type != 4){
                return redirect()->route('backend.dashboard');
            }else{
                return redirect()->route('frontend.user.dashboard');
            }
        } else {
            Session::flash('error', 'Your username or password was incorrect.!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('user.login');
    }


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        //Got social media information

        $socialUser = Socialite::driver('facebook')->user();

        //If alrey register then find it by query

        $finduser = User::where('email', $socialUser->email)->first();

        //If condition for alredy registerv with social media

        if ($finduser) {

            Auth::login($finduser);
            return redirect()->route('user.index');

            //Else conditin for new user from socia media

        } else {

            $user                = new User;
            $user->name          = $socialUser->name;
            $user->email         = $socialUser->email;
            $user->user_type     = 4;
            $user->password      = bcrypt(123456);
            $user->save();

            Auth::login($user);
            return redirect()->route('user.index');
        }
    }


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderGoogleCallback()
    {

        //Got social media information

        $socialUser = Socialite::driver('google')->user();

        //If alrey register then find it by query

        $finduser = User::where('email', $socialUser->email)->first();

        //If condition for alredy registerv with social media

        if ($finduser) {

            Auth::login($finduser);
            return redirect()->route('user.index');

            //Else conditin for new user from socia media

        } else {

            $user                = new User;
            $user->name          = $socialUser->name;
            $user->email         = $socialUser->email;
            $user->user_type     = 4;
            $user->password      = bcrypt(123456);
            $user->save();

            Auth::login($user);
            return redirect()->route('user.index');
        }
    }
}
