<?php

namespace App\Http\Controllers;
use App\User;
use App\Auth;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('profile.edit')->with('profile', $user);
    }


    public function update(Request $request, $id)
    { 
        $this->validate($request, [
            
            'email' => 'required|string|email|max:255',
            // 'password' => 'required|string|min:6|confirmed',
            // 'username' => 'required|string|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:255',

            
        ]);

        $user = User::find($id);
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        // $user->username = $request->input('username');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birthday = $request->input('birthday');
        $user->gender = $request->input('gender');
        $user->mobile_number = $request->input('mobile_number');
        $user->address = $request->input('address');
        $user->description = $request->input('description');
        $user->save();

        return redirect('/profile/{{Auth::user()->id}}');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile.show')->with('profile', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
