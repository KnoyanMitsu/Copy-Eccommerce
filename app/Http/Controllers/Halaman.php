<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class Halaman extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('beranda', compact('products'));
    }
}
