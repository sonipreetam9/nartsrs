@extends('layouts.header')

@section('title', 'Contact Us - NART')
@section('description', 'Contact NART for course admissions, training programs, and educational guidance. Get in touch
    with our team for assistance and information.')
@section('keywords', 'Contact NART, NART Contact Details, Admission Enquiry, Education Institute Contact, Course
    Information, Training Programs, Student Support, NART Institute')
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
                                        <h3 class="ed-breadcrumbs__title">Contact With Us</h3>
                                        <ul class="ed-breadcrumbs__menu">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Contact With Us</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Bredcrumbs Area -->
                </div>

                <!-- Start Contact Card Area -->
                <div class="ed-contact__card section-gap">
                    <div class="container ed-container">
                        <div class="row">
                            <!-- Single Card  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-contact__card-item">
                                    <div class="ed-contact__card-icon">
                                        <img src="assets/images/icons/icon-white-phone.svg" alt="icon-white-phone" />
                                    </div>
                                    <div class="ed-contact__card-info">
                                        <a href="tel:{{ $CompanyPhone1 }}">+91 {{ $CompanyPhone1 }}</a>
                                        <a href="tel:{{ $CompanyPhone2 }}">+91 {{ $CompanyPhone2 }}</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Card  -->
                            {{-- <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-contact__card-item">
                                    <div class="ed-contact__card-icon">
                                        <img src="assets/images/icons/icon-white-message.svg" alt="icon-white-phone" />
                                    </div>
                                    <div class="ed-contact__card-info">
                                        <a href="mailto:helloeduna@gmail.com">{{ $CompanyEmail1 }}</a>
                                        <a href="mailto:eduna@gmail.com">{{ $CompanyEmail2 }}</a>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Single Card  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="ed-contact__card-item">
                                    <div class="ed-contact__card-icon">
                                        <img src="assets/images/icons/icon-white-map.svg" alt="icon-white-phone" />
                                    </div>
                                    <div class="ed-contact__card-info">
                                        <a href="#" target="_blank">
                                            {{ $CompanyAddress }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Card Area -->

                <!-- Start Contact Area -->
                <section class="ed-contact ed-contact--style2 section-gap pt-0 position-relative">
                    <div class="container ed-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ed-contact__inner">
                                    <!-- Contact Image  -->
                                    <div class="ed-contact__img">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.6056559455765!2d75.0476572!3d29.440319900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3911536435e97c59%3A0x40f58d98262dd520!2sGurukul%20computer%20centre%20arnianwali!5e0!3m2!1sen!2sin!4v1779970315777!5m2!1sen!2sin"
                                            width="600" height="600" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                    <!-- Contact Form  -->
                                    <div class="ed-contact__form">
                                        <div class="ed-contact__form-head">
                                            <span class="ed-contact__form-sm-title">CONTACT US</span>
                                            <h3 class="ed-contact__form-big-title ed-split-text right">
                                                Have questions? Contact <br />
                                                with us today
                                            </h3>
                                        </div>
                                        <form action="{{ route('contact.form.post') }}" method="post" class="ed-contact__form-main">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" placeholder="Full Name"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="phone" name="phone" placeholder="Phone"
                                                    required />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email"
                                                    placeholder="Enter your email" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="subject" name="subject"
                                                    placeholder="Subject" required />
                                            </div>

                                            <div class="form-group">
                                                <textarea id="message" name="message" placeholder="How can we help you? Feel free to get in touch!" required></textarea>
                                            </div>
                                            <div class="ed-contact__form-btn">
                                                <button type="submit" class="ed-btn">Send Message<i
                                                        class="fi fi-rr-arrow-small-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Area -->

            </main>

        @endsection
