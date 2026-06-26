<!-- Start Call Action Area -->
{{-- <section class="ed-call-action position-relative">
    <div class="container ed-container">
        <div class="ed-call-action__inner position-relative">
            <div class="ed-call-action__shapes">
                <img class="ed-call-action__shape-1 rotate-ani" src="{{ asset('assets/images/call-action/call-action-1/shape-1.svg') }}"
                    alt="shape-1" />
                <img class="ed-call-action__shape-2" src="{{ asset('assets/images/call-action/call-action-1/shape-2.svg') }}"
                    alt="shape-2" />
                <img class="ed-call-action__shape-3 updown-ani"
                    src="{{ asset('assets/images/call-action/call-action-1/shape-3.svg') }}" alt="shape-3" />
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ed-call-action__img">
                        <img src="{{ asset('assets/images/call-action/call-action-1/call-action-img.png') }}" alt="NART Students" />
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-class">
                    <div class="ed-call-action__content">
                        <div class="ed-section-head">
                            <span class="ed-section-head__sm-title">ADMISSION OPEN</span>
                            <h3 class="ed-section-head__title">
                                Start Your Career Journey With <br />
                                National Academy of Research and Training
                            </h3>
                            <p class="ed-section-head__text">
                                Join NART and gain industry-relevant skills through ITI, Paramedical, Polytechnic,
                                Computer, Language, and vocational training programs.
                            </p>
                        </div>
                        <div class="ed-call-action__content-btn">
                            <a href="{{ route('contact') }}" class="ed-btn">
                                Apply For Admission
                                <i class="fi fi-rr-arrow-small-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Call Action Area -->

<!-- Start Register Modal -->
<div class="modal fade ed-auth__modal" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="ed-auth__modal-content modal-content">
            <button type="button" class="ed-auth__modal-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fi-rr-cross"></i>
            </button>

            <!-- Auth Head  -->
            <div class="ed-auth__modal-head">
                <a href="index.html" class="ed-auth__modal-logo">
                    <img src="assets/images/logo.svg" alt="logo" />
                </a>
                <h3 class="ed-auth__modal-title">Sign Up Now</h3>
                <p class="ed-auth__modal-text">
                    already have an account?
                    <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Sign In
                    </button>
                </p>
            </div>

            <!-- Auth Body  -->
            <div class="ed-auth__modal-body">
                <form action="#" method="post" class="ed-auth__modal-form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter name" required />
                    </div>

                    <div class="form-group">
                        <input type="text" name="user name" placeholder="Enter user name" required />
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter email" required />
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter password" required />
                    </div>

                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckDefault2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                            I agree with your <strong>Privacy Policy</strong>
                        </label>
                    </div>
                    <div class="ed-auth__form-btn">
                        <button type="submit" class="ed-btn">Register Now<i
                                class="fi fi-rr-arrow-small-right"></i></button>
                    </div>
                </form>
            </div>
            <!-- Auth Footer  -->
            <div class="ed-auth__modal-footer">
                <div class="ed-auth__modal-third-party">
                    <p>Or Sign Up with</p>
                    <ul class="ed-auth__modal-third-party-list">
                        <li>
                            <a class="google-login" href="https://www.google.com/"><img
                                    src="assets/images/icons/icon-color-google.svg" alt="icon-color-google" /></a>
                        </li>

                        <li>
                            <a class="facebook-login" href="https://facebook.com/"><img
                                    src="assets/images/icons/icon-color-facebook.svg" alt="icon-color-facebook" /></a>
                        </li>
                        <li>
                            <a class="linkedin-login" href="https://www.linkedin.com/"><img
                                    src="assets/images/icons/icon-color-linkedin.svg" alt="icon-color-linkedin" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Register Modal -->

<!-- Start Footer Area -->
<footer class="ed-footer section-bg-color-1 position-relative">
    <div class="ed-footer__top position-relative">
        <div class="ed-footer__shapes">
            <img class="ed-footer__shape-1" src="{{ asset('assets/images/footer/footer-1/shape-1.svg') }}"
                alt="shape-1" />
            <img class="ed-footer__shape-2 rotate-ani" src="{{ asset('assets/images/footer/footer-1/shape-2.svg') }}"
                alt="shape-2" />
            <img class="ed-footer__shape-3" src="{{ asset('assets/images/footer/footer-1/shape-3.svg') }}"
                alt="shape-3" />
        </div>
        <div class="container ed-container">
            <div class="row g-0">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ed-footer__widget ed-footer__about">
                        <a href="{{ route('index') }}" class="ed-footer__logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="footer-logo" />
                        </a>
                        <p class="ed-footer__about-text">
                            Welcome to National Academy of Research and Training (NART) is dedicated to promoting
                            job-oriented, skill-based, and career-focused education.
                        </p>
                        <ul class="ed-footer__about-social">
                            <li><a href="https://www.facebook.com/" target="_blank"><img
                                        src="{{ asset('assets/images/icons/icon-dark-facebook.svg') }}"
                                        alt="facebook" /></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><img
                                        src="{{ asset('assets/images/icons/icon-dark-twitter.svg') }}"
                                        alt="twitter" /></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><img
                                        src="{{ asset('assets/images/icons/icon-dark-instagram.svg') }}"
                                        alt="instagram" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="ed-footer__widget">
                        <h4 class="ed-footer__widget-title">Links</h4>
                        <ul class="ed-footer__widget-links">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('courses') }}">Courses</a></li>
                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('training.placement') }}">Training and Placement</a></li>
                            <li><a href="{{ route('network') }}">Training and Placement</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="ed-footer__widget">
                        <h4 class="ed-footer__widget-title">Our Courses</h4>
                        <ul class="ed-footer__widget-links">
                            <li><a href="{{ route('department.computer') }}">Department of Computer</a></li>
                            <li><a href="{{ route('department.vocational') }}">Department of Vocational</a></li>
                            <li><a href="{{ route('department.fire-safety') }}">Department of Fire Safety</a></li>
                            <li><a href="{{ route('department.hardware.networking') }}">Department of Hardware and
                                    Networking</a></li>
                            <li><a href="{{ route('department.management') }}">Department of Management</a></li>
                            <li><a href="{{ route('department.languages') }}">Department of Languages</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="ed-footer__widget contact-widget">
                        <h4 class="ed-footer__widget-title">Contact</h4>
                        <div class="ed-footer__contact">
                            <div class="ed-footer__contact-icon">
                                <img src="{{ asset('assets/images/icons/icon-phone-blue.svg') }}" alt="phone" />
                            </div>
                            <div class="ed-footer__contact-info">
                                <span>24/7 Support</span>
                                <a href="tel:{{ $CompanyPhone1 }}">+91 {{ $CompanyPhone1 }}</a>
                            </div>
                        </div>
                        <div class="ed-footer__contact">
                            <div class="ed-footer__contact-icon">
                                <img src="{{ asset('assets/images/icons/icon-envelope-blue.svg') }}"
                                    alt="envelope" />
                            </div>
                            <div class="ed-footer__contact-info">
                                <span>Send Message</span>
                                <a href="mailto:{{ $CompanyEmail }}">{{ $CompanyEmail }}</a>
                            </div>
                        </div>
                        <div class="ed-footer__contact">
                            <div class="ed-footer__contact-icon">
                                <img src="{{ asset('assets/images/icons/icon-location-blue.svg') }}"
                                    alt="location" />
                            </div>
                            <div class="ed-footer__contact-info">
                                <span>Our Location</span>
                                <p>{{ $CompanyAddress }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ed-footer__bottom">
        <div class="container ed-container">
            <div class="row">
                <div class="col-12">
                    <p class="ed-footer__copyright-text">
                        Copyright 2026 {{ $CompanyShortName }} | Developed By <a href="https://techgeometry.com/"
                            target="_blank">Tech Geometry Pvt. Ltd.</a>. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->


<!-- Start Back To Top -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- End Back To Top -->

<!-- Jquery JS -->
<script src="{{ asset('assets/plugins/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/jquery-migrate.js') }}"></script>
<script src="{{ asset('assets/plugins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-to-plugin.js') }}"></script>
<script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-smoother.js') }}"></script>
<script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-trigger.js') }}"></script>
<script src="{{ asset('assets/plugins/js/gsap/gsap-split-text.js') }}"></script>
<script src="{{ asset('assets/plugins/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/backToTop.js') }}"></script>
<script src="{{ asset('assets/plugins/js/active.js') }}"></script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        let toast = document.getElementById('custom-toast');
        if (toast) {
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);
            setTimeout(() => {
                closeToast();
            }, 10000);
        }
    });

    function closeToast() {
        let toast = document.getElementById('custom-toast');
        if (toast) {
            toast.classList.remove('show');
            setTimeout(() => {
                toast.remove();
            }, 500);
        }
    }
