@extends("backend.layout.layout")
@section("title","Offer")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Offer List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('offer.create')}}"
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
                            <th>Offer Name</th>
                            <th>Discount Amount</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($offer as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $item->offer_name ?? null}}</td>
                            <td class="text-center">{{ $item->offer_amount}}</td>
                            <td class="text-center">{{ $item->start_date}}</td>
                            <td class="text-center">{{ $item->end_date}}</td>
                            <td class="text-center">
                                @if($item->status == 1)
                                <button class="btn btn-sm btn-success">Active</button>
                                @else
                                <button class="btn btn-sm btn-danger">Inactive</button>
                                @endif
                            </td>


                            <td class="text-center">
                                <form method="post" action="{{route('offer.destroy',$item->id)}}">
                                    @method('delete')
                                    @csrf

                                    &nbsp;<a class="status btn btn-sm fl_btn btn-warning" title=""
                                        href="{{route('offer.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
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
                {{$offer->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
