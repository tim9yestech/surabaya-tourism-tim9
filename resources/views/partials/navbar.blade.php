    <header class="header" id="pageTop">
        <nav class="nav-menuzord">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord menuzord-responsive">
                    <a href="/" class="menuzord-text-brand">
                        <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png"
                            alt="Wisata Surabaya">
                    </a>
                    <button class="hamburger" id="hamburger">
                        <i class="fas fa-bars" style="color: #fff;"></i>
                    </button>
                    <ul class="menuzord-menu menuzord-right menuzord-indentend scrollable" style="max-height: 400px;">
                        <li class="item {{ $headtitle === 'Wisata Surabaya' ? 'active' : '' }}">
                            <a href="/">Beranda</a>
                        </li>
                        <li class="item {{ $headtitle === 'Destinasi Wisata - Wisata Surabaya' ? 'active' : '' }}">
                            <a href="/destinasi">Destinasi</a>
                        </li>
                        <li class="item {{ $headtitle === 'Produk UMKM - UMKM Surabaya' ? 'active' : '' }}">
                            <a href="/umkm">UMKM</a>
                        </li>
                        <li class="item {{ $headtitle === 'Tim JWP-9' ? 'active' : '' }}">
                            <a href="/tim">Tim Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
