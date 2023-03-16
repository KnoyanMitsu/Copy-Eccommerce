<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.users_id', $user_id)
            ->select('cart.*', 'products.judul', 'products.harga' , 'products.image','quantity')
            ->get();

        return view('checkout',compact('data','user'));
    }


    public function create(Request $request)
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.users_id', $user_id)
            ->select('cart.*', 'products.judul', 'products.harga', 'products.stok')
            ->get();
            $total_harga = 0;
            $total_quantity = 0;
        foreach ($data as $cart_item) {
            $total_quantity = $cart_item->quantity;
            $total_harga = $cart_item->harga * $cart_item->quantity + 1000;
            $status = new Status;
            $status->users_id = $user->id;
            $status->product_id = $cart_item->product_id;
            $status->status = 'belum selesai';
            $status->quantity = $total_quantity;
            $status->total = $total_harga;
            $status->save();
        }

        Cart::where('users_id', $user->id)->delete();

        return view('selesai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $user->update([
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'phone_number' => $request->input('phone_number')
        ]);

        return redirect()->back()->with('success', 'Alamat pengiriman berhasil diperbarui.');
    }
}
