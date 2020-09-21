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
                                <td>{{$order->id}}</td>
                                <td>{{$order->payment_gateway->name ?? ''}}</td>
                                <td>{{$order->shipping_method_name->method_name ?? ''}}</td>
                                <td>
                                    @php
                                        $status = 6;
                                    @endphp
                                    @foreach($order->orderDetail as $orderDetail)
                                        @if($orderDetail->order_status < $status)
                                            @php
                                                $status = $orderDetail->order_status;
                                            @endphp
                                        @endif
                                    @endforeach
                                    @if($status == 1)
                                        <span class="badge badge-danger"> {{'Cancel'}} </span>
                                    @elseif($status == 2)
                                        <span class="badge badge-warning"> {{'On Hold'}} </span>
                                    @elseif($status == 3)
                                        <span class="badge badge-primary">{{'Pending'}} </span>
                                    @elseif($status == 4)
                                        <span class="badge badge-info">{{'Processing'}} </span>
                                    @else
                                        <span class="badge badge-success"> {{'Complete'}} </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('frontend.order.invoice',encrypt(($order->id)))}}" class="status btn btn-sm fl_btn btn-primary waves-effect waves-light">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <a href="{{route('admin.order.view',encrypt(($order->id)))}}" class="status btn btn-sm fl_btn btn-success waves-effect waves-light">
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


