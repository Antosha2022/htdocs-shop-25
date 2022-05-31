<?php

Route::get('/', function(){return view('shop');});

//динамічна адреса детального перегляду обраного продукту
// Route::get('/product{id}', function(){return view('product-shop');});
// Route::get('/product{id}','ProductController@index')->name('product-shop');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> ['auth']], function(){



            // Route::get('admin-home', function (){
            //         return view('bookkeeper.admin-home');
            //       });

            Route::get('admin-home', 'BookkeeperController@adminHome')->name('admin-home');

            Route::get('product', 'BookkeeperController@product')->name('product');

            Route::post('product/submit','ProductController@store')->name('product-form');

            //  перегляд списку продуктів
            Route::get('/product-list',
            'ProductController@FunctionAllData')->name('product-data');

            // детальний перегляд одного запису
            Route::get('/product/all{id}',
            'ProductController@show')->name('product-data-one');



            // Route::get('order', 'BookkeeperController@order')->name('order');

          });

// Route::get('/shop', 'HomeController@index')->name('shop');

// Route::get('/product', 'HomeController@index')->name('product');

// Route::get('/product/submit', 'ProductController@submit')->name('product');
