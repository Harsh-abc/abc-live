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
                                <h1 class="sec-title title-anim text-white">Design & Animation Services That Bring Brands to Life</h1>

                                <div class="mt-3 d-flex flex-column align-items-start text-anim">
                                    <p class="text-white">
                                       In today's fast-moving digital landscape, visuals play a critical role in how brands communicate, connect, and convert. Static content alone is no longer enough. Businesses need compelling design and animation services that tell stories, simplify messages, and create memorable brand experiences. At ABC Designs, we deliver professional design and animation solutions that blend creativity, strategy, and motion to help brands stand out across digital platforms.<br><br>
                                       Our creative design and animation services are crafted to support branding, marketing, advertising, websites, apps, and social media campaigns. From eye-catching graphics to engaging motion animations, we create visual content that not only looks impressive but also serves clear business goals.
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
                                    <img src="/img/service/branding/design-and-animation-header.webp"
                                        alt="Design & Animation Services" class="img-fluid rounded">
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

                                    <h2 class="sec-title title-anim">Trusted Design & Animation Company in India</h2>
                                    <p class="fade-left mt-2">Delivering Creative Visuals That Inspire, Engage & Convert</p>

                                    <ul class="mt-4 list-unstyled">

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Proven expertise in graphic design and animation
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
                                                Experience across branding, marketing, digital, and product design
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
                                                Strong focus on visual storytelling and brand consistency
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
                                                High-quality motion graphics and animation design
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
                                                Transparent process, timely delivery, and creative excellence
                                            </p>
                                        </li>

                                    </ul>

                                    <p class="fade-left mt-3">At ABC Designs, we help businesses communicate more effectively through design-led animation and creative visuals that leave a lasting impact.</p>

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
                            <img src="/img/service/branding/design-and-animation-bg.webp"
                                alt="Design & Animation Agency" class="img-fluid rounded">
                        </figure>

                        <h2 class="sec-title title-anim">Partner with a Creative Design & Animation Agency Built for Brand Growth</h2>

                        <p class="fade-left mt-3">
                            Design and animation are not just about aesthetics — they are powerful communication tools. Our team of creative designers, motion graphic artists, and visual storytellers works closely with brands to translate ideas into engaging visual experiences.
                        </p>

                        <p class="fade-left">
                            We take a strategic approach to design and animation, ensuring that every visual aligns with brand identity, target audience, and marketing objectives. Whether it's a static design asset or a full animated sequence, our focus remains on clarity, engagement, and consistency.
                        </p>

                        <p class="fade-left">
                            Our creative solutions are:
                        </p>

                        <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                            <li>Visually compelling and brand-aligned</li>
                            <li>Optimized for digital and marketing platforms</li>
                            <li>Designed to improve engagement and recall</li>
                            <li>Scalable for multi-channel usage</li>
                            <li>Delivered with attention to detail and quality</li>
                        </ul>

                        <!-- Clear float -->
                        <div class="clearfix"></div>

                    </div>

                    <h2 class="sec-title title-anim">Design & Animation Services We Offer</h2>
                    <p class="fade-left mt-3">At ABC Designs, we provide a complete range of design and animation services to support branding, marketing, and digital communication needs.</p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">

                                    <!-- 1 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Creative Graphic Design" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Creative Graphic Design
                                                </span>
                                            </h3>

                                            <p>
                                                We create visually appealing graphic designs that communicate your brand message clearly. From marketing creatives to digital visuals, our designs maintain consistency and visual impact across channels.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Motion Graphics & Animation" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Motion Graphics & Animation
                                                </span>
                                            </h3>

                                            <p>
                                                Our motion graphics animation services help brands explain ideas, promote products, and engage audiences through smooth, dynamic visuals.
                                            </p>

                                        </div>
                                    </div>

                                    <!-- 3 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Explainer Video Animation" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Explainer Video Animation
                                                </span>
                                            </h3>

                                            <p>
                                                We design animated explainer videos that simplify complex concepts, making them easy to understand and visually engaging for users.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 4 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                alt="Branding Design & Animation" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Branding Design & Animation
                                                </span>
                                            </h3>

                                            <p>
                                                We bring brands to life with animated brand visuals, including logo animation, brand motion elements, and creative assets that enhance brand identity.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 5 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Social Media Design & Animation" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Social Media Design & Animation
                                                </span>
                                            </h3>

                                            <p>
                                                We create social media animation and creative visuals optimized for engagement across platforms like Instagram, Facebook, LinkedIn, and YouTube.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 6 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="UI Animation & Interaction Design" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    UI Animation & Interaction Design
                                                </span>
                                            </h3>

                                            <p>
                                                Enhance digital experiences with UI animation design that improves usability, feedback, and interaction within websites and mobile apps.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 7 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Marketing & Advertising Creatives"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Marketing & Advertising Creatives
                                                </span>
                                            </h3>

                                            <p>
                                                Our marketing design and animation services support digital ads, performance campaigns, and promotional content that drives attention and action.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 8 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Custom Visual Storytelling"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Custom Visual Storytelling
                                                </span>
                                            </h3>

                                            <p>
                                                We develop creative visual concepts and animation styles that help brands tell stories effectively and connect emotionally with audiences.
                                            </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="sss-colored-box p-4 rounded mt-3 mb-4">
                                    <h3 class="sec-title title-anim m-0">Our Design & Animation Process</h3>
                                    <p class="fade-left mt-2">A Structured, Creative & Strategy-Driven Approach</p>

                                    <ul class="row ga list-unstyled p-0 m-0 mt-5 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Discover-.webp" alt="Discover Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Discover</h4>
                                            <p class="mt-2">
                                                We begin by understanding your brand, objectives, audience, and usage requirements. This helps define the right creative direction and animation style.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Analyze-.webp" alt="Research Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Research & Analyze</h4>
                                            <p class="mt-2">
                                                Our team studies competitors, visual trends, and platform requirements to identify opportunities for impactful design and animation.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Strategize-.webp" alt="Concept & Strategy Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Concept & Strategy</h4>
                                            <p class="mt-2">
                                                We develop creative concepts, visual styles, storyboards, and animation plans aligned with your brand and communication goals.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Design & Develop.webp" alt="Design & Animate Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Design & Animate</h4>
                                            <p class="mt-2">
                                                Our designers and animators bring concepts to life using high-quality design tools and animation techniques to ensure polished results.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Test & Optimize-.webp" alt="Review & Refine Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Review & Refine</h4>
                                            <p class="mt-2">
                                                We collaborate closely with you to refine visuals, timing, and motion until the final output meets expectations.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Launch, Measure & Improve-.webp" alt="Deliver & Support Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Deliver & Support</h4>
                                            <p class="mt-2">
                                                Final assets are delivered in required formats, optimized for platforms, with ongoing support for updates or iterations.
                                            </p>
                                        </li>

                                    </ul>

                                </div>

                                <h2 class="sec-title title-anim">Why Design & Animation Matter for Modern Businesses</h2>
                                <p class="fade-left mt-2">Strong visual communication plays a key role in brand perception, engagement, and conversions. Effective design and animation services help businesses:</p>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Improve Website Performance & Search Visibility-.webp"
                                                alt="Increase Engagement Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Increase Engagement</h4>
                                        <p class="mt-2">
                                            Animated visuals and creative designs capture attention faster and keep users engaged longer than static content.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp" alt="Communicate Messages Clearly Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Communicate Messages Clearly</h4>
                                        <p class="mt-2">
                                            Motion graphics and explainer animations simplify complex ideas, making them easy to understand and remember.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Strengthen Brand Identity Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Strengthen Brand Identity</h4>
                                        <p class="mt-2">
                                            Consistent visual design and animation improve brand recall and create a recognizable visual language.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Strengthen Brand Awareness & Trust-.webp"
                                                alt="Improve Marketing Performance Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Improve Marketing Performance</h4>
                                        <p class="mt-2">
                                            High-quality animated creatives improve performance across digital marketing, ads, and social media campaigns.
                                        </p>
                                    </li>
                                </ul>

                                <p class="fade-left">Design and animation transform content into experiences that inform, engage, and inspire action.</p>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">How Design & Animation Connect with Other Core Services</h2>
                                    <p class="fade-left mt-3">
                                        To deliver complete creative and marketing solutions, our design and animation services work seamlessly with:
                                    </p>

                                    <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-6 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                    alt="Branding Solutions Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Branding Solutions</h4>
                                            <p class="mt-2">
                                                Ensuring consistent brand identity, visuals, and storytelling across all creative assets.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-6 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Professional Website Development-.webp" alt="Social Media Creatives Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Social Media Creatives</h4>
                                            <p class="mt-2">
                                                Producing engaging static and animated content optimized for social platforms.
                                            </p>
                                        </li>
                                    </ul>

                                    <p class="fade-left">
                                        These connected services help brands maintain visual consistency and stronger digital presence.
                                    </p>
                                </div>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Why Choose ABC Designs for Design & Animation Services</h2>
                                    <p class="fade-left mt-3">
                                        At ABC Designs, we deliver design and animation services that are rooted in strategy, creativity, and real business objectives. Our approach goes beyond aesthetics — we focus on creating visual experiences that communicate clearly, engage audiences, and strengthen brand identity across digital platforms.
                                    </p>
                                    <p class="fade-left">
                                        Our team of experienced creative designers and animators works closely with brands to understand messaging, audience behavior, and usage contexts. By combining thoughtful design, high-quality animation, and brand-focused execution, we ensure every visual asset delivers impact, consistency, and long-term value.
                                    </p>
                                    <p class="fade-left mt-3">
                                        What sets our design & animation services apart:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li>Experienced creative designers and animators</li>
                                        <li>Strategy-driven design and animation approach</li>
                                        <li>High-quality motion graphics and visual execution</li>
                                        <li>Brand-focused and audience-centric creative solutions</li>
                                        <li>Transparent collaboration and timely delivery</li>
                                        <li>Designs and animations built for real business impact</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        We create designs that attract attention and animations that tell stories.
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
                                                        1. What are design and animation services?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Design and animation services involve creating visual content and animated visuals to communicate brand messages, promote products, and engage audiences.
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
                                                        2. How does animation help in marketing?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Animation improves engagement, simplifies messaging, and increases content retention, making marketing campaigns more effective.
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
                                                        3. Do you create both static and animated designs?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We provide graphic design, motion graphics, animated videos, and interactive visual assets.
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
                                                        4. Can animation be used for social media and ads?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. Our animations are optimized for social media platforms, digital ads, websites, and mobile apps.
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
                                                        5. Do you offer custom animation styles?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. All animation styles are customized to align with brand identity and campaign objectives.
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
                                                        6. Will the designs be optimized for multiple platforms?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We deliver assets in formats optimized for web, mobile, ads, and social platforms.
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