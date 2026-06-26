@extends('layouts.header')
@section('title', 'Our Student Gallery | Glimpses of Success')
@section('description',
    'Explore our student gallery and see the success stories, campus life, and memorable moments of
    our proud students.')
@section('content')


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Breadcrumb Section -->
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('assets/images/breadcrumbs-bg.png');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h3 class="ed-breadcrumbs__title">Our Gallery</h3>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Gallery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Gallery Section -->
                <section class="ed-gallery-area">
                    <div class="container ed-container">

                        <!-- Section Heading -->
                        <div class="row justify-content-center mb-5 pb-2 text-center">
                            <div class="col-lg-8">
                                <span class="ed-contact__form-sm-title"
                                    style="color: #ff5e14; font-weight: 600; letter-spacing: 2px; text-transform: uppercase;">Moments
                                    of Pride</span>
                                <h2 class="ed-contact__form-big-title mt-2"
                                    style="color: #0b1c39; font-size: 36px; font-weight: 700;">Our Students Gallery</h2>
                            </div>
                        </div>

                        <!-- Gallery Grid -->
                        <div class="premium-gallery-grid">

                            <!-- Gallery Item 1 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".1s">
                                <!-- Change image source here -->
                                <img src="{{ asset('assets/images/gallery/gallery1.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery1.jpg') }}'">
                            </div>

                            <!-- Gallery Item 2 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".2s">
                                <img src="{{ asset('assets/images/gallery/gallery2.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery2.jpg') }}">
                            </div>

                            <!-- Gallery Item 3 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{ asset('assets/images/gallery/gallery3.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery3.jpg') }}">
                            </div>

                            <!-- Gallery Item 4 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{ asset('assets/images/gallery/gallery4.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery4.jpg') }}">
                            </div>

                            <!-- Gallery Item 5 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('assets/images/gallery/gallery5.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery5.jpg') }}">
                            </div>

                            <!-- Gallery Item 6 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".6s">
                                <img src="{{ asset('assets/images/gallery/gallery6.jpg') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery6.jpg') }}">
                            </div>
                            <!-- Gallery Item 7 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".7s">
                                <img src="{{ asset('assets/images/gallery/gallery7.avif') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery7.avif') }}">
                            </div>
                            <!-- Gallery Item 8 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".8s">
                                <img src="{{ asset('assets/images/gallery/gallery8.png') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery8.png') }}">
                            </div>
                            <!-- Gallery Item 9 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".9s">
                                <img src="{{ asset('assets/images/gallery/gallery9.webp') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery9.webp') }}">
                            </div>
                            <!-- Gallery Item 10 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".10s">
                                <img src="{{ asset('assets/images/gallery/gallery10.webp') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery10.webp') }}">
                            </div>
                            <!-- Gallery Item 11 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".11s">
                                <img src="{{ asset('assets/images/gallery/gallery11.webp') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery11.webp') }}">
                            </div>
                            <!-- Gallery Item 12 -->
                            <div class="gallery-item wow fadeInUp" data-wow-delay=".12s">
                                <img src="{{ asset('assets/images/gallery/gallery12.webp') }}" alt="Student Image"
                                    onerror="this.src='{{ asset('assets/images/gallery/gallery12.webp') }}">
                            </div>

                        </div>
                    </div>
                </section>

            </main>
        @endsection
