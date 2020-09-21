@extends("backend.layout.layout")
@section("title","Select Category")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Select Category In Home Page
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data"
                        action="{{route('home.setup.update',base64_encode($homeSetup->id))}}">
                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Select Category</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="option_value">
                                                    @foreach ($category as $item)
                                                    <option value="{{$item->id}}"
                                                        {{($homeSetup->option_value == $item->id) ? "selected" : "" }}>
                                                        {{$item->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
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
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
