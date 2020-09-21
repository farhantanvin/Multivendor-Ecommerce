@extends("backend.layout.layout")
@section("title","Brand List")
@section("content")

<div class="fl-page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Discount List</b></h3>


                    <a href="{{route('discount.create')}}" class="btn btn-primary float-right text-white">
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Coupon Type</th>
                                <th>Start Date</th>
                                <th>Exipty Date</th>
                                <th>Discount By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use App\CustomClass\OwnLibrary;
                                $i = OwnLibrary::paginationSerial($discounts);
                            @endphp
                            @forelse($discounts as $discount)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{!! $discount->name !!}</td>
                                <td>{!! $discount->description !!}</td>
                                <td>{!! ucwords(str_replace(array('_'),array(' '), strtolower($discount->coupon_type))) !!}</td>
                                <td>{!! OwnLibrary::formatted_date($discount->start_date) !!}</td>
                                <td>{!! OwnLibrary::formatted_date($discount->expired_date) !!}</td>
                                <td>
                                    @if($discount->discount_by==1)
                                    {!! "Admin" !!}
                                        @else
                                    {!! $discount->user->name !!}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($discount->status == 1)
                                        <button class="btn btn-sm btn-success">Active</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Inactive</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form method="post" action="{{route('discount.destroy',$discount->id)}}">
                                        <a class="btn btn-sm btn-warning text-white"
                                            href="{{route('discount.edit',$discount->id)}}" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        @if($discount->coupon_type=='specific_user')
                                        <a class="btn btn-sm btn-success text-white user_list" href="javascript:void(0)" id="{!! encrypt($discount->id) !!}" title="User List">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @endif

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
                                <td colspan="11" class="text-center">Nothing Found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix text-right">
                    {{$discounts->links("backend.include.pagination")}}
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
                var spinner = $(this).closest('td').find('.spinner');
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

