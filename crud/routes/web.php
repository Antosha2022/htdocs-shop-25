<?php

Route::get('/', function(){return view('shop');});

//динамічна адреса детального перегляду обраного продукту
// Route::get('/product{id}', function(){return view('product-shop');});
// Route::get('/shop-product1','OrderController@ProductFirstShop')->name('shop-product1');
// Route::get('/shop-product2','OrderController@ProductSecondShop')->name('shop-product2');
// Route::get('/shop-product3','OrderController@ProductThirdShop')->name('shop-product3');
// Route::get('/shop-product4','OrderController@ProductFourthShop')->name('shop-product4');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

  Route::group(['middleware'=>['auth']], function(){
//////////////////////////added 02 06 2022/////////////////
//             Route::get('/admin-home', function (){ //before 02 06 2022
//                     return view('admin-home');
//                   });
//           });
// Route::group(['middleware' => 'role:admin'], function(){
//////////////////block ///////////////////////////////////

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
            Route::get('/product-list{id}',
            'ProductController@show')->name('product-data-one');

            // оновлення в 2 кроки через 2 методи
            Route::get('/product-list{id}/update',
            'ProductController@updateProduct')->name('product-update');

            Route::post('/product-list{id}/update/submit',
            'ProductController@editProductSubmit')->name('product-update-submit');

            // видалення запису
            Route::get('/contact/all{id}/delete',
            'ProductController@destroyProduct')->name('product-delete');
          });

// Route::get('/shop', 'HomeController@index')->name('shop');

// Route::get('/product', 'HomeController@index')->name('product');

// Route::get('/product/submit', 'ProductController@submit')->name('product');
