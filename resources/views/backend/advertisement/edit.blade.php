@extends("backend.layout.layout")
@section("title","edit advertisement")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Advertisement
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data"
                        action="{{route('advertisement.update',base64_encode($advertisement->id))}}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text" class="col-md-3 col-form-label">Text </span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="text"
                                                placeholder="Advertisement text" name="text"
                                                value="{{old("text",$advertisement->text)}}">
                                            <span class="text-danger">
                                                {{$errors->has("text") ? $errors->first("text") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="highlighted_text" class="col-md-3 col-form-label">Highlighted Text
                                    </label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="highlighted_text"
                                                placeholder="Advertisement Highlighted Text" name="highlighted_text"
                                                value="{{old("highlighted_text",$advertisement->highlighted_text)}}">
                                            <span class="text-danger">
                                                {{$errors->has("highlighted_text") ? $errors->first("highlighted_text") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="button_text" class="col-md-3 col-form-label">Button Text </label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="button_text"
                                                placeholder="Button Text" name="button_text"
                                                value="{{old("button_text",$advertisement->button_text)}}">
                                            <span class="text-danger">
                                                {{$errors->has("button_text") ? $errors->first("button_text") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="url" class="col-md-3 col-form-label">URL </label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="Url" placeholder="Url"
                                                name="url" value="{{old("url",$advertisement->url)}}">
                                            <span class="text-danger">
                                                {{$errors->has("url") ? $errors->first("url") : ""}}
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
                                                        {{(old("status") == 0 ||$advertisement->status == 0 ) ? "selected" : "" }}>
                                                        Inactive</option>
                                                    <option value="1"
                                                        {{(old("status") == 1 || $advertisement->status == 1 ) ? "selected" : "" }}>
                                                        Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <label>
                                    Upload Image
                                </label>
                                <p><input name="image" type="file" accept="image/*" name="image" class="image"
                                        id="image" style="display: none;">
                                </p>
                                <p><label for="image" style="cursor: pointer;">
                                        <img id="output" src="{{asset($advertisement->image)}}" width="200" />
                                    </label></p>
                                <span class="text-danger">
                                    {{$errors->has("image") ? $errors->first("image") : ""}} </span>
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