</script>

<!-- Init Google Translate (Without UI) -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi,bn,te,mr,ta,gu,es,fr,de',
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

<!-- NEW, INSTANT JAVASCRIPT FOR TRANSLATION -->
<script type="text/javascript">
    function doGTranslate(lang) {
        // Find the hidden Google Translate dropdown
        var selectField = document.querySelector(".goog-te-combo");

        if (selectField) {
            selectField.value = lang;
            selectField.dispatchEvent(new Event("change"));
        }

        // Close the custom dropdown menus after clicking
        var desktopMenu = document.getElementById("desktopLangMenu");
        var desktopDropdown = document.getElementById("desktopLangDropdown");
        if (desktopMenu) desktopMenu.classList.remove("show");
        if (desktopDropdown) desktopDropdown.classList.remove("active");

        // Optionally close mobile offcanvas menu
        var offcanvasModal = document.getElementById('offcanvas-modal');
        if (offcanvasModal) {
            var bsOffcanvas = bootstrap.Modal.getInstance(offcanvasModal);
            if (bsOffcanvas) bsOffcanvas.hide();
        }
    }

    // Toggle Desktop Dropdown
    function toggleLangMenu(event) {
        event.stopPropagation();
        var menu = document.getElementById("desktopLangMenu");
        var dropdown = document.getElementById("desktopLangDropdown");

        menu.classList.toggle("show");
        dropdown.classList.toggle("active");
    }

    // Click outside to close desktop dropdown
    window.addEventListener('click', function(event) {
        var menu = document.getElementById("desktopLangMenu");
        var dropdown = document.getElementById("desktopLangDropdown");

        if (menu && menu.classList.contains('show')) {
            if (!event.target.closest('#desktopLangDropdown')) {
                menu.classList.remove('show');
                dropdown.classList.remove('active');
            }
        }
    });
</script>


</body>

</html>
