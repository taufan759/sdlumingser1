<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SDN Kesamiran 01</title>
<link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="/guru/tabungan" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Tabungan
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="/guru/settings" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="btn p-0">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg"
                                                alt="">
                                            <i class="fa fa-angle-down opacity-8 ml-2"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                           <a style="text-decoration:none" href="/guru/settings"> <button type="button" tabindex="0"
                                                class="dropdown-item">Settings</button></a>
                                           <a style="text-decoration:none" href="/guru/tabungan"> <button type="button" tabindex="0"
                                                class="dropdown-item">Tabungan</button></a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a style="text-decoration:none" href="/logout"> <button type="button" tabindex="0"
                                                class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left header-user-info ml-3">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button"
                                        class="btn-shadow btn btn-primary btn-sm show-toastr-example p-1">
                                        <i class="fa fa-calendar pl-1 pr-1 text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Pengajar</li>
                            <li>
                                <a href="/guru/akun-teacher" >
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                   Daftarkan Guru
                                </a>
                            </li>
                            <li>
                                <a href="/guru/teacher" >
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                   Insert Guru
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Components</li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-newspaper"></i>
                                    Berita
                                </a>
                                <ul>
                                    <li>
                                        <a href="/guru/berita">
                                            <i class="metismenu-icon"></i>
                                            Berita Post
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                           insert Berita 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Components
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="components-tabs.html">
                                            <i class="metismenu-icon">
                                            </i>Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                </div>
                                <div>Dashboard Guru
                                    <div class="page-title-subheading">👋  Hai!, {{auth()->user()->nama}} Bpk/Ibu guru SD Negeri Kesamiran 01.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow btn btn-dark mr-3">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper opacity-7 pr-2">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="badge badge-pill badge-secondary ml-auto">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="badge badge-pill badge-danger ml-auto">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#liveSearch").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("table tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>
</body>

</html>
