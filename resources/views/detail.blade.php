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
                    <div class="col">
                        <h4 class="card-title mt-3">Gantungan kunci Keychain Anime Jepang</h5>
                            <p>ini bintang</p>
                            <h4 class="font-weight-bold">Rp 15.890</h4>
                            <h4 class="card-text">Stok: 188</h4>
                            <div class="row gap-4">
                                <a class="col btn btn-primary  btn"  href="{{ route('Keranjang') }}"
                                    style="background-color:#B5CF49; width: 200px;">Add to card</a>
                                <a class="col btn btn-primary  btn" href="{{ route('Beli') }}"
                                    style="background-color:#B5CF49;">Beli Sekarang</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Deskripsi-->
        <div class="card mb-4">
            <div class="container mt-4 mb-4">
                <h4 class="card-title">Deskripsi Product</h4>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
            </div>
        </div>
        <!--Product Lainnya-->
        <div class=" mb-5">
            <h4 class="font-weight-bold mb-3">Produk lain dari toko ini</h4>
                <div class="row row-cols-3 gap-5">
                    <div class="card col" style="width:18rem">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </div>
                    <div class="card col" style="width:18rem">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </div>
                    <div class="card col" style="width:18rem">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </div>

                </div>
        </div>
        @include('layouts.footbar')
</body>
@endsection
