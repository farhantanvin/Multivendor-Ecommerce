@extends("backend.layout.layout")
@section("title","Create Page")
@section("content")
<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create Page
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{route("pages.store")}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control {{$errors->has("title") ? "is-invalid":""}}"
                                    id="title" name="title" placeholder="Enter Page Title" value="{{old("title")}}">
                                <span class="text-danger"> {{$errors->has("title") ? $errors->first("title") : ""}}
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea
                                    class="form-control {{$errors->has("description") ? "is-invalid":""}} txt-editor"
                                    id="description" name="description"
                                    placeholder="Enter page Description">{!! old("description") !!}</textarea>
                                <span class="text-danger">
                                    {{$errors->has("description") ? $errors->first("description") : ""}} </span>
                            </div>
                        </div>


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
