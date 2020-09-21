@php
    $totalDeliveryCharge = 0;
@endphp
@extends('frontend.layout.layout')
@section('title','Checkout page 2')
@section('content')

<section class="checkout_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Check out (Step 2) </h3>
                    </div>
                </div>
                <div class="checkout_col_step_2_1 col_shadow">
                    @foreach(Cart::content() as $row)
                    <div class="checkout_col_step_2">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="check_out_product_image">
                                    <a href="{{route('product.detail',$row->options['slug'])}}">
                                        <img src="{{asset($row->options['image_url'])}}" alt="{{$row->name}}" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                <div class="check_out_product_content">
                                    <h4>
                                        <a href="{{route('product.detail',$row->options['slug'])}}">{{$row->name}}  {{$row->options['product_varient']}}</a>
                                    </h4>
                                    <h3>USD {{$row->price * $row->qty}} /-</h3>
                                    @if($row->options['regular_price'] != 0)
                                    <p class="cart_del_price"><del>USD {{$row->options['regular_price']}}</del> <span>{{100 - round(($row->price/$row->options['regular_price']) * 100)}}% OFF</span></p>
                                    @endif
                                    <p class="delivery_cost">
                                        <span>Vat:</span>  <span>USD {{$row->tax * $row->qty}}  /-</span>
                                        <span>Delivery Charge:</span>  <span>USD {{$row->options['delivery'] * $row->qty}}  /-</span>
                                    </p>
                                    @php
                                        $totalDeliveryCharge = $totalDeliveryCharge + ($row->options['delivery'] * $row->qty);
                                    @endphp
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                <div class="check_out_product_remove">
                                    <p>Qty : <span>{{$row->qty}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
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
                        <div class="apply_cupon">
                            <form method="post" action="{{route('coupon.apply')}}">
                                <p>Apply Cupon <i class="fas fa-plus"></i></p>
                                <div class="form-group d-flex">
                                        @csrf
                                    <input type="text" name="coupon" class="form-control" id="coupon" value="{{old('coupon')}}" required>
                                    <button type="submit" class="btn">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if(Session::has('coupons'))
                        <div class="apply_cupon_part">
                            <p class="apply_cupon_part_title">Cupons:</p>
                            @foreach(Session::get('coupons') as $coupon)
                                <p class="cupon_name">{{$coupon['coupon_name']}}</p>
                            @endforeach
                        </div>
                    @endif

<form method="post" action="{{route('checkout-step-two-submit')}}">
    @csrf
                    <div class="shipping_method">
                        <p>Shipping Methods:</p>
                        <div class="shipping_method_type">
                            @foreach($shippingMethods as $shippingMethod)
                            <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                <label class="btn">
                                    <input type="radio" name="options" value="{{$shippingMethod->id}}" required>{{$shippingMethod->method_name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="cart_part_button">
                        <button class="btn btn_5">Continue</button>
                        <a href="{{route('home.index')}}" class="btn btn_6">Continue Shopping</a>
                    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
