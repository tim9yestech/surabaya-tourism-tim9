@extends('layouts.main-umkm')

@section('page-title')
    <div class="pt-7">
        <div class="container">
        <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 justify-content-center">
            <li class="breadcrumb-item">
                <a style="text-decoration:none" href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                UMKM
            </li>
            </ol>
        </nav>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
            <div class="page-title-content">
                <div class="">
                <h2 class="text-uppercase font-weight-bold">Produk UMKM</h2>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('highlight-image')
    <div class="container-fluid">
        <div class="row mt-3">
                <div class="owl-carousel owl-theme mb-5 text-center">
                    <div class="item mb-1">
                        <div class="head-card shadow">
                            <a href="#">
                                <img src="assets/img/1.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/2.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/3.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/4.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/5.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/6.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/7.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/8.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/9.jpg" alt="Lapis Kukus Pahlawawan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Lapis Kukus Pahlawan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <span class="content-title fw-bold">Makanan</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/1.jpg" class="card-img-top" alt="gambar1">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/2.jpg" class="card-img-top" alt="gambar2">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="gambar3">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/4.jpg" class="card-img-top" alt="gambar4">
                </div>
            </div>
        </div>
        <span class="content-title fw-bold">Kerajinan Tangan</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/1.jpg" class="card-img-top" alt="gambar1">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/2.jpg" class="card-img-top" alt="gambar2">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="gambar3">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/4.jpg" class="card-img-top" alt="gambar4">
                </div>
            </div>
        </div>
        <span class="content-title fw-bold">Pakaian</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/1.jpg" class="card-img-top" alt="gambar1">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/2.jpg" class="card-img-top" alt="gambar2">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="gambar3">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/4.jpg" class="card-img-top" alt="gambar4">
                </div>
            </div>
        </div>
        <span class="content-title fw-bold">Kebutuhan Pokok</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/1.jpg" class="card-img-top" alt="gambar1">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/2.jpg" class="card-img-top" alt="gambar2">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/3.jpg" class="card-img-top" alt="gambar3">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/4.jpg" class="card-img-top" alt="gambar4">
                </div>
            </div>
        </div>
    </div>
    <div class="btn-next">
        <span class="badge badge-primary">Selengkapnya</span>
    </div>
@endsection