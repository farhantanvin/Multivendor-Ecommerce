@extends("backend.layout.layout")
@section("title","User access")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    User Access
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    
                    <form method="post" action="{{url('/useracl')}}" class="form-horizontal">
                        {{ csrf_field() }}

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group select2-parent">
                                        <label>Select User</label>
                                        <select name="user_id" id="user_id" class="form-control js-source-states single-select2" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            @foreach($userList as $key => $name)
                                                <option value="{{$key}}">{{$name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div id="access-control-setup">
                            <!--AJAX content will be loaded here-->
                        </div>

                        </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    
<script type="text/javascript" lang="javascript">
    $(document).ready(function () {

        $("#user_id").change(function () {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{!! URL::to('userAclSetup') !!}",
                data: {user_id: $("#user_id").val(), _token : _token},
                dataType: "text",
                cache: false,
                success:
                    function (data) {
                        $("#access-control-setup").html(data);
                        $(".cancel").click(function () {
                            history.go(-1);
                        });
                    }
            });
            return false;
        });

        //check/uncheck all
        $(document).on("change", '#access_table .m_activity', function () {
            var columnId = $(this).data('column-id');
            if ($(this).prop('checked')) {
                $('.activity_' + columnId).prop('checked', true);
            } else {
                $('.activity_' + columnId).prop('checked', false);
            }
        });

        $(document).on("change", '.activitycell', function () {
            var columnId = $(this).data('column-id');
            if ($('.activity_' + columnId + ':checked').length == $('.activity_' + columnId).length) {
                $('#activity_header_' + columnId).prop('checked', true);
            } else {
                $('#activity_header_' + columnId).prop('checked', false);
            }
        });

    });
</script>
@endsection
