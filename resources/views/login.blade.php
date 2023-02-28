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
    <link rel="stylesheet" href="{!! asset('css/style2.css') !!}">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    {{-- Icon --}}
    <link href="https://tourism.surabaya.go.id/assets/front/css/font-awesome-6.min.css" rel="stylesheet">
</head>
<body style="background-image: url(assets/img/jembatan-suramadu.jpg)" id="bg-image">
    <div style="height: 100%; background-color: rgba(194, 85, 216, 0.39)" class="container-fluid">
        <form action="/login" method="POST">
            @csrf
            <div class="container d-flex flex-column" style="border: 2px solid #000">
                <div class="card" style="background-color: white; border-radius: 30px;">
                    <div class="col-md-5">
                        <div class="m-sm-4">
                            <h4 class="fw-bold mb-3 text-center" style="font-size: 21px;">Login Administrator</h4>
                            <div style="border-top: 3px solid #6868ac;" class="py-1"></div>
                            <p style="line-height: 1.5; font-size: 14px;" class="py-2">
                                Surabaya Tourism <br /> Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Pemerintah Kota Surabaya
                            </p>
                            <div style="border: 1px solid #6868ac;" class="my-2">
                                <div>
                                    <span class="my-2 label-input">Email</span>
                                    <input type="text" name="email" id="email" class="input shadow">
                                    <span class="symbol-input">
                                        <span class="fa fa-fw fa-envelope"></span>
                                    </span>
                                </div>
                                <div>
                                    <span class="my-2 label-input">Kata Sandi</span>
                                    <input type="password" name="password" id="password" class="input shadow" style="background: white;">
                                    <span class="symbol-input">
                                        <span class="fa fa-fw fa-lock"></span>
                                    </span>
                                </div>
                                <div>
                                    <span class="my-2 label-input">Role</span>
                                    <input type="dropdown" name="role" id="role" value="A" class="input shadow">Admin
                                    <input type="dropdown" name="role" id="role" value="K" class="input shadow">Kontributor
                                    <span class="symbol-input">
                                        <span class="fa fa-fw fa-envelope"></span>
                                    </span>
                                </div>
                            </div>
                            <p class="small">Lupa akun / belum punya akun? Hubungi <a href="#">tim Programmer.</a></p>
                        </div>
                    </div>    
                </div>
            </div>
        </form>
    </div>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>