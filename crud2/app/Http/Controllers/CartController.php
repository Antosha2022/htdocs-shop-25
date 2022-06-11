<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Policies\ProductPolicy;
use App\Http\Requests\ProductRequest;

class CartController extends Controller
{
    public function index(Request $request)
    {
      return view('cart');
    }

    // public function addToCart(Request $requeast)
    // {
    //   return response()->json(['id'=>$requeast->id]);
    // }
    /**
         * Write code on Method
         *
         * @return response()
         */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "short_name" => $product->short_name,
                "quantity" => 1,
                "retail_price" => $product->retail_price,
                // "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


}
