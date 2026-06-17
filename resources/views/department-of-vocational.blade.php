@extends('layouts.course-header')

@section('title', 'Department of Vocational - NART')
@section('description', 'NART offers ITI and vocational courses including Electrician, Fitter, Welder, COPA, Wireman, Motor Mechanic, Refrigeration, and skill development programs.')
@section('keywords', 'Vocational Courses, ITI Courses, Electrician Course, Fitter Course, Welder Course, COPA Course, Wireman Course, Motor Mechanic, Skill Development, Vocational Training, NART ITI')
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
                                            Department of Vocational
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
                                                Department of Vocational
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
                                            Department of Vocational
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
                                        <p style="max-width:900px;margin:auto;">
                                            Industrial Training Institutes and Industrial Training Centers are
                                            post-secondary schools in India constituted under Directorate General of
                                            Employment & Training (DGET), Ministry of Skill Development and
                                            Entrepreneurship, Union Government to provide training in various trades.
                                            Admission to the various trades is done every year in August. The admission
                                            procedure is started before the commencement of the new session. Sessions under
                                            this scheme start from the 1st August. Under the NCVT guidelines, admission in
                                            ITIs is made on merit-based / written examination. Admission to private ITIs is
                                            done directly.
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
                                                    <td>ITI - IN - ELECTRICIAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>8th</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>ITI - IN - WELDER</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>ITI - IN - FITTER</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>ITI - IN - PLUMBER</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>ITI - IN - COPA</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>ITI - IN - HEALTH SANITARY INSPECTOR</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>ITI - IN - FIRE SAFETY MANAGEMENT</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>ITI - IN - WIREMAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>9</td>
                                                    <td>ITI - IN - DRAUGHTSMAN (CIVIL)</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td>ITI - IN - CUTTING & TAILORING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>11</td>
                                                    <td>ITI - IN - STENOGRAPHY (HINDI)</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>12</td>
                                                    <td>ITI - IN - BEAUTY & WELLNESS</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>13</td>
                                                    <td>ITI - IN - CUTTING & TAILORING & DRESS MAKING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>14</td>
                                                    <td>ITI - IN - STENOGRAPHY (ENGLISH)</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>15</td>
                                                    <td>ITI - IN - INSTRUMENT MECHANIC</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>16</td>
                                                    <td>ITI - IN - HAIR & SKIN CARE</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>17</td>
                                                    <td>ITI - IN - CARPENTER</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>18</td>
                                                    <td>ITI - IN - MOTOR MECHANIC</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>19</td>
                                                    <td>ITI - IN - BEAUTY THERAPY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>20</td>
                                                    <td>ITI - IN - DIESEL MECHANIC</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>21</td>
                                                    <td>ITI - IN - STORE KEEPER</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>22</td>
                                                    <td>ITI - IN - REFRIGERATION & AIR CONDITIONING</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>23</td>
                                                    <td>ITI - IN - DRAFTSMAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>24</td>
                                                    <td>ITI - IN - INSTRUMENT MECHANIC</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>25</td>
                                                    <td>ITI - IN - ART & CRAFT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>26</td>
                                                    <td>ITI - IN - TURNER</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>27</td>
                                                    <td>ITI - IN - MOTOR MECHANIC VEHICLE</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>28</td>
                                                    <td>ITI - IN - PAINTER</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>29</td>
                                                    <td>ITI - IN - MASON</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>30</td>
                                                    <td>ITI - IN - AUTOMOBILE</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>31</td>
                                                    <td>ITI - IN - SURVEYOR</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>32</td>
                                                    <td>ITI - IN - PUMP OPERATOR CUM MECHANIC</td>
                                                    <td>ONE YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>33</td>
                                                    <td>ITI - IN - ELECTRONICS MECHANIC</td>
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

            <!-- Custom CSS -->

            <!-- Live Search Script -->

        @endsection
