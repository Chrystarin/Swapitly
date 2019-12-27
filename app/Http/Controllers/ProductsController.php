<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function user()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('products.index')->with('prods', $user->products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'asc')->get();
        return view('products.index')->with('prods', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'description' => 'required',
            'reason_for_trading' => 'required',
            'desired_item' => 'required',
            'tags' => 'required',
            'media_file' => 'required'
        ]);

        
        //Handle File Upload for Profile Image
        if($request->hasFile('media_file')){
            //Get filename with the extension
            $filenameWithExt = $request->file('media_file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('media_file')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStoreProfile = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('media_file')->storeAs('public/item_images', $fileNameToStoreProfile);
        } 

        $prod = new Product;
        $prod->item_name = $request->input('item_name');
        $prod->category = $request->input('category');
        $prod->quality = $request->input('quality');
        $prod->quantity = $request->input('quantity');
        $prod->location = $request->input('location');
        $prod->description = $request->input('description');
        $prod->reason_for_trading = $request->input('reason_for_trading');
        $prod->desired_item = $request->input('desired_item');
        $prod->tags = $request->input('tags');
        if($request->hasFile('media_file')){
            $prod->media_file = $fileNameToStoreProfile;
        }
        $prod->user_id = auth()->user()->id;
        $prod->save();

        return redirect('/products/user')->with('success', 'Product posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Product::find($id);
        return view('products.show')->with('prod', $prod);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::find($id);
        return view('products.edit')->with('prod', $prod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'description' => 'required'
        ]);

        $prod = Product::find($id);
        $prod->item_name = $request->input('item_name');
        $prod->description = $request->input('description');
        $prod->save();

        return redirect('/products/user')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();
        return redirect('/products/user')->with('success', 'Product removed');
    }
}
