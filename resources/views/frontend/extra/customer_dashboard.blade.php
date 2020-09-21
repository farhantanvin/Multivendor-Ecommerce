@extends('frontend.layout.layout')
@section('title','Customer Dashboard')
@section('content')

 <!-- Customer Dashboard Page  -->
 <section class="customer_dashboard_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="customer_d_heading">
                        <h3>Customer Dashboard</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="customer_d_tab_left">
                        <ul class="nav nav-tabs flex-column " role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" href="#d_customer_info" role="tab" data-toggle="tab">Customer Information</a> 
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#d_change_password" role="tab" data-toggle="tab">Change Password</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#d_change_address" role="tab" data-toggle="tab"> Change Address</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#d_order_list" role="tab" data-toggle="tab"> Order List</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#d_order_details" role="tab" data-toggle="tab"> Order Details</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#d_wish_list" role="tab" data-toggle="tab"> Wish List</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="customer_d_tab_right">
                        <div class="tab-content">
                            <!-- Customer  Info -->
                            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                                <div class="tab_single_col_d">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d_customer_row_title">
                                                <p>Basic Info</p>
                                            </div>
                                            <div class="d_customer_row_info">
                                                <p class="span_p"><span class="d_span_1">Name</span><span class="d_span_2">:</span> <span class="d_span_3">Abdul Karim</span></p>
                                                <p class="span_p"><span class="d_span_1">Email</span><span class="d_span_2">:</span> <span class="d_span_3">AbdulKarim@gmail.com</span></p>
                                                <p class="span_p"><span class="d_span_1">Phone Number</span><span class="d_span_2">:</span> <span class="d_span_3">+8801673126478</span></p>
                                            </div>
                                            <div class="d_customer_row_title mt-4">
                                                <p>Security & Address</p>
                                            </div>
                                            <div class="d_customer_row_address">
                                                <p class="span_p"><span class="d_span_1">Password</span><span class="d_span_2">:</span> <span class="d_span_3">********</span></p>
                                                <p class="shipping_address">Shipping Address : </p>
                                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                                <div class="multiple_address">
                                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                                </div>
                                                <p class="shipping_address">Billing Address : </p>
                                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                                <div class="multiple_address">
                                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- Change Password -->
                            <div role="tabpanel" class="tab-pane  fade" id="d_change_password">
                              <div class="tab_single_col_d">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="title_with_border">
                                            <p>Change Password</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                        <form action="" class="input_focus">
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="" placeholder="New Password">             
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="" placeholder="Re-Enter New Password">             
                                            </div>
                                            
                                            <button class="btn d-block btn_bg w-100 fw_6 br_30">Change Password</button>
                                        </form>
                                    </div>
                                </div>
                                    
                              </div>
                            </div>

                            <!-- Change Address -->
                            <div role="tabpanel" class="tab-pane  fade" id="d_change_address">
                              <div class="tab_single_col_d mb-3">
                                  <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title_with_border">
                                                <p>Existing Billing Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d_cart_row_address">
                                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                                <div class="multiple_address">
                                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="title_with_border">
                                                <p>Enter New Billing Address Details</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input_focus">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Full Name / Name on NID">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="demo@gmail.com">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="City/State">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Postal Code">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Country">             
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                    <button class="btn d-block btn_bg w-100 fw_6 br_30">Save Change</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                  </div>

                              </div>
                              <div class="tab_single_col_d">
                                  <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title_with_border">
                                                <p>Existing Shipping Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d_cart_row_address">
                                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                                <div class="multiple_address">
                                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="title_with_border">
                                                <p>Enter New Billing Address Details</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-check form-check_checkout form-group">
                                                <input type="checkbox" class="form-check-input" id="">
                                                <label class="form-check-label" for="">Use Same as Billing Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d_cart_row_address">
                                                <p> <span class="a_span_1"> Address  </span> <span class="a_span_2">:</span> <span class="a_span_3">House Number 00, Road 12/5 ,Sector A</span></p>
                                                <div class="multiple_address">
                                                    <p> <span class="a_span_1"> City  </span> <span class="a_span_2">:</span> <span class="a_span_3">Dhaka</span></p>
                                                    <p> <span class="a_span_1"> Country  </span> <span class="a_span_2">:</span> <span class="a_span_3">Bangladesh</span></p>
                                                    <p> <span class="a_span_1"> Post Code  </span> <span class="a_span_2">:</span> <span class="a_span_3">2200</span></p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="title_with_border">
                                                <p>Enter New Billing Address Details</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input_focus">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Full Name / Name on NID">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="demo@gmail.com">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="City/State">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Postal Code">             
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="" placeholder="Country">             
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5">
                                                    <button class="btn d-block btn_bg w-100 fw_6 br_30">Save Change</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                  </div>

                              </div>
                            </div>
                            <!-- order list -->
                            <div role="tabpanel" class="tab-pane  fade" id="d_order_list">
                                <div class="tab_single_col_d">
                                    
                                </div>
                            </div>
                            <!-- order Details -->
                            <div role="tabpanel" class="tab-pane  fade" id="d_order_details">
                                <div class="tab_single_col_d">
                                    
                                </div>
                            </div>
                            <!-- Wish list -->
                            <div role="tabpanel" class="tab-pane  fade" id="d_wish_list">
                                <div class="tab_single_col_d">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="title_with_border">
                                                <p>WishList</p>
                                            </div>
                                        </div>
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
                    
                </div>
            </div>
        </div>
    </section>






@endsection