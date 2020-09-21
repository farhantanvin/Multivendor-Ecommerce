@extends('frontend.layout.layout')
@section('title','Eheckout page 3')
@section('content')

<section class="checkout_page">
    <div class="container">
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
                                <p>(3) Items in the cart . <a href=""> View Cart</a></p>
                            </div>
                           
                            <div class="d_cart_row_address">

                                <p class="shipping_address">Shipping Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                </div>
                                <div class="cart_border_bottom"></div>
                                <p class="shipping_address">Billing Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                </div>
                                <div class="cart_border_bottom"></div>
                                <p class="shipping_address payment_method">Payment Method : </p>
                                <div class="payment_method_btn">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Cash On Delivery
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio">Bkash
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optradio" >Nexus Pay
                                        </label>
                                    </div>
                                </div>
                                <button class="btn add_mathod_btn">Add Method</button>

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
                            <p><span>Subtotal</span> <span>BDT <span>3455</span>  /-</span></p>
                            <p><span>Delivery Cost</span> <span>BDT <span>300</span>  /-</span></p>
                            <p><span>VAT</span> <span>BDT <span>34</span>  /-</span></p>
                            <div class="p_boder_bottom"></div>
                            <p class="order_total_price"><span>Total</span> <span class="total_amount">BDT 3455  /-</span> </p>
                        </div>
                        <div class="apply_cupon_part">
                            <p class="apply_cupon_part_title">Cupons:</p>
                            <p class="cupon_name">Pathao Currier</p>
                        </div>
                        <div class="shipping_method">
                            <p>Shipping Methods:</p>
                            <div class="shipping_method_type">
                                <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                    <label class="btn">
                                        <input type="radio" name="options">Pathao Currier
                                    </label>
                                </div>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                    <label class="btn">
                                        <input type="radio" name="options">S.A Paribahon
                                    </label>
                                </div>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                    <label class="btn">
                                        <input type="radio" name="options">Sundorban Curier Service
                                    </label>
                                </div>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons" id="">
                                    <label class="btn">
                                        <input type="radio" name="options">National Mail System
                                    </label>
                                </div>
                              
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="cart_part_button">
                        <button class="btn btn_5">Complete Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection