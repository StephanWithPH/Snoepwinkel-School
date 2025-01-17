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

Route::get('/', 'HomeController@loadHomePage');

Route::get('/aboutus', 'AboutUsController@loadAboutUs');

Route::get('/product-details/{id}', 'ProductController@loadProductDetails');

Route::get('/category/{id}', 'CategoryController@loadCategory');

Route::get('/cart', 'CartController@loadCart');

Route::get('/cart/add/{id}', 'CartController@addToCart');

Route::get('/cart/remove/{id}', 'CartController@removeFromCart');

Route::post('/cart/amount', 'CartController@amountChange');

Route::post('/order/create', 'OrderController@createOrder');

Route::get('/order/confirmed', 'OrderController@createOrderConfirmed');

Route::get('/order', 'OrderController@loadOrder');

Route::get('/payment/prepare', 'PaymentController@preparePayment');

Route::post('/payment/receive', 'PaymentController@paymentReceive');


Route::get('/account', 'AccountController@loadMyAccount');
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/oldwelcome', function () {
    return view('welcome');
});

Auth::routes();
