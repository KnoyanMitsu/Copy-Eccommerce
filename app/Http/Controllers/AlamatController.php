<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = DB::table('users')
            ->where('id', $user)
            ->select( 'address', 'city','postal_code')
            ->first(); // use first() instead of get() to get a single row

        return view('updatealamat',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'phone_number' => $request->input('phone_number')
        ]);

        return redirect(route('checkout.index'))->with(['success' => 'AlamatS Berhasil Diupdate!']);
    }
}
