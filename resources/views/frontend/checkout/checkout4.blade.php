@extends('frontend.layout.layout')
@section('title','Checkout page 4')
@section('content')

<section class="checkout_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 m-auto">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3 class="text-success">Success! </h3>
                    </div>
                </div>
                <div class="checkout_col_step_2_1 checkout_col_step_3 checkout_col_step_4 col_shadow">
                    <div class="checkout_col_step_2 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout_col_step_3_row_title">
                                <p>You have successfully placed your order.</p>
                            </div>
                           
                            <div class="d_cart_row_address">

                                <p class="shipping_address">Shipping Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->address}}</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City/State  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->state->state_name}}</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->country->country_name}}</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->post_code}}</span></p>

                                </div>
                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Billing Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->address}}</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City/State  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->state->state_name}}</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->country->country_name}}</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->post_code}}</span></p>

                                </div>

                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Payment Method : </p>
                                @foreach($paymentMethods as $paymentMethod)
                                    @if($paymentMethod->id == Session::get('paymentMethod'))
                                <p class="method_type_value"><i class="fas fa-circle"></i>{{$paymentMethod->name}}</p>
                                    @endif
                                @endforeach
                                
                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Shipping Method : </p>
                                @foreach($shippingMethods as $shippingMethod)
                                    @if($shippingMethod->id == Session::get('shippingMethod'))
                                <p class="method_type_value"><i class="fas fa-circle"></i>{{$shippingMethod->method_name}}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                    

                </div>
   
            </div>
            <div class="col-lg-7 col-md-7 m-auto">
                <div class="checkout_col_step_2_1 col_shadow">
                        <div class="cart_step_4_title">
                            <p>Cart</p>
                            <div class="cart_border_bottom"></div>
                        </div>
@foreach($order->orderDetail as $orderDetail)
                        <div class="checkout_col_step_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset($orderDetail->product->product_image)}}" alt="{{$orderDetail->product->name}}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                    <div class="check_out_product_content">
                                        <h4><a href="">{{$orderDetail->product->name}}
                                                @if(!empty($orderDetail->productVarient))
                                                {{$orderDetail->productVarient->product_varient}}
                                                    @endif
                                            </a></h4>
                                        <h3>USD {{$orderDetail->price}} /-</h3>
                                        @if($orderDetail->regular_price != 0)
                                        <p class="cart_del_price"><del>USD {{$orderDetail->regular_price}} </del> <span>{{round(100-(($orderDetail->price/$orderDetail->regular_price) * 100))}}% OFF</span></p>
                                        @endif

                                        <p class="delivery_cost">
                                            <span>Vat:</span>  <span>USD {{$orderDetail->vat}}  /-</span>
                                            <span>Delivery Charge:</span>  <span>USD {{$orderDetail->delivery_charge}}  /-</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                    <div class="check_out_product_remove">
                                        <p>Qty : <span>{{$orderDetail->quantity}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            
        </div>
    </div>
</section>

@endsection
