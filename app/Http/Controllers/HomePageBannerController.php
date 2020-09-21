<?php

namespace App\Http\Controllers;

use App\Model\HomePageBanner;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class HomePageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePageBanner = HomePageBanner::orderBy('id')->paginate(20);
        return view('backend.home-page-banner.index', compact('homePageBanner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home-page-banner.create');
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
                'title'               => 'required',
                'image'               => 'required|image',
                'url'                 => 'required|url',
                'button_text'         => 'required',

            ],
            [
                'title.required'      => 'Title required',
                'image.required'      => 'Valid image required',
            ]
        );

        $homePageBanner = new HomePageBanner();

        $image    = "";

        if ($request->image) {
            $image = OwnLibrary::uploadFile($request->image, "home-page-banner");
            Image::make($image)->resize(870, 450)->save();
        }

        $homePageBanner->title              = $request->title;
        $homePageBanner->slug               = Str::slug($request->title . '-' . rand(10, 99));
        $homePageBanner->image              = $image;
        $homePageBanner->text_first         = $request->text_first;
        $homePageBanner->text_second        = $request->text_second;
        $homePageBanner->text_third         = $request->text_third;
        $homePageBanner->text_forth         = $request->text_forth;
        $homePageBanner->text_fifth         = $request->text_fifth;
        $homePageBanner->url                = $request->url;
        $homePageBanner->button_text        = $request->button_text;

        if ($homePageBanner->save()) {
            session()->flash("success", "Banner successfully created");
            return redirect()->route('home-page-banner.index');
        } else {
            session()->flash("error", "Banner not created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\HomePageBanner  $homePageBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomePageBanner $homePageBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\HomePageBanner  $homePageBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePageBanner $homePageBanner)
    {
        return view('backend.home-page-banner.edit', compact('homePageBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\HomePageBanner  $homePageBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePageBanner $homePageBanner)
    {
        if ($request->image) {
            if (!empty($homePageBanner->image)) {
                @unlink($homePageBanner->image);
            }
            $image  = OwnLibrary::uploadFile($request->image, "home-page-banner");
            Image::make($image)->resize(870, 450)->save();
            $homePageBanner->image = $image;
        }

        $request->validate(
            [
                'title'            => 'required',
            ],
            [
                'title.required'   => 'Title required',
            ]
        );

        $homePageBanner->title              =  $request->title;
        $homePageBanner->status             =  $request->status;
        $homePageBanner->text_first         = $request->text_first;
        $homePageBanner->text_second        = $request->text_second;
        $homePageBanner->text_third         = $request->text_third;
        $homePageBanner->text_forth         = $request->text_forth;
        $homePageBanner->text_fifth         = $request->text_fifth;
        $homePageBanner->url                = $request->url;
        $homePageBanner->button_text        = $request->button_text;


        if ($homePageBanner->save()) {
            session()->flash("success", "Banner successfully updated");
            return redirect()->route("home-page-banner.index");
        } else {
            session()->flash("error", "Banner Not Updated");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\HomePageBanner  $homePageBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePageBanner $homePageBanner)
    {
        if ($homePageBanner->delete()) {
            $homePageBanner->deleted_by = auth()->id();
            $homePageBanner->save();
            session()->flash('success', 'Banner Delated');
            return redirect()->back();
        } else {
            session()->flash('error', ' Not Delated');
            return redirect()->back();
        }
    }
}
