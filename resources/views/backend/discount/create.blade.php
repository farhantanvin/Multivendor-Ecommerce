@extends('backend.layout.layout')
@section("title","Create Discount")
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Create Discount
                    </h4>
                </div>
                <form method="post" action="{{route("discount.store")}}" class="submit-form" id="discount_form" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="card-body">
                        <div class="fl-form">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-2 col-form-label">Title <span style="color:red">*</span></label>
                                                    <div class="col-md-10">
                                                        <div class="md-form mt-0">
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter discount title" value="{{old("name")}}" data-parsley-trigger="keyup" data-parsley-required-message="The title is required." required>
                                                            <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <!-- Material input -->
                                            <label for="start_date" class="col-md-4 col-form-label">Start Date <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control datetimepicker" id="start_date" name="start_date" placeholder="Enter start date" value="{{old("start_date")}}" data-parsley-trigger="keyup" data-parsley-required-message="The start date is required." required autocomplete="off">
                                                    <span class="text-danger"> {{$errors->has("start_date") ? $errors->first("start_date") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <!-- Material input -->
                                            <label for="expired_date" class="col-md-4 col-form-label">Expiry Date <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control" id="expired_date" name="expired_date" placeholder="Enter name" value="{{old("expired_date")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="250" data-parsley-required-message="The expired date is required." required required autocomplete="off">
                                                    <span class="text-danger"> {{$errors->has("expired_date") ? $errors->first("expired_date") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <!-- Material input -->
                                            <label for="amount" class="col-md-4 col-form-label">Amount <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount" value="{{old("amount")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="15" step="100" data-parsley-validation-threshold="1" data-parsley-type="number"data-parsley-required-message="The amount is required." required>
                                                    <span class="text-danger"> {{$errors->has("amount") ? $errors->first("amount") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <!-- Material input -->
                                            <label for="validity_times" class="col-md-4 col-form-label">Validity of Use <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control" id="validity_times" name="validity_times" placeholder="Enter use time" value="{{old("validity_times")}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="15" data-parsley-type="digits"data-parsley-required-message="The Use time is required." required>
                                                    <span class="text-danger"> {{$errors->has("validity_times") ? $errors->first("validity_times") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                <div class="form-group row">
                                                    <!-- Material input -->
                                                    <label for="description" class="col-md-2 col-form-label">Description <span style="color:red">*</span></label>
                                                    <div class="col-md-10">
                                                        <div class="md-form mt-0">
                                                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="1000" data-parsley-required-message="The description is required." required>{{old("description")}}</textarea>
                                                            <span class="text-danger"> {{$errors->has("description") ? $errors->first("description") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="coupon_type" class="col-md-4 col-form-label">Coupon Type  <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <select class="browser-default custom-select form-control" name="coupon_type" id="coupon_type">
                                                    <option value="">Select one</option>
                                                    <option value="all_user" @if(old('coupon_type')=='all_user') selected @endif>All User</option>
                                                    <option value="specific_user" @if(old('coupon_type')=='specific_user') selected @endif>Specific User</option>
                                                </select>
                                                <span class="text-danger"> {{$errors->has("coupon_type") ? $errors->first("coupon_type") : ""}} </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="status" class="col-md-4 col-form-label">Status <span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <select class="browser-default custom-select form-control" name="status">
                                                    <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                                    <option value="0" @if(old('status') AND old('status')==0) selected @endif>Inactive</option>
                                                </select>
                                                <span class="text-danger"> {{$errors->has("status") ? $errors->first("status") : ""}} </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 @if(old('coupon_type')=='all_user' OR !old('coupon_type')) invisible @endif" id="user_div">
                                        <div class="form-group row">
                                            <label for="users" class="col-md-2 col-form-label">Users <span style="color:red">*</span></label>
                                            <div class="col-md-10">
                                                <div class="input-group mb-3">
                                                    <select class="single-select2 browser-default custom-select form-control" name="users[]" id="users" multiple="multiple" style="width: 100%;">
                                                        <option></option>
                                                        <?php
                                                        $return_arr = old('users');
                                                        if(!$return_arr){
                                                            $return_arr = array();
                                                        }
                                                        ?>
                                                        @foreach($users as $user)
                                                            <option value="{{ $user->id }}" @if(in_array($user->id, $return_arr)) selected @endif>{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger"> {{$errors->has("users.0") ? $errors->first("users") : ""}} </span>
                                                </div>
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

        });
    </script>
@endsection


