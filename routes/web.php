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
// Route::post('/loginasd', 'LoginController@login');


//admin
Route::get('', function () {
    return redirect('/home');
});
//user of admin
Route::get('/user/list', 'UserController@list');
Route::get('/user/create', 'UserController@create_user');
Route::post('/user/create', 'UserController@create_store');
Route::get('/user/edit_user/{users}', 'UserController@edit_user');
Route::post('/user/edit_user/{users}', 'UserController@update_user');

//create edit destroy
Route::get('/user/register', 'UserController@index');
Route::get('/user/register', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/edit/{users}', 'UserController@edit');
Route::get('/user/password/edit/{users}', 'UserController@editpassword');
Route::post('/user/update/password/{users}', 'UserController@updatepassword');
Route::post('/user/update/{users}', 'UserController@update');
Route::get('/user/destroy/{users}', 'UserController@destroy');
//login
Route::get('/user/login', 'LoginController@index');
Route::post('/user/login', 'LoginController@login');
Route::get('/logout', 'LoginController@Logout');

//news
Route::get('/news/create', 'NewsController@create');
Route::post('/news/create', 'NewsController@store');
Route::get('/news/list', 'NewsController@index');
Route::get('/news/edit/{news}', 'NewsController@edit');
Route::post('/news/update/{news}', 'NewsController@update');
Route::get('/news/destroy/{news}', 'NewsController@destroy');
Route::get('/news/show/{news}', 'NewsController@show')->where('id', '[0-9]+');
//blog
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/create', 'BlogController@store');
Route::get('/blog/list', 'BlogController@index');
Route::get('/blog/edit/{blogs}', 'BlogController@edit');
Route::post('/blog/update/{blogs}', 'BlogController@update');
Route::get('/blog/destroy/{blogs}', 'BlogController@destroy');
Route::get('/blog/show/{blogs}', 'BlogController@show')->where('id', '[0-9]+');
//about_us
Route::get('/about_us/create', 'AboutController@create');
Route::post('/about_us/create', 'AboutController@store');
Route::get('/about_us/list', 'AboutController@index');
Route::get('/about_us/edit/{abouts}', 'AboutController@edit');
Route::post('/about_us/update/{abouts}', 'AboutController@update');
Route::get('/about_us/destroy/{abouts}', 'AboutController@destroy');
Route::get('/about_us/show/{abouts}', 'AboutController@show')->where('id', '[0-9]+');
//product
Route::get('/product/create', 'ProductController@create');
Route::post('/product/create', 'ProductController@store');
Route::get('/product/list', 'ProductController@index');
Route::get('/product/categories/{name}', 'ProductController@indexByCategories')->name('products');
Route::get('/product/edit/{products}', 'ProductController@edit');
Route::post('/product/update/{products}', 'ProductController@update');
Route::get('/product/destroy/{products}', 'ProductController@destroy');
Route::get('/product/show/{products}', 'ProductController@show')->where('id', '[0-9]+');
//categories
Route::get('/categories/create', 'CategoriesController@create');
Route::post('/categories/create', 'CategoriesController@store');
Route::get('/categories/list', 'CategoriesController@index');
Route::get('/categories/edit/{categories}', 'CategoriesController@edit');
Route::post('/categories/update/{categories}', 'CategoriesController@update');
Route::get('/categories/destroy/{categories}', 'CategoriesController@destroy');
Route::get('/categories/show/{categories}', 'CategoriesController@show')->where('id', '[0-9]+');
//end_admin
//CartController
Route::post('/cart/addcart','CartController@addCart');
Auth::routes();

Route::get('/admin', 'AdminController@login')->name('admin');


//page
Route::get('/cart', 'CartController@showcart');
Route::get('/home', 'ShowControler@home');
Route::get('/contact', 'ShowControler@contact');
Route::get('/shoes', 'ShowControler@shoes');
Route::get('/trousers', 'ShowControler@trousers');
Route::get('/news', 'ShowControler@news');
Route::get('/sale', 'ShowControler@sale');
Route::get('/about', 'ShowControler@about');
Route::get('/blog', 'ShowControler@blog');
Route::get('/product/{name}', 'ShowControler@product_name');
Route::get('/product/detail/{products}', 'ShowControler@product_detail')->where('id', '[0-9]+');
Route::get('/blog/detail/{blogs}', 'ShowControler@blog_detail')->where('id', '[0-9]+');
Route::get('/news/detail/{news}', 'ShowControler@news_detail')->where('id', '[0-9]+');
Route::get('/my-account', 'ShowControler@myaccount');
