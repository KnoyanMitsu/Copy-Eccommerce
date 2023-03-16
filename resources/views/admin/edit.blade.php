@extends('admin.sidebar')


@section('content')

    <div class=" mb-3 ">
        <h1 class="mb-4">Edit Product</h1>
        <p>Silahkan Edit produk anda</p>
        <form action="{{ route('update_product', $Dbase->id )}}" method="POST" enctype="multipart/form-data">
        @if($errors->any())
        {{ implode('', $errors->all('<div class="alert alert-danger">:message</div>')) }}
    @endif

        <div class="row">
            <div class="col">
                <input class="form-control mb-2" id="formFile" type="file" name="image">
            </div>
            <div class="col">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <input value="{{ $Dbase->judul }}" type="text" name="judul"  placeholder="Nama Product" class="form-control mb-2">
                        <input value="{{ $Dbase->harga }}" type="text" name="harga" placeholder="Harga" class="form-control mb-2">
                        <input value="{{ $Dbase->stok }}" type="text" name="stok" placeholder="Stok Produk" class="form-control mb-2">
                        <input value="{{ $Dbase->kategory }}" type="text" name="kategory" placeholder="Kategory" class="form-control mb-2">
                        <textarea type="text" name="deskripsi"  placeholder="Dekripsi" class="form-control mb-2" rows="10">{{ $Dbase->deskripsi }}</textarea>
                        <button type="submit" class="btn mb-3" style="background-color:#B5CF49 ">Upload</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
