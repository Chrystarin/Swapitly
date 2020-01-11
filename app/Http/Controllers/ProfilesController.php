<?php

namespace App\Http\Controllers;
use App\User;
use App\Rating;
use App\Auth;
use DB;
use App\Quotation;

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
            
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'string|nullable',
            'profile_image' => 'image|nullable',
            'cover_image' => 'image|nullable'
            
        ]);

        //Handle File Upload for Profile Image
        if($request->hasFile('profile_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreProfile = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStoreProfile);
        } 

        //Handle File Upload for Cover Image
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreCover = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStoreCover);
        } 
        

        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birthday = $request->input('birthday');
        $user->gender = $request->input('gender');
        $user->mobile_number = $request->input('mobile_number');
        $user->address = $request->input('address');
        $user->description = $request->input('description');
        if($request->hasFile('profile_image')){
            $user->profile_image = $fileNameToStoreProfile;
        }
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStoreCover;
        }
        $user->save();

        $user = User::find($id);
        return view('profile.show')->with('users', $user);
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
        $rating = Rating::find($id);
        
        $rates = DB::table('ratings')
        ->select('ratings.rating','ratings.review','ratings.rater_id', 'users.username')
        ->join('users','users.id','=','ratings.rater_id')
        ->where(['ratings.user_id' => $id])
        ->get();

        $average = DB::table('ratings')
        ->select(DB::raw('AVG(rating) as Average'))
        ->where(['ratings.user_id' => $id])
        ->get();

        $totalCount = DB::table('ratings')
        ->select(DB::raw('COUNT(rating) as Total'))
        ->where(['ratings.user_id' => $id])
        ->get();
 

        return view('profile.show')
        ->with('users', $user)
        ->with('ratings', $rates)
        ->with('average', $average)
        ->with('totalCount', $totalCount);
 
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
