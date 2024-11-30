<nav class="navbar fixed-top navbar-expand-md bg-transparent">
    <div class="container-md">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/kemdikbud.png') }}" alt="Logo" class="d-inline-block align-text-center"
                width="50" height="50">
                SDN LUMINGSER 01
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end justify-content-center" tabindex="-1" id="navbarNav">
            <div class="offcanvas-header ms-2 mt-2">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SDN LUMINGSER 01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-3">
                <ul class="navbar-nav nav-underline justify-content-end flex-grow-1 pe-2">
                    <li class="nav-item">
                        <a href="/" class="{{ request()->is('/') ? 'nav-link active' : 'nav-link' }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('profile') || request()->is('staff_profile') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profil Sekolah</a></li>
                            <li><a class="dropdown-item" href="/staff_profile">Profil Guru & Staff</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/galery"
                            class="{{ request()->is('galery') ? 'nav-link active' : 'nav-link' }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="/news"
                            class="{{ request()->is('news') ? 'nav-link active' : 'nav-link' }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact"
                            class="{{ request()->is('contact') ? 'nav-link active' : 'nav-link' }}">Kritik & Saran</a>
                    </li>
                </ul>
                {{-- <a href="/login" class="{{ request()->is('login') ? 'btn active' : 'btn' }}">Login <i class="bi bi-arrow-right-circle"></i></a> --}}
            </div>
        </div>
    </div>
</nav>
