@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card">
            <div class="container mt-3">
                <h2 class="font-weight-bold mb-3">Contact Us</h2>
                <h2 class="font-weight-bold text-center mb-5">Nama Perusahaan</h2>
                <div class="mb-5">
                    <h3 class="mb-2">Hari Kerja</h3>
                    <hr>
                    <p>Senin-Jum'at   09:00 - 17:00</p>
                    <p>Sabtu  09:00 - 15:00</p>
                    <p>Minggu  On Request</p>
                </div>
                <div class="mb-3">
                    <h3 class="mb-2">Hari Kerja</h3>
                    <hr>
                    <p>Email@gmail.com</p>
                    <p>+62123456789</p>
                </div>
            </div>
        </div>
    </div>
</body>
@include('layouts.footbar')
@endsection
