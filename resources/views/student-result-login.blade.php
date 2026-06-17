@extends('layouts.header')

@section('title', 'Student Result - NART')
@section('description', 'View your academic results by entering your credentials.')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h1 class="ed-breadcrumbs__title">View Result</h1>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Student Result</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="login-wrapper">
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class="login-card">
                            <div class="row g-0">

                                <div class="col-lg-5 col-md-6 login-image-side">
                                    <div class="login-image-overlay">
                                        <img src="{{ asset('assets/images/NART-white.webp') }}" alt="NART Logo" />
                                        <h2>Check Results</h2>
                                        <p>Enter your valid registration number and date of birth to download or view your
                                            examination results.</p>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6 login-form-side">

                                    <a href="{{ route('index') }}" class="back-home-link">
                                        <i class="fi fi-rr-arrow-small-left"></i> Back to Home
                                    </a>

                                    <div>
                                        <h3 class="ed-auth__title">Student Result</h3>
                                    </div>

                                    <form action="{{ route('student.result.post') }}" method="POST" class="ed-auth__form">
                                        @csrf

                                        <div class="mb-4">
                                            <label class="fw-bold mb-2 text-dark">Registration Number</label>
                                            <input type="text"
                                                class="ed-checkout__input @error('REGISTRATION') border-danger @enderror"
                                                name="REGISTRATION" value="{{ old('REGISTRATION') }}"
                                                placeholder="Enter your registration number (e.g. NART/...)" required
                                                autofocus />
                                            @error('REGISTRATION')
                                                <span class="text-danger"
                                                    style="font-size:13px; margin-top:5px; display:block; font-weight: 500;">
                                                    <i class="fi fi-rr-info"></i> {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="fw-bold mb-2 text-dark">Date of Birth</label>
                                            <input type="text"
                                                class="ed-checkout__input @error('DOB') border-danger @enderror"
                                                name="DOB" value="{{ old('DOB') }}"
                                                placeholder="Date of Birth (e.g. 01-01-1990)" required />
                                            @error('DOB')
                                                <span class="text-danger"
                                                    style="font-size:13px; margin-top:5px; display:block; font-weight: 500;">
                                                    <i class="fi fi-rr-info"></i> {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="ed-auth__form-btn">
                                            <button type="submit" class="ed-btn-modern">
                                                View Results <i class="fi fi-rr-search"></i>
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </main>

        @endsection
