<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::with('createdBy')->orderBy("id")->paginate(20);
        return view("backend.brand.index", compact("brand"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
                'brand_name'              => 'required',
                'image'                   => 'required',
            ],
            [
                'brand_name.required'     => 'Brand name required',
                'image.required'          => 'Valid image required',
            ]
        );

        $Brand = new Brand();
        $image    = "";

        if ($request->image) {
            $image = OwnLibrary::uploadFile($request->image, "brand");
            Image::make($image)->resize(169, 100)->save();
        }


        $Brand->brand_name           =  $request->brand_name;
        $Brand->description          =  $request->description;
        $Brand->slug                 =  Str::slug($request->brand_name . '-' . rand(10, 99));
        $Brand->meta_tag             =  $request->meta_tag;
        $Brand->meta_description     =  $request->meta_description;
        $Brand->image                =  $image;

        if ($Brand->save()) {
            session()->flash("success", "Brand successfully created");
            return redirect()->route('brand.index');
        } else {
            session()->flash("error", "Brand not created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        if ($request->image) {
            if (!empty($brand->image )){
                @unlink($brand->image);
            }
            $image  = OwnLibrary::uploadFile($request->image, "brand");
            Image::make($image)->resize(169, 100)->save();
        } else {
            $image  =  $request->oldImage;
        }


        $request->validate(
            [
                'brand_name'            => 'required',
            ],
            [
                'brand_name.required'   => 'Brand name required',
            ]
        );

        $brand->brand_name           =  $request->brand_name;
        $brand->description          =  $request->description;
        $brand->meta_tag             =  $request->meta_tag;
        $brand->meta_description     =  $request->meta_description;
        $brand->status               =  $request->status;
        $brand->image                =  $image;


        if ($brand->save()) {
            session()->flash("success", "Brand Updated");
            return redirect()->route("brand.index");
        } else {
            session()->flash("error", "Brand Not Updated");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if ($brand->delete()) {
            session()->flash('success', 'Category Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
