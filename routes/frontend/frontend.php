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
    return view('frontend.index');
});

Route::get('/getFootData', 'Frontend\FootController@getFootData');
Route::get('/getSocialData', 'Frontend\SocialController@getSocialData');
Route::get('/getjumbotronData', 'Frontend\JumbotronController@getjumbotronData');
Route::get('/getPicImage', 'Frontend\ImageController@getPicImage');
Route::get('/getSlideImage', 'Frontend\ImageController@getSlideImage');
Route::get('/getCardData', 'Frontend\CardController@getCardData');
Route::get('/getCarouselData', 'Frontend\CarouselController@getCarouselData');
Route::get('/getBrandData', 'Frontend\HeaderController@getBrandData');
Route::get('/getMenuItem', 'Frontend\HeaderController@getMenuItem');
Route::get('/getSearchItems', 'Frontend\HeaderController@getSearchItems');
