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

Route::get('/', 'PagesController@index');
Route::get('/profile', 'PagesController@profile');
Route::get('/wishlist', 'PagesController@wishlist');
Route::get('/mytrades', 'PagesController@mytrades');
Route::get('/settings', 'PagesController@settings');
Route::get('/settings', 'PagesController@settings');

Auth::routes();

Route::resource('profile', 'ProfilesController');
Route::resource('ratings', 'RatingsController');

Route::get('/new_trade', function () {
    return view('trades.create');
});
