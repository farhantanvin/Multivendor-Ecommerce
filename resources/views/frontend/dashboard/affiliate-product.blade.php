@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Affiliate Product</p>
                        </div>
                        <div class="d_customer_row_info table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Affiliate URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = CustomClass::paginationSerial($products);
                                @endphp
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            <a href="{{route('product.detail',$product->slug)}}">
                                            {{$product->product_name}}
                                            </a>
                                        </td>
                                        <td style="width: 15%;">
                                            <img src="{{asset($product->product_image)}}" style="width: 100%;">
                                        </td>
                                        <td>
                                            <textarea class="form-control url-holder" style="width: 100%;">{{url(route('product.detail',$product->slug).'?affiliate_code='.auth()->user()->affiliate_code)}}</textarea>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm copy-url" title="">
                                                Copy Url
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d_customer_row_info">
                           {{$products->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
@section('javascript')
    <script src="{{asset('/public/frontend/assets/js/copy.js')}}"></script>
    @endsection
