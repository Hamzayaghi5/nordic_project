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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/logout', 'Auth\LoginController@logout')->name('admin');


Route::post('/login', 'Auth\LoginController@login')->name('admin');
Route::group(['middleware' => 'checkval'], function() {
//*****************************************************************************************************************************************

Route::get('/admin_page', 'AdminController@admin_index')->name('admin');


//*****************************************************************************************************************************************

Route::get('/admin/users/index', 'UserController@get_all');

Route::get('/admin/users/create', 'UserController@create');

Route::get('/admin/users/update/{id}', 'UserController@edit');

Route::post('/admin/users/update/{id}', 'UserController@update');

Route::get('/admin/users/delete/{id}', 'UserController@delete');

//*****************************************************************************************************************************************


Route::get('/admin/categories/index', 'CategoryController@get_all');

Route::get('/admin/categories/create', 'CategoryController@create');

Route::get('/admin/categories/update/{id}', 'CategoryController@edit');

Route::post('/admin/categories/update/{id}', 'CategoryController@update');

Route::get('/admin/categories/delete/{id}', 'CategoryController@delete');
//*****************************************************************************************************************************************

Route::get('/admin/products/index', 'ProductController@get_all');

Route::get('/admin/products/create', 'ProductController@create');

Route::get('/admin/products/update/{id}', 'ProductController@edit');

Route::post('/admin/products/update/{id}', 'ProductController@update');

Route::get('/admin/products/delete/{id}', 'ProductController@delete');

});