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
//LogicException

// Route::get('login','LoginController@viewLogin');
// Route::post('login','LoginController@checkLogin');

// Route::get('', function () {
//     return redirect ('');
// });

Route::get('register/a', function () {
    return view ('register/register');
});

//news
Route::get('news/create', 'NewsController@create');
Route::post('news/create', 'NewsController@store');
Route::get('news', 'NewsController@index');
Route::get('news/edit/{news}', 'NewsController@edit');
Route::post('news/update/{id}', 'NewsController@update');
Route::get('news/destroy/{news}', 'NewsController@destroy');
Route::get('news/show/{news}', 'NewsController@show')->where('id', '[0-9]+');


Route::get('product/create', 'ProductController@create');
Route::post('product/create', 'ProductController@store');

Auth::routes();

Route::get('/admin', 'AdminController@login')->name('admin');
