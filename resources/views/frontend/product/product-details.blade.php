@extends('frontend.layout.layout')
@section('title','Product Details')
@section('content')

<!-- single_product  -->
<section class="single_product_image_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">

                <div class="outer outer_single">
                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails easyzoom_1">
                        <a href="">
                            <img class="img-fluid" src="{{asset($productDetail->product_image)}}" alt="" width=""
                                height="" />
                        </a>
                    </div>

                    <div class="single_product_slider">
                        <div id="big" class="owl-carousel owl-theme owl-carousel-big">

                            @forelse ($productDetail->gallery as $item)
                            <div class="item">
                                <img src="{{asset($item->image)}}" alt="" class="img-fluid">
                            </div>

                            @empty
                            <div class="item">
                                <img src="{{asset($productDetail->product_image)}}" alt="" class="img-fluid">
                            </div>
                            @endforelse

                        </div>
                        <div id="thumbs" class="owl-carousel owl-theme owl-carousel-thumbs">

                            @forelse ($productDetail->gallery as $item)
                            <div class="item">
                                <img src="{{asset($item->image)}}" alt="" class="img-fluid">
                            </div>

                            @empty
                            <div class="item">
                                <img src="{{asset($productDetail->product_image)}}" alt="" class="img-fluid">
                            </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="single_product_details">

                    <div class="single_product_title">
                        <a href="{{route('product.search.category',$productDetail->category->category_name)}}"
                            class="categories color_AC">{{$productDetail->category->category_name}}</a>
                        <h3 class="color_black"><a href=""
                                class="product_name color_black">{{$productDetail->product_name}}</a></h3>
                    </div>
                    <div class="single_review_section d-flex">

                        <div class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                            <div class="text-warning mr-2">
                                @php $rating =$productDetail->rating ; @endphp
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

                        <a href="" class="review_counts color_AC">
                            {{$countReview}} Reviews
                        </a>
                        @if(!empty($productDetail->vendor->name))
                        <a href="{{route('vendor.shop',$productDetail->vendor->name)}}"
                            class="color_AC by_auth"><span>|</span>
                            By {{$productDetail->vendor->name}}</a>
                        @endif

                    </div>
                    <div class="s_product_stock">
                        <p class="color_AC">Availability:@if($productDetail->quantity>0)
                            <span style="color:#21DC21">In Stock</span>
                            @else
                            <span style="color:red">Out of Stock</span>
                            @endif
                            <span>({{$productDetail->quantity}} pieces)</span></p>
                    </div>
                    <div class=" border_bottom">
                    </div>
                    <div class="s_product_details">
                        <span> {{$productDetail->short_description}} </span>
                    </div>

                    <div class="thumbnails_img">
                        <h3 class="color_subhead s_p_h">Product Image</h3>
                        <ul class="thumbnails">

                            @forelse ($productDetail->gallery as $item)
                            <li>
                                <a href="{{asset($item->image)}}" data-standard="{{asset($item->image)}}">
                                    <img src="{{asset($item->image)}}" alt="" class="img-fluid" />
                                </a>
                            </li>

                            @empty
                            <li>
                                <a href="{{asset($productDetail->product_image)}}"
                                    data-standard="{{asset($productDetail->product_image)}}">
                                    <img src="{{asset($productDetail->product_image)}}" alt="" class="img-fluid" />
                                </a>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                    @if($productDetail->variable_product == 1)
                    <div class="s_choose_spec">
                        <h3 class="color_subhead s_p_h">Choose Spec.</h3>
                        <div class="s_choose_spec_c d-flex flex-wrap">
                            @foreach($productDetail->productVarient as $productVarient)
                            <span vPrice="{{$productVarient->product_price}}" vId="{{$productVarient->id}}"
                                class="btn focus_none product_varient">{{$productVarient->product_varient}}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="s_total_cost">
                        <h3 class="color_subhead s_p_h">Total Cost:</h3>
                        <h2 id="productPrice">{{$productDetail->sell_price}}<span>/-</span></h2>
                    </div>


                    <div class="s_buy_cart">
                        <form class="add-to-cart form_cart_btn_submit form_cart_btn_submit_1 form_cart_btn_submit_1"
                            action="#" method="post">
                            <div class="quantity_part_form d-flex mb-2">
                                <p>Qty </p>
                                <div class="quantity_box">
                                    <input type="number" class="form-control quantity" value="1" min="1">
                                </div>
                            </div>
                            <div class="d-flex">
                                @csrf
                                <input type="hidden" id="productId" class="id" value="{{$productDetail->id}}" />

                                {{--<input type="hidden" id="productQuantity" class="quantity" value="1" />--}}

                                @if($productDetail->variable_product == 1)
                                <input type="hidden" id="varientId" class="varient_id" value="" />
                                @else
                                <input type="hidden" id="varientId" class="varient_id"
                                    value="{{$productDetail->productVarientSingle->id}}" />
                                @endif

                                <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                <button type="submit" class="btn bg_ef s_buy focus_none">Add to Cart</button>
                                <a class="pd_wishlish" href="{{route('wishlist.add',$productDetail->id)}}"><i
                                        class="far fa-heart "></i></a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 d-sm-none d-none d-md-none d-lg-block">
                <div class="s_more_shop">
                    @if(!$moreProductShop->isEmpty())
                    <div class="s_more_shop_heading">
                        <a href="">More From this shop:</a>
                    </div>
                    @endif

                    @forelse ($moreProductShop as $item)

                    <div class="card s_card">
                        <div class="card-body">
                            <a href="{{route('product.detail',$item->slug)}}">{{$item->product_name}}</a>
                            <div class="c_image_part mb-2">
                                <a href="{{route('product.detail',$item->slug)}}"><img
                                        src="{{asset($item->product_image)}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="c_price_wish d-flex">
                                <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                    <p><span>$</span> {{$item->sell_price}}</p>
                                    <a href="{{route('wishlist.add',$item->id)}}"><i
                                            class="far fa-heart wish_i "></i></a>
                                    @if($item->variable_product == 1)
                                    <a href="{{route('product.detail',$item->slug)}}"> <i
                                            class="material-icons cart_i ">add_shopping_cart</i></a>
                                    @else
                                    @csrf
                                    <input type="hidden" class="id" value="{{$item->id}}" />
                                    <input type="hidden" class="quantity" value="1" />
                                    <input type="hidden" class="varient_id"
                                        value="{{$item->productVarientSingle->id}}" />
                                    <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                    <button class="cart_submit_btn" type="submit"> <i
                                            class="material-icons cart_i ">add_shopping_cart</i></button>
                                    @endif
                                </form>
                            </div>
                        </div>

                    </div>

                    @empty

                    @endforelse
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

                    @forelse ($reletedProduct as $item)

                    @if($loop->iteration ==4)
                    @break;
                    @endif
                    <div class="card product_card mb-3">
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
                                    <form class="add-to-cart form_cart_btn_submit " action="#" method="post">
                                        @if($item->variable_product == 1)
                                        <a href="{{route('product.detail',$item->slug)}}"><span>Add to Cart </span> <i
                                                class="material-icons cart_i ">add_shopping_cart</i></a>
                                        @else
                                        @csrf
                                        <input type="hidden" class="id" value="{{$item->id}}" />
                                        <input type="hidden" class="quantity" value="1" />
                                        <input type="hidden" class="varient_id"
                                            value="{{$item->productVarientSingle->id}}" />
                                        <input type="hidden" class="add_url" value="{{route('cart.add')}}" />

                                        <button class="cart_submit_btn" type="submit"><span>Add to Cart </span> <i
                                                class="material-icons cart_i ">add_shopping_cart</i></button>
                                        @endif

                                        <a href="{{route('wishlist.add',$item->id)}}"><i
                                                class="far fa-heart wish_i "></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty

                    @endforelse


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
                            <a class="nav-link {{Request::routeIs('product.rating') ? 'active' : ''}}" href="#reviews"
                                role="tab" data-toggle="tab">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#qa" role="tab" data-toggle="tab">Q&A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#returnpolicy" role="tab" data-toggle="tab">Return policy &
                                More</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane  active" id="description">
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    {!!$productDetail->description!!}

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane  fade" id="specification">
                            <br>
                            {!!$productDetail->specification!!}
                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                            <div class="single_product_customer_review_part">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="customer_review_title">
                                            <h3>Customer Review <span class="r_count">({{$countReview}})</span>
                                                <span class="r_rating">{{$productDetail->rating ?? null}}/5
                                                </span>

                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                @forelse ($productReview as $item)

                                <div class="row">
                                    <div class="col-12">
                                        <div class="review_comment_sec">
                                            <h3 class="review_user_name"><a href="">{{$item->user->name}}</a></h3>

                                            <div class="text-warning mr-2">
                                                @php $rating = $item->rating; @endphp
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

                                            <p>{{$item->review}}</p>

                                            @if(!empty($item->review_image))
                                            <div class="review_comment_image_sec">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <ul class="list-unstyled d-flex">
                                                            <li><a href=""><img src="{{asset($item->review_image)}}"
                                                                        alt="" class="img-fluid"></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>

                                @empty
                                <p>No Review Found</p>
                                @endforelse

                                <div class="row">
                                    <div class="col-12">
                                        {{$productReview->links("backend.include.pagination")}}
                                    </div>
                                </div>

                                <div class="row">
                                    @if(!empty(Auth::user()->id))
                                    <div class="col-12">
                                        <div class="review_form_section">
                                            <form method="post" enctype="multipart/form-data" action="
                                                {{route("product.rating")}}">
                                                @csrf
                                                <h4>Give your Feedback :</h4>
                                                <p>How much do you like it :</p>
                                                <a class=" d-inline-flex align-items-center small font-size-15
                                                text-lh-1" href="#">
                                                    <div class="text-warning mr-2">

                                                    </div>
                                                </a>

                                                <div class="form-group">
                                                    <!-- hidden file input to entry product review -->
                                                    <div id="rateYo"></div>
                                                    <div class="counter"></div>
                                                    <input type="hidden" name="rating" id="rating">
                                                    <input type="hidden" name="user_id"
                                                        value="{{Auth::user()->id ?? null}}">
                                                    <input type="hidden" name="product_id"
                                                        value="{{$productDetail->id}}">

                                                    <input type="hidden" name="vendor_id"
                                                        value="{{$productDetail->vendor_id ?? null}}">

                                                    <br>

                                                    <label for="review">Explain in details :</label>
                                                    <textarea class="form-control" rows="4" name="review"
                                                        id="review"></textarea>
                                                    <span class=" text-danger">
                                                        {{$errors->has("review") ? $errors->first("review") : ""}}
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">Add Image:</label>

                                                    <br>
                                                    <input type="file" class="" accept="image/*" name="review_image">

                                                </div>
                                                <button type="submit"
                                                    class="btn bg_yellow s_buy focus_none">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane  fade" id="qa">
                            <div class="qa_section_part">
                                <div class="qa_section_part_row">

                                    @forelse ($productComments as $item)

                                    <div class="row mb-2">
                                        <div class="col-1">
                                            <h3 class="review_q">Q:</h3>
                                        </div>
                                        <div class="col-11 pl-0">
                                            <h3 class="review_user">{{$item->user->name}}</h3>
                                            <p class="review_qu">{{$item->comments}} </p>
                                        </div>
                                    </div>


                                    @if(!empty($item->reply->comments))
                                    <div class="row">
                                        <div class="col-1">
                                            <h3 class="review_q">A:</h3>
                                        </div>
                                        <div class="col-11 pl-0">
                                            <h3 class="review_user">{{$item->reply->user->name ?? ''}}</h3>
                                            <p class="review_qu">{{$item->reply->comments ?? ''}}</p>
                                        </div>
                                    </div>
                                    @endif

                                    @empty

                                    <p>No Question Found</p>

                                    @endforelse

                                </div>


                                <div class="row">
                                    <div class="col-12">
                                        {{$productComments->links("backend.include.pagination")}}
                                    </div>
                                </div>


                                @if(!empty(Auth::user()->id))
                                <div class="qa_feadback_form">
                                    <form method="post" enctype="multipart/form-data"
                                        action="{{route("product.comments")}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Give your Feadback:</h3>
                                                <div class="form-group">
                                                    <label for="comment">Ask your Question :</label>
                                                    {{-- hidden feild taken for store question --}}
                                                    <input type="hidden" name="user_id"
                                                        value="{{Auth::user()->id ?? null}}">
                                                    <input type="hidden" name="product_id"
                                                        value="{{$productDetail->id}}">
                                                    <input type="hidden" name="vendor_id"
                                                        value="{{$productDetail->vendor_id ?? null}}">


                                                    <textarea class="form-control" rows="4" name="comments"
                                                        id="comment"></textarea>
                                                    <span class=" text-danger">
                                                        {{$errors->has("comments") ? $errors->first("comments") : ""}}
                                                    </span>
                                                </div>
                                                <button type="submit"
                                                    class="btn bg_yellow s_buy focus_none">Submit</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                @endif

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane  fade" id="returnpolicy">
                            <br>
                            {!!$productDetail->policy!!}
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

                        @forelse ($reletedProduct as $item)

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
                                        <h3>
                                            <a href="{{route('product.detail',$item->slug)}}">{{$item->product_name}}
                                            </a>
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
                        <p>No Related Product </p>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('javascript')
<script>
    $('.thumbnails li').click(function() {

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

    $(function () {

    $("#rateYo").rateYo({

    ratedFill: "#ffc107",
    onChange: function (rating, rateYoInstance) {
    $(this).next().text(rating);
    $("#rating").val(rating);
    }
    });
    });

</script>

@endsection
