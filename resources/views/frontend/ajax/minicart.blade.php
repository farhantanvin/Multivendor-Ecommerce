<a href="#" class="top_icon_a dropdown-toggle cart_position_a"
   data-toggle="dropdown">
    <i class="fas fa-shopping-cart"></i>
    <span class="top_icon">{{\Cart::count()}}</span>
</a>
<div class="dropdown-menu cart_content animate__animated animate__pulse">
    <ul class="list-unstyled px-2 pt-2">
        @forelse(\Cart::content() as $row)
            <li class="border-bottom pb-2 mb-3">
                <div class="">
                    <ul class="list-unstyled d-flex ">
                        <li class="li_img">
                            <img class="img-fluid"
                                 src="{{asset($row->options['image_url'])}}"
                                 alt="Image Description">
                        </li>
                        <li class="li_text">
                            <h5 class="text-blue font-size-14 font-weight-bold">{{$row->name}}</h5>
                            <span class="font-size-14">{{$row->qty}} × ${{$row->price}}</span>
                        </li>
                        <li class="li_close">
                            <a href="#" class="text-gray-90 removeCartItem" removeUrl="{{route('cart.remove.minicart',$row->rowId)}}" mainCartUrl="{{route('main.cart.get')}}"><i
                                    class="fas fa-times"></i></a>
                        </li>
                    </ul>
                </div>
            </li>
        @empty
            <h6 class="text-center">Add Some Product to Cart</h6>
        @endforelse
    </ul>
    <div class="cart_check_out d-flex justify-content-center pl-3 pr-3">
        <a href="{{route('cart.index')}}" class="btn btn_1 btn_g mr-4">Viewcart</a>
        <a href="{{route('checkout-step-one')}}" class="btn btn_1 btn_y ml-2">Checkout</a>
    </div>
</div>
