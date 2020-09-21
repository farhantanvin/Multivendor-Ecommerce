<li class="fl-menu-item">
    <a href="{{route('vendor.order')}}" class="fl-menu-link @if($routeName == 'vendor.order') active @endif">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Order</span>
    </a><!-- fl-menu-link -->
</li>

<li class="fl-menu-item">
    <a href="{{route('vendor.shop.setting')}}"
        class="fl-menu-link @if($routeName == 'vendor.shop.setting') active @endif">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Shop Setting</span>
    </a><!-- fl-menu-link -->
</li>

<li class="fl-menu-item">
    <a href="#"
        class="fl-menu-link with-sub @if($routeName == 'pages.index'||$routeName == 'navigation.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Content Management</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('vendor-page.index')}}" class="sub-link">Page</a></li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'product.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Product</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item">
            <a href="{{route('products.create')}}" class="sub-link">Create Product</a>
        </li>
        <li class="sub-item">
            <a href="{{route('products.index')}}" class="sub-link">Product List</a>
        </li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#"
        class="fl-menu-link with-sub @if($routeName == 'approved-review.index' ||$routeName == 'approved-question.index'|| $routeName == 'approved-question.create') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Product Review</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('approved-review.index')}}" class="sub-link">Pending Review</a>
        <li class="sub-item"><a href="{{route('approved-question.index')}}" class="sub-link">Pending Q/A</a>
        </li>
    </ul>
</li>
