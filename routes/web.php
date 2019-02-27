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

Route::get('/', 'SiteController@index')->name('index');

Auth::routes();




Route::get('/about', 'SiteController@about')->name('about');

Route::get('/contact', 'SiteController@contact')->name('contact');

Route::get('/services', 'SiteController@services')->name('services');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::post('/login', 'Auth\LoginController@login')->name('login');

//*****************************************************************************************************************************************
//protected routes by the middleware
Route::group(['middleware' => 'checkval'], function() {

Route::get('admin_page', 'AdminController@admin_index')->name('admin');


//*****************************************************************************************************************************************



Route::get('admin/users/index', 'UserController@index');

Route::get('admin/users/create', 'UserController@create');

Route::post('admin/users/create', 'UserController@store');

Route::get('admin/users/update/{id}', 'UserController@edit');

Route::post('admin/users/update/{id}', 'UserController@update');

Route::get('admin/users/delete/{id}', 'UserController@delete');

//*****************************************************************************************************************************************


Route::get('admin/categories/index', 'CategoryController@index');

Route::get('admin/categories/create', 'CategoryController@create');

Route::post('admin/categories/create', 'CategoryController@store');

Route::get('admin/categories/update/{id}', 'CategoryController@edit');

Route::post('admin/categories/update/{id}', 'CategoryController@update');

Route::get('admin/categories/delete/{id}', 'CategoryController@delete');
//*****************************************************************************************************************************************

Route::get('admin/products/index', 'ProductController@index');

Route::get('admin/products/create', 'ProductController@create');

Route::post('admin/products/create', 'ProductController@store');

Route::get('admin/products/update/{id}', 'ProductController@edit');

Route::post('admin/products/update/{id}', 'ProductController@update');

Route::get('admin/products/delete/{id}', 'ProductController@delete');

//*****************************************************************************************************************************************



Route::get('admin/sliders/index', 'SliderController@index');

Route::get('admin/sliders/create', 'SliderController@create');

Route::post('admin/sliders/create', 'SliderController@store');

Route::get('admin/sliders/update/{id}', 'SliderController@edit');

Route::post('admin/sliders/update/{id}', 'SliderController@update');

Route::get('admin/sliders/delete/{id}', 'SliderController@delete');

});