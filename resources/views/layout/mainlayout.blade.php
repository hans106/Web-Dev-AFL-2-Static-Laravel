<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sumber Teknik | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sumberTeknik.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="logo-card-container">
                    <img src="{{ asset('images/CAP_SUMBER_TEKNIK[1].png') }}" alt="Logo Sumber Teknik">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/products">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/contact-us">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-fill">
            <div class="container mt-5 ">
        @yield('content')
    </div>
    </main>


    <footer class="bg-dark text-light text-center p-3 mt-5">
        © {{ date('Y') }} Toko Sumber Teknik. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
