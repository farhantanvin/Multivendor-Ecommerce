@extends("backend.layout.layout")
@section("title","Store Review List")
@section("content")

<div class="fl-page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Store Review List</b></h3>


                    <a href="{{route('store-review.create')}}" class="btn btn-primary float-right text-white">
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
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Review</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use App\CustomClass\OwnLibrary;
                                $i = OwnLibrary::paginationSerial($store_reviews);
                            @endphp
                            @forelse($store_reviews as $store_review)
                            <tr>
                                <td>{{ $i++ }}</td>
                                @if(Auth::user()->role_id != 10)
                                    <td>{!! $store_review->user->name !!}</td>
                                @endif
                                <td>{!! $store_review->customer_name !!}</td>
                                <td>{!! $store_review->email !!}</td>
                                <td>{!! $store_review->review !!}</td>
                                <td class="text-right">{!! $store_review->rating !!}</td>
                                <td class="text-center">
                                    @if($store_review->status == 1)
                                        <button class="btn btn-sm btn-success">Active</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Inactive</button>
                                    @endif
                                    @if($store_review->status == 1)
                                        <button class="btn btn-sm btn-success">Approved</button>
                                    @elseif($store_review->status == 2)
                                        <button class="btn btn-sm btn-danger">Rejected</button>
                                    @elseif($store_review->status == 3)
                                        <button class="btn btn-sm btn-warning">Panding</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form method="post" action="{{route('store-review.destroy',$store_review->id)}}">
                                        <a class="btn btn-sm btn-warning text-white"
                                            href="{{route('store-review.edit',$store_review->id)}}" title="Edit">
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
                                <td colspan="8" class="text-center">Nothing Found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix text-right">
                    {{$store_reviews->links("backend.include.pagination")}}
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

