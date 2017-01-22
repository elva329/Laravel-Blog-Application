<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::post('contact' ,'PagesController@getContact');

Route::get('/', function () {
    return view('welcome');
    // echo'Welcome';
});

// Route::get('foo', function () {
//     return 'Hello World';
// });


// Route::get('about', function () {
//     return view('about');
//     // echo'about me';
// });

// Route::get('hello/{name}',function($name){
// 	echo 'hello there' .$name;
// });

// //create an item
// Route::post('test', function(){
// 	echo 'post';
// 	});

// // read an item
// Route::get('test',function(){
// 	echo '<form method ="post" action = "test">';
// 	echo '<input type = "submit">';
// 	echo '<input type = "hidden" value = "delete" name = "_method">';
// 	echo '</form>';
// 	});

// //update an item
// Route::put('test',function(){
// 	echo 'put';
// });

// //delete an item
// route::delete('test',function(){
// 	echo 'delete';
// 	});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
