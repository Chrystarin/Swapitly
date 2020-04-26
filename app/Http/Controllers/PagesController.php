<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }

    public function favorites(){
        return view('pages.favorites');
    }

    public function mytrades(){
        return view('pages.mytrades');
    }

    public function settings(){
        return view('pages.settings');
    }

    public function help(){
        return view('pages.help');
    }
    public function ProductView(){
        return view('products.ProductView');
    }
}
