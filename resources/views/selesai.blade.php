@extends('layouts.navbar')

@section('content')

<div class="container">
    <div class="card mb-3">
        <div class="container mb-3 mt-3 ">
            <h2 class="font-weight-bold text-center mb-4">Terimakasih telah berbelanja</h2>

        </div>
        <div class="container mb-3 justify-content-center text-center">
            <span class="material-symbols-outlined fa-4x " style="  display: inline-block; font-size: 100px; color:#B5CF49;">
                done
            </span>
            <p>Terimakasih telah berbelanja jika productnya sudah data silahkan klik Status untuk lebih lanjut</p>
            <p>Jika ada masalah atau barang belum datang silahkan hubungin (081312345)</p>
        </div>
    </div>
    <div class="justify-content-center text-center">
        <a href="{{ url('/') }}" class="btn btn-primary" style="background-color:#B5CF49">Halaman Utama</a>
        <a href="{{ route('status.index') }}" class="btn btn-primary" style="background-color:#B5CF49">Status</a>
    </div>
</div>

@endsection
