<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
      $products=Products::all();
    
      return view('index',compact('products'));
    }

    public function create()
    {
      return view('create');
    }


    public function store(Request $request)
    {
    Products::create([
      'prodname'=>$request->name,
      'prodtype'=>$request->type,
      'price'=>$request->price,
      'created_at'=>now(),
    ]);
    return redirect()->route('products_index')->with('success','product has been added');
    }

    public function save_update(Products $products, Request $request)
    {
      $products->update([
      'prodname'=>$request->prodname,
      'prodtype'=>$request->prodtype,
      'price'=>$request->price,
    ]);
    return redirect()->route('products_index')->with('success','product has been added');
    }
    

    
    
    public function show(Products $products)
    {
      return view('show', compact('products'));
    }
    public function edit(Products $products)
    {
      
      $products=Products::find($products);
  
      return view('edit', compact('products'));   
    }

    
    public function update(Request $request, Products $products)
    {
     $products->update($request->all());
     return redirect()->route('index')->with('success','product has been added');

    }

        public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('products.index')->with('success','product has been deleted');
    }

    public function delete(Products $products)
    {
     
      $products->delete($products);

      return redirect('/')->with('success','product has been deleted');
    }
    
    
}
