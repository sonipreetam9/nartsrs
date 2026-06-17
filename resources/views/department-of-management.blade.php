@extends('layouts.course-header')

@section('title', 'Department of Management - NART')
@section('description', 'NART offers Business Management, Retail Management, Digital Marketing, Event Management, and Office Administration courses for career growth.')
@section('keywords', 'Management Courses, Business Management, Retail Management, Digital Marketing Course, Event Management Course, Office Administration, Library Management, Management Diploma, NART Management Courses')
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
                                        Department of Management
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
                                            Department of Management
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
                                        Department of Management
                                    </h3>

                                    <p style="max-width:900px;margin:auto;">
                                        Management is the administration of an organization,
                                        whether it is a business, a not-for-profit organization,
                                        or government body. Management includes the activities
                                        of setting the strategy of an organization and
                                        coordinating the efforts of its employees to achieve objectives.
                                    </p>

                                    <br>

                                    <p style="max-width:900px;margin:auto;">
                                        Management education helps students develop leadership,
                                        communication, business planning, marketing, and
                                        organizational skills required in modern industries.
                                        Students can build careers in administration,
                                        retail management, digital marketing, event management,
                                        and business operations.
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
                                                <td>ADVANCE DIPLOMA IN BUSINESS MANAGEMENT</td>
                                                <td>ONE YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>DIPLOMA IN WORK SUPERVISORY</td>
                                                <td>TWO YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>ADVANCE DIPLOMA IN PANCHAYATI RAJ</td>
                                                <td>ONE YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>DIPLOMA IN LIBRARY MANAGEMENT</td>
                                                <td>ONE YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>INDUSTRIAL DIPLOMA IN BUSINESS MANAGEMENT</td>
                                                <td>TWO YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>ADVANCE DIPLOMA IN RETAIL MANAGEMENT</td>
                                                <td>ONE YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>INDUSTRIAL DIPLOMA IN RETAIL MANAGEMENT</td>
                                                <td>TWO YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>8</td>
                                                <td>DIPLOMA IN LIBRARY MANAGEMENT</td>
                                                <td>TWO YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>9</td>
                                                <td>DIPLOMA IN OFFICE ADMINISTRATION</td>
                                                <td>ONE YEAR</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td>10</td>
                                                <td>DIPLOMA IN EVENT MANAGEMENT</td>
                                                <td>ONE YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>DIPLOMA IN EVENT MANAGEMENT</td>
                                                <td>TWO YEAR</td>
                                                <td>10th</td>
                                            </tr>

                                            <tr>
                                                <td>12</td>
                                                <td>DIPLOMA IN DIGITAL MARKETING</td>
                                                <td>ONE YEAR</td>
                                                <td>12th</td>
                                            </tr>

                                            <tr>
                                                <td>13</td>
                                                <td>DIPLOMA IN DIGITAL MARKETING</td>
                                                <td>TWO YEAR</td>
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