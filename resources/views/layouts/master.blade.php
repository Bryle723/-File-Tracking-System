<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">

   
</head>
<body style="background-image: url('images/Car.jpg'); background-size: cover;">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h3><a class="navbar-brand" href="/">Demo Systems</a></h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link active" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/homepage">HomePage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/services">Services</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
@yield('content')
</div>
<script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>