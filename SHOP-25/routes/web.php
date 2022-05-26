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



Route::get('/', function () {
    return view('Shop');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product500', function () {
    return view('product500');
});

Route::get('/product30i', function () {
    return view('product30i');
});

Route::get('/product30h', function () {
    return view('product30h');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin-home', function () {
//     return view('admin-home');
// });

Route::group(['middleware'=>['auth']], function(){
            Route::get('/admin-home', function (){
                    return view('admin-home');
                  });
          });
