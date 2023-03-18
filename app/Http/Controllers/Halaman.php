<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;

class Halaman extends Controller
{
    public function index()
    {
        $slide = DB::table('slideproduct')
        ->join('products', 'slideproduct.product_id', '=', 'products.id')
        ->select('slideproduct.*','products.id', 'gambar_slide')
        ->get();
        $products = Products::all();

        return view('beranda', compact('products','slide'));
    }
}
