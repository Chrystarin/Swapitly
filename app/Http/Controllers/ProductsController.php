<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\ProductFile;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function user()
    {
        $products = User::find(auth()->user()->id)->products;
        return view('products.user')->with('prods', $products);
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
        $prod->save();

        User::find(auth()->user()->id)->products()->attach($prod->id);

        //Handle File Upload for Profile Image
        if($request->hasFile('media_file')){
            foreach($request->file('media_file') as $file) {
                //Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $file->getClientOriginalExtension();
                //Filename to store
                $fileNameToStoreProfile = $filename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $file->storeAs('public/item_images', $fileNameToStoreProfile);

                $product_file = new ProductFile;
                $product_file->product_id = $prod->id;
                $product_file->media_file = $fileNameToStoreProfile;
                $product_file->save();
            }
        }

        return redirect('/products')->with('success', 'Product posted');
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

    public function show_prod($item_name, $item_id){
        // echo $id.' - '.$name;
        $prod = Product::find($item_id);
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
        return view('products.edit')
        ->with('prod', $prod)
        ->with('categs', array('Accessories', 'Appliances', 'Electronics', 'Entertainment', 'Fashion', 'Gadgets', 'Hobbies', 'Stationary', 'Others'))
        ->with('quals', array('Brand New', 'Used', 'Others'));
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
        /*
        WHEN UPDATING THE PRODUCT...
        IF THE media_file FEILD IS EMPTY
            THE OLD FILES WILL STILL REMAIN
        ELSE IF THE media_file FIELD HAS FILES
            THE OLD FILES WILL BE DELETED AND REPLACED WITH LATEST FILES
        */

        $this->validate($request, [
            'item_name' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'quantity' => 'required',
            'location' => 'required',
            'description' => 'required',
            'reason_for_trading' => 'required',
            'desired_item' => 'required',
            'tags' => 'required'
        ]);
        
        $prod = Product::find($id);
        $prod->item_name = $request->input('item_name');
        $prod->category = $request->input('category');
        $prod->quality = $request->input('quality');
        $prod->quantity = $request->input('quantity');
        $prod->location = $request->input('location');
        $prod->description = $request->input('description');
        $prod->reason_for_trading = $request->input('reason_for_trading');
        $prod->desired_item = $request->input('desired_item');
        $prod->tags = $request->input('tags');
        $prod->save();

        //Handle File Upload for Profile Image
        if($request->hasFile('media_file')){
            foreach($prod->productFiles as $file) {
                unlink(public_path().'/storage/item_images/'.$file->media_file);
                $file->delete();
            }

            foreach($request->file('media_file') as $file) {
                //Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get just ext
                $extension = $file->getClientOriginalExtension();
                //Filename to store
                $fileNameToStoreProfile = $filename.'_'.time().'.'.$extension;
                //Upload Image
                $path = $file->storeAs('public/item_images', $fileNameToStoreProfile);

                $product_file = new ProductFile;
                $product_file->product_id = $prod->id;
                $product_file->media_file = $fileNameToStoreProfile;
                $product_file->save();
            }
        }

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
        foreach($prod->productFiles as $file) {
            unlink(public_path().'/storage/item_images/'.$file->media_file);
            $file->delete();
        }
        User::find(auth()->user()->id)->products()->detach($id);
        $prod->delete();
        
        return redirect('/products/user')->with('success', 'Product removed');
    }
}
