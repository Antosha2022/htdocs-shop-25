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
    // public function ProductShop(){
    //     // return view for product id=2
    //     $product=new Product;
    //     return view('bookkeeper.product-shop',['data'=>$product->find(2)]);
    //    }


    public function FunctionAllData(){
    // можна подивитись повний масив
    //   dd(Contact::all());
      // return view('bookkeeper.productList',['data'=>Product::all()]);
        $product=new Product;
    return view('bookkeeper.productList',['data'=>$product->orderBy('updated_at','desc')->get()]);
    }

    public function ProductCardShop(){
        $product=new Product;
    return view('shop',['data'=>$product->orderBy('id','asc')->take(4)->get()]);
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
        'retail_price'=>'numeric',
      ]);
      $product=new Product();
      $product->short_name = $req->input('short_name');
      $product->bar_code = $req->input('bar_code');
      $product->description = $req->input('description');
      $product->retail_price = $req->input('retail_price');

      $product->save();
      return redirect()->route('product-data')->with('success','Продукт доданий в базу даних');

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
      return view('bookkeeper.update-product',['data'=>$product->find($id)]);
    }


    public function editProductSubmit($id, Request $req) {
      $validation = $req->validate([
        'short_name'=>'required',
        'bar_code'=>'required',
        'description'=>'required',
        'retail_price'=>'required',
      ]);

      $product=Product::find($id);
      $product->short_name = $req->input('short_name');
      $product->bar_code = $req->input('bar_code');
      $product->description = $req->input('description');
      $product->retail_price = $req->input('retail_price');

      $product->save();
      return redirect()->route('product-data',$id)
      ->with('success','Інформація про продукт успішно оновлена');
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
