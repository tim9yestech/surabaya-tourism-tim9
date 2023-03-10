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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Icon --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
            <li class="{{ ($headtitle === "Dashboard") ? 'active' : '' }}">
                <a href="/admin">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Admin") ? 'active' : '' }}">
                <a href="/admin/data-admin">
                    <i class='bx bxs-user-badge'></i>
                    <span>Data Admin</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Destinasi Wisata") ? 'active' : '' }}">
                <a href="/admin/data-destinasi">
                    <i class='bx bxs-data'></i>
                    <span>Data Destinasi Wisata</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Produk UMKM") ? 'active' : '' }}">
                <a href="/admin/data-produk-umkm">
                    <i class='bx bxs-data'></i>
                    <span>Data Produk UMKM</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Ulasan") ? 'active' : '' }}">
                <a href="/admin/data-ulasan">
                    <i class='bx bxs-comment-dots'></i>
                    <span>Data Ulasan</span>
                </a>
            </li>
        </ul>
        <div class="dividing-line"></div>
        <ul class="side-menu top" style="margin-top: 29px;">
            <li class="{{ ($headtitle === "Profil Admin") ? 'active' : '' }}">
                <a href="/admin/profil">
                    <i class='bx bxs-user-circle'></i>
                    <span>Profil</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Pengaturan") ? 'active' : '' }}">
                <a href="/admin/pengaturan">
                    <i class='bx bxs-cog'></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="/login" class="logout">
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
                    <h1>{{ $headtitle }}</h1>
                </div>
            </div>
            @yield('isi_konten')
        </main>
    </section>

    {{-- Javascript --}}
    <script src="{!! asset('js/adminpanel.js') !!}"></script>
</body>
</html>

