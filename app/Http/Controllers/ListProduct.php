<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ListProduct extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::latest()->paginate(10);

        return view('admin.list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategory' => 'required',
            'deskripsi' => 'required',
        ]);

        Products::create([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategory' => $request->kategory,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect(route('list_product'))->with(['success' => 'Product Berhasil Ditambah!']);
    }


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Dbase = Products::find($id);

        return view('admin.edit', compact('Dbase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategory' => 'required',
            'deskripsi' => 'required',
        ]);

        $product = Products::findOrFail($id);
        $product->update([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategory' => $request->kategory,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect(route('list_product'))->with(['success' => 'Product Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect(route('list_product'))->with(['success' => 'Product Berhasil Dihapus!']);
    }
}
