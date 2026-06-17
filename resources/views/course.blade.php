@extends('layouts.header')
@section('title', 'Our Courses')
@section('description', 'Our Courses description')
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
                                        <h3 class="ed-breadcrumbs__title">Our Courses</h3>
                                        <ul class="ed-breadcrumbs__menu">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Our Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Bredcrumbs Area -->
                </div>

                <!-- Start Course Area -->
                <div class="section-bg background-image ">
                    <section class="section-gap">
                        <div class="container">

                            <!-- Heading -->
                            <div class="category-top">
                                <div>
                                    <span class="small-title">OUR POPULAR COURSES</span>
                                    <h2>Explore Top Career Oriented Courses</h2>
                                </div>


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

                                <div class="category-card">
                                    <div class="category-icon pink">
                                        <img src="assets/images/category/category-1/language.png" alt="">
                                    </div>
                                    <h4>Department of Language</h4>
                                    <p>Courses: 06</p><br>
                                    <a href="{{ route('department.languages') }}">View Courses</a>
                                </div>

                                <div class="category-card">
                                    <div class="category-icon cyan">
                                        <img src="assets/images/category/category-1/polytechnic.png" alt="">
                                    </div>
                                    <h4>Department of Polytechnic</h4>
                                    <p>Courses: 06</p><br>
                                    <a href="{{ route('department.polytechnic') }}">View Courses</a>
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
                <!-- End Course Area -->

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
