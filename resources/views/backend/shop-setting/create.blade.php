@extends('backend.layout.layout')
@section("title","Create Shop Setting")
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Create Shop Setting
                    </h4>
                </div>
                <form method="post" action="{{route("shop-setting.store")}}" class="submit-form" id="shop_setting_form" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="card-body">
                        <div class="fl-form">
                            <div class="form">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="logo" class="col-form-label">Logo</label>
                                        <p>
                                            <input name="logo" type="file" accept="image/*" class="image" id="image" style="display: none;">
                                        </p>
                                        <p>
                                            <label for="image" style="cursor: pointer;">
                                                <img id="output" src="{{asset('/public/demo-pic/upload-image.jpg')}}" width="200" />
                                            </label>
                                        </p>
                                        <span class="text-danger"> {{$errors->has("logo") ? $errors->first("logo") : ""}} </span>
                                    </div>

                                    <div class="col-6">
                                        <label for="banner" class="col-form-label">Banner</label>
                                        <p>
                                            <input name="banner" type="file" accept="image/*" class="banner" id="banner">
                                        </p>
                                        <p>
                                            <img id="banner-show" src="{{asset('/public/demo-pic/upload-image.jpg')}}" width="200" />
                                        </p>
                                        <span class="text-danger"> {{$errors->has("banner") ? $errors->first("banner") : ""}} </span>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="status" class="col-md-3 col-form-label">Status <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <select class="browser-default custom-select form-control" name="status">
                                                    <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                                    <option value="0" @if(old('status') AND old('status')==0) selected @endif>Inactive</option>
                                                </select>
                                                <span class="text-danger"> {{$errors->has("status") ? $errors->first("status") : ""}} </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center mt-3">
                                        <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light submit_button">Save</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light cancel">Cancel</button>
                                        <div class="spinner">&nbsp;</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#banner-show').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#banner").change(function() {
            readURL(this);
        });
    </script>
@endsection


