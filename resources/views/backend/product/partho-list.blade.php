@extends('backend.layout.layout')

@section('content')
<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Product List</h4>
        </div>
        <div class="pagetitle-btn">
        <a href="{{route('product_create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
                <table class="table fl_table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Regular Price</th>
                        <th scope="col">Sell Price</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Vat</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $order=0;  $i = CustomClass::paginationSerial($productList); @endphp  
                    @forelse($productList as $item)
                    @php $order++; @endphp  
                    <tr>
                    <th scope="row">{{$order}}</th>
                       <td>   
                        <img width="50px" height="50px" src="{{asset('public/upload/product/'.$item->product_image)}}">
                       </td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->category_name}}</td>
                        <td>{{$item->brand_name}}</td>
                        <td>{{$item->regular_price}}</td>
                        <td>{{$item->sell_price}}</td>
                        <td>{{$item->discount}}%</td>
                        <td>{{$item->vat}}%</td>
                        <td>{{$item->name}}</td>
                        <td> @if($item->product_status == 0)
                            <span class="btn btn-sm btn-danger p-1">Inactive</span>
                            @else
                            <span class="btn btn-sm btn-success p-1">Active</span>
                        @endif
                     </td>
                        <td>
                        <a target="_blank" class="status btn btn-sm fl_btn btn-success" title="View" href="{{ route('product_details',base64_encode($item->product_id)) }}"><i class="fa fa-eye"></i></a>
                            <a class="status btn btn-sm fl_btn btn-warning" title="Edit" href="{{ route('product_edit',base64_encode($item->product_id)) }}"><i class="fa fa-edit"></i></a>
                            <a class="status btn btn-sm fl_btn btn-danger" title="Delete" href="{{ route('product_details',base64_encode($item->product_id)) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                            <tr>
                                <td colspan="7">
                                    <h2 class="text-center">No Product Found</h2>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    @if(!empty($productList->links()))
                    <tfoot>
                    <tr>
                        <td colspan="7">
                            {{$productList->links()}}
                        </td>
                    </tr>
                    </tfoot>
                    @endif
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection