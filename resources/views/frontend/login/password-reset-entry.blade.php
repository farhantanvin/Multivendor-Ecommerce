@extends('frontend.layout.layout')
@section('title','Multivendor | New Password Set')
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
                                    <form method="post" action="{{route('front.new.password')}}">
                                        @csrf
                                        <input type="hidden" name="reset_token" value="{{$token}}">
                                        <p class="text-center login_heading">Reset Your Password</p>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="exampleInputPassword1" placeholder="New Password">
                                            <span class="text-danger">@error('password') {{$message}}
                                                @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password"
                                                id="exampleInputPassword1" placeholder="Confirm Password">
                                            <span class="text-danger">@error('login_password') {{$message}}
                                                @enderror</span>
                                        </div>

                                        <button type="submit" class="btn btn-block login_btn_f mt-2">RESET
                                            PASSWORD</button>
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
