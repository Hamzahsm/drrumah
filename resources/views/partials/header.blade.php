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
                        <a href="{{ route('login') }}" class="nav-link text-white"><i class="bi bi-person"></i> Login</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Register</a>
                    </li>
                    <hr>
                    {{-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jasa Desain
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Rumah</a></li>
                            <li><a href="#" class="dropdown-item">Hotel</a></li>
                        </ul>
                    </li> --}} 
                </ul>
                @else
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link text-white"><i class="bi bi-person"></i> Dashboard</a>
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