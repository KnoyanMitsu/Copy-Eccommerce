<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {

    }
    public function addToCart(Request $request, Products $product)
    {
        $cart = Cart::where('product_id', $product->id)
                    ->where('users_id', Auth::id())
                    ->first();

        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->users_id = Auth::id();
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect()->route('cart.index')->with(['success' => 'Product anda sudah di cart anda']);
    }

}
