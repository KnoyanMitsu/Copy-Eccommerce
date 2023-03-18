<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Slide;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide = DB::table('slideproduct')
        ->join('products', 'slideproduct.product_id', '=', 'products.id')
        ->select('slideproduct.*','products.judul', 'gambar_slide')
        ->get();

        return view('admin.slideshow.slideshow',compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $select = DB::table('products')
        ->select('products.judul','products.id')
        ->get();
        return view('admin.slideshow.addslide',compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_slide'     => 'required|mimes:png,jpg,jpeg|max:2048',
            'product_id' => 'required',
        ]);

        $image = $request->file('gambar_slide');
        $filename = $image->hashName();
        $image->storeAs('public/slide', $filename);

        $resizedImage = Image::make(storage_path('app/public/slide/' . $filename))->resize(480, 270)->save();

        Slide::create([
            'gambar_slide' => $image->hashName(),
            'product_id' => $request->product_id,
        ]);

        return redirect(route('slide.index'))->with(['success' => 'Product Berhasil Ditambah!']);
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
    public function edit($id)
    {
        $product = DB::table('slideproduct')
        ->join('products', 'slideproduct.product_id', '=', 'products.id')
        ->select('products.id','products.judul', 'gambar_slide')
        ->get();

        $select = DB::table('products')
        ->select('products.judul','products.id')
        ->get();

        $Dbase = Slide::find($id);

        return view('admin.slideshow.editslide',compact('select','product','Dbase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $id)
    {
        $this->validate($request,[
            'product_id' => 'required',
        ]);

        if ($request->hasFile('gambar_slide')) {

            //upload new image
            $image = $request->file('gambar_slide');
            $filename = $image->hashName();
            $image->storeAs('public/slide', $filename);

            $resizedImage = Image::make(storage_path('app/public/slide/' . $filename))->resize(480, 270)->save();

            //delete old image
            Storage::delete('public/slide/'.$id->gambar_slide);

            //update post with new image
            $id->update([
                'gambar_slide' => $image->hashName(),
                'product_id' => $request->product_id,
            ]);

        } else {

            //update post without image
            $id->update([
                'product_id' => $request->product_id,
            ]);
        }
        return redirect(route('slide.index'))->with(['success' => 'Product Berhasil DiUpdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $id)
    {
        Storage::delete('public/slide/'. $id->gambar_slide);

        $id->delete();
        return redirect(route('slide.index'))->with(['success' => 'Product Berhasil Dihapus!']);
    }
}
