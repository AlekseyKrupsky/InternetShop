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

Route::get('/', 'WelcomeController@index')->name('welcome');


Route::get('/good/{id}','GoodsController@show')->name('good_show');
Route::get('/goods','GoodsController@index')->name('all_goods');

Route::post('/good/{id}','CommentController@add')->name('good_show');
Route::get('/about','AboutController@index')->name('about');

Route::get('/category/{id}','SectionController@index')->name('category');
Route::get('/section/{id}','SectionController@show')->name('section_show');

Route::get('/neworder/{id}','OrderController@create')->name('new_order');
Route::post('/neworder/{id}','OrderController@store')->name('new_order');

Route::get('/cart','CartController@show')->name('cart');
Route::get('/cart/add/{id?}','CartController@add')->name('cart_add');
Route::get('/cart/del/{id?}','CartController@destroy')->name('cart_del');

Route::prefix('admin')->group(function (){

    Route::get('/','Admin\AdminController@index')->name('admin');

    Route::prefix('category')->namespace('Admin')->group(function (){
        Route::get('/','CategoryController@index')->name('adm_cat');
        Route::get('/edit/{id}','CategoryController@edit')->name('adm_cat_each');
        Route::get('/create','CategoryController@create')->name('adm_cat_create');
        Route::post('/','CategoryController@store');
        Route::patch('/edit/{id}','CategoryController@update')->name('adm_cat_each');
        Route::delete('/edit/{id}','CategoryController@destroy')->name('adm_cat_each');
    });

    /////
    Route::prefix('goods')->namespace('Admin')->group(function (){
        Route::get('/','GoodsController@index')->name('adm_good');
        Route::get('/edit/{id}','GoodsController@edit')->name('adm_good_edit');
        Route::get('/create','GoodsController@create')->name('adm_good_create');
        Route::post('/','GoodsController@store');
        Route::patch('/edit/{id}','GoodsController@update');
        Route::delete('/edit/{id}','GoodsController@destroy')->name('adm_good_edit');
    });

    Route::prefix('photos')->namespace('Admin')->group(function (){
        Route::get('/','PhotoController@index')->name('adm_photo');
        Route::get('/create','PhotoController@create')->name('adm_photo_create');
        Route::post('/{id?}','PhotoController@store');
        Route::get('/edit/{id}','PhotoController@edit')->name('adm_photo_edit');
        Route::delete('/edit/{id}','PhotoController@destroy')->name('adm_photo_edit');
        Route::patch('/edit/{id}','PhotoController@update')->name('adm_photo_edit');
    });

    Route::get('/comments','Admin\CommentController@index')->name('adm_comments');
    Route::get('/comments/{id}','Admin\CommentController@destroy')->name('adm_comment_del');
    Route::get('/about','Admin\AboutController@edit')->name('adm_about');
    Route::post('/about','Admin\AboutController@store')->name('adm_about');

    Route::prefix('address')->namespace('Admin')->group(function (){
        Route::get('/','AddressController@index')->name('adm_address');
        Route::post('/create/{id?}','AddressController@store')->name('adm_add_create');
        Route::get('/edit/{id}','AddressController@edit')->name('adm_add_edit');
        Route::patch('/edit/{id}','AddressController@update')->name('adm_add_edit');
        Route::delete('/edit/{id}','AddressController@destroy')->name('adm_add_edit');
        Route::get('/list/{id}','AddressController@show')->name('adm_add_list');
    });

    Route::prefix('subsection')->namespace('Admin')->group(function (){
        Route::get('/','SubsectionController@index')->name('adm_sub');
        Route::get('/edit/{id}','SubsectionController@edit')->name('adm_sub_each');
        Route::get('/create','SubsectionController@create')->name('adm_sub_create');
        Route::post('/','SubsectionController@store');
        Route::patch('/edit/{id}','SubsectionController@update')->name('adm_sub_each');
        Route::delete('/edit/{id}','SubsectionController@destroy')->name('adm_sub_each');
    });


});