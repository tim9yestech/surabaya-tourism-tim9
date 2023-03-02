<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{!! asset('assets/img/Logo-Surabaya.png') !!}">
    <title>Administrator Panel | Surabaya Tourism</title>
    {{-- Style --}}
    <link rel="stylesheet" href="{!! asset('css/admin-panel.css') !!}">
    {{-- Icon --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Sidebar --}}
    <section id="sidebar">
        <div class="position">
            <a href="#" >
                <div class="bar-user role">
                    <i class='bx bx-user'></i>
                    <span>Admin</span>
                </div>
            </a>
            <div class="bar-user admin-name">
                <span>Nurul Maghfiroh</span>
            </div>
        </div>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user-badge'></i>
                    <span>Data Admin</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-data'></i>
                    <span>Data Destinasi Wisata</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-data'></i>
                    <span>Data Produk UMKM</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-comment-dots'></i>
                    <span>Data Ulasan</span>
                </a>
            </li>
        </ul>
        <div class="dividing-line"></div>
        <ul class="side-menu top" style="margin-top: 29px;">
            <li>
                <a href="#">
                    <i class='bx bxs-user-circle'></i>
                    <span>Profil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>

    {{-- Content --}}
	<section id="content">
		{{-- Navbar --}}
		<nav>
			<i class='bx bx-menu'></i>
            <span>Selamat Datang di Administrator Panel!</span>
        </nav>

        {{-- Main --}}
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </main>
    </section>

    {{-- Javascript --}}
    <script src="{!! asset('js/adminpanel.js') !!}"></script>
</body>
</html>

