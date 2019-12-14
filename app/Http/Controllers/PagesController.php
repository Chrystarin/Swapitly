<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index(){
    //     $title = 'Home';
    //     //return view('pages.index', compact('title'));
    //     return view('pages.index')->with('title', $title);
    // }

    public function profile(){
        return view('pages.profile');
    }

    public function wishlist(){
        return view('pages.wishlist');
    }

    public function mytrades(){
        return view('pages.mytrades');
    }

    public function settings(){
        return view('pages.settings');
    }

    // public function services(){
    //     $title = 'Services';
    //     $data = array(
    //         'title' => 'Services',
    //         'services' => ['Web Design', "Programming", 'SEO']
    //     );
    //     return view('pages.services')->with($data);
    // }
}
