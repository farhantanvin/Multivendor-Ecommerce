<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\Brand;
use App\Model\Category;
use App\Model\Product;
use App\Model\ProductGallery;
use App\Model\ProductVarient;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category','brand','vendor')->orderBy('created_at','desc');

        if (auth()->user()->user_type == 2){
            $products = $products->where('vendor_id','=', auth()->id());
        }

        $products = $products->paginate(10);


        return view('backend.product.index',compact('products'));
    }

    public function create(){
        $categories = Category::select('id','category_name')->orderBy('category_name')->where('status','=',1)->where('parent_id','=',0)->get();

        $brands = Brand::select('id','brand_name')->orderBy('brand_name')->where('status','=',1)->get();

        return view('backend.product.create',compact('categories','brands'));
    }

    public function store(Request $request){
//validation check
        $rules = [
            'product_name' => 'required|max:90',
            'product_condition' => 'required',
            'category_id' => 'required',
            'sell_price' => 'required|numeric',
            'regular_price' => 'numeric|nullable',
            'vat' => 'required|numeric',
            'short_description' => 'required|max:300',
            'product_image' => 'required|image',
            'image.*' => 'required|image',
            'product_quantity.*' => 'required',
            'affiliate_commision' => 'numeric|min:0.01,max:100|nullable',
            'delivery_charge' => 'required|numeric|min:0',
        ];

        $message = [
            'product_image' => 'Feature Image is Required',
            'image.*' => 'Product Gallery Image is Required',
        ];

        if (!empty($request->variable_product)){
            $rules['product_varient.*'] = 'required';
        }

        $validation = Validator::make($request->all(), $rules, $message);
//validation check
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
//            Store Product

            $config = [
                'table' => 'products',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            $productId = IdGenerator::generate($config);

           $product = new Product();

            $product->id = $productId;
            $product->product_name = $request->product_name;
            $product->slug = Str::slug($request->product_name) . '-' . rand(1000, 9999);
            $product->product_condition = $request->product_condition;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->brand_id = $request->brand_id;
            $product->vendor_id = (auth()->user()->user_type == 2) ? auth()->id() : null;
            $product->sell_price = $request->sell_price;
            $product->regular_price = $request->regular_price;
            $product->vat = $request->vat;
            $product->stock_available = $request->stock_available ?? null;
            $product->set_as_featured = $request->set_as_featured ?? null;
            $product->short_description = $request->short_description;
            $product->variable_product = $request->variable_product ?? 0;
            $product->quantity = array_sum($request->product_quantity);
            $product->description = $request->description;
            $product->specification = $request->specification;
            $product->policy = $request->policy;
            $product->affiliate_commision = $request->affiliate_commision ?? null;
            $product->delivery_charge = $request->delivery_charge;
            $product->free_shipping = $request->free_shipping ?? 0 ;
            $product->product_unit = $request->product_unit;
            $product->meta_description = $request->meta_description;
            $product->meta_key = $request->meta_key;
            $product->youtube_link = $request->youtube_link;

            if ($request->product_image) {
                $productFeatureImage = OwnLibrary::uploadFile($request->product_image, "product_feature_image");
                Image::make($productFeatureImage)->resize(152, 130)->save();
                $product->product_image = $productFeatureImage;
            }

            $product->status = 1;

           if ($product->save()){
//Product Varient
               for ($i=0; $i < count($request->product_quantity); $i++){
                   $productVarient = new ProductVarient();
                   $productVarient->product_id = $productId;
                   $productVarient->product_varient = $request->product_varient[$i] ?? null;
                   $productVarient->product_quantity = $request->product_quantity[$i];
                   $productVarient->product_price = $request->product_price[$i] ?? $request->sell_price;
                   $productVarient->save();
               }
//Product Image Gallery
               for ($j=0; $j < count($request->image); $j++){
                   if ($request->image[$j]) {
                       $image = OwnLibrary::uploadFile($request->image[$j], "product_gallery");
                       $productGallery = new ProductGallery();
                       $productGallery->product_id = $productId;
                       $productGallery->image = $image;
                       $productGallery->save();
                       Image::make($image)->resize(500, 500)->save();
                   }
               }
               session()->flash('success','Product Created');
               return redirect()->route('products.index');
           }else{
               session()->flash('error','Product Not Created');
               return redirect()->route('products.index');
           }
        }
    }

    public function edit(Product $product){
        $categories = Category::select('id','category_name')->orderBy('category_name')->where('status','=',1)->where('parent_id','=',0)->get();

        $brands = Brand::select('id','brand_name')->orderBy('brand_name')->where('status','=',1)->get();

        return view('backend.product.edit',compact('categories','brands','product'));
    }

    public function update(Request $request, Product $product){

        //validation check
        $rules = [
            'product_name' => 'required|max:90',
            'product_condition' => 'required',
            'category_id' => 'required',
            'sell_price' => 'required|numeric',
            'regular_price' => 'numeric|nullable',
            'vat' => 'required|numeric',
            'short_description' => 'required|max:300',
            'product_image' => 'image',
            'product_quantity.*' => 'required',
            'affiliate_commision' => 'numeric|min:0.01,max:100|nullable',
            'delivery_charge' => 'required|numeric|min:0',
        ];

        $message = [
            'product_image' => 'Feature Image is Required',
        ];

        if (!empty($request->variable_product)){
            $rules['product_varient.*'] = 'required';
        }

        $validation = Validator::make($request->all(), $rules, $message);
//validation check
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        } else {
//            Store Product
            $product->product_name = $request->product_name;
            $product->product_condition = $request->product_condition;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->brand_id = $request->brand_id;
            $product->sell_price = $request->sell_price;
            $product->regular_price = $request->regular_price;
            $product->vat = $request->vat;
            $product->stock_available = $request->stock_available ?? null;
            $product->set_as_featured = $request->set_as_featured ?? null;
            $product->short_description = $request->short_description;
            $product->quantity = array_sum($request->product_quantity);
            $product->description = $request->description;
            $product->specification = $request->specification;
            $product->policy = $request->policy;
            $product->affiliate_commision = $request->affiliate_commision;
            $product->delivery_charge = $request->delivery_charge;
            $product->free_shipping = $request->free_shipping;
            $product->product_unit = $request->product_unit;
            $product->meta_description = $request->meta_description;
            $product->meta_key = $request->meta_key;
            $product->youtube_link = $request->youtube_link;

            if ($request->product_image) {
                if (!empty($product->product_image)){
                    @unlink($product->product_image);
                }
                $productFeatureImage = OwnLibrary::uploadFile($request->product_image, "product_feature_image");
                Image::make($productFeatureImage)->resize(152, 130)->save();
                $product->product_image = $productFeatureImage;
            }

            $product->status = 1;

            if ($product->save()){
//Product Varient
                for ($i=0; $i < count($request->product_quantity); $i++){
                    if (!empty($request->varient_id[$i])){
                        $productVarientCheck = ProductVarient::find($request->varient_id[$i]);
                        if ($productVarientCheck){
                            $productVarient = $productVarientCheck;
                        }else{
                            $productVarient = new ProductVarient();
                            $productVarient->product_id = $product->id;
                        }
                        $productVarient->product_varient = $request->product_varient[$i] ?? null;
                        $productVarient->product_quantity = $request->product_quantity[$i];
                        $productVarient->product_price = $request->product_price[$i] ?? $request->sell_price;
                        $productVarient->save();

                    }else{
                       $productVarient = new ProductVarient();
                        $productVarient->product_id = $product->id;
                        $productVarient->product_varient = $request->product_varient[$i] ?? null;
                        $productVarient->product_quantity = $request->product_quantity[$i];
                        $productVarient->product_price = $request->product_price[$i] ?? $request->sell_price;
                        $productVarient->save();
                    }
                }

                session()->flash('success','Product Updated');
                return redirect()->route('products.index');
            }else{
                session()->flash('error','Product Not Updated');
                return redirect()->route('products.index');
            }
        }
    }

    public function destroy(Product $product){
        if ($product->delete()){
            session()->flash('success','Product Deleted');
            return redirect()->route('products.index');
        }else{
            session()->flash('error','Product Not Deleted');
            return redirect()->route('products.index');
        }
    }
}
