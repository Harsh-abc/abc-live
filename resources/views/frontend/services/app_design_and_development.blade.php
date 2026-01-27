@include('frontend.layout.header')

<body class="">
    {{-- video_start --}}
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
            <main class="main-service-page">

                <!-- Service area start -->
                {{-- pt-100 --}}
                <section class="service__area-2 service-v3">
                    <div class="container msp-header">
                        <div class="pb-4">
                            {{-- <div class="container">
                                <div class="sec-title-wrapper">
                                    <h2 class="title-anim"> Elevate Your Online Presence with Stunning Web Experiences.
                                    </h2>
                                </div>
                            
                                <div class="text-anim mt-3">
                                    <p> Unlock your digital potential with our comprehensive range of digital agency
                                        services, tailored to drive growth and success for your business. </p>
                                </div>
                            </div> --}}
                            {{-- <div class="container-fluid">
                                <div class="row pb-60">
                                    <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-9">
                                        <div class="sec-title-wrapper">
                                            <h2 class="sec-title title-anim"> Elevate Your Online Presence with Stunning Web Experiences
                                            </h2>
                                            <div class="text-anim mt-3">
                                    <p> Unlock your digital potential with our comprehensive range of digital agency
                                        services, tailored to drive growth and success for your business</p>
                                </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 mt-4">
                                        <div class="btn_wrapper" style="margin-top:-50px;">
                                            <a href="#job_list"
                                                class="wc-btn-secondary btn-hover btn-item"><span></span>
                                                Explore job
                                                <br>vacancies <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <form id="msp-subscript-form" method="POST" action="{{ route('Subscribes.store') }}">
                                    @csrf
                                    <div
                                        class="mt-3 w-100 row mx-0 height-100 d-flex justify-content-center align-items-center">
                                        <div class="col-md-10">
                                            <div class="subscribe-btn position-relative">
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Your email address">
                                                <button id="subscribeBtn" class="btn position-absolute"
                                                    type="submit">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}

                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="hero__content animation__hero_one">
                                            <div class="hero__title-wrapper row">
                                                <div
                                                    class="col-7 d-flex flex-column justify-content-center align-items-start">
                                                    <h1 class="hero__title animation__word_come mt-0">App Design &
                                                        Development That Turns
                                                        Ideas Into Powerful Digital Products
                                                    </h1>
                                                    <div class="text-anim w-100">
                                                        <p class="mt-3 w-100 hero-description">We design and develop
                                                            high-performance mobile and web applications that deliver
                                                            seamless user experiences, scalability, and real business
                                                            impact.
                                                        </p>
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


                <!-- Counter area start -->
                <section class="counter__area">
                    <div class="container g-0 pt-80">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="counter__wrapper counter_animation">
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">10k+</h2>
                                        <p>Project <br>Completed</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">8k+</h2>
                                        <p>Happy <br>Customers</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">15</h2>
                                        <p>Years <br>Experiences</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">20+</h2>
                                        <p>Team <br>Strenght</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">600+</h2>
                                        <p>Brand <br>Launched</p>
                                        <span class="counter__border"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter area end -->


                <section class="pt-80 services-marquee">
                    <div class="container g-0 mb-4">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">NATIONAL & INTERNATIONAL BRANDS</h2>
                                <h3 class="sec-title title-anim">We are happy to work with global <br> largest
                                    brands</h3>
                            </div>
                        </div>
                    </div>

                    <div class="marquee-container-wrapper">
                        <div class="pause-indicator" id="pauseIndicator">Paused</div>

                        <!-- Marquee Left to Right -->
                        <div class="marquee-section py-2">
                            <div class="marquee-wrapper">
                                <div class="marquee-container" id="marquee-rtl">
                                    <div class="marquee-content mb-0">
                                        <div class="marquee-item">
                                            <img src="/img/clients/aalpha.webp" class="w-100 h-100 object-fit-contain"
                                                alt="AALPHA">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/abbott.webp" class="w-100 h-100 object-fit-contain"
                                                alt="Abbott">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/aditya_birla.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Aditya Birla">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/amazon_prime.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Amazon Prime">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/audi.webp" class="w-100 h-100 object-fit-contain"
                                                alt="Audi">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/axis_bank.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Axis Bank">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/blue_rise.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Blue Rise">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/celebinas.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Celebinas">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/ciie.webp" class="w-100 h-100 object-fit-contain"
                                                alt="CIIE">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/citroen.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Citroen">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/colors.webp" class="w-100 h-100 object-fit-contain"
                                                alt="Colors">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/confluence_carnival.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Confluence Carnival">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Marquee Right to Left -->
                        <div class="marquee-section py-2">
                            <div class="marquee-wrapper">
                                <div class="marquee-container" id="marquee-rtll">
                                    <div class="marquee-content mb-0">
                                        <div class="marquee-item">
                                            <img src="/img/clients/cummins.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Cummins">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/dbs.webp" class="w-100 h-100 object-fit-contain"
                                                alt="DBS">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/deloitte.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Deloitte">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/dibella.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Dibella">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/dhoom_dhaam.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Dhoom Dhaam">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/esmart.webp" class="w-100 h-100 object-fit-contain"
                                                alt="E-Smart">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/facebook.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Facebook">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/ficci_frames.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Ficci Frames">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/game_night.webp"
                                                class="w-100 h-100 object-fit-contain" alt="Game Night">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/godrej.webp" class="w-100 h-100 object-fit-contain"
                                                alt="Godrej">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/google.webp" class="w-100 h-100 object-fit-contain"
                                                alt="Google">
                                        </div>
                                        <div class="marquee-item">
                                            <img src="/img/clients/hp_pay.webp" class="w-100 h-100 object-fit-contain"
                                                alt="HP PAY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="service__area-3 service-v3 pb-80">
                    <div class="container">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/app-development/ui-ux-design" class="service__title-2">
                                                    Mobile App UI/UX Design
                                                </a>
                                            </h3>

                                            <p>
                                                A great app starts with an exceptional user experience. Our mobile
                                                app UI/UX design services focus on creating intuitive, visually
                                                engaging, and user-friendly interfaces that keep users engaged and
                                                drive retention. <br>
                                                We follow a user-centric design approach using research,
                                                wireframing, prototyping, and modern design principles to deliver
                                                seamless app experiences across devices, improving usability,
                                                navigation, and overall customer satisfaction.
                                            </p>

                                            <a href="/app-development/ui-ux-design" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/app-development/android" class="service__title-2">
                                                    Android App Development
                                                </a>
                                            </h3>

                                            <p>
                                                We build high-performance Android applications tailored to your
                                                business goals and user needs. Our Android app development services
                                                focus on scalability, security, and smooth performance across all
                                                Android devices. <br>
                                                From startups to enterprises, we develop feature-rich, easy-to-use
                                                Android apps optimized for speed, stability, and long-term growth.
                                            </p>

                                            <a href="/app-development/android" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/app-development/ios" class="service__title-2">
                                                    iOS App Development
                                                </a>
                                            </h3>

                                            <p>
                                                Our iOS app development services help businesses create secure,
                                                elegant, and high-performing applications for Apple devices. <br>
                                                We follow Apple’s design and development guidelines to deliver
                                                reliable, scalable, and App Store–ready iOS apps that offer
                                                superior user experience and performance.
                                            </p>

                                            <a href="/app-development/ios" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/app-development/web-apps" class="service__title-2">
                                                    Web App Development
                                                </a>
                                            </h3>

                                            <p>
                                                We design and develop scalable web applications that combine modern
                                                UI, strong functionality, and high performance. <br>
                                                From dashboards and admin panels to custom web platforms, our web
                                                apps are secure, responsive, and built to scale as your business
                                                grows.
                                            </p>

                                            <a href="/app-development/web-apps" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/app-development/maintenance-support"
                                                    class="service__title-2">
                                                    App Maintenance & Support
                                                </a>
                                            </h3>

                                            <p>
                                                Launching an app is just the beginning. Our app maintenance and
                                                support services ensure your application remains secure,
                                                up-to-date, and high-performing over time. <br>
                                                We provide regular updates, bug fixes, performance optimization,
                                                and technical support to deliver a consistent and reliable user
                                                experience.
                                            </p>

                                            <a href="/app-development/maintenance-support" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container g-0 pb-80">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">Tools & Technologies We Use</h2>
                                    <h3 class="sec-title title-anim">We work with modern and proven technologies to
                                        ensure the best results for our clients: </h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="loadr text-center d-none"> <img src="/img/loading_2.gif" width="40px"
                                        class="img-fluid"> </div>
                                <div class="serv_tech_list" id="">

                                    <!-- Flutter -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/flutter.webp" title="Flutter" alt="Flutter"
                                            class="img-fluid">
                                    </div>

                                    <!-- Android Studio -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/android-studio.webp" title="Android Studio"
                                            alt="Android Studio" class="img-fluid">
                                    </div>

                                    <!-- Kotlin (added) -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/kotlin.webp" title="Kotlin" alt="Kotlin"
                                            class="img-fluid">
                                    </div>

                                    <!-- Swift -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/swift.webp" title="Swift" alt="Swift"
                                            class="img-fluid">
                                    </div>

                                    <!-- React.js -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/react.webp" title="React.js" alt="React.js"
                                            class="img-fluid">
                                    </div>

                                    <!-- Next.js -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/nextjs.webp" title="Next.js" alt="Next.js"
                                            class="img-fluid">
                                    </div>

                                    <!-- Node.js -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/nodejs.webp" title="Node.js" alt="Node.js"
                                            class="img-fluid">
                                    </div>

                                    <!-- Express.js -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/express.webp" title="Express.js" alt="Express.js"
                                            class="img-fluid">
                                    </div>

                                    <!-- Firebase (added) -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/firebase.webp" title="Firebase" alt="Firebase"
                                            class="img-fluid">
                                    </div>

                                    <!-- REST APIs (added) -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/rest-api.webp" title="REST APIs" alt="REST APIs"
                                            class="img-fluid">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Brand area end -->

                <!-- FAQ area start -->
                <section class="faq__area">
                    <div class="container g-0 pb-80">
                        <div class="line-3"></div>
                        <div class="row align-items-start">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="faq__content px-0 pt-0">
                                    <h2 class="faq__title title-anim">Frequently Asked Questions</h2>
                                    <div class="faq__list">
                                        <div class="accordion" id="accordionExample">

                                            <!-- FAQ 1 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        What types of apps do you design and develop?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            We design and develop mobile apps, web apps, and custom
                                                            application
                                                            solutions for startups, SMEs, and enterprises across a wide
                                                            range
                                                            of industries.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 2 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How much does app design and development cost?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            App development cost depends on app complexity, features,
                                                            target
                                                            platforms (Android, iOS, or web), UI/UX design, and
                                                            integrations.
                                                            We offer custom pricing based on your requirements and
                                                            business
                                                            goals.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 3 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        How long does it take to develop a mobile or web app?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            A basic app typically takes 6–8 weeks to develop, while
                                                            complex or
                                                            feature-rich applications may take 3–6 months depending on
                                                            scope,
                                                            features, and approval timelines.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 4 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Do you provide both Android and iOS app development?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We provide Android app development, iOS app
                                                            development, and
                                                            cross-platform app solutions to ensure wider reach and
                                                            optimal
                                                            performance across devices.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 5 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Can you redesign or improve an existing app?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. We offer app UI/UX redesign and performance
                                                            optimization
                                                            services to enhance usability, improve engagement, and boost
                                                            overall
                                                            app performance.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 6 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Will my app be secure and scalable?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. All our applications follow industry best practices for
                                                            security and are built with scalable architecture to support
                                                            future growth as your business expands.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 7 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                        aria-expanded="false" aria-controls="collapseSeven">
                                                        Do you provide ongoing app maintenance and support?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We offer ongoing app maintenance and support services
                                                            including
                                                            updates, bug fixes, performance monitoring, and technical
                                                            support
                                                            to ensure long-term reliability.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 8 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingEight">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                        aria-expanded="false" aria-controls="collapseEight">
                                                        Will my app work smoothly across devices?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We ensure smooth performance and device compatibility
                                                            across
                                                            different screen sizes, operating systems, and platforms
                                                            through
                                                            rigorous testing and optimization.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- FAQ 9 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                        aria-expanded="false" aria-controls="collapseNine">
                                                        Why should I choose ABC Designs for app design & development?
                                                    </button>
                                                </h2>
                                                <div id="collapseNine" class="accordion-collapse collapse"
                                                    aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            ABC Designs combines user-centric design, robust
                                                            development,
                                                            transparent communication, and long-term support to help
                                                            businesses transform app ideas into successful digital
                                                            products.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="subscribe-container col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex flex-column justify-content-start align-items-start">
                                <div
                                    class="w-100 pt-80 pb-80 rounded d-flex flex-column justify-content-center align-items-center border">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55"
                                            viewBox="0 0 256 256"><!-- Icon from Phosphor by Phosphor Icons - https://github.com/phosphor-icons/core/blob/main/LICENSE -->
                                            <path fill="currentColor"
                                                d="M216 82h-34V48a14 14 0 0 0-14-14H40a14 14 0 0 0-14 14v128a6 6 0 0 0 3.42 5.41A5.86 5.86 0 0 0 32 182a6 6 0 0 0 3.77-1.33L73.71 150H74v34a14 14 0 0 0 14 14h94.29l37.94 30.67A6 6 0 0 0 224 230a5.86 5.86 0 0 0 2.58-.59A6 6 0 0 0 230 224V96a14 14 0 0 0-14-14M71.58 138a6 6 0 0 0-3.77 1.33L38 163.43V48a2 2 0 0 1 2-2h128a2 2 0 0 1 2 2v88a2 2 0 0 1-2 2ZM218 211.43l-29.81-24.1a6 6 0 0 0-3.77-1.33H88a2 2 0 0 1-2-2v-34h82a14 14 0 0 0 14-14V94h34a2 2 0 0 1 2 2Z" />
                                        </svg>
                                    </div>
                                    @if (session('success'))
                                        <p class="text-success mt-2">{{ session('success') }}</p>
                                    @endif

                                    <h2 class="mt-3 text-center">Do you have more questions?</h2>
                                    <form id="subscribeForm" method="POST" action="{{ route('Subscribes.store') }}">
                                        @csrf
                                        <div
                                            class="mt-3 w-100 row mx-0 height-100 d-flex justify-content-center align-items-center">
                                            <div class="col-md-10">
                                                <div class="subscribe-btn position-relative">
                                                    <input class="form-control" name="email" type="email"
                                                        placeholder="Your email address">
                                                    <button id="subscribeBtn" class="btn position-absolute"
                                                        type="submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    document.getElementById('subscribeForm').addEventListener('submit', function() {
                        const btn = document.getElementById('subscribeBtn');

                        btn.disabled = true;
                        btn.innerHTML = 'Sending <span class="hourglass">⏳</span>';
                    });
                </script>

                {{-- @include('frontend.layout.cta') --}}

            </main>

            @include('frontend.layout.footer')
        </div>
    </div>




    <script src="/js/clients.js"></script>
