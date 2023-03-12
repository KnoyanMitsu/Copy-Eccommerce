@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card mb-3">
            <div class="container mt-3 mb-3">
            <h4 class="font-weight-bold mb-5">Edit Alamat Pengiriman</h4>
            <form action="{{ route('alamat.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="alamat" class="font-weight-bold">Alamat:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ $user->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="kota" class="font-weight-bold">Kota:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}" required>
                </div>
                <div class="form-group">
                    <label for="kode_pos" class="font-weight-bold">Kode Pos:</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $user->postal_code }}" required>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color:#B5CF49;">Simpan Alamat</button>
            </form>
        </div>
        </div>
@endsection


