<?php

namespace App\Http\Controllers;

use App\Model\VendorPage;
use Illuminate\Http\Request;
use App\CustomClass\OwnLibrary;
use Illuminate\Support\Str;
use App\Events\VendorPageEvnt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class VendorPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor_pages = VendorPage::with('createdBy','updatedBy');
        if(Auth::user()->role_id == 10){
            $vendor_pages->where("vendor_id","=",Auth::user()->id);
        }
        $vendor_pages->orderBy("id");
        $vendor_pages = $vendor_pages->paginate(10);
        return view('backend.vendor-page.index',compact('vendor_pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor-page.create');
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
            //"page_title" => "required|max:500|unique:pages",
            'page_title' => [
                'required',
                'max:500',
                Rule::unique('vendor_pages')->where(function($query) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "description" => "required",
            "sl_no" => "required",
            "status" => 'required'
        ];

        $message = [
            "page_title.required" => "Thana name is required.",
            "page_title.max" => "The Thana name may not be greater than 500 characters.",
            "sl_no.required" => "Serial No. is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => null,
            ];
            $result = event(new VendorPageEvnt($data));

            if ($result) {
                session()->flash("success", "Page successfully created");
                return redirect()->route('vendor-page.index');
            } else {
                session()->flash("error", "Page not created");
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
    public function show($slug)
    {
        $vendorPage = VendorPage::where("slug","=",$slug)->first();
        return view("backend.vendor-page.page-show",compact('vendorPage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(VendorPage $vendorPage)
    {
        return view("backend.vendor-page.edit",compact('vendorPage'));
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
            //"page_title" => "required|max:500|unique:pages",
            'page_title' => [
                'required',
                'max:500',
                Rule::unique('vendor_pages')->ignore($id)->where(function($query) use($id) {
                    (Auth::user()->role_id==10) ? $query->where('vendor_id', '=', Auth::id()) : $query->whereNull('vendor_id');
                })
            ],
            "description" => "required",
            "sl_no" => "required",
            "status" => 'required'
        ];

        $message = [
            "page_title.required" => "Thana name is required.",
            "page_title.max" => "The Thana name may not be greater than 500 characters.",
            "sl_no.required" => "Serial No. is required.",
        ];

        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {

            $data = [
                'request' => $request,
                'id' => $id,
            ];
            $result = event(new VendorPageEvnt($data));

            if($result){
                session()->flash('success','Page updated');
                return redirect()->route('vendor-page.index');
            }else{
                session()->flash('error','Page Not updated');
                return redirect()->back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendorPage $vendorPage)
    {
        if ($vendorPage->delete()) {

            session()->flash("success", "Page Deleted");
            return redirect()->back();
        } else {
            session()->flash("error", "Page Not Deleted");
            return redirect()->back();
        }
    }

}
