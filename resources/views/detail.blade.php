@extends('layouts.navbar')
@section('content')

<body>

    <div class="container">
        <div class="card mb-4">
            <div class="row gap-2 row-cols-2">
                <div class="mt-3 ml-3 mb-3 col">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        style="width:500px; height:500px;">
                </div>
                <div>
                    <div class="col card-body">
                        <h4 class="card-title mt-3">{{ $detail->judul }}</h5>
                            <p>ini bintang</p>
                            <h4 class="font-weight-bold">Rp. {{ $detail->harga }}</h4>
                            <h4 class="card-text">Stok: {{ $detail->stok }}</h4>
                            <form action="{{ route('cart.add', $detail->id) }}" method="POST">
                                @csrf
                            <div class="row gap-4">
                                <input type="number" name="quantity"  class="form-control" value="1">
                                <a class="col btn btn-primary  btn"  href="#"
                                    style="background-color:#B5CF49; width: 200px;">Beli sekarang</a>
                                <button class="col btn btn-primary  btn"
                                    style="background-color:#B5CF49;" type="submit">Add to cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Deskripsi-->
        <div class="card mb-4">
            <div class="container mt-4 mb-4">
                <h4 class="card-title">Deskripsi Product</h4>
                <p class="card-text">{{ $detail->deskripsi }}</p>
            </div>
        </div>
        <!--Product Lainnya-->
        <div class=" mb-5">
            <h4 class="font-weight-bold mb-3">Produk lain dari toko ini</h4>
                <div class="row row-cols-3 gap-5">
                    @foreach ($products as $product)
                    <a class="col-md-3 link-dark " style="width:18rem" href="{{ url('detail',$product->id) }}">
                        <div class="card shadow" style="height: 350px">
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
                    </a>
                @endforeach
                    </div>

                </div>
        </div>
        @include('layouts.footbar')
</body>
@endsection
