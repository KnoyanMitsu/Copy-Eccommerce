@extends('layouts.navbar')

@section('content')

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col mt-5">
                <h1>404 Not Found</h1>
                <p>Oh tidak si patrick tersesat</p>
                <p>kemungkinan ini alasannya:</p>
                <ul>
                    <li>Product telah dihapus</li>
                    <li>Halaman dihapus</li>
                    <li>Anda Ketik link tidak sesuai</li>
                </ul>
                <a href="{{ url('/') }}" class="btn" style="background-color:#B5CF49;">Kembali Halaman Utama</a>
            </div>
            <div class="col">
                <img src="{{ asset('Image/Untitled-1.png') }}" alt="" style="width: 500px; height: 500px;">
            </div>
        </div>
    </div>
</body>

@endsection
