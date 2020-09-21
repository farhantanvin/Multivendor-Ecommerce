<!Doctype html>
<html>
<head>
<style>
    table{
        border-collapse: collapse;
    }
    .table,.table th,.table td{
        border: 2px solid #82787e3b;
    }
    .table td{
        text-align: center;
        padding: 10px;
    }
    ul li{
        padding: 5px 0;
    }
</style>
</head>
<body style="width: 90%; margin:20px auto;background-color: whitesmoke">
<table style="width: 100%;background-color: white">
    <tr style="background-color: #0c73bb;">
        <td style="text-align: center;width: 100%;">
            <h1 style="color: white;margin: 15px 0;">Thank you for your order.</h1>
        </td>
    </tr>

    <tr>
        <td style="text-align: justify;width: 100%;padding: 0 30px;">
            <p style="color: black;margin: 15px 0;">
                Your order has been received and now being process. Your order details are shown
                below for your reference
            </p>
        </td>
    </tr>

    <tr>
        <td style="text-align: justify;width: 100%;padding: 0 30px;">
                    <strong>Payment Method:</strong> {{$data['paymentMethod']->name}}
        </td>
    </tr>


    <tr>
        <td style="text-align: justify;width: 100%;padding: 0 30px;">
            <h2 style="margin: 15px 0;">Invoice No: #{{$data['orderId']}}</h2>
        </td>
    </tr>
</table>

<div style="padding: 20px 30px;background-color: white;">
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
   </tr>
   </thead>
    <tbody>
    @php
    $totalDeliveryCharge = 0;
    @endphp
    @foreach(Cart::content() as $row)

    <tr style="padding: 0 30px;">
        <td>{{$loop->iteration}}</td>
        <td>
            {{$row->name}}
            {{$row->options['product_varient']}}
        </td>
        <td>{{$row->qty}}</td>
        <td>$ {{$row->price}} * {{$row->qty}} = {{$row->priceTotal}}</td>
        <td>$ {{$row->tax}} * {{$row->qty}} = {{$row->tax * $row->qty}}</td>
        <td>$ {{$row->options['delivery']}} * {{$row->qty}} = {{$row->options['delivery'] * $row->qty}}</td>
        <td>$ {{$row->discount}} * {{$row->qty}} = {{$row->discount * $row->qty}}</td>
        <td>$ {{$row->total + ($row->options['delivery'] * $row->qty)}}</td>
    </tr>
        @php
            $totalDeliveryCharge = $totalDeliveryCharge + ($row->options['delivery'] * $row->qty);
            @endphp
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3" style="text-align: left">Total</td>
        <td>$ {{Cart::priceTotal()}}</td>
        <td>$ {{Cart::tax()}}</td>
        <td>$ {{$totalDeliveryCharge}}</td>
        <td>$ {{Cart::discount(2,'.','')}}</td>
        <td>$ {{Cart::total(2,'.','')+$totalDeliveryCharge}}</td>
    </tr>
    </tfoot>
</table>
</div>

<table style="background-color: white;width: 100%;">
    <tr>
        <td style="padding: 0 30px">
            <h3 style="color: #0c73bb;margin: 0">Customer Details</h3>
            <ul style="margin: 0">
                <li>
                    <strong>Name: </strong>{{auth()->user()->name}}
                </li>
                <li>
                    <strong>Email: </strong>{{auth()->user()->email}}
                </li>
                <li>
                    <strong>Contact NO: </strong>{{auth()->user()->contact_no}}
                </li>
            </ul>
        </td>
        <td style="padding: 30px 0 30px 0">
            <h3 style="color: #0c73bb;margin: 0">Billing Address</h3>
            <ul style="margin: 0">
                <li>
                    <strong>Country: </strong> {{auth()->user()->billing->country->country_name}}
                </li>
                <li>
                    <strong>State: </strong> {{auth()->user()->billing->state->state_name}}
                </li>
                <li>
                    <strong>Address: </strong>{{auth()->user()->billing->address}}
                </li>
                <li>
                    <strong>Post Code: </strong> {{auth()->user()->billing->post_code}}
                </li>
            </ul>
        </td>
        <td style="padding: 30px 0 30px 0">
            <h3 style="color: #0c73bb;margin: 0">Shipping Address</h3>
            <ul style="margin: 0">
                <li>
                    <strong>Country: </strong> {{auth()->user()->shipping->country->country_name}}
                </li>
                <li>
                    <strong>State: </strong> {{auth()->user()->shipping->state->state_name}}
                </li>
                <li>
                    <strong>Address: </strong>{{auth()->user()->shipping->address}}
                </li>
                <li>
                    <strong>Post Code: </strong> {{auth()->user()->shipping->post_code}}
                </li>
            </ul>
        </td>
    </tr>
</table>
<div style="text-align: center;padding: 30px;background-color: white">
    <a style="padding: 20px;border-radius: 5px;text-decoration: none;background-color: #0c73bb;color: white;" href="{{route('frontend.order.invoice',encrypt($data['orderId']))}}">Print Invoice</a>
</div>

<div style="background-color: #0c73bb;padding: 30px;">
<h3 style="text-align: center;color: white;margin: 0">{{$data['siteSetting']->site_title}}</h3>
 <p style="text-align: center;color: white">Email:{{$data['siteSetting']->email}}</p>
 <p style="text-align: center;color: white">Contact No:{{$data['siteSetting']->phone}}</p>
 <p style="text-align: center;color: white">{{$data['siteSetting']->location}}</p>
</div>

</body>
</html>
