@extends("backend.layout.layout")
@section("title","Create Social Login Access")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create Social Login Access
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route("social-login-access.store")}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="platform_name" class="col-md-3 col-form-label">Platfrom Name</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="platform_name">
                                                    <option value="facebook">
                                                        Facebook</option>
                                                    <option value="google">
                                                        Google</option>
                                                </select>
                                            </div>
                                            <span class=" text-danger">
                                                {{$errors->has("platform_name") ? $errors->first("platform_name") : ""}}
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="client_id" class="col-md-3 col-form-label">Client Id<span
                                            class="text-danger">*</span></label>

                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Client Id" name="client_id" value="{{old("client_id")}}"
                                                data-parsley-required="true">
                                            <span class=" text-danger">
                                                {{$errors->has("client_id") ? $errors->first("client_id") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="client_secret" class="col-md-3 col-form-label">Client
                                        Secret<span class="text-danger">*</span></label>

                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Client Secret" name="client_secret"
                                                value="{{old("client_secret")}}" data-parsley-required="true">
                                            <span class=" text-danger">
                                                {{$errors->has("client_secret") ? $errors->first("client_secret") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="redirect_url" class="col-md-3 col-form-label">Redirect
                                        Url<span class="text-danger">*</span></label>

                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                placeholder="Redirect Url" name="redirect_url"
                                                value="{{old("redirect_url")}}" data-parsley-required="true">
                                            <span class=" text-danger">
                                                {{$errors->has("redirect_url") ? $errors->first("redirect_url") : ""}}
                                            </span>
                                        </div>
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
