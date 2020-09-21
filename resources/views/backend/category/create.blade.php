@extends("backend.layout.layout")
@section("title","create category")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create Category
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route("category.store")}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="category_name" class="col-md-3 col-form-label">Category Name<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="category_name" class="form-control"
                                                id="category_name" value="{{old('category_name')}}"
                                                data-parsley-required="true" placeholder="Category Name">
                                            <span
                                                class="text-danger">{{$errors->has("category_name") ? $errors->first("category_name") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Parent
                                        Category</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <select
                                                class="js-example-basic-single browser-default custom-select form-control"
                                                name="parent_id">
                                                <option value="0">None</option>
                                                @foreach($Category as $item)
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <textarea class="form-control" id="description" name="description"
                                                placeholder="Description">{{old("description")}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="status" class="col-md-3 col-form-label">Top Category</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="top_category">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Meta Tag</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Meta Tag" name="meta_tag">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Meta
                                        Description</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <textarea class="form-control" id="description" name="meta_description"
                                                placeholder="Meta Description">{{old("meta_description")}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Image</label>
                                    <div class="col-md-9">
                                        <p><input name="image" type="file" accept="image/*" name="image" class="image"
                                                id="image" style="display: none;"></p>
                                        <p><label for="image" style="cursor: pointer;">
                                                <img id="output" src="{{asset('/public/demo-pic/upload-image.jpg')}}"
                                                    width="200" />
                                            </label></p>
                                        <span class="text-danger">
                                            {{$errors->has("image") ? $errors->first("image") : ""}}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center mt-3">
                                <a href="{{url()->previous()}}"
                                    class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                                <button type="submit"
                                    class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
