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
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="hero__content animation__hero_one">
                                            <div class="hero__title-wrapper row">
                                                <div
                                                    class="col-7 d-flex flex-column justify-content-center align-items-start">
                                                    <h1 class="hero__title animation__word_come mt-0">Digital Marketing
                                                        Services That Drive
                                                        Traffic, Leads & Revenue</h1>
                                                    <div class="text-anim w-100">
                                                        <p class="mt-3 w-100 hero-description">We help businesses grow
                                                            online with data-driven digital marketing strategies
                                                            designed to increase visibility, generate quality leads, and
                                                            maximize ROI</p>
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
                                                <a href="/digital-marketing/search-engine-optimization"
                                                    class="service__title-2">
                                                    Search Engine Optimization (SEO)
                                                </a>
                                            </h3>

                                            <p>
                                                Our SEO services help businesses improve search rankings, increase
                                                organic traffic, and build long-term online visibility. <br>
                                                We use ethical, data-driven strategies including on-page optimization,
                                                technical SEO, and high-quality content to attract the right audience
                                                and convert traffic into leads.
                                            </p>

                                            <a href="/digital-marketing/search-engine-optimization"
                                                class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/digital-marketing/google-ads" class="service__title-2">
                                                    Search Engine Marketing (Google Ads)
                                                </a>
                                            </h3>

                                            <p>
                                                Our Google Ads services are designed to generate immediate traffic
                                                and high-quality leads. <br>
                                                We manage search, display, and remarketing campaigns with a focus
                                                on keyword research, ad copy, bid management, and conversion tracking
                                                to maximize ROI.
                                            </p>

                                            <a href="/digital-marketing/google-ads" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/digital-marketing/social-media-marketing"
                                                    class="service__title-2">
                                                    Social Media Marketing
                                                </a>
                                            </h3>

                                            <p>
                                                We help brands build visibility and engagement through strategic
                                                social media marketing across major platforms. <br>
                                                Our approach focuses on content planning, audience targeting, and
                                                consistent brand communication to drive awareness and lead generation.
                                            </p>

                                            <a href="/digital-marketing/social-media-marketing" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/digital-marketing/performance-marketing"
                                                    class="service__title-2">
                                                    Performance Marketing (Meta Ads)
                                                </a>
                                            </h3>

                                            <p>
                                                Our performance marketing services focus on data-driven advertising
                                                across Meta platforms like Facebook and Instagram. <br>
                                                We run conversion-focused campaigns optimized to generate leads,
                                                sales, and measurable ROI while reducing cost per acquisition.
                                            </p>

                                            <a href="/digital-marketing/performance-marketing" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/digital-marketing/content-marketing"
                                                    class="service__title-2">
                                                    Content Marketing & Writing
                                                </a>
                                            </h3>

                                            <p>
                                                Content is the foundation of effective digital marketing. Our content
                                                marketing and writing services help brands attract, engage, and
                                                convert audiences through high-quality, SEO-optimized content. <br>
                                                From website copy and blogs to ads and social media content, we
                                                create content that supports branding and performance goals.
                                            </p>

                                            <a href="/digital-marketing/content-marketing" class="service_view">
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
                                    <h3 class="sec-title title-anim">We Drive Results Using Powerful Marketing Tools &
                                        Platforms</h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">

                                <div class="serv_tech_list" id="">

                                    <!-- Google Analytics (GA4) -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/google-analytics.webp"
                                            title="Google Analytics (GA4)" alt="Google Analytics (GA4)"
                                            class="img-fluid">
                                    </div>

                                    <!-- Google Search Console -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/google-search-console.webp"
                                            title="Google Search Console" alt="Google Search Console"
                                            class="img-fluid">
                                    </div>

                                    <!-- Google Ads -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/google-ads.webp" title="Google Ads"
                                            alt="Google Ads" class="img-fluid">
                                    </div>

                                    <!-- Meta Ads Manager -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/meta-ads.webp" title="Meta Ads Manager"
                                            alt="Meta Ads Manager" class="img-fluid">
                                    </div>

                                    <!-- Google Tag Manager -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/google-tag-manager.webp" title="Google Tag Manager"
                                            alt="Google Tag Manager" class="img-fluid">
                                    </div>

                                    <!-- Looker Studio -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/looker.webp" title="Looker Studio"
                                            alt="Looker Studio" class="img-fluid">
                                    </div>

                                    <!-- Ahrefs -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/ahrefs.webp" title="Ahrefs" alt="Ahrefs"
                                            class="img-fluid">
                                    </div>

                                    <!-- SEMrush -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/semrush.webp" title="SEMrush" alt="SEMrush"
                                            class="img-fluid">
                                    </div>

                                    <!-- Screaming Frog -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/screaming-frog.webp" title="Screaming Frog"
                                            alt="Screaming Frog" class="img-fluid">
                                    </div>

                                    <!-- LinkedIn Campaign Manager -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/linkedin-ads.webp" title="LinkedIn Campaign Manager"
                                            alt="LinkedIn Campaign Manager" class="img-fluid">
                                    </div>

                                    <!-- Hotjar -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/hotjar.webp" title="Hotjar" alt="Hotjar"
                                            class="img-fluid">
                                    </div>

                                    <!-- Microsoft Clarity -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/clarity.webp" title="Microsoft Clarity"
                                            alt="Microsoft Clarity" class="img-fluid">
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
                                                        What digital marketing services do you offer?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            We offer end-to-end digital marketing services including
                                                            SEO,
                                                            Google Ads, social media marketing, performance marketing,
                                                            and content marketing to help businesses grow online.
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
                                                        How long does it take to see results from digital marketing?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Results vary by channel. Paid advertising can generate leads
                                                            immediately, while SEO and content marketing typically
                                                            deliver
                                                            strong results within 3–6 months of consistent execution.
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
                                                        Do you provide customized digital marketing strategies?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We build custom digital marketing strategies based on
                                                            your
                                                            business goals, industry, target audience, and budget to
                                                            ensure
                                                            maximum ROI and sustainable growth.
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
                                                        How do you measure digital marketing performance?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            We track performance using analytics, conversion tracking,
                                                            and
                                                            ROI metrics such as website traffic, leads, conversions, and
                                                            cost per acquisition to ensure measurable results.
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
                                                        Can you manage paid ads and organic marketing together?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. We manage SEO, Google Ads, Meta Ads, and social
                                                            media
                                                            marketing together to deliver a balanced, integrated, and
                                                            high-performing marketing strategy.
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
                                                        Do you work with startups and established businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We work with startups, SMEs, and enterprises, tailoring
                                                            marketing strategies based on your business stage, goals,
                                                            and target audience.
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
                                                        Do you provide content along with marketing services?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. Our content marketing and writing services support SEO,
                                                            social media, and paid campaigns with high-quality,
                                                            conversion-focused content.
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
                                                        Why should I choose ABC Designs for digital marketing services?
                                                    </button>
                                                </h2>
                                                <div id="collapseEight" class="accordion-collapse collapse"
                                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            ABC Designs combines strategy, creativity, and performance
                                                            marketing to deliver measurable results, transparent
                                                            reporting,
                                                            and long-term business growth.
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
