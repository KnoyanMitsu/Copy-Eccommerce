@extends('admin.sidebar')


@section('content')

    <div class="row mb-3 ">
        <h1 class="col">List Produk</h1>
        <div class="col text-right">
            <a href="{{ url('/admin/tambah') }}" class="btn rounded-pill" style="background-color: #D9D9D9; color:black; " >+ Tambah Produk</a>
        </div>
    </div>
    <div class="container">
        <div class="card mb-3 mt-2  ">
    <div class="container">
        <div class="row mt-3 mb-3">
            <img class="foto-produk img-fluid mx-auto mx-lg-0 h-100 h-100 col-2 my-auto img-rounded mb-3 mt-3"
                src="{{ url('https://images.tokopedia.net/img/cache/700/VqbcmM/2023/2/18/0dc57b43-89a2-4faa-94fd-a6dad89cd766.png.webp?ect=4g') }}"
                alt="">
            <div class="d-flex justify-content-between align-items-center col">
                <p class="col-5 align-items-center">gantungan kunci - Keychain anime jepang</p>
            </div>
            <div class="d-flex justify-content-between align-items-center col-sm-2">
                <a href="{{ url('/admin/edit') }}" class="btn rounded" style="background-color:#B5CF49">Edit</a>
                <button href="{{ url('/admin/delete') }}" class="btn rounded" disabled style="background-color:#B5CF49">Hapus</button>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
