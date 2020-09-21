@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Basic Info</p>
                        </div>
                        <div class="d_customer_row_info">
                            <p class="span_p"><span class="d_span_1">Name</span><span
                                    class="d_span_2">:</span> <span
                                    class="d_span_3">{{auth()->user()->name}}</span></p>
                            <p class="span_p"><span class="d_span_1">Email</span><span
                                    class="d_span_2">:</span> <span
                                    class="d_span_3">{{auth()->user()->email}}</span></p>
                            <p class="span_p"><span class="d_span_1">Phone Number</span><span
                                    class="d_span_2">:</span> <span class="d_span_3">{{auth()->user()->contact_no}}</span>
                            </p>
                        </div>
                        <div class="d_customer_row_title mt-4">
                            <p>Security & Address</p>
                        </div>
                        <div class="d_customer_row_address">
                            <p class="shipping_address">Shipping Address : </p>
                            <p> <span class="a_span_1"> Address </span> <span class="a_span_2">:</span>
                                <span class="a_span_3">{{auth()->user()->shipping->address ?? ''}}</span></p>
                            <div class="multiple_address">
                                <p> <span class="a_span_1"> City/State </span> <span class="a_span_2">:</span>
                                    <span class="a_span_3">{{auth()->user()->shipping->state->state_name ?? ''}}</span></p>
                                <p> <span class="a_span_1"> Country </span> <span class="a_span_2">:</span>
                                    <span class="a_span_3">{{auth()->user()->shipping->country->country_name ?? ''}}</span></p>
                                <p> <span class="a_span_1"> Post Code </span> <span
                                        class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->shipping->post_code ?? ''}}</span></p>

                            </div>
                            <p class="shipping_address">Billing Address : </p>
                            <p> <span class="a_span_1"> Address </span> <span class="a_span_2">:</span>
                                <span class="a_span_3">{{auth()->user()->billing->address ?? ''}}</span></p>
                            <div class="multiple_address">
                                <p> <span class="a_span_1"> City/State </span> <span class="a_span_2">:</span>
                                    <span class="a_span_3">{{auth()->user()->billing->state->state_name ?? ''}}</span></p>
                                <p> <span class="a_span_1"> Country </span> <span class="a_span_2">:</span>
                                    <span class="a_span_3">{{auth()->user()->billing->country->country_name ?? ''}}</span></p>
                                <p> <span class="a_span_1"> Post Code </span> <span
                                        class="a_span_2">:</span> <span class="a_span_3">{{auth()->user()->billing->post_code ?? ''}}</span></p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane  fade" id="hotels">

            </div>
            <div role="tabpanel" class="tab-pane  fade" id="reviews">

            </div>
        </div>
    </div>
    @endsection
