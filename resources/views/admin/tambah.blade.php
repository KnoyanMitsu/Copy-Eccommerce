@extends('admin.sidebar')


@section('content')

    <div class=" mb-3 ">
        <h1 class="mb-4">Tambah Product</h1>
        <p>Upload foto product</p>

        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="namaproduct" id="product" placeholder="Nama Product" class="form-control mb-2">
                        <input type="text" name="namaproduct" id="product" placeholder="Harga" class="form-control mb-2">
                        <input type="text" name="namaproduct" id="product" placeholder="Stok Produk" class="form-control mb-2">
                        <input type="text" name="namaproduct" id="product" placeholder="Kategory" class="form-control mb-2">
                        <textarea type="text" name="namaproduct" id="product" placeholder="Nama Product" class="form-control mb-2" rows="10"></textarea>
                        <input class="form-control mb-2" id="formFile" type="file">
                        <button type="submit" class="btn mb-3" style="background-color:#B5CF49 ">Upload</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
