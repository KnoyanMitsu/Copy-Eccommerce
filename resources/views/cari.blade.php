@extends('layouts.navbar')

@section('content')

<div class="container">
    <h2 class="font-weight-bold">Hasil Pencarian "{{ $search }}"</h2>
    <div class="mb-5">
            <hr color:black;">
            <div class="row">
                @foreach ($products as $product)
                    <a class="col-md-3 link-dark mb-3" style="width:18rem" href="{{ url('detail',$product->id) }}">
                        <div class="card shadow" style="height: 350px">
                            <div class="card-body">
                            <img style="height:200px"
                            src="{{ Storage::url('public/posts/').$product->image }}"
                            class="card-img-top" alt="...">
                            <div class="mt-2">
                                <h5 class="card-title">{{ $product->judul }}</h5>
                                <p class="card-text">Rp {{ number_format($product->harga,0,',','.')  }}</p>
                            </div>
                        </div>
                        </div>
                    </a>
                @endforeach
    </div>
</div>

@endsection
