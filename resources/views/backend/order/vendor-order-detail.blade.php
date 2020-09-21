@extends("backend.layout.layout")
@section("title","Order Details")
<style type="text/css">
    table.billing.table th, table.billing.table td {
        padding-top: 0.2rem !important;
        padding-bottom: .2rem !important;
    }
    .billing td, .billing th {
        padding: .75rem .75rem .0rem .75rem !important;
    }
</style>
@section("content")

<div class="fl-page-section">
    <input type="hidden" value="{{route('order.status.change')}}" id="orderStatusUrl">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Order Details</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <div class="row invoice-info">

                        <div class="col-sm-4 invoice-col">
                            <h4>Billing Address</h4>
                            <address>
                                <strong>{{$order->orderInfo->orderBillingAddress->name ?? ''}}</strong><br>
                                {{$order->orderInfo->orderBillingAddress->address ?? ''}}<br>
                                {{$order->orderInfo->orderBillingAddress->state->state_name ?? ''}},{{$order->orderInfo->orderBillingAddress->country->country_name ?? ''}},
                                {{$order->orderInfo->orderBillingAddress->customer_postal_code ?? ''}}<br>
                                Phone: {{$order->orderInfo->orderBillingAddress->contact_no ?? ''}}<br>
                                Email: {{$order->orderInfo->orderBillingAddress->email ?? ''}}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <h4>Shipping Address</h4>
                            <address>
                                <strong>{{$order->orderInfo->orderShippingAddress->name ?? ''}}</strong><br>
                                {{$order->orderInfo->orderShippingAddress->address ?? ''}}<br>
                                {{$order->orderInfo->orderShippingAddress->state->state_name ?? ''}},{{$order->orderInfo->orderShippingAddress->country->country_name ?? ''}},
                                {{$order->orderInfo->orderShippingAddress->customer_postal_code ?? ''}}<br>
                                Phone: {{$order->orderInfo->orderShippingAddress->contact_no ?? ''}}<br>
                                Email: {{$order->orderInfo->orderShippingAddress->email ?? ''}}
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <br />
                            <h4 style="font-weight: bold">Invoice No.</h4>
                            <h4>#{{$order->order_id}}</h4>
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
                                    <th style="padding: 15px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr style="padding: 0 30px;">
                                        <td>{{1}}</td>
                                        <td>
                                            {{$order->product->product_name.$order->product_varient_name}}
                                        </td>
                                        <td>{{$order->quantity}}</td>
                                        <td>$ {{$order->price}}</td>
                                        <td>$ {{$order->vat * $order->quantity}}</td>
                                        <td>$ {{$order->delivery_charge}}</td>
                                        <td>$ {{$order->discount}}</td>
                                        <td>$ {{$order->total + $order->delivery_charge}}</td>
                                        <td class="status">
                                            @if($order->order_status == 1)
                                                <span class="badge badge-danger">{{'Cancel'}} </span>
                                            @elseif($order->order_status == 2)
                                                <span class="badge badge-warning">{{'On Hold'}} </span>
                                            @elseif($order->order_status == 3)
                                                <span class="badge badge-primary">{{'Pending'}} </span>
                                            @elseif($order->order_status == 4)
                                                <span class="badge badge-info">{{'Processing'}} </span>
                                            @else
                                                <span class="badge badge-success">{{'Complete'}} </span>
                                            @endif
                                        </td>
                                        <td>
                                            <select class="browser-default custom-select form-control order-status" orderDetailId ="{{$order->id}}">
                                                <option @if($order->order_status == 1) selected @endif  value="1">Cancel</option>
                                                <option @if($order->order_status == 2) selected @endif value="2">On Hold</option>
                                                <option @if($order->order_status == 3) selected @endif value="3">Pending</option>
                                                <option @if($order->order_status == 4) selected @endif value="4">Processing</option>
                                                <option @if($order->order_status == 5) selected @endif value="5">Complete</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-4">
                            <p class="lead"><strong>Payment Methods:</strong> <br /> {{$order->orderInfo->payment_gateway->name ?? ''}}</p>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <p class="lead"><strong>Shipping Methods:</strong> <br /> {{$order->orderInfo->shipping_method_name->method_name ?? ''}}</p>
                        </div>
                        <div class="col-4 text-center">
                            <a href="{{URL::previous()}}" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                            <a href="{{route('vendor.order.invoice',encrypt(($order->id)))}}" class="btn btn-sm btn-primary" target="_blank">
                                <i class="fas fa-print"></i> Print
                            </a>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.card-body -->
                
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')
<script src="{{asset('/public/custom/order-status.js')}}"></script>
@endsection

