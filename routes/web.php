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
/*posts Routes*/
Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');
Route::post('/posts','PostsController@store');
/*comments Routes*/


Route::get('/posts/comments/{id}/add','CommentsController@add');
Route::get('/posts/comments/{id}','CommentsController@show');
Route::post('/posts/comments/{id}','CommentsController@store');
Route::get('posts/comments/{id}/{idcomment}/addupdate','CommentsController@update');
Route::post('posts/comments/{id}/{commentid}','CommentsController@storeupdate');
/*Route::get('/posts/comments/{id}','CommentsController@store');*/








