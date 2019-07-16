<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->middleware('checkReader');

Route::get('/category','CategoryController@index')->middleware('checkAdmin');
Route::get('/category/show/{id}','CategoryController@show')->middleware('checkAdmin');
Route::get('/category/delete/{id}','CategoryController@destroy')->middleware('checkAdmin');
Route::get('/category/add','CategoryController@create')->middleware('checkAdmin');
Route::post('/category/add','CategoryController@store')->middleware('checkAdmin');
Route::get('/category/edit/{id}','CategoryController@edit')->middleware('checkAdmin');
Route::post('/category/edit/{id}','CategoryController@update')->middleware('checkAdmin');

Route::get('/book','BookController@index')->middleware('checkPublisher');
Route::get('/book/add','BookController@create')->middleware('checkPublisher');
Route::post('/book/add','BookController@store')->middleware('checkPublisher');
Route::get('/book/edit/{id}','BookController@edit')->middleware('checkPublisher');
Route::post('/book/edit/{id}','BookController@update')->middleware('checkPublisher');
Route::get('/book/show/{id}','BookController@show');
Route::get('/book/delete/{id}','BookController@destroy')->middleware('checkPublisher');
Route::get('/book/{id}/download','BookController@downloadBook')->name("book.download");
Route::get('/book/{id}/review','BookController@reviewBook')->name("book.review");


Route::get('/admin/book','AdminController@showBooks')->middleware('checkAdmin');
Route::post('/admin/book','AdminController@approvedBooks')->middleware('checkAdmin');


Route::get("/publisher",'PublisherController@index');
Route::get("/publisher/show/{id}",'PublisherController@index');

Route::get('/reader','ReaderController@index');

//Route::get('/post','PostController@index');
Route::post('/post/add','PostController@store');
Route::get('/post/delete/{id}','PostController@destroy');
Route::post('/post/edit','PostController@update');

Route::post("/comment/add","CommentController@store");
Route::get("/comment/delete/{id}","CommentController@destroy");
Route::post("/comment/edit","CommentController@update");


Route::post('/rate/add','RateController@store');