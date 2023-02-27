@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="container mt-3 mb-3">
                <h2 class="font-weight-bold">Kerajang</h2>
                <table class="row">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="record"></th>
                            <th>Produk</th>
                        </tr>
                    </thead>
                    <tbody class="col">
                        <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td><img src="https://i.imgur.com/ZSU3oX4.jpeg"></td>
                            <td>gantungan kunci - Keychain anime jepang</td>
                            <td>Rp 15.890</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td><img src="https://i.imgur.com/ZSU3oX4.jpeg"></td>
                            <td>gantungan kunci - Keychain anime jepang</td>
                            <td>Rp 15.890</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td><img src="https://i.imgur.com/ZSU3oX4.jpeg"></td>
                            <td>gantungan kunci - Keychain anime jepang</td>
                            <td>Rp 15.890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="row container">
                <div class="mt-5 mb-5  col">
                    <table>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="record"></td>
                                <td>Pilihan Semua</td>
                                <td><Button class="btn btn-primary " style="background-color:#B5CF49;">Hapus</Button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col mt-3 mb-3">
                    <h2>Rp -----</h2>
                    <Button class="btn btn-primary " style="background-color:#B5CF49;">Checkout</Button>
                </div>
            </div>
        </div>
        @include('layouts.footbar')
</body>
@endsection
