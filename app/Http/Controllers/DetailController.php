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

        $data = DB::table('comentar')
        ->join('products', 'comentar.product_id', '=', 'products.id')
        ->join('users', 'comentar.users_id', '=', 'users.id')
        ->where('products.id', '=', $detail->id)
        ->select('comentar.*', 'users.name','comentar','bintang')
        ->paginate(5);


        return view('detail',compact('detail','products','data'));
    }


    public function show(string $id)
    {
        //
    }

}
