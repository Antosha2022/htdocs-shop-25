<?php

namespace App\Http\Controllers;

use App\Product;
use App\Policies\ProductPolicy;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('bookkeeper.product-shop',['data'=>Product::all()]);
    }


    public function FunctionAllData(){
    // можна подивитись повний масив
    //   dd(Contact::all());
    return view('bookkeeper.productList',['data'=>Product::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product=new Product;
      return view('bookkeeper.one-product',['data'=>$product->find($id)]);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $product=new Product();
      $product->short_name = $req->input('short_name');
      $product->bar_code = $req->input('bar_code');
      $product->description = $req->input('description');
      $product->retail_price = $req->input('retail_price');

      $product->save();
      return redirect()->route('product-data');

       // dd($req);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
