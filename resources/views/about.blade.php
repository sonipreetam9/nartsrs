@extends('layouts.header')
@section('title', 'About Us - National Academy of Research and Training (NART)')
@section('description',
    'Learn about NART, a leading institute offering ITI, Paramedical, Polytechnic, Computer,
    Language, and vocational courses.')
@section('keywords',
    'NART, National Academy of Research and Training, About NART, ITI Courses, Paramedical Courses,
    Polytechnic Courses, Computer Courses, Language Courses, Vocational Education, Skill Development')
@section('author', 'National Academy of Research and Training Centre')
@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <!-- Start Bredcrumbs Area -->
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('assets/images/breadcrumbs-bg.png');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="ed-breadcrumbs__content">
                                        <h3 class="ed-breadcrumbs__title">About Us</h3>
                                        <ul class="ed-breadcrumbs__menu">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>ABOUT US</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Bredcrumbs Area -->
                </div>

                <!-- Start About Area -->
                <section class="ed-about ed-about__page section-gap position-relative">
                    <div class="container ed-container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <!-- About Images  -->
                                <div class="ed-about__images">
                                    <div class="ed-about__main-img">
                                        <img src="{{ asset('assets/images/about/about-1/about-image.jpg') }}"
                                            alt="about-img" />
                                    </div>
                                    <div class="counter-card updown-ani">
                                        <div class="counter-card__icon">
                                            <i class="fi fi-rr-graduation-cap"></i>
                                        </div>
                                        <div class="counter-card__info">
                                            <h4><span class="counter">2000</span>+</h4>
                                            <p>Enrolled Learners</p>
                                        </div>
                                    </div>

                                    <div class="ed-about__shapes">
                                        <img class="ed-about__shape-1" src="assets/images/about/about-1/shape-1.svg"
                                            alt="shape-1" />
                                        <img class="ed-about__shape-2" src="assets/images/about/about-1/shape-2.svg"
                                            alt="shape-2" />
                                        <img class="ed-about__shape-3 rotate-ani"
                                            src="assets/images/about/about-1/shape-3.svg" alt="shape-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <!-- About Content  -->
                                <div class="ed-about__content">
                                    <div class="ed-section-head">
                                        <span class="ed-section-head__sm-title">WELCOME TO NART</span>
                                        <h3 class="ed-section-head__title ed-split-text right">
                                            Welcome to National Academy of Research and Training
                                        </h3>
                                        <p class="ed-section-head__text">
                                            National Academy of Research and Training Run By Gurukul Education Trust is a
                                            leading institution dedicated to empowering individuals through high-quality
                                            skill-based education and professional training. We specialize in a diverse
                                            range of fields including ITI, Paramedical, Polytechnic, Computer, and Language
                                            courses, along with many other vocational programs designed to meet industry
                                            standards and enhance employability.
                                        </p>
                                        <p class="ed-section-head__text">
                                            At NART, our mission is to bridge the gap between education and employment by
                                            providing practical, career-oriented training and recognized certificates and
                                            diplomas. We are committed to nurturing talent, promoting innovation, and
                                            building a skilled workforce that can contribute effectively to both national
                                            and global development.
                                        </p>
                                        <p class="ed-section-head__text">
                                            Our vision is to establish NART as a national and international hub of
                                            excellence in skill education and training — where learning meets opportunity,
                                            and every student is prepared to succeed in the modern world.

                                        </p>
                                        <p class="ed-section-head__text">
                                            Would you like me to make it a bit more formal and corporate (for a
                                            government/affiliated site) or simple and friendly (for student audience)?

                                        </p>
                                    </div>
                                    {{-- <div class="ed-about__feature">
                                        <ul class="ed-about__features-list">
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Our Expert Trainers</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Online Remote Learning</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Easy to follow curriculum</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Lifetime Access</li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="ed-about__shape-4" src="assets/images/abstracts/abstract-element-regular.svg"
                        alt="shape-4" />
                </section>
                <!-- End About Area -->

                <!-- Start Features Area -->
                <section class="ed-features position-relative">
                    <div class="ed-category__shapes">
                        <img class="ed-category__shape-1 updown-ani" src="assets/images/features/features-1/shape-1.svg"
                            alt="shape-1" />
                        <img class="ed-category__shape-2 rotate-ani" src="assets/images/features/features-1/shape-2.svg"
                            alt="shape-2" />
                    </div>
                    <div class="container ed-container">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-features__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                    <div class="ed-features__icon icon-bg bg-1">
                                        <img src="assets/images/features/features-1/1.svg"
                                            alt="Industry Aligned Curriculum" />
                                    </div>
                                    <div class="ed-features__info">
                                        <h4>Industry-Aligned Curriculum</h4>
                                        <p>
                                            Master highly sought-after skills through practical, hands-on training designed
                                            to make you job-ready from day one.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-features__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <div class="ed-features__icon icon-bg bg-2">
                                        <img src="assets/images/features/features-1/2.svg" alt="Expert Faculty" />
                                    </div>
                                    <div class="ed-features__info">
                                        <h4>Expert Faculty & Mentors</h4>
                                        <p>
                                            Learn directly from seasoned industry professionals and academic experts
                                            dedicated to guiding your educational journey.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-features__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <div class="ed-features__icon icon-bg bg-3">
                                        <img src="assets/images/features/features-1/3.svg" alt="Placement Assistance" />
                                    </div>
                                    <div class="ed-features__info">
                                        <h4>100% Placement Assistance</h4>
                                        <p>
                                            Secure your dream career with our dedicated counseling, interview preparation,
                                            and robust network of hiring partners.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- End Features Area -->

                <!-- Start Partner Area -->
                <section class="ed-partner section-gap section-bg-color-1">
                    <div class="container ed-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ed-partner__section-head">
                                    <h2 class="ed-partner__section-head-title">Our Affiliation <span>With</span>
                                        Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel ed-partner__slider">
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/msme.jpg" alt="brand-logo" />
                                    </a>
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/skill_india.jpg" alt="brand-logo" />
                                    </a>
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/iso.png" alt="brand-logo" />
                                    </a>
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/msme.jpg" alt="brand-logo" />
                                    </a>
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/skill_india.jpg" alt="brand-logo" />
                                    </a>
                                    <!-- Single Slider  -->
                                    <a href="#" target="_blank" class="ed-parnet__brand-logo">
                                        <img src="assets/images/partner/partner-1/iso.png" alt="brand-logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Partner Area -->

            </main>
        @endsection
