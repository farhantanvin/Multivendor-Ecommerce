@extends('backend.layout.layout')
@section('title','Product Create')
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">
                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Product Create
                    </h4>
                </div>
                <div class="card-body">
                    <div class="fl-form">
                        <div class="form">
                            <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" data-parsley-validate>
                                @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="product_name" class="col-md-4 col-form-label">Product Name <span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" autocomplete="off" name="product_name" class="form-control" id="product_name" placeholder="Product Name" value="{{old('product_name')}}" required data-parsley-maxlength="90">
                                                <span class="text-danger">
                                            @error('product_name') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="product_condition" class="col-md-4 col-form-label">Product Condation<span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <select class="browser-default custom-select form-control" id="product_condition" name="product_condition"  required>
                                                    <option selected disabled>Select One</option>
                                                    <option value="new">New</option>
                                                    <option value="used">Used</option>
                                                </select>
                                                <span class="text-danger">
                                            @error('product_condition') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="category_id" class="col-md-4 col-form-label">Category<span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <select class="js-example-basic-single browser-default custom-select form-control select2-hidden-accessible" id="category_id" name="category_id" tabindex="-1" aria-hidden="true" required>
                                                    <option selected disabled>Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                            @error('category_id') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="subcategory_id" class="col-md-4 col-form-label">Sub Category</label>
                                            <div class="col-md-8">
                                                <select class="js-example-basic-single browser-default custom-select form-control select2-hidden-accessible" id="subcategory_id" name="subcategory_id" tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>Select Sub Category</option>
                                                </select>
                                                <span class="text-danger">
                                            @error('subcategory_id') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="brand_id" class="col-md-4 col-form-label">Brand</label>
                                            <div class="col-md-8">
                                                <select class="js-example-basic-single browser-default custom-select form-control select2-hidden-accessible" id="brand_id" name="brand_id" tabindex="-1" aria-hidden="true">

                                                    <option selected disabled>Select Brand</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">
                                            @error('brand_id') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="sell_price" class="col-md-4 col-form-label">Sell Price<span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" autocomplete="off" name="sell_price" class="form-control" id="sell_price" placeholder="Product Sell Price" value="{{old('sell_price')}}" required data-parsley-type="number" data-parsley-min="0.01" step="any">
                                                <span class="text-danger">
                                            @error('sell_price') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="regular_price" class="col-md-4 col-form-label">Regular Price</label>
                                            <div class="col-md-8">
                                                <input type="text" autocomplete="off" name="regular_price" class="form-control" id="regular_price" placeholder="Product Regular Price" value="{{old('regular_price')}}" data-parsley-type="number" data-parsley-min="0.01" step="any">
                                                <span class="text-danger">
                                            @error('regular_price') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="vat" class="col-md-4 col-form-label">Vat%<span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" autocomplete="off" name="vat" class="form-control" id="vat" placeholder="Product Vat Price" value="{{old('vat')}}" required data-parsley-type="number" data-parsley-min="0" data-parsley-max="100"  step="any">
                                                <span class="text-danger">
                                            @error('vat') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="stock_available" name="stock_available" value="1">
                                                        <label class="custom-control-label" for="stock_available">Stock Available (Leave Uncheck will Show Always Available)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="set_as_featured" name="set_as_featured" value="1">
                                                        <label class="custom-control-label" for="set_as_featured">Set as featured?</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="short_description" class="col-md-4 col-form-label">Short Description<span class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <textarea name="short_description" id="short_description" class="form-control" autocomplete="off" cols="5" rows="5" data-parsley-length="[20, 300]" required></textarea>
                                                <span class="text-danger">
                                            @error('short_description') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Feature Image</label>
                                            <div class="col-md-8">
                                                <p><input name="product_image" type="file" accept="image/x-png,image/jpeg" class="image"
                                                          id="image" style="display: none;" required></p>
                                                <p><label for="image" style="cursor: pointer;">
                                                        <img id="output" src="{{asset('/public/demo-pic/upload-image.jpg')}}"
                                                             width="100" />
                                                    </label></p>
                                                <span class="text-danger">
                                            {{$errors->has("image") ? $errors->first("image") : ""}}
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 p-2" style="background-color: whitesmoke;margin-bottom: 15px">
                                        <label for="upload_file" class="col-md-12 col-form-label">Product Gallery Images<span class="text-danger">*</span>(Click to upload)</label>

                                        <div class="row" id="gallery-holder">

                                        </div>

                                        <input type="file" style="display: none;" id="upload_file" name="image[]" accept="image/x-png,image/jpeg" multiple required/>
                                    </div>

                                    <div class="col-md-12" id="variable_check">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="variable_product" name="variable_product" value="1">
                                                                <label class="custom-control-label" for="variable_product">Variable Product?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" id="mquantity">
                                                <div class="form-group row" id="inside_mquantity">
                                                    <label class="col-md-4 col-form-label">Quantity<span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" autocomplete="off" name="product_quantity[]" class="form-control" placeholder="Product Quantity" value="{{old('product_quantity')}}" required data-parsley-type="number" data-parsley-min="1"  step="any">

                                                        <input type="hidden" name="product_varient[]" value="" >
                                                        <input type="hidden"  name="product_price[]" value="">

                                                        <span class="text-danger">
                                                            @error('product_quantity') {{$message}} @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--Variable row holder--}}
                                    <div class="col-md-12" id="variable_row_holder">

                                    </div>
                                    {{--Variable row holder--}}
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="description" class="col-md-12 col-form-label">Description<span class="text-danger">*</span></label>
                                            <div class="col-md-12">
                                                <textarea name="description" id="description" class="form-control txt-editor">{!! old('description') !!}</textarea>
                                                <span class="text-danger">
                                            @error('description') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="specification" class="col-md-12 col-form-label">Specification</label>
                                            <div class="col-md-12">
                                                <textarea name="specification" id="specification" class="form-control txt-editor">{!! old('specification') !!}</textarea>
                                                <span class="text-danger">
                                            @error('specification') {{$message}} @enderror
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="policy" class="col-md-12 col-form-label">Return Policy</label>
                                                    <div class="col-md-12">
                                                        <textarea name="policy" id="policy" class="form-control txt-editor">{!! old('policy') !!}</textarea>
                                                        <span class="text-danger">
                                            @error('policy') {{$message}} @enderror
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="affiliate_commision" class="col-md-12 col-form-label">Affiliate Commision ( Leave Empty If Not Interested )</label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="affiliate_commision" class="form-control" id="affiliate_commision" placeholder="Affiliate Commision" value="{{old('affiliate_commision')}}" data-parsley-type="number" data-parsley-min="0.1" data-parsley-max="100" step="any">
                                                                <span class="text-danger">
                                                                    @error('affiliate_commision') {{$message}} @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="delivery_charge" class="col-md-12 col-form-label">Delivery Charge<span class="text-danger">*</span></label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="delivery_charge" class="form-control" id="delivery_charge" placeholder="Delivery Charge" value="{{old('delivery_charge')}}" data-parsley-type="number" data-parsley-min="0" step="any" required>
                                                                <span class="text-danger">
                                                                    @error('delivery_charge') {{$message}} @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="free_shipping" name="free_shipping" value="1">
                                                            <label class="custom-control-label" for="free_shipping">Allow Free Shipping</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="product_unit" class="col-md-12 col-form-label">Product Unit</label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="product_unit" class="form-control" id="product_unit" placeholder="Product Name" value="{{old('product_unit')}}">
                                                                <span class="text-danger">
                                                                    @error('product_unit') {{$message}} @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="meta_description" class="col-md-12 col-form-label">Meta Description</label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="meta_description" class="form-control" id="meta_description" placeholder="" value="{{old('meta_description')}}" data-parsley-maxlength="90">
                                                                <span class="text-danger">
                                            @error('meta_description') {{$message}} @enderror
                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="meta_key" class="col-md-12 col-form-label">Meta Key Word</label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="meta_key" class="form-control" id="meta_key" placeholder="" value="{{old('meta_key')}}" data-parsley-maxlength="70">
                                                                <span class="text-danger">
                                            @error('meta_key') {{$message}} @enderror
                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label for="youtube_link" class="col-md-12 col-form-label">Youtube Link</label>
                                                            <div class="col-md-12">
                                                                <input type="text" autocomplete="off" name="youtube_link" class="form-control" id="youtube_link" placeholder="" value="{{old('youtube_link')}}" data-parsley-maxlength="100">
                                                                <span class="text-danger">
                                            @error('youtube_link') {{$message}} @enderror
                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center mt-3">
                                        <a href="{{url()->previous()}}" class="btn btn-danger btn-rounded waves-effect waves-light">Go Back</a>
                                        <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light">Save</button>
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

@section('js')
    <script>
        $(document).on('change', '#category_id', function(){

            var category_id = $(this).val();
            var sub_category = $('#subcategory_id');
            var url= "{{route('get.subcategory')}}";
            var csrf = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: "post",
                url: url,
                data: {
                    _token: csrf,
                    'category_id': category_id
                },
                dataType: "html",
                success: function(data) {
                    sub_category.empty();
                    sub_category.append('<option selected disabled>Select Sub category</option>');
                    $.each(JSON.parse(data),function (index,value) {
                        sub_category.append('<option value="'+value.id+'">'+value.category_name+'</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus+errorThrown);
                }
            });
        });
    </script>
@endsection
