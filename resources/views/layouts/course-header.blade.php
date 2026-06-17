<!DOCTYPE html>
<html class="no-js" lang="ZXX">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="thumbnail" content="{{ asset('assets/images/404.html') }}" />
    <title>@yield('title', 'Nart')</title>
    <meta name="description" content="@yield('description', 'National Academy of Research and Training Centre')" />
    <meta name="keywords" content="@yield('keywords', 'National Academy of Research and Training Centre')" />
    <meta name="author" content="@yield('author', 'Nart')" />
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/maginific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/icofont.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/uicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}" />
</head>

<body class="element-wrapper">
    <!-- Start Preloader  -->
    {{-- <div id="preloader">
        <div id="ed-preloader" class="ed-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

    <!-- Custom Cursor Start -->
    <div id="ed-mouse">
        <div id="cursor-ball"></div>
    </div>
    <!-- Custom Cursor End -->

    <!-- Start Mobile Menu Offcanvas -->
    <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <!-- Mobile Menu Logo -->
                    <div class="offcanvas-logo">
                        <a href="{{ route('index') }}"><img src="/assets/images/logo.png" alt="NART" /></a>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi fi-ss-cross"></i>
                    </button>
                </div>
                <div class="mobile-menu-modal-main-body">
                    <!-- Mobile Menu Navigation -->
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
                                        <a href="{{ route('student.login') }}" class="offcanvas__sub_menu_item">Student
                                            Login</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('student.result') }}" class="offcanvas__sub_menu_item">View
                                            Result</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('student.result') }}" class="offcanvas__sub_menu_item">View
                                            Result</a>
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
                                        <a href="{{ route('view.franchisee') }}" class="offcanvas__sub_menu_item">View Franchisee</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ asset('institute_admin/index.php') }}" class="offcanvas__sub_menu_item">Franchisee Login</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="{{ route('franchisee.registration') }}"
                                            class="offcanvas__sub_menu_item">Franchisee Registration</a>
                                    </li>
                                </ul>
                            </li>

                            {{-- <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="about-1.html">About</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="about-1.html" class="offcanvas__sub_menu_item">About One</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="about-2.html" class="offcanvas__sub_menu_item">About Two</a>
                                    </li>
                                </ul>
                            </li> --}}

                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('training.placement') }}">Training and Placement</a>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu Offcanvas -->

    <!-- Start Topbar Area  -->
    <div class="ed-topbar">
        <div class="container ed-container-expand">
            <div class="ed-topbar__inner">
                <!-- Logo  -->
                <div class="ed-topbar__logo">
                    <ul class="ed-topbar__info-social">
                        <li>
                            <a href="tel:{{ $CompanyPhone1 }}" target="_blank" style="color:#fff;">
                                <img src="/assets/images/icons/icon-white-phone.svg" alt="icon-white-facebook" />
                                +91 {{ $CompanyPhone1 }}
                            </a>
                        </li>

                        {{-- <li>
                            <a href="https://www.twitter.com/" target="_blank" style="color:#fff;">
                                <img src="/assets/images/icons/icon-white-message.svg" alt="icon-white-message.svg" />
                                infotech@gmail.com
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <!-- Category Dropdown -->
                {{-- <div class="ed-topbar__search-widget">
                    <div class="ed-topbar__category">
                        <select>
                            <option data-display="All Categories">All Categories</option>
                            <option value="1">Business</option>
                            <option value="2">Marketing</option>
                            <option value="3">Design</option>
                            <option value="4">Finance</option>
                            <option value="5">Lifestyle</option>
                            <option value="6">Development</option>
                            <option value="7">Photography</option>
                        </select>
                    </div>
                    <div class="ed-topbar__search">
                        <form action="#" method="post">
                            <input type="search" name="search" placeholder="Search your courses..." required />
                            <button type="submit">Search<i class="fi-rr-search"></i></button>
                        </form>
                    </div>
                </div> --}}

                <!-- Topbar Info -->
                <div class="ed-topbar__info">
                    <!-- Topbar Social -->
                    <ul class="ed-topbar__info-social">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><img
                                    src="/assets/images/icons/icon-white-facebook.svg"
                                    alt="icon-white-facebook" /></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank"><img
                                    src="/assets/images/icons/icon-white-twitter.svg" alt="icon-white-twitter" /></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><img
                                    src="/assets/images/icons/icon-white-instagram.svg"
                                    alt="icon-white-instagram" /></a>
                        </li>
                    </ul>
                    <!-- Topbar Button -->
                    <div class="ed-topbar__info-buttons">
                        {{-- <a href="#" class="register-btn">
                            Register
                        </a>
                        <a href="#" class="login-btn">
                            Log In
                        </a> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar Area -->

    <!-- Start Header Area -->
    <header class="ed-header ed-header--style4 ed-header--style5">
        <div class="container ed-container-expand">
            <div class="ed-header__inner">
                <!-- Header Left -->
                <div class="ed-header__left--style2">
                    <div class="ed-header__left-widget--style2">
                        <!-- Logo  -->
                        <div class="ed-topbar__logo">
                            <a href="{{ route('index') }}">
                                <img src="/assets/images/logo-banner.jpeg" alt="logo" />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Header Right -->
                <div class="ed-header__right">
                    <!-- Navigation Menu -->
                    <nav class="ed-header__navigation">
                        <ul class="ed-header__menu">
                            <li class="active">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="active">
                                <a href="{{ route('about') }}">About</a>
                            </li>
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
                            {{-- <li>
                                <a href="javascript:void(0)">About<i class="fi fi-ss-angle-small-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about-1.html">About One </a></li>
                                    <li><a href="about-2.html">About Two</a></li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="{{ route('training.placement') }}">Training and Placement</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>

                </div>

                <!-- Mobile Menu Button -->
                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal"
                    data-bs-target="#offcanvas-modal">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <!-- End Mobile Menu Button -->
            </div>
        </div>
        </div>
    </header>
    @yield('course-content')
    @include('layouts.course-footer')
