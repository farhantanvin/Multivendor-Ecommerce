@extends("backend.layout.layout")
@section("title","Page View")
@section("content")

<div class="fl-page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{!! $vendorPage->page_title !!}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    {!! $vendorPage->description !!}
                </div>
                <!-- /.card-body -->
                
            </div>
        </div>
    </div>

</div>


@endsection

@section('js')
    <script>

        $(document).ready(function(){
            $(document).on("click",".user_list", function(){
                var me = $(this);
                var spinner = $(this).closest('div').find('.spinner');
                spinner.show();

                var id = $(this).attr("id");
                if(id){
                    var url= "{{route('discount-user.list')}}";
                    $.ajax({
                        type: "post",
                        url: url,
                        data: {
                            _token: '{{csrf_token()}}',
                            'id': id
                        },
                        dataType: "html",
                        success: function(data) {
                            $(".modal-body").html(data);
                            $('#userListModal').modal('show');
                            spinner.hide();
                        },
                        complete: function(){

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            spinner.hide();
                            alert(textStatus+errorThrown);
                        }
                    });
                }else{
                    $('#userListModal').modal('hide');
                }
            });
        });

    </script>
@endsection

