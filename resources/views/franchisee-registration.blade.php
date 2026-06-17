@extends('layouts.header')

@section('title', 'Franchisee Registration - NART')
@section('description', 'Join NART as a franchisee and be part of our mission to provide quality education. Register now
    to become a NART franchisee and expand your business opportunities.')
@section('keywords', 'Franchisee Registration, NART Franchise, Education Franchise, Business Opportunity, Quality
    Education, NART Franchisee Program, Join NART, Franchise Business, Educational Franchise, NART Franchise Registration,
    Become a Franchisee, Education Business, NART Franchise Opportunities')
@section('author', 'National Academy of Research and Training Centre')

@section('content')

    @if (session('success'))
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#successModal").modal('show');
            });
        </script>

        <div id="successModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"
                    style="border-radius: 12px; overflow: hidden; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="modal-header" style="background: #0056b3; border-bottom: none; padding: 20px;">
                        <h4 class="modal-title" style="color: white; margin: 0; font-weight: 600;">Registration Alert</h4>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            style="color: #ffffff; opacity: 1; text-shadow: none;">&times;</button> --}}
                    </div>
                    <div class="modal-body text-center" style="padding: 30px 20px;">
                        <div style="font-size: 50px; color: #28a745; margin-bottom: 15px;">
                            <i class="fi fi-rr-check-circle"></i>
                        </div>

                        <p style="font-size: 1.1rem; color: #28a745; font-weight: 600; margin-bottom: 20px;">
                            {{ session('success') }}
                        </p>

                        <div
                            style="background: #f8f9fa; padding: 20px; border-radius: 8px; text-align: left; border: 1px dashed #ced4da;">
                            <h4 style="margin-bottom: 15px; color: #333; font-size: 1.2rem;">
                                <span
                                    style="color: #6c757d; font-size: 0.9rem; display: block; margin-bottom: 5px;">Reference
                                    No:</span>
                                <span style="color: #0056b3;">{{ session('ref_no') }}</span>
                            </h4>
                            <h4 style="margin: 0; color: #333; font-size: 1.2rem;">
                                <span
                                    style="color: #6c757d; font-size: 0.9rem; display: block; margin-bottom: 5px;">Password:</span>
                                <span style="color: #0056b3;">{{ session('plain_password') }}</span>
                            </h4>
                        </div>

                        <p style="margin-top: 20px; font-size: 0.85rem; color: #dc3545;">
                            * Please save these details for your future panel login.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="section-bg hero-bg">
                    <section class="ed-breadcrumbs background-image"
                        style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="ed-breadcrumbs__content text-center">
                                        <h3 class="ed-breadcrumbs__title">Franchisee Registration</h3>
                                        <ul class="ed-breadcrumbs__menu justify-content-center">
                                            <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                            <li>/</li>
                                            <li>Franchisee Registration</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="ed-checkout section-gap">
                    <div class="container ed-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-12">

                                <div class="ed-checkout__form-wrapper">
                                    <form action="{{ route('franchisee.registration.store') }}" method="POST"
                                        enctype="multipart/form-data" class="ed-checkout__form">
                                        @csrf

                                        <div class="modern-form-card">
                                            <h2 class="modern-section-title">
                                                <i class="fi fi-rr-user"></i> Franchiser Personal Details
                                            </h2>
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Full Name *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadFullName') border-danger @enderror"
                                                            type="text" name="HeadFullName" placeholder="Enter Full Name"
                                                            value="{{ old('HeadFullName') }}" required />
                                                        @error('HeadFullName')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Father's Name *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadFatherName') border-danger @enderror"
                                                            type="text" name="HeadFatherName"
                                                            placeholder="Enter Father's Name"
                                                            value="{{ old('HeadFatherName') }}" required />
                                                        @error('HeadFatherName')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Mother's Name *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadMotherName') border-danger @enderror"
                                                            type="text" name="HeadMotherName"
                                                            placeholder="Enter Mother's Name"
                                                            value="{{ old('HeadMotherName') }}" required />
                                                        @error('HeadMotherName')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Phone No. *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadPhone') border-danger @enderror"
                                                            type="text" name="HeadPhone" placeholder="10 Digit Phone No." maxlength="10"
                                                            value="{{ old('HeadPhone') }}" required />
                                                        @error('HeadPhone')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Gender *</label>
                                                        <select
                                                            class="ed-checkout__input @error('HeadGender') border-danger @enderror"
                                                            name="HeadGender" required>
                                                            <option value="" disabled
                                                                {{ old('HeadGender') ? '' : 'selected' }}>Select Gender
                                                            </option>
                                                            <option value="male"
                                                                {{ old('HeadGender') == 'male' ? 'selected' : '' }}>Male
                                                            </option>
                                                            <option value="female"
                                                                {{ old('HeadGender') == 'female' ? 'selected' : '' }}>
                                                                Female</option>
                                                            <option value="other"
                                                                {{ old('HeadGender') == 'other' ? 'selected' : '' }}>Other
                                                            </option>
                                                        </select>
                                                        @error('HeadGender')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Date of Birth *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadDOB') border-danger @enderror"
                                                            type="date" name="HeadDOB" value="{{ old('HeadDOB') }}"
                                                            required />
                                                        @error('HeadDOB')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Aadhaar No. *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadAdhaar') border-danger @enderror"
                                                            type="text" name="HeadAdhaar"
                                                            value="{{ old('HeadAdhaar') }}"
                                                            placeholder="12 Digit Aadhaar No." maxlength="12" required />
                                                        @error('HeadAdhaar')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Email Address *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadEmail') border-danger @enderror"
                                                            type="email" name="HeadEmail"
                                                            value="{{ old('HeadEmail') }}" placeholder="Enter Email"
                                                            required />
                                                        @error('HeadEmail')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Panel Password *</label>
                                                        <input
                                                            class="ed-checkout__input @error('password') border-danger @enderror"
                                                            type="password" name="password" placeholder="Create Password"
                                                            required />
                                                        @error('password')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">City *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadCity') border-danger @enderror"
                                                            type="text" name="HeadCity" value="{{ old('HeadCity') }}"
                                                            placeholder="Enter City" required />
                                                        @error('HeadCity')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">State *</label>
                                                        <input
                                                            class="ed-checkout__input @error('HeadState') border-danger @enderror"
                                                            type="text" name="HeadState"
                                                            value="{{ old('HeadState') }}" placeholder="Enter State"
                                                            required />
                                                        @error('HeadState')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Passport Size Photo *</label>
                                                        <input
                                                            class="ed-checkout__input image-upload-check @error('CentreHeadImage') border-danger @enderror"
                                                            type="file" name="CentreHeadImage" accept="image/*"
                                                            required />
                                                        <span class="text-danger js-error-msg"
                                                            style="font-size:12px; display:none;">Image must be less than
                                                            2MB</span>
                                                        @error('CentreHeadImage')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Full Address *</label>
                                                        <textarea class="ed-checkout__input @error('HeadAddress') border-danger @enderror" name="HeadAddress"
                                                            placeholder="Enter Full Residential Address" rows="3" required>{{ old('HeadAddress') }}</textarea>
                                                        @error('HeadAddress')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modern-form-card">
                                            <h2 class="modern-section-title">
                                                <i class="fi fi-rr-building"></i> Institute / Centre Details
                                            </h2>
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre Name *</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentreName') border-danger @enderror"
                                                            type="text" name="CentreName"
                                                            placeholder="Enter Centre Name"
                                                            value="{{ old('CentreName') }}" required />
                                                        @error('CentreName')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre Landmark</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentreLandmark') border-danger @enderror"
                                                            type="text" name="CentreLandmark"
                                                            placeholder="Nearby Landmark"
                                                            value="{{ old('CentreLandmark') }}" />
                                                        @error('CentreLandmark')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre Phone No.</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentrePhone') border-danger @enderror"
                                                            type="text" name="CentrePhone" maxlength="10"
                                                            placeholder="Centre Contact Number"
                                                            value="{{ old('CentrePhone') }}" />
                                                        @error('CentrePhone')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre City</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentreCity') border-danger @enderror"
                                                            type="text" name="CentreCity" placeholder="Centre City"
                                                            value="{{ old('CentreCity') }}" />
                                                        @error('CentreCity')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre District</label>
                                                        <input
                                                            class="ed-checkout__input @error('centre_district') border-danger @enderror"
                                                            type="text" name="centre_district"
                                                            placeholder="Centre District"
                                                            value="{{ old('centre_district') }}" />
                                                        @error('centre_district')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre State</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentreState') border-danger @enderror"
                                                            type="text" name="CentreState" placeholder="Centre State"
                                                            value="{{ old('CentreState') }}" />
                                                        @error('CentreState')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Centre Email</label>
                                                        <input
                                                            class="ed-checkout__input @error('CentreEmail') border-danger @enderror"
                                                            type="email" name="CentreEmail"
                                                            placeholder="Centre Official Email"
                                                            value="{{ old('CentreEmail') }}" />
                                                        @error('CentreEmail')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Exterior Photo (Building)
                                                            *</label>
                                                        <input
                                                            class="ed-checkout__input image-upload-check @error('CentreOutside') border-danger @enderror"
                                                            type="file" name="CentreOutside" accept="image/*"
                                                            required />
                                                        <span class="text-danger js-error-msg"
                                                            style="font-size:12px; display:none;">Image must be less than
                                                            2MB</span>
                                                        @error('CentreOutside')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Interior Photo (Classroom)
                                                            *</label>
                                                        <input
                                                            class="ed-checkout__input image-upload-check @error('CentreInside') border-danger @enderror"
                                                            type="file" name="CentreInside" accept="image/*"
                                                            required />
                                                        <span class="text-danger js-error-msg"
                                                            style="font-size:12px; display:none;">Image must be less than
                                                            2MB</span>
                                                        @error('CentreInside')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Digital Signature Photo *</label>
                                                        <input
                                                            class="ed-checkout__input image-upload-check @error('Sign') border-danger @enderror"
                                                            type="file" name="Sign" accept="image/*" required />
                                                        <span class="text-danger js-error-msg"
                                                            style="font-size:12px; display:none;">Image must be less than
                                                            2MB</span>
                                                        @error('Sign')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-12 mb-4">
                                                    <div class="ed-checkout__form-group">
                                                        <label class="ed-checkout__label">Full Centre Address *</label>
                                                        <textarea class="ed-checkout__input @error('CentreAddress') border-danger @enderror" name="CentreAddress"
                                                            placeholder="Enter Complete Centre Address" rows="3" required>{{ old('CentreAddress') }}</textarea>
                                                        @error('CentreAddress')
                                                            <span class="text-danger"
                                                                style="font-size:12px;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="submit-btn-wrapper">
                                            <button type="submit" class="ed-btn-modern">
                                                Submit Registration <i class="fi fi-rr-arrow-small-right"></i>
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const imageInputs = document.querySelectorAll('.image-upload-check');

                    imageInputs.forEach(function(input) {
                        input.addEventListener('change', function() {
                            const file = this.files[0];
                            const errorMsg = this.nextElementSibling;

                            if (file) {
                                const fileSizeInMB = file.size / (1024 * 1024);
                                if (fileSizeInMB > 2) {
                                    this.value = '';
                                    this.classList.add('border-danger');
                                    errorMsg.style.display = 'block';
                                } else {
                                    this.classList.remove('border-danger');
                                    errorMsg.style.display = 'none';
                                }
                            }
                        });
                    });
                });
            </script>
        @endsection
