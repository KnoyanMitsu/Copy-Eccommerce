@extends('layouts.navbar')

@section('content')

<body>
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="container mt-3 mb-3">
                <h2 class="font-weight-bold">Keranjang</h2>
                <table class=" table" >
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="col">
                        @php
                        $totalHarga = 0;
                        @endphp
                        @forelse ($data as $cart)
                        <tr>
                            <td><img style="width: 100px;" src="https://i.imgur.com/ZSU3oX4.jpeg"></td>
                            <td>{{ $cart->judul }}</td>
                            <td>Rp {{ number_format($cart->harga,0,',','.') }}</td>
                            <td><form action="{{ route('cart.update', ['id' => $cart->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="input-group">
                                    <input type="number" name="quantity" value="{{ $cart->quantity }}" min="1" class="form-control">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                            <td><Button class="btn btn-danger delete-cart-item"  data-id="{{ $cart->id }}">Hapus</Button>
                            @php
                            $totalHarga += $cart->harga * $cart->quantity;
                            @endphp
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
        <div class="card">
            <div class="row container">
                <div class="mt-3  mb-3 col">
                    <h2 class="">Total Harga: Rp {{ number_format($totalHarga,0,',','.') }}</h2>
                </div>
                <div class="col mt-3 mb-3">

                    <a href="{{ route('checkout.index') }}" class="btn btn-primary " style="background-color:#B5CF49;">Checkout</a>
                </div>
            </div>
        </div>

</body>
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css " rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script>
    //message with toastr
    @if(session()->has('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session("success") }}',
    })
    @elseif(session()->has('error'))
    Swal.fire({
        icon: 'error',
        title: 'Gagal',
        text: '{{ session("error") }}',
    })
    @endif

</script>

<script>
    // Menghapus item dari keranjang
    $(document).on('click', '.delete-cart-item', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Anda yakin ingin menghapus item ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('cart.delete') }}',
                    type: 'DELETE',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil',
                            icon: 'success',
                            text: 'Item telah dihapus dari keranjang'
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            title: 'Gagal',
                            icon: 'error',
                            text: 'Item gagal dihapus dari keranjang'
                        });
                    }
                });
            }
        });
    });
</script>

@endsection
