<?php
// Route::get('/', function(){return view('shop');});
Route::get('/', 'ProductController@ShopShowProducts')->name('shop');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('add.to.cart');
Route::patch('/update-cart', 'CartController@update')->name('update.cart');
Route::delete('/remove-from-cart', 'CartController@remove')->name('remove.from.cart');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{id}', 'BookkeeperController@productShop')->name('product-shop');//динамічна адреса детального перегляду обраного продукту
// Route::post('/product/{id}', 'BookkeeperController@productShopBasket')->name('product-shop-basket');
// Route::get('/basket', 'OrderController@showBasket')->name('basket');


  Route::group(['middleware'=>['auth']], function(){
            Route::get('/admin-home', 'BookkeeperController@adminHome')->name('admin-home');
            Route::get('/product', 'ProductController@addNewProduct')->name('product');
            Route::post('/product/submit','ProductController@store')->name('product-form');
            Route::get('/product-list','ProductController@FunctionAllData')->name('product-data');//  перегляд списку продуктів
            Route::get('/product-list{id}','ProductController@show')->name('product-data-one');// детальний перегляд одного запису
            Route::get('/product-list{id}/update','ProductController@updateProduct')->name('product-update');  // оновлення в 2 кроки через 2 методи
            Route::post('/product-list{id}/update/submit','ProductController@editProductSubmit')->name('product-update-submit');  // оновлення в 2 кроки через 2 метода
            Route::get('/contact/all{id}/delete','ProductController@destroyProduct')->name('product-delete');// видалення запису

            Route::get('/client', 'ClientController@addNewClient')->name('client');
            Route::post('/client/submit','ClientController@store')->name('client-form');
            Route::get('/client-list','ClientController@FunctionAllData')->name('client-data');//  перегляд списку продуктів
            Route::get('/client-list{id}','ClientController@show')->name('client-data-one');// детальний перегляд одного запису
            Route::get('/client-list{id}/update','ClientController@updateClient')->name('client-update');  // оновлення в 2 кроки через 2 методи
            Route::post('/client-list{id}/update/submit','ClientController@editClientSubmit')->name('client-update-submit');  // оновлення в 2 кроки через 2 метода
            Route::get('/client/all{id}/delete','ClientController@destroyClient')->name('client-delete');// видалення запису







          });
