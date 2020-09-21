@extends("backend.layout.layout")
@section("title","edit category")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit brand
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route("brand.update",$brand->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="brand_name" class="col-md-3 col-form-label">Brand Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="brand_name"
                                                placeholder="Category Name" name="brand_name"
                                                value="{{old("brand_name",$brand->brand_name)}}">
                                            <span class="text-danger">
                                                {{$errors->has("brand_name") ? $errors->first("brand_name") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="description" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <textarea class="form-control" id="description" name="description"
                                                placeholder="Description">{{old("description",$brand->description)}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="meta_tag" class="col-md-3 col-form-label">Meta Tag</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="meta_tag" placeholder="Meta Tag"
                                                name="meta_tag" value="{{old("meta_tag",$brand->meta_tag)}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="meta_description" class="col-md-3 col-form-label">Meta
                                        Description</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <textarea class="form-control" id="meta_description" name="meta_description"
                                                placeholder="Meta Description">{{old("meta_description,$brand->meta_description")}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="status" class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="status">
                                                    <option value="0"
                                                        {{(old("status") == 0 || $brand->status == 0 ) ? "selected" : "" }}>
                                                        Inactive</option>
                                                    <option value="1"
                                                        {{(old("status") == 1 || $brand->status == 1 ) ? "selected" : "" }}>
                                                        Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-md-3 col-form-label">Image</label>
                                <div class="col-md-9">

                                    <input type="hidden" name="oldImage" value={{$brand->image}}>
                                    <p><input name="image" type="file" accept="image/*" name="image" class="image"
                                            id="image" style="display: none;"></p>
                                    <p><label for="image" style="cursor: pointer;">
                                            <img id="output" src="{{asset($brand->image)}}" width="200" />
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
                                class="btn btn-primary btn-rounded waves-effect waves-light">Update</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
