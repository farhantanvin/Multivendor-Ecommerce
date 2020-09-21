<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FEITS Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="{{asset('/public/backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/mdb.min.css')}}">
    <style>
        .body_row{
            height:100vh;
        }
        .form_body{
            box-shadow: 0px 2px 14px 1px rgba(0,0,0,.15);
        }
        
    </style>

</head>
<body>

<!-- Default form login -->
<div class="page_body">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center body_row">
            <div class="col-md-9 col-lg-5">
                <form class="text-center form_body p-5" method="POST" action="{{route('admin.login.submit')}}">
                    @csrf
                    <p class="h4 mb-4">Sign in</p>
                    <div class="md-form form-lg">
                        <input type="email" id="inputLGEx" name="email" value="{{old('email')}}" class="form-control form-control-lg">
                        <label for="inputLGEx">Email</label>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="md-form form-lg">
                        <input name="password" type="password" id="inputpass" class="form-control form-control-lg">
                        <label for="inputpass">Password</label>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    
                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" value="1" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                
                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                
                    <!-- Register -->
                    <p>Not a member?
                        <a href="">Register</a>
                    </p>
                
                   
                    <p>or sign in with:</p>
                
                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
                
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Default form login -->



<script type="text/javascript" src="{{asset('/public/backend/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/mdb.min.js')}}"></script>
    <script>
        
    </script>
</body>
</html>
