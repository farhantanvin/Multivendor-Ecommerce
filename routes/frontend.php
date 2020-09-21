<?php
Route::get("/", "HomeController@index")->name('home.index');

Route::get('/page/{slug}', 'HomeController@customPage')->name('home.custom.page');

Route::get('/user-login', 'UserLoginController@loginView')->name('user.login');
Route::post('/user-login-submit', 'UserLoginController@loginSubmit')->name('user.login.submit');
Route::post('/user-registration-submit', 'frontend\UserDashboardController@store')->name('user.registration.submit');

//forgot password
Route::get('/user-password-reset', 'frontend\PasswordResetController@passwordResetView')->name('front.forgot.password.view');
Route::post('forgot-password/send/mail', 'frontend\PasswordResetController@sendMail')->name('front.forgot.password.send');
Route::get('forgot-password/password-reset-view/{token}', 'frontend\PasswordResetController@resetForm')->name('front.forgot.password.reset.view');
Route::post('user-new-password', 'frontend\PasswordResetController@newPassword')->name('front.new.password');

//Social Login
Route::get('user/login/google', 'UserLoginController@redirectToProviderGoogle')->name('user.google.login');
Route::get('user/login/google/callback', 'UserLoginController@handleProviderGoogleCallback');
Route::get('user/login/facebook', 'UserLoginController@redirectToProvider')->name('user.facebook.login');
Route::get('user/login/facebook/callback', 'UserLoginController@handleProviderCallback');

//product related
Route::get('/product-detail/{slug}', 'frontend\ProductDetailController@index')->name('product.detail');
Route::post('/product-rating', 'frontend\ProductDetailController@productReviewStore')->name('product.rating');
Route::post('/product-comments', 'frontend\ProductDetailController@productCommentStore')->name('product.comments');

//product search
Route::get('/product-search', 'frontend\SerachController@index')->name('product.search');
Route::get('/product-search/{slug}', 'frontend\SerachController@index')->name('product.search.category');
Route::get('/product-brand/{slug}', 'frontend\SerachController@brandSearch')->name('product.search.brand');

//vendor shop
Route::get('/shop/{slug}', 'frontend\VendorShopController@index')->name('vendor.shop');
Route::get('/vendor-page/{slug}', 'frontend\VendorShopController@vendorPage')->name('vendor.page');

//Newsletter
Route::post('/newsletter', 'NewsletterController@store')->name('newsletter.store');

//minicart
Route::post('cart/add', 'frontend\CartController@cartAdd')->name('cart.add');
Route::get('cart/get', 'frontend\CartController@cartGet')->name('cart.get');
Route::get('cart/remove/{rowId}', 'frontend\CartController@removeCart')->name('cart.remove.minicart');
//minicart

//main cart
Route::get('/cart', 'frontend\CartController@index')->name('cart.index');
Route::get('/main-cart/get', 'frontend\CartController@mainCartGet')->name('main.cart.get');
Route::get('main-cart/update', 'frontend\CartController@updateMainCart')->name('main.cart.update');
Route::get('main-cart/remove/{rowId}', 'frontend\CartController@removeMainCart')->name('main.cart.remove');
//main cart

//Checkout Steps
Route::get('/checkout-step-1', 'frontend\CheckoutController@checkoutStep1')->name('checkout-step-one');
Route::post('/checkout-step-1-submit', 'frontend\CheckoutController@checkoutStep1Submit')->name('checkout-step-one-submit');
//Checkout Steps

//ajax request
Route::post('/get/state', 'AjaxController@state')->name('get-state');
//ajax request

Route::group(['middleware' => 'authCeckUser'], function () {
    //Checkout Steps
    Route::get('/checkout-step-2', 'frontend\CheckoutController@checkoutStep2')->name('checkout-step-two');
    Route::post('/checkout-step-2-submit', 'frontend\CheckoutController@checkoutStep2Submit')->name('checkout-step-two-submit');
    Route::get('/checkout-step-3', 'frontend\CheckoutController@checkoutStep3')->name('checkout-step-three');
    Route::post('/checkout-step-3-submit', 'frontend\CheckoutController@checkoutStep3Submit')->name('checkout-step-three-submit');
    Route::get('/checkout-step-4/{id}', 'frontend\CheckoutController@checkoutStep4')->name('checkout-step-four');
    Route::post('/apply/coupon', 'frontend\CheckoutController@counpon')->name('coupon.apply');
    //Checkout Steps

    Route::get("/user/dashboard", "frontend\UserDashboardController@index")->name('frontend.user.dashboard');

    Route::get('/user/dashboard/edit-profile', 'frontend\UserDashboardController@editProfile')->name('customer.edit-profile');
    Route::post('/user/dashboard/update-profile', 'frontend\UserDashboardController@updateProfile')->name('customer.update-profile');

    Route::get('/user/dashboard/change-password', 'frontend\UserDashboardController@changePassword')->name('customer.change-password');
    Route::post('/user/dashboard/change-password-submit', 'frontend\UserDashboardController@changePasswordSubmit')->name('customer.change-password.submit');

    Route::resource("/user", "UserController");
    Route::get('/user-logout', 'UserLoginController@logout')->name('user.logout');

    Route::get('/user/dashboard/order', 'frontend\OrderController@order')->name('customer.order');
    Route::get('/user/dashboard/order/view/{order_id}', 'frontend\OrderController@orderView')->name('customer.order.view');

    Route::get('/user/dashboard/affiliate-product', 'frontend\UserDashboardController@affiliateProduct')->name('customer.affiliate-product');

    Route::get('/become-vendor', 'frontend\UserDashboardController@BecomeVendor')->name('frontend.become.vendor');
    Route::post('/vendor/subscription', 'frontend\UserDashboardController@vendorSubscription')->name('frontend.vendor.subscription');

    Route::get('wishlist/add/{id}', 'frontend\WishListController@add')->name('wishlist.add');
    Route::get('wishlist/remove/{id}', 'frontend\WishListController@remove')->name('wishlist.remove');

    Route::any('paypal', 'paymentgetway\PayPalController@payWithpaypal');
    // route for check status of the payment
    Route::get('status', 'paymentgetway\PayPalController@getPaymentStatus');

    // SSL ecommerze
    Route::get('ssl-commerz', 'paymentgetway\SslcommerzController@sslCommerz')->name('frontend.ssl-commerz');
    Route::post('ssl-redirect/{action}', 'paymentgetway\SslcommerzController@sslRedirect');

    // Stripe
    Route::get('stripe-form', 'paymentgetway\StripePaymentController@stripe');
    Route::any('stripe', 'paymentgetway\StripePaymentController@stripePost')->name('stripe.post');
});
