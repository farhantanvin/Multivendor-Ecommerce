@extends('backend.layout.layout')
@section('title','Product List')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Product List</h4>
            </div>
            <div class="pagetitle-btn">
                <a href="{{route('products.create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            @if (auth()->user()->user_type == 2)
                            <th scope="col">Vendor</th>
                            @endif
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = CustomClass::paginationSerial($products);
                        @endphp
                        @forelse($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->short_description}}</td>
                            @if (auth()->user()->user_type == 2)
                            <td>{{$product->vendor->name ?? ''}}</td>
                            @endif
                            <td>{{$product->category->category_name ?? ''}}</td>
                            <td>{{$product->brand->brand_name ?? ''}}</td>
                            <td>{{$product->quantity ?? ''}}</td>
                            <td class="text-center">
                                @if($product->status == 0)
                                    <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                    @else
                                    <span class="btn btn-sm btn-success p-1">Active</span>
                                @endif
                            </td>
                            <td>
                                <form method="post" action="{{ route('products.destroy',$product->slug) }}">
                                <a class=" btn btn-sm fl_btn btn-warning" title="" href="{{ route('products.edit',$product->slug) }}"><i class="fa fa-edit" title="Edit"></i></a>
                                    <a class="btn btn-sm fl_btn btn-success" href="{{route('product.gallery',encrypt($product->id))}}">
                                        <i class="fa fa-eye" title="Gallery"></i>
                                    </a>
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="delete  btn btn-sm fl_btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <h2 class="text-center">No Configuration Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($products->links()))
                        <tfoot>
                        <tr>
                            <td colspan="4">
                                {{$products->links()}}
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
