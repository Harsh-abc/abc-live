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
            <main class="survices-sub-sec">

                <!-- Development area start -->
                <section class="development__area service-sub-sec">
                    <div class="container-fluid g-0 overflow-hidden" style="overflow-x: hidden !important">
                        <div class="row justify-content-between px-1 pb-50 blog-header-banner">
                            <div class="col-lg-7 col-md-12">
                                <h1 class="sec-title title-anim text-white">Social Media Marketing Services That Build Brands, Engage Audiences & Drive Growth</h1>

                                <div class="mt-3 d-flex flex-column align-items-start text-anim">
                                    <p class="text-white">
                                       Social media has become one of the most powerful channels for brand visibility, customer engagement, and business growth. However, consistent results require more than posting content regularly. A successful strategy needs planning, creativity, audience insights, and performance tracking. At ABC Designs, we deliver social media marketing services that help businesses build strong online presence, connect with the right audience, and achieve measurable results.<br><br>
                                       Our professional social media marketing services are designed to support brand awareness, engagement, and long-term growth across major platforms. From content creation to community management and analytics, we help brands use social media as a reliable growth channel.
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
                                    <img src="/img/service/digital-marketing/smm-header.webp"
                                        alt="Social Media Marketing Services" class="img-fluid rounded">
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

                                    <h2 class="sec-title title-anim">Trusted Social Media Marketing Company in India</h2>
                                    <p class="fade-left mt-2">Helping Brands Grow with Strategic & Consistent Social Media Marketing</p>

                                    <ul class="mt-4 list-unstyled">

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Proven expertise in social media marketing and management
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
                                                Experience working with startups, SMEs, and growing brands
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
                                                Platform-specific strategies for better engagement
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
                                                Creative content backed by performance insights
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
                                                Transparent reporting and continuous optimization
                                            </p>
                                        </li>

                                    </ul>

                                    <p class="fade-left mt-3">At ABC Designs, we focus on building meaningful social media presence that aligns with brand goals and audience expectations.</p>

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
                            <img src="/img/service/digital-marketing/smm-bg.webp"
                                alt="Social Media Marketing Agency" class="img-fluid rounded">
                        </figure>

                        <h2 class="sec-title title-anim">Partner with a Social Media Marketing Agency Built for Sustainable Growth</h2>

                        <p class="fade-left mt-3">
                            Social media success depends on understanding your audience, choosing the right platforms, and delivering consistent, relevant content. Our team of social media strategists, content creators, and marketing specialists works closely with businesses to build result-oriented social media strategies.
                        </p>

                        <p class="fade-left">
                            We follow a data-driven and brand-centric approach to social media marketing, ensuring every post, campaign, and interaction supports your business objectives. Whether your goal is brand awareness, engagement, or lead generation, we tailor strategies that fit your needs.
                        </p>

                        <p class="fade-left">
                            Our social media marketing approach focuses on:
                        </p>

                        <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                            <li>Audience targeting and content relevance</li>
                            <li>Consistent brand voice and visual identity</li>
                            <li>Engagement-driven content planning</li>
                            <li>Performance tracking and optimization</li>
                        </ul>

                        <!-- Clear float -->
                        <div class="clearfix"></div>

                    </div>

                    <h2 class="sec-title title-anim">Social Media Marketing Services We Offer</h2>
                    <p class="fade-left mt-3">At ABC Designs, we provide complete social media marketing and management services designed to support brand growth across platforms.</p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">

                                    <!-- 1 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Social Media Strategy & Planning" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Strategy & Planning
                                                </span>
                                            </h3>

                                            <p>
                                                We create customized social media marketing strategies based on your business goals, audience behavior, and competitive analysis.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Social Media Content Creation" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Content Creation
                                                </span>
                                            </h3>

                                            <p>
                                                Our team designs high-quality posts, captions, and visuals that align with your brand identity and engage your target audience.
                                            </p>

                                        </div>
                                    </div>

                                    <!-- 3 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Social Media Posting & Scheduling" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Posting & Scheduling
                                                </span>
                                            </h3>

                                            <p>
                                                We manage consistent posting schedules to ensure your brand stays active and visible across platforms.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 4 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                alt="Community Management & Engagement" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Community Management & Engagement
                                                </span>
                                            </h3>

                                            <p>
                                                We handle comments, messages, and audience interactions to build trust, engagement, and brand loyalty.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 5 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Social Media Analytics & Reporting" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Analytics & Reporting
                                                </span>
                                            </h3>

                                            <p>
                                                We track performance metrics such as reach, engagement, and growth, providing actionable insights to improve results.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 6 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Social Media Campaign Management" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Campaign Management
                                                </span>
                                            </h3>

                                            <p>
                                                We plan and manage promotional campaigns to support product launches, events, and brand initiatives.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 7 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Social Media Branding & Profile Optimization"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Branding & Profile Optimization
                                                </span>
                                            </h3>

                                            <p>
                                                We optimize profiles, bios, and visual elements to ensure a professional and consistent brand presence.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 8 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Organic Social Media Growth"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Organic Social Media Growth
                                                </span>
                                            </h3>

                                            <p>
                                                Our strategies focus on building organic reach and engagement through relevant content and audience interaction.
                                            </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="sss-colored-box p-4 rounded mt-3 mb-4">
                                    <h3 class="sec-title title-anim m-0">Our Proven Social Media Marketing Process</h3>
                                    <p class="fade-left mt-2">A Structured, Data-Driven Approach to Social Growth</p>

                                    <ul class="row ga list-unstyled p-0 m-0 mt-5 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Discover-.webp" alt="Discover Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Discover</h4>
                                            <p class="mt-2">
                                                We begin by understanding your business, industry, goals, and target audience to define a clear social media direction.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Analyze-.webp" alt="Analyze Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Analyze</h4>
                                            <p class="mt-2">
                                                Our team analyzes existing social media presence, competitors, and content performance to identify opportunities for growth.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Strategize-.webp" alt="Strategize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Strategize</h4>
                                            <p class="mt-2">
                                                We develop a platform-specific social media marketing strategy, including content themes, posting frequency, and engagement tactics.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Design & Develop.webp" alt="Create & Publish Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Create & Publish</h4>
                                            <p class="mt-2">
                                                Our creatives produce high-quality content and publish it according to the planned calendar to ensure consistency.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Test & Optimize-.webp" alt="Engage & Monitor Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Engage & Monitor</h4>
                                            <p class="mt-2">
                                                We actively monitor interactions, respond to comments, and engage with audiences to strengthen brand relationships.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Launch, Measure & Improve-.webp" alt="Measure & Optimize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Measure & Optimize</h4>
                                            <p class="mt-2">
                                                We track performance, analyze results, and refine strategies continuously to improve engagement and reach.
                                            </p>
                                        </li>

                                    </ul>

                                </div>

                                <h2 class="sec-title title-anim">Why Social Media Marketing Is Essential for Business Growth</h2>
                                <p class="fade-left mt-2">An active and well-managed social media presence helps businesses stay connected with their audience and remain competitive.</p>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Improve Website Performance & Search Visibility-.webp"
                                                alt="Increase Brand Awareness Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Increase Brand Awareness</h4>
                                        <p class="mt-2">
                                            Consistent social media activity helps businesses stay visible and recognizable across digital platforms.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp" alt="Engage the Right Audience Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Engage the Right Audience</h4>
                                        <p class="mt-2">
                                            Targeted content helps attract users who are genuinely interested in your brand, products, or services.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Build Trust & Credibility Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Build Trust & Credibility</h4>
                                        <p class="mt-2">
                                            Regular engagement and valuable content help build trust and strengthen brand reputation.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Strengthen Brand Awareness & Trust-.webp"
                                                alt="Support Marketing & Sales Goals Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Support Marketing & Sales Goals</h4>
                                        <p class="mt-2">
                                            Social media plays a key role in supporting campaigns, driving website traffic, and nurturing leads.
                                        </p>
                                    </li>
                                </ul>
                                <p class="fade-left">A strong social media strategy transforms platforms into powerful brand-building and engagement channels.</p>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">How Social Media Marketing Connects with Other Core Services</h2>
                                    <p class="fade-left mt-3">
                                        To deliver complete digital growth solutions, our social media marketing services work seamlessly with:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li><strong>Content Marketing & Writing</strong> – to create meaningful, high-quality content that supports engagement and brand authority.</li>
                                        <li><strong>Performance Marketing (Meta Ads)</strong> – to amplify reach, support campaigns, and drive targeted conversions.</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        These connected services help brands achieve consistent messaging, stronger engagement, and better campaign performance.
                                    </p>
                                </div>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Why Choose ABC Designs for Social Media Marketing</h2>
                                    <p class="fade-left mt-3">
                                        At ABC Designs, we deliver social media marketing services that are driven by strategy, creativity, and measurable outcomes. Our approach focuses on understanding your audience, aligning content with brand objectives, and using platform-specific best practices to build meaningful engagement and consistent growth.
                                    </p>
                                    <p class="fade-left">
                                        Our team of experienced social media marketing professionals works closely with brands to plan, create, and manage content that resonates with the right audience. By combining creative storytelling with data-driven insights, we ensure your social media presence remains active, relevant, and aligned with long-term business goals.
                                    </p>
                                    <p class="fade-left mt-3">
                                        What sets our social media marketing services apart:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li>Experienced social media marketing professionals</li>
                                        <li>Strategy-driven and audience-focused approach</li>
                                        <li>Creative content aligned with brand identity</li>
                                        <li>Platform-specific optimization for better reach</li>
                                        <li>Transparent reporting and performance insights</li>
                                        <li>Focus on long-term brand growth and engagement</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        We help brands grow, engage, and stay relevant on social media.
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
                                                        1. What are social media marketing services?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Social media marketing services involve managing and promoting a brand across social platforms through content creation, engagement, and strategy.
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
                                                        2. Which platforms do you manage?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            We manage platforms such as Facebook, Instagram, LinkedIn, Twitter, and YouTube based on business needs.
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
                                                        3. Is social media marketing suitable for small businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. Social media marketing helps small businesses build visibility, engage audiences, and compete effectively online.
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
                                                        4. How do you measure social media success?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            We track metrics such as reach, engagement, follower growth, and content performance to measure success.
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
                                                        5. Do you provide content for social media?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. Our services include content creation, captions, visuals, and posting schedules.
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
                                                        6. How long does it take to see results from social media marketing?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Results vary by industry and strategy, but consistent engagement and growth can be seen within a few months.
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