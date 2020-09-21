@extends('frontend.layout.layout')
@section('title','Eheckout page 4')
@section('content')

<section class="checkout_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 m-auto">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3 class="">Success! </h3>
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
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                </div>
                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Billing Address : </p>
                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                <div class="multiple_address">
                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                </div>

                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Payment Method : </p>
                                <p class="method_type_value"><i class="fas fa-circle"></i>Bkash</p>
                                
                                <div class="cart_bordwer_bottom"></div>
                                <p class="shipping_address">Shipping Method : </p>
                                <p class="method_type_value"><i class="fas fa-circle"></i>Shundorban Currier Services</p>
                                
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

                        <div class="checkout_col_step_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/Laptop2.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                    <div class="check_out_product_content">
                                        <h4><a href="">SAMSUNG S202X | THINEST ULTRABOOK</a></h4>
                                        <h3>BDT 8000 /-</h3>
                                        <p class="cart_del_price"><del>BDT 1600</del> <span>15% OFF</span></p>
                                        <p class="delivery_cost"> <span>Delivery Cost:</span>  <span>BDT 80 /-</span> <span>(via Pathao Currier)</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                    <div class="check_out_product_remove">
                                        <a href="" class="cart_remove_icon">Remove item <i class="far fa-trash-alt"></i></a>
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_col_step_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/GameStation.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                    <div class="check_out_product_content">
                                        <h4><a href="">SAMSUNG S202X | THINEST ULTRABOOK</a></h4>
                                        <h3>BDT 8000 /-</h3>
                                        <p class="cart_del_price"><del>BDT 1600</del> <span>15% OFF</span></p>
                                        <p class="delivery_cost"> <span>Delivery Cost:</span>  <span>BDT 80 /-</span> <span>(via Pathao Currier)</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                    <div class="check_out_product_remove">
                                        <a href="" class="cart_remove_icon">Remove item <i class="far fa-trash-alt"></i></a>
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_col_step_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/1.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                    <div class="check_out_product_content">
                                        <h4><a href="">SAMSUNG S202X | THINEST ULTRABOOK</a></h4>
                                        <h3>BDT 8000 /-</h3>
                                        <p class="cart_del_price"><del>BDT 1600</del> <span>15% OFF</span></p>
                                        <p class="delivery_cost"> <span>Delivery Cost:</span>  <span>BDT 80 /-</span> <span>(via Pathao Currier)</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                    <div class="check_out_product_remove">
                                        <a href="" class="cart_remove_icon">Remove item <i class="far fa-trash-alt"></i></a>
                                        <p>Qty : <span>1</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            
        </div>
    </div>
</section>

@endsection