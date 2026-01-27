@include('frontend.layout.header')

<body class="">
    @include('frontend.layout.nav')

    <!-- ========== LOADER - Place immediately after body ========== -->
    <div id="page-loader" class="loader-wrapper">
        <div class="loader-content">
            <!-- Replace with your company logo -->
            <div class="logo-container">
                <img src="/img/abc-loader.webp" alt="Company Logo" class="loader-logo">
            </div>

            <!-- Spinner animation around/below logo -->
            <div class="spinner"></div>

            {{-- Optional: Loading text
            <p class="loading-text">Loading<span class="dots"></span></p> --}}

            <!-- Optional: Progress bar -->
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>
    <!-- ========== END LOADER ========== -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="clients-page">

                {{-- <section class="service__area-2 service-v3 pt-100"> --}}
                <section class="service__area-2 service-v3">
                    {{-- <div class="container">
                        <div class="row pb-100">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 title-anim"> Our Clients </h2>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="container" style="background-color: var(--dark-2);">
                        <div class="pb-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="hero__content animation__hero_one">
                                            <div class="hero__title-wrapper row">
                                                <div
                                                    class="col-7 d-flex flex-column justify-content-center align-items-start">
                                                    <h1 class="hero__title animation__word_come mt-0">Our Clients
                                                    </h1>
                                                    <div class="text-anim w-100">
                                                        <p class="mt-3 w-100 hero-description">We design and develop
                                                            high-performing, conversion-focused websites that help
                                                            businesses build credibility, attract the right audience,
                                                            and turn visitors into customers.</p>
                                                    </div>

                                                </div>
                                                <div class="hero_form_wrapper col-5">
                                                    <!-- <div class="img_container">
                                                <img src="/img/logo_light.png" alt="" class="img-fluid">
                                            </div> -->
                                                    <h4 class="hero_form_heading">Let's Connect With Us!</h4>
                                                    <p class="hero_form_para">We create digital experiences that shape
                                                        the
                                                        future, today! Helping
                                                        clients imagine & innovate.</p>
                                                    <form method="post" action="/contact-us" id="contactforms">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    id="name" name="name" placeholder="Name*"
                                                                    value="{{ old('name') }}">
                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <label for="name">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row row d-flex ">
                                                            <div class="form-floating mb-3 col-md-6">
                                                                <input type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    id="email" name="email" placeholder="Email"
                                                                    value="{{ old('email') }}">
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <label for="email">Email*</label>
                                                            </div>
                                                            <div class="form-floating mb-3 col-md-6">
                                                                <input type="number" minlength="10" maxlength="12"
                                                                    class="form-control @error('contact') is-invalid @enderror"
                                                                    id="contact" name="contact" placeholder="Contact*"
                                                                    value="{{ old('contact') }}" required="required">
                                                                @error('contact')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <label for="contact">Contact*</label>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-row">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="subject"
                                                            placeholder="name@example.com">
                                                        <label for="subject">Subject</label>
                                                    </div>
                                                </div> -->
                                                        <div class="form-row">
                                                            <div class="form-floating mb-3">
                                                                <textarea type="textbox" class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                                                                    placeholder="Message*" value="" required>{{ old('message') }}</textarea>
                                                                @error('message')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <label for="subject">Message</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                            <div class="g-recaptcha"
                                                                data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5">
                                                            </div>
                                                            <span id="captchaErr"
                                                                class="error-message"><?php //echo $captchaErr;
                                                                ?></span>
                                                        </div>
                                                        <div class="form-group submit">
                                                            <input type="submit" id="submitBtns"
                                                                class="btn btn-dark w-100" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- SOFIYAAA -->
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    const form1 = document.getElementById("contactforms");
                                                    const submitBtn1 = document.getElementById("submitBtns");

                                                    form1.addEventListener("submit", function() {
                                                        submitBtn1.value = "Sending..."; // Change button text
                                                        submitBtn1.disabled = true; // Disable button
                                                    });

                                                    // Re-enable button if form submission fails or validation blocks it
                                                    form1.addEventListener("ajax:error", function() {
                                                        submitBtn1.value = "Submit";
                                                        submitBtn1.disabled = false;
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
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

        {{-- <section class="pt-100">
            @include('frontend.layout.cta')
        </section> --}}

        </main>
        @include('frontend.layout.footer')
    </div>
    </div>

    <script src="/js/clients.js"></script>
