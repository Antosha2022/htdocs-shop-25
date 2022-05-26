<?php


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cosmos', function () {
    return view('cosmos');
})->name('cosmos');

Route::get('/task', function () {
    return view('task');
})->name('task');

Route::get('/task-sold', function (){
  return view('task-sold');
})->name('task-sold');


// можлівість редагувати записи - перехід до того самого запису
Route::get('/contact/all{id}/update',
'ContactController@FunctionUpdateMessage')->name('contact-update');

Route::post('/contact/all{id}/update',
'ContactController@FunctionUpdateMessageSubmit')->name('contact-update-submit');

// видалення запису
Route::get('/contact/all{id}/delete',
'ContactController@FunctionDeleteMessage')->name('contact-delete');

// детальний перегляд одного запису
Route::get('/contact/all{id}',
'ContactController@FunctionShowOneMessage')->name('contact-data-one');

//для перевірки, чи перейшов користувач використовуєм метод get
Route::get('/contact/all',
'ContactController@FunctionAllData')->name('contact-data');

// для обробки повідомлень використовую метод post та звертаємось до створеного контролера та виклика функції FunctionSubmit
Route::post('/contact/submit',
'ContactController@FunctionSubmit')->name('contact-form');

// вірші Кобзаря
Route::get('/cobzar', function (){
  return view('cobzar');
 })->name('cobzar');

 Route::get('/cobzar/all{id}/update',
 'CobzarController@FunctionUpdateVirsh')->name('virsh-update');

 Route::post('/cobzar/all{id}/update',
 'CobzarController@FunctionUpdateVirshSubmit')->name('virsh-update-submit');

 // видалення запису
 Route::get('/cobzar/all{id}/delete',
 'CobzarController@FunctionDeleteVirsh')->name('virsh-delete');

 // детальний перегляд одного запису
 Route::get('/cobzar/all{id}',
 'CobzarController@FunctionShowOneVirsh')->name('one-virsh');

 //для перевірки, чи перейшов користувач використовуєм метод get
 Route::get('/cobzar/all',
 'CobzarController@FunctionAllVirshi')->name('virsh-data');

 // для обробки повідомлень використовую метод post та звертаємось до створеного контролера та виклика функції FunctionSubmit
 Route::post('/cobzar/submit',
 'CobzarController@FunctionSubmit')->name('cobzar');

 // Route::get('/cobzar/all',
 // 'CobzarController@FunctionRandomVirsh')->name('cobzar');
 //
