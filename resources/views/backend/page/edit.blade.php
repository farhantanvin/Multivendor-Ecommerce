@extends("backend.layout.layout")
@section("title","Edit Page")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Page
                </h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route("pages.update",$page->id)}}">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{$errors->has("title") ? "is-invalid":""}}"
                                id="title" name="title" placeholder="Enter Page Title"
                                value="{{old("title",$page->title)}}">
                            <span class="text-danger"> {{$errors->has("title") ? $errors->first("title") : ""}}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control {{$errors->has("description") ? "is-invalid":""}} txt-editor"
                                id="description" name="description"
                                placeholder="Enter page Description">{!! old("description",$page->description) !!}</textarea>
                            <span class="text-danger">
                                {{$errors->has("description") ? $errors->first("description") : ""}} </span>
                        </div>


                        <div class="form-group select2-parent">
                            <label>Status</label>
                            <select name="status" class="form-control single-select2" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="0" {{(old("status") == 0 || $page->status == 0 ) ? "selected" : "" }}>
                                    Inactive
                                </option>
                                <option value="1" {{(old("status") == 1 || $page->status == 1 ) ? "selected" : "" }}>
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
                            class="btn btn-primary btn-rounded waves-effect waves-light">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
