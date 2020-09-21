<?php

Route::get('/extra_form1', 'ExtraController@form1')->name('extra.form1');
Route::get('/extra_form2', 'ExtraController@form2')->name('extra.form2');
Route::get('/single_product', 'ExtraController@single_product')->name('extra.single_product');
Route::get('/search_page', 'ExtraController@search_page')->name('extra.search_page');
Route::get('/vandor_page', 'ExtraController@vandor_page')->name('extra.vandor_page');
Route::get('/customer_dashboard', 'ExtraController@customer_dashboard')->name('extra.customer_dashboard');
Route::get('/contact_page', 'ExtraController@contact_page')->name('extra.contact_page');
Route::get('/checkout1', 'ExtraController@checkout1')->name('extra.checkout1');
Route::get('/checkout2', 'ExtraController@checkout2')->name('extra.checkout2');
Route::get('/checkout3', 'ExtraController@checkout3')->name('extra.checkout3');
Route::get('/checkout4', 'ExtraController@checkout4')->name('extra.checkout4');
Route::get('/cartpage1', 'ExtraController@cartpage1')->name('extra.cartpage1');

