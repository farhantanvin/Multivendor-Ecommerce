@extends("backend.layout.layout")
@section("title","Brand List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Brand List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('brand.create')}}"
                class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i
                    class="fas fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
                <table class="table fl_table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Brand Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Meta Tag</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($brand as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $item->brand_name }}</td>
                            <td class="text-center">{!!$item->description !!}</td>
                            <td style="text-align: center;"><img src="{{asset($item->image)}}" alt="" width="100"
                                    height="100"></td>

                            <td class="text-center">{{$item->meta_tag}}</td>
                            <td class="text-center">
                                @if($item->status == 1)
                                <button class="btn btn-sm btn-success">Active</button>
                                @else
                                <button class="btn btn-sm btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td class="text-center">
                                <form method="post" action="{{route('brand.destroy',$item->id)}}">
                                    @method('delete')
                                    @csrf

                                    &nbsp;<a class="status btn btn-sm fl_btn btn-warning" title=""
                                        href="{{route('brand.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                                    <button type="submit" class="status btn btn-sm fl_btn btn-danger delete"
                                        title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Nothing Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>

                {{$brand->links("backend.include.pagination")}}

            </div>

        </div>

    </div>
</div>

@endsection
