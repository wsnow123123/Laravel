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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/social', 'SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'SocialAuthController@handleProviderCallback')->name('social.callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
