<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">Destinasi Wisata - Wisata Surabaya</title>
    <link rel="stylesheet" href="css/style.destinasi.css">
    <link rel="stylesheet" href="css/bootstap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header" id="pageTop">
        <nav class="nav-menuzord">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord menuzord-responsive">
                    <a href="https://tourism.surabaya.go.id" class="menuzord-text-brand">
                        <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="Wisata Surabaya">
                    </a>
                    <ul class="menuzord-menu menuzord-right menuzord-indentend scrollable" style="max-height: 400px;">
                        <li class="item">
                            <a href="beranda.php">Beranda</a>
                        </li>
                        <li class="active">
                            <a href="destinasi.php">Destinasi</a>
                        </li>
                        <li class="item">
                            <a href="#">UMKM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>