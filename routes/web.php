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


Route::get('/',['uses' => 'ArticleController@index']);
Route::get('/articles/{quantity?}',['uses' => 'ArticleController@index'])->where('quantity','[0-9]+')->name('articlesQuantity');
Route::post('/articles/quantity/send',['uses' => 'ArticleController@setQuantity'])->name('articlesQuantitySend');
Route::get('/article/{id}',['uses' => 'ArticleController@show'])->name('articleShow');
Route::post('/article/{id}/comment',['uses' => 'CommentController@store'])->name('commentSend');

//admin panel
Route::group(['prefix'=>'admin'],   function() {

	Route::get('/',['uses' => 'Admin\ArticleController@index','as' => 'adminArticleIndex']);
	Route::get('/article/create',['uses' => 'Admin\ArticleController@create','as' => 'adminArticleCreate']);
	Route::post('/article/create',['uses' => 'Admin\ArticleController@store','as' => 'adminArticleStore']);
	Route::get('/article/{id}',['uses' => 'Admin\ArticleController@show','as' => 'adminArticleShow'])->where('id','[0-9]+');
	Route::get('/article/{id}/edit',['uses' => 'Admin\ArticleController@edit','as' => 'adminArticleEdit'])->where('id','[0-9]+');
	Route::post('/article/{id}/edit',['uses' => 'Admin\ArticleController@update','as' => 'adminArticleUpdate'])->where('id','[0-9]+');
	Route::get('/article/{id}/destroy',['uses' => 'Admin\ArticleController@destroy','as' => 'adminArticleDestroy'])->where('id','[0-9]+');

	Route::get('/tags',['uses' => 'Admin\TagController@index','as' => 'adminTagIndex']);
	Route::get('/tag/create',['uses' => 'Admin\TagController@create','as' => 'adminTagCreate']);
	Route::post('/tag/create',['uses' => 'Admin\TagController@store','as' => 'adminTagStore']);
	Route::get('/tag/{id}',['uses' => 'Admin\TagController@show','as' => 'adminTagShow'])->where('id','[0-9]+');
	Route::get('/tag/{id}/edit',['uses' => 'Admin\TagController@edit','as' => 'adminTagEdit'])->where('id','[0-9]+');
	Route::post('/tag/{id}/edit',['uses' => 'Admin\TagController@update','as' => 'adminTagUpdate'])->where('id','[0-9]+');
	Route::get('/tag/{id}/destroy',['uses' => 'Admin\TagController@destroy','as' => 'adminTagDestroy'])->where('id','[0-9]+');


	Route::get('/categoryes',['uses' => 'Admin\CategoryController@index','as' => 'adminCategoryIndex']);
	Route::get('/category/create',['uses' => 'Admin\CategoryController@create','as' => 'adminCategoryCreate']);
	Route::post('/category/create',['uses' => 'Admin\CategoryController@store','as' => 'adminCategoryStore']);
	Route::get('/category/{id}',['uses' => 'Admin\CategoryController@show','as' => 'adminCategoryShow'])->where('id','[0-9]+');
	Route::get('/category/{id}/edit',['uses' => 'Admin\CategoryController@edit','as' => 'adminCategoryEdit'])->where('id','[0-9]+');
	Route::post('/category/{id}/edit',['uses' => 'Admin\CategoryController@update','as' => 'adminCategoryUpdate'])->where('id','[0-9]+');
	Route::get('/category/{id}/destroy',['uses' => 'Admin\CategoryController@destroy','as' => 'adminCategoryDestroy'])->where('id','[0-9]+');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
