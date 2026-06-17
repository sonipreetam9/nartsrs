@extends('layouts.header')

@section('title', 'My Results - NART')

@section('content')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-12 text-center">
                                    <h1 class="ed-breadcrumbs__title">Academic Results</h1>
                                    <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Result</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="result-wrapper">
                    <div class="container">
                        <div class="result-card">

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="mb-0 text-dark"><i class="fi fi-rr-document"></i> Result</h3>
                            </div>

                            <div class="profile-container">
                                <div class="profile-img-wrap">
                                    @if (!empty($student->PassportSize))
                                        <img src="{{ asset($student->PassportSize) }}" alt="Student Photo"
                                            class="student-profile-pic">
                                    @else
                                        <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Student Photo"
                                            class="student-profile-pic">
                                    @endif
                                </div>

                                <div class="student-info-grid">
                                    <div class="info-box">
                                        <span>Student Name</span>
                                        <strong>{{ $student->Name }}</strong>
                                    </div>
                                    <div class="info-box">
                                        <span>Registration No.</span>
                                        <strong>{{ $student->REGISTRATION }}</strong>
                                    </div>
                                    <div class="info-box">
                                        <span>Roll No.</span>
                                        <strong>{{ $student->RollNo }}</strong>
                                    </div>
                                    <div class="info-box">
                                        <span>Course</span>
                                        <strong>{{ $student->DepartmentName ?? 'N/A' }}</strong>
                                    </div>
                                    {{-- <div class="info-box">
                                        <span>Training Centre</span>
                                        <strong>{{ $student->TrainingCentre }}</strong>
                                    </div> --}}
                                </div>
                            </div>

                            <h4 class="mb-3 text-dark">Performance</h4>
                            <div class="table-responsive">
                                <table class="result-table">
                                    <thead>
                                        <tr>
                                            <th>Year / Duration</th>
                                            <th>Total Marks</th>
                                            <th>Obtained Marks</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($results as $result)
                                            <tr>
                                                <td><strong>{{ $result->result_year }}</strong></td>
                                                <td>{{ $result->total_marks }}</td>
                                                <td><strong>{{ $result->get_marks }}</strong></td>
                                                <td>
                                                    @if (strtoupper($result->remark) == 'PASS')
                                                        <span class="status-pass">PASS</span>
                                                    @else
                                                        <span class="status-fail">{{ strtoupper($result->remark) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </section>

        </main> @endsection
