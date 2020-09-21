<?php

namespace App\Http\Controllers;

use App\Model\Navigation;
use App\Model\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Types\Null_;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navigation = Navigation::orderBy('serial')->paginate(20);
        return view('backend.navigation.index', compact('navigation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::where('status', '=', 1)->get();
        return view('backend.navigation.create', compact('pages'));
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
            "name"           => "required|unique:navigations",
            "position"       => "required",
            "type"           => "required",
            "serial"         => "required",
        ];

        if ($request->type == 1) {
            $rules['page'] =  'required';
        } else {
            $rules['custom_url'] =  'required';
        }

        if ($request->position == 3) {
            $rules['footer_position'] =  'required';
        }

        $message = [
            'type.required' => "Navigation type is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $navigation                     = new Navigation();
            $navigation->name               = $request->name;
            $navigation->position           = $request->position;
            $navigation->type               = $request->type;
            $navigation->type               = $request->type;
            $navigation->serial             = $request->serial;
            $navigation->meta_tag           = $request->meta_tag;
            $navigation->meta_description   = $request->meta_description;
            $navigation->footer_position    = $request->footer_position ?? null;

            if ($request->type == 1) {
                $navigation->url        = $request->page;
            } else {
                $navigation->url        = $request->custom_url;
            }

            if ($navigation->save()) {
                session()->flash("success", "Navigation successfully created");
                return redirect()->route("navigation.index");
            } else {
                session()->flash("error", "Navigation not created");
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Navigation $navigation)
    {
        $pages = Page::where('status', '=', 1)->get();
        return view('backend.navigation.edit', compact('pages', 'navigation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navigation $navigation)
    {

        $rules = [
            "name" =>  [
                'required',
                Rule::unique('navigations')->ignore($navigation->id)
            ],

            "position"       => "required",
            "type"           => "required",
            "serial"         => "required",
        ];

        if ($request->type == 1) {
            $rules['page'] =  'required';
        } else {
            $rules['custom_url'] =  'required';
        }

        if ($request->position == 3) {
            $rules['footer_position'] =  'required';
        }

        $message = [
            'type.required' => "Navigation type is required",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $navigation->name               = $request->name;
            $navigation->position           = $request->position;
            $navigation->type               = $request->type;
            $navigation->type               = $request->type;
            $navigation->serial             = $request->serial;
            $navigation->status             = $request->status;
            $navigation->meta_tag           = $request->meta_tag;
            $navigation->meta_description   = $request->meta_description;
            $navigation->footer_position    = $request->footer_position ?? null;


            if ($request->type == 1) {
                $navigation->url        = $request->page;
            } else {
                $navigation->url        = $request->custom_url;
            }

            if ($navigation->save()) {
                session()->flash("success", "Navigation successfully updated");
                return redirect()->route("navigation.index");
            } else {
                session()->flash("error", "Navigation not updated");
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navigation $navigation)
    {
        if ($navigation->delete()) {
            $navigation->deleted_by = auth()->id();
            $navigation->save();
            session()->flash('success', 'Navigation Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Navigation Not Delated');
            return redirect()->back();
        }
    }
}
