<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Advertisement;
use Illuminate\Support\Facades\Validator;
use App\CustomClass\OwnLibrary;
use Intervention\Image\Facades\Image;

class AdvertisementController extends Controller
{
    //For Editing advertisement
    public function edit($option)
    {
        $advertisement = Advertisement::where('advertisement_option', $option)->first();
        return view('backend.advertisement.edit', compact('advertisement'));
    }



    public function update(Request $request, $id)
    {

        $uid = base64_decode($id);

        $rules = [
            'text'                => 'required',
            'button_text'         => 'required',
            'status'              => 'required',
            'url'                 => 'required'
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }

        $advertisement = Advertisement::find($uid);

        $advertisement->text               = $request->text ?? Null;
        $advertisement->highlighted_text   = $request->highlighted_text ?? Null;
        $advertisement->button_text        = $request->button_text ?? Null;
        $advertisement->status             = $request->status ?? 1;
        $advertisement->url                = $request->url ?? null;

        if ($request->hasFile('image')) {
            if (!empty($advertisement->image)) {
                @unlink($advertisement->image);
            }
            $advertisementFile = OwnLibrary::uploadFile($request->image, "advertisement");
            $advertisement->image = $advertisementFile;

            if ($advertisement->advertisement_option == 'promotion_offer_first' || $advertisement->advertisement_option == 'promotion_offer_second' || $advertisement->advertisement_option == 'promotion_offer_third'){
                Image::make($advertisementFile)->resize(91, 83)->save();
            }else{
                Image::make($advertisementFile)->resize(1170, 150)->save();
            }

        }

        if ($advertisement->save()) {
            session()->flash("success", "Advertisement Setting Updated");
            return redirect()->back();
        } else {
            session()->flash("error", "Advertisement Setting Not Updated");
            return redirect()->back()->withInput();
        }
    }
}
