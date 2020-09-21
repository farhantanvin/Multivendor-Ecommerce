<?php

namespace App\Http\Controllers;

use App\CustomClass\OwnLibrary;
use App\Model\ProductGallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductGalleryController extends Controller
{
    public function galleryImage($slug){
        $productId = decrypt($slug);
        $galleryPhotos = ProductGallery::select('id','image')->where('product_id','=',$productId)->get();
        return view('backend.product.gallery',compact('galleryPhotos','slug'));
    }

    public function galleryImageStore(Request $request){
        $productId = decrypt($request->product_id);

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

        session()->flash('success','Photo Added');
        return redirect()->back();
    }

    public function galleryImageDelete ($id){
        $galleryId = decrypt($id);
        $galleryPhoto = ProductGallery::find($galleryId);
        if (!empty($galleryPhoto->image)){
            unlink($galleryPhoto->image);
        }

        if($galleryPhoto->delete()){
            session()->flash('success','Photo Deleted');
            return redirect()->back();
        }else{
            session()->flash('error','Photo Not Deleted');
            return redirect()->back();
        }
    }
}
