<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','FEITS Dashboard')</title>

    <!--<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">-->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/all.css')}}">

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/bootstrap.min.css')}}">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css')}}">

    <link href="{{asset('/public/backend/assets/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/addons/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/js/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/custom/backend-custom.css')}}">

    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/sweetalert2/sweetalert2.all.min.js')}}"></script>

    @yield('css')
</head>

<body>

    @include('backend.include.logo')

    @include('backend.include.sidebar')

    @include('backend.include.header')

    <div class="fl-mainpanel">
        <div class="fl-pagebody">
            @include('backend.include.msg')
            @yield('content')
        </div>
        @include('backend.include.footer')
    </div>

    <!-- Bootstrap tooltips -->
    

    <script type="text/javascript" src="{{asset('/public/backend/assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('/public/backend/assets/js/mdb.min.js')}}"></script>
    <!-- Your custom scripts (optional) -->
    <!-- <script type="text/javascript"></script> -->

    <script src="{{asset('/public/backend/assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('/public/backend/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>

    <script src="{{asset('/public/backend/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/addons/datatables.min.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/parsley.min.js')}}"></script>

    <script src="{{asset('/public/backend/assets/js/custom.js')}}"></script>
    <script src="{{asset('/public/backend/assets/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('public/custom/backend-custom.js')}}"></script>
    <script>
        $(function(){

            $(window).resize(function(){
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .fl-menu-sub').slideUp();
                } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .fl-menu-sub').slideDown();
                }
            }
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(document).ready(function () {
            //Pagination numbers
            $('#paginationSimpleNumbers').DataTable({
                "pagingType": "simple_numbers"
            });
        });
    </script>
    <script>
        $('.alert').delay(3000).slideUp(1000);
    </script>
    @yield('js')
</body>
</html>
