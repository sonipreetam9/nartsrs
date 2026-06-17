@extends('layouts.header')
@section('title', 'Franchisee List - NART')
@section('description', 'View the state-wise list of NART franchisees and training centers across India.')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h3 class="ed-breadcrumbs__title">Our Franchisees</h3>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Franchisee List</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="ed-franchisee-area">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel franchisee-slider">

                                    <div class="item">
                                        <div class="franchisee-card">
                                            <div class="f-count">COUNT : 10</div>
                                            <div class="f-circle">PB</div>
                                            <h4 class="f-state">Punjab</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="franchisee-card">
                                            <div class="f-count">COUNT : 25</div>
                                            <div class="f-circle">MH</div>
                                            <h4 class="f-state">Maharashtra</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="franchisee-card">
                                            <div class="f-count">COUNT : 25</div>
                                            <div class="f-circle">DL</div>
                                            <h4 class="f-state">Delhi</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="franchisee-card">
                                            <div class="f-count">COUNT : 45</div>
                                            <div class="f-circle">HR</div>
                                            <h4 class="f-state">Haryana</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="franchisee-custom-nav">
                            <button id="f-prev" aria-label="Previous"><i class="fa fa-arrow-left"></i></button>
                            <button id="f-next" aria-label="Next"><i class="fa fa-arrow-right"></i></button>
                        </div>

                    </div>
                </section>

                <!-- Start Partner Area -->
                <section class="ed-partner section-gap">
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

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    if (typeof $ !== 'undefined' && $.fn.owlCarousel) {
                        var $fSlider = $('.franchisee-slider');

                        // Initialize the slider
                        $fSlider.owlCarousel({
                            loop: true,
                            margin: 30,
                            nav: false,
                            dots: false,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            autoplayHoverPause: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                768: {
                                    items: 2
                                },
                                992: {
                                    items: 3
                                }
                            }
                        });

                        // Connect Custom Prev/Next Buttons to the slider
                        $('#f-prev').click(function() {
                            $fSlider.trigger('prev.owl.carousel');
                        });

                        $('#f-next').click(function() {
                            $fSlider.trigger('next.owl.carousel');
                        });
                    } else {
                        console.warn("jQuery or OwlCarousel is not loaded yet.");
                    }
                });
            </script>
        @endsection
