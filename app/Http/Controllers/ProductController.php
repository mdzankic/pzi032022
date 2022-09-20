<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    //Dohvaćanje svih modela toga tipa
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Kreiranje modela
    public function store(Request $request)
    {
        $product = Product::create([
            'vrsta' => $request->vrsta,
            'velicina' => $request->velicina,
            'tezina' => $request->tezina,
            'boja' => $request->boja,
            'user_id' => $request->user_id
        ]);

        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return Product
     */
    //Dohvaćanje pojedinačnog produkta
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    /**public function edit(Product $product)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return Product
     */
    public function update(Request $request, Product $product)
    {
        $product -> update([
            'vrsta' => $request->vrsta,
            'velicina' => $request->velicina,
            'tezina' => $request->tezina,
            'boja' => $request->boja,
            'user_id' => $request->user_id
        ]);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return bool
     */
    public function destroy(Product $product)
    {
        return $product->delete();
    }
}
