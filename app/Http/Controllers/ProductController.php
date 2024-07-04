<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('products.index',[
            'products'=> $products
        ]);

    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $data = $request->validate([

            'name' => 'required',
            'qty'=> 'required|Numeric',
            'price'=>'required',
            'descrption'=>'required'


        ]);

        $newProduct = Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');


    }


    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }

    public function update(Product $product,Request $request ){

        $data = $request->validate([

            'name' => 'required',
            'qty'=> 'required|Numeric',
            'price'=>'required',
            'descrption'=>'required'


        ]);

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product Update successfully.');



    }
}

