<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function index($id)
    {
        $products = Products::latest()->paginate(10);
        $detail = Products::find($id);

        return view('detail',compact('detail','products'));
    }


    public function show(string $id)
    {
        //
    }

}
