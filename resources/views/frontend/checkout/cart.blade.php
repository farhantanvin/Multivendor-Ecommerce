@php
$totalDeliveryCharge = 0;
@endphp
@extends('frontend.layout.layout')
@section('title','Cart')
@section('content')

<section class="checkout_page">
    <div class="container shoping_cart_page_label">
        <div class="row" id="main-cart">
            <div class="col-lg-8 col-md-8">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Shopping Cart ({{Cart::count()}})</h3>
                    </div>
                </div>

                <div class="checkout_col_step_2_1 col_shadow">
                    @if(Cart::count() > 0)
                    <div class="checkout_col_step_2">
                        @foreach(Cart::content() as $row)
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                <div class="image_with_checkbox d-flex">
                                    <div class="check_out_product_image">
                                        <a href="{{route('product.detail',$row->options['slug'])}}">
                                            <img src="{{asset($row->options['image_url'])}}" alt="{{$row->name}}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-8 lg_pl_0 lg_pr_0 md_pl_0 md_pr_0 ">
                                <div class="check_out_product_content">
                                    <h4><a href="{{route('product.detail',$row->options['slug'])}}">{{$row->name}} {{$row->options['product_varient']}}</a></h4>
                                    <h3>USD {{$row->price * $row->qty}} /-</h3>

                                    @if($row->options['regular_price'] != 0)
                                    <p class="cart_del_price"><del>USD {{$row->options['regular_price']}}</del> <span>{{100 - round(($row->price/$row->options['regular_price']) * 100)}}% OFF</span></p>
                                    @endif

                                    <p class="delivery_cost">
                                        <span>Vat:</span>  <span>USD {{$row->tax * $row->qty}}  /-</span>
                                        <span>Delivery Charge:</span>  <span>USD {{$row->options['delivery'] * $row->qty}}  /-</span>
                                    </p>
                                    @php
                                        $totalDeliveryCharge = $totalDeliveryCharge + ($row->options['delivery'] * $row->qty);
                                     @endphp
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-4 col_pl_0">
                                <div class="check_out_product_remove">
                                    <a href="#" class="cart_remove_icon removeMainCartItem" removeUrl="{{route('main.cart.remove',$row->rowId)}}" miniCarturl="{{route('cart.get')}}">Remove item <i class="far fa-trash-alt"></i></a>
                                    <div class="quantity_part_form d-flex justify-content-end">
                                        <p>Qty </p>
                                        <div class="quantity_box">
                                            <input type="number" class="form-control mquantity" value="{{$row->qty}}" min="1" rowId="{{$row->rowId}}" updateUrl="{{route('main.cart.update')}}" miniCarturl="{{route('cart.get')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_border_bottom"></div>
                        @endforeach
                    </div>
                        @else
                        <div style="">
                            <h2 class="text-center" style="margin: 10% 0;">
                                Your cart is empty please add product to your cart.
                                <a style="color: #FFE53B;" href="{{route('home.index')}}">Visit Home</a>
                            </h2>
                        </div>
                    @endif
                </div>
   
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="cart_col col_shadow ">
                    <div class="order_title">
                        <p>Order Summary</p>
                    </div>
                    <div class="order_cart_part">
                        <div class="order_price_list">
                            <p>
                                <span>Subtotal</span>
                                <span>
                                    USD<span>{{Cart::subtotal()}}</span>  /-
                                </span>
                            </p>
                            <p>
                                <span>Vat</span>
                                <span>
                                    USD <span>{{Cart::tax()}}</span>  /-
                                </span>
                            </p>

                            <p>
                                <span>Delivery Charge</span>
                                <span>
                                    USD <span>{{$totalDeliveryCharge}}</span>  /-
                                </span>
                            </p>


                            <div class="p_boder_bottom mt-4 mb-3"></div>
                            <p class="order_total_price mb-4"><span>Total</span> <span class="total_amount">USD {{Cart::total(2,'.','') + $totalDeliveryCharge}}  /-</span> </p>
                        </div>
                        
                        
                    </div>
                    
                    <div class="cart_part_button">
                        <a href="{{route('checkout-step-one')}}" class="btn btn_5">Proceed to Checkout</a>
                        <a href="{{route('home.index')}}" class="btn btn_6">Continue Shopping</a>
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
                        @foreach($products as $item)
                        <div class="col-lg-3 col-md-3 col-6 col-sm-6 padding_none_col">
                            <div class=" column_item_4">
                                <div class="card product_card">
                                <div class="card-body product_card_body">
                                    <div class="card_category_part">
                                    <p><a href="">{{$item->category->category_name ?? ''}}</a></p>
                                    </div>
                                    <div class="image_part">
                                    <a href="{{route('product.detail',$item->slug)}}">
                                        <img src="{{asset($item->product_image)}}" alt="" class="img-fluid">
                                    </a>
                                    </div>
                                    <div class="product_cart_content">
                                        <h3>
                                            <a href="{{route('product.detail',$item->slug)}}">{{$item->product_name}}</a>
                                        </h3>
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
                                            <h3>
                                                        <span class="s_1">
                                                            $ {{$item->sell_price}}
                                                        </span>
                                                @if(!empty($item->regular_price))
                                                    <span
                                                        class="s_2">
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
                                                <a href="{{route('wishlist.add',$item->id)}}"><i class="far fa-heart wish_i "></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
