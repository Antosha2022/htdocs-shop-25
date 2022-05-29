<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookkeeperController extends Controller
{

  public function adminHome(){
      return view('bookkeeper.admin-home');
  }


  public function product(){
      return view('bookkeeper.product');
  }

  public function order(){
      return view('bookkeeper.order');
  }



}
