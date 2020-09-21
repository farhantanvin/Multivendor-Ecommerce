@extends("backend.layout.layout")
@section("title","Edit Navigation")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Navigation
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">

                    <form method="post" action="{{route("navigation.update",$navigation->id)}}">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}"
                                    id="name" name="name" placeholder="Enter Navigation name"
                                    value="{{old("name",$navigation->name)}}">
                                <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}}
                                </span>
                            </div>
                            @php
                            $type = '';
                            if(!empty(old('type'))){
                            $type = old('type');
                            }
                            @endphp

                            @php
                            $position = '';
                            if(!empty(old('position'))){
                            $position = old('position');
                            }
                            @endphp

                            @php
                            $footer_position= '';
                            if(!empty(old('position'))){
                            $footer_position= old('footer_position');
                            }
                            @endphp

                            <div class="form-group select2-parent">
                                <label>Navigation Position<span class="text-danger">*</span></label>
                                <select name="position" id="position" class="form-control single-select2"
                                    style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="1" @if($position==1 ||$navigation->position ==1) selected
                                        @endif>Header Menu</option>
                                    <option value="2" @if($position==2 ||$navigation->position ==2) selected
                                        @endif>Middle</option>
                                    <option value="3" @if($position==3 ||$navigation->position ==3)
                                        selected
                                        @endif>Footer Menu</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has("position") ? $errors->first("position") : ""}} </span>
                            </div>


                            <div class="form-group select2-parent" id="footer_position">
                                <label>Footer Menu Position<span class="text-danger">*</span></label>
                                <select name="footer_position" class="form-control single-select2" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option @if(empty($footer_postion)) selected @endif disabled>Select Fotter Menu
                                        Position
                                    </option>
                                    <option value="1" @if($footer_position==1||$navigation->footer_position==1) selected
                                        @endif>Left</option>
                                    <option value="2" @if($footer_position==2||$navigation->footer_position==2)
                                        selected @endif>Middle</option>
                                    <option value="3" @if($footer_position==3||$navigation->footer_position==3) selected
                                        @endif>Right</option>
                                </select>
                                <span class="text-danger">
                                    {{$errors->has("footer_position") ? $errors->first("footer_position") : ""}} </span>
                            </div>


                            <div class="form-group select2-parent">
                                <label>Navigation Type<span class="text-danger">*</span></label>
                                <select name="type" id="type" class="form-control single-select2" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="1" @if($type==1 || $navigation->type ==1) selected @endif>Page
                                    </option>
                                    <option value="2" @if($type==2 || $navigation->type ==2) selected @endif>Custom
                                        URL
                                    </option>
                                </select>
                                <span class="text-danger"> {{$errors->has("type") ? $errors->first("type") : ""}}
                                </span>
                            </div>

                            <div class="form-group select2-parent" id="page">
                                <label>Page<span class="text-danger">*</span></label>
                                <select name="page" class="form-control single-select2" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected disabled>Select Page</option>
                                    @foreach($pages as $page)
                                    <option value="{{$page->slug}}" @if($page->slug == $navigation->url) selected
                                        @endif>{{$page->title}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger"> {{$errors->has("page") ? $errors->first("page") : ""}}
                                </span>
                            </div>

                            <div class="form-group" id="url">
                                <label for="custom_url">Custom Url<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{$errors->has("custom_url") ? "is-invalid":""}}"
                                    id="custom_url" name="custom_url" placeholder="Enter url with https/http"
                                    value="{{old("custom_url",$navigation->url)}}">
                                <span class="text-danger">
                                    {{$errors->has("custom_url") ? $errors->first("custom_url") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="serial">Serial<span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{$errors->has("serial") ? "is-invalid":""}}"
                                    id="serial" name="serial" placeholder="Enter menu serial"
                                    value="{{old("serial",$navigation->serial)}}">
                                <span class="text-danger">
                                    {{$errors->has("serial") ? $errors->first("serial") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <!-- Default input -->
                                <label for="inputPassword3">Meta Tag</label>
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Meta Tag"
                                    name="meta_tag" value="{{old('meta_tag',$navigation->meta_tag)}}">
                            </div>

                            <div class="form-group">
                                <!-- Default input -->
                                <label for="inputPassword3">Meta
                                    Description</label>
                                <textarea class="form-control" id="description" name="meta_description"
                                    placeholder="Meta Description">{{old("meta_description",$navigation->meta_description)}}</textarea>
                            </div>

                            <div class="form-group select2-parent">
                                <label>Status</label>
                                <select name="status" class="form-control single-select2" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="0"
                                        {{(old("status") == 0 || $navigation->status == 0 ) ? "selected" : "" }}>
                                        Inactive
                                    </option>
                                    <option value="1"
                                        {{(old("status") == 1 || $navigation->status == 1 ) ? "selected" : "" }}>
                                        Active
                                    </option>
                                </select>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="col-md-12 text-center mt-3">
                            <a href="{{url()->previous()}}"
                                class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                            <button type="submit"
                                class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {

            var type = $('#type').val();

            if (Boolean(type)){
                if (type == 1){
                    $('#page').css('display','block');
                    $('#url').css('display','none');
                }else{
                    $('#page').css('display','none');
                    $('#url').css('display','block');
                }
            }else{
                $('#page').css('display','none');
                $('#url').css('display','none');
            }

            $('#type').on('change',function () {
                var type = $(this).val();

                if (type == 1){
                    $('#page').css('display','block');
                    $('#url').css('display','none');
                }else{
                    $('#page').css('display','none');
                    $('#url').css('display','block');
                }

            })


            if (Boolean(footer)){
            if (footer == 3){
            $('#footer_position').css('display','block');
            }else{
            $('#footer_position').css('display','none');
            }
            }else{
            $('#footer_position').css('display','none');
            }


            $('#position').on('change',function () {
            var footer = $(this).val();
            if (footer == 3){
            $('#footer_position').css('display','block');
            }else{
            $('#footer_position').css('display','none');
            }

            })
        });
</script>
@endsection
