@extends('frontend.layout.layout')
@section('title','Checkout Page 1')
@section('content')

    @php
        $billingCountry = old('billing_country',auth()->user()->billing->country_id ?? 0);
        $billingState = old('billing_state',auth()->user()->billing->state_id ?? 0);
        $shippingCountry = old('shipping_country',auth()->user()->shipping->country_id ?? 0);
        $shippingState = old('shipping_state',auth()->user()->shipping->state_id ?? 0);
        @endphp

<section class="checkout_page">
    <div class="container">
        <form method="post" action="{{route('checkout-step-one-submit')}}">
            @csrf
            <input type="hidden" value="{{$billingState}}" id="selectedBilingState">
            <input type="hidden" value="{{$shippingState}}" id="selectedShippingState">
            <input type="hidden" value="{{route('get-state')}}" id="get_state_url">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Check out (Step 1) </h3>
                    </div>
                </div>
                <div class="form">
                    <div class="checkout_col col_shadow">
                        <div class="checkout_form_part_title">
                            <p>Contact</p>
                        </div>
                        <div class="checkout_form_part">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" value="{{old('name',auth()->user()->name ?? '')}}" placeholder="Full Name">
                                        <span class="text-danger">
                                            @error('name') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="demo@email.com" value="{{old('email',auth()->user()->email ?? '')}}">
                                        <span class="text-danger">
                                            @error('email') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Phone Number" value="{{old('contact_no',auth()->user()->contact_no ?? '')}}">
                                        <span class="text-danger">
                                            @error('contact_no') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                @guest
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password" >
                                        <span class="text-danger">
                                            @error('password') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                        <span class="text-danger">
                                            @error('confirm_password') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </div>

                    <div class="checkout_col col_shadow">
                        <div class="checkout_form_part_title">
                            <p>Billing Details</p>
                        </div>
                        <div class="checkout_form_part">

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="billing_country" name="billing_country">
                                            <option @if($billingCountry == 0) selected @endif disabled>Select Country</option>
                                            @foreach($countries as $country)
                                                <option @if($billingCountry == $country->id) selected @endif
                                                    value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('billing_country') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select type="text" class="form-control" id="billing_state" name="billing_state">
                                            <option selected disabled>Select City/State</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('billing_state') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="billing_postal_code" name="billing_postal_code" placeholder="Postal Code" value="{{old('billing_postal_code',auth()->user()->billing->post_code ?? '')}}">
                                        <span class="text-danger">
                                            @error('billing_postal_code') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="billing_address" name="billing_address" rows="2" placeholder="Billing Address">{{old('billing_address',auth()->user()->billing->address ?? '')}}</textarea>
                                        <span class="text-danger">
                                            @error('billing_address') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        
                    </div>

                    <div class="checkout_col col_shadow">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check form-check_checkout form-group">
                                    <input type="checkbox" class="form-check-input same_sa_billing_class" id="same_sa_billing" name="same_sa_billing" value="1">
                                    <label class="form-check-label" for="">Same as Billing Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_form_part_title checkout_form_part_1">
                            <p>Shipping Address</p>
                        </div>
                        <div class="checkout_form_part checkout_form_part_1">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select type="text" class="form-control" id="shipping_country" name="shipping_country">
                                            <option @if($shippingCountry == 0) selected @endif disabled>Select Country</option>
                                            @foreach($countries as $country)
                                                <option @if($shippingCountry == $country->id) selected @endif
                                                    value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('shipping_country') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <select type="text" class="form-control" id="shipping_state" name="shipping_state">
                                            <option selected disabled>Select City/State</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('shipping_state') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="shipping_postal_code" name="shipping_postal_code" placeholder="Postal Code" value="{{old('shipping_postal_code', auth()->user()->shipping->post_code ?? '')}}">
                                        <span class="text-danger">
                                            @error('shipping_postal_code') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="shipping_address" name="shipping_address" rows="2" placeholder="Billing Address">{{old('shipping_address', auth()->user()->shipping->address ?? '')}}</textarea>
                                        <span class="text-danger">
                                            @error('shipping_address') {{$message}} @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="cart_col col_shadow">
                    <div class="cart_title">
                        <p>Cart</p>
                    </div>
                    <div class="cart_product_part">
                        @php
                        $deliveryCharge = 0;
                        @endphp
                        @foreach(Cart::content() as $row)
                            @php
                                $deliveryCharge = $deliveryCharge + $row->options['delivery'] * $row->qty;
                            @endphp
                        <div class="cart_product_part_row">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="cart_product_part_left">
                                        <a href="">{{$row->name}} {{$row->options['product_varient']}}</a>
                                        <p class="">USD <span>{{$row->total + ($row->options['delivery'] * $row->qty)}}</span> /-</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="cart_product_part_right">
                                        <p>Qty : <span>{{$row->qty}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                    <div class="cart_total_price">
                        <p>Total</p>
                        <h3>USD <span>{{Cart::total(2,'.','') + $deliveryCharge}}</span> /-</h3>
                    </div>

                    <div class="cart_part_button">
                        <button type="submit" class="btn btn_5">Continue</button>
                        @guest
                        <a href="{{route('user.login')}}" class="btn btn_6">Login</a>
                        @endguest
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
</section>
@endsection

@section('javascript')
    <script src="{{asset('/public/frontend/assets/js/state.js')}}"></script>
    @endsection
