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

Route::get('/admin/users/index', 'AdminController@get_users')->name('admin');

Route::get('/admin/users/create', 'AdminController@get_users')->name('admin');

Route::get('/admin/users/update', 'AdminController@get_users')->name('admin');

Route::get('/admin/users/delete', 'AdminController@get_users')->name('admin');

//*****************************************************************************************************************************************

});