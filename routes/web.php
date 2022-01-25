<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'IndexController@home');
Route::get('o_nama', 'AboutController@about');
Route::get('ecommerce', 'EcommerceListController@list');

Route::get('test', 'CartController@cart');
Route::get('poruci', 'CartController@poruci');
Route::get('list/{category?}', 'ListController@home');
Route::get('proizvod/{category?}/{product?}', 'ProductController@home');
Route::get('kontakt', 'KontaktController@home');









Route::post('store', 'AdminProductController@store');
Route::post('product_update', 'AdminEditProductController@update');
Route::post('images_update', 'AdminEditProductController@images_update');
Route::get('delete_image/{id?}', 'AdminEditProductController@delete_image');

Route::get('blog', function () {
    return view('blog');
});
Route::get('blog_single', function () {
    return view('blog_single');
});
Route::get('korpa', function () {
    return view('korpa');
});

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::get('/admin/list_product/{category?}', 'AdminListProductsController@home');
Route::get('/admin/edit_product/{category?}/{product?}', 'AdminEditProductController@home');
Route::get('/admin/delete_product/{id?}', 'AdminEditProductController@delete_product');

Route::get('/admin/home_page', 'AdminHomePageController@home');

Route::post('admin/update_slide_banner', 'AdminHomePageController@update_slide_banner');
Route::get('admin/delete_slide_banner_image/{image?}', 'AdminHomePageController@delete_slide_banner_image');
Route::post('admin/add_slide_banner_image', 'AdminHomePageController@add_slide_banner_image');

Route::post('admin/update_top_right_banner', 'AdminHomePageController@update_top_right_banner');
Route::get('admin/delete_top_right_banner_image', 'AdminHomePageController@delete_top_right_banner_image');
Route::post('admin/add_top_right_banner_image', 'AdminHomePageController@add_top_right_banner_image');

Route::post('admin/update_second_right_banner', 'AdminHomePageController@update_second_right_banner');
Route::get('admin/delete_second_right_banner_image', 'AdminHomePageController@delete_second_right_banner_image');
Route::post('admin/add_second_right_banner_image', 'AdminHomePageController@add_second_right_banner_image');

Route::post('admin/update_video_banner', 'AdminHomePageController@update_video_banner');
Route::get('admin/delete_video_banner_image', 'AdminHomePageController@delete_video_banner_image');
Route::post('admin/add_video_banner_image', 'AdminHomePageController@add_video_banner_image');


Route::get('/admin/abouts', 'AdminAboutsController@home');

Route::post('admin/update_abouts', 'AdminAboutsController@update_abouts');
Route::get('admin/delete_about_top_banner_image', 'AdminAboutsController@delete_about_top_banner_image');
Route::post('admin/add_about_top_banner_image', 'AdminAboutsController@add_about_top_banner_image');
Route::get('admin/delete_about_right_banner_image', 'AdminAboutsController@delete_about_right_banner_image');
Route::post('admin/add_about_right_banner_image', 'AdminAboutsController@add_about_right_banner_image');
