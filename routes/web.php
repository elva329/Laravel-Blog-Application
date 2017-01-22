<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// Route::group(['middleware' => ['web']], function () {

    //


// Route::get('auth/login',['as' =>'login','uses' => 'Auth\LoginController@getLogin']);
// Route::post('auth/login','Auth\LoginController@postLogin');
// Route::get('auth/logout',['as' =>'logout','uses' => 'Auth\LoginController@getLogout']);

// Route::get('auth/register','Auth\RegisterController@getRegister');
// Route::post('auth/register','Auth\RegisterController@postRegister');

// //password reset routes
// Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
// Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');
// Route::post('password/reset','Auth\ResetPasswordController@reset');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

//password reset routes

//categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);

//Comments
Route::post('comments/{post_id}',['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' =>'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' =>'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' =>'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' =>'comments.delete']);



Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('contact' ,'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('about','PagesController@getAbout');
Route::get('/','PagesController@getIndex');
Route::resource('posts','PostController');



// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');


