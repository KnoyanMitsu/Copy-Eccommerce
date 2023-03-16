@extends('layouts.navbar')
@section('content')

<body>

    <div class="container">
        <div class="card mb-4">
            <div class="row gap-2 row-cols-2">
                <div class="mt-3 ml-3 mb-3 col">
                    <img src="{{ Storage::url('public/posts/').$detail->image }}"
                        style="width:500px; height:500px;">
                </div>
                <div>
                    <div class="col card-body">
                        <h5 class="card-title mt-3">{{ $detail->judul }}</h5>
                            <h4><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABR0lEQVRIS7VVixHBQBBNKkAHVIAKUAEqEBWgAlRAB6IDHaADKqAEKuC9zF3m5tzl7iTZmR3JWu/tXxzVLHHN+FEowQ0BfaB938BCCBKAHgTwHJ+pD0kIwQWAAwHK51GVBEOAnTVAEpCoUHwzYDlmGtIR7yxbaYI2EB4WlA7szyIGNYMJHLtQAlIpTWjPESQn6yV8SEa9Q0+0qQQcvyolw1YJErzLMSxLlI+x3uSyJG9EtoSmMkLTFP1LQvAhlD3JxTamoSRGcL0Het33MCw8m2FduqJFuwBcngYXzwoODOhHighCxvYq6u9NwGbpt8eVRQsOcuGcTeao7QyIW2FbG76bwpZtryq2EtFxrDhy9ROoHEGejxTK0yLFePxsBEy1IX7JqDeW+tAus3nimcfPKwMZqRq1hSM7hsyG8nMYff8PbOBOe+0EXxeJNRkmAuuOAAAAAElFTkSuQmCC"/>
                                {{ $intavgstar }}/5</h5>
                            <h4 class="font-weight-bold">Rp. {{ $detail->harga }}</h4>
                            <h4 class="card-text">Stok: {{ $detail->stok }}</h4>
                            <form action="{{ route('cart.add', $detail->id) }}" method="POST">
                                @csrf
                            <div class="row ">
                                <input type="number" name="quantity"  class="form-control mb-2" value="1">
                                <button class="col btn btn-primary  btn"  href="#"
                                    style="background-color:#B5CF49; width: 200px;">Beli sekarang</button>
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
        {{-- Komentar --}}
        <div class="card mb-4">
            <div class="container mt-4 mb-4">
                <h4 class="card-title">Komentar</h4>
                <div class="card-body">
                    @forelse ($data as $datas)

                    <div>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABR0lEQVRIS7VVixHBQBBNKkAHVIAKUAEqEBWgAlRAB6IDHaADKqAEKuC9zF3m5tzl7iTZmR3JWu/tXxzVLHHN+FEowQ0BfaB938BCCBKAHgTwHJ+pD0kIwQWAAwHK51GVBEOAnTVAEpCoUHwzYDlmGtIR7yxbaYI2EB4WlA7szyIGNYMJHLtQAlIpTWjPESQn6yV8SEa9Q0+0qQQcvyolw1YJErzLMSxLlI+x3uSyJG9EtoSmMkLTFP1LQvAhlD3JxTamoSRGcL0Het33MCw8m2FduqJFuwBcngYXzwoODOhHighCxvYq6u9NwGbpt8eVRQsOcuGcTeao7QyIW2FbG76bwpZtryq2EtFxrDhy9ROoHEGejxTK0yLFePxsBEy1IX7JqDeW+tAus3nimcfPKwMZqRq1hSM7hsyG8nMYff8PbOBOe+0EXxeJNRkmAuuOAAAAAElFTkSuQmCC"/> {{ $datas->bintang }}</p>
                        <h5 class="font-weight-bold">{{ $datas->name }}</h5><p>
                        <p>{{ $datas->comentar }}</p>
                    </div>

                    @empty
                    <div class="alert alert-danger">
                        Belum ada komentar
                    </div>
                    @endforelse
                    <hr style="color:black;">
                    <form action="{{ route('commentar.create',$detail->id) }}" method="POST">
                        @csrf
                        <label for="bintang">Pilih bintang:</label>
                        <select name="bintang" class="form-select mb-3">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="text" name="comentar" class="form-control mb-2" placeholder="Isi tanggapan anda">
                        <button type="submit" class="btn mb-2" style="background-color:#B5CF49;">Kirim</button>
                    </form>
                </div>
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
</body>
@endsection
