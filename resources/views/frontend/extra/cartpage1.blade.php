@extends('frontend.layout.layout')
@section('title','Cart page 1')
@section('content')

<section class="checkout_page">
    <div class="container shoping_cart_page_label">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Shopping Cart (3)</h3>
                        <div class="checkbox_row mt-2">
                            <label class="checkbox_container">Select All
                                <input type="checkbox" value="" class="check_v" id="checkAll_v">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        
                        

                    </div>
                </div>

                <div class="checkout_col_step_2_1 col_shadow">
                    <div class="cartpage_vendor_name d-flex">
                        <div class="checkbox_row">
                            <label class="checkbox_container">Vendor Name
                                <input type="checkbox" class="check_v" value="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="contact_vandor">
                            <a href=""><i class="far fa-envelope"></i> Contact</a>   
                        </div>
                    </div>

                    <div class="checkout_col_step_2">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="image_with_checkbox d-flex">
                                    <div class="checkbox_row">
                                        <label class="checkbox_container">
                                            <input type="checkbox" value="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/Laptop2.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
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
                                    <div class="quantity_part_form d-flex justify-content-end">
                                        <p>Qty </p>
                                        <div class="quantity_box">
                                            <input type="number" class="form-control" value="1" min="1" max="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="checkout_col_step_2">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="image_with_checkbox d-flex">
                                    <div class="checkbox_row">
                                        <label class="checkbox_container">
                                            <input type="checkbox"  value="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/GameStation.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
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
                                    <div class="quantity_part_form d-flex justify-content-end">
                                        <p>Qty </p>
                                        <div class="quantity_box">
                                            <input type="number" class="form-control" value="1" min="1" max="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>




                <div class="checkout_col_step_2_1 col_shadow">
                    <div class="cartpage_vendor_name d-flex">
                        <div class="checkbox_row">
                            <label class="checkbox_container">Vendor Name
                                <input type="checkbox" value="" class="check_v">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="contact_vandor">
                            <a href=""><i class="far fa-envelope"></i> Contact</a>   
                        </div>
                    </div>

                    <div class="checkout_col_step_2">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="image_with_checkbox d-flex">
                                    <div class="checkbox_row">
                                        <label class="checkbox_container">
                                            <input type="checkbox" value="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="check_out_product_image">
                                        <a href="">
                                            <img src="{{asset('/public/frontend/assets/images/products/1.jpg')}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
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
                                    <div class="quantity_part_form d-flex justify-content-end">
                                        <p>Qty </p>
                                        <div class="quantity_box">
                                            <input type="number" class="form-control" value="1" min="1" max="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
   
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="cart_col col_shadow ">
                    <div class="order_title">
                        <p>Order Summary</p>
                    </div>
                    <div class="order_cart_part">
                        <div class="order_price_list">
                            <p><span>Subtotal</span> <span>BDT <span>3455</span>  /-</span></p>
                            
                            <div class="p_boder_bottom mt-4 mb-3"></div>
                            <p class="order_total_price mb-4"><span>Total</span> <span class="total_amount">BDT 3455  /-</span> </p>
                        </div>
                        
                        
                    </div>
                    
                    <div class="cart_part_button">
                        <button class="btn btn_5">Proceed to Checkout</button>
                        <button class="btn btn_6">Continue Shopping</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="product_list_cartpage mt-5">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title_part d-flex justify-content-between">
                                <h3><span>You Also May Like : </span>  </h3>
                                <a href="" class="view_all_1"> <span></span> View All <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="heding_border">
                                <p class="d-flex">
                                <span class="h_s_1"></span>
                                <span class="h_s_2"></span>
                                </p>
                            </div>
                        
                        </div>
                    </div>

                    <div class="row padding_none">
                        <div class="col-lg-3 col-md-3 col-6 col-sm-6 padding_none_col">
                            <div class=" column_item_4">
                                <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                    <p><a href="">Accessories</a></p>
                                    </div>
                                    <div class="image_part">
                                    <a href="">
                                        <img src="{{asset('/public/frontend/assets/images/products/headphone-case.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    </div>
                                    <h3> <a href="">Headphone </a> </h3>
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    </a>
                                    <div class="content_percentage">
                                    <h3><span class="s_1">$ 20</span> </h3>
                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                    <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                    <a href=""><i class="far fa-heart wish_i "></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 col-sm-6 padding_none_col">
                            <div class=" column_item_4">
                                <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                    <p><a href="">Accessories</a></p>
                                    </div>
                                    <div class="image_part">
                                    <a href="">
                                        <img src="{{asset('/public/frontend/assets/images/products/headphone-case.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    </div>
                                    <h3> <a href="">Headphone </a> </h3>
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                </a>
                                    <div class="content_percentage">
                                    <h3><span class="s_1">$ 20</span> </h3>
                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                    <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                    <a href=""><i class="far fa-heart wish_i "></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 col-sm-6 padding_none_col">
                            <div class=" column_item_4">
                                <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                    <p><a href="">Accessories</a></p>
                                    </div>
                                    <div class="image_part">
                                    <a href="">
                                        <img src="{{asset('/public/frontend/assets/images/products/headphone-case.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    </div>
                                    <h3> <a href="">Headphone </a> </h3>
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                </a>
                                    <div class="content_percentage">
                                    <h3><span class="s_1">$ 20</span> </h3>
                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                    <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                    <a href=""><i class="far fa-heart wish_i "></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 col-sm-6 padding_none_col">
                            <div class=" column_item_4">
                                <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                    <p><a href="">Accessories</a></p>
                                    </div>
                                    <div class="image_part">
                                    <a href="">
                                        <img src="{{asset('/public/frontend/assets/images/products/headphone-case.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    </div>
                                    <h3> <a href="">Headphone </a> </h3>
                                    <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                </a>
                                    <div class="content_percentage">
                                    <h3><span class="s_1">$ 20</span> </h3>
                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                    <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                    <a href=""><i class="far fa-heart wish_i "></i></a>
                                    </div>
                                </div>
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