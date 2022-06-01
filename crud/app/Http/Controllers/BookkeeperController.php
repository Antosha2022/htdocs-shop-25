<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class BookkeeperController extends Controller
{

  public function adminHome(){
      return view('bookkeeper.admin-home');
  }


  public function product(){
      return view('bookkeeper.product');
  }

  // public function product_check(ProductRequest $req){
  //     dd($req);
  // }
  public function editProduct($id){
    $product=new Product();
    return view('bookkeeper.update-product',['data'=>$product->find($id)]);
  }


  public function order(){
      return view('bookkeeper.order');
  }



}
