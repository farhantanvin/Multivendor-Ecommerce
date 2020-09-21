@extends('backend.layout.layout')
@section("title","Update Translation Language")
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Update Translation Language
                    </h4>
                </div>
                <form method="post" action="{{route("translation-language.update",$translationLanguage->id)}}" class="submit-form" id="translation_language_form" enctype="multipart/form-data" data-parsley-validate>
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="fl-form">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="language_name" class="col-md-4 col-form-label">Language Name <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <div class="md-form mt-0">
                                                            <input type="text" class="form-control" name="language_name" id="language_name" placeholder="Enter language name" value="{{old("language_name",$translationLanguage->language_name)}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="255" data-parsley-required-message="The language name is required." required>
                                                            <span class="text-danger"> {{$errors->has("language_name") ? $errors->first("language_name") : ""}} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="status" class="col-md-4 col-form-label">Status <span style="color:red">*</span></label>
                                                    <div class="col-md-8">
                                                        <select class="browser-default custom-select form-control" name="status">
                                                            <option value="1" @if(old("status", $translationLanguage->status)==1) selected @endif>Active</option>
                                                    <option value="0" @if(old("status", $translationLanguage->status)==0) selected @endif>Inactive</option>
                                                        </select>
                                                        <span class="text-danger"> {{$errors->has("status") ? $errors->first("status") : ""}} </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-right mt-3">
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


