<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="thumbnail" content="assets/images/404.html" />
    <title>@yield('title', 'National Academy of Research and Training Centre')</title>
    <meta name="description" content="@yield('description', 'National Academy of Research and Training Centre')" />
    <meta name="keywords" content="@yield('keywords', 'National Academy of Research and Training Centre')" />

    <meta name="author" content="@yield('author', 'NART')" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/maginific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/icofont.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/uicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
</head>

<body class="element-wrapper">

    <style>

    </style>

    <div id="google_translate_element"></div>

    @if (session('success') || session('error'))
        <div id="custom-toast" class="custom-toast {{ session('error') ? 'toast-error-border' : 'toast-success-border' }}">
            <div class="toast-content">
                @if (session('success'))
                    <i class="fi fi-rr-check-circle toast-icon" style="color: #28a745;"></i>
                    <div class="toast-message">{{ session('success') }}</div>
                @else
                    <i class="fi fi-rr-cross-circle toast-icon" style="color: #dc3545;"></i>
                    <div class="toast-message">{{ session('error') }}</div>
                @endif
                <button type="button" class="toast-close" onclick="closeToast()">&times;</button>
            </div>
            <div class="toast-progress {{ session('error') ? 'bg-danger' : 'bg-success' }}"></div>
        </div>
    @endif

    <div id="ed-mouse">
        <div id="cursor-ball"></div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <div class="offcanvas-logo">
                        <a href="{{ route('index') }}"><img src="assets/images/logo.png" alt="NART" /></a>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi fi-ss-cross"></i>
                    </button>
                </div>
                <div class="mobile-menu-modal-main-body">
                    <nav class="offcanvas__menu">
                        <ul class="offcanvas__menu_ul">
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('courses') }}">Courses</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a href="{{ route('department.computer') }}" class="offcanvas__sub_menu_item">Department of Computer</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="#">Language / भाषा</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('en'); return false;" class="offcanvas__sub_menu_item lang-item">English</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('hi'); return false;" class="offcanvas__sub_menu_item lang-item">Hindi (हिंदी)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('bn'); return false;" class="offcanvas__sub_menu_item lang-item">Bengali (বাংলা)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('te'); return false;" class="offcanvas__sub_menu_item lang-item">Telugu (తెలుగు)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('mr'); return false;" class="offcanvas__sub_menu_item lang-item">Marathi (मराठी)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('ta'); return false;" class="offcanvas__sub_menu_item lang-item">Tamil (தமிழ்)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('gu'); return false;" class="offcanvas__sub_menu_item lang-item">Gujarati (ગુજરાતી)</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('es'); return false;" class="offcanvas__sub_menu_item lang-item">Spanish</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('fr'); return false;" class="offcanvas__sub_menu_item lang-item">French</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#" onclick="doGTranslate('de'); return false;" class="offcanvas__sub_menu_item lang-item">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Topbar -->
    <div class="ed-topbar">
        <div class="container ed-container-expand">
            <div class="ed-topbar__inner">
                <div class="ed-topbar__logo">
                    <ul class="ed-topbar__info-social">
                        <li>
                            <a href="tel:{{ $CompanyPhone1 }}" target="_blank" style="color:#fff;">
                                <img src="assets/images/icons/icon-white-phone.svg" alt="Phone" />
                                +91 {{ $CompanyPhone1 }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="ed-topbar__info">
                    <ul class="ed-topbar__info-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/images/icons/icon-white-facebook.svg" alt="Facebook" /></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank"><img src="assets/images/icons/icon-white-twitter.svg" alt="Twitter" /></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/images/icons/icon-white-instagram.svg" alt="Instagram" /></a></li>
                    </ul>

                    <div class="ed-topbar__info-buttons">
                        <div class="ed-lang-dropdown" id="desktopLangDropdown">
                            <button class="ed-lang-btn" onclick="toggleLangMenu(event)">
                                🌐 Translate <i class="fi fi-ss-angle-small-down"></i>
                            </button>
                            <div class="ed-lang-menu" id="desktopLangMenu">
                                <a href="#" onclick="doGTranslate('en'); return false;">English</a>
                                <a href="#" onclick="doGTranslate('hi'); return false;">हिंदी</a>
                                <a href="#" onclick="doGTranslate('bn'); return false;">বাংলা</a>
                                <a href="#" onclick="doGTranslate('te'); return false;">తెలుగు</a>
                                <a href="#" onclick="doGTranslate('mr'); return false;">मराठी</a>
                                <a href="#" onclick="doGTranslate('ta'); return false;">தமிழ்</a>
                                <a href="#" onclick="doGTranslate('gu'); return false;">ગુજરાતી</a>
                                <a href="#" onclick="doGTranslate('es'); return false;">Español</a>
                                <a href="#" onclick="doGTranslate('fr'); return false;">Français</a>
                                <a href="#" onclick="doGTranslate('de'); return false;">Deutsch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="ed-header ed-header--style4 ed-header--style5">
        <div class="container ed-container-expand">
            <div class="ed-header__inner">
                <div class="ed-header__left--style2">
                    <div class="ed-header__left-widget--style2">
                        <div class="ed-topbar__logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo-banner.jpeg') }}" alt="logo" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ed-header__right">
                    <nav class="ed-header__navigation">
                        <ul class="ed-header__menu">
                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                            <li class="active"><a href="{{ route('about') }}">About</a></li>
                            <li>
                                <a href="javascript:void(0)">Courses<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('department.computer') }}">Department of Computer</a></li>
                                    <li><a href="{{ route('department.vocational') }}">Department of Vocational</a></li>
                                    <li><a href="{{ route('department.fire-safety') }}">Department of Fire Safety</a></li>
                                    <li><a href="{{ route('department.hardware.networking') }}">Department of Hardware and Networking</a></li>
                                    <li><a href="{{ route('department.management') }}">Department of Management</a></li>
                                    <li><a href="{{ route('department.languages') }}">Department of Languages</a></li>
                                    <li><a href="{{ route('department.polytechnic') }}">Department of Polytechnic</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Student Zone<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('student.login') }}">Student Login</a></li>
                                    <li><a href="{{ route('student.result') }}">View Result</a></li>
                                    <li><a href="{{ asset('assets/images/admision-form.pdf') }}" target="_blank">Admission Form</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Franchisee<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('view.franchisee') }}">View Franchisee </a></li>
                                    <li><a href="{{ asset('institute_admin/index.php') }}">Franchisee Login</a></li>
                                    <li><a href="{{ route('franchisee.registration') }}">Franchisee Registration</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('training.placement') }}">Training and Placement</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
        </div>
    </header>

    @yield('content')
    @include('layouts.footer')
