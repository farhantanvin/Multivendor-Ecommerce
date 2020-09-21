<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Brand;

class SerachController extends Controller
{

    public function index($slug = null, $brand_slug = null, Request $request)
    {
        $query = '';
        $searchProduct = '';
        $max_price = $request->max_price;
        $min_price = $request->min_price;
        $brandId   = $request->brand;
        $rating    = $request->rating;


        $searchProduct = Product::with('vendor');

        if (!empty($slug)) {
            $searchProduct = $searchProduct->where('brand_id', '=', $slug);
        }

        if (!empty($rating)) {
            $searchProduct = $searchProduct->where('rating', '>=', $rating);
        }

        if (!empty($brandId)) {
            $searchProduct = $searchProduct->where('brand_id', '=', $brandId);
        }

        if (empty($min_price) && !empty($max_price)) {
            $searchProduct = $searchProduct->where('sell_price', '<=', $max_price);
        }

        if (empty($max_price) && !empty($min_price)) {
            $searchProduct = $searchProduct->where('sell_price', '>=', $min_price);
        }


        if (!empty($min_price) && !empty($max_price)) {
            $searchProduct = $searchProduct->whereBetween('sell_price', [$min_price, $max_price]);
        }

        if (!empty($request->search)) {
            $query = $request->search;
            $searchProduct = $searchProduct->where('product_name', 'like', "%$query%");
        }
        if (!empty($slug)) {
            $query = $slug;
            $category               = Category::where('category_name', 'like', "%$query%")->first();
            $searchProduct          = $searchProduct->where('category_id', '=', $category->id)->orWhere('subcategory_id', '=', $category->id);
        }

        $searchProduct          = $searchProduct->where('status', '=', 1)->paginate(12);
        $brands                  = Brand::withCount('product')->where('status', '=', 1)->get();
        $productSelected        = Product::with('vendor')->inRandomOrder()->where('status', 1)->limit(4)->get();
        return view('frontend.product.product-search', compact('productSelected', 'query', 'searchProduct', 'brands'));
    }

    public function brandSearch($slug)
    {
        $query = $slug;
        $searchProduct = Product::with('vendor');

        if (!empty($slug)) {
            $brand_id      = Brand::where('brand_name', 'like', "%$slug%")->first();
            $searchProduct = $searchProduct->where('brand_id', '=', $brand_id->id);
        }

        $searchProduct           = $searchProduct->where('status', '=', 1)->paginate(12);
        $brands                  = Brand::withCount('product')->where('status', '=', 1)->get();
        $productSelected         = Product::with('vendor')->inRandomOrder()->where('status', 1)->limit(4)->get();
        return view('frontend.product.product-search', compact('productSelected', 'query', 'searchProduct', 'brands'));
    }
}
