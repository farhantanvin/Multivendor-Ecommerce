@extends('frontend.layout.layout')
@section('title','Login')
@section('content')

<!-- Customer Dashboard Page  -->
<section class="login_sectgion">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-11 m-auto">
                <div class="card login_page_card d-flex align-items-center justify-content-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 m-auto">
                                <div class="login_part">
                                    <form method="post" action="{{route('user.login.submit')}}">
                                        @csrf
                                        <p class="text-center login_heading">Welcome to Multivandor! Please login.</p>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="login_email"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{old('login_email')}}" placeholder=" Enter email">
                                            <span class="text-danger">@error('login_email') {{$message}}
                                                @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="login_password"
                                                id="exampleInputPassword1" placeholder="Password">
                                            <span class="text-danger">@error('login_password') {{$message}}
                                                @enderror</span>
                                        </div>


                                        <a href="{{route('front.forgot.password.view')}}">
                                            Forgot Password?</a>

                                        <button type=" submit" class="btn  btn-block login_btn_f mt-2">LOGIN</button>
                                        <p class="mt-3 mb-2">Or, Login with</p>
                                        <div class="third_parti_login d-flex mt-4">
                                            <a href="{{route('user.facebook.login')}}" <button
                                                class="btn login_btn_facebook mr-2"><i class="fab fa-facebook-f"></i>
                                                Facebook</button> </a>
                                            <a href="{{route('user.google.login')}}" <button class=" btn
                                                login_btn_google"><i class="fab fa-google-plus-g"></i>
                                                Google</button> </a>

                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 m-auto registration_border mt-sm-4">
                                <div class="registration_part">
                                    <form method="post" action="{{route("user.registration.submit")}}">
                                        @csrf
                                        <p class="text-center login_heading">Create your Multivandor Account</p>
                                        <div class="form-group">
                                            <label for="exampleInputusername">Full Name</label>
                                            <input type="text" class="form-control" name="name"
                                                id="exampleInputusername" value="{{old('name')}}"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter Your First Name & Last Name">
                                            <span class="text-danger">
                                                {{$errors->has("name") ? $errors->first("name") : ""}}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email"
                                                id="exampleInputEmail1" value="{{old('email')}}"
                                                aria-describedby="emailHelp" placeholder="Enter email">
                                            <span class="text-danger">
                                                {{$errors->has("email") ? $errors->first("email") : ""}}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="exampleInputPassword1" value="{{old('password')}}"
                                                placeholder="Password">
                                            <span class="text-danger">
                                                {{$errors->has("password") ? $errors->first("password") : ""}}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="exampleInputPassword1" value="{{old('confirm_password')}}"
                                                placeholder="Confirm Password">
                                            <span class="text-danger">
                                                {{$errors->has("confirm_password") ? $errors->first("confirm_password") : ""}}</span>
                                        </div>

                                        <button type="submit" class="btn  btn-block login_btn_f">SIGN UP</button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
