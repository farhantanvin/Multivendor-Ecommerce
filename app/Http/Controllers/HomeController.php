<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Brand;
use App\Model\HomePageBanner;
use App\Model\Advertisement;
use App\Model\Page;
use App\Model\Product;
use App\Model\HomeSetup;
use App\Model\Product\ProductReview;
use Illuminate\Support\Facades\DB;
use App\Model\OrderDetail;
use App\Model\Offer;
use App\Model\OfferSell;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brand                               =  Brand::where('status', 1)->get();
        $homePageBanner                      =  HomePageBanner::where('status', 1)->get();
        $advertisementFirst                  =  Advertisement::where('advertisement_option', "banner_portrait_top")->where('status', 1)->first();
        $advertisementSecond                 =  Advertisement::where('advertisement_option', "banner_portrait_bottom")->where('status', 1)->first();
        $category                            =  Category::with('parent')->where('parent_id', 0)->where('status', 1)->get();
        $topCategory                         =  Category::where('top_category', '=', 1)->where('status', '=', 1)->get();
        $selectedCategory                    =  HomeSetup::where('option_name', '=', 'selected_category')->first();
        $productSelected                     =  Product::with('vendor')->inRandomOrder()->where('status', 1)->limit(4)->get();    //Selecetd for you column data get from here
        $newProductForSelectedCategory       =  Product::with('vendor')->where('category_id', '=', $selectedCategory->option_value)->where('status', 1)->limit(6)->orderBy('id', 'DESC')->get();
        $featureProductForSelectedCategory   =  Product::with('vendor')->where('set_as_featured', 1)->where('status', 1)->limit(6)->get();
        $sellProductForSelectedCategory      =  Product::with('vendor')->where('regular_price', '!=', null)->where('status', 1)->limit(6)->get();
        $promotionFirst                      = Advertisement::where('advertisement_option', "promotion_offer_first")->where('status', 1)->first();
        $promotionSecond                     = Advertisement::where('advertisement_option', "promotion_offer_Second")->where('status', 1)->first();
        $promotionThird                      = Advertisement::where('advertisement_option', "promotion_offer_third")->where('status', 1)->first();
        $offer                               = Offer::where('status', 1)->first();
        $offerSale                           = OfferSell::with('product')->where('status', 1)->get();
        $sevenDaysBack                       = (date('Y-m-d', strtotime('-7 days'))); //find saven days back date
        $todayDate                           = date('Y-m-d');
        $topSellProductLastWeek              = OrderDetail::with('product')->groupBy('product_id')->select('product_id', DB::raw('COUNT(product_id) as count'))->orderBy('count', 'desc')->take(6)->get();
        return view('frontend.home.index', compact('brand', 'homePageBanner', 'category', 'topCategory', 'productSelected', 'selectedCategory', 'newProductForSelectedCategory', 'promotionFirst', 'promotionSecond', 'promotionThird', 'advertisementFirst', 'advertisementSecond', 'featureProductForSelectedCategory', 'sellProductForSelectedCategory', 'offer', 'offerSale', 'topSellProductLastWeek'));
    }


    public function customPage($slug)
    {
        $Page = Page::where('slug', '=', $slug)->where('status', '=', 1)->first();

        return view('frontend.home.custom_page', compact('Page'));
    }
}
