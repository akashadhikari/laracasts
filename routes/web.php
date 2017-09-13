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

/*

|--------------------------------------------------------------------------
| Controller => PostsController
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
| Eloquent Model => Post
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
| Migration => create_posts_table
|--------------------------------------------------------------------------

*/

/* php artisan make:model Post -mc 

   The above command will make a 'Post' model, 'PostsController' and a migration file

*/

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create')->name('login'); // giving a named route

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');


Route::get('/', 'PostsController@index')->name('home');


Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/users', 'UsersController@index');