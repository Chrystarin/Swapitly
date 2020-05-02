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
Route::get('/my_trades', 'ProductsController@user');

Route::get('{item_name}.i.{item_id}','ProductsController@show_prod')->name('products.show');
Route::get('item_registration','ProductsController@create')->name('products.create');


Route::get('/ProductView','PagesController@ProductView');


Auth::routes();

Route::get('/r/rate/{id}', 'RatingsController@rate');


Route::resource('profile', 'ProfilesController');
Route::resource('ratings', 'RatingsController');
Route::resource('p', 'ProductsController');


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
