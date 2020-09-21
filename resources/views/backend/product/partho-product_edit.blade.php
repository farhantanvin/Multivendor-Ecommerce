@extends('backend.layout.layout')

@section('content')
<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">
            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Product Information
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <div class="form">
                    <form method="post" action="{{route('product_update')}}" enctype="multipart/form-data">
                        @csrf 
                    <input type="hidden" name="id" value="{{base64_encode($productDetails->main_ids)}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Name</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="product_name" class="form-control" id="product_name" placeholder="Product Name" value="{{ $productDetails->product_name}}">
                                    <span class="text-danger">@error('product_name') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Quantity</label>
                                    <div class="col-md-9">
                                    <input type="number" autocomplete="off" step="any" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="{{ $productDetails->quantity}}">
                                    <span class="text-danger">@error('quantity') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Regular Price</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                    <input type="text" class="form-control" autocomplete="off" name="regular_price" id="regular_price" placeholder="Regular Price" value="{{ $productDetails->regular_price}} ">
                                    <span class="text-danger">@error('regular_price') {{$message}} @enderror</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Sell Price</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="text" autocomplete="off" name="sell_price" class="form-control" id="sell_price" placeholder="Sell Price" value="{{ $productDetails->sell_price}}">
                                        <span class="text-danger">@error('sell_price') {{$message}} @enderror</span>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Discount%</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                    <input type="number" step="any" autocomplete="off" name="discount" class="form-control" id="discount" placeholder="Discount" value="{{ $productDetails->discount}}">
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Vat%</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="number" step="any" autocomplete="off" name="vat" class="form-control" id="vat" placeholder="Vat" value="{{ $productDetails->vat}}">
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Category</label>
                                    <div class="col-md-9">
                                        <div class="input-group mb-3">
                                        <select class="js-example-basic-single browser-default custom-select form-control" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($category as $cat)
                                                @php
                                                $selected = '';
                                                if($cat->id == $productDetails->category_id)    // Any Id
                                                {
                                                $selected = 'selected="selected"';
                                                }
                                                @endphp
                                                  <option value='{{ $cat->id }}' {{$selected}} >{{$cat->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('category_id') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Category</label>
                                    <div class="col-md-9">
                                        <div class="input-group mb-3">
                                        <select class="js-example-basic-single browser-default custom-select form-control" name="brand_id">
                                                <option value="">Select Brand</option>
                                                @foreach($brand as $cat)
                                                @php
                                                $selected = '';
                                                if($cat->id == $productDetails->brand_id)    // Any Id
                                                {
                                                $selected = 'selected="selected"';
                                                }
                                                @endphp
                                                  <option value='{{ $cat->id }}' {{$selected}} >{{$cat->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('category_id') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Unit</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="text" autocomplete="off" name="product_unit" class="form-control" id="product_unit" placeholder="Product Unit" value="{{ $productDetails->product_unit}} ">
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Type</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="text" autocomplete="off" name="product_type" class="form-control" id="product_type" placeholder="Product Type" value="{{ $productDetails->product_type}}">
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                    <textarea name="description" id="description" class="form-control" autocomplete="off" cols="5" rows="5">{{ $productDetails->description}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Specification</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <textarea name="specification" id="specification" class="form-control" autocomplete="off" cols="5" rows="5">{{ $productDetails->specification}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Facebook Url</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off"  name="facebook_link" class="form-control" id="facebook_link" placeholder="Facebook Url" value="{{ $productDetails->facebook_link}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Youtube Url</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="youtube_link" class="form-control" id="youtube_link" placeholder="Youtube Url" value="{{ $productDetails->youtube_link}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Code</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="product_code" class="form-control" id="product_code" placeholder="Product Code" value="{{ $productDetails->product_code}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Delivery Charge</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="delivery_charge" class="form-control" id="delivery_charge" placeholder="Delivery Charge" value="{{ $productDetails->delivery_charge}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Review Alllow? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="review_allowed" id="review_allowed">
                                            @if($productDetails->review_allowed==0) 
                                            <option value="0" selected>No</option>  
                                            <option value="1">Yes</option>  
                                            @else 
                                            <option value="1" selected>Yes</option>  
                                            <option value="0">No</option> 
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Comment Allow? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="comment_allowed" id="comment_allowed">
                                            @if($productDetails->comment_allowed==0) 
                                            <option value="0" selected>No</option>  
                                            <option value="1">Yes</option>  
                                            @else 
                                            <option value="1" selected>Yes</option>  
                                            <option value="0">No</option> 
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Set as featured? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="set_as_featured" id="set_as_featured">
                                            @if($productDetails->set_as_featured==0) 
                                            <option value="0" selected>No</option>  
                                            <option value="1">Yes</option>  
                                            @else 
                                            <option value="1" selected>Yes</option>  
                                            <option value="0">No</option> 
                                            @endif
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Free Shipping? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="free_shipping" id="free_shipping">
                                            @if($productDetails->free_shipping==0) 
                                            <option value="0" selected>No</option>  
                                            <option value="1">Yes</option>  
                                            @else 
                                            <option value="1" selected>Yes</option>  
                                            <option value="0">No</option> 
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Weight</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="weight" class="form-control" id="weight" placeholder="Product Weight" value="{{$productDetails->weight}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Policy</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                    <textarea name="policy" id="policy" class="form-control" autocomplete="off" cols="5" rows="5">{{$productDetails->policy}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Allow Estimated Shipping Time? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="allowed_estimated_shipping_time" id="allowed_estimated_shipping_time">
                                            @if($productDetails->allowed_estimated_shipping_time==0) 
                                            <option value="0" selected>No</option>  
                                            <option value="1">Yes</option>  
                                            @else 
                                            <option value="1" selected>Yes</option>  
                                            <option value="0">No</option> 
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Sku</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="sku" class="form-control" id="sku" placeholder="Product Sku" value="{{$productDetails->sku}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Tax Rate%</label>
                                    <div class="col-md-9">
                                    <input type="number" step="any" autocomplete="off" name="tex_rate" class="form-control" id="tex_rate" placeholder="Product Tax Rate" value="{{$productDetails->tex_rate}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Model</label>
                                    <div class="col-md-9">
                                        <input type="text"  autocomplete="off" name="model_number" class="form-control" id="model_number" placeholder="Product Model" value="{{$productDetails->model_number}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Max Order Qty</label>
                                    <div class="col-md-9">
                                    <input type="number" step="any" autocomplete="off" name="max_order_quantity" class="form-control" id="max_order_quantity" placeholder="Max Order Quantity" value="{{$productDetails->max_order_quantity}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Currency</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="currency_id" id="currency_id">
                                            <option value="1">Taka</option>
                                           <option value="0">Taka</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-md-6">
                                <label>
                                    Image
                                </label>
                            <p><img width="150px" height="150px" src="{{asset('public/upload/product/'.$productDetails->product_image)}}" class="image-responsive" id="product_image"></p>
                            <input type="hidden" name="default_img" value="{{$productDetails->product_image}}">
                            <p><input name="product_image" type="file" accept="image/*" class="image" id="product_image">
                            </div>

                         

                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Status </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="status" id="status">
                                            @if($productDetails->product_status==0) 
                                            <option value="0" selected>Inactive</option>  
                                            <option value="1">Active</option>  
                                            @else 
                                            <option value="1" selected>Active</option>  
                                            <option value="0">Inactive</option> 
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    Color
                                </label>
                                <div class="table-responsive">
                                <table class="table fl_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $order=0;  $i = CustomClass::paginationSerial($productcolor); @endphp  
                                    @forelse($productcolor as $item)
                                    @php $order++; @endphp  
                                    <tr>
                                    <th scope="row">{{$order}}</th>
                                        <td>{{$item->color}}<td>
                                            <td>                                                 <a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a><td>
                                    </tr>
                                    @empty
                                            <tr>
                                                <td colspan="7">
                                                    <h2 class="text-center">No Color Found</h2>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    @if(!empty($productcolor->links()))
                                    <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            {{$productcolor->links()}}
                                        </td>
                                    </tr>
                                    </tfoot>
                                    @endif
                                </table>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    Size
                                </label>
                                <div class="table-responsive">
                                    <table class="table fl_table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $order=0;  $i = CustomClass::paginationSerial($product_size); @endphp  
                                        @forelse($product_size as $item)
                                        @php $order++; @endphp  
                                        <tr>
                                        <th scope="row">{{$order}}</th>
                                            <td>{{$item->size}}<td>
                                             <td><a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a></td>   
                                        </tr>
                                        @empty
                                                <tr>
                                                    <td colspan="7">
                                                        <h2 class="text-center">No Size Found</h2>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if(!empty($product_size->links()))
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                {{$product_size->links()}}
                                            </td>
                                        </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    Tag
                                </label>
                                <div class="table-responsive">
                                    <table class="table fl_table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tag</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $order=0;  $i = CustomClass::paginationSerial($product_tag); @endphp  
                                        @forelse($product_tag as $item)
                                        @php $order++; @endphp  
                                        <tr>
                                        <th scope="row">{{$order}}</th>
                                            <td>{{$item->tag}}<td>
                                            <td><a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a></td>       
                                        </tr>
                                        @empty
                                                <tr>
                                                    <td colspan="7">
                                                        <h2 class="text-center">No Tag Found</h2>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if(!empty($product_tag->links()))
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                {{$product_tag->links()}}
                                            </td>
                                        </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    Gallery
                                </label>
                                <div class="table-responsive">
                                    <table class="table fl_table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $order=0;  $i = CustomClass::paginationSerial($product_gallery); @endphp  
                                        @forelse($product_gallery as $item)
                                        @php $order++; @endphp  
                                        <tr>
                                        <th scope="row">{{$order}}</th>
                                            <td><img width="50px" height="50px" src="{{asset('public/upload/product/gallery/'.$item->image)}}" class="image-responsive" id="product_image"><td>
                                                <td><a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a></td>        
                                        </tr>
                                        @empty
                                                <tr>
                                                    <td colspan="7">
                                                        <h2 class="text-center">No Gallery Found</h2>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                        @if(!empty($product_gallery->links()))
                                        <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                {{$product_gallery->links()}}
                                            </td>
                                        </tr>
                                        </tfoot>
                                        @endif
                                    </table>
                                  </div>

                            </div>

                            <div class="col-md-6">
                                <label>
                                    Seo
                                </label>
                                <div class="col-md-12">
                                <input type="text"  name="keyword" class="form-control" id="" placeholder="Keyword" value="{{$productDetails->meta_key}}">
                                </div>
                                <div class="col-md-12">
                                    <input type="text"  name="description" class="form-control" id="" placeholder="Description" value="{{$productDetails->meta_description}}">
                                </div>
                            </div>

                        
                            <div class="col-md-6">
                                <label>
                                    Options
                                </label>
                                <div class="fl-table-section">
                                    <div class="table_body">
                                        <div class="table-responsive">
                                            <table class="table fl_table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Option Name</th>
                                                    <th scope="col">Option value</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $order=0;  $i = CustomClass::paginationSerial($product_option); @endphp  
                                                @forelse($product_option as $item)
                                                @php $order++; @endphp  
                                                <tr>
                                                <th scope="row">{{$order}}</th>
                                                    <td>{{$item->meta_key}}</td>
                                                    <td>{{$item->meta_value}}</td>
                                                 <td><a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a><td>
                                                </tr>
                                                @empty
                                                        <tr>
                                                            <td colspan="7">
                                                                <h2 class="text-center">No Product Options Found</h2>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                @if(!empty($product_option->links()))
                                                <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        {{$product_option->links()}}
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>
















                            <div class="col-md-6">
                                <label>
                                    Product Related
                                </label>
                                <div class="fl-table-section">
                                    <div class="table_body">
                                        <div class="table-responsive">
                                            <table class="table fl_table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Brand</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $order=0;  $i = CustomClass::paginationSerial($product_related); @endphp  
                                                @forelse($product_related as $item)
                                                @php $order++; @endphp  
                                                <tr>
                                                <th scope="row">{{$order}}</th>
                                                   <td>   
                                                    <img width="50px" height="50px" src="{{asset('public/upload/product/'.$item->product_image)}}">
                                                   </td>
                                                    <td>{{$item->product_name}}</td>
                                                    <td>{{$item->category_name}}</td>
                                                    <td>{{$item->brand_name}}</td>
                                                    <td> @if($item->product_status == 0)
                                                        <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                                        @else
                                                        <span class="btn btn-sm btn-success p-1">Active</span>
                                                    @endif
                                                 </td>
                                                 <td><a class="status btn btn-sm fl_btn btn-danger" title="Delete" href=""><i class="fa fa-trash"></i></a><td>
                                                </tr>
                                                @empty
                                                        <tr>
                                                            <td colspan="7">
                                                                <h2 class="text-center">No Related Product Found</h2>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                @if(!empty($product_related->links()))
                                                <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        {{$product_related->links()}}
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>


                            <div class="col-md-6">
                                <label>
                                    Product Reviews
                                </label>
                                <div class="fl-table-section">
                                    <div class="table_body">
                                        <div class="table-responsive">
                                            <table class="table fl_table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Brand</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Review</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $order=0;  $i = CustomClass::paginationSerial($product_review); @endphp  
                                                @forelse($product_review as $item)
                                                @php $order++; @endphp  
                                                <tr>
                                                <th scope="row">{{$order}}</th>
                                                   <td>   
                                                    <img width="50px" height="50px" src="{{asset('public/upload/product/'.$item->product_image)}}">
                                                   </td>
                                                    <td>{{$item->product_name}}</td>
                                                    <td>{{$item->category_name}}</td>
                                                    <td>{{$item->brand_name}}</td>
                                                    <td>Coming Soon<td>
                                                    <td>{{$item->review}}<td>
                                                </tr>
                                                @empty
                                                        <tr>
                                                            <td colspan="7">
                                                                <h2 class="text-center">No Review Found</h2>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                @if(!empty($product_review->links()))
                                                <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        {{$product_review->links()}}
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>




                            <div class="col-md-6">
                                <label>
                                    Product Comments
                                </label>
                                <div class="fl-table-section">
                                    <div class="table_body">
                                        <div class="table-responsive">
                                            <table class="table fl_table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Brand</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Comments</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $order=0;  $i = CustomClass::paginationSerial($product_comment); @endphp  
                                                @forelse($product_comment as $item)
                                                @php $order++; @endphp  
                                                <tr>
                                                <th scope="row">{{$order}}</th>
                                                   <td>   
                                                    <img width="50px" height="50px" src="{{asset('public/upload/product/'.$item->product_image)}}">
                                                   </td>
                                                    <td>{{$item->product_name}}</td>
                                                    <td>{{$item->category_name}}</td>
                                                    <td>{{$item->brand_name}}</td>
                                                    <td>Coming Soon<td>
                                                    <td>{{$item->comments}}<td>
                                                </tr>
                                                @empty
                                                        <tr>
                                                            <td colspan="7">
                                                                <h2 class="text-center">No Comment Found</h2>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                @if(!empty($product_comment->links()))
                                                <tfoot>
                                                <tr>
                                                    <td colspan="7">
                                                        {{$product_comment->links()}}
                                                    </td>
                                                </tr>
                                                </tfoot>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Update Information</button>
                            </div>

                        </div>
                    </form> 
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection