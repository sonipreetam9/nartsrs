@extends('layouts.course-header')

@section('title', 'Department of Fire Safety - NART')
@section('description', 'NART offers Fire Safety and Fire Fighting diploma courses focused on safety management, fire prevention, and emergency response training.')
@section('keywords', 'Fire Safety Courses, Fire Fighting Course, Fire Safety Management, Fire Safety Diploma, Fire and Safety Course, Industrial Safety, Fire Prevention, Emergency Response, NART Fire Safety')
@section('author', 'National Academy of Research and Training Centre')

@section('course-content')

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>

                <!-- Breadcrumbs -->
                <div class="section-bg hero-bg">

                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-lg-8 col-md-10 col-12">

                                    <div class="ed-breadcrumbs__content text-center">

                                        <h1 class="ed-breadcrumbs__title">
                                            Department of Fire Safety
                                        </h1>

                                        <ul class="ed-breadcrumbs__menu justify-content-center">

                                            <li class="active">
                                                <a href="{{ route('index') }}">
                                                    Home
                                                </a>
                                            </li>

                                            <li>/</li>

                                            <li>
                                                <a href="{{ route('courses') }}">
                                                    Courses
                                                </a>
                                            </li>

                                            <li>/</li>

                                            <li>
                                                Department of Fire Safety
                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>



                <!-- Course Details -->
                <section class="ed-course__details section-gap">

                    <div class="container ed-container">

                        <div class="row justify-content-center">

                            <div class="col-lg-10 col-12">

                                <div class="ed-course__details-content">

                                    <!-- Title -->
                                    <div class="text-center mb-5">

                                        <h3 class="mb-3">
                                            Department of Fire Safety
                                        </h3>

                                        <p style="max-width:900px;margin:auto;">
                                            Fire safety is the set of practices intended to reduce the destruction caused by
                                            fire. Fire safety measures include those that are intended to prevent ignition
                                            of an uncontrolled fire, and those that are used to limit the development and
                                            effects of a fire after it starts.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Fire safety measures include those that are planned during the construction of a
                                            building or implemented in structures that are already standing, and those that
                                            are taught to occupants of the building.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Threats to fire safety are commonly referred to as fire hazards. A fire hazard
                                            may include a situation that increases the likelihood of a fire or may impede
                                            escape in the event a fire occurs.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Fire safety is often a component of building safety. Those who inspect buildings
                                            for violations of the Fire Code and go into schools to educate children on Fire
                                            Safety topics are fire department members known as Fire Prevention Officers. The
                                            Chief Fire Prevention Officer or Chief of Fire Prevention will normally train
                                            newcomers to the Fire Prevention Division and may also conduct inspections or
                                            make presentations.
                                        </p>

                                    </div>



                                    <!-- Search Box -->
                                    <div class="course-search-box mb-4">

                                        <div class="position-relative">

                                            <input type="text" id="courseSearch" class="form-control shadow-none"
                                                placeholder="Search Course Name or Duration">

                                            <span class="search-icon">
                                                <i class="fi fi-rr-search"></i>
                                            </span>

                                        </div>

                                    </div>



                                    <!-- Table -->
                                    <div class="table-responsive custom-table">

                                        <table class="table align-middle" id="courseTable">

                                            <thead>

                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Course Name</th>
                                                    <th>Duration</th>
                                                    <th>Eligibility</th>
                                                </tr>

                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ADVANCE DIPLOMA IN FIRE FIGHTING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>ADVANCE DIPLOMA IN FIRE SAFETY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>INDUSTRIAL DIPLOMA IN FIRE SAFETY MANAGEMENT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </main>

            <!-- Custom CSS -->

            <!-- Live Search Script -->

        @endsection
