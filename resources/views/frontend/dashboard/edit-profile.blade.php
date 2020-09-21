@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    @php
        $billingCountry = old('billing_country',auth()->user()->billing->country_id ?? 0);
        $billingState = old('billing_state',auth()->user()->billing->state_id ?? 0);
        $shippingCountry = old('shipping_country',auth()->user()->shipping->country_id ?? 0);
        $shippingState = old('shipping_state',auth()->user()->shipping->state_id ?? 0);
    @endphp
    <input type="hidden" value="{{$billingState}}" id="selectedBilingState">
    <input type="hidden" value="{{$shippingState}}" id="selectedShippingState">
    <input type="hidden" value="{{route('get-state')}}" id="get_state_url">
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Edit User Info</p>
                        </div>
                        <div class="d_customer_row_info">
                            <div class="form">
                                <form method="post" action="{{route('customer.update-profile')}}">
                                    @csrf
                                <div class="checkout_col col_shadow">
                                    <div class="checkout_form_part_title">
                                        <p>Contact</p>
                                    </div>
                                    <div class="checkout_form_part">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name',auth()->user()->billing->name ?? '')}}" placeholder="Full Name">
                                                    <span class="text-danger">
                                            @error('name') {{$message}} @enderror
                                        </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="demo@email.com" value="{{old('email',auth()->user()->billing->email ?? '')}}">
                                                    <span class="text-danger">
                                            @error('email') {{$message}} @enderror
                                        </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Phone Number" value="{{old('contact_no',auth()->user()->billing->contact_no ?? '')}}">
                                                    <span class="text-danger">
                                            @error('contact_no') {{$message}} @enderror
                                        </span>
                                                </div>
                                            </div>
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
                                    <div class="checkout_form_part_title">
                                        <p>Shipping Address</p>
                                    </div>
                                    <div class="checkout_form_part">

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
                                    <div class="text-right">
                                        <button type="submit" class="search_btn">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection

@section('javascript')
    <script src="{{asset('/public/frontend/assets/js/state.js')}}"></script>
@endsection
