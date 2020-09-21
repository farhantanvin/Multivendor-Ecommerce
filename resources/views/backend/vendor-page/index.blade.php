@extends("backend.layout.layout")
@section("title","Page List")
@section("content")

<div class="fl-page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Page List</b></h3>


                    <a href="{{route('vendor-page.create')}}" class="btn btn-primary float-right text-white">
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
                                <th>Page Title</th>
                                <!-- <th>Description</th> -->
                                <th>Slug</th>
                                <th>Serial No.</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use App\CustomClass\OwnLibrary;
                                $i = OwnLibrary::paginationSerial($vendor_pages);
                            @endphp
                            @forelse($vendor_pages as $vendor_page)
                            <tr>
                                <td>{{ $i++ }}</td>
                                @if(Auth::user()->role_id != 10)
                                    <td>{!! $vendor_page->createdBy->name !!}</td>
                                @endif
                                <td>{!! $vendor_page->page_title !!}</td>
                                <!-- <td>{!! $vendor_page->description !!}</td> -->
                                <td>{!! $vendor_page->slug !!}</td>
                                <td>{!! $vendor_page->sl_no !!}</td>
                                <td class="text-center">
                                    @if($vendor_page->status == 1)
                                        <button class="btn btn-sm btn-success">Active</button>
                                    @else
                                        <button class="btn btn-sm btn-danger">Inactive</button>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <form method="post" action="{{route('vendor-page.destroy',$vendor_page->id)}}">
                                        <a class="btn btn-sm btn-success text-white" href="{{route('vendor-page.show',$vendor_page->slug)}}" title="Edit" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a class="btn btn-sm btn-warning text-white"
                                            href="{{route('vendor-page.edit',$vendor_page->id)}}" title="Edit">
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
                                <td colspan="7" class="text-center">Nothing Found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix text-right">
                    {{ $vendor_pages->links("backend.include.pagination") }}
                </div>
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

