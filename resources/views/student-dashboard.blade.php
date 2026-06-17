@extends('layouts.header')

@section('title', 'Student Dashboard - NART')
@section('description', 'Welcome to your NART Student Dashboard.')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h1 class="ed-breadcrumbs__title">My Dashboard</h1>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Dashboard</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="dashboard-wrapper">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="dashboard-card profile-wrap">
                                    @if ($student->PassportSize)
                                        <img src="{{ asset($student->PassportSize) }}" alt="Student Photo"
                                            class="profile-pic">
                                    @else
                                        <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default Photo"
                                            class="profile-pic">
                                    @endif

                                    <h3 class="student-name">{{ $student->Name }}</h3>
                                    <p class="student-reg">Reg No: {{ $student->REGISTRATION }}</p>

                                    <div class="mb-4">
                                        @if ($student->Verify == 1)
                                            <span class="badge-verified"><i class="fi fi-rr-badge-check"></i> Verified
                                                Student</span>
                                        @else
                                            <span class="badge-verified" style="background: #f59e0b;"><i
                                                    class="fi fi-rr-time-clock"></i> Verification Pending</span>
                                        @endif
                                    </div>

                                    <a href="{{ route('student.logout') }}" class="btn-logout">
                                        <i class="fi fi-rr-sign-out-alt"></i> Logout
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12">

                                <div class="dashboard-card">
                                    <h4 class="dashboard-heading"><i class="fi fi-rr-graduation-cap"></i> Course & Center
                                        Details</h4>
                                    <div class="info-list">
                                        <div class="info-row">
                                            <span class="info-label">Application For Admission To</span>
                                            <span class="info-value">{{ $student->app_for_admin_to ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Course Name</span>
                                            <span class="info-value">{{ $student->DepartmentName ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Session Year</span>
                                            <span class="info-value">{{ $student->SessionYear ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Roll No.</span>
                                            <span class="info-value">{{ $student->RollNo ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Training Centre</span>
                                            <span class="info-value">{{ $student->TrainingCentre ?? 'N/A' }}
                                                ({{ $student->TrainingCentreCode ?? '' }})</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-card">
                                    <h4 class="dashboard-heading"><i class="fi fi-rr-user"></i> Personal Information</h4>
                                    <div class="info-list">
                                        <div class="info-row">
                                            <span class="info-label">Father Name</span>
                                            <span class="info-value">{{ $student->FaHuName ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Mother's Name</span>
                                            <span class="info-value">{{ $student->MotherName ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Date of Birth</span>
                                            <span class="info-value">{{ $student->DOB ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Gender</span>
                                            <span class="info-value"
                                                style="text-transform: capitalize;">{{ $student->Gender ?? 'N/A' }}</span>
                                        </div>
                                        <div class="info-row">
                                            <span class="info-label">Aadhaar Number</span>
                                            <span class="info-value">{{ $student->adr_no ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-card">
                                    <h4 class="dashboard-heading"><i class="fi fi-rr-envelope"></i> Contact Details</h4>
                                    <div class="info-list">
                                        <div class="info-row">
                                            <span class="info-label">Full Address</span>
                                            <span class="info-value">{{ $student->Address ?? 'N/A' }} -
                                                {{ $student->Pin ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </main>

        @endsection
