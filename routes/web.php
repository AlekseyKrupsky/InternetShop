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

Route::get('/category/{id}','GoodsController@index')->name('category');
Route::get('/good/{id}','GoodsController@show')->name('good_show');
Route::post('/good/{id}','CommentController@add')->name('good_show');
Route::get('/about','AboutController@index')->name('about');



Route::prefix('admin')->group(function (){

    Route::get('/','Admin\AdminController@index')->name('admin');

    Route::prefix('category')->group(function (){
        Route::get('/','Admin\CategoryController@index')->name('adm_cat');
        Route::get('/edit/{id}','Admin\CategoryController@edit')->name('adm_cat_each');
        Route::get('/create','Admin\CategoryController@create')->name('adm_cat_create');
        Route::post('/','Admin\CategoryController@store');
        Route::patch('/edit/{id}','Admin\CategoryController@update')->name('adm_cat_each');
        Route::delete('/edit/{id}','Admin\CategoryController@destroy')->name('adm_cat_each');
    });

    /////
    Route::prefix('goods')->group(function (){
        Route::get('/','Admin\GoodsController@index')->name('adm_good');
        Route::get('/edit/{id}','Admin\GoodsController@edit')->name('adm_good_edit');
        Route::get('/create','Admin\GoodsController@create')->name('adm_good_create');
        Route::post('/','Admin\GoodsController@store');
        Route::patch('/edit/{id}','Admin\GoodsController@update');
        Route::delete('/edit/{id}','Admin\GoodsController@destroy')->name('adm_good_edit');
    });

    Route::prefix('photos')->group(function (){
        Route::get('/','Admin\PhotoController@index')->name('adm_photo');
        Route::get('/create','Admin\PhotoController@create')->name('adm_photo_create');
        Route::post('/{id?}','Admin\PhotoController@store');
        Route::get('/edit/{id}','Admin\PhotoController@edit')->name('adm_photo_edit');
        Route::delete('/edit/{id}','Admin\PhotoController@destroy')->name('adm_photo_edit');
        Route::patch('/edit/{id}','Admin\PhotoController@update')->name('adm_photo_edit');
    });

    Route::get('/comments','Admin\CommentController@index')->name('adm_comments');
    Route::get('/comments/{id}','Admin\CommentController@destroy')->name('adm_comment_del');
    Route::get('/about','Admin\AboutController@edit')->name('adm_about');
    Route::post('/about','Admin\AboutController@store')->name('adm_about');

    Route::prefix('address')->group(function (){
        Route::get('/','Admin\AddressController@index')->name('adm_address');
        Route::post('/create/{id?}','Admin\AddressController@store')->name('adm_add_create');
        Route::get('/edit/{id}','Admin\AddressController@edit')->name('adm_add_edit');
        Route::patch('/edit/{id}','Admin\AddressController@update')->name('adm_add_edit');
        Route::delete('/edit/{id}','Admin\AddressController@destroy')->name('adm_add_edit');
        Route::get('/list/{id}','Admin\AddressController@show')->name('adm_add_list');
    });

    Route::prefix('subsection')->group(function (){
        Route::get('/','Admin\SubsectionController@index')->name('adm_sub');
        Route::get('/edit/{id}','Admin\SubsectionController@edit')->name('adm_sub_each');
        Route::get('/create','Admin\SubsectionController@create')->name('adm_sub_create');
        Route::post('/','Admin\SubsectionController@store');
        Route::patch('/edit/{id}','Admin\SubsectionController@update')->name('adm_cat_each');
        Route::delete('/edit/{id}','Admin\SubsectionController@destroy')->name('adm_cat_each');
    });


});