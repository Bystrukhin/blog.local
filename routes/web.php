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


Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'home'
]);

Route::get('/posts/create', [
    'uses'=>'PostController@create',
    'as'=>'posts.create'
]);

Route::get('/posts/tags/{tag}', [
    'uses'=>'TagController@index',
    'as'=>'tag.index'
]);

Route::get('/posts/{post}', [
    'uses'=>'PostController@show',
    'as'=>'posts.show'
]);

Route::post('/posts', [
    'uses'=>'PostController@store',
    'as'=>'posts.store'
]);

Route::post('/posts/{post}/comments', [
    'uses'=>'CommentController@store',
    'as'=>'comments.store'
]);

Route::get('/register', [
    'uses'=>'RegistrationController@create',
    'as'=>'registration.create'
]);

Route::get('/login', [
    'uses'=>'SessionsController@create',
    'as'=>'sessions.create'
]);

Route::get('/logout', [
    'uses'=>'SessionsController@destroy',
    'as'=>'sessions.destroy'
]);

Route::post('/register', [
    'uses'=>'RegistrationController@store',
    'as'=>'registration.store'
]);

Route::post('/login', [
    'uses'=>'SessionsController@store',
    'as'=>'sessions.store'
]);






