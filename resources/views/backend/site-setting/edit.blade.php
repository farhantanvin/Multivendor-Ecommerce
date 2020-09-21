@extends("backend.layout.layout")
@section("title","Edit Site Setting")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Site Settings
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{ route('site.setting.update') }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Site Name</label>
                                <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}"
                                    id="name" name="name" placeholder="Name" value="{{old('name',$setting->name)}}">
                                <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}}
                                </span>
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control {{$errors->has("email") ? "is-invalid":""}}"
                                    id="email" name="email" placeholder="Email"
                                    value="{{old('email',$setting->email)}}">
                                <span class="text-danger"> {{$errors->has("email") ? $errors->first("email") : ""}}
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text"
                                    class="form-control {{$errors->has("phone_number") ? "is-invalid":""}}"
                                    id="phone_number" name="phone_number" placeholder="Phone Number"
                                    value="{{old('phone_number',$setting->phone_number)}}">
                                <span class="text-danger">
                                    {{$errors->has("phone_number") ? $errors->first("phone_number") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control {{$errors->has("address") ? "is-invalid":""}}"
                                    id="address" name="address" placeholder="Company Address"
                                    value="{{old('address',$setting->address)}}">
                                <span class="text-danger">
                                    {{$errors->has("address") ? $errors->first("address") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="copyright">Copy Right</label>
                                <input type="text" class="form-control {{$errors->has("copyright") ? "is-invalid":""}}"
                                    id="copyright" name="copyright" placeholder="Copyright"
                                    value="{{old('name',$setting->copyright)}}">
                                <span class="text-danger">
                                    {{$errors->has("copyright") ? $errors->first("copyright") : ""}} </span>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        Upload Icon
                                    </label>
                                    <p><input name="icon" type="file" accept="image/*" name="image" class="image"
                                            id="image" style="display: none;"></p>
                                    <p><label for="image" style="cursor: pointer;">
                                            <img id="output" src="{{asset($setting->icon)}}" width="200" />
                                        </label></p>
                                    <span class="text-danger">
                                        {{$errors->has("icon") ? $errors->first("icon") : ""}} </span>
                                </div>

                                <div class="col-md-6">
                                    <label>
                                        Upload Logo
                                    </label>
                                    <p><input name="logo" type="file" accept="image/*" name="image" class="logo"
                                            id="logo" style="display: none;"></p>
                                    <p><label for="logo" style="cursor: pointer;">
                                            <img id="outputLogo" src="{{asset($setting->logo)}}" width="200" />
                                        </label></p>
                                    <span class="text-danger">
                                        {{$errors->has("logo") ? $errors->first("logo") : ""}} </span>
                                </div>

                            </div>

                        </div>
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
</div>

@endsection
