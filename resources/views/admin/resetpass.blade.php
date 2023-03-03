@extends('admin.sidebar')


@section('content')

<body>
    <div class="container">
        <h1>Ganti Password</h1>
        <div class="mt-3">
            <form action="#" method="GET">
                <div class="form-group">
                    <input type="password" name="passwordold" id="passwordold" placeholder="Password Lama" class="form-control mb-2">
                    <input type="password" name="passwordnew" id="passwordnew" placeholder="Password Baru" class="form-control mb-2">
                    <input type="password" name="passwordconfrim" id="passwordconfrim" placeholder="Konfrimasi Password" class="form-control mb-2">
                    <button type="submit" class="btn mb-3" style="background-color:#B5CF49 ">Ganti Password</button>
                </div>
            </form>
        </div>
    </div>

</body>


@endsection
