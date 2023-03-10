    <header class="header" id="pageTop">
        <nav class="nav-menuzord">
            <div class="container clearfix">
                <div id="menuzord" class="menuzord menuzord-responsive">
                    <a href="https://tourism.surabaya.go.id" class="menuzord-text-brand">
                        <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="Wisata Surabaya">
                    </a>
                    <ul class="menuzord-menu menuzord-right menuzord-indentend scrollable" style="max-height: 400px;">
                        <li class="item">
                            <a href="/">Beranda</a>
                        </li>
                        <li class="item {{ ($title === "Destinasi Wisata - Wisata Surabaya") ? 'active' : '' }}">
                            <a href="/destinasi">Destinasi</a>
                        </li>
                        <li class="item {{ ($title === "Produk UMKM Surabaya") ? 'active' : '' }}">
                            <a href="/umkm">UMKM</a>
                        </li>

                        {{-- test about&post --}}
                        <li class="item {{ ($title === "About") ? 'active' : '' }}">
                            <a href="/about">About</a>
                        </li>
                        <li class="item {{ ($title === "Posts") ? 'active' : '' }}">
                            <a href="/posts">Blog</a>
                        </li>
                        {{-- test about&post --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    