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

// Auth::routes();

Route::get('/', function () {
    return view('backend.index');
})->middleware('auth');

Route::get('/login', function () {
    return view('backend.index');
})->name('login');

Route::get('/new_post', function () {
    return view('backend.index');
})->middleware('auth');

Route::get('/manage_post', function () {
    return view('backend.index');
})->middleware('auth');

Route::get('/set_pwd', function () {
    return view('backend.index');
})->middleware('auth');

Route::post('/login', 'Backend\LoginController@login');
Route::post('/logout', 'Backend\LoginController@logout');
Route::post('/set_pwd', 'Backend\SetPasswordController@set_password')->middleware('auth');

Route::resource('/posts', 'Backend\PostsController')->middleware('auth');
