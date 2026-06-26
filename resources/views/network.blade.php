@extends('layouts.header')
@section('title', 'Our Global Network | NART Worldwide')
@section('description', 'Explore our global presence and contact our international offices in Germany, Australia, Canada, Cyprus, USA, and India.')
@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image" style="background-image: url('assets/images/breadcrumbs-bg.png');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h3 class="ed-breadcrumbs__title">Our Network</h3>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Network Locations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="ed-network-area">
                    <div class="container ed-container">

                        <div class="row justify-content-center mb-5 pb-2 text-center">
                            <div class="col-lg-8">
                                <span class="ed-contact__form-sm-title" style="color: #ff5e14; font-weight: 600; letter-spacing: 2px; text-transform: uppercase;">Global Reach</span>
                                <h2 class="ed-contact__form-big-title mt-2" style="color: #0b1c39; font-size: 36px; font-weight: 700;">Our International Offices</h2>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".1s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>Head Office (India)</h4>
                                    <p>{{ $CompanyAddress ?? 'Opp. Main Bus Stand Hisar Road, Sirsa' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyPhone1 ?? '' }}, {{ $CompanyPhone2 ?? '' }}</p>
                                    <p><strong>Email:</strong> {{ $CompanyEmail ?? '' }}</p>
                                    
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".2s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>Germany</h4>
                                    <p>{{ $CompanyGermany ?? 'Landsberger Str. 441, München' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyGermanyPhone ?? '' }}</p>
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".3s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>Australia</h4>
                                    <p>{{ $CompanyAustralia ?? '4/90 Johnston Street Annandale 2038 Sydney' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyAustraliaPhone ?? '' }}</p>
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".4s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>Cyprus</h4>
                                    <p>{{ $CompanyCyprus ?? 'Leoforos Akropoleos 52 Strovolos Nicosia' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyCyprusPhone1 ?? '' }} <br> {{ $CompanyCyprusPhone2 ?? '' }}</p>
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".5s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>Canada</h4>
                                    <p>{{ $CompanyCanada ?? '721 adsum dr. Winnipeg MB' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyCanadaPhone ?? '' }}</p>
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                <div class="premium-network-card">
                                    <div class="icon-box">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <h4>United States</h4>
                                    <p>{{ $CompanyUS ?? '06 Pleasant St, Concord, NH' }}</p>
                                    <p><strong>Phone:</strong> {{ $CompanyUSPhone ?? '' }}</p>
                                    <svg class="watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </main>

@endsection