<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Product;
use App\Model\ShopSetting;
use App\Model\VendorPage;

class VendorShopController extends Controller
{
    public function index($slug)
    {




        $vendor             = User::where('name', 'like', "%$slug%")->where('status', 1)->first();
        $shopSettings       = ShopSetting::where('vendor_id', '=', $vendor->id)->where('status', 1)->first();
        $newProduct         = Product::with('vendor')->where('vendor_id', '=', $vendor->id)->where('status', 1)->orderBy('created_at', 'desc')->limit(6)->get();
        $featureProduct     = Product::with('vendor')->where('vendor_id', '=', $vendor->id)->where('set_as_featured', '=', 1)->where('status', 1)->limit(6)->get();
        $sellProduct        = Product::with('vendor')->where('vendor_id', '=', $vendor->id)->where('regular_price', '!=', null)->where('status', 1)->limit(6)->get();
        $datetime1          = date_create($vendor->created_at);
        $datetime2          = date_create(date("Y-m-d"));
        $interval           = date_diff($datetime1, $datetime2);
        $vendorEstablished  = $interval->format('%y Year %m Month %d days');
        $vendorMenu         = VendorPage::where('vendor_id', '=', $vendor->id)->where('status', '=', 1)->get();

        //dd($vendorMenu);
        return view('frontend.vendor-shop.index', compact('newProduct', 'featureProduct', 'sellProduct', 'vendor', 'shopSettings', 'vendorEstablished', 'vendorMenu'));
    }

    public function vendorPage($slug)
    {
        //dd($slug);
        $page = VendorPage::where('slug', '=', $slug)->where('status', '=', 1)->first();
        $vendor             = User::find($page->vendor_id);
        $datetime1          = date_create($vendor->created_at);
        $datetime2          = date_create(date("Y-m-d"));
        $interval           = date_diff($datetime1, $datetime2);
        $vendorEstablished  = $interval->format('%y Year %m Month %d days');
        $shopSettings       = ShopSetting::where('vendor_id', '=', $vendor->id)->where('status', 1)->first();
        $vendorMenu         = VendorPage::where('vendor_id', '=', $vendor->id)->where('status', '=', 1)->get();
        return view('frontend.vendor-shop.page', compact('page', 'vendor', 'shopSettings', 'vendorEstablished', 'vendorMenu'));
    }
}
