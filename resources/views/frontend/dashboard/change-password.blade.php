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
                            <p>Change Password</p>
                        </div>
                        <div class="d_customer_row_info">
                            <div class="form">
                                <form method="post" action="{{route('customer.change-password.submit')}}">
                                    @csrf
                                <div class="checkout_col col_shadow">
                                    <div class="checkout_form_part">
                                        <div class="row">
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
