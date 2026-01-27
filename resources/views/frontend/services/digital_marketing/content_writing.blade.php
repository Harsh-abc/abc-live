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
                                <h1 class="sec-title title-anim text-white">Content Marketing & Writing Services That Build Authority, Drive Traffic & Convert Audiences</h1>

                                <div class="mt-3 d-flex flex-column align-items-start text-anim">
                                    <p class="text-white">
                                       In today's digital landscape, content is the foundation of online visibility, trust, and growth. Businesses that consistently publish valuable, relevant, and well-optimised content attract more traffic, build stronger brand authority, and convert audiences into loyal customers. Content Marketing & Writing is no longer optional — it is a core growth strategy.<br><br>
                                       At ABC Designs, we provide professional content marketing and writing services that help businesses communicate clearly, rank higher on search engines, and drive meaningful engagement. Our content is not written just to fill pages — it is created with a purpose: to inform, influence, and convert.<br><br>
                                       Whether you need website content, SEO blogs, landing pages, or long-form marketing assets, our content writing services are designed to support your digital marketing goals and deliver measurable business results.
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
                                    <img src="/img/service/digital-marketing/content-marketing-header.webp"
                                        alt="Content Marketing & Writing Services" class="img-fluid rounded">
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

                                    <h2 class="sec-title title-anim">Trusted Content Marketing & Writing Agency in India</h2>
                                    <p class="fade-left mt-2">Delivering SEO-Driven Content That Performs Across Channels</p>

                                    <ul class="mt-4 list-unstyled">

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Proven expertise in content marketing services across industries
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
                                                SEO-friendly, keyword-optimised content strategies
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
                                                Conversion-focused writing for websites and campaigns
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
                                                Consistent tone, brand voice, and messaging
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
                                                Transparent process and quality assurance
                                            </p>
                                        </li>

                                    </ul>

                                    <p class="fade-left mt-3">At ABC Designs, we don't believe in generic or AI-generated filler content. We focus on strategic, human-written content that aligns with search intent, user needs, and business objectives.</p>

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
                            <img src="/img/service/digital-marketing/content-marketing-bg.webp"
                                alt="Content Marketing Agency" class="img-fluid rounded">
                        </figure>

                        <h2 class="sec-title title-anim">Partner with a Content Marketing Agency Built for Long-Term Growth</h2>

                        <p class="fade-left mt-3">
                            Content marketing is more than writing blogs or website pages. It requires deep understanding of audience intent, keyword research, content structure, storytelling, and conversion psychology. Our team of content strategists, SEO content writers, and editors works collaboratively to create content that performs across search engines and marketing channels.
                        </p>

                        <p class="fade-left">
                            We begin by understanding your business, target audience, and goals. Based on this insight, we develop content that supports SEO rankings, brand authority, and lead generation. Every piece of content is created with clarity, relevance, and purpose.
                        </p>

                        <p class="fade-left">
                            Our content marketing approach ensures:
                        </p>

                        <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                            <li>Strong search engine visibility</li>
                            <li>Higher engagement and time on page</li>
                            <li>Clear brand positioning and messaging</li>
                            <li>Better lead quality and conversions</li>
                            <li>Long-term organic growth</li>
                        </ul>

                        <!-- Clear float -->
                        <div class="clearfix"></div>

                    </div>

                    <h2 class="sec-title title-anim">Content Marketing & Writing Services We Offer</h2>
                    <p class="fade-left mt-3">At ABC Designs, we provide end-to-end content writing and content marketing services tailored to different business needs.</p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">

                                    <!-- 1 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Website Content Writing" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Website Content Writing
                                                </span>
                                            </h3>

                                            <p>
                                                We write clear, compelling, and SEO-friendly website content that communicates your value proposition, builds trust, and guides visitors toward action.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="SEO Blog Writing" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    SEO Blog Writing
                                                </span>
                                            </h3>

                                            <p>
                                                Our SEO blog writing services help businesses rank for relevant keywords, attract organic traffic, and establish topical authority.
                                            </p>

                                        </div>
                                    </div>

                                    <!-- 3 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Landing Page & Sales Copywriting" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Landing Page & Sales Copywriting
                                                </span>
                                            </h3>

                                            <p>
                                                We create conversion-focused landing page content designed to generate leads, inquiries, and sales.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 4 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                alt="Product & Service Content Writing" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Product & Service Content Writing
                                                </span>
                                            </h3>

                                            <p>
                                                Clear, persuasive product and service descriptions that highlight benefits, features, and buyer intent.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 5 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Content for Digital Marketing Campaigns" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Content for Digital Marketing Campaigns
                                                </span>
                                            </h3>

                                            <p>
                                                We write content for ads, email campaigns, and promotional assets that support marketing performance.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 6 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Social Media Content Writing" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Content Writing
                                                </span>
                                            </h3>

                                            <p>
                                                Engaging social media captions and content aligned with brand voice and campaign objectives.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 7 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Content Optimization & Refresh"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Content Optimization & Refresh
                                                </span>
                                            </h3>

                                            <p>
                                                We optimize existing content for SEO, readability, and relevance to improve rankings and performance.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 8 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Content Strategy & Planning"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Content Strategy & Planning
                                                </span>
                                            </h3>

                                            <p>
                                                We build structured content marketing strategies, including topic planning, keyword mapping, and publishing calendars.
                                            </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="sss-colored-box p-4 rounded mt-3 mb-4">
                                    <h3 class="sec-title title-anim m-0">Our Proven Content Marketing Process</h3>
                                    <p class="fade-left mt-2">A Strategic, SEO-Driven Content Methodology</p>

                                    <ul class="row ga list-unstyled p-0 m-0 mt-5 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Discover-.webp" alt="Discover Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Discover</h4>
                                            <p class="mt-2">
                                                We understand your business, industry, audience, competitors, and content goals to define direction and tone.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Analyze-.webp" alt="Research Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Research</h4>
                                            <p class="mt-2">
                                                Our team performs in-depth keyword research, search intent analysis, and competitor content evaluation.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Strategize-.webp" alt="Strategize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Strategize</h4>
                                            <p class="mt-2">
                                                We create a content roadmap covering content types, formats, keywords, and publishing priorities.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Design & Develop.webp" alt="Write & Optimize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Write & Optimize</h4>
                                            <p class="mt-2">
                                                Content is written by experienced writers and optimised for SEO, readability, and conversions.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Test & Optimize-.webp" alt="Review & Refine Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Review & Refine</h4>
                                            <p class="mt-2">
                                                We edit, proofread, and refine content to ensure quality, clarity, and consistency.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Launch, Measure & Improve-.webp" alt="Publish & Improve Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Publish & Improve</h4>
                                            <p class="mt-2">
                                                Post-publish, content is monitored and refined to improve performance over time.
                                            </p>
                                        </li>

                                    </ul>

                                </div>

                                <h2 class="sec-title title-anim">Why Content Marketing Is Essential for Business Success</h2>
                                <p class="fade-left mt-2">Content marketing builds long-term visibility and trust that paid advertising alone cannot achieve.</p>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Improve Website Performance & Search Visibility-.webp"
                                                alt="Drive Sustainable Organic Traffic Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Drive Sustainable Organic Traffic</h4>
                                        <p class="mt-2">
                                            SEO-friendly content attracts users actively searching for information, products, or services.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp" alt="Educate & Influence Buyers Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Educate & Influence Buyers</h4>
                                        <p class="mt-2">
                                            Well-written content guides users through their decision-making journey.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Build Brand Authority Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Build Brand Authority</h4>
                                        <p class="mt-2">
                                            Consistent, high-quality content positions your business as an industry expert.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Strengthen Brand Awareness & Trust-.webp"
                                                alt="Deliver Long-Term ROI Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Deliver Long-Term ROI</h4>
                                        <p class="mt-2">
                                            Unlike ads, content continues to generate traffic and leads over time.
                                        </p>
                                    </li>
                                </ul>
                                <p class="fade-left">A strong content strategy turns your website into a valuable digital asset that works 24/7.</p>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Content Marketing Use Cases Across Business Types</h2>
                                    <p class="fade-left mt-3">
                                        Our content marketing services are tailored for different business models:
                                    </p>

                                    <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                    alt="Service-Based Businesses Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Service-Based Businesses</h4>
                                            <p class="mt-2">
                                                Generate inquiries and leads with SEO-optimised service content.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Professional Website Development-.webp" alt="B2B Companies Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>B2B Companies</h4>
                                            <p class="mt-2">
                                                Educate decision-makers and build trust with long-form, value-driven content.
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
                                                Drive product discovery and organic traffic through blogs and category content.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                    alt="Startups & Growing Brands Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Startups & Growing Brands</h4>
                                            <p class="mt-2">
                                                Build visibility, authority, and credibility from the ground up.
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Why Choose ABC Designs for Content Marketing & Writing</h2>
                                    <p class="fade-left mt-3">
                                        At ABC Designs, we approach content marketing with a balance of strategy, creativity, and SEO intelligence. Our focus is not just on writing content, but on creating content that supports business growth, search visibility, and user engagement. Every piece of content is written with a clear objective — to inform, rank, and convert.
                                    </p>
                                    <p class="fade-left">
                                        Our team of experienced content writers, SEO specialists, and editors works closely with businesses to maintain brand voice, consistency, and quality across all content assets. By combining keyword research, search intent, and conversion-focused writing, we deliver content that performs both for users and search engines.
                                    </p>
                                    <p class="fade-left mt-3">
                                        What sets our content marketing services apart:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li>Experienced SEO content writers</li>
                                        <li>Keyword-driven, intent-focused content strategy</li>
                                        <li>Human-written, high-quality content</li>
                                        <li>Clear brand voice and messaging</li>
                                        <li>SEO-friendly structure and optimisation</li>
                                        <li>Long-term growth-oriented approach</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        We help businesses turn content into traffic, authority, and measurable conversions.
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
                                                        1. What is content marketing?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Content marketing is the process of creating and distributing valuable content to attract, engage, and convert a target audience.
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
                                                        2. How does content marketing help SEO?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            SEO-optimised content improves keyword rankings, organic traffic, and search visibility over time.
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
                                                        3. Do you write SEO-friendly content?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. All our content is written with SEO best practices, keyword optimisation, and readability in mind.
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
                                                        4. Can you write content for existing websites?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. We offer content rewriting, optimisation, and expansion services.
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
                                                        5. Do you maintain brand tone and voice?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We align content with your brand guidelines and communication style.
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
                                                        6. How long does content marketing take to show results?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Content marketing typically shows results within 3–6 months, depending on competition and consistency.
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
                                                        7. Do you provide content strategy as well?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We offer complete content strategy, planning, and execution services.
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