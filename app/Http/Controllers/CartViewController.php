<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.users_id', $user_id)
            ->select('cart.*', 'products.judul', 'products.harga','quantity')
            ->get();

        return view('keranjang',compact('data'));
    }

    public function delete(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->delete();

        return response()->json(['message' => 'Item berhasil dihapus dari keranjang']);
    }

    public function update(Request $request, $id)
{
    Cart::where('id', $id)->update(['quantity' => $request->quantity]);
    return redirect()->route('cart.index')->with('success', 'Kuantitas barang telah berhasil diubah.');
}
}
