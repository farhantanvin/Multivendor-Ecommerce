@extends('frontend.layout.layout')
@section('title','Ecommerce')
@section('content')

<section class="slider_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-">
                <div class="owl-slider_1">
                    <div id="carousel_1" class="owl-carousel">
                        @forelse ($homePageBanner as $item)
                        <div class="item">
                            <img class="" data-src="" alt="" src="{{asset($item->image)}}">

                            @if(!(empty($item->text_first) && empty($item->text_second)&& empty($item->text_third) &&
                            empty($item->text_forth) && empty($item->text_fifth) && empty($item->button_text)))
                            <div class="banner_content_part">
                                <div class="banner_content">
                                    @if(!empty($item->text_first))
                                    <h2>{{$item->text_first}}</h2>
                                    @endif
                                    @if(!empty($item->text_second))
                                    <h3>{{$item->text_second}}</h3>
                                    @endif
                                    @if(!empty($item->text_third))
                                    <p>{{$item->text_third}}</p>
                                    @endif
                                    @if(!empty($item->text_forth))
                                    <h1>{{$item->text_forth}}</h1>
                                    @endif
                                    @if(!empty($item->text_fifth))
                                    <h4>{{$item->text_fifth}}</h4>
                                    @endif
                                    <a href="{{$item->url}}" class="banner_btn">{{$item->button_text}}</a>
                                </div>
                            </div>

                            @endif
                        </div>
                        @empty
                        <div class="item">

                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="slider_right_sidebar">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            @if(!empty($promotionFirst))
                            <div class="card slider_right_sidebar_card">

                                <div class="card-body d-flex slider_sidebar_card ">
                                    <div class="left_p d-flex align-items-center">
                                        <img class="img-fluid" src="{{asset($promotionFirst->image)}}" alt="">
                                    </div>
                                    <div class="right_p">
                                        <h3>
                                            {{$promotionFirst->text}} <span>{{$promotionFirst->highlighted_text}}</span>
                                        </h3>
                                        <a href="{{$promotionFirst->url}}"><span>{{$promotionFirst->button_text}}</span>
                                            <i class="fas fa-angle-right shop_now_i"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 col-lg-12">
                            @if(!empty($promotionSecond))
                            <div class="card slider_right_sidebar_card">

                                <div class="card-body d-flex slider_sidebar_card ">
                                    <div class="left_p d-flex align-items-center">
                                        <img class="img-fluid" src="{{asset($promotionSecond->image)}}" alt="">
                                    </div>
                                    <div class="right_p">
                                        <h3>
                                            {{$promotionSecond->text}}
                                            <span>{{$promotionSecond->highlighted_text}}</span>
                                        </h3>

                                        <a href="{{$promotionSecond->url}}"><span>{{$promotionFirst->button_text}}</span>
                                            <i class="fas fa-angle-right shop_now_i"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6 col-lg-12">
                            @if(!empty($promotionThird))
                            <div class="card slider_right_sidebar_card">

                                <div class="card-body d-flex slider_sidebar_card ">
                                    <div class="left_p d-flex align-items-center">
                                        <img class="img-fluid" src="{{asset($promotionThird->image)}}" alt="">
                                    </div>
                                    <div class="right_p">
                                        <h3>
                                            {{$promotionThird->text}}
                                            <span>{{$promotionThird->highlighted_text}}</span>
                                        </h3>
                                        <a href="{{$promotionThird->url}}"><span>{{$promotionThird->button_text}}</span>
                                            <i class="fas fa-angle-right shop_now_i"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- section with Timer  -->
