<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Policies\ProductPolicy;
use App\Http\Requests\ProductRequest;

class BookkeeperController extends Controller
{

  public function adminHome(){
      return view('bookkeeper.admin-home');
  }


  public function productShop($id){
    $product=new Product();
      return view('bookkeeper.product-shop',['data'=>$product->find($id)]);
  }


  public function productShopBasket($id,$qty){
    $product=new Product();
    $qty = 'value';
      return view('bookkeeper.order',[
        'data'=>$product->find($id),
        'data'=>$qty->find('value'),
      ]);
  }



  // public function product_check(ProductRequest $req){
  //     dd($req);
  // }
  // public function editProduct($id){
  //   $product=new Product();
  //   return view('bookkeeper.update-product',['data'=>$product->find($id)]);
  // }


  public function order(){
      return view('bookkeeper.order');
  }



}
