@extends('layouts.main-tim')



@section('page-title')
    <div class="pt-7">
        <div class="container">
            <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 justify-content-center">
                    <li class="breadcrumb-item">
                        <a style="text-decoration:none" href="/">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Tim Kami
                    </li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="page-title-content pt-4">
                        <div class="">
                            <h2 class="text-uppercase font-weight-bold text-center">Tim Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <div class="sub-content">
            <div class="teams">
                <img src="assets/img/profile/profile-rengga.svg" alt="">
                <div class="name">Rengga Adistyan Orlando</div>
                <div class="desig">Front End</div>
                <div class="about">
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/radistyan-orland/"><i class="fa-brands fa-linkedin"
                                style="color: #6868ac;"></i></a>
                        <a href="radistyano@gmail.com"><i class="fa-solid fa-envelope" style="color: #6868ac;"></i></a>
                    </div>
                </div>
            </div>
            <div class="teams">
                <img src="assets/img/profile/profile-maghfiroh.svg" alt="">
                <div class="name">Nurul Maghfiroh</div>
                <div class="desig">Back End</div>
                <div class="about">
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/radistyan-orland/"><i class="fa-brands fa-linkedin"
                                style="color: #6868ac;"></i></a>
                        <a href="radistyano@gmail.com"><i class="fa-solid fa-envelope" style="color: #6868ac;"></i></a>
                    </div>
                </div>
            </div>
            <div class="teams">
                <img src="assets/img/profile/profile-ivanna.svg" alt="">
                <div class="name">Ivanna Rahmaningtyas</div>
                <div class="desig">Back End</div>
                <div class="about">
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/radistyan-orland/"><i class="fa-brands fa-linkedin"
                                style="color: #6868ac;"></i></a>
                        <a href="radistyano@gmail.com"><i class="fa-solid fa-envelope" style="color: #6868ac;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
