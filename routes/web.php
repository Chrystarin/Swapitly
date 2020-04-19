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

use App\User;
use App\Product;
use Illuminate\Support\Facades\Input;

Route::get('/', 'PagesController@index');
Route::get('/profile', 'PagesController@profile');
Route::get('/favorites', 'PagesController@favorites');
Route::get('/mytrades', 'PagesController@mytrades');
Route::get('/settings', 'PagesController@settings');
Route::get('/help', 'PagesController@help');

Route::get('/products', 'ProductsController@index');
Route::get('/products/user', 'ProductsController@user');

// Auth::routes();


////////////////////////////////////////////////
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//////////////////////////////////////////////


Route::get('/r/rate/{id}', 'RatingsController@rate');


Route::resource('profile', 'ProfilesController');
Route::resource('ratings', 'RatingsController');
Route::resource('products', 'ProductsController');

Route::any('/search',function(){
    $search = Input::get('search');

    $user = User::where('first_name','LIKE','%'.$search.'%')->orWhere('last_name','LIKE','%'.$search.'%')->orWhere('username','LIKE','%'.$search.'%')->get();
    $prod = Product::where('item_name','LIKE','%'.$search.'%')->get();

    if(count($user) > 0 || count($prod) > 0){
        if(!(count($user) > 0)){
            return view('pages.search')->withItems($prod)->withError('There are no traders results for '.$search.' found')->withQuery($search);
        }
        if(!(count($prod) > 0)){
            return view('pages.search')->withTraders($user)->withError('There are no items results for '.$search.' found')->withQuery($search);
        }
        return view('pages.search')->withTraders($user)->withItems($prod)->withQuery($search);
    }
    else {
        return view ('pages.search')->withMessage('There are no results for '.$search.' found');
    }

});