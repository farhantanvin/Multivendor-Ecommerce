<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Ecommerce')</title>
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/all.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/public/frontend/assets/rateyo/jquery.rateyo.min.css')}}">

    {{-- site icon --}}
    @if(!empty($globalData['siteSetting']->logo))
    <link rel="icon" href="{{asset($globalData['siteSetting']->logo)}}" />
    @endif

    @yield('css')
    <script src="{{asset('/public/frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/sweetalert2/sweetalert2.all.min.js')}}"></script>

</head>

<body>
    @include('frontend.include.msg')
    @include('frontend.include.header_1')
    <div class="body_wrapper">

        <p id="productAdd"></p>
        <p id="productRemove"></p>

        @yield('content')
    </div>
    @include('frontend.include.footer')
    <script src="{{asset('/public/frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/js/easyzoom.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/js/custom.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/rateyo/jquery.rateyo.min.js')}}"></script>
    <script src="{{asset('/public/frontend/assets/js/cart.js')}}"></script>
    @yield('javascript')
</body>

</html>
