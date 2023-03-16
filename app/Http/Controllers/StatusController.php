<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $data = DB::table('statuspengiriman')
            ->join('products', 'statuspengiriman.product_id', '=', 'products.id')
            ->where('statuspengiriman.users_id', $user_id)
            ->select('statuspengiriman.*', 'products.judul', 'products.harga', 'products.image','quantity','total','status')
            ->get();
        return view('status', compact('data'));
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
    public function store(Request $request)
    {
        //
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
