<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses' => 'ProductMarketController@getMarket'])->name('marketindex');

Route::get('airegister', ['uses' => 'UserController@getSignup'])->name('aisignup')->middleware('guest');

Route::post('airegister', ['uses' => 'UserController@postSignup']);


Route::get('signin', ['uses' => 'UserController@getSignin'])->name('aisignin')->middleware('guest');

Route::post('signin', ['uses' => 'UserController@postSignin'])->name('ailogin');


Route::get('aicenter', ['uses' => 'UserController@getDashboard'])->name('aicentern')->middleware('auth');


Route::get('ai/logout', ['uses' => 'UserController@aiLogout'])->name('systemlogout')->middleware('auth');


Route::get('add-to-aicart/{id}', ['uses' => 'ProductMarketController@getAddToCart'])->name('aicartadd');

Route::get('ai-market-cart', ['uses' => 'ProductMarketController@getCart'])->name('aimarketcart');

Route::get('ai-checkout', ['uses' => 'ProductMarketController@getCheckout'])->name('aicheckout')->middleware('auth');

Route::post('ai-checkout-submit', ['uses' => 'ProductMarketController@postCheckout'])->name('submitcheckout')->middleware('auth');

Route::get('reduce-aicart/{id}', ['uses' => 'ProductMarketController@getReduceCartOne'])->name('aicartreduce');

Route::get('deleteitem-aicart/{id}', ['uses' => 'ProductMarketController@getAiDeleteItem'])->name('deletecartitem');
