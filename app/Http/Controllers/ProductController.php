<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        // dd();
        $product =Product::where('user_id',Auth::user()->id)->get();
        return view('dashboard',['product'=>$product]);
    }

    public function edit(Product $product,$id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
        ]);

        if($request->id == null){
            $product = new Product;
            $product->user_id =Auth::user()->id;
            $product->product_name =$request->product_name;
            $product->category =$request->category;
            $product->price=$request->price;
            $product->product_slug = Str::Slug($request->product_name);
            $product->discount=$request->discount;
            $product->description=$request->description;
            $product->save();
        }
        else{

            $product = Product::find($request->id);
            $product->product_name= $request->product_name;
            $product->category =$request->category;
            $product->price=$request->price;
            $product->product_slug = Str::Slug($request->product_name);
            $product->discount=$request->discount;
            $product->description=$request->description;
            $product->save();
        }

        return response()->json($product);

    }

    public function destroy(Product $product, Request $request,$id)
    {
        $product::where('id',$id)->delete();
        return response()->json('success');
    }
    public function show_detail($id){
     $data = Product::find($id);
        return view('show_detail', ['data' =>$data]);
    }
}
