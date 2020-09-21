@extends("backend.layout.layout")
@section("title","Pending Product Question")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Product Question List</h4>
        </div>

    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
                <table class="table fl_table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product id</th>
                            <th>User Name</th>
                            <th>Review Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pendingProductComments as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $item->product_id}}</td>
                            <td class="text-center">{{ $item->user->name}}</td>
                            <td class="text-center">{{ $item->comments}}</td>
                            <td class="text-center">
                                <form method="post" action="{{route('approved-question.destroy',$item->id)}}">
                                    @method('delete')
                                    @csrf

                                    <a class="status btn btn-sm fl_btn btn-info" title="View Product"
                                        href="{{route('product.detail',$item->product->slug)}}"><i
                                            class="fa fa-eye"></i></a>

                                    &nbsp;&nbsp;<a class="status btn btn-sm fl_btn btn-success"
                                        title="Approved and reply"
                                        href="{{route('approved-question.edit',$item->id)}}"><i
                                            class="fa fa-check"></i></a>
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
                {{$pendingProductComments->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
