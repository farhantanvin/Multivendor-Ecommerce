<div class="customer_d_tab_left">
    <ul class="nav nav-tabs flex-column " role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="{{route('frontend.user.dashboard')}}">Customer Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('customer.edit-profile')}}">Edit Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('customer.change-password')}}">Change Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('customer.order')}}">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('customer.affiliate-product')}}">Affiliate Product</a>
        </li>
        @if(auth()->user()->user_type == 4)
        <li class="nav-item">
            <a class="nav-link @if($globalData['routeName'] == 'frontend.become.vendor') active @endif" href="{{route('frontend.become.vendor')}}">Become A Vendor</a>
        </li>
        @endif
    </ul>
</div>
