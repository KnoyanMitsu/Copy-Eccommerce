<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function index($id)
    {

        $products = Products::latest()->paginate(10);
        $detail = Products::find($id);

        $bintang = DB::table('comentar')
        ->join('products', 'comentar.product_id', '=', 'products.id')
        ->where('products.id', '=', $detail->id)
        ->select('comentar.*','bintang')
        ->get();

        $avgstar = DB::table('products')
        ->join('comentar','products.id', '=', 'comentar.product_id')
        ->where('products.id', '=', $detail->id)
        ->avg('bintang');

        $intavgstar = round($avgstar);

        $data = DB::table('comentar')
        ->join('products', 'comentar.product_id', '=', 'products.id')
        ->join('users', 'comentar.users_id', '=', 'users.id')
        ->where('products.id', '=', $detail->id)
        ->select('comentar.*', 'users.name','comentar','bintang')
        ->paginate(5);


        return view('detail',compact('detail','products','data','intavgstar'));
    }


    public function show(string $id)
    {
        //
    }

}
