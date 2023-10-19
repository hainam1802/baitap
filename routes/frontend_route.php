<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Library\Helpers;



Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\RegisterController@register');

    Route::get('/tim-kiem','ProductController@getSearch');
    Route::get('/item-list',[\App\Http\Controllers\Frontend\ProductController::class,'category']);
    Route::get('/item-list/{slug}',[\App\Http\Controllers\Frontend\ProductController::class,'getDetail']);
    Route::get('/cart/{id}',[\App\Http\Controllers\Frontend\OrderController::class,'getCart']);
    Route::get('/checkout/{id}',[\App\Http\Controllers\Frontend\OrderController::class,'getCheckout']);
    Route::post('/post-order', 'OrderController@postOrderNow');
    Route::get('/', 'HomeController@index')->name('index');

//    Route::get('/',function(){
//        return view('frontend.pages.index');
//
//    })->name('index');

    Route::get('/order',function(){
        return view('frontend.pages.order');

    })->name('detail');

    Route::get('/search', function () {
        return view('frontend.pages.search');
    });

});
