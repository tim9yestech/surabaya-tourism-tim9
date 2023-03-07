<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo-Surabaya.png') }}">
    <title>Lapis Kukus Pahlawan - Produk UMKM Surabaya</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
    {{-- Style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/umkm.css') !!}">
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
                                <h2 class="text-uppercase fw-bold">Lapis Kukus Pahlawan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-7">
        <div class="container">
            <div class="d-flex justify-content-center" style="margin-bottom: 65px;">
                <img src="{{ asset('assets/img/John-Anglo(1).jpg') }}" alt="John Anglo" style="object-fit: cover; max-width: 700px; border-radius: 15px;">
            </div>
            <div style="display: inline-block; background: #6868ac; border-radius: 5px; padding: 10px; margin-bottom: 50px;">
                <span class="fw-semibold" style="font-size: 18px; color: #fff;">Lapis Kukus Pahlawan</span>
            </div>
            <div class="d-flex justify-content-between" style="width: 100%; font-size: 15px;">
                <table class="table text-left" style="width: 54%; background-color: #f5f6f8; border:3px solid #d9d9d9;">
                    <tr>
                        <th>Legalitas</th>
                        <td>:</td>
                        <td>SIUP</td>
                    </tr>
                    <tr>
                        <th>Nama Usaha</th>
                        <td>:</td>
                        <td>Lapis Kukus Pahlawan</td>
                    </tr>
                    <tr>
                        <th>Nama Pemilik</th>
                        <td>:</td>
                        <td>Rizka Wahyu Romadhona</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>Jl. Kutai No. 53, Wonokromo, Surabaya</td>
                    </tr>
                    <tr>
                        <th>No. Telp</th>
                        <td>:</td>
                        <td>031 8493237</td>
                    </tr>
                    <tr>
                        <th>Jenis Produk</th>
                        <td>:</td>
                        <td>Makanan, Oleh-Oleh</td>
                    </tr>
                    <tr>
                        <th>Outlet</th>
                        <td>:</td>
                        <td>Store Diponegoro, Store Genteng Besar, Store Stasiun Gubeng Baru, Store Stasiun Pasar Turi, Store Pahlawan, Store Berbek Industri</td>
                    </tr>
                    <tr>
                        <th>Alamat Web</th>
                        <td>:</td>
                        <td><a href="#">https://lapispahlawan.co.id/</a></td>
                    </tr>
                    <tr>
                        <th>Media Sosial</th>
                        <td>:</td>
                        <td><a href="#">https://www.instagram.com/lkspahlawan/</a></td>
                    </tr>
                </table>
                <div style="width: 40%;">
                    <div style="display: inline-block; border-radius: 5px; background: #6868ac; padding: 15px 40px;">
                        <p style="color: #fff; margin-top: 16px; text-align: justify;">Lapis Kukus Pahlawan merupakan salah satu produk UMKM yang cukup ramai di Surabaya. Produk lapis kukus ini biasa dibeli sebagai buah tangan wisatawan yang berlibur ke Surabaya. Lapis Kukus Pahlawan merupakan salah satu produk UMKM yang cukup ramai di Surabaya. Produk lapis kukus ini biasa dibeli sebagai buah tangan wisatawan yang berlibur ke Surabaya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <h1>Nurul Maghfiroh</h1>
    <img src="{!! asset('assets/images/Gedung Jawa Pos.jpg') !!}" alt="John Anglo" width="300">

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
