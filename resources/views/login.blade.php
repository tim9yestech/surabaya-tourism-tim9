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
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body style="background-image: url(assets/img/jembatan-suramadu.jpg)" id="bg-image">
    <div style="height: 100%; background-color: rgba(194, 85, 216, 0.39)" class="container-fluid">
        <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow d-flex flex-row padding-box" style="border: none;">
                    <div class="container">
                        <h4 class="fw-semibold mb-3 text-center" style="font-size: 21px; margin-top: 20px;">Login Administrator</h4>
                        <div class="py-1" style="border-top: 3px solid #6868ac;"></div>
                        <p class="py-2" style="line-height: 1.5; font-size: 14px;">
                            Surabaya Tourism<br>Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Pemerintah Kota Surabaya
                        </p>
                        <form action="#" method="POST">
                            <div class="my-2" style="border: 1px solid #6868ac; border-radius: 3px;">
                                <div class="wrap-input">
                                    <label for="email" class="label-input my-2">Email</label>
                                    <input type="email" id="email" placeholder="name@example.com" class="input shadow">
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <i data-feather="mail"></i>
                                    </span>
                                </div>
                                <div class="wrap-input">
                                    <label for="role" class="label-input my-2">Role</label>
                                    <select id="role" class="input shadow" style="border: none; background-color: #fff;">
                                        <option>-- Pilih Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="kontributor">Kontributor</option>
                                    </select>
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <i data-feather="user-check"></i>
                                    </span>
                                </div>
                                <div class="wrap-input">
                                    <label for="password" class="label-input my-2">Password</label>
                                    <input type="password" id="password" placeholder="********" class="input shadow">
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <i data-feather="lock"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <h6>Coba lihat</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- Feather Icons --}}
    <script> feather.replace() </script>
</body>
</html>