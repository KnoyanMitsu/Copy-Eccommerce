@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card mb-3">
            <div class="container mt-3 mb-3">
            <h4 class="font-weight-bold mb-3">Alamat Pengiriman</h4>
            @if(!empty($user->address))
            <div class="form-group">
                <label for="alamat" class="font-weight-bold">Alamat:</label>
                <p>{{ $user->address }}</p>
            </div>
            <div class="form-group">
                <label for="kota" class="font-weight-bold">Kota:</label>
                <p>{{ $user->city }}</p>
            </div>
            <div class="form-group">
                <label for="kode_pos" class="font-weight-bold">Kode Pos:</label>
                <p>{{ $user->postal_code }}</p>
            </div>
            <a href="{{ route('alamat.index',$user->id) }}" id="update-address-link">Ubah Alamat</a>
            @else
            <form action="{{ route('checkout.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="alamat" class="font-weight-bold">Alamat:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="kota" class="font-weight-bold">Kota:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                </div>
                <div class="form-group">
                    <label for="kode_pos" class="font-weight-bold">Kode Pos:</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color:#B5CF49;">Simpan Alamat</button>
            </form>
            @endif
        </div>
        </div>

        <div class="card mb-3">
            <div class="container mt-3 mb-3">
                <table class=" table" >
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                        </tr>
                    </thead>
                    <tbody class="col">
                        @php
                        $totalHarga = 0;
                        $totalmutlak = 0;
                        @endphp
                        @forelse ($data as $cart)
                        <tr>
                            <td><img style="width: 100px;" src="https://i.imgur.com/ZSU3oX4.jpeg"></td>
                            <td>{{ $cart->judul }}</td>
                            <td>Rp {{ number_format($cart->harga,0,',','.') }}</td>
                            <td>{{ $cart->quantity }}</td>
                            @php
                            $totalHarga += $cart->harga * $cart->quantity;
                            $totalmutlak += $totalHarga + 1000;
                            @endphp
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Tidak ada keranjang. silahkan pilih product dan "Add to cart"
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-3">
            <div class="container mt-4 mb-3">
                <div class="row gap-3">
                    <p class="font-weight-bold col-md-4">Metode Pembayaran</p>
                    <button class="col-2 btn btn-primary" style="background-color:#B5CF49;">COD</button>
                    <button class="col-2 btn btn-primary" style="background-color:#B5CF49;" disabled>Kartu Debit</button>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                      <p>Subtotal untuk produk </p>
                        <p>Biaya layanan </p>
                        <p>Total Pembayaran</p>
                    </div>
                    <div class="col-sm-2">
                        <p>Rp.{{ number_format($totalHarga,0,',','.') }}</p>
                        <p>Rp.1.000</p>
                        <p>Rp.{{ number_format($totalmutlak,0,',','.') }}</p></div>
                        <form action="{{ route('checkout.create') }}" method="post">
                            @csrf
                        <button  class="btn btn-primary" style="background-color:#B5CF49;">Buat Pesanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css " rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
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


