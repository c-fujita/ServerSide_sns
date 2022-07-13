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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'PostsController@index');
Route::post('/index', 'PostsController@index');

Route::get('auth/login', 'HomeController@login');

Route::get('/create-form', 'PostsController@createForm');

Route::post('post/create', 'PostsController@create');

Route::get('post/{id}/edit-form', 'PostsController@editForm');

Route::post('post/edit', 'PostsController@edit');

Route::get('post/{id}/delete', 'PostsController@delete');
