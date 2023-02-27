@extends('layouts.navbar')
@section('content')

<body>
    <div class="container">
        <div id="gallery" class="carousel slide mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/caa8f5/ffffff?text=Image+1"
                                alt="Image 1" />
                        </div>

                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/9984d4/ffffff?text=Image+2"
                                alt="Image 2" />
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/f35b04/ffffff?text=Image+6"
                                alt="Image 6" />
                        </div>

                        <div class="col">
                            <img class="img-fluid" src="http://via.placeholder.com/800x450/f18701/ffffff?text=Image+7"
                                alt="Image 7" />
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="justify-content-center mb-5">
            <h2 class="text-center mb-3 ">Kategory</h1>
                <hr>
                <div class="row gap-5 row-cols-5">
                    <div class="card col" style="width:13rem;" >
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>

                    <div class="card col" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>

                    <div class="card col" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>

                    <div class="card col" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>
                    <div class="card col" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>
                    <div class="card col" style="width:13rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kategory 1</h5>
                        </div>
                    </div>


                </div>
        </div>

        <div class=" mb-5">
            <h2 class="text-center mb-3">Product</h1>
                <hr style="height:30px; color:black;">
                <div class="row row-cols-3 gap-5">
                    <a class="card col link-dark" style="width:18rem" href="{{ url('detail') }}">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </a>
                    <a class="card col link-dark" style="width:18rem" href="{{ url('detail') }}">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </a >
                    <a  class="card col link-dark" style="width:18rem " href="{{ url('detail') }}">
                        <img style="height:200px"
                            src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gantungan Kunci keychain</h5>
                            <p class="card-text">Rp 15.890</p>
                        </div>
                    </a >

                </div>
        </div>
        @include('layouts.footbar')
</body>
@endsection
