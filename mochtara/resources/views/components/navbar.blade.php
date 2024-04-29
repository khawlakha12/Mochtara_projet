<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mochtara</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="img/logo.png" href="#">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center  me-auto me-lg-0">
                <img src="img/logo.png" alt="Mochtara">
                <h1>Mochtara</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                        @if (auth()->check())
                            <a href="/design">Design</a>
                        @endif
                    </li>
                    <li class="dropdown"><a href="/shop"><span>shop</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="javascript:void(0);" class="category-link"
                                        data-category="{{ $category->name }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="/ser">Services</a></li>
                    <li><a href="/contact" class="">Contact</a></li>
                </ul>
            </nav>

            <div class="header-social-links">
                <a href="#" class="facebook"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @auth
                        <i class="bi bi-person-circle"></i>
                        <div class="dropdown-menu dropdown-navbar"
                            style="background: black;border: solid;margin-top:30px;margin-right:40px;"
                            aria-labelledby="navbarDropdownMenuLink">

                            <a href="javascript:void(0)"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            @if (auth()->user()->role == 'admin')
                                <a href="/admin">
                                    Dashboard
                                </a>
                            @elseif(auth()->user()->role == 'designer')
                                <a href="/new_design">
                                    Dashboard
                                </a>
                            @endif
                        </div>
                    @else
                        <i class="bi bi-person-circle"></i>
                        <div class="dropdown-menu dropdown-navbar" style="background: black;"
                            aria-labelledby="navbarDropdownMenuLink">
                            <div class="dropdown-divider"></div>
                            <div style="display:flex;flex-direction: column;">
                                <a href="/register">
                                    Register
                                </a>
                                <a href="/log" style="margin-top: 30px;">
                                    Login
                                </a>
                            </div>
                        </div>
                    @endauth

            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
