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
                                <img src="assets/img/umkm/kerajinan-tangan/101-true-fashion-art.jpg" alt="Kerajinan Tangan" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Kerajinan Tangan
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/kerajinan-tangan/Kartini-Bordir.jpg" alt="Kartini-Bordir" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Kartini Bordir </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/kerajinan-tangan/light-craft.jpg" alt="light-craft.jpg" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Light Craft</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/makanan/dede-satoe.jpg" alt="Dede Satoe" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Dede Satoe </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/makanan/Kreasi-Fitri.jpg" alt="Kreasi-Fitri.jpg" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Kreasi Fitri </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/makanan/misscrip.jpg" alt="Misscrip" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Misscrip </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/pakaian/Era-Krisna.jpg" alt="Era-Krisna" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Era Krisna </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/pakaian/john-angelo.jpg" alt="John Angel" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> John Angel </h4>
                            </div>
                        </div>
                    </div>
                    <div class="item mb-4">
                        <div class="head-card border-0 shadow ">
                            <a href="#">
                                <img src="assets/img/umkm/pakaian/titi-collection.jpg" alt="Titi Collection" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h4> Titi Collection </h4>
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
                    <img src="assets/img/umkm/makanan/dede-satoe.jpg" class="card-img-top" alt="Dede Satoe">
                    <h3></h3>
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/makanan/Kreasi-Fitri.jpg" class="card-img-top" alt="Kreasi-Fitri.jpg">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/makanan/misscrip.jpg" class="card-img-top" alt="Misscrip">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/makanan/lapis-kukus-pahlawan.jpg" class="card-img-top" alt="Lapis Kukus Pahlawan">
                </div>
            </div>
        </div>
        <span class="content-title fw-bold">Kerajinan Tangan</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/kerajinan-tangan/101-true-fashion-art.jpg" class="card-img-top" alt="Fashion Art">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/kerajinan-tangan/light-craft.jpg" class="card-img-top" alt="Light Craft">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/kerajinan-tangan/Kesra-Bordir.jpg" class="card-img-top" alt="Kesra Bordir">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/kerajinan-tangan/Kulit-Kreasindo.jpg" class="card-img-top" alt="Kulit Kreasindo">
                </div>
            </div>
        </div>
        <span class="content-title fw-bold">Pakaian</span>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/pakaian/Era-Krisna.jpg" class="card-img-top" alt="Era Krisna">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/pakaian/john-angelo.jpg" class="card-img-top" alt="John Angelo">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/pakaian/titi-collection.jpg" class="card-img-top" alt="Titi Collection">
                </div>
            </div>
            <div class="col">
                <div class="card-content">
                    <img src="assets/img/umkm/pakaian/Vienk-Gallery.jpg" class="card-img-top" alt="Vienk-Gallery">
                </div>
            </div>
        </div>
    </div>
    <div class="btn-next mb-5">
        <span class="badge badge-primary">Selengkapnya<i class="fa-sharp fa-solid fa-arrow-right px-1"></i></span>
    </div>
@endsection