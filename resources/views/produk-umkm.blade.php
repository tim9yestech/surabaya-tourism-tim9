<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="public\images\Logo Surabaya.png">
    <title>Lapis Kukus Pahlawan - Produk UMKM Surabaya</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
    {{-- Style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/style2.css') !!}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-shadow bg-white">
        <div class="container">
            <a id="brand" href="/">
                <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="Wisata Surabaya" style="width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/destinasi">DESTINASI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> INFORMASI</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/produk-umkm">Produk UMKM</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-title bg-white">
        <div class="pt-7">
            <div class="container">
                <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="/produk-umkm">Produk UMKM</a></li>
                    </ol>
                </nav>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="page-title-content">
                            <h2 class="text-uppercase fw-bold">Lapis Kukus Surabaya</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>Nurul Maghfiroh</h1>
    <img src="{!! asset('assets/images/Gedung Jawa Pos.jpg') !!}" alt="John Anglo" width="300">

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
