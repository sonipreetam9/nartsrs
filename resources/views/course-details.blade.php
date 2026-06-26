@extends('layouts.header')
@section('title', 'Product details Page')
@section('description', 'Product details description')
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
                                        <h3 class="ed-breadcrumbs__title">Course Details</h3>
                                        <ul class="ed-breadcrumbs__menu">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Course Details</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Bredcrumbs Area -->
                </div>

                <!-- Start Course Details Area -->
                <section class="ed-course__details">
                    <div class="container ed-container">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- Course Details Content -->
                                <div class="ed-course__details-content">
                                    <!-- Course Details Image -->
                                    <div class="ed-course__details-img">
                                        <img src="assets/images/course/course-details/details-img-1.png"
                                            alt="course-details-img-1" />
                                    </div>
                                    <h3>
                                        Starting SEO as your Home Based Business Online Courses
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectur adipisicing elit, sed do eiusmod tempor inc
                                        idid unt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exerec
                                        tation ullamco laboris nis
                                        aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur enim ipsam.
                                    </p>
                                    <br />
                                    <p>
                                        Lorem ipsum dolor sit amet consectur adipisicing elit, sed do eiusmod tempor inc
                                        idid unt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exerec
                                        tation ullamco laboris nis
                                        aliquip commodo consequat duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur enim ipsam.
                                    </p>

                                    <!-- Course Details Content List -->
                                    <div class="ed-course__details-list">
                                        <h5>What You’ll Learn?</h5>
                                        <ul>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque
                                                elit eget gravida cum sociis</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Neque sodales ut etiam sit amet nisl purus non
                                                tellus orci ac auctor</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tristique nulla aliquet enim tortor at auctor
                                                urna. Sit amet aliquam id diam maer</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque
                                                elit eget gravida cum sociis</li>
                                        </ul>
                                    </div>

                                    <!-- Course Details Image Two -->
                                    <div class="ed-course__details-img image-2">
                                        <img src="assets/images/course/course-details/details-img-2.png"
                                            alt="course-details-img-2" />
                                    </div>

                                    <!-- Course Details Content List -->
                                    <div class="ed-course__details-list">
                                        <h5>Why choose you this course?</h5>
                                        <ul>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque
                                                elit eget gravida cum sociis</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Neque sodales ut etiam sit amet nisl purus non
                                                tellus orci ac auctor</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tristique nulla aliquet enim tortor at auctor
                                                urna. Sit amet aliquam id diam maer</li>
                                            <li><img src="assets/images/icons/icon-check-blue.svg"
                                                    alt="icon-check-blue" />Tempus imperdiet nulla malesuada pellentesque
                                                elit eget gravida cum sociis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- Course Details Sidebar -->
                                <div class="ed-course__sidebar">
                                    <div class="ed-course__sidebar-widget">
                                        <h4 class="ed-course__sidebar-title">
                                            Course Information:
                                        </h4>
                                        <ul>
                                            <li>Price:<span class="price">$30</span></li>
                                            <li>Instructor:<span>Laura Martinez</span></li>
                                            <li>Certifications:<span>Yes</span></li>
                                            <li>Lessons:<span>17</span></li>
                                            <li>Duration:<span>15 weeks</span></li>
                                            <li>Language:<span>English</span></li>
                                            <li>Students:<span>646</span></li>
                                        </ul>
                                    </div>

                                    <div class="ed-course__sidebar-widget">
                                        <h4 class="ed-course__sidebar-title">Contact Us</h4>
                                        <!-- Sigle Info  -->
                                        <div class="ed-contact__info-item">
                                            <div class="ed-contact__info-icon">
                                                <img src="assets/images/icons/icon-phone-blue.svg" alt="icon-phone-blue" />
                                            </div>
                                            <div class="ed-contact__info-content">
                                                <span>24/7 Support</span>
                                                <a href="tel:+532 321 33 33">+532 321 33 33</a>
                                            </div>
                                        </div>
                                        <!-- Sigle Info  -->
                                        <div class="ed-contact__info-item">
                                            <div class="ed-contact__info-icon">
                                                <img src="assets/images/icons/icon-envelope-blue.svg"
                                                    alt="icon-envelope-blue" />
                                            </div>
                                            <div class="ed-contact__info-content">
                                                <span>Send Message</span>
                                                <a href="mailto:eduna@gmail.com">eduna@gmail.com3</a>
                                            </div>
                                        </div>

                                        <!-- Sigle Info  -->
                                        <div class="ed-contact__info-item">
                                            <div class="ed-contact__info-icon">
                                                <img src="assets/images/icons/icon-location-blue.svg"
                                                    alt="icon-location-blue" />
                                            </div>
                                            <div class="ed-contact__info-content">
                                                <span>Our Locati0n</span>
                                                <a href="#">32/Jenin, London</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Course Details Area -->

            </main>
        @endsection