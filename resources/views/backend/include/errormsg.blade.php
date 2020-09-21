@if(Session::has('success'))
    <script>
        var msg ='{{ Session::get("success") }}';
        Swal.fire(msg, "", "success");
    </script>
@endif
@if(Session::has('error'))
    <script>
        var msg ='{{Session::get("error")}}';
        Swal.fire(msg, "", "error");
    </script>
@endif
