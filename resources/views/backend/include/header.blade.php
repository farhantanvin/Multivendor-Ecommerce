<div class="fl-header">
    <div class="fl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="fas fa-bars"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="fas fa-bars"></i></a></div>
    </div><!-- fl-header-left -->
    <div class="fl-header-right">
        <nav class="nav">
            {{--<div class="dropdown">--}}
                {{--<a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">--}}
                    {{--<i class="icon ion-ios-email-outline tx-24"></i>--}}
                    {{--<!-- start: if statement -->--}}
                    {{--<span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>--}}
                    {{--<!-- end: if statement -->--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-header">--}}
                    {{--<div class="dropdown-menu-label">--}}
                        {{--<label>Messages</label>--}}
                        {{--<a href="">+ Add New Message</a>--}}
                    {{--</div><!-- d-flex -->--}}

                    {{--<div class="media-list">--}}
                        {{--<!-- loop starts here -->--}}
                        {{--<a href="" class="media-list-link">--}}
                            {{--<div class="media">--}}
                                {{--<img src="https://via.placeholder.com/500" alt="" class="img-fluid">--}}
                                {{--<div class="media-body">--}}
                                    {{--<div>--}}
                                        {{--<p>Donna Seay</p>--}}
                                        {{--<span>2 minutes ago</span>--}}
                                    {{--</div><!-- d-flex -->--}}
                                    {{--<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>--}}
                                {{--</div>--}}
                            {{--</div><!-- media -->--}}
                        {{--</a>--}}
                        {{--<!-- loop ends here -->--}}
                        {{--<a href="" class="media-list-link read">--}}
                            {{--<div class="media">--}}
                                {{--<img src="https://via.placeholder.com/500" alt="" class="img-fluid">--}}
                                {{--<div class="media-body">--}}
                                    {{--<div>--}}
                                        {{--<p>Samantha Francis</p>--}}
                                        {{--<span>3 hours ago</span>--}}
                                    {{--</div><!-- d-flex -->--}}
                                    {{--<p>My entire soul, like these sweet mornings of spring.</p>--}}
                                {{--</div>--}}
                            {{--</div><!-- media -->--}}
                        {{--</a>--}}
                        {{--<a href="" class="media-list-link read">--}}
                            {{--<div class="media">--}}
                                {{--<img src="https://via.placeholder.com/500" alt="" class="img-fluid">--}}
                                {{--<div class="media-body">--}}
                                    {{--<div>--}}
                                        {{--<p>Robert Walker</p>--}}
                                        {{--<span>5 hours ago</span>--}}
                                    {{--</div><!-- d-flex -->--}}
                                    {{--<p>I should be incapable of drawing a single stroke at the present moment...</p>--}}
                                {{--</div>--}}
                            {{--</div><!-- media -->--}}
                        {{--</a>--}}
                        {{----}}
                        {{--<div class="dropdown-footer">--}}
                            {{--<a href=""><i class="fas fa-angle-down"></i> Show All Messages</a>--}}
                        {{--</div>--}}
                    {{--</div><!-- media-list -->--}}
                {{--</div><!-- dropdown-menu -->--}}
            {{--</div><!-- dropdown -->--}}
            {{--<div class="dropdown">--}}
                {{--<a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">--}}
                    {{--<i class="icon ion-ios-bell-outline tx-24"></i>--}}
                    {{--<!-- start: if statement -->--}}
                    {{--<span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>--}}
                    {{--<!-- end: if statement -->--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-header">--}}
                    {{--<div class="dropdown-menu-label">--}}
                        {{--<label>Notifications</label>--}}
                        {{--<a href="">Mark All as Read</a>--}}
                    {{--</div><!-- d-flex -->--}}

                    {{--<div class="media-list">--}}
                        {{--<!-- loop starts here -->--}}
                        {{--<a href="" class="media-list-link read">--}}
                            {{--<div class="media">--}}
                                {{--<img src="https://via.placeholder.com/500" alt="" class="img-fluid">--}}
                                {{--<div class="media-body">--}}
                                    {{--<p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>--}}
                                    {{--<span>October 03, 2017 8:45am</span>--}}
                                {{--</div>--}}
                            {{--</div><!-- media -->--}}
                        {{--</a>--}}
                        {{----}}
                        {{--<a href="" class="media-list-link read">--}}
                            {{--<div class="media">--}}
                                {{--<img src="https://via.placeholder.com/500" alt="" class="img-fluid">--}}
                                {{--<div class="media-body">--}}
                                    {{--<p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>--}}
                                    {{--<span>October 01, 2017 6:08pm</span>--}}
                                {{--</div>--}}
                            {{--</div><!-- media -->--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-footer">--}}
                            {{--<a href=""><i class="fas fa-angle-down"></i> Show All Notifications</a>--}}
                        {{--</div>--}}
                    {{--</div><!-- media-list -->--}}
                {{--</div><!-- dropdown-menu -->--}}
            {{--</div><!-- dropdown -->--}}
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{auth()->user()->name}}</span>
                    <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle img-fluid" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">{{auth()->user()->name}}</h6>
                        <p>{{auth()->user()->email}}</p>
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        
                        <li><a href="{{route('admin.logout')}}" class="text-center"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <!--<div class="navicon-right">-->
            <!--<a id="btnRightMenu" href="" class="pos-relative">-->
                <!--<i class="icon ion-ios-chatboxes-outline"></i>-->
                <!--&lt;!&ndash; start: if statement &ndash;&gt;-->
                <!--<span class="square-8 bg-danger pos-absolute t-10 r&#45;&#45;5 rounded-circle"></span>-->
                <!--&lt;!&ndash; end: if statement &ndash;&gt;-->
            <!--</a>-->
        <!--</div>&lt;!&ndash; navicon-right &ndash;&gt;-->
    </div><!-- fl-header-right -->
</div><!-- fl-header -->
