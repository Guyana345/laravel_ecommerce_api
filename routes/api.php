<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//api route for proucts
Route::apiResource('/products', 'ProductController');

//api route for product reviews
Route::group(['prefix'=>'products'], function(){

    Route::apiResource('/{product}/reviews','ReviewController');
});
