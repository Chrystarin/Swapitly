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
Route::get('/settings', 'PagesController@settings');

Route::get('/products', 'ProductsController@index');
Route::get('/products/user', 'ProductsController@user');
Route::get('/products/create', 'ProductsController@create');

Auth::routes();

Route::resource('profile', 'ProfilesController');
Route::resource('ratings', 'RatingsController');
Route::resource('products', 'ProductsController');

// Route::get('/new_trade', function () {
//     return view('trades.create');
// });

Route::any('/search',function(){
    $category = Input::get('category');
    $search = Input::get('search');

    switch($category){
        case "Items":
            $prod = Product::where('item_name','LIKE','%'.$search.'%')->get();
            if(count($prod) > 0){
                return view('pages.search')->withDetails($prod)->withQuery($search)->withCategory($category);
            }
            else {
                return view ('pages.search')->withMessage('There are no results for '.$search.' found');
            }
            break;
        case "Traders":
            $user = User::where('first_name','LIKE','%'.$search.'%')->orWhere('last_name','LIKE','%'.$search.'%')->orWhere('username','LIKE','%'.$search.'%')->orWhere('email','LIKE','%'.$search.'%')->get();
            if(count($user) > 0){
                return view('pages.search')->withDetails($user)->withQuery($search)->withCategory($category);
            }
            else {
                return view ('pages.search')->withMessage('There are no results for '.$search.' found');
            }
            break;
        default:
            return view ('pages.search');
            break;
    }

});
