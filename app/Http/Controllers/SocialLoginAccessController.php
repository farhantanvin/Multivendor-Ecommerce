<?php

namespace App\Http\Controllers;

use App\Model\SocialLoginAccess;
use Illuminate\Http\Request;

class SocialLoginAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialLoginAccess = SocialLoginAccess::with('createdBy')->orderBy("id")->get();
        return view('backend.social-login.index', compact("socialLoginAccess"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.social-login.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'platform_name'             => 'required|unique:social_login_accesses',
                'client_id'                 => 'required',
                'client_secret'             => 'required',
                'redirect_url'              => 'required',
            ],
            [
                'platform_name.required'    => 'Platform name required',
                'platform_name.unique'      => 'Alredy set for this platfrom',
                'client_id.required'        => 'Valid Client Id required',
                'client_secret.required'    => 'Client Secret required',
                'redirect_url.required'     => 'Valid Redirect Url required',
            ]
        );

        $socialLoginAccess = new SocialLoginAccess();

        $socialLoginAccess->platform_name           =  $request->platform_name;
        $socialLoginAccess->client_id               =  $request->client_id;
        $socialLoginAccess->client_secret           =  $request->client_secret;
        $socialLoginAccess->redirect_url            =  $request->redirect_url;


        if ($socialLoginAccess->save()) {
            session()->flash("success", "Social Login Access successfully created");
            return redirect()->route('social-login-access.index');
        } else {
            session()->flash("error", "Social Login Access not created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SocialLoginAccess  $socialLoginAccess
     * @return \Illuminate\Http\Response
     */
    public function show(SocialLoginAccess $socialLoginAccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SocialLoginAccess  $socialLoginAccess
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialLoginAccess $socialLoginAccess)
    {
        return view('backend.social-login.edit', compact('socialLoginAccess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SocialLoginAccess  $socialLoginAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialLoginAccess $socialLoginAccess)
    {
        $request->validate(
            [
                'platform_name'             => 'required',
                'client_id'                 => 'required',
                'client_secret'             => 'required',
                'redirect_url'              => 'required',
            ],
            [
                'platform_name.required'    => 'Platform name required',
                'client_id.required'        => 'Valid Client Id required',
                'client_secret.required'    => 'Client Secret required',
                'redirect_url.required'     => 'Valid Redirect Url required',
            ]
        );

        $socialLoginAccess->platform_name           =  $request->platform_name;
        $socialLoginAccess->client_id               =  $request->client_id;
        $socialLoginAccess->client_secret           =  $request->client_secret;
        $socialLoginAccess->redirect_url            =  $request->redirect_url;
        $socialLoginAccess->status                  =  $request->status;

        if ($socialLoginAccess->save()) {
            session()->flash("success", "Social Login Access successfully Upadte");
            return redirect()->route('social-login-access.index');
        } else {
            session()->flash("error", "Social Login Access not upadated");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SocialLoginAccess  $socialLoginAccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLoginAccess $socialLoginAccess)
    {
        if ($socialLoginAccess->delete()) {
            session()->flash('success', 'Social Login Access Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
