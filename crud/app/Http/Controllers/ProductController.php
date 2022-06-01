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
     * створення нового продукту
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req){
      $validation = $req->validate([
        'short_name'=>'required',
        'bar_code'=>'required',
        'description'=>'required',
        'retail_price'=>'required',
      ]);
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
    public function updateProduct($id){
      $product=Product::find($id);
      return view('update-product',['data'=>$product->find($id)]);
    }


    public function editProductSubmit($id, Request $req) {
      $product=Product::find($id);
      $product->short_name = $req->input('short_name');
      $product->bar_code = $req->input('bar_code');
      $product->description = $req->input('description');
      $product->retail_price = $req->input('retail_price');

      $product->save();
      return redirect()->route('product-data-one',$id)->with('success','Інформація про продукт успішно оновлена');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroyProduct($id){
      Product::find($id)->delete();
      return redirect()->route('product-data');
    }
}
