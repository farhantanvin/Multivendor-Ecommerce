@extends('backend.layout.layout')
@section("title","Update Page")
@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Update Page
                    </h4>
                </div>
                <form method="post" action="{{route("vendor-page.update", $vendorPage->id)}}" class="submit-form" id="shop_setting_form" enctype="multipart/form-data" data-parsley-validate>
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="fl-form">
                            <div class="form">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="method_name" class="col-md-2 col-form-label">Page Title <span style="color:red">*</span></label>
                                            <div class="col-md-7">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control" name="page_title" id="page_title" placeholder="Enter option name" value="{{old("page_title", $vendorPage->page_title)}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="500" data-parsley-required-message="The page title is required." required>
                                                    <span class="text-danger"> {{$errors->has("page_title") ? $errors->first("page_title") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="method_name" class="col-md-2 col-form-label">Description <span style="color:red">*</span></label>
                                            <div class="col-md-7">
                                                <div class="md-form mt-0">
                                                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-required-message="The description is required.">{{old("description", $vendorPage->description)}}</textarea>
                                                    <span class="text-danger"> {{$errors->has("description") ? $errors->first("description") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="sl_no" class="col-md-2 col-form-label">Serial No. <span style="color:red">*</span></label>
                                            <div class="col-md-7">
                                                <div class="md-form mt-0">
                                                    <input type="text" class="form-control" name="sl_no" id="sl_no"  placeholder="Enter serial number" value="{{old("sl_no", $vendorPage->sl_no)}}" data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="11" data-parsley-required-message="The Serial is required." data-parsley-type="digits" required>
                                                    <span class="text-danger"> {{$errors->has("sl_no") ? $errors->first("sl_no") : ""}} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="status" class="col-md-2 col-form-label">Status <span style="color:red">*</span></label>
                                            <div class="col-md-7">
                                                <select class="browser-default custom-select form-control" name="status">
                                                    <option value="1" @if(old("status", $vendorPage->status)==1) selected @endif>Active</option>
                                                    <option value="0" @if(old("status", $vendorPage->status)==0) selected @endif>Inactive</option>
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
    $(document).ready(function(){
        tinymce.init({
            selector: '#description',
            height: 250,
            theme: 'modern',
            plugins: [
                "link image code fullscreen imageupload",
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | code',
            image_title: true, 
          // enable automatic uploads of images represented by blob or data URIs
          automatic_uploads: true,
          // add custom filepicker only to Image dialog
          file_picker_types: 'image',
          relative_urls: false,
          file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
              var file = this.files[0];
              
              var reader = new FileReader();
              reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
              };
              reader.readAsDataURL(file);
            };
            
            input.click();
          }
            
        });
    });
</script>
@endsection


