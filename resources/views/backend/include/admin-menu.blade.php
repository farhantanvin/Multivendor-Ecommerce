<li class="fl-menu-item">
    <a href="{{route('main.dashboard')}}" class="fl-menu-link">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Dashboard</span>
    </a><!-- fl-menu-link -->
</li><!-- fl-menu-item -->
{{--<li class="fl-menu-item">--}}
    {{--<a href="" class="fl-menu-link">--}}
        {{--<i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>--}}
        {{--<span class="menu-item-label">Mailbox</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
{{--</li><!-- fl-menu-item -->--}}
{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Cards &amp; Widgets</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="#" class="sub-link">Dashboard</a></li>--}}
        {{--<li class="sub-item"><a href="#" class="sub-link">Blog &amp; Social Media</a></li>--}}
        {{--<li class="sub-item"><a href="#" class="sub-link">Shop &amp; Listing</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}
{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Extra</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('extra.form1')}}" class="sub-link">Table</a></li>--}}
        {{--<li class="sub-item"><a href="{{route('extra.form2')}}" class="sub-link">Form</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{-- @if(!empty($aclList[6][1])) --}}
{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">User Management</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('user.index')}}" class="sub-link">List</a></li>--}}
        {{--<li class="sub-item"><a href="{{route('user.create')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Role Management</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('role.index')}}" class="sub-link">List</a></li>--}}
        {{--<li class="sub-item"><a href="{{route('role.create')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Role Access Control</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('role.access')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">User Access Control</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('user.access')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Module Management</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('module.index')}}" class="sub-link">List</a></li>--}}
        {{--<li class="sub-item"><a href="{{route('module.create')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

{{--<li class="fl-menu-item">--}}
    {{--<a href="#" class="fl-menu-link with-sub">--}}
        {{--<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>--}}
        {{--<span class="menu-item-label">Activity Management</span>--}}
    {{--</a><!-- fl-menu-link -->--}}
    {{--<ul class="fl-menu-sub">--}}
        {{--<li class="sub-item"><a href="{{route('activity.index')}}" class="sub-link">List</a></li>--}}
        {{--<li class="sub-item"><a href="{{route('activity.create')}}" class="sub-link">Create</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}

<li class="fl-menu-item">
    <a href="#"
       class="fl-menu-link with-sub @if($routeName == 'category.index'||$routeName == 'brand.index')active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Catalog Management</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('category.index')}}" class="sub-link">Categories</a></li>
        <li class="sub-item"><a href="{{route('brand.index')}}" class="sub-link">Brand</a></li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#"
       class="fl-menu-link with-sub @if($routeName == 'pages.index'||$routeName == 'navigation.index' ||$routeName == 'social.link.edit') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Content Management</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('pages.index')}}" class="sub-link">Page</a></li>
        <li class="sub-item"><a href="{{route('navigation.index')}}" class="sub-link">Navigation</a></li>
        <li class="sub-item"><a href="{{route('site.setting.edit')}}" class="sub-link">Site Settings</a></li>
        <li class="sub-item"><a href="{{route('social.link.edit')}}" class="sub-link">Social Link</a></li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'social-login-access.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Social Login</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('social-login-access.index')}}" class="sub-link">Social Login Access</a>
        </li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'home.setup.edit' ||$routeName == 'home-page-banner.index' ||$routeName == 'advertisement.edit'||$routeName == 'advertisement.second.edit') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Home Setup</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('home-page-banner.index')}}" class="sub-link">Home Page Banner</a></li>
        <li class="sub-item"><a href="{{route('home.setup.edit')}}" class="sub-link">Seleted Category</a>
        </li>
        <li class="sub-item"><a href="{{route('advertisement.edit',"promotion_offer_first")}}"
                                class="sub-link">Promotion First</a></li>
        <li class="sub-item"><a href="{{route('advertisement.edit',"promotion_offer_second")}}"
                                class="sub-link">Promotion
                Second</a></li>
        <li class="sub-item"><a href="{{route('advertisement.edit',"promotion_offer_third")}}"
                                class="sub-link">Promotion
                Third</a></li>
        <li class="sub-item"><a href="{{route('advertisement.edit',"banner_portrait_top")}}"
                                class="sub-link">Advertisemet 1</a></li>
        <li class="sub-item"><a href="{{route('advertisement.edit',"banner_portrait_bottom")}}"
                                class="sub-link">Advertisemet 2</a></li>
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

<li class="fl-menu-item">
    <a href="#"
       class="fl-menu-link with-sub @if($routeName == 'offer.index'||$routeName == 'offer.edit'||$routeName == 'offer.create' ||$routeName == 'offer-sale.index'|| $routeName == 'offer-sale.edit'||$routeName == 'offer-sale.create') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Offer</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('offer.index')}}" class="sub-link">Offer</a>
        <li class="sub-item"><a href="{{route('offer-sale.index')}}" class="sub-link">Offer Sale</a>
        </li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'admin.order') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Order</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item">
            <a href="{{route('admin.order')}}" class="sub-link">Order List</a>
        </li>
    </ul>
</li>



<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">References</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item"><a href="{{route('discount.index')}}" class="sub-link">Discount</a></li>
        <li class="sub-item"><a href="{{route('shipping-option.index')}}" class="sub-link">Shipping Option</a></li>
        <li class="sub-item"><a href="{{route('shop-setting.index')}}" class="sub-link">Shop Setting</a></li>
        <li class="sub-item"><a href="{{route('vendor-page.index')}}" class="sub-link">Vendor Pages</a></li>
        {{--<li class="sub-item"><a href="{{route('translation-language.index')}}" class="sub-link">Translation Languages</a></li>--}}
        <li class="sub-item"><a href="{{route('countries.index')}}" class="sub-link">Countries</a></li>
        <li class="sub-item"><a href="{{route('state.index')}}" class="sub-link">States</a></li>
        <li class="sub-item"><a href="{{route('city.index')}}" class="sub-link">Cities</a></li>
        <li class="sub-item"><a href="{{route('store-review.index')}}" class="sub-link">Store Review</a></li>
        {{--<li class="sub-item"><a href="{{route('backend.order.view')}}" class="sub-link">Orders</a></li>--}}
    </ul>
</li>



<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'payment-gateway.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Payment Setting</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item">
            <a href="{{route('payment-gateway.index')}}" class="sub-link">Payment Gateway</a>
        </li>
        <li class="sub-item">
            <a href="{{route('currencys.index')}}" class="sub-link">Currency</a>
        </li>
    </ul>
</li>

<li class="fl-menu-item">
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'email-configuration.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Email</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item">
            <a href="{{route('email-configuration.index')}}" class="sub-link">Email Configuration</a>
        </li>
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
    <a href="#" class="fl-menu-link with-sub @if($routeName == 'vendor-subscription-plan.index') active @endif">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Vendor</span>
    </a><!-- fl-menu-link -->
    <ul class="fl-menu-sub">
        <li class="sub-item">
            <a href="{{route('vendor-subscription-plan.index')}}" class="sub-link">Vendor Subscription Plan</a>
        </li>
        {{--<li class="sub-item">--}}
        {{--<a href="{{route('products.index')}}" class="sub-link">Product List</a>--}}
        {{--</li>--}}
    </ul>
</li>


@include("backend.include.farhan")
{{--@include("backend.include.lemon")--}}
{{--@include("backend.include.partho")--}}
{{--@include("backend.include.miraj")--}}
