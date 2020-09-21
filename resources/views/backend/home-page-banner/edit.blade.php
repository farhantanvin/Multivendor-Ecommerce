@extends("backend.layout.layout")
@section("title","edit home page banner")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit home page banner
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data"
                        action="{{route("home-page-banner.update",$homePageBanner->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="title" class="col-md-3 col-form-label">Title <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="title"
                                                placeholder="Banner title" name="title"
                                                value="{{old("title",$homePageBanner->title)}}">
                                            <span class="text-danger">
                                                {{$errors->has("title") ? $errors->first("title") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text_first" class="col-md-3 col-form-label">Text First</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="text_first" class="form-control" id="text_first"
                                                value="{{old('text_first',$homePageBanner->text_first)}}"
                                                data-parsley-required="true" placeholder="Text">
                                            <span
                                                class="text-danger">{{$errors->has("text_first") ? $errors->first("text_first") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text_second" class="col-md-3 col-form-label">Text Second</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="text_second" class="form-control" id="text_second"
                                                value="{{old('text_second',$homePageBanner->text_second)}}"
                                                data-parsley-required="true" placeholder="Text">
                                            <span
                                                class="text-danger">{{$errors->has("text_second") ? $errors->first("text_second") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text_third" class="col-md-3 col-form-label">Text Third</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="text_third" class="form-control" id="text_third"
                                                value="{{old('text_third',$homePageBanner->text_third)}}"
                                                data-parsley-required="true" placeholder="Text">
                                            <span
                                                class="text-danger">{{$errors->has("text_third") ? $errors->first("text_third") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text_forth" class="col-md-3 col-form-label">Text Forth</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="text_forth" class="form-control" id="text_forth"
                                                value="{{old('text_forth',$homePageBanner->text_forth)}}"
                                                data-parsley-required="true" placeholder="Text">
                                            <span
                                                class="text-danger">{{$errors->has("text_forth") ? $errors->first("text_forth") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text_forth" class="col-md-3 col-form-label">Text Fifth</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="text_fifth" class="form-control" id="text_fifth"
                                                value="{{old('text_fifth',$homePageBanner->text_fifth)}}"
                                                data-parsley-required="true" placeholder="Text">
                                            <span
                                                class="text-danger">{{$errors->has("text_fifth") ? $errors->first("text_fifth") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="url" class="col-md-3 col-form-label">URL<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="url" placeholder="URL"
                                                name="url" value="{{old("url",$homePageBanner->url)}}">
                                            <span class=" text-danger">
                                                {{$errors->has("url") ? $errors->first("url") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="button_text" class="col-md-3 col-form-label">Button Text<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="button_text"
                                                placeholder="Button text" name="button_text"
                                                value="{{old("button_text",$homePageBanner->button_text)}}">
                                            <span class=" text-danger">
                                                {{$errors->has("button_text") ? $errors->first("button_text") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="status">
                                                    <option value="0"
                                                        {{(old("status") == 0 ||$homePageBanner->status == 0 ) ? "selected" : "" }}>
                                                        Inactive</option>
                                                    <option value="1"
                                                        {{(old("status") == 1 || $homePageBanner->status == 1 ) ? "selected" : "" }}>
                                                        Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="">Image</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="oldImage" value={{$homePageBanner->image}}>
                                    <p><input name="image" type="file" accept="image/*" name="image" class="image"
                                            id="image" style="display: none;"></p>
                                    <p><label for="image" style="cursor: pointer;">
                                            <img id="output" src="{{asset($homePageBanner->image)}}" width="200" />
                                        </label></p>
                                    <span class="text-danger"> {{$errors->has("image") ? $errors->first("image") : ""}}
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <a href="{{url()->previous()}}"
                                    class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                                <button type="submit"
                                    class="btn btn-primary btn-rounded waves-effect waves-light">Update</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
