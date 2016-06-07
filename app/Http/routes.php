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

Route::get('/blog', 'BlogsController@index');
Route::get('/blog/{user}', 'BlogsController@userBlogs');
Route::get('/blog/{blog}/edit', 'BlogsController@edit');
Route::put('/blog/{blog}/edit', 'BlogsController@editPost');
Route::get('/createPost', 'BlogsController@make');
Route::post('/blog/create', 'BlogsController@createPost');
Route::get('/blog/{blog}/delete', 'BlogsController@deletePost');

Route::get('/users/{user}/delete', 'UsersController@delete');

Route::get('/home', 'HomeController@index');
Route::get('/users', 'UsersController@index');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}/save', 'UsersController@save');

Route::get('/publishes', 'PublishController@index');
Route::get('/publishers', 'PublisherController@index');


