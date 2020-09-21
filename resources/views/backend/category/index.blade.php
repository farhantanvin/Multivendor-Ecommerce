@extends("backend.layout.layout")
@section("title","Category List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Category List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('category.create')}}"
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
                            <th>Category Name</th>
                            <th>Parent Name</th>
                            <th>Image</th>
                            <th>Top Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Category as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $item->category_name }}</td>
                            <td class="text-center">{{ $item->parent->category_name ?? ''}}</td>
                            <td style="text-align: center;"><img src="{{asset($item->image)}}" alt="" width="100"
                                    height="100"></td>



                            <td class="text-center">
                                @if($item->top_category == 1)
                                <button class="btn btn-sm btn-outline-success">Yes</button>
                                @else
                                <button class="btn btn-sm btn-outline-danger">No</button>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($item->status == 1)
                                <button class="btn btn-sm btn-success">Active</button>
                                @else
                                <button class="btn btn-sm btn-danger">Inactive</button>
                                @endif
                            </td>


                            <td class="text-center">
                                <form method="post" action="{{route('category.destroy',$item->id)}}">
                                    @method('delete')
                                    @csrf

                                    &nbsp;<a class="status btn btn-sm fl_btn btn-warning" title=""
                                        href="{{route('category.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
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
                {{$Category->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
