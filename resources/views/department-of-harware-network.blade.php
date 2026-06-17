@extends('layouts.course-header')

@section('title', 'Department of Hardware and Networking - NART')
@section('description', 'NART offer Hardware and Networking courses cover computer hardware, network administration, networking engineering, and IT infrastructure management.')
@section('keywords', 'Hardware and Networking Courses, Computer Hardware, Networking Engineering, Network Administration, Hardware Diploma, Networking Diploma, IT Infrastructure, Computer Networking, NART Hardware Courses')
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
                                            Department of Hardware and Networking
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
                                                Department of Hardware and Networking
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
                                            Department of Hardware and Networking
                                        </h3>

                                        <p style="max-width:900px;margin:auto;">
                                            Networking hardware, also known as network equipment or computer networking
                                            devices, are physical devices required for communication and interaction between
                                            devices on a computer network. Specifically, they mediate data in a computer
                                            network. Units which are the last receiver or generate data are called hosts or
                                            data terminal equipment.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Networking devices may include gateways, routers, network bridges, modems,
                                            wireless access points, networking cables, line drivers, switches, hubs, and
                                            repeaters. They may also include hybrid network devices such as multilayer
                                            switches, protocol converters, bridge routers, proxy servers, firewalls, network
                                            address translators, multiplexers, network interface controllers, wireless
                                            network interface controllers, ISDN terminal adapters, and other related
                                            hardware.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            The most common kind of networking hardware today is a copper-based Ethernet
                                            adapter, which is a standard inclusion on most modern computer systems. Wireless
                                            networking has become increasingly popular, especially for portable and handheld
                                            devices.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Other networking hardware used in computers includes data center equipment such
                                            as file servers, database servers, and storage areas; network services such as
                                            DNS, DHCP, and email; as well as devices which assure content delivery.
                                        </p>
                                        <p style="max-width:900px;margin:auto;">
                                            Taking a wider view, mobile phones, PDAs, and even modern coffee machines may
                                            also be considered networking hardware. As technology advances and IP-based
                                            networks are integrated into building infrastructure and household utilities,
                                            the term "network hardware" will become more ambiguous owing to the vastly
                                            increasing number of network-capable endpoints.
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
                                                    <td>ADVANCE DIPLOMA IN HARDWARE AND NETWORKING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>ADVANCE DIPLOMA IN COMPUTER HARDWARE</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>INDUSTRIAL DIPLOMA IN HARDWARE AND NETWORKING</td>
                                                    <td>TWO YEAR</td>
                                                    <td>12th</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>MASTER DIPLOMA IN HARDWARE AND NETWORKING</td>
                                                    <td>ONE YEAR</td>
                                                    <td>12th</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>ADVANCE DIPLOMA IN NETWORKING ENGINEERING</td>
                                                    <td>ONE YEAR</td>
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
