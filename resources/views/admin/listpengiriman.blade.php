@extends('admin.sidebar')

@section('content')

<div class="row mb-3 ">
    <h1 class="col">List Pengiriman</h1>
    <div class="col text-right">
        <a href="{{ url('/admin/tambah') }}" class="btn rounded-pill" style="background-color: #D9D9D9; color:black; " >+ Tambah Produk</a>
    </div>
</div>
<div class="container">
    <table class="mb-3 mt-3  table">
        <thead>
            <tr>
                <th>Foto Produk</th>
                <th>Nama Produk</th>
                <th>Nama Customer</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Kuantitas</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $datas)
            <tr>
                <td>
                    <img class="img-fluid my-auto" style="width: 100px;"
                    src="{{ url('https://images.tokopedia.net/img/cache/700/VqbcmM/2023/2/18/0dc57b43-89a2-4faa-94fd-a6dad89cd766.png.webp?ect=4g') }}"
                    alt="">
                </td>
                <td>
                    <p class="">{{ $datas->judul }}</p>
                </td>
                <td>
                    <p class="">{{ $datas->name }}</p>
                </td>
                <td>
                    <p class="">{{ $datas->phone }}</p>
                </td>
                <td>
                    <p class="">{{ $datas->address }}
                    <p class="">{{ $datas->city }}
                    <p class="">{{ $datas->postal_code }}</p>
                </td>
                <td>
                    <p class="">{{ $datas->quantity }}</p>
                </td>
                <td>
                    <p class="">{{ $datas->total }}</p>
                </td>
                <td>
                    <p class="font-weight-bold">{{ $datas->status }}</p>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Silahkan Beli barang dahulu untuk melihat status pengiriman
            </div>
            @endforelse
        </tbody>

    </table>
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
