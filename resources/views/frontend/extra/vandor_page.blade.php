@extends('frontend.layout.layout')
@section('title','Vendor or Shop Page')
@section('content')

<section class="vandor_shop_page">
    <div class="container">
        <div class="vandor_shop_page_header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="vendor_logo_part">
                        <a href=""><img src="{{asset('/public/frontend/assets/images/logo2.png')}}" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="vendor_header_content">
                        <p><a href="">GadgetShop BD</a></p>
                        <p class="vendor_header_btn"><span>Open 3 Year('s)</span> </p>
                        <p>95% Positive Review</p>
                        <p class="vendor_header_btn"> <span>Follow</span> <b>5k Followers</b> </p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="vendor_search_page">
                    <form action="" class="d-flex search_form_1">
                            <div class="input-group">
                                <input type="text" placeholder="Search in this shop" class="form-control s_i_1" aria-label="Text input with dropdown button">
                                
                            </div>
                            <button class="search_btn">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="vendor_page_menu_part">
                <div class="row">
                    <div class="col-lg-9 col-md-9 m-auto">
                        <div class="vendor_page_menu">
                            <ul class="nav navbar-nav-vendor d-flex  w-100">

                                <li class="nav-item ">
                                    <a class="nav-link active" href="#">Flash deals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gift Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Language</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">More</a>
                                </li>
        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>
<!-- New Products -->
<section class="top_product_in_last_weak all_p_t_b">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title_part d-flex justify-content-between">
              <h3><span>New</span> Products</h3>
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
            <div class="owl-slider_7 owl-slider_common owl-6-col-slider">
              <div id="carousel_vendor_1" class="owl-carousel">
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
      </div>
</section>

<!-- More Related Products -->
<section class="top_product_in_last_weak all_p_t_b">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title_part d-flex justify-content-between">
              <h3><span>More Related</span> Products</h3>
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
            <div class="owl-slider_7 owl-slider_common owl-6-col-slider">
              <div id="carousel_vendor_2" class="owl-carousel">
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
      </div>
</section>

<!-- More Related Products -->
<section class="top_product_in_last_weak all_p_t_b">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title_part d-flex justify-content-between">
              <h3><span>More Related</span> Products</h3>
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
            <div class="owl-slider_7 owl-slider_common owl-6-col-slider">
              <div id="carousel_vendor_3" class="owl-carousel">
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
      </div>
</section>






@endsection