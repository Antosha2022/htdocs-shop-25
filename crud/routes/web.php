<?php

Route::get('/', function(){return view('shop');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']], function(){

            // Route::get('admin-home', function (){
            //         return view('bookkeeper.admin-home');
            //       });

            Route::get('admin-home', 'BookkeeperController@adminHome')->name('admin-home');

            Route::get('product', 'BookkeeperController@product')->name('product');

            Route::post('product/check', 'ProductController@store')->name('product-form');



            // Route::get('order', 'BookkeeperController@order')->name('order');

          });

// Route::get('/shop', 'HomeController@index')->name('shop');

// Route::get('/product', 'HomeController@index')->name('product');

// Route::get('/product/submit', 'ProductController@submit')->name('product');
