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
            <p class="loading-text">Loading<span class="dots"></span></p> --}} --}}

            <!-- Optional: Progress bar -->
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>
    <!-- ========== END LOADER ========== -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="survices-sub-sec">

                <!-- Development area start -->
                <section class="development__area service-sub-sec">
                    <div class="container-fluid g-0 overflow-hidden" style="overflow-x: hidden !important">
                        <div class="row justify-content-between px-1 pb-50 blog-header-banner">
                            <div class="col-lg-7 col-md-12">
                                <h1 class="sec-title title-anim text-white">Search Engine Marketing (Google Ads) Services That Deliver Instant Leads & Measurable ROI</h1>

                                <div class="mt-3 d-flex flex-column align-items-start text-anim">
                                    <p class="text-white">
                                       When customers are actively searching for your products or services, Search Engine Marketing (SEM) ensures your business appears at the top — instantly. Google Ads is one of the fastest and most effective ways to generate leads, sales, and brand visibility. At ABC Designs, we offer Search Engine Marketing (Google Ads) services that focus on precision targeting, performance optimization, and profitable growth.<br><br>
                                       Our Google Ads management services are designed to attract high-intent users, control ad spend, and deliver measurable results. Whether you're launching paid campaigns for the first time or scaling existing ads, we build data-driven SEM strategies that convert clicks into customers.
                                    </p>
                                </div>
                                <div class="my-3">
                                    <a href="/contact-us"
                                        class="blog__btn border rounded-pill cus-url-btn px-4 py-3 me-4 text-white">
                                        Speak to an Expert <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 w-fit mt-4 mt-lg-0 sss-banner-right">
                                <figure class="mb-0" id="bounceImage">
                                    <img src="/img/service/digital-marketing/sem-header.webp"
                                        alt="Search Engine Marketing Google Ads Services" class="img-fluid rounded">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <!-- BLOG LAYOUT - 3 COLUMNS -->
                    <div class="blog-detail-area px-1 pt-5">
                        <div class="blog-layout">

                            <!-- CENTER - Main Blog Content -->
                            <article class="blog-center-content" id="blog-content-area">

                                <!-- Static content for demonstration -->
                                <div class="blog-content-inner">

                                    <h2 class="sec-title title-anim">Trusted Google Ads Agency in India for Performance-Driven Campaigns</h2>
                                    <p class="fade-left mt-2">Delivering High-Intent Traffic, Better Conversions & Lower Cost Per Lead</p>

                                    <ul class="mt-4 list-unstyled">

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Proven expertise in Search Engine Marketing (SEM) and Google Ads
                                            </p>
                                        </li>

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Experience managing campaigns across multiple industries
                                            </p>
                                        </li>

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Google-compliant ad strategies and best practices
                                            </p>
                                        </li>

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Focus on ROI, not just impressions or clicks
                                            </p>
                                        </li>

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Transparent reporting and budget accountability
                                            </p>
                                        </li>

                                    </ul>

                                    <p class="fade-left mt-3">At ABC Designs, we don't run ads blindly. We manage Google Ads campaigns with clear goals, measurable outcomes, and continuous optimization.</p>

                                </div>

                            </article>

                            <!-- RIGHT SIDEBAR - Form & Recent Posts -->
                            <aside class="blog-sidebar blog-sticky-right">
                                <div class="sticky-wrapper">
                                    <div class="sidebar-box">
                                        <h4 class="">Schedule a Callback</h4>
                                        <form method="post" action="/contact-us" id=""
                                            class="blog-form-row mt-3">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-floating">
                                                    <input type="text"
                                                        class="form-control border-dark @error('name') is-invalid @enderror"
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
                                                <div class="form-floating mb-3 col-md-12">
                                                    <input type="email"
                                                        class="form-control border-dark @error('email') is-invalid @enderror"
                                                        id="email" name="email" placeholder="Email"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label for="email">Email*</label>
                                                </div>
                                                <div class="form-floating mb-3 col-md-12">
                                                    <input type="number" minlength="10" maxlength="12"
                                                        class="form-control border-dark @error('contact') is-invalid @enderror"
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
                                            <div class="form-row">
                                                <div class="form-floating mb-3">
                                                    <textarea type="textbox" class="form-control border-dark @error('message') is-invalid @enderror" id="message"
                                                        name="message" placeholder="Message*" value="" required>{{ old('message') }}</textarea>
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
                                                    data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
                                                <span id="captchaErr" class="error-message"></span>
                                            </div>
                                            <div class="form-group submit">
                                                <input type="submit" id="submitBtn"
                                                    class="btn btn-dark w-100 submitBtn" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </aside>


                        </div>
                    </div>
                </section>
                <!-- Development area end -->


                <section class="development__area service-sub-sec blog-detail-area px-5 mt-0">
                    <div class="my-4">

                        <figure class="float-end ms-4 mb-3" style="max-width: 420px;">
                            <img src="/img/service/digital-marketing/sem-bg.webp"
                                alt="Google Ads Agency" class="img-fluid rounded">
                        </figure>

                        <h2 class="sec-title title-anim">Partner with a Google Ads Agency Built for Scalable Growth</h2>

                        <p class="fade-left mt-3">
                            Running successful Google Ads campaigns requires more than just bidding on keywords. It demands deep understanding of search intent, audience targeting, ad relevance, landing page experience, and conversion tracking. Our team of SEM specialists, PPC strategists, and performance marketers works closely with businesses to design campaigns that deliver consistent results.
                        </p>

                        <p class="fade-left">
                            We focus on targeting users who are ready to take action — whether it's submitting a lead form, making a purchase, or booking a consultation. Every Google Ads campaign we manage is optimized for relevance, quality score, and cost efficiency, ensuring you get maximum value from your ad spend.
                        </p>

                        <p class="fade-left">
                            Our SEM approach ensures:
                        </p>

                        <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                            <li>High-intent keyword targeting</li>
                            <li>Lower cost per click (CPC)</li>
                            <li>Improved conversion rates</li>
                            <li>Better return on ad spend (ROAS)</li>
                            <li>Scalable campaign growth</li>
                        </ul>

                        <!-- Clear float -->
                        <div class="clearfix"></div>

                    </div>

                    <h2 class="sec-title title-anim">Search Engine Marketing (Google Ads) Services We Offer</h2>
                    <p class="fade-left mt-3">At ABC Designs, we provide end-to-end Google Ads and SEM services to support different business objectives.</p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">

                                    <!-- 1 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Google Search Ads" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Google Search Ads
                                                </span>
                                            </h3>

                                            <p>
                                                Appear at the top of Google search results when users actively search for your products or services. We focus on high-intent keywords that drive leads and sales.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Google Display Ads" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Google Display Ads
                                                </span>
                                            </h3>

                                            <p>
                                                Build brand awareness and remarket to potential customers across millions of websites, apps, and placements within the Google Display Network.
                                            </p>

                                        </div>
                                    </div>

                                    <!-- 3 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Google Shopping Ads" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Google Shopping Ads
                                                </span>
                                            </h3>

                                            <p>
                                                Promote your products directly in Google search results with product images, prices, and details — ideal for ecommerce businesses.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 4 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                alt="YouTube Ads" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    YouTube Ads
                                                </span>
                                            </h3>

                                            <p>
                                                Reach your target audience through video ads on YouTube and partner platforms to increase brand awareness and engagement.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 5 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Local Search Ads" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Local Search Ads
                                                </span>
                                            </h3>

                                            <p>
                                                Drive foot traffic and local leads by promoting your business across Google Search, Maps, and local placements.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 6 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Remarketing Campaigns" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Remarketing Campaigns
                                                </span>
                                            </h3>

                                            <p>
                                                Re-engage users who have previously visited your website and encourage them to convert through tailored ad messaging.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 7 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Conversion Tracking & Analytics"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Conversion Tracking & Analytics
                                                </span>
                                            </h3>

                                            <p>
                                                We implement accurate conversion tracking to measure leads, sales, and campaign performance in real time.
                                            </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="sss-colored-box p-4 rounded mt-3 mb-4">
                                    <h3 class="sec-title title-anim m-0">Our Proven Google Ads Management Process</h3>
                                    <p class="fade-left mt-2">A Data-Driven, ROI-Focused SEM Methodology</p>

                                    <ul class="row ga list-unstyled p-0 m-0 mt-5 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Discover-.webp" alt="Discover Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Discover</h4>
                                            <p class="mt-2">
                                                We understand your business goals, target audience, products/services, competition, and budget to define campaign objectives.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Analyze-.webp" alt="Analyze Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Analyze</h4>
                                            <p class="mt-2">
                                                Our team analyzes keyword opportunities, competitor ads, search intent, and landing page performance.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Strategize-.webp" alt="Strategize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Strategize</h4>
                                            <p class="mt-2">
                                                We build a customized Google Ads strategy covering campaign structure, keyword selection, ad copy, bidding, and targeting.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Design & Develop.webp" alt="Launch & Optimize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Launch & Optimize</h4>
                                            <p class="mt-2">
                                                We launch campaigns and continuously optimize bids, keywords, ad creatives, and targeting to improve performance.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Test & Optimize-.webp" alt="Monitor & Scale Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Monitor & Scale</h4>
                                            <p class="mt-2">
                                                We monitor results, eliminate wasteful spend, and scale high-performing campaigns for better ROI.
                                            </p>
                                        </li>

                                    </ul>

                                </div>

                                <h2 class="sec-title title-anim">Why Google Ads Is Critical for Business Growth</h2>
                                <p class="fade-left mt-2">Google Ads allows businesses to reach customers exactly when they are ready to buy.</p>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Improve Website Performance & Search Visibility-.webp"
                                                alt="Instant Visibility on Google Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Instant Visibility on Google</h4>
                                        <p class="mt-2">
                                            Appear on top of search results immediately without waiting months for organic rankings.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp" alt="Target High-Intent Users Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Target High-Intent Users</h4>
                                        <p class="mt-2">
                                            Google Ads targets users actively searching for your offerings, resulting in better lead quality.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Full Budget Control Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Full Budget Control</h4>
                                        <p class="mt-2">
                                            Set daily budgets, control bids, and scale campaigns based on performance.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Strengthen Brand Awareness & Trust-.webp"
                                                alt="Measurable & Scalable Results Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Measurable & Scalable Results</h4>
                                        <p class="mt-2">
                                            Every click, lead, and conversion is trackable, making Google Ads one of the most measurable marketing channels.
                                        </p>
                                    </li>
                                </ul>
                                <p class="fade-left">A well-managed SEM campaign becomes a predictable lead-generation engine.</p>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Search Engine Marketing Use Cases Across Industries</h2>
                                    <p class="fade-left mt-3">
                                        Our Google Ads services are tailored for different business models:
                                    </p>

                                    <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                    alt="Local Businesses Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Local Businesses</h4>
                                            <p class="mt-2">
                                                Generate phone calls, inquiries, and store visits from nearby customers.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Professional Website Development-.webp" alt="B2B Companies Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>B2B Companies</h4>
                                            <p class="mt-2">
                                                Capture high-intent decision-maker searches and drive qualified leads.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                    alt="E-commerce Brands Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>E-commerce Brands</h4>
                                            <p class="mt-2">
                                                Increase product visibility and drive direct sales through Shopping and Search Ads.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                    alt="Service-Based Businesses Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Service-Based Businesses</h4>
                                            <p class="mt-2">
                                                Convert search demand into inquiries and bookings.
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Why Choose ABC Designs for Search Engine Marketing (Google Ads)</h2>
                                    <p class="fade-left mt-3">
                                        At ABC Designs, we treat Google Ads as a performance channel, not an expense. Our Search Engine Marketing strategies are built around user intent, data analysis, and continuous optimization to ensure every rupee spent delivers measurable returns. We focus on attracting users who are ready to convert — not just generating clicks.
                                    </p>
                                    <p class="fade-left">
                                        Our team of experienced Google Ads specialists and performance marketers works closely with businesses to understand goals, competition, and conversion metrics. By combining strategic keyword targeting, compelling ad copy, smart bidding, and conversion-focused landing pages, we deliver SEM campaigns that drive consistent leads and profitable growth.
                                    </p>
                                    <p class="fade-left mt-3">
                                        What sets our Google Ads services apart:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li>Certified Google Ads specialists</li>
                                        <li>High-intent keyword & audience targeting</li>
                                        <li>ROI-focused campaign structure</li>
                                        <li>Continuous optimization & A/B testing</li>
                                        <li>Transparent reporting & budget control</li>
                                        <li>Performance-driven, scalable SEM strategies</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        We help businesses turn paid search into predictable, high-quality revenue streams.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


                <!-- FAQ area start -->
                <section class="faq__area mt-4">
                    <div class="container g-0 pb-140">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="faq__img">
                                    <img src="/img/service/interactivesolutions_4.jpg" alt="FAQ Image"
                                        data-speed="auto" class="faq-img-paral">
                                    <img src="/img/service/interactivesolutions_4.jpg" alt="FAQ Image"
                                        class="faq-img-noparal">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="faq__content">
                                    <h2 class="faq__title title-anim">Frequently Asked Questions</h2>
                                    <div class="faq__list">
                                        <div class="accordion" id="accordionExample">

                                            <!-- FAQ 1 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        1. What is Search Engine Marketing (SEM)?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            SEM is a paid advertising strategy that promotes businesses on search engines like Google through ads.
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
                                                        2. How quickly do Google Ads show results?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Google Ads can start generating traffic and leads within days of launch.
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
                                                        3. Is Google Ads expensive?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Costs depend on competition and keywords, but campaigns can be optimized to fit different budgets.
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
                                                        4. Do you manage ad budgets and bidding?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We manage bidding strategies, budgets, and optimization to maximize ROI.
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
                                                        5. Can Google Ads work for small businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. With the right targeting and strategy, Google Ads is highly effective for small and local businesses.
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
                                                        6. Do you provide performance reports?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We provide clear reports covering clicks, conversions, cost per lead, and ROI.
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
                                                        7. Can you optimize existing Google Ads campaigns?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We audit and optimize existing campaigns to improve performance and reduce wasted spend.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FAQ area end -->
            </main>

            @include('frontend.layout.footer')

        </div>
    </div>