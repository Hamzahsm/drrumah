<!-- header with bootstrap -->
{{-- <nav class="navbar bg-body-tertiary fixed-top"> --}}
<nav class="navbar bg-light sticky-top shadow">
    <div class="container-fluid pb-2">
        <a href="/" class="navbar-brand text-uppercase fw-bold fst-italic">dokterrumah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end btn-gradient" tab-index="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @guest
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="/" class="nav-link menu-warning"><i class="bi bi-record"></i> Home</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('guest.tentang.kami') }}" class="nav-link menu-warning"><i class="bi bi-record"></i> Tentang Kami</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle menu-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-record"></i> Layanan Kami 
                        </a>
                          <ul class="dropdown-menu"> 
                            <li><a class="dropdown-item menu-hover p-3 border-bottom" href="#"><i class="bi bi-arrow-right-short"></i> Jasa Arsitek</a></li>

                            <li><a class="dropdown-item menu-hover p-3 border-bottom" href="#"><i class="bi bi-arrow-right-short"></i> Jasa Bangun Rumah</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Bangun Kantor</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Bangun Gudang</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Bangun Ruko</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Bangun Pengurusan PBG</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Bongkaran</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Renovasi Rumah</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Renovasi Kantor</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Renovasi Gudang</a></li>

                            <li><a href="#" class="dropdown-item menu-hover p-3 border-bottom"><i class="bi bi-arrow-right-short"></i> Jasa Renovasi Ruko</a></li>

                            <li><a class="dropdown-item menu-hover p-3" href="#"><i class="bi bi-arrow-right-short"></i> Kontraktor Kolam Renang</a></li>
                          </ul>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('guest.blog') }}" class="nav-link menu-warning"><i class="bi bi-record"></i> Blog</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('guest.karir') }}" class="nav-link menu-warning"><i class="bi bi-record"></i> Karir</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('guest.kontak.kami') }}" class="nav-link menu-warning"><i class="bi bi-record"></i> Kontak Kami</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle menu-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-record"></i> Portofolio 
                        </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item p-3 menu-hover border-bottom" href="{{ route('guest.projek') }}"><i class="bi bi-arrow-right-short"></i> Projek</a></li>
                            <li><a class="dropdown-item p-3 menu-hover" href="{{ route('guest.testimoni') }}"><i class="bi bi-arrow-right-short"></i> Testimoni</a></li>
                          </ul>
                    </li> 
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link menu-warning"><i class="bi bi-person"></i> Login</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link menu-warning"><i class="bi bi-box-arrow-in-right"></i> Register</a>
                    </li>
                    <hr>
                </ul>
                @else
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link menu-warning"><i class="bi bi-person"></i> Dashboard</a>
                    </li>
                    <hr>
                    {{-- <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Register</a>
                    </li> --}}
                </ul>
                @endguest
            </div>
        </div>
    </div>
</nav>