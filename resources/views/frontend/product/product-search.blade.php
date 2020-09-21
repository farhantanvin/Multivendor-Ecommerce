@extends('frontend.layout.layout')
@section('title','Search')
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

                            @foreach(App\Model\Category::with('childs')->withCount('product')->where('parent_id',
                            0)->get() as $item)
                            @if($item->childs->count()>0)
                            <div class="accordian_col">
                                <h3><a data-toggle="collapse" href="#collapse_{{$item->id}}" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">{{$item->category_name}}
                                        ({{$item->product_count}})</a>
                                </h3>

                                <div class="collapse" id="collapse_{{$item->id}}" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <ul class="list-unstyled accordian_ul">
                                        @foreach ($item->childs as $subMenu)
                                        <li><a
                                                href="{{route('product.search.category',$subMenu->category_name)}}">{{$subMenu->category_name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                            @else
                            <div class="accordian_col">

                                <h3><a data-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false"
                                        aria-controls="collapseExample">{{$item->category_name}}
                                        ({{$item->product_count}})</a></h3>

                            </div>

                            @endif
                            @endforeach





                        </div>
                    </div>
                </div>

                <div class="products_filter_part">
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="">Filters</a></h3>
                        </div>
                        <form action="{{route('product.search')}}">
                            <div class="card-body">
                                <div class="brand_filter">
                                    <h3 class="filter_left_col_h2">Brands</h3>
                                    <div class="brand_filter_input">
                                        @foreach ($brands as $brand)
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" name="brand" value={{$brand->id}}
                                                class="custom-control-input" id="{{$brand->id}}">
                                            <label class="custom-control-label"
                                                for="{{$brand->id}}">{{$brand->brand_name}}
                                                ({{$brand->product_count}})</label>
                                        </div>
                                        @endforeach
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

                                <div class="filter_range_input d-flex flex-wrap">
                                    <div class=" quantity_box">
                                        <input type="number" placeholder="Min" name="min_price" class="filter_input form-control">

                                    </div>
                                    <div class=" quantity_box">
                                        <input type="number" placeholder="Max" name="max_price" class="filter_input form-control">

                                    </div>

                                    <button type="submit" class="btn">Filter</button>

                                </div>


                                <div class="filter_rating">
                                    <h2 class="filter_left_col_h2">Rating</h2>
                                    <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                        <div class="text-warning mr-2 rating_icon_1">
                                            <input type="hidden" name="rating" id="rating">
                                            <div id="rateYo"></div>
                                        </div>
                                    </div>
                                    <p>Minimum rating:&nbsp<span id="ratingShow"></span> </p>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>



            </div>
            <!-- right part -->
            <div class="col-md-8 col-lg-8 ">
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
                        <div class="owl-slider_6 owl-slider_common column_item_4">
                            <div id="carousel_6" class="owl-carousel">

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
                                                    <img style="width: 100%;" src="{{asset($item->product_image)}}"
                                                        alt="" class="img-fluid">
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
                                                    <h3><span class="s_1">$ {{$item->sell_price}}</span><span
                                                            class="s_2"><del>${{$item->regular_price}}</del></span>
                                                        @if(!empty($item->regular_price))
                                                        <span
                                                            class="s_3">{{100 - round(($item->sell_price/$item->regular_price) * 100)}}%</span>
                                                        <span class="s_4">OFF</span> </h3>
                                                    @endif

                                                </div>
                                                <div class="cart_wish d-flex justify-content-between">
                                                    <form class="add-to-cart form_cart_btn_submit " action="#"
                                                        method="post">
                                                        @if($item->variable_product == 1)
                                                        <a href="{{route('product.detail',$item->slug)}}"><span>Add
                                                                to
                                                                Cart
                                                            </span>
                                                            <i class="material-icons cart_i ">add_shopping_cart</i></a>
                                                        @else
                                                        @csrf
                                                        <input type="hidden" class="id" value="{{$item->id}}" />
                                                        <input type="hidden" class="quantity" value="1" />
                                                        <input type="hidden" class="varient_id"
                                                            value="{{$item->productVarientSingle->id}}" />
                                                        <input type="hidden" class="add_url"
                                                            value="{{route('cart.add')}}" />

                                                        <button class="cart_submit_btn" type="submit"><span>Add to
                                                                Cart
                                                            </span>
                                                            <i
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
                    </div>
                </div>


                <div class="row mt-3 mb-2">
                    <div class="col-lg-12">
                        <div class="title_part d-flex justify-content-between">
                            <h3><span>Search Result for : </span> "{{$query}}"</h3>
                            {{-- <a href="" class="view_all_1"> <span></span> View All <i class="fas fa-angle-right"></i></a> --}}
                        </div>
                        <div class="heding_border">
                            <p class="d-flex">
                                <span class="h_s_1"></span>
                                <span class="h_s_2"></span>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="row padding_none search_page_right_col">
                    @forelse ($searchProduct as $item)
                    <div class="col-lg-4 col-xl-3 col-md-6 col-6 col-sm-6 padding_none_col">
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
                                <div class="product_cart_content">
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

                    <div class="col-12">
                        <p>No Product Available</p>
                    </div>
                    
                    @endforelse

                    <!-- pagination -->
                    {{$searchProduct->links("backend.include.pagination")}}

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('javascript')
<script>
    $(function () {

    $("#rateYo").rateYo({
    ratedFill: "#ffc107",
    onChange: function (rating, rateYoInstance) {
    $(this).next().text(rating);
    $("#rating").val(rating);
    $("#ratingShow").text(rating);
    }
    });
    });

</script>

@endsection
