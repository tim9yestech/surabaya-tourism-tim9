<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{!! asset('assets/img/Logo-Surabaya.png') !!}">
    <title>Surabaya Tourism | Dinas Kebudayaan, Kepemudaan, dan Olahraga serta Pariwisata</title>
    {{-- Style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/login.css') !!}">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    {{-- Icon --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background-image: url({!! asset('assets/img/jembatan-suramadu.jpg') !!})" id="bg-image">
    <div class="container-fluid cover">
        <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin" style="--bs-modal-width: 900px;">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow d-flex flex-row padding-box" style="border: none; background-color: #ffffff54;">    
                    <div class="row" style="width: fit-content;">
                        <div class="container col-lg-7 col-md-12 text-center" style="margin: 0;">
                            <img class="img-fluid" src="{!! asset('assets/img/img-login.jpg') !!}" alt="Wisata Surabaya">
                        </div>
                        <div class="container col-lg-5 col-md-12" style="margin: 0;">
                            <h4 class="fw-semibold mb-3 text-center">Login Administrator</h4>
                            <div class="py-1" style="border-top: 3px solid #6868ac;"></div>
                            <p class="py-2" style="line-height: 1.5; font-size: 14px;">
                                Surabaya Tourism<br>Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Pemerintah Kota Surabaya
                            </p>
                            <form action="#" method="POST">
                                @csrf
                                <div class="my-2 border-form">
                                    <div class="wrap-input">
                                        <label for="email" class="label-input my-2">Email</label>
                                        <input type="email" id="email" name="email" placeholder="name@example.com" class="input shadow form-control {{ $errors -> has('email') ? 'is-invalid' : '' }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <span class="symbol-input">
                                            <i class='bx bxs-envelope'></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input">
                                        <label for="password" class="label-input my-2">Password</label>
                                        <input type="password" id="password" name="password" class="input input-bg shadow form-control {{ $errors -> has('password') ? 'is-invalid' : '' }}">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <span class="symbol-input">
                                            <i class='bx bxs-lock-alt'></i>
                                        </span>
                                    </div>
                                </div>
                                <p style="font-weight: 400; font-size: 75%;">
                                    Lupa akun / minat jadi Kontributor? Hubungi 
                                    <a class="fw-bold" href="https://wa.wizard.id/caf000" target="_blank">tim Programmer</a>. 
                                </p>
                                <div class="row text-center">
                                    <div class="col-6 my-1">
                                        <button type="submit" class="btn btn-rounded btn-purple w-100 text-white d-flex justify-content-center align-items-center">
                                            <i class='bx bx-log-in'></i>
                                            <span style="padding-left: 6px;">Login</span>
                                        </button>
                                    </div>
                                    <div class="col-6 my-1">
                                        <a href="/" class="btn btn-rounded w-100 btn-white d-flex justify-content-center align-items-center">
                                            <i class='bx bx-chevron-left'></i>
                                            Beranda
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>