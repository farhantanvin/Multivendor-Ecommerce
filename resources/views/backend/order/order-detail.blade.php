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
                                    <th style="padding: 15px">Vendor</th>
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
                                @php
                                    $totalDeliveryCharge = 0;
                                @endphp
                                @foreach($order->orderDetail as $row)
                                    <tr style="padding: 0 30px;">
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            {{$row->vendor->name ?? ''}}
                                        </td>
                                        <td>
                                            {{$row->product->product_name.$row->product_varient_name}}
                                        </td>
                                        <td>{{$row->quantity}}</td>
                                        <td>$ {{$row->price}}</td>
                                        <td>$ {{$row->vat * $row->quantity}}</td>
                                        <td>$ {{$row->delivery_charge}}</td>
                                        <td>$ {{$row->discount}}</td>
                                        <td>$ {{$row->total + $row->delivery_charge}}</td>
                                        <td class="status">
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
                                        <td>
                                            <select class="browser-default custom-select form-control order-status" orderDetailId ="{{$row->id}}">
                                                <option @if($row->order_status == 1) selected @endif  value="1">Cancel</option>
                                                <option @if($row->order_status == 2) selected @endif value="2">On Hold</option>
                                                <option @if($row->order_status == 3) selected @endif value="3">Pending</option>
                                                <option @if($row->order_status == 4) selected @endif value="4">Processing</option>
                                                <option @if($row->order_status == 5) selected @endif value="5">Complete</option>
                                            </select>
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
                            <p class="lead"><strong>Payment Methods:</strong> <br /> {{$order->payment_gateway->name ?? ''}}</p>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <p class="lead"><strong>Shipping Methods:</strong> <br /> {{$order->shipping_method_name->method_name ?? ''}}</p>
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
                <!-- /.card-body -->
                
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')
<script src="{{asset('/public/custom/order-status.js')}}"></script>
@endsection

