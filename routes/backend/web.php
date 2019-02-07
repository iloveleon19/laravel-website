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

Auth::routes();

Route::get('/', function () {
    return view('backend.index');
})->middleware('auth');

Route::get('/login', function () {
    return view('backend.index');
})->name('login');

Route::post('/login', 'Backend\LoginController@login');
Route::post('/logout', 'Backend\LoginController@logout');
