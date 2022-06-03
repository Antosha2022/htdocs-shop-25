<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class OrderController extends Controller
{

  public function showBasket()
  {
    return view('bookkeeper.cart2');
  }

  // public function ProductFirstShop(){
  // // return view for product id=2
  // $product=new Product;
  // return view('bookkeeper.product-shop',['data'=>$product->find(1)]);

//   public function ProductSecondShop(){
//   // return view for product id=2
//   $product=new Product;
//   return view('bookkeeper.product-shop',['data'=>$product->find(2)]);
//
//   public function ProductThirdShop(){
//   // return view for product id=2
//   $product=new Product;
//   return view('bookkeeper.product-shop',['data'=>$product->find(3)]);
//
//   public function ProductFourthShop(){
//   // return view for product id=2
//   $product=new Product;
//   return view('bookkeeper.product-shop',['data'=>$product->find(4)]);
 }
