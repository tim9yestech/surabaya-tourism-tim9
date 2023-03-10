<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo-Surabaya.png') }}">
    <title>John Anglo - Produk UMKM Surabaya</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
    {{-- Style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/umkm.css') !!}">
    {{-- Icon --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg" style="box-shadow: 0 3px 10px rgba(0, 0, 0, 0.10); background: #fff;">
        <div class="container clearfix">
            <a href="/">
                <img src="{{ asset('assets/img/Sparkling-Surabaya.png') }}" alt="Wisata Surabaya" style="width : 100px;">
            </a>
            <div class="ms-auto" style="width: 44%; padding-right: 50px;">
                <ul class="d-flex fw-semibold justify-content-end" style="grid-gap: 20px; max-height: 400px; list-style: none; margin-bottom: 0; padding: 29px 0;">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/destinasi">Destinasi</a></li>
                    <li><a class="active" href="/umkm">Umkm</a></li>
                    <li><a href="#">Informasi</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div style="padding-top: 3.13rem;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="page-title-content">
                            <div class="mb-2" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="/">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        UMKM
                                    </li>
                                </ol>
                            </div>
                            <div style="padding-top: 5px;">
                                <h2 class="text-uppercase fw-bold">John Anglo</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-7">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 65px;">
                <div class="carousel-inner"style="border-radius: 15px; max-height: 500px;">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/John-Anglo(1).jpg') }}" class="d-block w-100" alt="John Anglo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/John-Anglo(2).jpg') }}" class="d-block w-100" alt="John Anglo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/John-Anglo(3).jpg') }}" class="d-block w-100" alt="John Anglo">
                    </div>
                </div>
                <button class="carousel-control-prev owl-nav" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next owl-nav" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div style="display: inline-block; background: #6868ac; border-radius: 5px; padding: 10px; margin-bottom: 45px;">
                <span class="fw-semibold" style="font-size: 18px; color: #fff;">John Anglo</span>
            </div>
            <div class="d-flex justify-content-between mb-5" style="width: 100%; font-size: 15px;">
                <table class="table text-left" style="width: 54%; background-color: #f5f6f8; border:3px solid #d9d9d9;">
                    <tr>
                        <th>Lembaga Pembina</th>
                        <td>:</td>
                        <td>Dinas Perdagangan Surabaya</td>
                    </tr>
                    <tr>
                        <th>Legalitas</th>
                        <td>:</td>
                        <td>SIUP</td>
                    </tr>
                    <tr>
                        <th>Nama Usaha</th>
                        <td>:</td>
                        <td>John Anglo</td>
                    </tr>
                    <tr>
                        <th>Jenis Produk</th>
                        <td>:</td>
                        <td>Pakaian, Aksesoris, Bahan Kulit</td>
                    </tr>
                    <tr>
                        <th>Outlet</th>
                        <td>:</td>
                        <td>Pakuwon City Mall 1 (sebelah Resto Daun Lada), Jl. Raya Laguna KJW Putih Tambak No. 2, Surabaya Timur</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td>:</td>
                        <td><a href="#">https://sepatukulitjhonanglo.wordpress.com/</a></td>
                    </tr>
                    <tr>
                        <th>Media Sosial</th>
                        <td>:</td>
                        <td><a href="#">https://www.instagram.com/johnanglo_leather/</a></td>
                    </tr>
                    <tr>
                        <th>Nama Pemilik</th>
                        <td>:</td>
                        <td>Agus Nanang, S.T. </td>
                    </tr>
                    <tr>
                        <th>Alamat Pemilik</th>
                        <td>:</td>
                        <td>Jl. Medokan Asri Barat IX / 31, Surabaya Timur</td>
                    </tr>
                    <tr>
                        <th>No. Telp</th>
                        <td>:</td>
                        <td>089681598174</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>johnanglo_leather@yahoo.com</td>
                    </tr>
                </table>
                <div style="width: 40%;">
                    <div style="display: inline-block; border-radius: 5px; background: #6868ac; padding: 15px 40px;">
                        <p style="color: #fff; margin-top: 16px; text-align: justify;">
                            UKM Q - LIT JOHN ANGLO leather goods merupakan usaha perorangan yang memproduksi dengan bahan baku kulit untuk
                            dijadikan Jaket, Tas, Sepatu, Sabuk, dan Dompet. 
                        </p>
                    </div>
                </div>
            </div>
            <div style="padding-top: 4rem;">
                <div class="pb-4 fw-bold" style="font-size: 20px;">Produk UMKM Lainnya</div>
                <div class="row">
                    <div class="col-md-4 text-center my-2">
                        <a href="#" class="text-dark">
                            <div class="img-effect">
                                <img class="img-fluid" src="{{ asset('assets/img/Monumen-Tugu-Pahlawan(1).jpg') }}" alt="Monumen Tugu Pahlawan">
                            </div>
                            <div class="mt-3">
                                <div>
                                    <span class="badge-purple">Pakaian</span>
                                </div>
                                <hr class="my-2 w-100" style="background-color: #6868ac;">
                                <h5 class="fw-bold" style="font-size: 16px;">Lapis Kukus Pahlawan</h5>
                                <h6 style="font-size: 14px; font-weight: 400;">
                                    <i class='bx bxs-map-pin' style="font-size: 16px;"></i>
                                    Seluruh Wilayah Surabaya
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center my-2">
                        <a href="#" class="text-dark">
                            <div class="img-effect">
                                <img class="img-fluid" src="{{ asset('assets/img/Monumen-Tugu-Pahlawan(1).jpg') }}" alt="Monumen Tugu Pahlawan">
                            </div>
                            <div class="mt-3">
                                <div>
                                    <span class="badge-purple">Pakaian</span>
                                </div>
                                <hr class="my-2 w-100" style="background-color: #6868ac;">
                                <h5 class="fw-bold" style="font-size: 16px;">Lapis Kukus Pahlawan</h5>
                                <h6 style="font-size: 14px; font-weight: 400;">
                                    <i class='bx bxs-map-pin' style="font-size: 16px;"></i>
                                    Seluruh Wilayah Surabaya
                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center my-2">
                        <a href="#" class="text-dark">
                            <div class="img-effect">
                                <img class="img-fluid" src="{{ asset('assets/img/Monumen-Tugu-Pahlawan(1).jpg') }}" alt="Monumen Tugu Pahlawan">
                            </div>
                            <div class="mt-3">
                                <div>
                                    <span class="badge-purple">Pakaian</span>
                                </div>
                                <hr class="my-2 w-100" style="background-color: #6868ac;">
                                <h5 class="fw-bold" style="font-size: 16px;">Lapis Kukus Pahlawan</h5>
                                <h6 style="font-size: 14px; font-weight: 400;">
                                    <i class='bx bxs-map-pin' style="font-size: 16px;"></i>
                                    Seluruh Wilayah Surabaya
                                </h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
