<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image'     => 'required|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategory' => 'required',
            'deskripsi' => 'required',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Products::create([
            'image' => $image->hashName(),
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
    public function update(Request $request,Products $id)
    {
        $this->validate($request,[
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategory' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$id->image);

            //update post with new image
            $id->update([
                'image' => $image->hashName(),
                'judul' => $request->judul,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'kategory' => $request->kategory,
                'deskripsi' => $request->deskripsi,
            ]);

        } else {

            //update post without image
            $id->update([
                'judul' => $request->judul,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'kategory' => $request->kategory,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect(route('list_product'))->with(['success' => 'Product Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Products $id)
    {
         Storage::delete('public/posts/'. $id->image);

        $id->delete();
        return redirect(route('list_product'))->with(['success' => 'Product Berhasil Dihapus!']);
    }
}
