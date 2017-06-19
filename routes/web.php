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

// Route::get('', function () {
//     return redirect ('');
// });

Route::get('/', function () {
    return view ('register/register');
});

//news
Route::get('news/create', 'NewsController@create');
Route::post('news/create', 'NewsController@store');
Route::get('news', 'NewsController@index');
Route::get('news/edit/{news}', 'NewsController@edit');
Route::post('news/update/{news}', 'NewsController@update');
Route::get('news/destroy/{news}', 'NewsController@destroy');
Route::get('news/show/{news}', 'NewsController@show')->where('id', '[0-9]+');


Route::get('product/create', 'ProductController@create');
Route::post('product/create', 'ProductController@store');
Route::get('product', 'ProductController@index');
Route::get('product/categories/{name}', 'ProductController@indexByCategories');
Route::get('product/edit/{products}', 'ProductController@edit');
Route::post('product/update/{products}', 'ProductController@update');
Route::get('product/destroy/{products}', 'ProductController@destroy');
Route::get('product/show/{products}', 'ProductController@show')->where('id', '[0-9]+');

Route::get('categories/create', 'CategoriesController@create');
Route::post('categories/create', 'CategoriesController@store');
Route::get('categories', 'CategoriesController@index');
Route::get('categories/edit/{categories}', 'CategoriesController@edit');
Route::post('categories/update/{categories}', 'CategoriesController@update');
Route::get('categories/destroy/{categories}', 'CategoriesController@destroy');
Route::get('categories/show/{categories}', 'CategoriesController@show')->where('id', '[0-9]+');


Auth::routes();

Route::get('/admin', 'AdminController@login')->name('admin');
