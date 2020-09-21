@extends('frontend.layout.layout')
@section('title','Eheckout page 2')
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
                        <div class="apply_cupon">
                            <p>Apply Cupon <i class="fas fa-plus"></i></p>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" id="usr">
                                <button class="btn">Apply</button>
                            </div>
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
                        <button class="btn btn_5">Continue</button>
                        <button class="btn btn_6">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection