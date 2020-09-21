@extends('frontend.layout.layout')
@section('title','Eheckout page 1')
@section('content')

<section class="checkout_page">
    <div class="container">
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
                                        <input type="text" class="form-control" id="" placeholder="Full Name / Name on NID">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="demo@gmail.com">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check form-check_checkout form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Create account</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="New Password">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Confirm Password">             
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
                                        <input type="text" class="form-control" id="" placeholder="Full Name / Name on NID">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="demo@gmail.com">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="City/State">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Postal Code">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Country">             
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        
                    </div>

                    <div class="checkout_col col_shadow">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check form-check_checkout form-group">
                                    <input type="checkbox" class="form-check-input" id="">
                                    <label class="form-check-label" for="">Same as Billing Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_form_part_title">
                            <p>Shipping Address</p>
                        </div>
                        <div class="checkout_form_part">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Full Name / Name on NID">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="demo@gmail.com">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="City/State">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Postal Code">             
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Country">             
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
                        <div class="cart_product_part_row">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="cart_product_part_left">
                                        <a href="">Samsung s202x | Thinest Ultrabook</a>
                                        <p class="">BDT <span>8000</span> /-</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="cart_product_part_right">
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart_product_part_row">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="cart_product_part_left">
                                        <a href="">Samsung s202x | Thinest Ultrabook</a>
                                        <p class="">BDT <span>8000</span> /-</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="cart_product_part_right">
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart_product_part_row">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="cart_product_part_left">
                                        <a href="">Samsung s202x | Thinest Ultrabook</a>
                                        <p class="">BDT <span>8000</span> /-</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="cart_product_part_right">
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_total_price">
                        <p>Total</p>
                        <h3>BDT <span>7636</span> /-</h3>
                    </div>
                    <div class="cart_part_button">
                        <button class="btn btn_5">Continue</button>
                        <button class="btn btn_6">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection