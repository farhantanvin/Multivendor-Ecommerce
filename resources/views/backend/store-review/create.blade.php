@extends('backend.layout.layout')
@section("title","Create Store Review")
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Create Store Review
                    </h4>
                </div>
                <form method="post" action="{{route("store-review.store")}}" class="submit-form" id="store_review_form" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="card-body">
                        <div class="fl-form">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="vendor_id" class="col-md-2 col-form-label">Vendor Name <span style="color:red">*</span></label>
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <select class="single-select2 browser-default custom-select form-control" name="vendor_id" id="vendor_id" style="width: 100%;" required="">
                                                                <option value="">Select One</option>
                                                                @foreach($users as $user)
                                                                    <option value="{{ $user->id }}" {{(old('vendor_id') == $user->id) ? 'selected' : ''}}>{{$user->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="text-danger"> {{$errors->has("vendor_id") ? $errors->first("vendor_id") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="customer_name" class="col-md-4 col-form-label">Name <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <div class="md-form mt-0">
                                                            <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter customer name" value="{{old("customer_name")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="255" data-parsley-required-message="The customer name is required." required>
                                                            <span class="text-danger"> {{$errors->has("customer_name") ? $errors->first("customer_name") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label">Email <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <div class="md-form mt-0">
                                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" value="{{old("email")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="255" data-parsley-type="email" data-parsley-required-message="The email is required." required>
                                                            <span class="text-danger"> {{$errors->has("email") ? $errors->first("email") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="review" class="col-md-2 col-form-label">Review <span style="color:red">*</span></label>
                                                    <div class="col-md-10">
                                                        <div class="md-form mt-0">
                                                            <textarea type="review" class="form-control" id="review" name="review" placeholder="Enter Review" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="191" data-parsley-required-message="The review is required." required>{{old("review")}}</textarea>
                                                            <span class="text-danger"> {{$errors->has("review") ? $errors->first("review") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="rating" class="col-md-4 col-form-label">Rating <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <div class="md-form mt-0">
                                                            <input type="text" class="form-control" name="rating" id="rating" placeholder="Enter rating" value="{{old("rating")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="20" data-parsley-type="digits" data-parsley-required-message="The delivery charge is required." required>
                                                            <span class="text-danger"> {{$errors->has("email") ? $errors->first("email") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="status" class="col-md-4 col-form-label">Status <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <select class="browser-default custom-select form-control" name="status">
                                                            <option value="1" @if(old("status")==1) selected @endif>Approved</option>
                                                            <option value="2" @if(old("status")==2) selected @endif>Rejected</option>
                                                            <option value="3" @if(old("status")==3) selected @endif>Panding</option>
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
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){

            $('#users').select2({
                placeholder: "Select users"
            });

            $(document).on("change","#coupon_type", function(){
                var coupon_type = $(this).val();
                if(coupon_type=='specific_user'){
                    // $("#user_div").show();
                    $("#user_div").removeClass("invisible");
                    $('#users').attr('required', 'required').parsley();
                }else{
                    // $("#user_div").hide();
                    $("#user_div").addClass("invisible");
                    $('#users').removeAttr('required').parsley();
                }
            });

            $(".submit-form").submit(function(e){
                if( $(this).parsley().validate() ){
                    $('.spinner:last').show();
                    $('.submit_button').attr('disabled','disabled');
                }

            });

        });
    </script>
@endsection


