<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hero', 'WelcomeController@home');
Route::get('/about', 'WelcomeController@about');
Route::get('/service', 'WelcomeController@service');
Route::get('/portfolio', 'WelcomeController@portfolio');
Route::get('/testimonial', 'WelcomeController@testimonial');
Route::get('/subscribe', 'WelcomeController@subscribe');
Route::post('subscribed', 'WelcomeController@subscribed')->name('subscibed');
Route::get('/contact', 'WelcomeController@contact');