                 <!-- Start Call Action Area -->
                 <section class="ed-call-action position-relative">
                     <div class="container ed-container">
                         <div class="ed-call-action__inner position-relative">
                             <div class="ed-call-action__shapes">
                                 <img class="ed-call-action__shape-1 rotate-ani"
                                     src="{{ asset('/assets/images/call-action/call-action-1/shape-1.svg') }}"
                                     alt="shape-1" />
                                 <img class="ed-call-action__shape-2"
                                     src="{{ asset('/assets/images/call-action/call-action-1/shape-2.svg') }}"
                                     alt="shape-2" />
                                 <img class="ed-call-action__shape-3 updown-ani"
                                     src="{{ asset('/assets/images/call-action/call-action-1/shape-3.svg') }}"
                                     alt="shape-3" />
                             </div>
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="ed-call-action__img">
                                         <img src="{{ asset('/assets/images/call-action/call-action-1/call-action-img.png') }}"
                                             alt="call-action-img" />
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12 order-class">
                                     <div class="ed-call-action__content">

                                         <div class="ed-section-head">
                                             <span class="ed-section-head__sm-title">
                                                 ADMISSION OPEN
                                             </span>

                                             <h3 class="ed-section-head__title">
                                                 Start Your Career Journey With <br />
                                                 National Academy of Research and Training
                                             </h3>

                                             <p class="ed-section-head__text">
                                                 Join NART and gain industry-relevant skills through
                                                 ITI, Paramedical, Polytechnic, Computer, Language,
                                                 and vocational training programs.
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
                 </section>
                 <!-- End Call Action Area -->
                 <!-- Start Footer Area -->
                 <footer class="ed-footer section-bg-color-1 position-relative">
                     <!-- Footer Top -->
                     <div class="ed-footer__top position-relative">
                         <div class="ed-footer__shapes">
                             <img class="ed-footer__shape-1"
                                 src="{{ asset('assets/images/footer/footer-1/shape-1.svg') }}" alt="shape-1" />
                             <img class="ed-footer__shape-2 rotate-ani"
                                 src="{{ asset('assets/images/footer/footer-1/shape-2.svg') }}" alt="shape-2" />
                             <img class="ed-footer__shape-3"
                                 src="{{ asset('assets/images/footer/footer-1/shape-3.svg') }}" alt="shape-3" />
                         </div>
                         <div class="container ed-container">
                             <div class="row g-0">
                                 <div class="col-lg-4 col-md-6 col-12">
                                     <div class="ed-footer__widget ed-footer__about">
                                         <a href="{{ route('index') }}" class="ed-footer__logo">
                                             <img src="{{ asset('assets/images/logo.png') }}" alt="footer-logo" />
                                         </a>
                                         <p class="ed-footer__about-text">
                                             Welcome to National Academy of Research and Training (NART) is dedicated to
                                             promoting
                                             job-oriented, skill-based, and career-focused education.
                                         </p>
                                         <ul class="ed-footer__about-social">
                                             <li>
                                                 <a href="https://www.facebook.com/" target="_blank"><img
                                                         src="{{ asset('assets/images/icons/icon-dark-facebook.svg') }}"
                                                         alt="icon-dark-facebook" /></a>
                                             </li>
                                             <li>
                                                 <a href="https://www.twitter.com/" target="_blank"><img
                                                         src="{{ asset('assets/images/icons/icon-dark-twitter.svg') }}"
                                                         alt="icon-dark-twitter" /></a>
                                             </li>
                                             <li>
                                                 <a href="https://www.instagram.com/" target="_blank"><img
                                                         src="{{ asset('assets/images/icons/icon-dark-instagram.svg') }}"
                                                         alt="icon-dark-instagram" /></a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col-lg-2 col-md-6 col-12">
                                     <div class="ed-footer__widget">
                                         <h4 class="ed-footer__widget-title">Links</h4>
                                         <ul class="ed-footer__widget-links">
                                             <li><a href="{{ route('about') }}">About Us</a></li>
                                             <li><a href="{{ route('courses') }}">Courses</a></li>
                                             <li><a href="{{ route('training.placement') }}">Training and Placement</a></li>
                                             <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-12">
                                     <div class="ed-footer__widget">
                                         <h4 class="ed-footer__widget-title">Our Courses</h4>
                                         <ul class="ed-footer__widget-links">
                                             <li><a href="{{ route('department.computer') }}">Department of
                                                     Computer</a></li>
                                             <li><a href="{{ route('department.vocational') }}">Department of
                                                     Vocational</a></li>
                                             <li><a href="{{ route('department.fire-safety') }}">Department of Fire
                                                     Safety</a></li>
                                             <li><a href="{{ route('department.hardware.networking') }}">Department of
                                                     Hardware and
                                                     Networking</a></li>
                                             <li><a href="{{ route('department.management') }}">Department of
                                                     Management</a></li>
                                             <li><a href="{{ route('department.languages') }}">Department of
                                                     Languages</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col-lg-3 col-md-6 col-12">
                                     <div class="ed-footer__widget contact-widget">
                                         <h4 class="ed-footer__widget-title">Contact</h4>
                                         <!-- Single Info  -->
                                         <div class="ed-footer__contact">
                                             <div class="ed-footer__contact-icon">
                                                 <img src="{{ asset('assets/images/icons/icon-phone-blue.svg') }}"
                                                     alt="icon-phone-blue" />
                                             </div>
                                             <div class="ed-footer__contact-info">
                                                 <span>24/7 Support</span>
                                                 <a href="tel:{{ $CompanyPhone1 }}">{{ $CompanyPhone1 }}</a>
                                             </div>
                                         </div>
                                         <!-- Single Info  -->
                                         <div class="ed-footer__contact">
                                             <div class="ed-footer__contact-icon">
                                                 <img src="{{ asset('assets/images/icons/icon-envelope-blue.svg') }}"
                                                     alt="icon-envelope-blue" />
                                             </div>
                                             <div class="ed-footer__contact-info">
                                                 <span>Send Message</span>
                                                 <a href="mailto:{{ $CompanyEmail }}">{{ $CompanyEmail }}</a>
                                             </div>
                                         </div>

                                         <!-- Single Info  -->
                                         <div class="ed-footer__contact">
                                             <div class="ed-footer__contact-icon">
                                                 <img src="{{ asset('assets/images/icons/icon-location-blue.svg') }}"
                                                     alt="icon-location-blue" />
                                             </div>
                                             <div class="ed-footer__contact-info">
                                                 <span>Our Locati0n</span>
                                                 <p>{{ $CompanyAddress }}</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>


                             </div>
                         </div>
                     </div>

                     <!-- Footer Bottom -->
                     <div class="ed-footer__bottom">
                         <div class="container ed-container">
                             <div class="row">
                                 <div class="col-12">
                                     <p class="ed-footer__copyright-text">
                                         Copyright 2026 {{ $CompanyShortName }}  | Developed By
                                         <a href="https://techgeometry.com/" target="_blank">Tech Geometry Pvt.
                                             Ltd.</a>. All Rights
                                         Reserved
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </footer>
                 <!-- End Footer Area  -->
                 </div>
                 </div>

                 <!-- Start Sidebar  -->
                 <div class="offcanvas offcanvas-end ed-sidebar" tabindex="-1" id="edSidebar"
                     aria-labelledby="offcanvasRightLabel">
                     <div class="ed-sidebar-header">
                         <a href="{{ route('index') }}" class="ed-sidebar-logo">
                             <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                         </a>
                         <button type="button" class="text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                             <i class="fi fi-rr-cross"></i>
                         </button>
                     </div>
                     <div class="ed-sidebar-body m-0">
                         <!-- Single Widget  -->
                         <div class="ed-sidebar-widget">
                             <h3 class="ed-sidebar-widget-title">Contacts Us:</h3>
                             <!-- Sigle Info  -->
                             <div class="ed-contact__info-item">
                                 <div class="ed-contact__info-icon">
                                     <img src="{{ asset('assets/images/icons/icon-phone-blue.svg') }}"
                                         alt="icon-phone-blue" />
                                 </div>
                                 <div class="ed-contact__info-content">
                                     <span>24/7 Support</span>
                                     <a href="tel:{{ $CompanyPhone1 }}">{{ $CompanyPhone1 }}</a>
                                 </div>
                             </div>
                             <!-- Sigle Info  -->
                             <div class="ed-contact__info-item">
                                 <div class="ed-contact__info-icon">
                                     <img src="{{ asset('assets/images/icons/icon-envelope-blue.svg') }}"
                                         alt="icon-envelope-blue" />
                                 </div>
                                 <div class="ed-contact__info-content">
                                     <span>Send Message</span>
                                     <a href="mailto:{{ $CompanyEmail }}">{{ $CompanyEmail }}</a>
                                 </div>
                             </div>

                             <!-- Sigle Info  -->
                             <div class="ed-contact__info-item">
                                 <div class="ed-contact__info-icon">
                                     <img src="{{ asset('assets/images/icons/icon-location-blue.svg') }}"
                                         alt="icon-location-blue" />
                                 </div>
                                 <div class="ed-contact__info-content">
                                     <span>Our Location</span>
                                     <a href="{{ $CompanyURL }}" target="_blank">{{ $CompanyAddress }}</a>
                                 </div>
                             </div>
                         </div>

                         <!-- Single Widget  -->
                         <div class="ed-sidebar-widget">
                             <h3 class="ed-sidebar-widget-title">Follow Us:</h3>
                             <ul class="ed-sidebar-social">
                                 <li>
                                     <a href="{{ $CompanyFacebook }}" target="_blank"><img
                                             src="assets/images/icons/icon-dark-facebook.svg"
                                             alt="icon-dark-facebook" /></a>
                                 </li>
                                 <li>
                                     <a href="{{ $CompanyTwitter }}" target="_blank"><img
                                             src="assets/images/icons/icon-dark-twitter.svg"
                                             alt="icon-dark-twitter" /></a>
                                 </li>
                                 <li>
                                     <a href="{{ $CompanyInstagram }}" target="_blank"><img
                                             src="assets/images/icons/icon-dark-instagram.svg"
                                             alt="icon-dark-instagram" /></a>
                                 </li>
                                 <li>
                                     <a href="{{ $CompanyYoutube }}" target="_blank"><img
                                             src="assets/images/icons/icon-dark-youtube.svg"
                                             alt="icon-dark-youtube" /></a>
                                 </li>
                             </ul>
                         </div>

                         <!-- Single Widget  -->
                         <div class="ed-sidebar-widget">
                             <h3 class="ed-sidebar-widget-title">Subscribe Now:</h3>
                             <form action="#" method="post" class="ed-sidebar-subscribe">
                                 <input type="email" name="email-address" placeholder="Enter email" required />
                                 <button type="submit" class="ed-btn">Subscribe<i
                                         class="fi fi-rr-arrow-small-right"></i></button>
                             </form>
                         </div>
                     </div>
                 </div>
                 <!-- End Sidebar  -->

                 <!-- Start Back To Top  -->
                 <div class="progress-wrap">
                     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                     </svg>
                 </div>
                 <!-- End Back To Top -->

                 <!-- Jquery JS -->
                 <script src="{{ asset('/assets/plugins/js/jquery.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/jquery-migrate.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/bootstrap.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/gsap/gsap.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/gsap/gsap-scroll-to-plugin.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/gsap/gsap-scroll-smoother.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/gsap/gsap-scroll-trigger.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/gsap/gsap-split-text.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/wow.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/owl.carousel.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/swiper-bundle.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/magnific-popup.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/jquery.counterup.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/waypoints.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/nice-select.min.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/backToTop.js') }}"></script>
                 <script src="{{ asset('/assets/plugins/js/active.js') }}"></script>
                 </body>

                 </html>
