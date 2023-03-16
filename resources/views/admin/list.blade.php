@extends('admin.sidebar')


@section('content')

    <div class="row mb-3 ">
        <h1 class="col">List Produk</h1>
        <div class="col text-right">
            <a href="{{ url('/admin/tambah') }}" class="btn rounded-pill" style="background-color: #D9D9D9; color:black; " >+ Tambah Produk</a>
        </div>
    </div>
    <div class="container">
        @forelse ($product as $products)
        <div class="card mb-3 mt-2  ">
    <div class="container">

        <div class="row mt-3 mb-3">
            <img class="foto-produk img-fluid mx-auto mx-lg-0 h-100 h-100 col-2 my-auto img-rounded mb-3 mt-3"
                src="{{ Storage::url('public/posts/').$products->image }}"
                alt="">
            <div class="d-flex justify-content-between align-items-center col">
                <p class="col-5 align-items-center">{{ $products->judul }}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center col-sm-2">
                <form action="{{ route('Bye', $products->id) }}" onsubmit="return confirm('Apakah Anda Yakin ?');" method="post">
                <a href="{{ route('edit',$products->id) }}" class="btn rounded" style="background-color:#B5CF49">Edit</a>
                @csrf
                @method('DELETE')
                <button href="{{ url('/admin/delete') }}" class="btn rounded btn-danger" >Hapus</button>
            </form>
            </div>
        </div>

    </div>

</div>
@empty
<div class="alert alert-danger">
    Produk List belum Tersedia silahkan klik Tambah Produk.
</div>
@endforelse
</div>
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css " rel="stylesheet">

<script>
    //message with toastr
    @if(session()->has('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session("success") }}',
    })
    @elseif(session()->has('error'))
    Swal.fire({
        icon: 'error',
        title: 'Gagal',
        text: '{{ session("error") }}',
    })
    @endif

</script>
@endsection
