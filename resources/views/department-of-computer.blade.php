@extends('layouts.course-header')

@section('title', 'Department of Computer Courses - NART')
@section('description', 'NART offers ADCA, MDCA, PGDCA, Information Technology, and Computer Application diploma courses for career-focused learning.')
@section('keywords', 'Computer Courses, ADCA, MDCA, PGDCA, Information Technology, Computer Application, Diploma in Computer Application, Computer Training Institute, NART Computer Department, IT Courses, Computer Education')
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
                                            Department of Computer
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
                                                Department of Computer
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
                                            Department of Computer
                                        </h3>

                                        <p style="max-width:900px;margin:auto;">

                                            Computer science is the study of the theory, experimentation, and engineering
                                            that form the basis for the design and use of computers. It is the scientific
                                            and practical approach to computation and its applications and the systematic
                                            study of the feasibility, structure, expression, and mechanization of the
                                            methodical procedures (or algorithms) that underlie the acquisition,
                                            representation, processing, storage, communication of, and access to
                                            information. An alternate, more succinct definition of computer science is the
                                            study of automating algorithmic processes that scale. A computer scientist
                                            specializes in the theory of computation and the design of computational
                                            systems.
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
                                                    <td>ADVANCE DIPLOMA IN COMPUTER APPLICATION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>MASTER DIPLOMA IN COMPUTER APPLICATION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>POST GRADUATE DIPLOMA IN COMPUTER APPLICATION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>INDUSTRIAL DIPLOMA IN COMPUTER APPLICATION</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>INDUSTRIAL DIPLOMA IN INFORMATION TECHNOLOGY</td>
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
