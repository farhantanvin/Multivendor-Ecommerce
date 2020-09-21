@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Order Details</p>
                        </div>
                        <div class="d_customer_row_info table-responsive">

                        </div>
                        <div class="d_customer_row_info">
                            <div class="row invoice-info">

                                <div class="col-sm-4 invoice-col">
                                    <h4>Billing Address</h4>
                                    <address>
                                        <strong>{{$order->orderBillingAddress->name ?? ''}}</strong><br>
                                        {{$order->orderBillingAddress->address ?? ''}}<br>
                                        {{$order->orderBillingAddress->state->state_name ?? ''}},{{$order->orderBillingAddress->country->country_name ?? ''}},
                                        {{$order->orderBillingAddress->customer_postal_code ?? ''}}<br>
                                        Phone: {{$order->orderBillingAddress->contact_no ?? ''}}<br>
                                        Email: {{$order->orderBillingAddress->email ?? ''}}
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <h4>Shipping Address</h4>
                                    <address>
                                        <strong>{{$order->orderShippingAddress->name ?? ''}}</strong><br>
                                        {{$order->orderShippingAddress->address ?? ''}}<br>
                                        {{$order->orderShippingAddress->state->state_name ?? ''}},{{$order->orderShippingAddress->country->country_name ?? ''}},
                                        {{$order->orderShippingAddress->customer_postal_code ?? ''}}<br>
                                        Phone: {{$order->orderShippingAddress->contact_no ?? ''}}<br>
                                        Email: {{$order->orderShippingAddress->email ?? ''}}
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <br />
                                    <h4 style="font-weight: bold">Invoice No.</h4>
                                    <h4>#{{$order->id}}</h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table" style="width: 100%;background-color: white">
                                        <thead>
                                        <tr style="color: #000;">
                                            <th style="padding: 15px">#SL</th>
                                            <th style="padding: 15px">Name</th>
                                            <th style="padding: 15px">Qty</th>
                                            <th style="padding: 15px">Price</th>
                                            <th style="padding: 15px">Vat/Tax</th>
                                            <th style="padding: 15px">Delivery Charge</th>
                                            <th style="padding: 15px">Discount</th>
                                            <th style="padding: 15px">Total</th>
                                            <th style="padding: 15px">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $totalDeliveryCharge = 0;
                                        @endphp
                                        @foreach($order->orderDetail as $row)
                                            <tr style="padding: 0 30px;">
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    {{$row->product->product_name.$row->product_varient_name}}
                                                </td>
                                                <td>{{$row->quantity}}</td>
                                                <td>$ {{$row->price}}</td>
                                                <td>$ {{$row->vat * $row->quantity}}</td>
                                                <td>$ {{$row->delivery_charge}}</td>
                                                <td>$ {{$row->discount}}</td>
                                                <td>$ {{$row->total + $row->delivery_charge}}</td>
                                                <td>
                                                    @if($row->order_status == 1)
                                                        <span class="badge badge-danger">{{'Cancel'}} </span>
                                                    @elseif($row->order_status == 2)
                                                        <span class="badge badge-warning">{{'On Hold'}} </span>
                                                    @elseif($row->order_status == 3)
                                                        <span class="badge badge-primary">{{'Pending'}} </span>
                                                    @elseif($row->order_status == 4)
                                                        <span class="badge badge-info">{{'Processing'}} </span>
                                                    @else
                                                        <span class="badge badge-success">{{'Complete'}} </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: left">Total</td>
                                            <td>$ {{$order->subtotal}}</td>
                                            <td>$ {{$order->order_tax}}</td>
                                            <td>$ {{$order->delivery_charge}}</td>
                                            <td>$ {{$order->discount}}</td>
                                            <td>$ {{$order->total}}</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-4">
                                    <p class="lead"><strong>Payment Methods:</strong> <br /> {{$order->payment_gateway->name}}</p>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <p class="lead"><strong>Shipping Methods:</strong> <br /> {{$order->shipping_method_name->method_name}}</p>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="{{URL::previous()}}" class="btn btn-sm btn-info">
                                        <i class="fas fa-arrow-left"></i> back
                                    </a>
                                    <a href="{{route('frontend.order.invoice',encrypt(($order->id)))}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-print"></i> Print
                                    </a>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
