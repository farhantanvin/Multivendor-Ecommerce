@extends('frontend.layout.layout')
@section('title','Cart page 1')
@section('content')

    <!-- single_product  -->
    <section class="single_product_image_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
             
              <div class="outer outer_single">
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails easyzoom_1">
                  <a href="">
                    <img class="img-fluid" src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" width="" height="" />
                  </a>
                </div>
                
                <div class="single_product_slider">
                  <div id="big" class="owl-carousel owl-theme owl-carousel-big">
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone2.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone5.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone7.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone8.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    
                  </div>
                  <div id="thumbs" class="owl-carousel owl-theme owl-carousel-thumbs">
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone2.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone5.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone7.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    <div class="item">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone8.jpg')}}" alt="" class="img-fluid">
  
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_product_details">

              <div class="single_product_title">
                <a href="" class="categories color_AC">Smart Phone</a>
                <h3 class="color_black"><a href="" class="product_name color_black">vivo V19 8GB/128GB</a></h3>
              </div>
              <div class="single_review_section d-flex">
                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                  <div class="text-warning mr-2">
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="far fa-star text-muted"></small>
                  </div>
                </a>
                <a href="" class="review_counts color_AC">
                  12 Reviews
                </a>
                <a href="" class="color_AC by_auth"><span>|</span> By Gadgets Seekers BB</a>
                
              </div>
              <div class="s_product_stock">
                <p class="color_AC">Availability: <span>In Stock</span> <span>(24 pieces)</span></p>
              </div>
              <div class="border_bottom"></div>
              <div class="s_product_details">
                <ul class="list-unstyled pl-5">
                  <li><a href="" >* Snap Dragon 865 Chipest</a></li>
                  <li><a href="">* Snap Dragon 865 Chipest</a></li>
                  <li><a href="">* Snap Dragon 865 Chipest</a></li>
                </ul>
              </div>

              <div class="thumbnails_img">
                <h3 class="color_subhead s_p_h">Choose Color</h3>
                <ul class="thumbnails">
                  <li>
                    <a href="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" data-standard="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}">
                      <img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"/>
                    </a>
                  </li>
                  <li>
                    <a href="{{asset('/public/frontend/assets/images/products/Smartphone8.jpg')}}" data-standard="{{asset('/public/frontend/assets/images/products/Smartphone8.jpg')}}">
                      <img src="{{asset('/public/frontend/assets/images/products/Smartphone8.jpg')}}" alt="" class="img-fluid" />
                    </a>
                  </li>
                  
                </ul>
              </div>
              <div class="s_choose_spec">
                <h3 class="color_subhead s_p_h">Choose Spec.</h3>
                <div class="s_choose_spec_c d-flex flex-wrap">
                  <span class="btn focus_none">4GB|64GB</span>
                  <span class="btn focus_none">6GB|128GB</span>
                  <span class="btn focus_none">4GB|64GB</span>
                  

                </div>
              </div>
              <div class="s_total_cost">
                <h3 class="color_subhead s_p_h">Total Cost:</h3>
                <h2> 58594<span>/-</span></h2>
              </div>
              <div class="s_buy_cart">
                  <button type="submit" class="btn bg_yellow s_buy focus_none">Buy now</button>
                  <button type="submit" class="btn bg_ef s_cart focus_none">Add to Cart</button>
                  <a href=""><i class="far fa-heart  "></i></a>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-md-2">
            <div class="s_more_shop">
              <div class="s_more_shop_heading">
                <a href="">More From this shop:</a>
              </div>
              <div class="card s_card">
                <div class="card-body">
                  <a href="">Smarter Watch</a>
                  <div class="c_image_part">
                    <img src="{{asset('/public/frontend/assets/images/products/Tablet2.jpg')}}" class="img-fluid" alt="">
                  </div>
                  <div class="c_price_wish d-flex">
                    <p><span>$</span> 60</p>
                    <a href=""><i class="material-icons cart_i ">add_shopping_cart</i></a>
                  </div>
                </div>
              </div>
              <div class="card s_card">
                <div class="card-body">
                  <a href="">Smarter Watch</a>
                  <div class="c_image_part">
                    <img src="{{asset('/public/frontend/assets/images/products/Smartphone7.jpg')}}" class="img-fluid" alt="">
                  </div>
                  <div class="c_price_wish d-flex">
                    <p><span>$</span> 60</p>
                    <a href=""><i class="material-icons cart_i ">add_shopping_cart</i></a>
                  </div>
                </div>
              </div>
              <div class="card s_card">
                <div class="card-body">
                  <a href="">Smarter Watch</a>
                  <div class="c_image_part">
                    <img src="{{asset('/public/frontend/assets/images/products/Smartphone5.jpg')}}" class="img-fluid" alt="">
                  </div>
                  <div class="c_price_wish d-flex">
                    <p><span>$</span> 60</p>
                    <a href=""><i class="material-icons cart_i ">add_shopping_cart</i></a>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </section>
    <!-- details -->
    <section class="single_product_details_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
              <div class="single_product_details_left">
                <h3 class="color_subhead s_p_h">Related Products</h3>

                <div class="card product_card mb-3">
                  <div class="card-body product_card_body">
                    <div class="card_category_part">
                      <p><a href="">Accessories</a></p>
                    </div>
                    <div class="image_part">
                      <a href="">
                        <img src="{{asset('/public/frontend/assets/images/products/Laptop2.jpg')}}" alt="" class="img-fluid">
                      </a>
                    </div>
                    <h3> <a href="">Universal Headphone Case</a> </h3>
                    <div class="content_percentage">
                      <h3><span class="s_1">$ 20</span><span class="s_2"><del>$60</del></span><span class="s_3">70%</span> <span class="s_4">OFF</span> </h3>
                    </div>
                    <div class="cart_wish d-flex justify-content-between">
                      <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                      <a href=""><i class="far fa-heart wish_i "></i></a>
                    </div>
                  </div>
                </div>
                <div class="card product_card mb-3">
                  <div class="card-body product_card_body">
                    <div class="card_category_part">
                      <p><a href="">Accessories</a></p>
                    </div>
                    <div class="image_part">
                      <a href="">
                        <img src="{{asset('/public/frontend/assets/images/products/Laptop2.jpg')}}" alt="" class="img-fluid">
                      </a>
                    </div>
                    <h3> <a href="">Universal Headphone Case</a> </h3>
                    <div class="content_percentage">
                      <h3><span class="s_1">$ 20</span><span class="s_2"><del>$60</del></span><span class="s_3">70%</span> <span class="s_4">OFF</span> </h3>
                    </div>
                    <div class="cart_wish d-flex justify-content-between">
                      <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                      <a href=""><i class="far fa-heart wish_i "></i></a>
                    </div>
                  </div>
                </div>
                <div class="card product_card mb-3">
                  <div class="card-body product_card_body">
                    <div class="card_category_part">
                      <p><a href="">Accessories</a></p>
                    </div>
                    <div class="image_part">
                      <a href="">
                        <img src="{{asset('/public/frontend/assets/images/products/Laptop2.jpg')}}" alt="" class="img-fluid">
                      </a>
                    </div>
                    <h3> <a href="">Universal Headphone Case</a> </h3>
                    <div class="content_percentage">
                      <h3><span class="s_1">$ 20</span><span class="s_2"><del>$60</del></span><span class="s_3">70%</span> <span class="s_4">OFF</span> </h3>
                    </div>
                    <div class="cart_wish d-flex justify-content-between">
                      <a href=""><span>Add to Cart </span> <i class="material-icons cart_i ">add_shopping_cart</i></a>
                      <a href=""><i class="far fa-heart wish_i "></i></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="single_product_tab_details_content">
              <ul class="nav nav-tabs d-flex " role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#description" role="tab" data-toggle="tab">Description</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#specification" role="tab" data-toggle="tab">specification</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#qa" role="tab" data-toggle="tab">Q&A</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#returnpolicy" role="tab" data-toggle="tab">Return policy & More</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane  active" id="description">
                    <div class="row">
                      <div class="col-12">
                        <p class="details_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="details_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="details_image_section">
                          <img src="{{asset('/public/frontend/assets/images/products/headphone-usb-wires.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details_image_section">
                          <img src="{{asset('/public/frontend/assets/images/products/GameStation.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <p class="details_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                      </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane  fade" id="specification">
                  Specification
                </div>
                <div role="tabpanel" class="tab-pane  fade" id="reviews">
                  <div class="single_product_customer_review_part">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="customer_review_title">
                          <h3>Customer Review  <span class="r_count">(29)</span> <span class="r_rating">4.6/5</span></h3>
                        </div>
                        <div class="review_progress_bar">
                          <div class="progress_bar_part_s row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-3">
                                  <p class="s_progress_star">5 Starts</p>
                                </div>
                                <div class="col-7 p-0">
                                  <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="s_progress_percent">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="progress_bar_part_s row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-3">
                                  <p class="s_progress_star">4 Starts</p>
                                </div>
                                <div class="col-7 p-0">
                                  <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="s_progress_percent">75%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="progress_bar_part_s row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-3">
                                  <p class="s_progress_star">3 Starts</p>
                                </div>
                                <div class="col-7 p-0">
                                  <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="s_progress_percent">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="progress_bar_part_s row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-3">
                                  <p class="s_progress_star">2 Starts</p>
                                </div>
                                <div class="col-7 p-0">
                                  <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="s_progress_percent">75%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="progress_bar_part_s row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="row">
                                <div class="col-3">
                                  <p class="s_progress_star">1 Start</p>
                                </div>
                                <div class="col-7 p-0">
                                  <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="col-2">
                                  <p class="s_progress_percent">75%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="review_comment_sec">
                          <h3 class="review_user_name"><a href="" >Mr.Akram Hossain</a></h3>
                          <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                            <div class="text-warning mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                          </a>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <div class="review_comment_image_sec">
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled d-flex">
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                </ul>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <div class="single_p_helpful_part d-flex  justify-content-end">
                                  <p>Helpful?</p>
                                  <a href="">yes <span>8</span></a>
                                  <a href="">No <span>0</span></a>
                                
                                </div>
                                
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="review_comment_sec">
                          <h3 class="review_user_name"><a href="" >Mr.Akram Hossain</a></h3>
                          <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                            <div class="text-warning mr-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                          </a>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <div class="review_comment_image_sec">
                            <div class="row">
                              <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled d-flex">
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                  <li><a href=""><img src="{{asset('/public/frontend/assets/images/products/GoldPhone.jpg')}}" alt="" class="img-fluid"></a></li>
                                </ul>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                <div class="single_p_helpful_part d-flex  justify-content-end">
                                  <p>Helpful?</p>
                                  <a href="">yes <span>8</span></a>
                                  <a href="">No <span>0</span></a>
                                
                                </div>
                                
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="pagination_col d-flex flex-row-reverse">
                          <nav aria-label="Page navigation example ">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">«</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">»</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="review_form_section">
                          <form action="">
                            <h4>Give your Feedback :</h4>
                            <p>How much do you like it :</p>
                            <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                              <div class="text-warning mr-2">
                                  <small class="fas fa-star"></small>
                                  <small class="fas fa-star"></small>
                                  <small class="fas fa-star"></small>
                                  <small class="fas fa-star"></small>
                                  <small class="far fa-star text-muted"></small>
                              </div>
                            </a>
                            
                            <div class="form-group">
                              <label for="comment">Explain in details :</label>
                              <textarea class="form-control" rows="4" id="comment"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="comment">Add Image:</label>
                              <br>
                              <input type="file" class="">
                            </div>
                            <button type="submit" class="btn bg_yellow s_buy focus_none">Submit</button>
                          </form>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane  fade" id="qa">
                  <div class="qa_section_part">
                    <div class="qa_section_part_row">
                      <div class="row mb-2">
                        <div class="col-1">
                          <h3 class="review_q">Q:</h3>
                        </div>
                        <div class="col-11 pl-0">
                            <h3 class="review_user">Md.Abul Kalam</h3>
                            <p class="review_qu"> Lorem Ipsum is simply dummy text of the . </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-1">
                          <h3 class="review_q">A:</h3>
                        </div>
                        <div class="col-11 pl-0">
                            <h3 class="review_user">Md.Abul Kalam</h3>
                            <p class="review_qu"> Lorem Ipsum is simply dummy text of the . </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="single_p_helpful_part_q d-flex  justify-content-end">
                            <p>Helpful?</p>
                            <a href="">yes <span>8</span></a>
                            <a href="">No <span>0</span></a>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="qa_section_part_row">
                      <div class="row mb-2">
                        <div class="col-1">
                          <h3 class="review_q">Q:</h3>
                        </div>
                        <div class="col-11 pl-0">
                            <h3 class="review_user">Md.Abul Kalam</h3>
                            <p class="review_qu"> Lorem Ipsum is simply dummy text of the . </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-1">
                          <h3 class="review_q">A:</h3>
                        </div>
                        <div class="col-11 pl-0">
                            <h3 class="review_user">Md.Abul Kalam</h3>
                            <p class="review_qu"> Lorem Ipsum is simply dummy text of the . </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="single_p_helpful_part_q d-flex  justify-content-end">
                            <p>Helpful?</p>
                            <a href="">yes <span>8</span></a>
                            <a href="">No <span>0</span></a>
                          
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="pagination_col d-flex flex-row-reverse">
                          <nav aria-label="Page navigation example ">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">«</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">»</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>
                    <div class="qa_feadback_form">
                      <div class="row">
                        <div class="col-12">
                          <h3>Give your Feadback:</h3>
                          <div class="form-group">
                            <label for="usr">Your Name:</label>
                            <input type="text" class="form-control col-lg-6 col-md-6" id="">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Your Email</label>
                            <input type="email" class="form-control col-lg-6 col-md-6" id="">
                          </div>
                          <div class="form-group">
                            <label for="comment">Ask your Question :</label>
                            <textarea class="form-control" rows="4" id="comment"></textarea>
                          </div>
                          <button type="submit" class="btn bg_yellow s_buy focus_none">Submit</button>

                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane  fade" id="returnpolicy">
                  Return Policy
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>

    <!-- TMore Related Products -->
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
              <div id="carousel_7" class="owl-carousel">
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

@section('javascript')
<script>


    $('.thumbnails li').click(function(){
        
        // $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
        // $('#description').html($(this).attr('alt'));
        $('.thumbnails li').removeClass('img_active_single_li')
        $(this).addClass('img_active_single_li')
        $('.outer_single').addClass('zoom_img_1');
    });
  // Instantiate EasyZoom instances
  var $easyzoom = $('.easyzoom').easyZoom();

  // Setup thumbnails example
  var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

  $('.thumbnails').on('click', 'a', function(e) {
    var $this = $(this);

    e.preventDefault();

    // Use EasyZoom's `swap` method
    api1.swap($this.data('standard'), $this.attr('href'));
  });

  // Setup toggles example
  var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

  $('.toggle').on('click', function() {
    var $this = $(this);

    if ($this.data("active") === true) {
      $this.text("Switch on").data("active", false);
      api2.teardown();
    } else {
      $this.text("Switch off").data("active", true);
      api2._init();
    }
  });
</script>

@endsection