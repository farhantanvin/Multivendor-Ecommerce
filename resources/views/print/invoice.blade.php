<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice NO {{$order->id}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/public/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/public/backend/assets/css/adminlte.min.css')}}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper p-5">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <img style="width: 7%;" src="{{asset($siteSetting->logo)}}">
                    <small class="float-right">Date: {{date('d-m-y',strtotime($order->order_date))}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
                From
                <address>
                    <strong>{{$siteSetting->name}}</strong><br>
                   {{$siteSetting->address}} <br />
                    Email: {{$siteSetting->email}}<br />
                    Contact No: {{$siteSetting->phone_number}}
                </address>
            </div>

            <div class="col-sm-3 invoice-col">
                Billing Address
                <address>
                    <strong>{{$order->orderBillingAddress->name ?? ''}}</strong><br>
                    {{$order->orderBillingAddress->address ?? ''}}<br>
                    {{$order->orderBillingAddress->state->state_name ?? ''}},{{$order->orderBillingAddress->country->country_name ?? ''}},
                    {{$order->orderBillingAddress->customer_postal_code ?? ''}}<br>
                    Phone: {{$order->orderBillingAddress->contact_no ?? ''}}<br>
                    Email: {{$order->orderBillingAddress->email ?? ''}}
                </address>
            </div>

            <div class="col-sm-3 invoice-col">
                Shipping Address
                <address>
                    <strong>{{$order->orderShippingAddress->name ?? ''}}</strong><br>
                    {{$order->orderShippingAddress->address ?? ''}}<br>
                    {{$order->orderShippingAddress->state->state_name ?? ''}},{{$order->orderShippingAddress->country->country_name ?? ''}},
                    {{$order->orderShippingAddress->customer_postal_code ?? ''}}<br>
                    Phone: {{$order->orderShippingAddress->contact_no ?? ''}}<br>
                    Email: {{$order->orderShippingAddress->email ?? ''}}
                </address>
            </div>

            <div class="col-sm-3 invoice-col">
                <br />
                <h2 style="font-weight: bold">Invoice No</h2>
                <h2>#{{$order->id}}</h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
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
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
                <p class="lead"><strong>Payment Methods:</strong> {{$order->payment_gateway->name ?? ''}}</p>
            </div>
            <!-- /.col -->
            <div class="col-6">
                <p class="lead"><strong>Shipping Methods:</strong> {{$order->shipping_method_name->method_name ?? ''}}</p>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>
</body>
</html>
