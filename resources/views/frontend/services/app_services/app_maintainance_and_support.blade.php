@include('frontend.layout.header')

<body>
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
                                <h1 class="sec-title title-anim text-white">App Maintenance & Support Services for Reliable, Secure & High-Performing Applications</h1>

                                <div class="mt-3 d-flex flex-column align-items-start text-anim">
                                    <p class="text-white">
                                       Launching an app is just the beginning. To ensure long-term success, apps require continuous monitoring, updates, performance optimization, and security management. At ABC Designs, we provide professional app maintenance and support services that help businesses keep their mobile and web applications stable, secure, and future-ready.<br><br>
                                       Our app maintenance & support solutions are designed to minimize downtime, prevent performance issues, and ensure your app continues to deliver a seamless user experience as technologies, devices, and user expectations evolve.
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
                                    <img src="/img/service/mobile-service/app-maintainance-headerr.webp"
                                        alt="App Maintenance & Support Services" class="img-fluid rounded">
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

                                    <h2 class="sec-title title-anim">Trusted App Maintenance & Support Company in India</h2>
                                    <p class="fade-left mt-2">Ensuring Long-Term Stability, Performance & Security for Your Apps</p>

                                    <ul class="mt-4 list-unstyled">

                                        <li class="mb-1 fade-left">
                                            <p class="fade-left d-flex align-items-start">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 64 64">
                                                        <path fill="#344549" d="M48.34 8.824H5.843a5.84 5.84 0 0 0-5.838 5.84v42.498A5.84 5.84 0 0 0 5.843 63H48.34a5.84 5.84 0 0 0 5.838-5.839V14.664a5.84 5.84 0 0 0-5.838-5.84m2.72 45.46a5.166 5.166 0 0 1-5.165 5.168H8.293a5.166 5.166 0 0 1-5.168-5.168V16.683a5.167 5.167 0 0 1 5.168-5.167h37.602a5.17 5.17 0 0 1 5.165 5.167z" />
                                                        <path fill="#9c0808" d="M56.06 3.645c-7.701 6.668-14.766 13.742-20.733 22.02c-2.632 3.652-4.701 7.709-6.613 11.767c-.899 1.91-1.436 3.897-1.941 5.884c-3.673-3.414-7.248-6.925-11.28-9.96c-2.875-2.163-12.525 4.62-9.155 7.158c6.04 4.544 11.07 10.201 16.94 14.947c2.458 1.983 7.905-2.321 9.181-4.13c4.201-5.95 4.775-13.229 7.838-19.722c4.676-9.929 12.967-18.08 21.15-25.17c6.11-5.288-1.272-6.357-5.385-2.798" />
                                                    </svg>
                                                </span>
                                                Proven expertise in app maintenance and support services
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
                                                Support for Android apps, iOS apps, and web applications
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
                                                Proactive monitoring and issue resolution
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
                                                Focus on performance, security, and scalability
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
                                                Transparent communication and reliable turnaround
                                            </p>
                                        </li>

                                    </ul>

                                    <p class="fade-left mt-3">At ABC Designs, we help businesses protect their digital investments by ensuring apps remain up-to-date, optimized, and fully functional at all times.</p>

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
                            <img src="/img/service/mobile-service/app-maintainance-bg.webp"
                                alt="App Maintenance & Support Agency" class="img-fluid rounded">
                        </figure>

                        <h2 class="sec-title title-anim">Partner with an App Maintenance & Support Agency Built for Long-Term Success</h2>

                        <p class="fade-left mt-3">
                            Applications operate in dynamic environments — OS updates, device changes, security threats, and user demands evolve continuously. Our team of app support engineers, mobile developers, and technical specialists works proactively to ensure your application adapts smoothly to these changes.
                        </p>

                        <p class="fade-left">
                            We follow a preventive and performance-driven app maintenance approach, identifying potential issues before they impact users. From fixing bugs and improving speed to updating features and ensuring compatibility, we help businesses maintain a reliable and scalable app ecosystem.
                        </p>

                        <p class="fade-left">
                            Our app maintenance services ensure your app is:
                        </p>

                        <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                            <li>Stable and high-performing</li>
                            <li>Secure against vulnerabilities</li>
                            <li>Compatible with latest OS versions</li>
                            <li>Optimized for user experience</li>
                            <li>Ready for future enhancements</li>
                        </ul>

                        <!-- Clear float -->
                        <div class="clearfix"></div>

                    </div>

                    <h2 class="sec-title title-anim">App Maintenance & Support Services We Offer</h2>
                    <p class="fade-left mt-3">At ABC Designs, we provide end-to-end application maintenance and support services for mobile and web apps.</p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">

                                    <!-- 1 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Corrective Maintenance" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Corrective Maintenance
                                                </span>
                                            </h3>

                                            <p>
                                                We identify and fix bugs, crashes, and functional issues to restore smooth app performance.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 2 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Adaptive Maintenance" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Adaptive Maintenance
                                                </span>
                                            </h3>

                                            <p>
                                                We update apps to remain compatible with new OS versions, devices, APIs, and third-party services.
                                            </p>

                                        </div>
                                    </div>

                                    <!-- 3 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_UI-UX Design for Business Websites-.webp"
                                                alt="Perfective Maintenance" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Perfective Maintenance
                                                </span>
                                            </h3>

                                            <p>
                                                We improve app performance, UI responsiveness, and usability based on user feedback and analytics.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 4 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Security Updates & Monitoring" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Security Updates & Monitoring
                                                </span>
                                            </h3>

                                            <p>
                                                We apply regular security patches, vulnerability checks, and data protection measures to safeguard your app.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 5 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Performance Monitoring & Optimization" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Performance Monitoring & Optimization
                                                </span>
                                            </h3>

                                            <p>
                                                Continuous monitoring helps us optimize speed, reduce downtime, and improve app stability.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 6 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Feature Enhancements & Upgrades" class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Feature Enhancements & Upgrades
                                                </span>
                                            </h3>

                                            <p>
                                                We add new features or enhance existing ones to keep your app competitive and relevant.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- 7 -->
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp" alt="Testing & Quality Assurance"
                                                class="w-25 h-25 obj-fit-contain mb-3">

                                            <h3>
                                                <span class="service__title-2">
                                                    Testing & Quality Assurance
                                                </span>
                                            </h3>

                                            <p>
                                                Regular testing ensures app reliability across devices, platforms, and usage scenarios.
                                            </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="sss-colored-box p-4 rounded mt-3 mb-4">
                                    <h3 class="sec-title title-anim m-0">Our Proven App Maintenance & Support Process</h3>
                                    <p class="fade-left mt-2">A Structured, Proactive Support Approach</p>

                                    <ul class="row ga list-unstyled p-0 m-0 mt-5 animation__service-2">
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Discover-.webp" alt="Assess Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Assess</h4>
                                            <p class="mt-2">
                                                We analyze your existing app, codebase, performance metrics, and known issues to understand maintenance requirements.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Analyze-.webp" alt="Monitor Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Monitor</h4>
                                            <p class="mt-2">
                                                Our team continuously monitors app performance, uptime, and user behavior to detect issues early.
                                            </p>
                                        </li>

                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Strategize-.webp" alt="Fix & Optimize Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Fix & Optimize</h4>
                                            <p class="mt-2">
                                                We resolve bugs, apply updates, optimize performance, and improve stability without disrupting users.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Design & Develop.webp" alt="Secure Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Secure</h4>
                                            <p class="mt-2">
                                                Security audits, patches, and compliance updates are applied to protect app data and users.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Test & Optimize-.webp" alt="Improve Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Improve</h4>
                                            <p class="mt-2">
                                                Based on analytics and feedback, we recommend enhancements to improve user experience and engagement.
                                            </p>
                                        </li>
                                        <li class="col-12 col-md-6 col-lg-4 mb-4 process-item service__item-2">
                                            <figure class="mb-3">
                                                <img src="/img/icons/icon_Launch, Measure & Improve-.webp" alt="Support & Report Icon"
                                                    class="w-25 h-25 obj-fit-contain">
                                            </figure>
                                            <h4>Support & Report</h4>
                                            <p class="mt-2">
                                                We provide regular updates, transparent reporting, and ongoing technical support.
                                            </p>
                                        </li>

                                    </ul>

                                </div>

                                <h2 class="sec-title title-anim">Why App Maintenance & Support Is Critical for Business Success</h2>
                                <p class="fade-left mt-2">Without proper maintenance, apps quickly become slow, insecure, and incompatible. Professional app maintenance and support services help businesses:</p>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Improve Website Performance & Search Visibility-.webp"
                                                alt="Reduce Downtime & App Failures Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Reduce Downtime & App Failures</h4>
                                        <p class="mt-2">
                                            Proactive monitoring prevents unexpected crashes and service disruptions.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp" alt="Protect User Data & Security Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Protect User Data & Security</h4>
                                        <p class="mt-2">
                                            Regular updates reduce security risks and ensure compliance with best practices.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Maintain OS & Device Compatibility Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Maintain OS & Device Compatibility</h4>
                                        <p class="mt-2">
                                            Apps stay functional across new OS updates and devices.
                                        </p>
                                    </li>
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Strengthen Brand Awareness & Trust-.webp"
                                                alt="Improve User Experience Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Improve User Experience</h4>
                                        <p class="mt-2">
                                            Performance optimization ensures faster load times and smoother interactions.
                                        </p>
                                    </li>
                                </ul>

                                <ul class="row list-unstyled p-0 m-0 mt-3 animation__service-2">
                                    <li class="col-12 col-md-6 col-lg-3 mb-4 process-item service__item-2">
                                        <figure class="mb-3">
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Extend App Lifespan Icon"
                                                class="w-25 h-25 obj-fit-contain">
                                        </figure>
                                        <h4>Extend App Lifespan</h4>
                                        <p class="mt-2">
                                            Well-maintained apps remain relevant, usable, and valuable for years.
                                        </p>
                                    </li>
                                </ul>

                                <div class="my-4">
                                    <h2 class="sec-title title-anim">Why Choose ABC Designs for App Maintenance & Support</h2>
                                    <p class="fade-left mt-3">
                                        At ABC Designs, we provide reliable app maintenance and support services designed to keep your applications running smoothly, securely, and efficiently. Our focus is not just on fixing issues, but on proactively preventing problems that can impact performance, user experience, or business continuity.
                                    </p>
                                    <p class="fade-left">
                                        Our team of experienced app support engineers and developers works closely with businesses to understand application architecture, usage patterns, and growth plans. By combining technical expertise with a proactive support model, we ensure your apps remain stable, compatible, and ready to scale as your business evolves.
                                    </p>
                                    <p class="fade-left mt-3">
                                        What sets our app maintenance & support services apart:
                                    </p>
                                    <ul class="fade-left list-style-disc ms-4 mt-2" style="list-style-type: disc !important;">
                                        <li>Dedicated app maintenance and support team</li>
                                        <li>Proactive monitoring and issue prevention</li>
                                        <li>Support for Android, iOS, and web apps</li>
                                        <li>Regular updates, security patches, and performance optimization</li>
                                        <li>Transparent communication and detailed reporting</li>
                                        <li>Flexible support plans for growing businesses</li>
                                    </ul>
                                    <p class="fade-left mt-3">
                                        We don't just maintain apps — we protect performance, security, and long-term business value.
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
                                                        1. What is app maintenance and support?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            App maintenance and support involves ongoing monitoring, updates, bug fixes, security patches, and performance optimization to keep applications running smoothly.
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
                                                        2. Do you support both mobile and web apps?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We provide maintenance and support for Android apps, iOS apps, and web applications.
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
                                                        3. How often are updates and checks performed?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Monitoring is continuous, while updates and optimizations are performed based on app needs and support plans.
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
                                                        4. Can you maintain apps developed by another agency?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We support and maintain apps regardless of who originally developed them.
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
                                                        5. Is security included in app maintenance?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. Security updates, vulnerability checks, and data protection are core parts of our service.
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
                                                        6. Do you offer long-term support contracts?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We offer flexible maintenance plans tailored to business size and app complexity.
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