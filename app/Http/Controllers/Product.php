<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function view(){
        return view ('index'); }

    public function Category(){
        return view ('category');
    }
    public function Category1($id){
        $products=Product::find($id);
        return view ('Category1',compact('products'));
    }
     public function Category2($id){
        $products=Product::find($id);
        return view ('Category2',compact('products'));

    }
     public function Category3($id){
        $products=Product::find($id);
        return view ('Category3',compact('products'));
    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request ){

        $newProduct=new Product;
        $newProduct->name=$request->name;
        $newProduct->price=$request->price;
        $newProduct->description=$request->description;
        $newProduct->catogrey_id=$request->category_id;
        $newProduct->size=$request->size;
        $newProduct->save();
        return view('/index');

    }

    public function show(){
        $product=Product::all();
        return view ('products',compact('product'));
    }



}
