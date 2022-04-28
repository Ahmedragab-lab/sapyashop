<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\section;
use Illuminate\Http\Request;

class AllProducts extends Controller
{
   public function index(){
    // $products = Product::all();
    // $sections = section::all();
    return view('site.pages.allproducts');
   }
   public function show($id){
    $products = Section::find($id);
    return view('site.pages.allproducts',compact('products'));
   }
   public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
