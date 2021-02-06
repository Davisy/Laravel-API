<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all products 
        $products = Product::all();

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        // validate and create new product
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|numeric',
            'category' => 'required|string'
        ]);

        $product = new Product;

        $product->create($request->all());

        return Product::latest()->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show specific product data
        $product = Product::find($id);


        if (!empty($product)) {

            return $product;

        } else {
            
            return ["message" => "product not found"];
        }
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
        // validate and update the product data
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|numeric',
            'category' => 'required|string'
        ]);

        $product = Product::findOrFail($id);

        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete the product 
        return Product::destroy($id);
    }
}
