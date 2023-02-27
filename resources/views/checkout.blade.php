@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card mb-3">
            <div class="container mt-3 mb-3">
            <h4 class="font-weight-bold mb-5">Alamat Pengiriman</h4>
        </div>
        </div>

        <div class="card mb-3">
            <div class="container mt-3 mb-3">
                <table>
                    <thead>
                        <tr>
                            <th><p class="font-weight-bold">Produk Dipesan</p></th>
                            <th></th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://i.imgur.com/ZSU3oX4.jpeg" alt=""></td>
                            <td><p>gantungan kunci - Keychain anime jepang</p></td>
                            <td><p>Rp 15.890</p></td>
                            <td><button class="btn btn-primary" style="background-color:#B5CF49;">+</button><button class="btn btn-primary" style="background-color:#B5CF49;">-</button></td>
                        </tr>
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
                        <p>Total ongkos kirim </p>
                        <p>Biaya layanan </p>
                        <p>Total Pembayaran</p>
                    </div>
                    <div class="col-sm-2">
                        <p>Rp.31.780</p>
                        <p>Rp.7.000</p>
                        <p>Rp.1.000</p>
                        <p>Rp.39.780</p></div>
                        <a href="{{ route('selesai') }}" class="btn btn-primary" style="background-color:#B5CF49;">Buat Pesanan</a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
