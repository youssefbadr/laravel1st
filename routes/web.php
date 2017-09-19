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



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/posts', 'postsController@index');

Route::get('/posts/new', 'postsController@create');

Route::post('/posts/submit', 'postsController@store');

Route::get('/posts/edit/{postid}', 'postsController@edit');

Route::post('/posts/editsubmit', 'postsController@update');