@if(!empty($offer))
@if($offer->end_date > date("m/d/Y")) <section class="all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="limited_offer">
                    <h3><span>{{$offer->offer_name}}</span></h3>
                    <span class="border_bottom_1"></span>
                    <div class="percentage_1">
                        <p>UPTO</p>
                        <h2>{{$offer->offer_amount}}%</h2>
                        <h4>OFF</h4>
                    </div>
                    <input type="hidden" id="end_date" value="{{$offer->end_date}}">
                    <div class="countdown_1">
                        <p class="mb-1">Offers ends in :</p>
                        <ul class="d-flex list-unstyled countdown_ul justify-content-between">
                            <li><span id="days"></span><br>days</li>
                            <li><span id="hours"></span><br>Hours</li>
                            <li><span id="minutes"></span><br>Minutes</li>
                            <li><span id="seconds"></span><br>Seconds</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9">
                <div class="owl-slider_2 owl-slider_common">
                    <div id="carousel_2" class="owl-carousel">


                        @forelse ($offerSale as $item)

                        <div class="item">
                            <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                        <p>
                                            @if(!empty($item->vendor->name))
                                            <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                            </a>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="image_part">
                                        <a href="{{route('product.detail',$item->product->slug)}}">
                                            <img src="{{asset($item->product->product_image)}}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="product_cart_content">
                                        <h3> <a href="">{{$item->product->product_name}}</a> </h3>
                                        <div class="content_percentage">
                                            <h3>
                                                <span class="s_1">
                                                    ${{round($item->product->sell_price-($item->product->sell_price*($offer->offer_amount/100)))}}
                                                </span>
                                                <span class="s_2">
                                                    <del> ${{$item->product->sell_price}}</del>
                                                </span>

                                            </h3>
                                        </div>
                                        <div class="cart_wish d-flex justify-content-between">
                                            <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                                @if($item->product->variable_product == 1)
                                                <a class="a_cart_btn"
                                                    href="{{route('product.detail',$item->product->slug)}}"><span>Add to
                                                        Cart
                                                    </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                                @else
                                                @csrf
                                                <input type="hidden" class="id" value="{{$item->product->id}}" />
                                                <input type="hidden" class="quantity" value="1" />
                                                <input type="hidden" class="varient_id"
                                                    value="{{$item->product->productVarientSingle->id}}" />
                                                <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                                <button class="cart_submit_btn" type="submit"><span>Add to Cart </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                                @endif

                                                <a href="{{route('wishlist.add',$item->product->id)}}"><i
                                                        class="far fa-heart wish_i "></i></a>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        @empty
                        <p>No Product Available</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endif

