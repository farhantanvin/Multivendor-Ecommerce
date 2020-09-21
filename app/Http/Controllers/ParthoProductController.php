<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Category;
// use App\Brand;
use App\Model\Product\Product;
use App\Model\Product\ProductColor;
use App\Model\Product\ProductSize;
use App\Model\Product\ProductRelated;
use App\Model\Product\ProductTag;
use App\Model\Product\ProductReview;
use App\Model\Product\ProductGallery;
use App\Model\Product\ProductComments;
use App\Model\Product\ProductMeta;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Model\Category;
use App\Model\Brand;


class ParthoProductController extends Controller
{
    /*
     * Product create page.
    */
     public  function ProductCreate(){
       $product=Product::select('id','product_name')->get(); 
       $category=Category::where('status',1)->select('id','category_name')->get(); 
       $brand=Brand::where('status',1)->select('id','brand_name')->get(); 
       return view('backend.product.partho-create',compact('category','brand','product'));
     }

    /*
     *Product store to database.
    */
     public function productStore(Request $request){
      //validate input field
       $rules = [
        "product_name" => "required",
        "quantity" => "required",
        "regular_price" => "required",
        "sell_price" => "required",
        "currency_id" => "required",
        "category_id" => "required",
        "brand_id" => "required",
        "product_image" => "required",
       ];
        $message = [
            "product_name.required" => "Product Name is required",
            "quantity.required" => "Quantity is required",
            "regular_price.required" => "Regular Price is required",
            "sell_price.required" => "Sell Price is required",
            "currency_id.required" => "Currency is required",
            "category_id.required" => "Category is required",
            "brand_id.required" => "Brand is required",
            "product_image.required" => "Image is required",
        ];
        $validation = Validator::make($request->all(), $rules, $message);
      if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
      }
      //check file upload or not and then upload to folder
      if ($request->hasFile('product_image')){
          $photoName = time().'.'.$request->product_image->getClientOriginalExtension();
          $request->product_image->move('public/upload/product/', $photoName);
      }else{
        $photoName='';
      }
      //Product insert to database
      $product= new  Product();
      $product->product_name=$request->product_name;
      $product->quantity=$request->quantity;
      $product->available_stock=$request->quantity;
      $product->regular_price=$request->regular_price;
      $product->sell_price=$request->sell_price;
      $product->discount=$request->discount;
      $product->vat=$request->vat;
      $product->product_image=$photoName;
      $product->product_unit=$request->product_unit;
      $product->product_type=$request->product_type;
      $product->currency_id=$request->currency_id;
      $product->category_id=$request->category_id;
      $product->brand_id=$request->brand_id;
      $product->description=$request->description;
      $product->specification=$request->specification;
      $product->facebook_link=$request->facebook_link;
      $product->youtube_link=$request->youtube_link;
      $product->product_code=$request->product_code;
      $product->delivery_charge=$request->delivery_charge;
      $product->review_allowed=$request->review_allowed;
      $product->comment_allowed=$request->comment_allowed;
      $product->set_as_featured=$request->set_as_featured;
      $product->free_shipping=$request->free_shipping;
      $product->weight=$request->weight;
      $product->policy=$request->policy;
      $product->allowed_estimated_shipping_time=$request->allowed_estimated_shipping_time;
      $product->sku=$request->sku;
      $product->tex_rate=$request->tex_rate;
      $product->model_number=$request->model_number;
      $product->max_order_quantity=$request->max_order_quantity;
      $product->meta_key=$request->keyword;
      $product->meta_description=$request->description;
      $product->status=$request->status;
      $product->save();
      $last_id=DB::getPdo()->lastInsertId();
      //insert product color data
      if($request->color==''){
      }else{
         for($i=0;$i<count($request->color);$i++){
          $productColor=new ProductColor();
          $productColor->product_id=$last_id;
          $productColor->color=$request->color[$i];
          $productColor->save();
         }
      }
      //insert product size data
      if($request->size==''){
      }else{
           for($i=0;$i<count($request->size);$i++){
            $productSize=new ProductSize();
            $productSize->product_id=$last_id;
            $productSize->size=$request->size[$i];
            $productSize->save();
           }
        }
      //insert product tag data
      if($request->tag==''){
      }else{
          for($i=0;$i<count($request->tag);$i++){
            $productTag=new ProductTag();
            $productTag->product_id=$last_id;
            $productTag->tag=$request->tag[$i];
            $productTag->save();
        }
      }
      //insert product gallery data
      $images = $request->file('gallery_image');
      if($request->hasFile('gallery_image')){
        foreach ($images as $item){
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move('public/upload/product/gallery/', $imageName);
                $gallery=new ProductGallery();
                $gallery->product_id=$last_id;
                $gallery->image=$imageName;
                $gallery->save();
        }
      }
      //insert product meta/option data
      $meta_keys = $request->meta_key;
      $meta_values = $request->meta_value;
      foreach($meta_keys as $key => $n ) 
      {
          $productmeta=new ProductMeta();
          $productmeta->product_id=$last_id;
          $productmeta->meta_key=$meta_keys[$key];
          $productmeta->meta_value=$meta_values[$key];
          $productmeta->save();
      }	        
      //insert product related data
      if($request->product_id==''){
      }else{
           for($i=0;$i<count($request->product_id);$i++){
            $productRelated=new ProductRelated();
            $productRelated->parent_product_id=$last_id;
            $productRelated->product_id=$request->product_id[$i];
            $productRelated->save();
        }
      }
      session()->flash("success", "Product has been successfully created");
      return redirect()->route('product_list');
  }

     /*
     *Display Product list.
    */
    public  function ProductList(){
        $productList=Product::
         leftjoin('categories','products.category_id','=','categories.id')
        ->leftjoin('brands','products.brand_id','=','brands.id')
        ->leftjoin('users','products.created_by','=','users.id')
        ->select('products.id as product_id','product_name','product_image','categories.category_name','brands.brand_name','users.name','products.status as product_status','regular_price','sell_price','vat','discount')
        ->orderBy('products.id','DESC')
        ->paginate(20);
        return view('backend.product.partho-list',compact('productList'));
    }

     /*
     *Display Product details.
    */
    public function productDetails($id){
     $id=base64_decode($id);
     $productDetails=Product::
     leftjoin('categories','products.category_id','=','categories.id')
     ->leftjoin('brands','products.brand_id','=','brands.id')
     ->leftjoin('users','products.created_by','=','users.id')
     ->select('products.*','categories.category_name','brands.brand_name','users.name','products.status as product_status')
     ->where('products.id',$id)
     ->first();
     $product_related=ProductRelated::where('parent_product_id',$id)
     ->leftjoin('products','products.id','=','product_related.product_id')
     ->leftjoin('categories','products.category_id','=','categories.id')
     ->leftjoin('brands','products.brand_id','=','brands.id')
     ->select('product_name','product_image','categories.category_name','brands.brand_name','products.status as product_status','product_related.id as main_id')
     ->paginate(20);
    $productcolor=ProductColor::where('product_id',$id)->select('product_color.id as main_id','color')->paginate(20);
    $product_comment=ProductComments::where('product_id',$id)->select('product_comments.id as main_id','product_comments.*')->paginate(20);
    $product_tag=ProductTag::where('product_id',$id)->select('product_tag.id as main_id','product_tag.*')->paginate(20);
    $product_review=ProductReview::where('product_id',$id)->select('product_reviews.id as main_id','product_reviews.*')->paginate(20);
    $product_gallery=ProductGallery::where('product_id',$id)->select('product_gallery.id as main_id','product_gallery.*')->paginate(20);
    $product_option=ProductMeta::where('product_id',$id)->select('product_meta.id as main_id','product_meta.*')->paginate(20);
    $product_size=ProductSize::where('product_id',$id)->select('product_size.id as main_id','product_size.*')->paginate(20);
    return view('backend.product.partho-product_details',compact('productDetails','product_related','productcolor','product_comment','product_tag','product_review','product_gallery','product_option','product_size'));
    }

     /*
     *Display Product edit page.
    */
    public function productEdit($id){
      $id=base64_decode($id);
      $product=Product::select('id','product_name')->get(); 
      $category=Category::where('status',1)->select('id','category_name')->get(); 
      $brand=Brand::where('status',1)->select('id','brand_name')->get(); 
      $productDetails=Product::
      leftjoin('categories','products.category_id','=','categories.id')
      ->leftjoin('brands','products.brand_id','=','brands.id')
      ->leftjoin('users','products.created_by','=','users.id')
      ->select('products.*','categories.category_name','brands.brand_name','users.name','products.status as product_status','products.id as main_ids')
      ->where('products.id',$id)
      ->first();
      $product_related=ProductRelated::where('parent_product_id',$id)
      ->leftjoin('products','products.id','=','product_related.product_id')
      ->leftjoin('categories','products.category_id','=','categories.id')
      ->leftjoin('brands','products.brand_id','=','brands.id')
      ->select('product_name','product_image','categories.category_name','brands.brand_name','products.status as product_status','product_related.id as main_id')
      ->paginate(20);
     $productcolor=ProductColor::where('product_id',$id)->select('product_color.id as main_id','color')->paginate(20);
     $product_comment=ProductComments::where('product_id',$id)->select('product_comments.id as main_id','product_comments.*')->paginate(20);
     $product_tag=ProductTag::where('product_id',$id)->select('product_tag.id as main_id','product_tag.*')->paginate(20);
     $product_review=ProductReview::where('product_id',$id)->select('product_reviews.id as main_id','product_reviews.*')->paginate(20);
     $product_gallery=ProductGallery::where('product_id',$id)->select('product_gallery.id as main_id','product_gallery.*')->paginate(20);
     $product_option=ProductMeta::where('product_id',$id)->select('product_meta.id as main_id','product_meta.*')->paginate(20);
     $product_size=ProductSize::where('product_id',$id)->select('product_size.id as main_id','product_size.*')->paginate(20);
     return view('backend.product.partho-product_edit',compact('productDetails','product_related','productcolor','product_comment','product_tag','product_review','product_gallery','product_option','product_size','product','category','brand'));
    }

    public function productUpdate(Request $request){
      $id=base64_decode($request->id);
       //validate input field
       $rules = [
        "product_name" => "required",
        "quantity" => "required",
        "regular_price" => "required",
        "sell_price" => "required",
        "currency_id" => "required",
        "category_id" => "required",
        "brand_id" => "required",
       ];
        $message = [
            "product_name.required" => "Product Name is required",
            "quantity.required" => "Quantity is required",
            "regular_price.required" => "Regular Price is required",
            "sell_price.required" => "Sell Price is required",
            "currency_id.required" => "Currency is required",
            "category_id.required" => "Category is required",
            "brand_id.required" => "Brand is required",
        ];
        $validation = Validator::make($request->all(), $rules, $message);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

      //check file upload or not and then upload to folder
      if ($request->hasFile('product_image')){
        $photoName = time().'.'.$request->product_image->getClientOriginalExtension();
        $request->product_image->move('public/upload/product/', $photoName);
        $pro=Product::where('id',$id)->first();
        $current_image=$pro->product_image;
        $file_path="public/upload/product"."/".$current_image;
        if(file_exists($file_path)){
            unlink($file_path);
        }
        }else{
         $photoName=$request->default_img;
        }
       Product::where('id',$id)->update([
        'product_name'=>$request->product_name,
        'quantity'=>$request->quantity,
        'available_stock'=>$request->quantity,
        'regular_price'=>$request->regular_price,
        'sell_price'=>$request->sell_price,
        'discount'=>$request->discount,
        'vat'=>$request->vat,
        'product_image'=>$photoName,
        'product_unit'=>$request->product_unit,
        'product_type'=>$request->product_type,
        'currency_id'=>$request->currency_id,
        'category_id'=>$request->category_id,
        'brand_id'=>$request->brand_id,
        'description'=>$request->description,
        'specification'=>$request->specification,
        'facebook_link'=>$request->facebook_link,
        'youtube_link'=>$request->youtube_link,
        'product_code'=>$request->product_code,
        'delivery_charge'=>$request->delivery_charge,
        'review_allowed'=>$request->review_allowed,
        'comment_allowed'=>$request->comment_allowed,
        'set_as_featured'=>$request->set_as_featured,
        'free_shipping'=>$request->free_shipping,
        'weight'=>$request->weight,
        'policy'=>$request->policy,
        'allowed_estimated_shipping_time'=>$request->allowed_estimated_shipping_time,
        'sku'=>$request->sku,
        'tex_rate'=>$request->tex_rate,
        'model_number'=>$request->model_number,
        'max_order_quantity'=>$request->max_order_quantity,
        'meta_key'=>$request->keyword,
        'meta_description'=>$request->description,
        'status'=>$request->status
       ]);
       session()->flash("success", "Product has been successfully update");
       return redirect()->route('product_list');

    }
}
