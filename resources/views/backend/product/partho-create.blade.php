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
                        <form method="post" action="{{route('product_store')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Name</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="product_name" class="form-control" id="product_name" placeholder="Product Name" value="{{old('product_name')}}">
                                        <span class="text-danger">@error('product_name') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Quantity</label>
                                    <div class="col-md-9">
                                    <input type="number" autocomplete="off" step="any" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="{{old('quantity')}}">
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
                                    <input type="text" class="form-control" autocomplete="off" name="regular_price" id="regular_price" placeholder="Regular Price" value="{{old('regular_price')}}">
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
                                        <input type="text" autocomplete="off" name="sell_price" class="form-control" id="sell_price" placeholder="Sell Price" value="{{old('sell_price')}}">
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
                                    <input type="number" step="any" autocomplete="off" name="discount" class="form-control" id="discount" placeholder="Discount" value="{{old('discount')}}">
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
                                        <input type="number" step="any" autocomplete="off" name="vat" class="form-control" id="vat" placeholder="Vat" value="{{old('vat')}}">
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
                                                 <option value="{{$cat->id}}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{$cat->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('category_id') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Brand </label>
                                    <div class="col-md-9">
                                        <select class="js-example-basic-single browser-default custom-select form-control" name="brand_id">
                                            <option value="">Select Brand</option>
                                            @foreach($brand as $brands)
                                            <option value="{{$brands->id}}" {{ old('brand_id') == $brands->id ? 'selected' : '' }}>{{$brands->brand_name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('brand_id') {{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Unit</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="text" autocomplete="off" name="product_unit" class="form-control" id="product_unit" placeholder="Product Unit" value="{{old('product_unit')}}">
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
                                        <input type="text" autocomplete="off" name="product_type" class="form-control" id="product_type" placeholder="Product Type" value="{{old('product_type')}}">
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
                                    <textarea name="description" id="description" class="form-control" autocomplete="off" cols="5" rows="5">{{old('description')}}</textarea>
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
                                        <textarea name="specification" id="specification" class="form-control" autocomplete="off" cols="5" rows="5">{{old('specification')}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Facebook Url</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off"  name="facebook_link" class="form-control" id="facebook_link" placeholder="Facebook Url" value="{{old('facebook_link')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Youtube Url</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="youtube_link" class="form-control" id="youtube_link" placeholder="Youtube Url" value="{{old('youtube_link')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Code</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="product_code" class="form-control" id="product_code" placeholder="Product Code" value="{{old('product_code')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Delivery Charge</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="delivery_charge" class="form-control" id="delivery_charge" placeholder="Delivery Charge" value="{{old('delivery_charge')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Review Alllow? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="review_allowed" id="review_allowed">
                                            <option value="0"
                                                 {{ old('review_allowed') == 0 ? 'selected' : '' }}
                                                >No
                                            </option>
                                            <option value="1"
                                                 {{ old('review_allowed') == 1 ? 'selected' : '' }}
                                                >Yes
                                            </option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Comment Allow? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="comment_allowed" id="comment_allowed">
                                            <option value="0"
                                            {{ old('comment_allowed') == 0 ? 'selected' : '' }}
                                           >No
                                       </option>
                                       <option value="1"
                                            {{ old('comment_allowed') == 1 ? 'selected' : '' }}
                                           >Yes
                                       </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Set as featured? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="set_as_featured" id="set_as_featured">
                                            <option value="0"
                                            {{ old('set_as_featured') == 0 ? 'selected' : '' }}
                                           >No
                                       </option>
                                       <option value="1"
                                            {{ old('set_as_featured') == 1 ? 'selected' : '' }}
                                           >Yes
                                       </option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Free Shipping? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="free_shipping" id="free_shipping">
                                            <option value="0"
                                            {{ old('free_shipping') == 0 ? 'selected' : '' }}
                                           >No
                                       </option>
                                       <option value="1"
                                            {{ old('free_shipping') == 1 ? 'selected' : '' }}
                                           >Yes
                                       </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Weight</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="weight" class="form-control" id="weight" placeholder="Product Weight" value="{{old('weight')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Policy</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                    <textarea name="policy" id="policy" class="form-control" autocomplete="off" cols="5" rows="5">{{old('policy')}}</textarea>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Allow Estimated Shipping Time? </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="allowed_estimated_shipping_time" id="allowed_estimated_shipping_time">
                                            <option value="0"
                                            {{ old('allowed_estimated_shipping_time') == 0 ? 'selected' : '' }}
                                           >No
                                       </option>
                                       <option value="1"
                                            {{ old('allowed_estimated_shipping_time') == 1 ? 'selected' : '' }}
                                           >Yes
                                       </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Sku</label>
                                    <div class="col-md-9">
                                    <input type="text" autocomplete="off" name="sku" class="form-control" id="sku" placeholder="Product Sku" value="{{old('sku')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Tax Rate%</label>
                                    <div class="col-md-9">
                                    <input type="number" step="any" autocomplete="off" name="tex_rate" class="form-control" id="tex_rate" placeholder="Product Tax Rate" value="{{old('tex_rate')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Product Model</label>
                                    <div class="col-md-9">
                                        <input type="text"  autocomplete="off" name="model_number" class="form-control" id="model_number" placeholder="Product Model" value="{{old('model_number')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Max Order Qty</label>
                                    <div class="col-md-9">
                                    <input type="number" step="any" autocomplete="off" name="max_order_quantity" class="form-control" id="max_order_quantity" placeholder="Max Order Quantity" value="{{old('max_order_quantity')}}">
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
                                <p><input name="product_image" type="file" accept="image/*" class="image" id="product_image">
                                    <span class="text-danger">@error('product_image') {{$message}} @enderror</span>
                            </div>

                        
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Status </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="status" id="status">
                                            <option value="1"
                                        
                                           >Active
                                       </option>
                                       <option value="0"
                                        
                                           >Inactive
                                       </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>
                                    Color
                                </label>
                                <input type="color" name="color[]">
                                <div class="color_wrap"></div>
                                <button type="button" id="add_color" class=""> <i class="fas fa-plus-circle"></i> Add More</button>
                            </div>

                            <div class="col-md-3">
                                <label>
                                    Size
                                </label>
                                <input type="text"  name="size[]" class="form-control" placeholder="Enter Size">
                                <div class="size_wrap"></div>
                                <button type="button" id="add_size" class=""> <i class="fas fa-plus-circle"></i> Add More</button>
                            </div>

                            <div class="col-md-3">
                                <label>
                                    Tag
                                </label>
                                <input type="text"  name="tag[]" class="form-control" id="" placeholder="Enter Tag">
                                <div class="tag_wrap"></div>
                                <button type="button" id="add_tag" class=""> <i class="fas fa-plus-circle"></i> Add More</button>
                            </div>

                            <div class="col-md-3">
                                <label>
                                    Gallery
                                </label>
                                <input type="file"  name="gallery_image[]" class="form-control" id="">
                                <div class="g_wrap"></div>
                                <button type="button" id="add_g" class=""> <i class="fas fa-plus-circle"></i> Add More</button>
                            </div>

                            <div class="col-md-4">
                                <label>
                                    Seo
                                </label>
                                <div class="col-md-12">
                                    <input type="text"  name="keyword" class="form-control" id="" placeholder="Keyword">
                                </div>
                                <div class="col-md-12">
                                    <input type="text"  name="description" class="form-control" id="" placeholder="Description">
                                </div>
                            </div>

                        
                            <div class="col-md-4">
                                <label>
                                   Extra Options
                                </label>
                                <div class="col-md-12">
                                    <input type="text"  name="meta_key[]" class="form-control" id="" placeholder="Option Name">
                                </div>
                                <div class="col-md-12">
                                    <input type="text"  name="meta_value[]" class="form-control" id="" placeholder="Value">
                                </div>
                                <div class="o_wrap"></div>
                                <button type="button" id="add_o" class=""> <i class="fas fa-plus-circle"></i> Add More</button>
                            </div>

                            <div class="col-md-4">
                                <label>
                                    Product Related
                                </label>
                                <select class="js-example-basic-single browser-default custom-select form-control" name="product_id[]" multiple>
                                    <option value="">Select Product</option>
                                     @foreach($product as $products)
                                        <option value="{{$products->id}}" {{ old('product_id') == $products->id ? 'selected' : '' }}>{{$products->product_name}}</option>
                                     @endforeach 
                                </select>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light"><i class="fa fa-save"></i> Save Information</button>
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
<script type="text/javascript" src="{{asset('/public/backend/assets/js/jquery.js')}}"></script>
<script>
  $(document).ready(function() {

	var max_fields_color      = 20; //maximum input boxes allowed
	var wrapper_color   		= $(".color_wrap"); //Fields wrapper
	var add_button_color      = $("#add_color"); //Add button ID
	var color_x = 1; //initlal text box count
	$(add_button_color).click(function(e){ //on add input button click
		e.preventDefault();
		if(color_x < max_fields_color){ //max input box allowed
			color_x++; //text box increment
			$(wrapper_color).append('<div><input type="color" name="color[]"/><a style="color:red" href="#" class="color_remove_field">X</a></div>'); //add input box
		}
	});
	$(wrapper_color).on("click",".color_remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})


    var max_fields_size      = 20; //maximum input boxes allowed
	var wrapper_size   		= $(".size_wrap"); //Fields wrapper
	var add_button_size      = $("#add_size"); //Add button ID
	var size_x = 1; //initlal text box count
	$(add_button_size).click(function(e){ //on add input button click
		e.preventDefault();
		if(size_x < max_fields_size){ //max input box allowed
			size_x++; //text box increment
			$(wrapper_size).append('<div><input type="text" placeholder="Enter Size" class="form-control" name="size[]"/><a style="color:red" href="#" class="size_remove_field">X</a></div>'); //add input box
		}
	});
	$(wrapper_size).on("click",".size_remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})

    var max_fields_tag      = 20; //maximum input boxes allowed
	var wrapper_tag   		= $(".tag_wrap"); //Fields wrapper
	var add_button_tag      = $("#add_tag"); //Add button ID
	var tag_x = 1; //initlal text box count
	$(add_button_tag).click(function(e){ //on add input button click
		e.preventDefault();
		if(tag_x < max_fields_tag){ //max input box allowed
			tag_x++; //text box increment
			$(wrapper_tag).append('<div><input type="text" placeholder="Enter tag" class="form-control" name="tag[]"/><a style="color:red" href="#" class="tag_remove_field">X</a></div>'); //add input box
		}
	});
	$(wrapper_tag).on("click",".tag_remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})


    var max_fields_g      = 20; //maximum input boxes allowed
	var wrapper_g   		= $(".g_wrap"); //Fields wrapper
	var add_button_g      = $("#add_g"); //Add button ID
	var g_x = 1; //initlal text box count
	$(add_button_g).click(function(e){ //on add input button click
		e.preventDefault();
		if(tag_x < max_fields_g){ //max input box allowed
			g_x++; //text box increment
			$(wrapper_g).append('<div><input type="file" placeholder="Enter tag" class="form-control" name="gallery_image[]"/><a style="color:red" href="#" class="g_remove_field">X</a></div>'); //add input box
		}
	});
	$(wrapper_g).on("click",".g_remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})



    // var max_fields_s      = 20; //maximum input boxes allowed
	// var wrapper_s   		= $(".s_wrap"); //Fields wrapper
	// var add_button_s      = $("#add_s"); //Add button ID
	// var s_x = 1; //initlal text box count
	// $(add_button_s).click(function(e){ //on add input button click
	// 	e.preventDefault();
	// 	if(s_x < max_fields_s){ //max input box allowed
	// 		s_x++; //text box increment
	// 		$(wrapper_s).append('<div><input type="text" placeholder="Enter Keyword" class="form-control" name="keyword[]"/>  <input type="text" placeholder="Enter Description" class="form-control" name="description[]"/>  <a style="color:red" href="#" class="s_remove_field">X</a></div>'); //add input box
	// 	}
	// });
	// $(wrapper_s).on("click",".s_remove_field", function(e){ //user click on remove text
	// 	e.preventDefault(); $(this).parent('div').remove(); x--;
	// })


    var max_fields_o      = 20; //maximum input boxes allowed
	var wrapper_o   		= $(".o_wrap"); //Fields wrapper
	var add_button_o      = $("#add_o"); //Add button ID
	var o_x = 1; //initlal text box count
	$(add_button_o).click(function(e){ //on add input button click
		e.preventDefault();
		if(o_x < max_fields_o){ //max input box allowed
			o_x++; //text box increment
			$(wrapper_o).append('<div><input type="text" placeholder="Option Name" class="form-control" name="meta_key[]"/>  <input type="text" placeholder="Enter value" class="form-control" name="meta_value[]"/>  <a style="color:red" href="#" class="o_remove_field">X</a></div>'); //add input box
		}
	});
	$(wrapper_o).on("click",".o_remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})



});
</script>