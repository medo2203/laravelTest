<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index',compact('products'));
    }
    protected function create(){
        return view("create");
    }
    protected function store(Request $request){
        Product::create([
            "name"=>$request->input('name'),
            "quantity"=>$request->input('quantity'),
            "price"=>$request->input('price'),
        ]);
        return redirect('index');
    }
    protected function edit($id){
        $product = Product::findOrFail($id);
        return view("edit",compact('product'));
    }
    protected function update(Request $request ,$id){
        $product = Product::findOrFail($id);
        $product -> name = $request->input('name');
            $product ->quantity=$request->input('quantity');
            $product ->price=$request->input('price');
            $product->save();
        return back();
        
        
    }
}
