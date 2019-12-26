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
Route::get('/wishlist', 'PagesController@wishlist');
Route::get('/mytrades', 'PagesController@mytrades');
Route::get('/settings', 'PagesController@settings');

Route::get('/products', 'ProductsController@index');
Route::get('/products/user', 'ProductsController@user');
Route::get('/products/create', 'ProductsController@create');

Auth::routes();

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
