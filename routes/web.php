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


Route::get('/galleries', 'SiteController@gallery')->name('gallery');




Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');





Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::get('/product single/{id}', 'ProductController@show')->name('product');

Route::get('/gallery/{category_id}', 'SiteController@gallery')->name('gallery');
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

//*****************************************************************************************************************************************

Route::get('admin/testimonials/index', 'TestimonialController@index');

Route::get('admin/testimonials/create', 'TestimonialController@create');

Route::post('admin/testimonials/create', 'TestimonialController@store');

Route::get('admin/testimonials/update/{id}', 'TestimonialController@edit');

Route::post('admin/testimonials/update/{id}', 'TestimonialController@update');

Route::get('admin/testimonials/delete/{id}', 'TestimonialController@delete');

//*****************************************************************************************************************************************
Route::get('admin/contact/index', 'ContactController@index');

Route::get('admin/contact/update/{id}', 'ContactController@edit');

Route::post('admin/contact/update/{id}', 'ContactController@update');


//*****************************************************************************************************************************************

Route::get('admin/galleries/index', 'GalleryController@index');

Route::get('admin/galleries/create', 'GalleryController@create');

Route::post('admin/galleries/create', 'GalleryController@store');

Route::get('admin/galleries/update/{id}', 'GalleryController@edit');

Route::post('admin/galleries/update/{id}', 'GalleryController@update');

Route::get('admin/galleries/delete/{id}', 'GalleryController@delete');


//*****************************************************************************************************************************************

Route::get('admin/gallery_images/index/{gallery_id}', 'GalleryImageController@index');

Route::get('admin/gallery_images/create/{gallery_id}', 'GalleryImageController@create');

Route::post('admin/gallery_images/create/{gallery_id}', 'GalleryImageController@store');

Route::get('admin/gallery_images/update/{id}', 'GalleryImageController@edit');

Route::post('admin/gallery_images/update/{id}', 'GalleryImageController@update');

Route::get('admin/gallery_images/delete/{id}', 'GalleryImageController@delete');
});