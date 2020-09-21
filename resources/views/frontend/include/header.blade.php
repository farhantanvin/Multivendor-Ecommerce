<!-- header part -->
<header id="header_part" class="header_part">
    <!-- top header -->
    <div class="top_header">
        <div class="container">
            <div class="row">
                @if(!empty($globalData['siteSetting']->phone_number))
                <div class="col-lg-6 col-md-6">
                    <div class="top_header_left">
                        <p>Customer Support : <a href="#">{{$globalData['siteSetting']->phone_number}}</a></p>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top_header_right ">
                        <ul class="d-flex justify-content-end ul_list">
                            @if (!Auth::check())
                            <li><a href="{{route('user.login')}}"><i class="fas fa-user-circle"></i> Login/Register</a>
                            </li>
                            @endif
                            @if (Auth::check())
                            <li><a href="{{route('frontend.user.dashboard')}}"><i class="far fa-user"></i> My
                                    Account</a></li>
                            @endif

                            @if (Auth::check())
                            <li><a href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            @endif
                            &nbsp&nbsp&nbsp
                            {{--<li><a href=""><i class="fas fa-map-marker-alt"></i> Location</a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle -->
    <div class="header_middle">
        <div class="container">

            <div class="row">
                @if(!empty($globalData['siteSetting']->logo))
                <div class="col-md-4 col-lg-3 d-flex justify-content-between">
                    <div class="logo_part">
                        <a href="{{route('home.index')}}"><img src="{{asset($globalData['siteSetting']->logo)}}" alt=""
                                class="img-fluid"></a>
                    </div>
                    @endif

                    <div class="right_menu_part">
                        <div class="card-1">

                            <a class="menu_1_btn" data-toggle="collapse" data-target="#basicsCollapseOne"
                                aria-expanded="true" aria-controls="basicsCollapseOne">
                                <i class="fas fa-align-left"></i>
                            </a>

                            <div id="basicsCollapseOne" class="collapse  menu_1">
                                <div class="card-body-1 p-0">
                                    <nav class="navbar navbar-expand-md navbar-light bg-light p-0 nav_1">

                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">


                                            <ul class="navbar-nav-1 w-100 ul_style">
                                                @foreach(App\Model\Category::with('childs')->where('parent_id',
                                                0)->get() as $item)
                                                @if($item->childs->count()>0)

                                                <li class="nav-item li_nav_1  border_bottom_li">
                                                    <a class="nav-link dropdown-toggle"
                                                        href="{{route('product.search.category',$item->category_name)}}"
                                                        id="navbarDropdown" role="button" data-hover="dropdown"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        {{$item->category_name}}
                                                    </a>
                                                    <div class="dropdown-menu  megamenu_width dropdown-menu-1 animate__animated animate__pulse"
                                                        aria-labelledby="navbarDropdown">
                                                        <div class="row megamenu_wrapper">
                                                            <div class="col-md-6">
                                                                <div class="megamenu_col_title">
                                                                    <h5>{{$item->category_name}}</h5>
                                                                </div>
                                                                <div class="megamenu_col_content">
                                                                    <ul class="list-unstyled">

                                                                        @foreach ($item->childs as $subMenu)
                                                                        <li><a href="{{route('product.search.category',$subMenu->category_name)}}"
                                                                                class="nav-link">{{$subMenu->category_name}}</a>
                                                                        </li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                @else
                                                <li class="nav-item active border_bottom_li">
                                                    <a class="nav-link"
                                                        href="{{route('product.search.category',$item->category_name)}}">{{$item->category_name}}<span
                                                            class="sr-only">(current)</span></a>
                                                </li>

                                                @endif
                                                @endforeach
                                            </ul>

                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-8">
                    <div class="search_option">
                        <form method="GET" action="{{route('product.search')}}" class="d-flex search_form_1">
                            <div class="input-group">
                                <input type="text" id="search" name="search"
                                    placeholder="You are searching in all categories" class="form-control s_i_1"
                                    aria-label="Text input with dropdown button">
                                <div class="input-group-append">
                                    <button class="btn  dropdown-toggle s_i_2" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">All Categories</button>

                                    <div class="dropdown-menu">
                                        @foreach(App\Model\Category::with('childs')->where('parent_id',
                                        0)->get() as $item)
                                        @if($item->childs->count()>0)
                                        <a class="dropdown-item"
                                            href="{{route('product.search.category',$item->category_name)}}">{{$item->category_name}}</a>
                                        @else
                                        <a class="dropdown-item"
                                            href="{{route('product.search.category',$item->category_name)}}">{{$item->category_name}}</a>
                                        @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <button class="search_btn">Search</button>
                        </form>
                    </div>
                </div>
                @php
                    $count = 0;
                    if (auth()->check()){
                        $wishLists =  \App\Model\WishList::where('user_id','=',auth()->id())->get();
                        $count = count($wishLists);
                    }
                    @endphp
                <div class="col-lg-2 col-md-5 ml-md-auto">
                    <div class="header_last_option">
                        <ul class="d-flex list-unstyled align-items-center ul_list_2">

                            <li class="cart_position"><a href="#" class="top_icon_a dropdown-toggle cart_position_a"
                                    data-toggle="dropdown"><i class="far fa-heart"></i> <span
                                        class="top_icon">{{$count}}</span></a>
                                <div class="dropdown-menu cart_content animate__animated animate__pulse">
                                    <ul class="list-unstyled px-2 pt-2">
                                        @auth
                                            @forelse($wishLists as $wishList)
                                        <li class="border-bottom pb-2 mb-3">
                                            <div class="">
                                                <ul class="list-unstyled d-flex ">
                                                    <li class="li_img">
                                                        <a href="{{route('product.detail',$wishList->product->slug)}}">
                                                        <img class="img-fluid"
                                                            src="{{asset($wishList->product->product_image)}}"
                                                            alt="Image Description"></a>

                                                    </li>
                                                    <li class="li_text">
                                                        <h5 class="text-blue font-size-14 font-weight-bold">
                                                            <a href="{{route('product.detail',$wishList->product->slug)}}">
                                                            {{$wishList->product->product_name}}
                                                            </a>
                                                        </h5>
                                                        <span class="font-size-14">1 × ${{$wishList->product->sell_price}}</span>
                                                    </li>
                                                    <li class="li_close">
                                                        <a href="{{route('wishlist.remove',$wishList->id)}}" class="text-gray-90"><i
                                                                class="fas fa-times"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        @empty
                                                <li class="border-bottom pb-2 mb-3">
                                                    <div class="">
                                                        <ul class="list-unstyled d-flex ">
                                                            <li class="li_text">
                                                                <h5 class="text-blue font-size-14 font-weight-bold">Please Add Product To WishList
                                                                </h5>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforelse
                                        @endauth
                                        @guest
                                                <li class="border-bottom pb-2 mb-3">
                                                    <div class="">
                                                        <ul class="list-unstyled d-flex ">
                                                            <li class="li_text">
                                                                <h5 class="text-blue font-size-14 font-weight-bold">
                                                                    <a href="{{route('user.login')}}">Please Login</a>
                                                                </h5>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                            @endguest

                                    </ul>
                                </div>

                            </li>

                            <li class="cart_position" id="mini-cart">
                                <a href="#" class="top_icon_a dropdown-toggle cart_position_a" data-toggle="dropdown">
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
                                                        <h5 class="text-blue font-size-14 font-weight-bold">
                                                            {{$row->name}}</h5>
                                                        <span class="font-size-14">{{$row->qty}} ×
                                                            ${{$row->price}}</span>
                                                    </li>
                                                    <li class="li_close">
                                                        <a href="#" class="text-gray-90 removeCartItem"
                                                            removeUrl="{{route('cart.remove.minicart',$row->rowId)}}"
                                                            mainCartUrl="{{route('main.cart.get')}}"><i
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
                                        <a href="{{route('checkout-step-one')}}"
                                            class="btn btn_1 btn_y ml-2">Checkout</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- header bottom -->
    <div class="heder_bottom">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-md-7 m-auto">
                    <div class="header_menu_3">
                        <div class="">
                            <ul class="nav navbar-nav-2 d-flex  w-100">


                                @if(!empty($globalData['topMenus']))

                                @foreach($globalData['topMenus'] as $item)
                                @if($item->type ==2)

                                <li class="nav-item">
                                    <a class="nav-link active" href="{{$item->url}}"
                                        target="_blank">{{ $item->name }}</a>
                                </li>

                                @else

                                <li class="nav-item">
                                    <a class="nav-link {{ (request()->is('home.custom.page')) ? 'active' : '' }}"
                                        href="{{route('home.custom.page',$item->url)}}">{{ $item->name }}</a>
                                </li>
                                @endif
                                @endforeach
                                @endif


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
