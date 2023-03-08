@extends('layouts.navbar')

@section('content')

<div class="container">
    <h2 class="font-weight-bold">Hasil Percarian "{{ $search }}"</h2>
    <div class="mb-5">
            <hr style="height:30px; color:black;">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                            <div class="mt-2">
                                <h5 class="card-title">{{ $product->judul }}</h5>
                                <p class="card-text">Rp {{ $product->harga }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>
</div>

@endsection
