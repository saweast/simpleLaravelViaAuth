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

Route::get('/blog', 'BlogsController@index');
Route::get('/blog/{user}', 'BlogsController@userBlogs');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/users', 'UsersController@index');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}/save', 'UsersController@save');
Route::get('/users/{user}/delete', 'UsersController@delete');
