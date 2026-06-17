@extends('layouts.course-header')

@section('title', 'Training and Placement Department - NART')
@section('description', 'The Training and Placement Department of NART provides guidance, skill development, and assistance for students to achieve their career goals.')
@section('keywords', 'Training and Placement, Career Guidance, NART Placement, Soft Skills, Vocational Training, Internship, Campus Placement')
@section('author', 'National Academy of Research and Training Centre')

@section('course-content')

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

                                        <h1 class="ed-breadcrumbs__title">
                                            Training and Placement
                                        </h1>

                                        <ul class="ed-breadcrumbs__menu justify-content-center">

                                            <li class="active">
                                                <a href="{{ route('index') }}">
                                                    Home
                                                </a>
                                            </li>

                                            <li>/</li>

                                            <li>
                                                Training and Placement
                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

                <section class="ed-course__details section-gap">

                    <div class="container ed-container">

                        <div class="row justify-content-center">

                            <div class="col-lg-10 col-12">

                                <div class="ed-course__details-content">

                                    <div class="mb-5">

                                        <h3 class="mb-3">
                                            Overview
                                        </h3>

                                        <p>
                                            The Training and Placement Department of NART provides guidance and all the assistance for the students in order to achieve their career goals. The Department takes right steps in identifying the demands of the current industry and prepares our students towards this need. Adequate emphasis is given for soft skill development complementing the regular academic technical & skill training programmes through vocational training centers. Aptitude tests and group discussions are conducted at regular intervals to enable the students to improve their performance in competitive exams. Job oriented courses and special training programmes are regularly conducted at different vocational training centers. NART will also arrange guest lectures, visiting faculty members for training students and faculty members too, from time to time.
                                        </p>

                                    </div>

                                    <div class="mb-5">

                                        <h3 class="mb-3">
                                            Goal
                                        </h3>

                                        <p>
                                            The goal of Training & Placement Department is to provide employment opportunities and market ready training to Students.
                                        </p>

                                    </div>

                                    <div class="mb-5">

                                        <h3 class="mb-3">
                                            Objectives
                                        </h3>

                                        <ul class="ps-4" style="list-style-type: disc;">
                                            <li class="mb-2">To achieve more than 100% in terms of placements.</li>
                                            <li class="mb-2">To expose the students to real corporate world by arranging Vocation Practical Training and Projects.</li>
                                            <li class="mb-2">To organize seminars/leadership programs/workshops of eminent personalities from the corporate world.</li>
                                        </ul>

                                    </div>

                                    <div class="mb-5">

                                        <h3 class="mb-3">
                                            Activities
                                        </h3>

                                        <ul class="ps-4" style="list-style-type: disc;">
                                            <li class="mb-2">Nurturing cordial relationship with the Industries, invite them for recruitment drives, organizing technical seminars, workshops and other technical sessions.</li>
                                            <li class="mb-2">Inviting Industry personnel periodically to enrich the knowledge base of student’s community with the latest technological innovations and industry practices.</li>
                                            <li class="mb-2">Maintaining updated database and job profile, recruitment pattern of the companies and thus helps each student analyze and prepare.</li>
                                            <li class="mb-2">Conducting Vocational Training/Summer Internship with renowned industries and different organization sectors like: Consulting Services, Entertainment & Media, Manufacturing & Automotive, Retail, E-Commerce & Internet, Finance & Investment, Telecommunication, Sports, Hospitality & etc.</li>
                                            <li class="mb-2">Periodic in-house and outsourced training sessions for soft skills, aptitude and technical seminars aiming at making the student community employable.</li>
                                            <li class="mb-2">Helping every student in defining his/her career interest through career counseling by guidance lectures of suitable corporate representatives at regular intervals.</li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </main>

        @endsection