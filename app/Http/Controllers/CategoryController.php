<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = Category::orderBy("id")->paginate(20);
        return view("backend.category.index", compact("Category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Category = Category::all();
        return view('backend.category.create', compact('Category'));
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
                'category_name'           => 'required',

            ],
            [
                'category_name.required'   => 'Category name required',

            ]
        );

        $Category = new Category();
        $image    = "";

        if ($request->image) {
            $image = OwnLibrary::uploadFile($request->image, "category");
            Image::make($image)->resize(100, 130)->save();
        }


        $Category->category_name        =  $request->category_name;
        $Category->parent_id            =  $request->parent_id;
        $Category->description          =  $request->description;
        $Category->slug                 =  Str::slug($request->category_name . '-' . rand(10, 99));
        $Category->meta_tag             =  $request->meta_tag;
        $Category->meta_description     =  $request->meta_description;
        $Category->image                =  $image;
        $Category->top_category         =  $request->top_category;

        if ($Category->save()) {
            session()->flash("success", "Category successfully created");
            return redirect()->route('category.index');
        } else {
            session()->flash("error", "Category not created");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $allCategory = Category::where('id', '!=', $category->id)
            ->where('status', 1)
            ->get();

        return view('backend.category.edit', compact('category', 'allCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->image) {
            $image  = OwnLibrary::uploadFile($request->image, "category");
            Image::make($image)->resize(100, 130)->save();
        } else {
            $image  =  $request->oldImage;
        }


        $request->validate(
            [
                'category_name'           => 'required',
            ],
            [
                'category_name.required'   => 'Category name required',
            ]
        );

        $category->category_name        =  $request->category_name;
        $category->parent_id            =  $request->parent_id;
        $category->description          =  $request->description;
        $category->meta_tag             =  $request->meta_tag;
        $category->meta_description     =  $request->meta_description;
        $category->status               =  $request->status;
        $category->image                =  $image;
        $category->top_category        =  $request->top_category;


        if ($category->save()) {
            session()->flash("success", "Category Updated");
            return redirect()->route("category.index");
        } else {
            session()->flash("error", "Category Not Updated");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            session()->flash('success', 'Category Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
