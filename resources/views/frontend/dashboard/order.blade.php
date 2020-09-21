@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Basic Info</p>
                        </div>
                        <div class="d_customer_row_info table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Order Number</th>
                                        <th>Payment Method</th>
                                        <th>Shipping Method</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->payment_gateway->name ?? ''}}</td>
                                        <td>{{$order->shipping_method_name->method_name}}</td>
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
                                                <span class="badge badge-danger">{{$status}} {{'Cancel'}} </span>
                                            @elseif($status == 2)
                                                <span class="badge badge-warning">{{$status}} {{'On Hold'}} </span>
                                            @elseif($status == 3)
                                                <span class="badge badge-primary">{{$status}} {{'Pending'}} </span>
                                            @elseif($status == 4)
                                                <span class="badge badge-info">{{$status}} {{'Processing'}} </span>
                                            @else
                                                <span class="badge badge-success"> {{$status}} {{'Complete'}} </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('frontend.order.invoice',encrypt(($order->id)))}}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            <a href="{{route('customer.order.view',encrypt(($order->id)))}}" class="btn btn-sm btn-success">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d_customer_row_info">
                           {{$orders->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
