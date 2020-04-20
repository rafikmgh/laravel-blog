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
    Route::get('/posts','PostsController@index')->name('posts.index');
    Route::get('/posts/create','PostsController@create')->name('posts.create');
    Route::get('/posts/{id}','PostsController@show')->name('posts.show');
    Route::post('/posts','PostsController@store')->name('posts.store');
    Route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
    Route::post('/posts/{id}','PostsController@update')->name('posts.update');
    Route::get('/posts/{id}/delete','PostsController@delete')->name('posts.delete');


/*comments Routes*/


    Route::get('/posts/comments/{id}/add','CommentsController@add')->name('comments.add');
    Route::get('/posts/comments/{id}','CommentsController@show')->name('comments.show');
    Route::post('/posts/comments/{id}','CommentsController@store')->name('comments.store');
    Route::get('posts/comments/{id}/{idcomment}/addupdate','CommentsController@edit')->name('comments.edit');
    Route::post('posts/comments/{id}/{commentid}','CommentsController@update')->name('comments.update');
    Route::get('posts/comments/{id}/{commentid}/delete','CommentsController@delete')->name('comments.delete');










