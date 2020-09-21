@extends('backend.layout.layout')
@section('title','Product Gallery')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Product Gallery</h4>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="row">
                @foreach($galleryPhotos as $galleryPhoto)
                    <div class="col-md-2 text-center m-2">
                        <img style="width: 100%;box-shadow: 0 0 3px grey" src="{{asset($galleryPhoto->image)}}">
                        <a class="btn btn-danger btn-sm" href="{{route('product.gallery.delete',encrypt($galleryPhoto->id))}}">Delete</a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-3" style="background-color: whitesmoke;">
                    <form method="post" action="{{route('product.gallery.store')}}" enctype="multipart/form-data">
                        @csrf
                        <label for="upload_file" class="col-md-12 col-form-label">Product Gallery Images<span class="text-danger">*</span>(Click to upload)</label>

                        <div class="row" id="gallery-holder">

                        </div>

                        <input type="file" style="display: none;" id="upload_file" name="image[]" accept="image/x-png,image/jpeg" multiple required/>

                        <input type="hidden" value="{{$slug}}" name="product_id">

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

