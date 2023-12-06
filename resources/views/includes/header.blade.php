<nav class="navbar fixed-top navbar-expand-md bg-transparent">
    <div class="container-md">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="50" height="50"
                class="d-inline-block align-text-center">
            SDN Kesamiran 01
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end justify-content-center" tabindex="-1" id="navbarNav">
            <div class="offcanvas-header ms-2 mt-2">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SDN Kesamiran 01</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-3">
                <ul class="navbar-nav justify-content-end pe-2 flex-grow-1">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profil Sekolah</a></li>
                            <li><a class="dropdown-item" href="/staff_profile">Profil Guru & Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/galery" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="/news" class="nav-link">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                <a href="/login" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</nav>
