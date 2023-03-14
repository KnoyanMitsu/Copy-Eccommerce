<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\comentar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ComentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Products $product)
    {
        $comentar = comentar::where('product_id', $product->id)
                    ->where('users_id', Auth::id())
                    ->first();

            $comentar = new comentar();
            $comentar->users_id = Auth::id();
            $comentar->product_id = $product->id;
            $comentar->comentar = $request->comentar;
            $comentar->bintang = $request->bintang;
            $comentar->save();

        return redirect(route('product.detail',$product->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
