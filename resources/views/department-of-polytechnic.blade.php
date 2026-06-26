@extends('layouts.course-header')

@section('title', 'Department of Polytechnic - NART')
@section('description', 'NART offers Polytechnic diploma courses in Mechanical, Civil, Electrical, Automobile, Electronics, and Computer Science Engineering.')
@section('keywords', 'Polytechnic Courses, Engineering Diploma, Mechanical Engineering, Civil Engineering, Electrical Engineering, Computer Science Engineering, Automobile Engineering, Electronics and Communication, Polytechnic Diploma, NART Polytechnic')
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
                                        Department of Polytechnic
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
                                            Department of Polytechnic
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

                                    <h2 class="mb-3">
                                        Department of Polytechnic
                                    </h2>

                                    <p style="max-width:900px;margin:auto;">
                                        The Department of Polytechnic is dedicated to providing
                                        high-quality technical education that prepares students
                                        for modern industry and engineering environments.
                                    </p>

                                    <br>

                                    <p style="max-width:900px;margin:auto;">
                                        The department focuses on practical learning,
                                        hands-on training, and real-world applications
                                        of technology, enabling students to develop
                                        strong technical and problem-solving skills.
                                    </p>

                                </div>



                                <!-- Search Box -->
                                <div class="course-search-box mb-4">

                                    <div class="position-relative">

                                        <input type="text"
                                            id="courseSearch"
                                            class="form-control shadow-none"
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
                                                <td>Mechanical Engineering</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Electrical Engineering</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Computer Science Engineering</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Electronics & Communication</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Civil Engineering</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Automobile Engineering</td>
                                                <td>THREE YEAR</td>
                                                <td>10th</td>
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

@endsection