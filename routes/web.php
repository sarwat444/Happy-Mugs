<?php

use Illuminate\Support\Facades\Route;

// Front Routes
Route::get('/', function () {return view('index');});
Route::get('/shop/product_details' , 'indexController@productdetails') ; 
Route::get('/shop/model_maker' , 'indexController@modeldetails') ; 






Route::group(['prefix' => 'offers','namespace' =>'Offers'], function () {
    Route::get('/', 'OfferController@index')->name('offers.all');
    Route::get('details/{offer_id}', 'OfferController@show')->name('offers.show');
});

Route::get('get-checkout-id', 'PaymentProviderController@getCheckOutId')->name('offers.checkout');
