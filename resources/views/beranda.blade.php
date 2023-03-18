@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

.slick-slide {
      margin: 0 10px;
  }

    .slick-prev:before, .slick-next:before
{
color:#7e7e7e;
}
</style>
<body>
    <div class="container">
        <div class="slider">
            @forelse ($slide as $slides)
            <a style=" height: 270px;"href="{{ url('detail',$slides->id) }}"><img class="img-fluid slide"  src="{{ Storage::url('public/slide/').$slides->gambar_slide }}"
                alt="Image 1" /></a>
            @empty

            @endforelse
        </div>
        <div class="justify-content-center mb-5">
            <h2 class="text-center mb-3 ">Kategory</h2>
                <hr>

                <div class="kategory">
                    <a href="{{ route('product.kategory','pakaian') }}" class="card col link-dark" style="width:13rem;" >
                        <div class="card-body">
                            <h5 class="card-title text-center">Pakaian</h5>
                        </div>
                    </a>

                    <a href="{{ route('product.kategory','accessoris') }}" class="card col link-dark" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Accessoris</h5>
                        </div>
                    </a>

                    <a href="{{ route('product.kategory','elektronik') }}" class="card col link-dark" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Elektronik</h5>
                        </div>
                    </a>

                    <a href="{{ route('product.kategory','sepatu') }}" class="card col link-dark" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sepatu</h5>
                        </div>
                    </a>
                    <a href="{{ route('product.kategory','tas') }}" class="card col link-dark" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tas</h5>
                        </div>
                    </a>
                    <a href="{{ route('product.kategory','tas') }}" class="card col link-dark" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Tas</h5>
                        </div>
                    </a>
                </div>
        </div>

        <div class="mb-5">
            <h2 class="text-center mb-3">Product</h1>
                <hr color:black;">
                <div class="row">
                    @forelse ($products as $product)
                        <a class="col-md-3 link-dark mb-3" style="width:18rem" href="{{ url('detail',$product->id) }}">
                            <div class="card shadow" style="height: 350px">
                                <div class="card-body">
                                <img style="height:200px"
                                src="{{ Storage::url('public/posts/').$product->image }}"
                                class="card-img-top" alt="...">
                                <div class="mt-2">
                                    <h5 class="card-title">{{ $product->judul }}</h5>
                                    <p class="card-text">Rp {{ number_format($product->harga,0,',','.')  }} </p>
                                </div>
                            </div>
                            </div>
                        </a>
                    @empty
                    <div class="alert alert-danger">
                       Maaf untuk saat ini belum ada product
                    </div>
                    @endforelse

                </div>
        </div>

</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.kategory').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
@endsection



