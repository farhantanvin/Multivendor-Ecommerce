<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pages = Page::orderBy('title')->paginate(20);
        return view('backend.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.page.create');
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
            "title" => "required|unique:pages",
            "description" => "required",
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $page = new Page();

            $page->title        = $request->title;
            $page->slug        = Str::slug($request->title . '-' . rand(10, 99));
            $page->description = $request->description;

            if ($page->save()) {
                session()->flash("success", "Data successfully created");
                return redirect()->route("pages.index");
            } else {
                session()->flash("error", "Data not created");
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {

        return view('backend.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {

        $rules = [
            "title" => [
                'required',
                Rule::unique('pages')->ignore($page->id)
            ],
            "description" => "required",
        ];

        $message = [];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $page->title        = $request->title;
            $page->description = $request->description;
            $page->status = $request->status;

            if ($page->save()) {
                session()->flash("success", "Data successfully updated");
                return redirect()->route("pages.index");
            } else {
                session()->flash("error", "Data not updated");
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {

        if ($page->delete()) {
            session()->flash('success', 'Page Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Page Delated');
            return redirect()->back();
        }
    }
}
