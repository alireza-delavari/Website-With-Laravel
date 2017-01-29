<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::post('/', 'HomeController@index2');

Route::get('aboutUs', 'AboutUsController@index');

Route::get('gallery', 'GalleryController@index');

Route::get('gallery/{id}', 'GalleryController@showGallery');
Route::get('contactUs', 'ContactUsController@index');
//Route::get('contactUs', function (){ return view('contactUs'); });

Route::get('welcome', function () {
    return view('welcome');
});

//Route::post('content', array('as' => 'content', 'uses' => 'HomeController@content'));