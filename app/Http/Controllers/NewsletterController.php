<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'email'                    => 'required|email',
            ],
            [
                'email.required'   => 'Must put a valid email',
            ]
        );

        $newsletter         = new Newsletter();
        $newsletter->email  = $request->email;

        if ($newsletter->save()) {
            session()->flash("success", "Sign up to Newsletter Successful");
            return redirect()->back();
        } else {
            session()->flash("error", "Something Wrong!");
            return redirect()->back()->withInput();
        }
    }
}
