@extends('layouts.header')

@section('title', 'Home | National Academy of Research and Training Centre')
@section('description',
    'NART offers ITI, Paramedical, Polytechnic, Computer, Language, and vocational courses with
    practical training and career-focused education.')
@section('keywords',
    'NART, National Academy of Research and Training, ITI courses, Paramedical courses, Polytechnic
    courses, Computer courses, Language courses, vocational courses, skill development, professional training')
@section('author', 'National Academy of Research and Training Centre')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg background-image"
                    style="background-image: url('assets/images/hero/home-1/hero-bg.png');">
                    <!-- Start Hero Area -->
                    <section class="ed-hero">
                        <div class="container ed-container-expand">
                            <!-- Hero Element Shape -->
                            <div class="ed-hero__elements">
                                <img class="element-move ed-hero__shape-1" src="assets/images/hero/home-1/shape-1.svg"
                                    alt="shape-1" />
                                <img class="element-move ed-hero__shape-2" src="assets/images/hero/home-1/shape-2.svg"
                                    alt="shape-1" />
                                <img class="element-move ed-hero__shape-3" src="assets/images/hero/home-1/shape-3.svg"
                                    alt="shape-1" />
                                <img class="element-move ed-hero__shape-4" src="assets/images/hero/home-1/shape-4.svg"
                                    alt="shape-1" />
                                <img class="element-move ed-hero__shape-5" src="assets/images/hero/home-1/shape-5.png"
                                    alt="shape-5" />
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <!-- Hero Content -->
                                    <div class="ed-hero__content">
                                        <h1 class="ed-hero__content-title ed-split-text left">Learn <span>Today</span><br />
                                            Lead Tomorrow</h1>
                                        <p class="ed-hero__content-text">
                                            National Academy of Research and Training Run By Gurukul Education Trust is a
                                            leading institution dedicated to empowering individuals through high-quality
                                            skill-based education and professional training.
                                        </p>
                                        <div class="ed-hero__btn">
                                            <a href="{{ route('courses') }}" class="ed-btn">Find Courses<i
                                                    class="fi fi-rr-arrow-small-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <!-- Hero Image -->
                                    <div class="ed-hero__image">
                                        <img src="assets/images/hero/home-1/hero-img.png" alt="hero-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Hero Area -->
                </div>

                <!-- Start Funfact Area -->
                <section class="ed-funfact ed-funfact--style2 section-gap">
                    <div class="container ed-container position-relative">
                        <div class="ed-funfact__inner">
                            <div class="row g-0 justify-content-between">
                                <!-- Single Counter  -->
                                <div class="col-xl-auto col-lg-3 col-md-6 col-6">
                                    <div class="ed-funfact__counter wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <h4 class="color-text-1"><span class="counter">20,000</span>+</h4>
                                        <p class="text-white">Student Enrolled</p>
                                    </div>
                                </div>

                                <!-- Single Counter  -->
                                <div class="col-xl-auto col-lg-3 col-md-6 col-6">
                                    <div class="ed-funfact__counter wow fadeInUp" data-wow-delay=".5s"
                                        data-wow-duration="1s">
                                        <h4 class="color-text-2"><span class="counter">10</span>+</h4>
                                        <p class="text-white">Affiliated Centres</p>
                                    </div>
                                </div>

                                <!-- Single Counter  -->
                                <div class="col-xl-auto col-lg-3 col-md-6 col-6">
                                    <div class="ed-funfact__counter wow fadeInUp" data-wow-delay=".7s"
                                        data-wow-duration="1s">
                                        <h4 class="color-text-3"><span class="counter">200</span>+</h4>
                                        <p class="text-white">Courses</p>
                                    </div>
                                </div>

                                <!-- Single Counter  -->
                                <div class="col-xl-auto col-lg-3 col-md-6 col-6">
                                    <div class="ed-funfact__counter wow fadeInUp" data-wow-delay=".9s"
                                        data-wow-duration="1s">
                                        <h4 class="color-text-4"><span class="counter">95</span>%</h4>
                                        <p class="text-white">Placement Assistance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Funfact Area -->
                <div class="section-bg background-image ">
                    <section class="section-gap">
                        <div class="container">

                            <!-- Heading -->
                            <div class="category-top">
                                <div>
                                    <span class="small-title">OUR POPULAR COURSES</span>
                                    <h2>Explore Top Career Oriented Courses</h2>
                                </div>

                                <a href="{{ route('courses') }}" class="view-all-btn">View All Courses</a>
                            </div>

                            <!-- Category Cards -->
                            <div class="category-grid">

                                <div class="category-card">
                                    <div class="category-icon pink">
                                        <img src="assets/images/category/category-1/3.svg" alt="">
                                    </div>
                                    <h4>Department of <br> Computer</h4>
                                    <p>Courses: 06</p><br>
                                    <a href="{{ route('department.computer') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon purple">
                                        <img src="assets/images/category/category-1/5.svg" alt="">
                                    </div>
                                    <h4>Department of Paramedical</h4>
                                    <p>Courses: 42</p><br>
                                    <a href="{{ route('department.paramedical') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon purple">
                                        <img src="assets/images/category/category-1/fire-safety.png" alt="">
                                    </div>
                                    <h4>Department of <br> Fire Safety</h4>
                                    <p>Courses: 12</p><br>
                                    <a href="{{ route('department.fire-safety') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon pink">
                                        <img src="assets/images/category/category-1/vocational-diploma.png" alt="">
                                    </div>
                                    <h4>Department of Vocational Diploma</h4>
                                    <p>Courses: 13</p>
                                    <a href="{{ route('department.vocational') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon cyan">
                                        <img src="assets/images/category/category-1/hartware-network.png" alt="">
                                    </div>
                                    <h4>Department of Hardware and Networking</h4>
                                    <p>Courses: 05</p>
                                    <a href="{{ route('department.hardware.networking') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon purple">
                                        <img src="assets/images/category/category-1/management.png" alt="">
                                    </div>
                                    <h4>Department of Management</h4>
                                    <p>Courses: 13</p><br>
                                    <a href="{{ route('department.management') }}">View Courses</a>
                                </div>

                            </div>

                        </div>
                    </section>
                </div>

                <section class="ed-why-choose ed-why-choose--style3 section-gap position-relative">

                    <!-- Background Shapes -->
                    <img class="ed-w-choose__shape-3" src="assets/images/why-choose/why-choose-3/shape-3.svg"
                        alt="shape">

                    <div class="container ed-container">

                        <div class="text-center mb-5">
                            <span class="ed-section-head__sm-title">
                                WHY CHOOSE NART?
                            </span>

                            <h3 class="ed-section-head__title">
                                Your Success is Our Mission
                            </h3>
                        </div>

                        <div class="row g-4 justify-content-center">

                            <!-- Card 1 -->
                            <div class="col-lg col-md-4 col-sm-6">
                                <div class="ed-w-choose__info-single text-center h-100">
                                    <div class="ed-w-choose__info-head d-block">
                                        <div class="ed-w-choose__info-icon bg-1 mx-auto">
                                            <i class="fi fi-rr-badge-check"></i>
                                        </div>
                                        <h5 class="mt-3">ISO Certified</h5>
                                    </div>

                                    <div class="ed-w-choose__info-bottom">
                                        <p>An ISO 9001:2015 Certified Institute</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg col-md-4 col-sm-6">
                                <div class="ed-w-choose__info-single text-center h-100">
                                    <div class="ed-w-choose__info-head d-block">
                                        <div class="ed-w-choose__info-icon bg-2 mx-auto">
                                            <i class="fi fi-rr-building"></i>
                                        </div>
                                        <h5 class="mt-3">Autonomous Institute</h5>
                                    </div>

                                    <div class="ed-w-choose__info-bottom">
                                        <p>Registered Under Act 1860 Vide No. 546</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-lg col-md-4 col-sm-6">
                                <div class="ed-w-choose__info-single text-center h-100">
                                    <div class="ed-w-choose__info-head d-block">
                                        <div class="ed-w-choose__info-icon bg-3 mx-auto">
                                            <i class="fi fi-rr-graduation-cap"></i>
                                        </div>
                                        <h5 class="mt-3">Industry Oriented</h5>
                                    </div>

                                    <div class="ed-w-choose__info-bottom">
                                        <p>Practical Training & Skill Development</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-lg col-md-4 col-sm-6">
                                <div class="ed-w-choose__info-single text-center h-100">
                                    <div class="ed-w-choose__info-head d-block">
                                        <div class="ed-w-choose__info-icon bg-1 mx-auto">
                                            <i class="fi fi-rr-headset"></i>
                                        </div>
                                        <h5 class="mt-3">100% Support</h5>
                                    </div>

                                    <div class="ed-w-choose__info-bottom">
                                        <p>Placement Assistance & Career Guidance</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-lg col-md-4 col-sm-6">
                                <div class="ed-w-choose__info-single text-center h-100">
                                    <div class="ed-w-choose__info-head d-block">
                                        <div class="ed-w-choose__info-icon bg-2 mx-auto">
                                            <i class="fi fi-rr-users"></i>
                                        </div>
                                        <h5 class="mt-3">Trusted by Thousands</h5>
                                    </div>

                                    <div class="ed-w-choose__info-bottom">
                                        <p>Thousands of Students Trust NART</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>


                <!-- Start Call Action Area -->
                <section class="ed-call-action ed-call-action--style2 position-relative overflow-hidden">
                    <div class="container ed-container">
                        <div class="ed-call-action__inner ed-call-action__inner--style2">
                            <div class="ed-call-action__shapes">
                                <img class="ed-call-action__shape-1"
                                    src="assets/images/abstracts/abstract-element-regular.svg"
                                    alt="abstract-element-regular" />
                                <img class="ed-call-action__shape-2" src="assets/images/abstracts/abstract-dot-4.svg"
                                    alt="abstract-dot-4" />
                                <img class="ed-call-action__shape-3"
                                    src="assets/images/abstracts/abstract-element-regular.svg"
                                    alt="abstract-element-regular" />
                                <img class="ed-call-action__shape-4"
                                    src="assets/images/abstracts/abstract-orange-plus-1.svg"
                                    alt="abstract-orange-plus-1" />
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="ed-call-action__img">
                                        <img src="assets/images/call-action/call-action-2/call-action-img.png"
                                            alt="call-action-img" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 order-class">
                                    <div class="ed-call-action__content">
                                        <div class="ed-section-head">
                                            <span class="ed-section-head__sm-title">NART COURSES</span>

                                            <h3 class="ed-section-head__title ed-split-text right">
                                                Build Your Skills, Advance Your Career
                                                And Shape A Successful Future
                                            </h3>

                                            <p class="ed-section-head__text">
                                                Explore industry-focused programs in ITI, Paramedical,
                                                Polytechnic, Computer, Language, and vocational training.
                                                Gain practical knowledge and professional skills to achieve your career
                                                goals.
                                            </p>
                                        </div>

                                        <div class="ed-call-action__content-btn">
                                            <a href="{{ route('courses') }}" class="ed-btn">
                                                Explore Our Courses
                                                <i class="fi fi-rr-arrow-small-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Call Action Area -->


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


                <!-- Start About Area  -->
                <section class="ed-about ed-about--style-3 section-gap position-relative">
                    <!-- About Shapes  -->
                    <div class="ed-about__shapes">
                        <img class="shape-1" src="{{ asset('assets/images/about/about-4/border-circle.svg') }}"
                            alt="border-circle" />
                        <img class="shape-2" src="{{ asset('assets/images/about/about-4/vector-1.svg') }}"
                            alt="vector-1" />
                    </div>

                    <div class="container ed-container">

                        <div class="row">
                            <div class="col-12">
                                <div class="ed-about__inner position-relative">
                                    <!-- About Image  -->
                                    <div class="ed-about__image">
                                        <!-- About Shapes  -->
                                        <div class="ed-about__image-shapes">
                                            <img class="shape-1"
                                                src="{{ asset('assets/images/about/about-4/circle-pattern.svg') }}"
                                                alt="circle-pattern" />
                                            <img class="shape-2"
                                                src="{{ asset('assets/images/about/about-4/idea.svg') }}"
                                                alt="idea" />
                                        </div>
                                        <!-- About Main Image  -->
                                        <div class="ed-about__image-main">
                                            <img src="{{ asset('assets/images/about/about-1/about-image.jpg') }}"
                                                alt="about-img" />
                                        </div>

                                    </div>
                                    <!-- About Content Shapes  -->
                                    <div class="ed-about__content-shapes">
                                        <img class="shape-1"
                                            src="{{ asset('assets/images/about/about-4/vector-2.svg') }}"
                                            alt="vector-2" />
                                        <img class="shape-2"
                                            src="{{ asset('assets/images/about/about-4/vertical-4-pattern.svg') }}"
                                            alt="vertical-4-pattern" />
                                    </div>

                                    <!-- About Content  -->
                                    <div class="ed-about__content position-relative">
                                        <div class="ed-about__tab">
                                            <!-- Tab Menu -->
                                            <div class="ed-about__tab-menu tab-menu">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item active" data-bs-toggle="list"
                                                        href="#tab1" role="tab">
                                                        About Us
                                                    </a>
                                                    <a class="list-group-item" data-bs-toggle="list" href="#tab2"
                                                        role="tab">
                                                        Our Vision
                                                    </a>
                                                    <a class="list-group-item" data-bs-toggle="list" href="#tab3"
                                                        role="tab">
                                                        Our Mission
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Tab Details -->
                                            <div class="ed-about__tab-details tab-details">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <!-- Tab One -->
                                                    <div class="tab-pane fade show active" id="tab1"
                                                        role="tabpanel">
                                                        <div class="ed-about__tab-details-widget">

                                                            <div class="ed-section-head">
                                                                <span class="ed-section-head__sm-title">
                                                                    WELCOME TO NART
                                                                </span>

                                                                <h3 class="ed-section-head__title ed-split-text left">
                                                                    Welcome to National Academy of Research and Training
                                                                </h3>

                                                                <p class="ed-section-head__text mg-btm-25">
                                                                    National Academy of Research and Training (NART), run by
                                                                    Gurukul Education Trust, is a leading institution
                                                                    committed to providing high-quality skill-based
                                                                    education and professional training. We offer a wide
                                                                    range of career-oriented programs including ITI,
                                                                    Paramedical, Polytechnic, Computer, Language, and
                                                                    various vocational courses designed to meet modern
                                                                    industry standards and improve employability.
                                                                </p>

                                                                <p class="ed-section-head__text">
                                                                    Our goal is to empower students with practical
                                                                    knowledge, technical expertise, and professional
                                                                    confidence so they can build successful careers and
                                                                    contribute positively to society.
                                                                </p>
                                                            </div>

                                                            <div class="ed-about__tab-info">

                                                                <!-- Single Card -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-3">
                                                                        <img src="assets/images/features/features-1/3.svg"
                                                                            alt="icon" />
                                                                    </div>

                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Quality Education</h4>

                                                                        <p>
                                                                            Delivering industry-focused education with
                                                                            practical training and modern learning methods.
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <!-- Single Card -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-2">
                                                                        <img src="assets/images/features/features-1/2.svg"
                                                                            alt="icon" />
                                                                    </div>

                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Expert Faculty</h4>

                                                                        <p>
                                                                            Learn from experienced instructors dedicated to
                                                                            guiding students toward academic and career
                                                                            success.
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Tab Two -->
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                        <div class="ed-about__tab-details-widget">
                                                            <div class="ed-section-head">
                                                                <span class="ed-section-head__sm-title">NART’S
                                                                    VISION</span>
                                                                <h3 class="ed-section-head__title ed-split-text left">
                                                                    Building Skilled Professionals for a Better Future
                                                                </h3>
                                                                <p class="ed-section-head__text mg-btm-25">
                                                                    Our vision is to become a trusted and globally
                                                                    recognized educational institution that empowers
                                                                    students through quality technical, vocational, and
                                                                    professional education. We aim to create skilled,
                                                                    confident, and industry-ready professionals who can
                                                                    contribute positively to society and the nation.
                                                                </p>
                                                                <p class="ed-section-head__text">
                                                                    National Academy of Research and Training is committed
                                                                    to fostering innovation, practical knowledge, and
                                                                    career-oriented learning that helps students achieve
                                                                    academic excellence and long-term success in their
                                                                    chosen fields.
                                                                </p>
                                                            </div>

                                                            <div class="ed-about__tab-info">
                                                                <!-- Single Card  -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-3">
                                                                        <img src="assets/images/icons/icon-red-globe.svg"
                                                                            alt="icon" />
                                                                    </div>
                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Career-Focused Learning</h4>
                                                                        <p>
                                                                            Providing practical and industry-relevant
                                                                            education for future career growth.
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <!-- Single Card  -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-2">
                                                                        <img src="assets/images/icons/icon-lightbulb.svg"
                                                                            alt="icon" />
                                                                    </div>
                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Innovation & Excellence</h4>
                                                                        <p>
                                                                            Encouraging creativity, innovation, and
                                                                            excellence in every area of learning.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Tab Three -->
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                        <div class="ed-about__tab-details-widget">
                                                            <div class="ed-section-head">
                                                                <span class="ed-section-head__sm-title">NART’S
                                                                    MISSION</span>
                                                                <h3 class="ed-section-head__title ed-split-text left">
                                                                    Empowering Students Through Quality Education & Training
                                                                </h3>
                                                                <p class="ed-section-head__text mg-btm-25">
                                                                    Our mission is to provide affordable, accessible, and
                                                                    skill-based education that prepares students for
                                                                    real-world challenges and employment opportunities. We
                                                                    focus on delivering high-quality training programs in
                                                                    ITI, Paramedical, Polytechnic, Computer, Language, and
                                                                    vocational courses with practical exposure and
                                                                    professional guidance.
                                                                </p>
                                                                <p class="ed-section-head__text">
                                                                    We are dedicated to developing confidence, technical
                                                                    expertise, leadership qualities, and ethical values
                                                                    among students so they can succeed professionally and
                                                                    personally in a competitive world.
                                                                </p>
                                                            </div>

                                                            <div class="ed-about__tab-info">
                                                                <!-- Single Card  -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-3">
                                                                        <img src="assets/images/icons/icon-e-learning.svg"
                                                                            alt="icon" />
                                                                    </div>
                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Practical Education</h4>
                                                                        <p>
                                                                            Delivering hands-on training and modern learning
                                                                            methods for better skills.
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <!-- Single Card  -->
                                                                <div class="ed-about__tab-info-card">
                                                                    <div class="ed-features__icon icon-bg bg-2">
                                                                        <img src="assets/images/icons/icon-user-graduate.svg"
                                                                            alt="icon" />
                                                                    </div>
                                                                    <div class="ed-about__tab-info-content">
                                                                        <h4>Student Success</h4>
                                                                        <p>
                                                                            Supporting students with guidance, confidence,
                                                                            and professional development.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Tab Details -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Area  -->



                <section class="ed-apply background-image"
                    style="background-image: url('{{ asset('assets/images/apply/bg-img.png') }}');">
                    <div class="container ed-container">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="ed-apply__main position-relative">
                                    <div class="ed-apply__shapes">
                                        <img class="shape-1" src="{{ asset('assets/images/apply/vector.svg') }}"
                                            alt="vector" />
                                        <img class="shape-2" src="{{ asset('assets/images/apply/pattern.svg') }}"
                                            alt="pattern" />
                                    </div>

                                    <div class="ed-contact__form wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration="1s">
                                        <div class="ed-contact__form-head">
                                            <span class="ed-contact__form-sm-title">ENQUIRY NOW</span>
                                            <h3 class="ed-contact__form-big-title">
                                                Enquiry Now Course
                                            </h3>
                                        </div>

                                        <form action="{{ route('contact.form.post') }}" method="POST"
                                            class="ed-contact__form-main">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group mb-3">
                                                        <input type="text" id="name" name="name"
                                                            placeholder="Full Name" value="{{ old('name') }}"
                                                            required />
                                                        @error('name')
                                                            <span class="text-danger d-block mt-1"
                                                                style="font-size: 13px; font-weight:500;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group mb-3">
                                                        <input type="tel" id="number" name="phone"
                                                            placeholder="Phone" maxlength="10" value="{{ old('phone') }}" required />
                                                        @error('phone')
                                                            <span class="text-danger d-block mt-1"
                                                                style="font-size: 13px; font-weight:500;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <input type="email" id="email" name="email"
                                                            placeholder="Enter your email" value="{{ old('email') }}"
                                                            required />
                                                        @error('email')
                                                            <span class="text-danger d-block mt-1"
                                                                style="font-size: 13px; font-weight:500;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <input type="text" id="subject" name="subject"
                                                            placeholder="Subject" value="{{ old('subject') }}"
                                                            required />
                                                        @error('subject')
                                                            <span class="text-danger d-block mt-1"
                                                                style="font-size: 13px; font-weight:500;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <textarea id="message" name="message" placeholder="Enter your comment...">{{ old('message') }}</textarea>
                                                        @error('message')
                                                            <span class="text-danger d-block mt-1"
                                                                style="font-size: 13px; font-weight:500;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="ed-contact__form-btn">
                                                        <button type="submit" class="ed-btn">Submit Now<i
                                                                class="fi fi-rr-arrow-small-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Start Testimonial Area -->
                <section class="ed-testimonial ed-testimonial--style4 section-gap overflow-hidden">
                    <div class="container ed-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-12">
                                <div class="ed-section-head text-center">
                                    <span class="ed-section-head__sm-title">OUR TESTIMONIAL</span>
                                    <h3 class="ed-section-head__title ed-split-text left">
                                        What Our Students Say
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 position-relative">
                                <!-- Testimonial Shape  -->
                                <div class="ed-testimonial__shapes">
                                    <img class="shape-1" src="assets/images/testimonial/testimonial-3/star.svg"
                                        alt="star" />
                                </div>

                                <!-- Testimonial Slider  -->
                                <div class="swiper ed-testimonial__slider-3">
                                    <div class="swiper-wrapper">
                                        <!-- Single Testimonial  -->
                                        <div class="swiper-slide">
                                            <div class="ed-testimonial__slider-item">
                                                <div class="ed-testimonial__author">
                                                    <div class="ed-testimonial__author-img">
                                                        <img src="assets/images/testimonial/testimonial-3/author-1.png"
                                                            alt="author-img" />
                                                    </div>
                                                    <div class="ed-testimonial__author-info">
                                                        <h5>Aman Sharma</h5>
                                                        <p>Diploma in Fire & Safety</p>
                                                    </div>
                                                </div>
                                                <ul class="ed-testimonial__rattings">
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                                <p class="ed-testimonial__text">
                                                    "NART gave me the right skills and confidence to start my career in Fire
                                                    & Safety.
                                                    The practical training was extremely useful and helped me secure a job
                                                    quickly."
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Single Testimonial  -->
                                        <div class="swiper-slide">
                                            <div class="ed-testimonial__slider-item">
                                                <div class="ed-testimonial__author">
                                                    <div class="ed-testimonial__author-img">
                                                        <img src="assets/images/testimonial/testimonial-3/author-2.png"
                                                            alt="author-img" />
                                                    </div>
                                                    <div class="ed-testimonial__author-info">
                                                        <h5>Priya Verma</h5>
                                                        <p>Computer Applications</p>
                                                    </div>
                                                </div>
                                                <ul class="ed-testimonial__rattings">
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                                <p class="ed-testimonial__text">
                                                    "The teachers at NART are very supportive and knowledgeable.
                                                    I learned both theoretical and practical aspects of IT, which made me
                                                    job-ready."
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Single Testimonial  -->
                                        <div class="swiper-slide">
                                            <div class="ed-testimonial__slider-item">
                                                <div class="ed-testimonial__author">
                                                    <div class="ed-testimonial__author-img">
                                                        <img src="assets/images/testimonial/testimonial-3/author-3.png"
                                                            alt="author-img" />
                                                    </div>
                                                    <div class="ed-testimonial__author-info">
                                                        <h5>Rohit Kumar</h5>
                                                        <p>Paramedical Sciences</p>
                                                    </div>
                                                </div>
                                                <ul class="ed-testimonial__rattings">
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                                <p class="ed-testimonial__text">
                                                    "I’m grateful to NART for providing such a professional course in
                                                    Paramedical Science.
                                                    The hands-on practice sessions were very helpful for my future career."
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Single Testimonial  -->
                                        <div class="swiper-slide">
                                            <div class="ed-testimonial__slider-item">
                                                <div class="ed-testimonial__author">
                                                    <div class="ed-testimonial__author-img">
                                                        <img src="assets/images/testimonial/testimonial-3/author-2.png"
                                                            alt="author-img" />
                                                    </div>
                                                    <div class="ed-testimonial__author-info">
                                                        <h5>Simran Kaur</h5>
                                                        <p>Management Study</p>
                                                    </div>
                                                </div>
                                                <ul class="ed-testimonial__rattings">
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                                <p class="ed-testimonial__text">
                                                    "The Management program at NART gave me practical knowledge and
                                                    leadership skills.
                                                    I now feel confident to take on challenges in the corporate sector."
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Single Testimonial  -->
                                        <div class="swiper-slide">
                                            <div class="ed-testimonial__slider-item">
                                                <div class="ed-testimonial__author">
                                                    <div class="ed-testimonial__author-img">
                                                        <img src="assets/images/testimonial/testimonial-3/author-2.png"
                                                            alt="author-img" />
                                                    </div>
                                                    <div class="ed-testimonial__author-info">
                                                        <h5>Deepak Yadav</h5>
                                                        <p>Vocational Diploma</p>
                                                    </div>
                                                </div>
                                                <ul class="ed-testimonial__rattings">
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                    <li><i class="icofont-star"></i></li>
                                                </ul>
                                                <p class="ed-testimonial__text">
                                                    "NART’s vocational programs are truly job-oriented.
                                                    I gained practical exposure that made me confident to start working
                                                    immediately."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="fi fi-rr-arrow-right"></i>
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="fi fi-rr-arrow-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Testimonial Area -->

            </main>

            <div class="modal fade ed-welcome-modal" id="welcomeModal" tabindex="-1"
                aria-labelledby="welcomeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0 overflow-hidden">
                        <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fi fi-rr-cross"></i>
                        </button>

                        <div class="row g-0">
                            <div class="col-md-5 d-none d-md-block" style="background-color: #f5f9ff;">
                                <img src="{{ asset('assets/images/call-action/call-action-1/call-action-img.png') }}"
                                    class="img-fluid h-100" style="object-fit: cover;" alt="NART Admission">
                            </div>

                            <div class="col-md-7">
                                <div class="modal-body p-5 text-center text-md-start">
                                    <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill"
                                        style="letter-spacing: 1px;">Inquiry Open</span>

                                    <h3 class="fw-bold mb-3" style="color: #2c3a4b;">Welcome to NART!</h3>

                                    <p class="text-muted mb-4" style="font-size: 14px;">
                                        Have a question or want to join our courses? Fill out the form below and our team
                                        will get back to you shortly.
                                    </p>

                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="text" name="name"
                                                    class="form-control mb-3 custom-modal-input" placeholder="Full Name"
                                                    required>
                                            </div>
                                            <div class="col-12">
                                                <input type="email" name="email"
                                                    class="form-control mb-3 custom-modal-input"
                                                    placeholder="Email Address" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="tel" name="phone"
                                                    class="form-control mb-3 custom-modal-input"
                                                    placeholder="Phone Number" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="subject"
                                                    class="form-control mb-4 custom-modal-input"
                                                    placeholder="Subject / Course Interested In" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="ed-btn w-100 text-center justify-content-center"
                                            style="border-radius: 8px;">
                                            Submit Inquiry <i class="fi fi-rr-paper-plane"></i>
                                        </button>
                                    </form>

                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0)" data-bs-dismiss="modal"
                                            class="text-decoration-none text-muted" style="font-size: 13px;">
                                            <u>No thanks, I will explore first</u>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
