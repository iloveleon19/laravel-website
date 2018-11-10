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
    // return view('welcome');
    return view('home');
});

Route::get('/getFootData', 'footController@getFootData');
Route::get('/getSocialData', 'socialController@getSocialData');
Route::get('/getjumbotronData', 'jumbotronController@getjumbotronData');
Route::get('/getPicImage', 'imageController@getPicImage');
Route::get('/getSlideImage', 'imageController@getSlideImage');
Route::get('/getCardData', 'cardController@getCardData');
Route::get('/getCarouselData', 'carouselController@getCarouselData');
Route::get('/getBrandData', 'headerController@getBrandData');
Route::get('/getMenuItem', 'headerController@getMenuItem');
Route::get('/getSearchItems', 'headerController@getSearchItems');


// Route::get('skills', function () {
//     return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
// });

// Route::get('/profile/{id}', 'ProfileController@showID');
// Route::get('/list', 'ProfileController@listPage');
// Route::get('/listDataGet', 'ProfileController@listDataGet');
// Route::post('/listDataPost', 'ProfileController@listDataPost');

// Route::resource('data', 'DataController');

// 只對應到 index、show
// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);

// // 反向設定，只對應到 index、show
// Route::resource('photos', 'PhotoController')->except([
//     'create', 'store', 'update', 'destroy'
// ]);
