<?php

Route::get('/', 'HomeController@index');
Route::prefix('category')->group(function (){
    Route::get('/{id}/show','HomeController@show');
});
// posts
Route::prefix('posts')->group(function () {
    Route::get('{id}/show', 'PostController@show');
});
// admin
Route::namespace('admin')->prefix('fewagtr3njui0q1gy3capjcq340caqvmkKASBcalLL12fq2ewqR')->group(function () {
    //index
    Route::get('/', 'HomeController@index');
    //posts
    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostController@index')->name('post');
        Route::get('{id}/show', 'PostController@show');
        Route::get('{id}/edit', 'PostController@edit');
        Route::get('{id}/delete', 'PostController@delete');
        Route::get('/create', 'PostController@create')->name('post.create');
        Route::post('/store', 'PostController@store')->name('post.store');
        Route::post('/{id}/update', 'PostController@update')->name('post.update');
    });
    //categories
    Route::prefix('categories')->group(function(){
        Route::get('/','CategoryController@index')->name('category');
        Route::get('/{id}/edit','CategoryController@edit');
        Route::get('/{id}/delete','CategoryController@delete');
        Route::get('/create','CategoryController@create')->name('category.create');
        Route::post('/store','CategoryController@store')->name('category.store');
        Route::post('/{id}/update','CategoryController@update')->name('category.update');
    });
});
//Route::namespace('admin')->prefix('fewagtr3njui0q1gy3capjcq340caqvmkKASBcalLL12fq2ewqR')->group(function(){
//    Route::prefix('categories')->group(function(){
//        Route::get('/','CategoryController@index')->name('category');
//        Route::get('/{id}/edit','CategoryController@edit');
//        Route::get('/{id}/delete','CategoryController@delete');
//        Route::get('/create','CategoryController@create')->name('category.create');
//        Route::post('/store','CategoryController@store')->name('category.store');
//        Route::post('/{id}/update','CategoryController@update')->name('category.update');
//    });
//});