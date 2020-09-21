@extends('frontend.layout.layout')
@section('title','Multivendor | Password Reset')
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
                                    <form method="post" action="{{route('front.forgot.password.send')}}">
                                        @csrf
                                        <p class="text-center login_heading">Reset Your Password</p>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address*</label>
                                            <input type="email" class="form-control" name="email"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{old('email')}}" placeholder=" Enter email">
                                            <span class="text-danger">@error('email') {{$message}}
                                                @enderror</span>
                                        </div>
                                        <button type="submit" class="btn  btn-block login_btn_f mt-2">RESET
                                            PASSWORD</button>
                                        <a href="{{route('user.login')}}" class="btn  btn-block login_btn_f mt-2"> LOGIN
                                        </a>

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
