@extends('admin.sidebar')


@section('content')

    <div class=" mb-3 ">
        <h1 class="mb-4">Tambah Product</h1>
        <p>Upload foto product</p>
        @if($errors->any())
        {{ implode('', $errors->all('<div class="alert alert-danger">:message</div>')) }}
    @endif
        <div>
            <form action="{{ route('create_product') }}" method="POST"  class="row" enctype="multipart/form-data">

            <div class="col">
                <input class="form-control mb-2  @error('image') is-invalid @enderror" name='image' id="formFile" type="file" >
            </div>
            <div class="col">

                    @csrf
                    <div class="form-group">
                        <input type="text" name="judul"  placeholder="Nama Product" class="form-control mb-2">
                        <input type="text" name="harga" placeholder="Harga" class="form-control mb-2">
                        <input type="text" name="stok" placeholder="Stok Produk" class="form-control mb-2">
                        <select name="kategory" id="kategory" class="form-select mb-2">
                            <option value="pakaian">Pakaian</option>
                            <option value="accessoris">Accessoris</option>
                            <option value="elektronik">Elektronik</option>
                            <option value="sepatu">Sepatu</option>
                            <option value="tas">Tas</option>
                        </select>
                        <textarea type="text" name="deskripsi"  placeholder="Dekripsi" class="form-control mb-2" rows="10"></textarea>
                        <button type="submit" class="btn mb-3" style="background-color:#B5CF49 ">Upload</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
