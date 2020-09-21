@extends("backend.layout.layout")
@section("title","edit category")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Category
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data"
                        action="{{route("category.update",$category->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="category_name" class="col-md-3 col-form-label">Category Name<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Category Name" name="category_name"
                                                value="{{old("category_name",$category->category_name)}}">
                                            <span class="text-danger">
                                                {{$errors->has("category_name") ? $errors->first("category_name") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="parent_category" class="col-md-3 col-form-label">Parents
                                        Category</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <select
                                                class="js-example-basic-single browser-default custom-select form-control"
                                                name="parent_id">
                                                <option value="0">None</option>

                                                @foreach ($allCategory as $item)

                                                <option value="{{$item->id}}"
                                                    {{(!empty($category->parent->category_name) && $item->id ==$category->parent->id )? "selected" : ""}}>
                                                    {{$item->category_name}}</option>
                                                @endforeach
                                            </select>
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
                                                placeholder="Description">{{old("description",$category->description)}}</textarea>
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
                                                    <option value="0"
                                                        {{(old("top_category") == 0 || $category->top_category == 0 ) ? "selected" : "" }}>
                                                        No</option>
                                                    <option value="1"
                                                        {{(old("top_category") == 1 || $category->top_category == 1 ) ? "selected" : "" }}>
                                                        Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="meta_tag" class="col-md-3 col-form-label">Meta Tag</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Meta Tag" name="meta_tag"
                                                value="{{old("meta_tag",$category->meta_tag)}}">
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
                                            <textarea class="form-control" id="description" name="meta_description"
                                                placeholder="Meta Description">{{old("meta_description,$category->meta_description")}}</textarea>
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
                                                        {{(old("status") == 0 || $category->status == 0 ) ? "selected" : "" }}>
                                                        Inactive</option>
                                                    <option value="1"
                                                        {{(old("status") == 1 || $category->status == 1 ) ? "selected" : "" }}>
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
                                    <input type="hidden" name="oldImage" value={{$category->image}}>
                                    <p><input name="image" type="file" accept="image/*" name="image" class="image"
                                            id="image" style="display: none;"></p>
                                    <p><label for="image" style="cursor: pointer;">
                                            <img id="output" src="{{asset($category->image)}}" width="200" />
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
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
