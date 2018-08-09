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



Route::get('/', 'ArticleController@index');
Route::get('/articles/{quantity?}', 'ArticleController@index')->where('quantity','[0-9]+')->name('articlesQuantity');
Route::post('/articles/quantity/send', 'ArticleController@setQuantity')->name('articlesQuantitySend');
Route::get('/article/{id}', 'ArticleController@show')->name('articleShow');
Route::post('/article/sendcomment', 'CommentController@store')->name('commentSend');

//admin panel
Route::group(['prefix'=>'admin'],   function() {

	Route::get('/','Admin\ArticleController@index')->name('adminArticleIndex');
	Route::get('/article/create','Admin\ArticleController@create')->name('adminArticleCreate');
	Route::post('/article/create','Admin\ArticleController@store')->name('adminArticleStore');
	Route::get('/article/{id}','Admin\ArticleController@show')->where('id','[0-9]+')->name('adminArticleShow');
	Route::get('/article/{id}/edit','Admin\ArticleController@edit')->where('id','[0-9]+')->name('adminArticleEdit');
	Route::post('/article/{id}/edit','Admin\ArticleController@update')->where('id','[0-9]+')->name('adminArticleUpdate');
	Route::get('/article/{id}/destroy','Admin\ArticleController@destroy')->where('id','[0-9]+')->name('adminArticleDestroy');

	Route::get('/tags','Admin\TagController@index')->name('adminTagIndex');
	Route::get('/tag/create','Admin\TagController@create')->name('adminTagCreate');
	Route::post('/tag/create','Admin\TagController@store')->name('adminTagStore');
	Route::get('/tag/{id}','Admin\TagController@show')->where('id','[0-9]+')->name('adminTagShow');
	Route::get('/tag/{id}/edit','Admin\TagController@edit')->where('id','[0-9]+')->name('adminTagEdit');
	Route::post('/tag/{id}/edit','Admin\TagController@update')->where('id','[0-9]+')->name('adminTagUpdate');
	Route::get('/tag/{id}/destroy','Admin\TagController@destroy')->where('id','[0-9]+')->name('adminTagDestroy');

	Route::get('/categoryes', 'Admin\CategoryController@index')->name('adminCategoryIndex');
	Route::get('/category/create', 'Admin\CategoryController@create')->name('adminCategoryCreate');
	Route::post('/category/create', 'Admin\CategoryController@store')->name('adminCategoryStore');
	Route::get('/category/{id}', 'Admin\CategoryController@show')->where('id','[0-9]+')->name('adminCategoryShow');
	Route::get('/category/{id}/edit', 'Admin\CategoryController@edit')->where('id','[0-9]+')->name('adminCategoryEdit');
	Route::post('/category/{id}/edit', 'Admin\CategoryController@update')->where('id','[0-9]+')->name('adminCategoryUpdate');
	Route::get('/category/{id}/destroy', 'Admin\CategoryController@destroy')->where('id','[0-9]+')->name('adminCategoryDestroy');

});

Auth::routes();