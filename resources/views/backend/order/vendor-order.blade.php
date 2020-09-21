@extends("backend.layout.layout")
@section("title","Order List")
@section("content")
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Order List</h4>
            </div>
            <div class="pagetitle-btn">
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = CustomClass::paginationSerial($orders);
                        @endphp
                        @forelse($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->orderInfo->payment_gateway->name ?? ''}}</td>
                                <td>{{$order->orderInfo->shipping_method_name->method_name ?? ''}}</td>
                                <td>
                                    @if($order->order_status == 1)
                                        <span class="badge badge-danger"> {{'Cancel'}} </span>
                                    @elseif($order->order_status == 2)
                                        <span class="badge badge-warning"> {{'On Hold'}} </span>
                                    @elseif($order->order_status == 3)
                                        <span class="badge badge-primary">{{'Pending'}} </span>
                                    @elseif($order->order_status == 4)
                                        <span class="badge badge-info">{{'Processing'}} </span>
                                    @else
                                        <span class="badge badge-success"> {{'Complete'}} </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('vendor.order.invoice',encrypt(($order->id)))}}" class="status btn btn-sm fl_btn btn-primary waves-effect waves-light" target="_blank">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <a href="{{route('vendor.order.details',encrypt(($order->id)))}}" class="status btn btn-sm fl_btn btn-success waves-effect waves-light">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <h2 class="text-center">No Order Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($orders->links()))
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    {{$orders->links()}}
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


