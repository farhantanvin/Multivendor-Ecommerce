@extends('frontend.layout.layout')
@section('title','Eheckout page 4')
@section('content')

<!-- shop search  page -->
<section class="shop_search_page all_p_t_b">
        <div class="container">
          <div class="row">
            <!-- left part -->
            <div class="col-md-4 col-lg-4">

              <div class="shop_search_page_category shop_search_left_col">
                <div class="card shop_search_page_category_card">
                  <div class="card-header">
                    <h3><a href="">All Categories</a></h3>
                  </div>
                  <div class="card-body" id="accordion">
                    <div class="accordian_col">
                      <h3><a  data-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapseExample">SmartPhone & Gadgets(11)</a></h3>
                      <div class="collapse" id="collapse_1" aria-labelledby="headingThree" data-parent="#accordion">
                        <ul class="list-unstyled accordian_ul">
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordian_col">
                      <h3><a  data-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false" aria-controls="collapseExample">Computers (56)</a></h3>
                    
                      <div class="collapse" id="collapse_2" aria-labelledby="headingThree" data-parent="#accordion">
                        <ul class="list-unstyled accordian_ul">
                          <li><a href="">iphone (10)</a></li>
                          <li><a href="">Android phone (10)</a></li>
                        </ul>
                      </div>
                    </div>
                      
                  </div>
                </div>
              </div>

              <div class="products_filter_part">
                  <div class="card">
                    <div class="card-header">
                      <h3><a href="">Filters</a></h3>
                    </div>
                    <form action="">
                      <div class="card-body">
                        <div class="brand_filter">
                            <h3 class="filter_left_col_h2">Brands</h3>
                            <div class="brand_filter_input">
                              
                              <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Apple(11)</label>
                              </div>
                              <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck_2" name="example1">
                                <label class="custom-control-label" for="customCheck_2">samsung(5)</label>
                              </div>
                              <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck_3" name="example1">
                                <label class="custom-control-label" for="customCheck_3">Asus(5)</label>
                              </div>
                              
                            </div>
                            
                        </div>
                        <!-- <div class="price_range">
                          

                          <h2 class="filter_left_col_h2">Range Slider</h2>
                             
                          <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[0,450]"/>
                        
                        </div> -->
                      
                        <!-- <div class="filter_button">
                          <button type="submit" class="btn">Filter</button>
                        </div> -->

                        <h2 class="filter_left_col_h2">Range Slider</h2>

                        <div class="filter_range_input d-flex">
                          <input type="number" placeholder="Min" class="filter_input">
                          <input type="number" placeholder="Max" class="filter_input">
                          
                          <button type="submit"  class="btn">Filter</button>
                          
                        </div>


                        <div class="filter_rating">
                          <h2 class="filter_left_col_h2">Rating</h2>
                          <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                            <div class="text-warning mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                          </a>
                          <p>Minimum rating:4.0</p>
                        </div>
                        <div class="filter_warranty">
                          <h2 class="filter_left_col_h2">Warranty</h2>
                          <div class="filter_warranty_btn d-flex flex-wrap">
                              <a href="" class="btn focus_none">6 Months</a>
                              <a href="" class="btn focus_none">6 Months</a>
                              <a href="" class="btn focus_none">6 Months</a>
                              <a href="" class="btn focus_none">6 Months</a>
                              <a href="" class="btn focus_none">6 Months</a>
                              <a href="" class="btn focus_none">6 Months</a>
                          </div>
                        </div>
                      </div>
                    </form>
                    
                  </div>
              </div>
              
              

            </div>
            <!-- right part -->
            <div class="col-md-8 col-lg-8">
              <div class="row">
                <div class="col-lg-12">
                  <div class="title_part d-flex justify-content-between">
                    <h3><span>Selecetd</span>  for you</h3>
                    <a href="" class="view_all_1"> <span></span> View All <i class="fas fa-angle-right"></i></a>
                  </div>
                  <div class="heding_border">
                    <p class="d-flex">
                      <span class="h_s_1"></span>
                      <span class="h_s_2"></span>
                    </p>
                  </div>
                  
                </div>
                <div class="col-lg-12">
                  <div class="owl-slider_6 owl-slider_common column_item_4">
                    <div id="carousel_6" class="owl-carousel">
                      <div class="item">
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
                              <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                <div class="text-warning mr-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="far fa-star text-muted"></small>
                                </div>
                              </div>
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

                      <div class="item">
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
                      <div class="item">
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
                      <div class="item">
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
                      <div class="item">
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


              <div class="row">
                <div class="col-lg-12">
                  <div class="title_part d-flex justify-content-between">
                    <h3><span>Search Result for : </span>  "Item Name"</h3>
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



                <!-- pagination -->
                <div class="col-12 padding_none_border">
                  <div class="pagination_col d-flex flex-row-reverse">
                    <nav aria-label="Page navigation example ">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </section>

@endsection