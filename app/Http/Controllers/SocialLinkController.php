<?php

namespace App\Http\Controllers;

use App\Model\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function edit()
    {

        $socialLink = SocialLink::find(1);
        return view('backend.social-link.edit', compact('socialLink'));
    }

    public function update(Request $request)
    {

        $socialLink = SocialLink::find(1);

        $socialLink->fb_link         = $request->fb_link ?? Null;
        $socialLink->twetter_link    = $request->twetter_link ?? Null;
        $socialLink->instagram_link  = $request->instagram_link ?? Null;
        $socialLink->pintarest_link  = $request->pintarest_link ?? Null;
        $socialLink->linkedin_link   = $request->linkedin_link ?? Null;

        if ($socialLink->save()) {
            session()->flash("success", "Social Link Updated");
            return redirect()->route("social.link.edit");
        } else {
            session()->flash("error", "Social Link Not Updated");
            return redirect()->back()->withInput();
        }
    }
}
