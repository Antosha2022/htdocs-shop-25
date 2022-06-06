<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
      return view('bookkeeper.cart');
    }

    public function addToCart(Request $requeast)
    {
      // code...
    }


}
