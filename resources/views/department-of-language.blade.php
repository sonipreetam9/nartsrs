@extends('layouts.course-header')

@section('title', 'Department of Languages - NART')
@section('description', 'NART offers French, German, Spanish, Italian, Russian, and Japanese language courses from beginner to advanced levels.')
@section('keywords', 'Language Courses, French Language Course, German Language Course, Spanish Language Course, Japanese Language Course, Italian Language Course, Russian Language Course, Foreign Language Training, CEFR Language Levels, NART Languages')
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
                                        Department of Languages
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
                                            Department of Languages
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
                                        Department of Languages
                                    </h2>

                                    <p style="max-width:900px;margin:auto;">
                                        Our language courses are developed in accordance with the
                                        Common European Framework of Reference for Languages (CEFR),
                                        an internationally recognized standard for assessing
                                        language proficiency.
                                    </p>

                                    <br>

                                    <p style="max-width:900px;margin:auto;">
                                        The CEFR framework ensures that students progress through
                                        clearly defined levels — from A1 (Beginner) to C2 (Proficient),
                                        helping them achieve globally accepted communication skills
                                        for education, career, and international opportunities.
                                    </p>

                                </div>



                                <!-- Search Box -->
                                <div class="course-search-box mb-4">

                                    <div class="position-relative">

                                        <input type="text"
                                            id="courseSearch"
                                            class="form-control shadow-none"
                                            placeholder="Search Language or Level">

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
                                                <th>Language</th>
                                                <th>Level 1</th>
                                                <th>Level 2</th>
                                                <th>Level 3</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>French Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>German Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Spanish Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Italian Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Russian Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Japanese Language</td>
                                                <td>A1 / A2</td>
                                                <td>B1 / B2</td>
                                                <td>C1 / C2</td>
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