<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel CRUD | @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#">Fardi.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 fs-5">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-3 my-5 mt-5">
        @yield('content')
    </div>
    <footer class="navbar-dark bg-dark sticky-bottom">
        <div class="container pt-5">
            <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
                <div class="col col-lg-6 mb-lg-0 mb-4">
                    <h2 class="fw-bold text-white mb-3">Fardi.</h2>
                    <p class="text-white-50">UIUX Design and Front-End Development</p>
                </div>
                <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
                    <h5 class="fw-bold text-white">Menu</h5>
                    <a href="/" class="text-white-50 mt-3"> Home </a>
                    <a href="/cart" class="text-white-50 mt-2"> Cart </a>
                    <a href="/dashboard" class="text-white-50 mt-2"> Dashboard </a>
                </div>
                <div class="col col-lg-3 d-flex flex-column mb-lg-0 mb-4">
                    <h5 class="fw-bold text-white mb-3">Contact</h5>
                    <a href="#" class="text-white-50 mt-2"> +62 838 9142 8869 </a>
                    <a href="#" class="text-white-50 mt-2">
                        fardikhalikramadhan@gmail.com
                    </a>
                    <p clss="text-white-50 mt-2">Tangerang, Banten, Indonesia.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p class="text-white text-center copytext">
                        &copy; Copyright 2023 by Fardi, All Right Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
