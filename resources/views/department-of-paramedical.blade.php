@extends('layouts.course-header')

@section('title', 'Department of Paramedical - NART')
@section('description', 'NART offers Paramedical courses in Medical Lab Technology, Radiology, Dialysis Technology, Physiotherapy, Nursing, and Healthcare Services.')
@section('keywords', 'Paramedical Courses, Medical Lab Technology, Radiology Course, Dialysis Technology, Physiotherapy Course, Nursing Assistant, Healthcare Courses, Medical Technician, Paramedical Diploma, NART Paramedical')
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
                                            Department of Paramedical
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
                                                Department of Paramedical
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
                                            Department of Paramedical
                                        </h3>

                                        <p style="max-width:900px;margin:auto;">
                                            A paramedic is a healthcare professional, predominantly in the pre-hospital and
                                            out-of-hospital environment, and working mainly as part of emergency medical
                                            services (EMS), such as on an ambulance. The scope of practice of a paramedic
                                            will vary between countries, but generally includes autonomous decision making
                                            around the emergency care of patients.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            In some countries 'Paramedic' is a protected title and accountable to a
                                            professional regulatory body.
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
                                                    <td>ADVANCE DIPLOMA IN TUBERCULOSIS HEALTH SUPERVISES</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>DIPLOMA IN HEALTH EDUCATION & COMMUNITY SERVICES</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>DIPLOMA IN BIOSTATISTICS</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>DIPLOMA IN DIALYSIS TECHNOLOGY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>DIPLOMA IN MEDICAL RECORD MANAGEMENT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>ADVANCED DIPLOMA IN PHYSIOTHERAPY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>DIPLOMA IN MEDICAL LAB TECHNOLOGY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>DIPLOMA IN RADIOLOGY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>9</td>
                                                    <td>DIPLOMA IN CMS & ED</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td>DIPLOMA IN OPERATION THEATER ASSISTANT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>11</td>
                                                    <td>DIPLOMA IN NURSING ASSISTANT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>12</td>
                                                    <td>DIPLOMA IN NURSING ASSISTANT</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>13</td>
                                                    <td>DIPLOMA IN RADIOLOGY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>14</td>
                                                    <td>DIPLOMA IN DIALYSIS TECHNOLOGY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>15</td>
                                                    <td>DIPLOMA IN DENTAL ASSISTANT</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>16</td>
                                                    <td>DIPLOMA IN MASSAGE THERAPY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>17</td>
                                                    <td>ADVANCE DIPLOMA IN NANNY TRAINING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>18</td>
                                                    <td>ADVANCE DIPLOMA IN CHILD CARE</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>19</td>
                                                    <td>ADVANCE DIPLOMA IN MULTIPURPOSE HEALTH WORKER</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>20</td>
                                                    <td>DIPLOMA IN GENERAL DUTY ASSISTANT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>21</td>
                                                    <td>DIPLOMA IN PHYSIOTHERAPY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>22</td>
                                                    <td>DIPLOMA IN ICU TECHNICIAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>23</td>
                                                    <td>DIPLOMA IN EARLY CHILDHOOD CARE</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>24</td>
                                                    <td>ADVANCE DIPLOMA IN CHILD CARE NUTRITION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>25</td>
                                                    <td>DIPLOMA IN MEDICAL LAB TECHNOLOGY</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>26</td>
                                                    <td>ADVANCE DIPLOMA IN NANNY TRAINING (LIVE IN CARE GIVER)</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>27</td>
                                                    <td>DIPLOMA IN X-RAY TECHNICIAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>28</td>
                                                    <td>DIPLOMA IN FITNESS & HEALTH NUTRITION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>29</td>
                                                    <td>DIPLOMA IN FITNESS & HEALTH PROMOTION</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>30</td>
                                                    <td>DIPLOMA IN FITNESS & HEALTH PROMOTION</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>31</td>
                                                    <td>DIPLOMA IN MULTIPURPOSE HEALTH WORKER</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>32</td>
                                                    <td>DIPLOMA IN HEARING LANGUAGE & SPEECH</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>33</td>
                                                    <td>DIPLOMA IN DENTAL ASSISTANT</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th/12th (Any Stream)</td>
                                                </tr>

                                                <tr>
                                                    <td>34</td>
                                                    <td>DIPLOMA IN DENTAL HYGIENIST</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th/12th (Any Stream)</td>
                                                </tr>

                                                <tr>
                                                    <td>35</td>
                                                    <td>DIPLOMA IN VETERINARY LAB TECHNOLOGY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>-</td>
                                                </tr>

                                                <tr>
                                                    <td>36</td>
                                                    <td>DIPLOMA IN HEALTH EDUCATION & COMMUNITY SERVICES</td>
                                                    <td>TWO YEAR</td>
                                                    <td>-</td>
                                                </tr>

                                                <tr>
                                                    <td>37</td>
                                                    <td>DIPLOMA IN MEDICAL LAB TECHNICIAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>38</td>
                                                    <td>DIPLOMA IN GENERAL DUTY ASSISTANT</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>39</td>
                                                    <td>DIPLOMA IN MEDICAL RECORD MANAGEMENT</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th (Medical)</td>
                                                </tr>

                                                <tr>
                                                    <td>40</td>
                                                    <td>DIPLOMA IN DENTAL TECHNICIAN</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th/12th (Any Stream)</td>
                                                </tr>

                                                <tr>
                                                    <td>41</td>
                                                    <td>DIPLOMA IN MASSAGE THERAPY</td>
                                                    <td>TWO YEAR</td>
                                                    <td>10th</td>
                                                </tr>

                                                <tr>
                                                    <td>42</td>
                                                    <td>CERTIFICATE IN CARE ASSISTANT</td>
                                                    <td>3 TO 12 MONTH</td>
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
