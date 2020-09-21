{{--@if(Session::has('success'))--}}
{{--<div class="alert alert-success text-center">--}}
     {{--{{Session::get("success")}}.--}}
{{--</div>--}}
{{--@endif--}}

{{--@if(Session::has('warning'))--}}
    {{--<div class="alert alert-warning text-center">--}}
         {{--{{Session::get("warning")}}.--}}
    {{--</div>--}}
{{--@endif--}}

{{--@if(Session::has('error'))--}}
    {{--<div class="alert alert-danger text-center">--}}
         {{--{{Session::get("error")}}.--}}
    {{--</div>--}}
{{--@endif--}}

@if(Session::has('success'))
    <script>
        var msg ='{{ Session::get("success") }}';
        Swal.fire(msg, "", "success");
    </script>
@endif

@if(Session::has('warning'))
    <script>
        var msg ='{{Session::get("warning")}}';
        Swal.fire(msg, "", "warning");
    </script>
@endif

@if(Session::has('error'))
    <script>
        var msg ='{{Session::get("error")}}';
        Swal.fire(msg, "", "error");
    </script>
@endif
