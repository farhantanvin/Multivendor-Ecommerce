<?php

namespace App\Http\Controllers;

use App\Model\TranslationLanguage;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\TranslationLanguageEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class TranslationLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translation_languages = TranslationLanguage::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $translation_languages->where("vendor_id","=",Auth::user()->id);
        }
        $translation_languages = $translation_languages->orderBy("id")->paginate(20);
        return view('backend.translation-language.index',compact('translation_languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.translation-language.create');
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
            'language_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('translation_languages')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
        ];

        $message = [
            "language_name.required" => "The Language Name is required.",
            "language_name.max" => "The Language Name may not be greater than 255 characters.",
            "language_name.min" => "The Language Name may not be lass than 2 characters.",
        ];
        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];

            $result = event(new TranslationLanguageEvnt($data));

            if ($result) {
                session()->flash("success", "Language successfully created");
                return redirect()->route('translation-language.index');
            } else {
                session()->flash("error", "Language not created");
                return redirect()->back();
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(TranslationLanguage $translationLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(TranslationLanguage $translationLanguage)
    {
        return view("backend.translation-language.edit",compact('translationLanguage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'language_name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('translation_languages')->ignore($id)->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
        ];

        $message = [
            "language_name.required" => "The Language Name is required.",
            "language_name.max" => "The Language Name may not be greater than 255 characters.",
            "language_name.min" => "The Language Name may not be lass than 2 characters.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
            $data = [
                'request' => $request,
                'id' => $id,
            ];

            $result = event(new TranslationLanguageEvnt($data));

            if ($result) {
                session()->flash("success", "Language successfully updated");
                return redirect()->route('translation-language.index');
            } else {
                session()->flash("error", "Language not updated");
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(TranslationLanguage $translationLanguage)
    {
        if ($translationLanguage->delete()) {
            session()->flash("success", "Language Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Language Not Deleted");
            return redirect()->back();
        }
    }

}
