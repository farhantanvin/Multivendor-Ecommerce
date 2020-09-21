<?php

namespace App\Http\Controllers;

use App\Model\EmailConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $emailConfigurations = EmailConfiguration::orderBy('created_at')->paginate(21);
        return view('backend.email-configuration.index',compact('emailConfigurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emailConfiguration = new EmailConfiguration();
        return view('backend.email-configuration.create',compact('emailConfiguration'));
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
            "configuration_name" => "required|max:30",
            "mail_engine" => "required|max:30",
            "mail_host" => "required|max:100",
            "mail_port" => "required|max:10",
            "encryption" => "required|max:20",
            "username" => "required|max:30",
            "password" => "required|max:50",
            "from_email" => "required",
            "from_name" => "required",
            "status" => "required"
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $emailConfiguration = new EmailConfiguration();
            $emailConfiguration->configuration_name = $request->configuration_name;
            $emailConfiguration->mail_engine = $request->mail_engine;
            $emailConfiguration->mail_host = $request->mail_host;
            $emailConfiguration->mail_port = $request->mail_port;
            $emailConfiguration->encryption = $request->encryption;
            $emailConfiguration->username = $request->username;
            $emailConfiguration->password = $request->password;
            $emailConfiguration->from_email = $request->from_email;
            $emailConfiguration->from_name = $request->from_name;
            $emailConfiguration->status = $request->status;

            if ($emailConfiguration->save()){
                session()->flash('success','Email configuration information saved');
                return redirect('email-configuration');
            }else{
                session()->flash('error','Email configuration information not saved');
                return redirect()->back()->withInput();
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function show(EmailConfiguration $emailConfiguration)
    {
        return view('backend.email-configuration.show',compact('emailConfiguration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailConfiguration $emailConfiguration)
    {
        return view('backend.email-configuration.edit',compact('emailConfiguration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailConfiguration $emailConfiguration)
    {
        $rules = [
            "configuration_name" => "required|max:30",
            "mail_engine" => "required|max:30",
            "mail_host" => "required|max:100",
            "mail_port" => "required|max:10",
            "encryption" => "required|max:20",
            "username" => "required|max:30",
            "password" => "required|max:50",
            "from_email" => "required",
            "from_name" => "required",
            "status" => "required"
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $emailConfiguration->configuration_name = $request->configuration_name;
            $emailConfiguration->mail_engine = $request->mail_engine;
            $emailConfiguration->mail_host = $request->mail_host;
            $emailConfiguration->mail_port = $request->mail_port;
            $emailConfiguration->encryption = $request->encryption;
            $emailConfiguration->username = $request->username;
            $emailConfiguration->password = $request->password;
            $emailConfiguration->from_email = $request->from_email;
            $emailConfiguration->from_name = $request->from_name;
            $emailConfiguration->status = $request->status;

            if ($emailConfiguration->save()){
                session()->flash('success','Email configuration information updated');
                return redirect('email-configuration');
            }else{
                session()->flash('error','Email configuration information not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentGateway  $paymentGateway
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailConfiguration $emailConfiguration)
    {
        if ($emailConfiguration->delete()){
            session()->flash('success','Email Configuration Deleted');
            return redirect('email-configuration');
        }else{
            session()->flash('error','Email Configuration Not Deleted');
            return redirect('email-configuration');
        }
    }
}
