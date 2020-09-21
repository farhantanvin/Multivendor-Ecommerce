@extends("backend.layout.layout")
@section("title","Pending Product Review")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Pending Product Review List</h4>
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
                            <th>Review image</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pendingProductReview as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $item->product_id}}</td>
                            <td class="text-center">{{ $item->user->name}}</td>
                            <td class="text-center">{{ $item->review}}</td>
                            <td style="text-align: center;"><img src="{{asset($item->review_image)}}" alt="" width="100"
                                    height="100"></td>
                            <td class="text-center">
                                @php $rating = $item->rating; @endphp

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1em">
                                    <i class="far fa-star fa-stack-1x"></i>

                                    @if($rating >0)
                                    @if($rating >0.5)
                                    <i class="fas fa-star fa-stack-1x"></i>
                                    @else
                                    <i class="fas fa-star-half fa-stack-1x"></i>
                                    @endif
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach

                            </td>



                            <td class="text-center">
                                <form method="post" action="{{route('approved-review.destroy',$item->id)}}">
                                    @method('delete')
                                    @csrf
                                    <a class="status btn btn-sm fl_btn btn-info" title="View Product"
                                        href="{{route('product.detail',$item->product->slug)}}"><i
                                            class="fa fa-eye"></i></a>

                                    &nbsp;&nbsp;<a class="status btn btn-sm fl_btn btn-success" title="Approved"
                                        href="{{route('approved-review.edit',$item->id)}}"><i
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
                {{$pendingProductReview->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
