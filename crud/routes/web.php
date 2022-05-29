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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('shop');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']], function(){
            Route::get('admin-home', function (){
                    return view('bookkeeper.admin-home');
                  });
            Route::get('product', function (){
                          return view('bookkeeper.product');
                        })->name('product');

            Route::get('order', function (){
                          return view('bookkeeper.order');
                        })->name('order');                        

          });

// Route::get('/shop', 'HomeController@index')->name('shop');

// Route::get('/product', 'HomeController@index')->name('product');

// Route::get('/product/submit', 'ProductController@submit')->name('product');
