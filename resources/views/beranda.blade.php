<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Surabaya</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo-Surabaya.png') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="main-wrapper home-main pb-3">
        <div class="bg-overlay-dark fullwidthbanner-container">
            <video class="w-100 video-front" autoplay muted loop id="myVideo"
                style="height: 100vh; object-fit: cover;">
                <source src="assets/video/surabaya.mp4" type="video/mp4">
            </video>
        </div>
        <header>
            @include('partials.navbar')
        </header>
        <div class="caption">
            <h1 class="main-title mb-0">WISATA SURABAYA</h1>
            <br>
            <h3 class="caption-1 mb-6 fw-bold">You will love every corner of it</h3>
            <p>Let's explore one of the biggest city in Indonesia with famous name called City of Heroes.</p>
        </div>
        <div class="my-10"></div>
        <div class="mt-9 container-shortcut">
            <div class="d-flex">
                <div class="text-center group-shortcut">
                    <a href="/destinasi" class="btn-shortcut btn-beat-radial">
                        <div class="d-block w-100">
                            <i class="fa fa-fw fa-map-marked-alt"></i>
                        </div>
                        <div class="d-block w-100">
                            <span>
                                Destinasi Wisata
                            </span>
                        </div>
                    </a>
                </div>
                <div class="text-center group-shortcut">
                    <a href="/umkm" class="btn-shortcut btn-beat-radial">
                        <div class="d-block w-100">
                            <i class="fa-sharp fa-solid fa-store fa-fw fa-lg"></i>
                        </div>
                        <div class="d-block w-100">
                            <span>
                                UMKM
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    <div class="section-segment pt-5"></div>
    <section class="icon-menu">
        <div class="container">
            <div class="col-10 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-3 text-center my-2">
                        <a href="#">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-event.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-event.png"
                                alt="Wisata Surabaya - Event">
                            <h6 class="font-weight-bold my-2">Event</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="#">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-maps.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-maps.png"
                                alt="Wisata Surabaya - Peta">
                            <h6 class="font-weight-bold my-2">Peta</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="/umkm">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-culinary.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-culinary.png"
                                alt="Wisata Surabaya - Kuliner">
                            <h6 class="font-weight-bold my-2">Kuliner</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="/umkm">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-shopping.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-shopping.png"
                                alt="Wisata Surabaya - Shopping">
                            <h6 class="font-weight-bold my-2">Shopping</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="/destinasi">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-outdoornature.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-outdoornature.png"
                                alt="Wisata Surabaya - Outdoor">
                            <h6 class="font-weight-bold my-2">Outdoor</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="/destinasi">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-hotel.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-hotel.png"
                                alt="Wisata Surabaya - Hotel">
                            <h6 class="font-weight-bold my-2">Hotel</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="/destinasi">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-heritage.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-heritage.png"
                                alt="Wisata Surabaya - Heritage">
                            <h6 class="font-weight-bold my-2">Heritage</h6>
                        </a>
                    </div>
                    <div class="col-3 text-center my-2">
                        <a href="#">
                            <img class="img-fluid" style="object-fit: cover;"
                                data-src="https://tourism.surabaya.go.id/assets/front/images/icon-faq.png"
                                src="https://tourism.surabaya.go.id/assets/front/images/icon-faq.png"
                                alt="Wisata Surabaya - FAQ">
                            <h6 class="font-weight-bold my-2">FAQ</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-explore.360 pt-4" py-3>
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h4 class="title-highlight">
                            <div style="color: #039be5;">Explore 360</div>
                            <div style="color: #ff9800;">Wisata Surabaya</div>
                        </h4>
                    </div>
                    <div class="col-4">
                        <div class="text-right">
                            <img src="https://tourism.surabaya.go.id/assets/front/images/icon-360.png"
                                class="img-fluid text-right img-icon">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="container_video_overlay">
                            <video class="w-100 video-front" autoplay muted loop id="myVideo"
                                style="object-fit: cover;">
                                <source src="assets/video/360.mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-map py-3"></section>

    <!-- Article Image -->
    <section class="article py-3">
        <div class="py-6">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <img src="https://tourism.surabaya.go.id/assets/front/images/icon-sign.png"
                            class="img-fluid mb-4" alt="Wisata Surabaya">
                        <h3 class="title-highlight-dark"> Start Your Best <br> Journey In Surabaya </h3>
                    </div>
                </div>
                <!-- image, title and location start  -->
                <div class="row my-4">
                    <!-- left image start -->
                    <div class="col-md-6 mb-2">
                        <div class="row">
                            <div class="col-md-12 my-4">
                                <a href="/destinasi" class="text-dark w-100">
                                    <div class="card card-img"
                                        style="box-shadow: none; border: none; border-radius: 20px;">
                                        <div class="img-hover-zoom--slowmo">
                                            <img src="assets/img/gedung-escompto.jpg"
                                                class="img-fluid card-img-top img-1">
                                        </div>
                                    </div>
                                    <div class="text-dark py-0 pt-3">
                                        <div class="mb-2">
                                            <span class="badge badge-primary ">History & Heritage</span>
                                        </div>
                                        <h5 class="font-weight-bold">GEDUNG ESCOMPTO</h5>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fa fa-fw fa-map-marker-alt "></i>
                                        Jl. Kembang Jepun No.180
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 my-4">
                                <a href=/destinasi" class="text-dark" w-100>
                                    <div class="card card-img"
                                        style="box-shadow: none; border: none; border-radius: 20px;">
                                        <div class="img-hover-zoom--slowmo">
                                            <img src="assets/img/festival-ludruk-remaja.jpg"
                                                class="img-fluid card-img-top img-3">
                                        </div>
                                    </div>
                                    <div class="text-dark py-0 pt-3">
                                        <div class="mb-2">
                                            <span class="badge badge-primary">Event</span>
                                        </div>
                                        <h5 class="font-weight-bold">Festival Ludruk Remaja</h5>
                                        <div class="mb-2">
                                            <i class="fa fa-fw fa-map-marker-alt"></i>
                                            Jl. Pemuda No.21, Surabaya
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- left image end -->

                    <!-- right image start -->
                    <div class="col-md-6 mb-2">
                        <div class="row">
                            <div class="col-md-12 my-4">
                                <a href="/destinasi" class="text-dark" w-100>
                                    <div class="card card-img"
                                        style="box-shadow: none; border: none; border-radius: 20px;">
                                        <div class="img-hover-zoom--slowmo">
                                            <img src="assets/img/grand-surabaya-hotel.jpg"
                                                class="img-fluid card-img-top img-2">
                                        </div>
                                    </div>
                                    <div class="text-dark py-0 pt-3">
                                        <div class="mb-2">
                                            <span class="badge badge-primary">Hotel</span>
                                        </div>
                                        <h5 class="font-weight-bold">Grand Surabaya Hotel</h5>
                                        <div class="mb-2">
                                            <i class="fa fa-fw fa-map-marker-alt"></i>
                                            Jl. Pemuda No.21, Surabaya
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 my-4">
                                <a href="/destinasi" class="text-dark w-100">
                                    <div class="card card-img"
                                        style="box-shadow: none; border: none; border-radius: 20px;">
                                        <div class="img-hover-zoom--slowmo">
                                            <img src="assets/img/itc-surabaya.jpg"
                                                class="img-fluid card-img-top img-4">
                                        </div>
                                    </div>
                                    <div class="text-dark py-0 pt-3">
                                        <div class="mb-2">
                                            <span class="badge badge-primary ">Pusat Perbelanjaan</span>
                                        </div>
                                        <h5 class="font-weight-bold">ITC Surbaya Mega Grosir</h5>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fa fa-fw fa-map-marker-alt "></i>
                                        Jl. Gembong No.20 - 30
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- right image end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Article Image end -->

    <!-- Footer Start -->
    @include('partials.footer')
</body>
<script src="js/toggler.js"></script>

</html>
