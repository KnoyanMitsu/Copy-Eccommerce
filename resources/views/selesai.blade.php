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
            <h2>total bayar</h2>
            <h2 class="font-weight-bold">Rp 39.780</h2>
            <p>transfer via [COD/Kartu Kredit]</p>
        </div>
    </div>
    <div class="justify-content-center text-center">
        <a href="{{ url('/') }}" class="btn btn-primary" style="background-color:#B5CF49">Halaman Utama</a>
        <a href="{{ route('status.index') }}" class="btn btn-primary" style="background-color:#B5CF49">Status</a>
    </div>
</div>

@endsection
