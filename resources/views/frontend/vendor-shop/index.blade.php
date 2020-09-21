@extends('frontend.layout.layout')
@section('title','Vendor or Shop Page')
@section('content')

<section class="vandor_shop_page">
    <div class="container">
        <div class="vandor_shop_page_header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="vendor_logo_part">
                        <a href=""><img src="{{asset($shopSettings->logo)}}" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="vendor_header_content">
                        <p><a href="">{{$vendor->name}}</a></p>
                        <p class="vendor_header_btn"><span>Open {{$vendorEstablished}}</span> </p>
                        {{-- <p>95% Positive Review</p>
                        <p class="vendor_header_btn"> <span>Follow</span> <b>5k Followers</b> </p> --}}

                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3">
                    <div class="vendor_search_page">
                        <form action="" class="d-flex search_form_1">
                            <div class="input-group">
                                <input type="text" placeholder="Search in this shop" class="form-control s_i_1"
                                    aria-label="Text input with dropdown button">

                            </div>
                            <button class="search_btn">Search</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="vendor_page_menu_part">
                <div class="row">
                    <div class="col-lg-9 col-md-9 m-auto">
                        <div class="vendor_page_menu">
                            <ul class="nav navbar-nav-vendor d-flex  w-100">

                                {{-- <li class="nav-item ">
                                    <a class="nav-link active" href="#">Flash deals</a>
                                </li> --}}


                                @forelse($vendorMenu as $item)

                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{route('vendor.page',$item->slug)}}">{{$item->page_title}}</a>
                                </li>
                                @empty
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">{{$vendor->name}}</a>
                                </li>

                                @endforelse



                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- New Products -->
@if(!$newProduct->isEmpty())
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

                        @forelse ($newProduct as $item)
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
                                            <img style="width: 100%;" src="{{asset($item->product_image)}}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <h3> <a href="">{{$item->product_name}}</a> </h3>
                                    <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
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
                                        <h3><span class="s_1">$ {{$item->sell_price}}</span><span
                                                class="s_2"><del>${{$item->regular_price}}</del></span>
                                            @if(!empty($item->regular_price))
                                            <span
                                                class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                            <span class="s_4">OFF</span> </h3>
                                        @endif

                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                        <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                            @if($item->variable_product == 1)
                                            <a href="{{route('product.detail',$item->slug)}}"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                            @else
                                            @csrf
                                            <input type="hidden" class="id" value="{{$item->id}}" />
                                            <input type="hidden" class="quantity" value="1" />
                                            <input type="hidden" class="varient_id"
                                                value="{{$item->productVarientSingle->id}}" />
                                            <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                            <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                            @endif

                                            <a href="{{route('wishlist.add',$item->id)}}"><i
                                                    class="far fa-heart wish_i "></i></a>
                                        </form>
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

@if(!$featureProduct->isEmpty())
<!-- More Related Products -->
<section class="top_product_in_last_weak all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Feature</span> Products</h3>
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

                        @forelse ($featureProduct as $item)
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
                                            <img style="width: 100%;" src="{{asset($item->product_image)}}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <h3> <a href="">{{$item->product_name}}</a> </h3>
                                    <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
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
                                        <h3><span class="s_1">$ {{$item->sell_price}}</span><span
                                                class="s_2"><del>${{$item->regular_price}}</del></span>
                                            @if(!empty($item->regular_price))
                                            <span
                                                class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                            <span class="s_4">OFF</span> </h3>
                                        @endif

                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                        <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                            @if($item->variable_product == 1)
                                            <a href="{{route('product.detail',$item->slug)}}"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                            @else
                                            @csrf
                                            <input type="hidden" class="id" value="{{$item->id}}" />
                                            <input type="hidden" class="quantity" value="1" />
                                            <input type="hidden" class="varient_id"
                                                value="{{$item->productVarientSingle->id}}" />
                                            <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                            <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                            @endif

                                            <a href="{{route('wishlist.add',$item->id)}}"><i
                                                    class="far fa-heart wish_i "></i></a>
                                        </form>
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


@if(!$sellProduct->isEmpty())
<!-- More Related Products -->
<section class="top_product_in_last_weak all_p_t_b">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_part d-flex justify-content-between">
                    <h3><span>Sell</span> Products</h3>
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

                        @forelse ($featureProduct as $item)
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
                                            <img style="width: 100%;" src="{{asset($item->product_image)}}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <h3> <a href="">{{$item->product_name}}</a> </h3>
                                    <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
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
                                        <h3><span class="s_1">$ {{$item->sell_price}}</span><span
                                                class="s_2"><del>${{$item->regular_price}}</del></span>
                                            @if(!empty($item->regular_price))
                                            <span
                                                class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                            <span class="s_4">OFF</span> </h3>
                                        @endif

                                    </div>
                                    <div class="cart_wish d-flex justify-content-between">
                                        <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                            @if($item->variable_product == 1)
                                            <a href="{{route('product.detail',$item->slug)}}"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                            @else
                                            @csrf
                                            <input type="hidden" class="id" value="{{$item->id}}" />
                                            <input type="hidden" class="quantity" value="1" />
                                            <input type="hidden" class="varient_id"
                                                value="{{$item->productVarientSingle->id}}" />
                                            <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                            <button class="cart_submit_btn" type="submit"><span>Add to Cart
                                                </span>
                                                <i class="material-icons cart_i ">add_shopping_cart</i></button>
                                            @endif

                                            <a href="{{route('wishlist.add',$item->id)}}"><i
                                                    class="far fa-heart wish_i "></i></a>
                                        </form>
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





@endsection
