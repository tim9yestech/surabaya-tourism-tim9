@extends('layouts.main-destinasi')

@section('page-title')
    <div class="pt-7">
        <div class="container">
            <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 justify-content-center">
                    <li class="breadcrumb-item">
                        <a style="text-decoration:none" href="/">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Destinasi Wisata
                    </li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <div class="">
                            <h2 class="text-uppercase font-weight-bold">Destinasi Wisata</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-wrapper')
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-md-10 px-0">
                    <div class="accordion filters" id="accordion">
                        <div class="grid-container featured">
                            <ul class="grid-container-list fill-3 pl-0">
                                <li class="accordion-heading grid-fill-3">
                                    <h4>
                                        <div class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#contentFilterArea" aria-expanded="true"
                                            aria-controls="contentFilterArea">
                                            <span class="font-weight-bold">Filter Wilayah</span>
                                        </div>
                                    </h4>
                                </li>
                                <li class="accordion-heading grid-fill-3">
                                    <h4>
                                        <div class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#contentFilterCategory" aria-expanded="true"
                                            aria-controls="contentFilterCategory">
                                            <span class="font-weight-bold">Filter Kategori</span>
                                        </div>
                                    </h4>
                                </li>
                                <li class="accordion-heading grid-fill-3">
                                    <h4>
                                        <div class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#contentFilterKeyword" aria-expanded="true"
                                            aria-controls="contentFilterKeyword">
                                            <span class="font-weight-bold">Filter Keyword</span>
                                        </div>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="contentFilterArea" class="accordion-body in collapse">
                        <div class="grid-container spaced grid-filters">
                            <h6>
                                Filter Wilayah
                            </h6>
                            <div class="container-selector-label">
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="semua">
                                        <span>
                                            Semua
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="Surabaya Pusat">
                                        <span>
                                            Surabaya Pusat
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="Surabaya Barat">
                                        <span>
                                            Surabaya Barat
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="Surabaya Timur">
                                        <span>
                                            Surabaya Timur
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="Surabaya Utara">
                                        <span>
                                            Surabaya Utara
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="Surabaya Selatan">
                                        <span>
                                            Surabaya Selatan
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentFilterCategory" class="accordion-body in collapse">
                        <div class="grid-container spaced grid-filters">
                            <h6>
                                Filter Kategori
                            </h6>
                            <div class="container-selector-label">
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="jurisdiction_area" value="semua">
                                        <span>
                                            Semua
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="history-&amp;-heritage">
                                        <span>
                                            History &amp; Heritage
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="museum">
                                        <span>
                                            Museum
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="religi">
                                        <span>
                                            Religi
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="monumen-&amp;-landmark">
                                        <span>
                                            Monumen &amp; Landmark
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="outdoor-and-nature">
                                        <span>
                                            Outdoor and Nature
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="kampung-wisata">
                                        <span>
                                            Kampung Wisata
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="city-park">
                                        <span>
                                            City Park
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="pusat-perbelanjaan">
                                        <span>
                                            Pusat Perbelanjaan
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="pasar-tradisional">
                                        <span>
                                            Pasar Tradisional
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="cagar-budaya">
                                        <span>
                                            Cagar Budaya
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="art-culture">
                                        <span>
                                            Art &amp; Culture
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="sport">
                                        <span>
                                            Sport
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="kuliner">
                                        <span>
                                            Kuliner
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="mice">
                                        <span>
                                            Mice
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="family-activities">
                                        <span>
                                            Family Activities
                                        </span>
                                    </label>
                                </div>
                                <div class="selector-label">
                                    <label>
                                        <input type="radio" name="category_slug" value="spa-wellness">
                                        <span>
                                            SPA &amp; Wellness
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contentFilterKeyword" class="accordion-body in collapse">
                        <div class="grid-container spaced grid-filters">
                            <h6>
                                Filter Kata Kunci
                            </h6>
                            <div class="container-selector-label">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 px-0">
                    <button type="submit" class="btn btn-xs btn-primary w-100" fdprocessedid="vl2mcx">
                        <i class="fa fa-fw fa-search"></i>
                        Filter
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/museum-pendidikan-surabaya">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648709900_1.jpg"
                                alt="Museum Pendidikan Surabaya">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Museum Pendidikan Surabaya
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Genteng Kali No. 10
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/museum-olahraga-surabaya">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648710891_1.jpg"
                                alt="Museum Olahraga Surabaya">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Museum
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Museum Olahraga Surabaya
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Indragiri No.6, Gelora Pancasila
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/masjid-nasional-al-akbar">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648711246_1.jpg"
                                alt="Masjid Nasional Al Akbar">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Religi
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Religi
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Religi
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Religi
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Religi
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Masjid Nasional Al Akbar
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Masjid Agung Timur No.1
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/kampung-lawas-maspati">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648712049_1.jpg"
                                alt="Kampung Lawas Maspati">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Kampung Wisata
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Kampung Wisata
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Kampung Wisata
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Kampung Wisata
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Kampung Wisata
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Kampung Lawas Maspati
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Maspati Gg. VI, Bubutan
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/taman-mozaik">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1654138693_1.jpg"
                                alt="Taman Mozaik">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                City Park
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                City Park
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                City Park
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                City Park
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                City Park
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Taman Mozaik
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jalan Wiyung Praja, Wiyung
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/kebun-binatang-surabaya">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648713405_1.jpg"
                                alt="Kebun Binatang Surabaya">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0.25s ease 0s; width: 2196px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Outdoor and Nature
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Family Activities
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Outdoor and Nature
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Family Activities
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Outdoor and Nature
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Family Activities
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Kebun Binatang Surabaya
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Setail No. 1, Darmo, Wonokromo
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/monumen-tugu-pahlawan">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648713708_1.jpg"
                                alt="Monumen Tugu Pahlawan">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0.25s ease 0s; width: 2196px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Monumen &amp; Landmark
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                History &amp; Heritage
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Monumen &amp; Landmark
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                History &amp; Heritage
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Monumen &amp; Landmark
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                History &amp; Heritage
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Monumen Tugu Pahlawan
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Pahlawan
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/tunjungan-plaza">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648714528_1.jpg"
                                alt="Tunjungan Plaza">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pusat Perbelanjaan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pusat Perbelanjaan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pusat Perbelanjaan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pusat Perbelanjaan
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pusat Perbelanjaan
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Tunjungan Plaza
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            JL. Jendral Basuki Rachmat no.8-12, Surabaya
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 text-center my-2">
                    <a href="https://tourism.surabaya.go.id/travel/detail/pasar-genteng">
                        <div class="img-rounded-hover-effect">
                            <img class="img-fluid" src="https://tourism.surabaya.go.id/storage/tour/1648714823_1.jpg"
                                alt="Pasar Genteng">
                        </div>
                    </a>
                    <div class="mt-2">
                        <div class="owl-carousel slider-category owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-731px, 0px, 0px); transition: all 0s ease 0s; width: 1830px;">
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pasar Tradisional
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pasar Tradisional
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pasar Tradisional
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pasar Tradisional
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 365.987px;">
                                        <div class="item">
                                            <span class="badge badge-primary">
                                                Pasar Tradisional
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <hr class="my-2 bg-primary">
                        <h5 class="font-weight-bold">
                            Pasar Genteng
                        </h5>
                        <h6>
                            <i class="fa fa-fw fa-map-marker-alt"></i>
                            Jl. Genteng Besar
                        </h6>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
            </div>
        </div>
    </section>
@endsection
