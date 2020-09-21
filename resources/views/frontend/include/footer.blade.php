<!-- footer part -->
<footer>
    <footer class="footer_part pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="f_col_1">
                        <div class="f_logo">
                            <a href=""><img src="{{asset('/public/frontend/assets/images/logo.png')}}" alt=""
                                    class="img-fluid"></a>
                        </div>

                        @if(!empty($globalData['siteSetting']->phone_number))
                        <div class="f_number">
                            <p>Call For support</p>
                            <a href="">{{$globalData['siteSetting']->phone_number}}</a>
                        </div>
                        @endif

                        @if(!empty($globalData['siteSetting']->address))
                        <div class="f_address">
                            <p>Address</p>
                            <a href="">{{$globalData['siteSetting']->address}}</a>
                        </div>
                        @endif

                        <div class="f_socila_icon">
                            <ul class="list-unstyled d-flex">
                                @if(!empty($globalData['socialLink']->fb_link))
                                <li><a href="{{$globalData['socialLink']->fb_link}}"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                @endif

                                @if(!empty($globalData['socialLink']->twetter_link))
                                <li><a href="{{$globalData['socialLink']->twetter_link}}"><i
                                            class="fab fa-twitter"></i></a></li>
                                @endif

                                @if(!empty($globalData['socialLink']->linkedin_link))
                                <li><a href="{{$globalData['socialLink']->linkedin_link}}"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                @endif

                                @if(!empty($globalData['socialLink']->instagram_link))
                                <li><a href="{{$globalData['socialLink']->instagram_link}}"><i
                                            class="fab fa-instagram"></i></a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
                @if(!empty($globalData['footer_menu_left']))
                <div class="col-lg-3 col-md-3">
                    <div class="f-col-2">
                        <h6>Find It First</h6>
                        <ul class="list-unstyled footer_link_list">
                            @foreach($globalData['footer_menu_left'] as $item)
                            @if($item->type ==2)

                            <li>
                                <a href="{{$item->url}}" target="_blank">{{ $item->name }}</a>
                            </li>

                            @else
                            <li>
                                <a href="{{route('home.custom.page',$item->url)}}">{{ $item->name }}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endif


                @if(!empty($globalData['footer_menu_middle']))
                <div class="col-lg-3 col-md-3">
                    <div class="f-col-2">
                        <h6>Others</h6>
                        <ul class="list-unstyled footer_link_list">
                            @foreach($globalData['footer_menu_middle'] as $item)
                            @if($item->type ==2)

                            <li>
                                <a href="{{$item->url}}" target="_blank">{{ $item->name }}</a>
                            </li>

                            @else
                            <li>
                                <a href="{{route('home.custom.page',$item->url)}}">{{ $item->name }}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endif


                @if(!empty($globalData['footer_menu_right']))
                <div class="col-lg-3 col-md-3">
                    <div class="f-col-2">
                        <h6>Customer Care</h6>
                        <ul class="list-unstyled footer_link_list">
                            @foreach($globalData['footer_menu_right'] as $item)
                            @if($item->type ==2)

                            <li>
                                <a href="{{$item->url}}" target="_blank">{{ $item->name }}</a>
                            </li>

                            @else
                            <li>
                                <a href="{{route('home.custom.page',$item->url)}}">{{ $item->name }}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endif



            </div>
        </div>
    </footer>

    <!-- footer copy right -->
    <footer class="copy_right">
        <div class="container">
            <div class="row">
                @if(!empty($globalData['siteSetting']->copyright))
                <div class="col-lg-12 text-center">
                    <div class="copy_right_content">
                        <h4>© <a href="">{{$globalData['siteSetting']->copyright}}</a> - All rights Reserved</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </footer>

</footer>
