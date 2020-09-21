@php
    $totalDeliveryCharge = 0;
@endphp
@foreach(Cart::content() as $row)
    @php
    $totalDeliveryCharge = $totalDeliveryCharge + ($row->options['delivery'] * $row->qty);
    @endphp
    @endforeach

@extends('frontend.layout.layout')
@section('title','Checkout page 3')
@section('content')

<section class="checkout_page">
    <div class="container">
        <form method="post" action="{{route('checkout-step-three-submit')}}">
            @csrf
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Check out (Step 3) </h3>
                    </div>
                </div>
                <div class="checkout_col_step_2_1 checkout_col_step_3 col_shadow">
                    <div class="checkout_col_step_2 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout_col_step_3_row_title">
                                <p>({{Cart::count()}}) Items in the cart . <a href="{{route('cart.index')}}"> View Cart</a></p>
                            </div>
                           
                            <div class="d_cart_row_address">

                                <p class="shipping_address">Shipping Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->address}}</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City/State  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->state->state_name}}</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->country->country_name}}</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->post_code}}</span></p>

                                </div>
                                <div class="cart_border_bottom"></div>
                                <p class="shipping_address">Billing Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->address}}</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City/State  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->state->state_name}}</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->country->country_name}}</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->post_code}}</span></p>

                                </div>
                                <div class="cart_border_bottom"></div>
                                <p class="shipping_address payment_method">Payment Method : </p>
                                <div class="payment_method_btn">
                                    @foreach($paymentMethods as $paymentMethod)
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment_method" value="{{$paymentMethod->id}}" required >{{$paymentMethod->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    

                </div>
   
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="cart_col col_shadow">
                    <div class="order_title">
                        <p>Order Summary</p>
                    </div>
                    <div class="order_cart_part">
                        <div class="order_price_list">
                            <p><span>Subtotal</span> <span>USD <span>{{Cart::priceTotal()}}</span>  /-</span></p>
                            <p><span>Delivery Cost</span> <span>USD <span>{{sprintf('%.2f',$totalDeliveryCharge)}}</span>  /-</span></p>
                            <p><span>VAT</span> <span>USD <span>{{Cart::tax()}}</span>  /-</span></p>
                            @if(Session::has('coupons'))
                                @php
                                    Cart::setGlobalDiscount(array_sum(array_column(Session::get('coupons'),'coupon_amount')));
                                @endphp
                                <p><span>Discount</span> <span>USD <span>-{{Cart::discount()}}</span>  /-</span></p>
                            @endif
                            <div class="p_boder_bottom"></div>
                            <p class="order_total_price"><span>Total</span> <span class="total_amount">USD {{Cart::total(2,'.','') +$totalDeliveryCharge}}  /-</span> </p>
                        </div>
                        @if(Session::has('coupons'))
                        <div class="apply_cupon_part">
                            <p class="apply_cupon_part_title">Cupons:</p>
                            @foreach(Session::get('coupons') as $coupon)
                            <p class="cupon_name">{{$coupon['coupon_name']}}</p>
                                @endforeach
                        </div>
                        @endif
                        <div class="shipping_method">
                            <p>Shipping Methods:</p>
                            <div class="shipping_method_type">
                                @foreach($shippingMethods as $shippingMethod)
                                    @if($shippingMethod->id == Session::get('shippingMethod'))
                                        <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                            <label class="btn">
                                                <input type="radio" checked name="options" value="{{$shippingMethod->id}}">{{$shippingMethod->method_name}}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="cart_part_button">
                        <button type="submit" class="btn btn_5">Complete Purchase</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>

@endsection
