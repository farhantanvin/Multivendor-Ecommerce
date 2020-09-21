@extends("backend.layout.layout")
@section("title","create User")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create User
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                  
                    <form method="post" action="{{route("user.store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group select2-parent">
                                        <label for="role_id">Role<span class="text-danger">*</span></label>
                                        <select name="role_id" class="form-control single-select2" id="role_id" style="width: 100%;">
                                            <option selected disabled>Select Role</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{(old('role_id') == $role->id) ? 'selected' : ''}}>{{$role->name}}</option>
                                                @endforeach
                                        </select>
                                        <span class="text-danger"> {{$errors->has("role_id") ? $errors->first("role_id") : ""}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}" id="name" name="name" placeholder="Enter User Name" value="{{old("name")}}">
                                        <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control {{$errors->has("email") ? "is-invalid":""}}" id="email" name="email" placeholder="Enter User Email" value="{{old("email")}}">
                                        <span class="text-danger"> {{$errors->has("email") ? $errors->first("email") : ""}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_no">Contact No<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control {{$errors->has("contact_no") ? "is-invalid":""}}" id="contact_no" name="contact_no" placeholder="Enter User Contact No" value="{{old("contact_no")}}">
                                        <span class="text-danger"> {{$errors->has("contact_no") ? $errors->first("contact_no") : ""}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control {{$errors->has("password") ? "is-invalid":""}}" id="password" name="password" placeholder="Enter User Password" value="{{old("password")}}">
                                        <span class="text-danger"> {{$errors->has("password") ? $errors->first("password") : ""}} </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control {{$errors->has("confirm_password") ? "is-invalid":""}}" id="confirm_password" name="confirm_password" placeholder="Confirm User Password" value="{{old("confirm_password")}}">
                                        <span class="text-danger"> {{$errors->has("confirm_password") ? $errors->first("confirm_password") : ""}} </span>
                                    </div>
                                </div>

                         

                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-default cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