<!-- advertise_option -->
<section class="advertise_option all_p_t_b">
    <div class="container">
        <div class="row">
            @if(!empty($advertisementFirst))
            <div class="col-lg-12">
                <div class="advertise_content  adv_bg_img"
                    style="background-image: url({{$advertisementFirst->image}})">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="advertise_content_text">
                                <h2>{{$advertisementFirst->highlighted_text}}</h2>
                                <p>{{$advertisementFirst->text}}</p>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex">
                            <div class="advertise_content_button align-items-center d-flex">
                                <a href="{{$advertisementFirst->url}}">{{$advertisementFirst->button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- selected_for_you -->
<section class="selected_for_you all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Selecetd</span> for you</h3>
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
                <div class="owl-slider_3 owl-slider_common">
                    <div id="carousel_3" class="owl-carousel">

                        @forelse ($productSelected as $item)

                        <div class="item">
                            <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                        <p>
                                            @if(!empty($item->vendor->name))
                                            <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                            </a>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="image_part">
                                        <a href="{{route('product.detail',$item->slug)}}">
                                            <img src="{{asset($item->product_image)}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="product_cart_content">
                                        <h3> <a href="">{{$item->product_name}}</a> </h3>
                                        <div class="d-inline-flex align-items-center small font-size-15 text-lh-1"
                                            href="#">
                                            <div class="text-warning mr-2">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="far fa-star text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="content_percentage">
                                            <h3><span class="s_1">
                                                    ${{$item->sell_price}}
                                                </span>
                                                @if(!empty($item->regular_price))
                                                <span class="s_2">
                                                    <del>${{$item->regular_price}}</del>
                                                </span>
                                                <span
                                                    class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                                <span class="s_4">OFF</span>
                                                @endif
                                            </h3>
                                        </div>
                                        <div class="cart_wish d-flex justify-content-between">
                                            <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                                @if($item->variable_product == 1)
                                                <a class="a_cart_btn"
                                                    href="{{route('product.detail',$item->slug)}}"><span>Add to Cart
                                                    </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                                @else
                                                @csrf
                                                <input type="hidden" class="id" value="{{$item->id}}" />
                                                <input type="hidden" class="quantity" value="1" />
                                                <input type="hidden" class="varient_id"
                                                    value="{{$item->productVarientSingle->id}}" />
                                                <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                                <button class="cart_submit_btn" type="submit"><span>Add to Cart </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                                @endif

                                                <a href="{{route('wishlist.add',$item->id)}}"><i
                                                        class="far fa-heart wish_i "></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <p>No Product Available</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- select category form backend part -->
<section class="featured_products all_p_t_b">
    <div class="container">
        <div class="row">
            @foreach(App\Model\Category::with('childs')->where('id',
            $selectedCategory->option_value)->get() as $item)
            <div class="col-lg-3 col-md-3">
                <div class="featured_products_heading">
                    <h2>{{$item->category_name}}</h2>
                    <div class="feature_heading_border"></div>
                </div>

                <div class="feature_left_part d-flex">
                    <div class="feature_left_part_list">
                        <ul class="list-unstyled">
                            @if($item->childs->count()>0)
                            @foreach ($item->childs as $subMenu)
                            <li><a href="">{{$subMenu->category_name}}</a></li>
                            @endforeach
                            @else
                            <li><a href="#">{{$item->category_name}}</a></li>
                            @endif
                        </ul>
                    </div>


                    @endforeach
                    <!-- <div class="feature_left_part_list_img">
                        <img src="{{asset('/public/frontend/assets/images/products/home-v4-banner-1.jpg')}}" alt=""
                            class="img-fluid">
                    </div> -->
                </div>

            </div>
            <div class="col-lg-9 col-md-9">
                <div class="featured_products_tab">
                    <ul class="nav nav-tabs d-flex justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#new" role="tab" data-toggle="tab">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#feature" role="t" data-toggle="tab">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sell" role="tab" data-toggle="tab">Sell </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content h_tab_product_card">
                        <div role="tabpanel" class="tab-pane  active" id="new">
                            <div class="row">

                                @forelse ($newProductForSelectedCategory as $item)
                                <div
                                    class="col-lg-3 col-md-6 p-lg-2 p-xl-2 p-md-2 col-sm-6 col-6 padding_left_right_sm">
                                    <div class="card product_card">
                                        <div class="card-body product_card_body">
                                            <div class="card_category_part">
                                                <p>
                                                    @if(!empty($item->vendor->name))
                                                    <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                                    </a>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="image_part">
                                                <a href="{{route('product.detail',$item->slug)}}">
                                                    <img src="{{asset($item->product_image)}}" alt="" class="img-fluid">
                                                </a>
                                            </div>

                                            <div class="product_cart_content">
                                                <h3> <a href="">{{$item->product_name}}</a> </h3>
                                                <div class="d-inline-flex align-items-center small font-size-15 text-lh-1"
                                                    href="#">
                                                    <div class="text-warning mr-2">
                                                        @php $rating =$item->rating ; @endphp
                                                        @foreach(range(1,5) as $i)
                                                        <span class="fa-stack" style="width:1em">
                                                            <i class="far fa-star fa-stack-1x"></i>

                                                            @if($rating >0)
                                                            @if($rating >0.5)
                                                            <i class="fas fa-star fa-stack-1x"></i>
                                                            @else
                                                            <i class="fas fa-star-half fa-stack-1x"></i>
                                                            @endif
                                                            @endif
                                                            @php $rating--; @endphp
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="content_percentage">
                                                    <h3>
                                                        <span class="s_1">$ {{$item->sell_price}}</span>
                                                        @if(!empty($item->regular_price))
                                                        <span class="s_2">
                                                            <del>${{$item->regular_price}}</del>
                                                        </span>
                                                        <span
                                                            class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                                        <span class="s_4">OFF</span>
                                                        @endif
                                                    </h3>
                                                </div>
                                                <div class="cart_wish d-flex justify-content-between">
                                                    <form class="add-to-cart form_cart_btn_submit " action="#"
                                                        method="post">
                                                        @if($item->variable_product == 1)
                                                        <a class="a_cart_btn"
                                                            href="{{route('product.detail',$item->slug)}}"><span>Add to
                                                                Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></a>
                                                        @else
                                                        @csrf
                                                        <input type="hidden" class="id" value="{{$item->id}}" />
                                                        <input type="hidden" class="quantity" value="1" />
                                                        <input type="hidden" class="varient_id"
                                                            value="{{$item->productVarientSingle->id}}" />
                                                        <input type="hidden" class="add_url"
                                                            value="{{route('cart.add')}}" />

                                                        <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></button>
                                                        @endif

                                                        <a href="{{route('wishlist.add',$item->id)}}"><i
                                                                class="far fa-heart wish_i "></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p>No Product Available</p>
                                @endforelse


                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="feature">
                            <div class="row">
                                @forelse ($featureProductForSelectedCategory as $item)
                                <div
                                    class="col-lg-3 col-md-6 p-lg-2 p-xl-2 p-md-2 col-sm-6 col-6 padding_left_right_sm">
                                    <div class="card product_card">
                                        <div class="card-body product_card_body">
                                            <div class="card_category_part">
                                                <p>
                                                    @if(!empty($item->vendor->name))
                                                    <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                                    </a>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="image_part">
                                                <a href="{{route('product.detail',$item->slug)}}">
                                                    <img src="{{asset($item->product_image)}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="product_cart_content">
                                                <h3>
                                                    <a
                                                        href="{{route('product.detail',$item->slug)}}">{{$item->product_name}}</a>
                                                </h3>
                                                <div class="d-inline-flex align-items-center small font-size-15 text-lh-1"
                                                    href="#">
                                                    <div class="text-warning mr-2">
                                                        @php $rating =$item->rating ; @endphp
                                                        @foreach(range(1,5) as $i)
                                                        <span class="fa-stack" style="width:1em">
                                                            <i class="far fa-star fa-stack-1x"></i>

                                                            @if($rating >0)
                                                            @if($rating >0.5)
                                                            <i class="fas fa-star fa-stack-1x"></i>
                                                            @else
                                                            <i class="fas fa-star-half fa-stack-1x"></i>
                                                            @endif
                                                            @endif
                                                            @php $rating--; @endphp
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="content_percentage">
                                                    <h3>
                                                        <span class="s_1">
                                                            $ {{$item->sell_price}}
                                                        </span>
                                                        @if(!empty($item->regular_price))
                                                        <span class="s_2">
                                                            <del>${{$item->regular_price}}</del>
                                                        </span>
                                                        <span
                                                            class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                                        <span class="s_4">OFF</span>
                                                        @endif
                                                    </h3>
                                                </div>
                                                <div class="cart_wish d-flex justify-content-between">
                                                    <form class="add-to-cart form_cart_btn_submit " action="#"
                                                        method="post">
                                                        @if($item->variable_product == 1)
                                                        <a class="a_cart_btn"
                                                            href="{{route('product.detail',$item->slug)}}"><span>Add to
                                                                Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></a>
                                                        @else
                                                        @csrf
                                                        <input type="hidden" class="id" value="{{$item->id}}" />
                                                        <input type="hidden" class="quantity" value="1" />
                                                        <input type="hidden" class="varient_id"
                                                            value="{{$item->productVarientSingle->id}}" />
                                                        <input type="hidden" class="add_url"
                                                            value="{{route('cart.add')}}" />

                                                        <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></button>
                                                        @endif

                                                        <a href="{{route('wishlist.add',$item->id)}}"><i
                                                                class="far fa-heart wish_i "></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p>No Product Available</p>
                                @endforelse
                            </div>
                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="sell">
                            <div class="row">
                                @if(!empty($sellProductForSelectedCategory))
                                @forelse ($sellProductForSelectedCategory as $item)
                                <div
                                    class="col-lg-3 col-md-6 p-lg-2 p-xl-2 p-md-2 col-sm-6 col-6 padding_left_right_sm">
                                    <div class="card product_card ">
                                        <div class="card-body product_card_body">
                                            <div class="card_category_part">
                                                <p>
                                                    @if(!empty($item->vendor->name))
                                                    <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                                    </a>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="image_part">
                                                <a href="{{route('product.detail',$item->slug)}}">
                                                    <img src="{{asset($item->product_image)}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="product_cart_content">
                                                <h3>
                                                    <a
                                                        href="{{route('product.detail',$item->slug)}}">{{$item->product_name}}</a>
                                                </h3>
                                                <div class="d-inline-flex align-items-center small font-size-15 text-lh-1"
                                                    href="#">
                                                    <div class="text-warning mr-2">
                                                        @php $rating =$item->rating ; @endphp
                                                        @foreach(range(1,5) as $i)
                                                        <span class="fa-stack" style="width:1em">
                                                            <i class="far fa-star fa-stack-1x"></i>

                                                            @if($rating >0)
                                                            @if($rating >0.5)
                                                            <i class="fas fa-star fa-stack-1x"></i>
                                                            @else
                                                            <i class="fas fa-star-half fa-stack-1x"></i>
                                                            @endif
                                                            @endif
                                                            @php $rating--; @endphp
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="content_percentage">
                                                    <h3>
                                                        <span class="s_1">
                                                            $ {{$item->sell_price}}
                                                        </span>
                                                        @if(!empty($item->regular_price))
                                                        <span class="s_2">
                                                            <del>${{$item->regular_price}}</del>
                                                        </span>
                                                        <span
                                                            class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                                        <span class="s_4">OFF</span>
                                                        @endif
                                                    </h3>
                                                </div>
                                                <div class="cart_wish d-flex justify-content-between">
                                                    <form class="add-to-cart form_cart_btn_submit " action="#"
                                                        method="post">
                                                        @if($item->variable_product == 1)
                                                        <a class="a_cart_btn"
                                                            href="{{route('product.detail',$item->slug)}}"><span>Add to
                                                                Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></a>
                                                        @else
                                                        @csrf
                                                        <input type="hidden" class="id" value="{{$item->id}}" />
                                                        <input type="hidden" class="quantity" value="1" />
                                                        <input type="hidden" class="varient_id"
                                                            value="{{$item->productVarientSingle->id}}" />
                                                        <input type="hidden" class="add_url"
                                                            value="{{route('cart.add')}}" />

                                                        <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                            </span> <i
                                                                class="material-icons cart_i ">add_shopping_cart</i></button>
                                                        @endif

                                                        <a href="{{route('wishlist.add',$item->id)}}"><i
                                                                class="far fa-heart wish_i "></i></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p>No Product Available</p>
                                @endforelse
                                @endif
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- categories part -->
<section class="category_part all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Top Categories</span></h3>
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
        <div class="row">
            @forelse ($topCategory as $item)
            <div class="col-lg-2 col-md-3 p-lg-2 p-xl-2 col-6 p-md-2 ">
                <div class="categories_card">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="image_part">
                                <a href="{{route('product.search.category',$item->category_name)}}">
                                    <img src="{{asset($item->image)}}" alt="">
                                </a>
                            </div>
                            <h3 class="text-center categorits_title"> <a href=""> {{$item->category_name}} </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</section>

<!-- advertise_option -->
<section class="advertise_option all_p_t_b">
    <div class="container">
        <div class="row">
            @if(!empty($advertisementSecond))
            <div class="col-lg-12">
                <div class="advertise_content  adv_bg_img"
                    style="background-image: url({{$advertisementSecond->image}})">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="advertise_content_text">
                                <h2>{{$advertisementSecond->highlighted_text}}</h2>
                                <p>{{$advertisementSecond->text}}</p>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex">
                            <div class="advertise_content_button align-items-center d-flex">
                                <a href="{{$advertisementSecond->url}}}">{{$advertisementSecond->button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Top productsin last weak -->
<section class="top_product_in_last_weak all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Top Products</span> in Last Weak</h3>
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
                <div class="owl-slider_4">
                    @if($topSellProductLastWeek->has('product'))
                    <div id="carousel_4" class="owl-carousel">
                        @forelse ($topSellProductLastWeek as $item)
                        <div class="item">
                            <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                        <p>
                                            @if(!empty($item->vendor->name))
                                            <a href="{{route('vendor.shop',$item->vendor->name)}}">{{$item->vendor->name}}
                                            </a>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="image_part">
                                        <a href="{{route('product.detail',$item->product->slug)}}">
                                            <img src="{{asset($item->product->product_image)}}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="product_cart_content">
                                        <h3> <a href="">{{$item->product->product_name}}</a> </h3>
                                        <div class="d-inline-flex align-items-center small font-size-15 text-lh-1"
                                            href="#">
                                            <div class="text-warning mr-2">
                                                @php $rating =$item->product->rating ; @endphp
                                                @foreach(range(1,5) as $i)
                                                <span class="fa-stack" style="width:1em">
                                                    <i class="far fa-star fa-stack-1x"></i>

                                                    @if($rating >0)
                                                    @if($rating >0.5)
                                                    <i class="fas fa-star fa-stack-1x"></i>
                                                    @else
                                                    <i class="fas fa-star-half fa-stack-1x"></i>
                                                    @endif
                                                    @endif
                                                    @php $rating--; @endphp
                                                </span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="content_percentage">
                                            <h3>
                                                <span class="s_1">
                                                    $ {{$item->product->sell_price}}
                                                </span>

                                                @if(!empty($item->product->regular_price))
                                                <span class="s_2">
                                                    <del>${{$item->product->regular_price}}</del>
                                                </span>
                                                <span
                                                    class="s_3">{{100 - round(($item->product->sell_price/$item->product->regular_price) * 100)}}%</span>
                                                <span class="s_4">OFF</span>
                                                @endif
                                            </h3>
                                        </div>
                                        <div class="cart_wish d-flex justify-content-between">
                                            <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                                @if($item->product->variable_product == 1)
                                                <a class="a_cart_btn"
                                                    href="{{route('product.detail',$item->product->slug)}}"><span>Add to
                                                        Cart
                                                    </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                                @else
                                                @csrf
                                                <input type="hidden" class="id" value="{{$item->product->id}}" />
                                                <input type="hidden" class="quantity" value="1" />
                                                <input type="hidden" class="varient_id"
                                                    value="{{$item->product->productVarientSingle->id}}" />
                                                <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                                <button class="cart_submit_btn" type="submit"><span>Add to Cart </span>
                                                    <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                                @endif

                                                <a href="{{route('wishlist.add',$item->product->id)}}"><i
                                                        class="far fa-heart wish_i "></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No Product Available</p>
                        @endforelse
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top brand -->

<section class="top_brand all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Top Brands</span> </h3>
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
                <div class="owl-slider_5 owl-slider_common">
                    <div id="carousel_5" class="owl-carousel">
                        @forelse($brand as $item)
                        <div class="item">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="brand_image_part">
                                        <a href="{{route('product.search.brand',$item->brand_name)}}">
                                            <img src="{{asset($item->image)}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No Brand Found</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- newslatter -->
<section class="signup_newslatter pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-auto">
                        <div class="signup_newslatter_left_part">
                            <span class="material-icons news_icon">send</span>
                            <span class="newslatter_heading">Sign up to Newsletter</span>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="font-size-15 ml-4 mb-0 Newsletter_heding">...and receive <strong>$20 coupon for
                                first
                                shopping.</strong></h5>

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <form class="newslater_form" method="POST" action="{{route('newsletter.store')}}">
                    @csrf
                    <!-- <label class="sr-only" for="subscribeSrEmail">Email address</label> -->
                    <div class="input-group input-group-pill">
                        <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail"
                            placeholder="Email address" value="{{old('email')}}" aria-label="Email address"
                            aria-describedby="subscribeButton" required=""
                            data-msg="Please enter a valid email address.">
                        <div class="input-group-append">
                            <button type="submit" class="btn newslatter_btn btn-sm-wide height-40 py-2 form-control"
                                id="subscribeButton">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection

@section('javascript')

<script src="{{asset('/public/frontend/assets/js/countdown1.js')}}"></script>

<script>
    // count down

        //Set value from backend offer
    // if (document.getElementById("end_date") != null){
    //     var endDate=document.getElementById("end_date").value;
    //     console.log(endDate);
    //     const second = 1000,
    //     minute = second * 60,
    //     hour = minute * 60,
    //     day = hour * 24;
    //     let countDown = new Date(endDate).getTime(),
    //     x = setInterval(function() {
    //         let now = new Date().getTime(),
    //         distance = countDown - now;
    //         document.getElementById('days').innerText = Math.floor(distance / (day)),
    //         document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
    //         document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
    //         document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    //     }, second)
    // }
</script>
@endsection
