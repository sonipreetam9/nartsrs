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

    <div id="google_translate_element"></div>

    @if (session('success') || session('error'))
        <div id="custom-toast"
            class="custom-toast {{ session('error') ? 'toast-error-border' : 'toast-success-border' }}">
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
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.computer') }}"
                                            class="offcanvas__sub_menu_item">Department of Computer</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.paramedical') }}"
                                            class="offcanvas__sub_menu_item">Department of Paramedical</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.vocational') }}"
                                            class="offcanvas__sub_menu_item">Department of Vocational</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.fire-safety') }}"
                                            class="offcanvas__sub_menu_item">Department of Fire Safety</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.hardware.networking') }}"
                                            class="offcanvas__sub_menu_item">Department of Hardware and Networking</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.management') }}"
                                            class="offcanvas__sub_menu_item">Department of Management</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.languages') }}"
                                            class="offcanvas__sub_menu_item">Department of Languages</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('department.polytechnic') }}"
                                            class="offcanvas__sub_menu_item">Department of Polytechnic</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="#">Student Zone</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('student.login') }}"
                                            class="offcanvas__sub_menu_item">Student
                                            Login</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('student.result') }}" class="offcanvas__sub_menu_item">View
                                            Result</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('gallery') }}" class="offcanvas__sub_menu_item">Gallery</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ asset('assets/images/admision-form.pdf') }}" target="_blank"
                                            class="offcanvas__sub_menu_item">Admission Form</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="#">Franchisee</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('view.franchisee') }}"
                                            class="offcanvas__sub_menu_item">View Franchisee</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ asset('institute_admin/index.php') }}"
                                            class="offcanvas__sub_menu_item">Franchisee Login</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('franchisee.registration') }}"
                                            class="offcanvas__sub_menu_item">Franchisee Registration</a>
                                    </li>
                                </ul>
                            </li>



                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('training.placement') }}">Training and
                                    Placement</a>
                            </li>
                            {{-- <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('contact') }}">Contact</a>
                            </li> --}}

                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="#">More</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('contact') }}" class="offcanvas__sub_menu_item">Contact</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('network') }}" class="offcanvas__sub_menu_item">Network</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="#">Language / भाषा</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('en'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">English</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('bn'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">हिंदी</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('bn'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">বাংলা</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('te'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">తెలుగు</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('mr'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">मराठी</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('ta'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">தமிழ்</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('gu'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">ગુજરાતી</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('es'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">Español</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('fr'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">Français</a></li>
                                    <li class="offcanvas__sub_menu_li"><a href="#"
                                            onclick="doGTranslate('de'); return false;"
                                            class="offcanvas__sub_menu_item lang-item">Deutsch</a></li>
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
                        <li><a href="https://www.facebook.com/" target="_blank"><img
                                    src="assets/images/icons/icon-white-facebook.svg" alt="Facebook" /></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank"><img
                                    src="assets/images/icons/icon-white-twitter.svg" alt="Twitter" /></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><img
                                    src="assets/images/icons/icon-white-instagram.svg" alt="Instagram" /></a></li>
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
                                    <li><a href="{{ route('department.vocational') }}">Department of Vocational</a>
                                    </li>
                                    <li><a href="{{ route('department.fire-safety') }}">Department of Fire Safety</a>
                                    </li>
                                    <li><a href="{{ route('department.hardware.networking') }}">Department of Hardware
                                            and Networking</a></li>
                                    <li><a href="{{ route('department.management') }}">Department of Management</a>
                                    </li>
                                    <li><a href="{{ route('department.languages') }}">Department of Languages</a></li>
                                    <li><a href="{{ route('department.polytechnic') }}">Department of Polytechnic</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Student Zone<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('student.login') }}">Student Login</a></li>
                                    <li><a href="{{ route('student.result') }}">View Result</a></li>
                                    <li><a href="{{ asset('assets/images/admision-form.pdf') }}"
                                        target="_blank">Admission Form</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Franchisee<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('view.franchisee') }}">View Franchisee </a></li>
                                    <li><a href="{{ asset('institute_admin/index.php') }}">Franchisee Login</a></li>
                                    <li><a href="{{ route('franchisee.registration') }}">Franchisee Registration</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('training.placement') }}">Training and Placement</a></li>
                            {{-- <li><a href="{{ route('contact') }}">Contact</a></li> --}}
                            <li>
                                <a href="javascript:void(0)">More<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('contact') }}">Contact </a></li>
                                    <li><a href="{{ route('network') }}">Network</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal"
                    data-bs-target="#offcanvas-modal">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
        </div>
    </header>

    @yield('content')
    @include('layouts.footer')
