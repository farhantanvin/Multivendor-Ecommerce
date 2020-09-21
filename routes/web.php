<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//include('parvez.php');
include('frontend.php');

Route::get('/admin-login','AdminLoginController@loginView')->name('admin.login');
Route::post('/admin-login-submit','AdminLoginController@loginSubmit')->name('admin.login.submit');
Route::get('order/invoice/{order_No}','OrderController@orderInvoice')->name('frontend.order.invoice');
Route::group(['middleware'=>'authCheck'],function (){
	
	Route::get("/main-dashboard","DashboardController@index")->name('main.dashboard');

    Route::resource("/activity","ActivityController");

    Route::resource("/module","ModuleController");

    Route::resource("/role","RoleController");

    Route::resource("/user","UserController");

    Route::get('role-access',"RoleAccessController@index")->name('role.access');
    Route::post('roleAclSetup', 'RoleAccessController@roleAclSetup');
    Route::post('roleacl', 'RoleAccessController@save');

    Route::get('user-access', 'UserAccessController@index')->name('user.access');
    Route::post('userAclSetup', 'UserAccessController@userAclSetup');
    Route::post('useracl', 'UserAccessController@save');

    Route::get('/backend',function(){
        return view('backend.demo');
    });

    Route::get('/logout','AdminLoginController@logout')->name('admin.logout');

    Route::get('/dashboard',function(){
        return view('backend.demo');
    })->name('backend.dashboard');
    
    Route::get('/form',function(){
        return view('backend.form');
    });

    Route::resource("/discount", "DiscountController");
    Route::post('get-discount-user-list', 'DiscountController@getDiscountUserList')->name('discount-user.list');
    Route::resource("/shipping-option", "ShippingOptionController");
    Route::resource("/shop-setting", "ShopSettingController");
    Route::get("/vendor/shop-setting", "ShopSettingController@vendor")->name('vendor.shop.setting');
    Route::get("/show-logo-banner/{action}/{id}", "ShopSettingController@showLogoBanner")->name("show-logo-banner.show");
    Route::resource("/vendor-page", "VendorPageController");
    Route::resource("/translation-language", "TranslationLanguageController");
    Route::resource("/countries", "CountriesController");
    Route::resource("/state", "StateController");
    Route::resource("/city", "CityController");

    Route::resource("store-review","StoreReviewController");

    Route::get('orders','OrderController@index')->name('backend.order.view');

    Route::get('orders-details/{id}','OrderController@orderDetails')->name('backend.order.details');

    Route::post('orders-status-change','OrderController@orderStatusChange')->name('backend.orders-status-change');

    Route::resource('payment-gateway','PaymentGatewayController');
    Route::resource('currencys','CurrencyController');
    Route::resource('email-configuration','EmailConfigurationController');
    Route::resource('products','ProductController');

    Route::get('products-gallery/{slug}','ProductGalleryController@galleryImage')->name('product.gallery');
    Route::post('products-gallery/product.gallery.store','ProductGalleryController@galleryImageStore')->name('product.gallery.store');
    Route::get('products-gallery/delete/{id}','ProductGalleryController@galleryImageDelete')->name('product.gallery.delete');

    //product route start
    Route::get('partho-product/create','ParthoProductController@ProductCreate')->name('product_create');
    Route::get('partho-product/list','ParthoProductController@ProductList')->name('product_list');
    Route::get('partho-product/details/{id}','ParthoProductController@productDetails')->name('product_details');
    Route::get('partho-product/edit/{id}','ParthoProductController@productEdit')->name('product_edit');
    Route::post('partho-product/store/','ParthoProductController@productStore')->name('product_store');
    Route::post('partho-product/update/','ParthoProductController@productUpdate')->name('product_update');
    Route::get('partho-import/product','ParthoProductController@importProduct')->name('import_product');
    //product route end

    Route::resource('vendor-subscription-plan','VendorSubscriptionPlansController');

    Route::get('order','OrderController@order')->name('admin.order');
    Route::get('order/view/{order_id}','OrderController@orderView')->name('admin.order.view');

    Route::get('vendor/orders','OrderController@vendorOrder')->name('vendor.order');
    Route::get('vendor/orders-details/{id}','OrderController@orderVendorDetails')->name('vendor.order.details');
    Route::get('vendor/order/invoice/{order_No}','OrderController@orderVendorInvoice')->name('vendor.order.invoice');

//Ajax Route
    Route::post('get/subcategory','AjaxController@subCategory')->name('get.subcategory');
    Route::post('/change/order/status','AjaxController@changeOrderStatus')->name('order.status.change');

Route::resource("/category", "CategoryController");
Route::resource("/brand", "BrandController");
Route::resource("/pages", "PageController");
Route::resource("/navigation", "NavigationController");
Route::resource("/home-page-banner", "HomePageBannerController");
Route::resource("/social-login-access", "SocialLoginAccessController");
Route::resource("/approved-review", "ReviewApprovedController");
Route::resource("/approved-question", "QuestionApprovedController");
Route::resource("/offer", "OfferController");
Route::resource("/offer-sale", "OfferSellController");


Route::get('/social_link', "SocialLinkController@edit")->name('social.link.edit');
Route::put('/social_link/update', "SocialLinkController@update")->name('social.link.update');

Route::get('/site-setting', "SiteSettingController@edit")->name('site.setting.edit');
Route::put('/site-setting/update', "SiteSettingController@update")->name('site.setting.update');

Route::get('/advertisement/{option}', "AdvertisementController@edit")->name('advertisement.edit');
Route::put('/advertisement/{id}', "AdvertisementController@update")->name('advertisement.update');

Route::get('/home-setup', "HomeSetupController@edit")->name('home.setup.edit');
Route::put('/home-setup/{id}', "HomeSetupController@update")->name('home.setup.update');
//include('farhan.php');
});
//include('lemon.php');

