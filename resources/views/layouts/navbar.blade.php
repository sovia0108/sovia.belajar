<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-start me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/swa.png" alt="" class="me-6"> <!-- Add margin-end to separate the image from the text -->
        <div class="d-flex flex-column">
            <p class="mb-1">Kantor Pusat & Pabrik AMDK</p>
            <p class="mb-1">Jl. R.A. Kartini No.21 A Gresik 61122</p>
            <p class="mb-1">Jawa Timur</p>
        </div>
    </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('beranda') }}" class="{{ Request::routeIs('beranda') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('produk_layanan') }}" class="{{ Request::routeIs('produk_layanan') ? 'active' : '' }}">Produk & Layanan</a></li>
            <li><a href="{{ route('tentang_kami') }}" class="{{ Request::routeIs('tentang_kami') ? 'active' : '' }}">Tentang Kami</a></li>
            <li><a href="{{ route('pilih_kami') }}" class="{{ Request::routeIs('pilih_kami') ? 'active' : '' }}">Mengapa Memilih Kami</a></li>
            <li><a href="{{ route('berita') }}" class="{{ Request::routeIs('berita') ? 'active' : '' }}">Berita</a></li>
            <li><a href="{{ route('karir') }}" class="{{ Request::routeIs('karir') ? 'active' : '' }}">Karir</a></li>
            <li><a href="{{ route('kontak_kami') }}" class="{{ Request::routeIs('kontak_kami') ? 'active' : '' }}">Kontak Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      
    </div>
  </header>