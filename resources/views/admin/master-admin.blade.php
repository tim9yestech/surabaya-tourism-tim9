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
    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    {{-- Icon --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    {{-- Ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    {{-- Select Multiple --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- Sidebar --}}
    <section id="side-bar">
        <div class="left-position">
            <a href="#" >
                <div class="bar-user role">
                    <i class='bx bx-user'></i>
                    <span>{{ Auth::user()->role }}</span>
                </div>
            </a>
            {{-- <div class="bar-user admin-name">
                <span>{{ Auth::user()->name }}</span>
            </div> --}}
        </div>
        <ul class="side-menu top">
            <li class="{{ ($headtitle === "Dashboard") ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('role','admin')
            <li class="{{ ($headtitle === "Data Admin") ? 'active' : '' }}">
                <a href="{{ route('data-admin') }}">
                    <i class='bx bxs-user-badge'></i>
                    <span>Data Admin</span>
                </a>
            </li>
            @endcan
            <li class="{{ ($headtitle === "Data Wilayah") ? 'active' : '' }}">
                <a href="{{ route('data-wilayah') }}">
                    <i class='bx bxs-map-pin'></i>
                    <span>Data Wilayah</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Destinasi Wisata") ? 'active' : '' }}">
                <a href="{{ route('data-destinasi') }}">
                    <i class='bx bxs-map-alt'></i>
                    <span>Data Destinasi Wisata</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Kategori Destinasi") ? 'active' : '' }}">
                <a href="{{ route('data-kategoridestinasi') }}">
                    <span style="padding-left: 40px;">Kategori Destinasi</span>
                </a>
            </li>
            <li class="{{ ($headtitle === "Data Produk UMKM") ? 'active' : '' }}">
                <a href="{{ route('data-produk-umkm') }}">
                    <i class='bx bxs-store-alt'></i>
                    <span>Data Produk UMKM</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <span style="padding-left: 40px;">Kategori Produk UMKM</span>
                </a>
            </li>
            @can('role','admin')
            <li class="{{ ($headtitle === "Data Ulasan") ? 'active' : '' }}">
                <a href="{{ route('data-ulasan') }}">
                    <i class='bx bxs-comment-dots'></i>
                    <span>Data Ulasan</span>
                </a>
            </li>
            @endcan
        </ul>
    </section>

    {{-- Content --}}
	<section id="content">
		{{-- Navbar --}}
		<nav class="nav">
			<i class='bx bx-menu'></i>
            <div class="d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="name">{{ Auth::user()->name }}</span>
                <i class='bx bxs-user-circle'></i>
                <ul class="dropdown-menu dropdown-menu-end" style="font-size: 14px;">
                    <li>
                        <button class="dropdown-item" type="button">
                            <a href="{{ route('data-profil') }}" class="d-flex align-items-center">
                                <i class='bx bxs-user-circle'></i>
                                <span class="dropdown-span">Profil</span>
                            </a>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <a href="{{ route('data-pengaturan') }}" class="d-flex align-items-center">
                                <i class='bx bxs-cog'></i>
                                <span class="dropdown-span">Pengaturan</span>
                            </a>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout d-flex align-items-center">
                                <i class='bx bxs-log-out-circle'></i>
                                <span class="dropdown-span">Logout</span>
                            </a>
                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                @csrf
                            </form>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Main --}}
        <main>
            @yield('isi_konten')
        </main>
    </section>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- Javascript local --}}
    <script src="{!! asset('js/adminpanel.js') !!}"></script>
    {{-- DataTables --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    {{-- Ajax for Database --}}
    @yield('js_konten')
</body>
</html>

