@extends("backend.layout.layout")
@section("title","State List")
@section("content")

<div class="fl-page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>State List</b></h3>


                    <a href="{{route('state.create')}}" class="btn btn-primary float-right text-white">
                        <i class="fas fa-plus-circle"></i>
                        Add New
                    </a>


                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                @if(Auth::user()->role_id != 10)
                                <th>Vendor Name</th>
                                @endif
                                <th>Country Name</th>
                                <th>State Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use App\CustomClass\OwnLibrary;
                                $i = OwnLibrary::paginationSerial($states);
                            @endphp
                            @forelse($states as $state)
                            <tr>
                                <td>{{ $i++ }}</td>
                                @if(Auth::user()->role_id != 10)
                                    <td>{!! $state->createdBy->name !!}</td>
                                @endif
                                <td>{!! $state->country->country_name !!}</td>
                                <td>{!! $state->state_name !!}</td>
                                <td class="text-center">
                                    @if($state->status == 1)
                                        <button class="btn btn-sm btn-success">Active</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Inactive</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form method="post" action="{{route('state.destroy',$state->id)}}">
                                        <a class="btn btn-sm btn-warning text-white"
                                            href="{{route('state.edit',$state->id)}}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger text-white delete"
                                            title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <div class="spinner">&nbsp;</div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Nothing Found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix text-right">
                    {{$states->links("backend.include.pagination")}}
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="userListModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

