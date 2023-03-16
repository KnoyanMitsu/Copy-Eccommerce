@extends('layouts.navbar')

@section('content')

<body>

    <div class="container">
        <h3 class="font-weight-bold mb-2">Status Pesanan</h3>
        <table class="mb-3 mt-3  table">
            <thead>
                <tr>
                    <th>Foto Produk</th>
                    <th>Nama Produk</th>
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
                        src="{{ Storage::url('public/posts/').$datas->image }}"
                        alt="">
                    </td>
                    <td>
                        <p class="">{{ $datas->judul }}</p>
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
</body>
@endsection
