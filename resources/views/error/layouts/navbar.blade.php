
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
</head>
<body>

    <div class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#D2E190;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="contact">{{ __('Contact Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">{{ __('About US') }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto" >
                    <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">Offline</a>
                            </li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    @include('layouts.app')
</body>
</html>
