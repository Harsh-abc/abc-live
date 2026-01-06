@include('frontend.layout.header')

<body>
    @include('frontend.layout.nav')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <section class="service__area-2 service-v3 pt-100">
                    <div class="container">
                        <div class="row pb-100">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 title-anim"> Our Clients </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container g-0 pt-60  pb-130">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">BRANDS</h2>
                                    <h3 class="sec-title title-anim">We are happy to work with global <br> largest
                                        brands</h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="d-none loadr text-center"> <img src="/img/loading_2.gif" width="40px"
                                        class="img-fluid" /> </div>
                                <div class="brand__list" id="client_list">
                                    <!--
       <div class="brand__item fade_bottom"> <img src="/img/clients/abbott.jpg" alt="Abbott"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/amazon_prime.jpg" alt="Amazon Prime"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/audi.jpg" alt="Audi"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/axis_bank.jpg" alt="Axis Bank"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/blue_rise.jpg" alt="Blue Rise"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/celebinas.jpg" alt="Celebinas"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/ciie.jpg" alt="CIIE"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/colors.jpg" alt="Colors"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/cummins.jpg" alt="Cummins"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/dbs.jpg" alt="DBS - Digital Banking Summit"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/deloitte.jpg" alt="Deloitte"class="img-fluid" /> </div>
       <div class="brand__item fade_bottom"> <img src="/img/clients/dibella.jpg" alt="Dibella"class="img-fluid" /> </div>
       -->
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </section>

        <!-- Testimonial Section -->
        <section class="testimonial-section" id="testimonialSection">
            <div class="testimonial-container">
                <!-- Section Header -->
                <div class="testimonial-header">
                    <span class="testimonial-label">Testimonials</span>
                    <h2 class="testimonial-title">What Our Clients Say</h2>
                    <p class="testimonial-subtitle">Hear from the people who trust us with their projects</p>
                </div>

                <!-- Testimonial Slider -->
                <div class="testimonial-slider">
                    <div class="testimonial-track" id="testimonialTrack">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris.
                                </p>
                                <div class="testimonial-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">
                                        <img src="https://randomuser.me/api/portraits/men/46.jpg" alt="John Smith">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4 class="testimonial-author-name">John Smith</h4>
                                        <p class="testimonial-author-role">CEO, Tech Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia.
                                </p>
                                <div class="testimonial-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                            alt="Sarah Johnson">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4 class="testimonial-author-name">Sarah Johnson</h4>
                                        <p class="testimonial-author-role">Marketing Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem.
                                </p>
                                <div class="testimonial-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star half">★</span>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">
                                        <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="Michael Brown">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4 class="testimonial-author-name">Michael Brown</h4>
                                        <p class="testimonial-author-role">Startup Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                                <div class="testimonial-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Davis">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4 class="testimonial-author-name">Emily Davis</h4>
                                        <p class="testimonial-author-role">Product Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-quote-icon">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                    </svg>
                                </div>
                                <p class="testimonial-text">
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                                </p>
                                <div class="testimonial-rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">
                                        <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="David Wilson">
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h4 class="testimonial-author-name">David Wilson</h4>
                                        <p class="testimonial-author-role">Creative Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Controls -->
                <div class="testimonial-controls">
                    <button class="testimonial-btn testimonial-btn-prev" id="testimonialPrev"
                        aria-label="Previous testimonial">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <!-- Dots Indicators -->
                    <div class="testimonial-dots" id="testimonialDots">
                        <!-- Dots will be generated by JavaScript -->
                    </div>

                    <button class="testimonial-btn testimonial-btn-next" id="testimonialNext"
                        aria-label="Next testimonial">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>

                <!-- Progress Bar -->
                <div class="testimonial-progress">
                    <div class="testimonial-progress-bar" id="testimonialProgress"></div>
                </div>
            </div>
        </section>

        <section class="pt-100">
            @include('frontend.layout.cta')
        </section>

        </main>
        @include('frontend.layout.footer')
    </div>
    </div>

    <script src="/js/clients.js"></script>
