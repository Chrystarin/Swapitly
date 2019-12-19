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

Route::get('/profile', 'PagesController@profile');
Route::get('/wishlist', 'PagesController@wishlist');
Route::get('/mytrades', 'PagesController@mytrades');
Route::get('/settings', 'PagesController@settings');

Auth::routes();



Route::resource('profile', 'ProfilesController');

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('profile/{user}',  ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
// Route::patch('profile/{user}/update',  ['as' => 'profile.update', 'uses' => 'UserController@update']);
