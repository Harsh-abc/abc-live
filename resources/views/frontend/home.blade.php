@include('frontend.layout.header')

<body class="">
    {{-- video_start --}}
    @include('frontend.layout.nav')
    <!--
 <div class="page-loader">
    <div class="clock" id="clock"> </div>
  <video id="loading-video" autoplay muted>
   <source src="/video/intro.mp4?ver=0.1" type="video/mp4">
   <source src="/video/intro.ogg?ver=0.1" type="video/ogg">
   Your browser does not support HTML5 video.
  </video>
 </div>
 -->


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Hero area start -->
                <section class="hero__area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="hero__content animation__hero_one">
                                    <!-- <div class="trustpilot-widget" data-locale="en-US"
                                        data-template-id="56278e9abfbbba0bdcd568bc"
                                        data-businessunit-id="68d3d6ac3839e04f85ec2415" data-style-height="52px"
                                        data-style-width="" data-token="68811fad-954f-4a4f-ab9b-35d1b151467d"
                                        style="margin-left: -60px;">
                                        <a href="https://www.trustpilot.com/review/abcdesigns.in" target="_blank"
                                            rel="noopener">Trustpilot</a>
                                    </div> -->
                                    <a href="/services">Strategy, Design, Solution Development <span> <i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="hero__title-wrapper">
                                        <h1 class="hero__title">Digital experiences that inspire</h1>
                                        <p class="hero__sub-title"> We create <span>digital experience</span> at the
                                            intersection between <span>design</span> and <span>technology,</span>
                                            helping our clients to <span>imagine the future,</span> today. </p>

                                        <div class="hero_form_wrapper">
                                            <!-- <div class="img_container">
                                                <img src="/img/logo_light.png" alt="" class="img-fluid">
                                            </div> -->
                                            <h4 class="hero_form_heading">Let's Connect With Us!</h4>
                                            <p class="hero_form_para">We create digital experiences that shape the
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
                                                        data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
                                                    <span id="captchaErr"
                                                        class="error-message"><?php //echo $captchaErr;
                                                        ?></span>
                                                </div>
                                                <div class="form-group submit">
                                                    <input type="submit" id="submitBtns" class="btn btn-dark w-100"
                                                        value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="btn_conatiner">
                                        <img src="/imgs/icon/arrow-down-big.png" alt="Arrow Down Icon">


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

                                    <!-- <img src="/imgs/icon/arrow-down-big.png" alt="Arrow Down Icon"> -->
                                    <div class="experience">
                                        <h2 class="title">10k+</h2>
                                        <p>Projects completed <br>successfully</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<img src="/imgs/hero/1/1-bg.png" alt="image" class="hero1_bg"> -->
                    <!--
    <img src="/imgs/hero/02.jpg" alt="image" class="hero1_bg">
    -->
                    <video id="home-video" autoplay muted loop>
                        <source src="/video/home_4.mp4" type="video/mp4">
                        <source src="/video/home_4.ogg" type="video/ogg">
                        Your browser does not support HTML5 video.
                    </video>
                </section>
                <!-- Hero area end -->


                <!-- Roll area start -->
                <section class="roll__area">
                    <div class="swiper roll__slider">
                        <div class="swiper-wrapper roll__wrapper">
                            <!--
      <div class="swiper-slide roll__slide"> <h2>Development</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Studio</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Strategy</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Branding</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Agency</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>typhography</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Design</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Interaction</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Element</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>DIgital SOlution</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Strategy</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Branding</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Agency</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>Interaction</h2> </div>
      <div class="swiper-slide roll__slide"> <h2>DIgital SOlution </h2> </div>
      -->
                            <div class="swiper-slide roll__slide">
                                <h2> Digital Agency </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Web Design </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Web Development </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Digital Solutions </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Marketing Strategy </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Business Growth </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> SEO Development </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Web Solutions </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> UX Design </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Development Company </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Digital Agency </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Branding Solutions </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Digital Landscape </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Design Experts </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Strategy Consulting </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Web Design </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Business Solutions </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Web Developers </h2>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <h2> Innovation Agency </h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Roll area end -->


                <!-- About area start -->
                <section class="about__area">
                    {{-- <div class="container g-0 pt-140 pb-130"> --}}
                    <div class="container g-0 pt-80 pb-80">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="about__title-wrapper">
                                    <h3 class="sec-title title-anim">DESIGNING FOR THE HUMAN TOUCH IN A DIGITAL WORLD.
                                    </h3>
                                </div>

                                <div class="about__content-wrapper" style="position:relative;">
                                    {{-- <div class="about__img">
                                        <div class="img-anim"> <img src="/img/office/IMG_6555.PNG" alt="About Image"
                                                data-speed="0.3"> </div>
                                        <div class="about__img-right">
                                            <img src="/img/office/image_02.png" alt="About Image Right"
                                                data-speed="0.5">
                                            <div class="shape">
                                                <div class="secondary" data-speed="0.9"></div>
                                                <div class="primary"></div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="about__content text-anim">
                                        <p> At our digital agency, we combine creativity, design, and emotion to connect
                                            businesses with their target audiences. We specialize in custom web design,
                                            development, and UI/UX solutions that elevate brand presence and drive
                                            growth. <br />
                                            Our team of experts works closely with you to understand your vision and
                                            create user-centric experiences that deliver impactful results.</p>

                                        <h4>Ready to transform your online presence?</h4>
                                        <p> Contact us today for a free consultation and let’s grow your business
                                            together! </p>

                                        <div class="cursor-btn btn_wrapper">
                                            <a class="btn-item wc-btn-primary btn-hover" href="/about"><span></span>
                                                Explore Us <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div>
                                        <figure>
                                            <div class="img-anim"> <img src="/img/office/IMG_6555.PNG"
                                                    alt="About Image" data-speed="0.3"> </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About area end -->


                <!-- Service area start -->
                <section class="service__area pt-80 pb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="sec-title-wrapper wrap">
                                    <h2 class="sec-sub-title title-anim">service</h2>
                                    <h3 class="sec-title title-anim">Solution we <br>provide</h3>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-5">
                                <div class="service__top-text text-anim">
                                    <p> As we look towards the future, we are excited to continue pushing boundaries,
                                        exploring new technologies, and expanding our capabilities to meet the
                                        ever-changing needs of the digital world. With our passion, expertise, and
                                        client-centric approach.</p>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3">
                                <div class="service__top-btn">
                                    <div class="btn_wrapper">
                                        <a href="/services" class="btn-item wc-btn-secondary btn-hover"><span></span>
                                            View <br>all services <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service__list-wrapper">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                                    <div class="service__img-wrapper">
                                        <img src="/img/service/1.jpg" alt="Service Image"
                                            class="service__img img-1 active" />
                                        <img src="/img/service/2.jpg" alt="Service Image"
                                            class="service__img img-2" />
                                        <img src="/img/service/3.jpg" alt="Service Image"
                                            class="service__img img-3" />
                                        <img src="/img/service/4.jpg" alt="Service Image"
                                            class="service__img img-4" />

                                        <span class="shape-box-1 current"></span>
                                        <span class="shape-box-2"></span>
                                        <span class="shape-box-3"></span>
                                        <span class="shape-box-4"></span>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                                    <div class="service__list">
                                        {{-- <a href="/services"> --}}
                                        <div class="service__item animation_home1_service" data-service="1">
                                            <div class="service__number"><span>01</span></div>
                                            <div class="service__title-wrapper">
                                                <h4 class="service__title">
                                                    <a href="/services" class="text-gray2">
                                                        Web Solutions
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="service__text">
                                                <p> At ABC Designs, we create engaging, interactive web solutions
                                                    that captivate users and elevate brands, helping you thrive in
                                                    today’s digital world. </p>
                                                <ul class="mt-2 d-flex gap-2 flex-wrap">
                                                    <li>
                                                        <a href="/web-solutions/interactive-solutions"
                                                            class="border rounded-pill cus-url-btn fade_left">Business Website Design & Development</a>
                                                    </li>
                                                    <li>
                                                        <a href="/web-solutions/ecommerce-development"
                                                            class="border rounded-pill cus-url-btn fade_left">Custom Website Development</a>
                                                    </li>
                                                    <li>
                                                        <a href="/web-solutions/api-development-and-integration"
                                                            class="border rounded-pill cus-url-btn fade_left">E-commerce Website Development</a>
                                                    </li>
                                                    <li>
                                                        <a href="/web-solutions/website-maintenance-and-support"
                                                            class="border rounded-pill cus-url-btn fade_left">Website Redesign</a>
                                                    </li>
                                                    <li>
                                                        <a href="/web-solutions/custom-web-development"
                                                            class="border rounded-pill cus-url-btn fade_left">API Development & Integration</a>
                                                    </li>
                                                    <li>
                                                        <a href="/web-solutions/custom-web-development"
                                                            class="border rounded-pill cus-url-btn fade_left">Website Maintenance & Support</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="service__link">
                                                <a href="/services" class="text-gray2">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- </a> --}}
                                        <a href="/services">
                                            <div class="service__item  animation_home1_service" data-service="2">
                                                <div class="service__number"><span>02</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">
                                                        <a href="#" class="text-gray2">
                                                            App Design & Development
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> At ABC Designs, we craft intuitive UI/UX designs that enhance
                                                        user experiences and drive engagement, helping your brand stand
                                                        out in the digital world. </p>
                                                    <ul class="mt-2 d-flex gap-2 flex-wrap">
                                                        <li>
                                                            <a href="/ui-uxdesign/ui-design"
                                                                class="border rounded-pill cus-url-btn fade_left">Mobile App UI/UX Design</a>
                                                        </li>
                                                        <li>
                                                            <a href="/ui-uxdesign/ux-experience"
                                                                class="border rounded-pill cus-url-btn fade_left">Android App Development</a>
                                                        </li>
                                                        <li>
                                                            <a href="/ui-uxdesign/ux-audit"
                                                                class="border rounded-pill cus-url-btn fade_left">iOS App Development</a>
                                                        </li>
                                                        <li>
                                                            <a href="/ui-uxdesign/ux-audit"
                                                                class="border rounded-pill cus-url-btn fade_left">Web App Development</a>
                                                        </li>
                                                        <li>
                                                            <a href="/ui-uxdesign/ux-audit"
                                                                class="border rounded-pill cus-url-btn fade_left">App Maintenance & Support</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="service__link">
                                                    <a href="#" class="text-gray2">
                                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/services">
                                            <div class="service__item  animation_home1_service" data-service="3">
                                                <div class="service__number"><span>03</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">
                                                        <a href="#" class="text-gray2">
                                                            UI/UX Design
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> At ABC Designs, we offer result-driven digital marketing
                                                        services that boost your online presence, engage audiences, and
                                                        drive business growth. </p>
                                                    {{-- <ul class="mt-2 d-flex gap-2 flex-wrap">
                                                        <li>
                                                            <a href="/digital-marketing/search-engine-optimization"
                                                                class="border rounded-pill cus-url-btn fade_left">SEO
                                                                Service</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/search-engine-marketing"
                                                                class="border rounded-pill cus-url-btn fade_left">SEM
                                                                Service</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/social-media"
                                                                class="border rounded-pill cus-url-btn fade_left">Social
                                                                Media</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/content-writing"
                                                                class="border rounded-pill cus-url-btn fade_left">Content
                                                                Writing</a>
                                                        </li>
                                                    </ul> --}}
                                                </div>
                                                <div class="service__link">
                                                    <a href="#" class="text-gray2">
                                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/services">
                                            <div class="service__item  animation_home1_service" data-service="4">
                                                <div class="service__number"><span>04</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">
                                                        <a href="#" class="text-gray2">Digital Marketing Services</a>
                                                    </h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> At ABC Designs, we offer creative concept design, branding
                                                        solutions, social media post designs, and dynamic animations to
                                                        elevate your brand. </p>
                                                    <ul class="mt-2 d-flex gap-2 flex-wrap">
                                                        <li>
                                                            <a href="/concept-design/branding-solutions"
                                                                class="border rounded-pill cus-url-btn fade_left">Search Engine Optimization (SEO)</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/social-media-posts-design"
                                                                class="border rounded-pill cus-url-btn fade_left">Search Engine Marketing (Google Ads)</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/design-and-animation"
                                                                class="border rounded-pill cus-url-btn fade_left">Performance Marketing (Meta Ads)</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/design-and-animation"
                                                                class="border rounded-pill cus-url-btn fade_left">Content Marketing & Writing</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="service__link">
                                                    <a href="#" class="text-gray2">
                                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/services">
                                            <div class="service__item  animation_home1_service" data-service="4">
                                                <div class="service__number"><span>05</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">
                                                        <a href="#" class="text-gray2">Branding & Creative Design</a>
                                                    </h4>
                                                </div>
                                                <div class="service__text">
                                                    <p> At ABC Designs, we offer creative concept design, branding
                                                        solutions, social media post designs, and dynamic animations to
                                                        elevate your brand. </p>
                                                    <ul class="mt-2 d-flex gap-2 flex-wrap">
                                                        <li>
                                                            <a href="/concept-design/branding-solutions"
                                                                class="border rounded-pill cus-url-btn fade_left">Branding Solutions</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/social-media-posts-design"
                                                                class="border rounded-pill cus-url-btn fade_left">Logo Design</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/design-and-animation"
                                                                class="border rounded-pill cus-url-btn fade_left">Social Media Creatives</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/design-and-animation"
                                                                class="border rounded-pill cus-url-btn fade_left">Design & Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="/digital-marketing/design-and-animation"
                                                                class="border rounded-pill cus-url-btn fade_left">Marketing Creatives</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="service__link">
                                                    <a href="#" class="text-gray2">
                                                        <p><i class="fa-solid fa-arrow-right"></i></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service area end -->


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


                <!-- Workflow area start -->
                <section class="workflow__area">
                    <div class="container g-0 pt-80 pb-80">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">Workflow</h2>
                                    <h3 class="sec-title title-anim">How we work</h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="swiper workflow__slider ">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 01</h4>
                                            <h5 class="workflow__number">01</h5>
                                            <h6 class="workflow__title">Planning & Sketch</h6>
                                            <p>Having these the marketplace to your business</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 02</h4>
                                            <h5 class="workflow__number">02</h5>
                                            <h6 class="workflow__title">Development</h6>
                                            <p>Creating brand identities for the digital experiences</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 03</h4>
                                            <h5 class="workflow__number">03</h5>
                                            <h6 class="workflow__title">User Testing</h6>
                                            <p>We look forward to engage with beyond the conventional</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 04</h4>
                                            <h5 class="workflow__number">04</h5>
                                            <h6 class="workflow__title">Deploying</h6>
                                            <p>We look forward to engage with beyond the conventional</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 05</h4>
                                            <h5 class="workflow__number">05</h5>
                                            <h6 class="workflow__title">Monitoring</h6>
                                            <p>We look forward to engage with beyond the conventional</p>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Workflow area end -->


                <!-- Portfolio area start -->
                {{-- <section class="portfolio__area pb-140">
                    <div class="container">
                        <div class="row top_row">
                            <h2 class="portfolio__text">work</h2>
                            <div class="portfolio__list-1">
                                <div class="portfolio__item">
                                    <a href="/works"><img class="mover" src="/img/portfolio/1.jpg"
                                            alt="Portfolio Image"></a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Bharat Inclusion Summit </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>
                                <div class="portfolio__item">
                                    <a href="/works"><img src="/img/portfolio/2.jpg" alt="Portfolio Image"></a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Experience Tetris </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>
                                <div class="portfolio__item">
                                    <a href="/works"><img src="/img/portfolio/healthconcept_app.jpg"
                                            alt="Portfolio Image"></a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Health Concept </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>
                                <div class="portfolio__item">
                                    <a href="/works">
                                        <!--<img src="/imgs/portfolio/1/4.jpg" alt="Portfolio Image">-->
                                        <video class="w-100" id="video_thumb" autoplay loop muted>
                                            <source src="/img/portfolio/10.mp4" type="video/mp4">
                                            <source src="/img/portfolio/10.ogg" type="video/ogg">
                                            Your browser does not support HTML5 video.
                                        </video>
                                    </a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Fully Faltoo NFT MTV 2022 </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>
                                <div class="portfolio__item">
                                    <a href="/works"><img src="/img/portfolio/16.jpg" alt="Portfolio Image"></a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Swiggy Emailers </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>
                                <div class="portfolio__item">
                                    <a href="/works">
                                        <!--<img src="/imgs/portfolio/1/4.jpg" alt="Portfolio Image">-->
                                        <video class="w-100" id="video_thumb" autoplay loop muted>
                                            <source src="/img/portfolio/12.mp4" type="video/mp4">
                                            <source src="/img/portfolio/12.ogg" type="video/ogg">
                                            Your browser does not support HTML5 video.
                                        </video>
                                    </a>
                                    <div class="portfolio__info">
                                        <h3 class="portfolio__title"> Cummins Virtual Factor 2022 </h3>
                                        <p>02 May 2021</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row row_bottom">
                            <div class="col-xxl-12">
                                <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
                                    <a class="wc-btn-secondary btn-hover btn-item" href="/works"><span></span>View
                                        <br>all projects <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="portfolio__area pt-80 pb-80">
                    <div class="container">
                        <div class="row flex-items-center">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="sec-title-wrapper wrap">
                                    <h2 class="sec-title title-anim text-white fs-1">Work</h2>
                                    {{-- <h3 class="sec-title title-anim">Solution we <br>provide</h3> --}}
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-5">
                                <div class="service__top-text text-anim">
                                    <p> As we look towards the future, we are excited to continue pushing boundaries,
                                        exploring new technologies, and expanding our capabilities to meet the
                                        ever-changing needs of the digital world. With our passion, expertise, and
                                        client-centric approach.</p>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3">
                                <div class="service__top-btn">
                                    <div class="btn_wrapper">
                                        <a href="/services" class="btn-item wc-btn-secondary btn-hover"><span></span>
                                            View <br>all services <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add this section where you want the gallery -->
                        <section class="circular-gallery-section" id="circularGallerySection">
                            <div class="circular-gallery-container">

                                <!-- Gallery Scene -->
                                <div class="circular-gallery-scene" id="galleryScene">
                                    <div class="circular-gallery-assembly" id="galleryAssembly">
                                        <!-- Articles will be dynamically inserted here -->
                                    </div>
                                </div>

                                <!-- Navigation Controls -->
                                <div class="circular-gallery-controls">
                                    <button class="circular-gallery-btn circular-gallery-btn-prev" id="galleryPrev"
                                        aria-label="Previous">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </button>
                                    <div class="circular-gallery-counter">
                                        <span id="currentIndex">1</span> / <span id="totalCount">18</span>
                                    </div>
                                    <button class="circular-gallery-btn circular-gallery-btn-next" id="galleryNext"
                                        aria-label="Next">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </section>

                </section>

                <!-- Portfolio area end -->


                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container g-0 pt-80 pb-80">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-sub-title title-anim">NATIONAL & INTERNATIONAL BRANDS</h2>
                                    <h3 class="sec-title title-anim">We are happy to work with global <br> largest
                                        brands</h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="d-none loadr text-center"> <img src="/img/loading_2.gif" width="40px"
                                        class="img-fluid" /> </div>
                                <div class="brand__list" id="home_client_list">
                                    <!--
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/1.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/2.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/3.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/4.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/5.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/6.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/3.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/4.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/5.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/6.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/1.png" alt="Brand Logo">
      </div>
      <div class="brand__item fade_bottom">
       <img src="/imgs/brand/2.png" alt="Brand Logo">
      </div>
      -->
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
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="faq__content px-0 pt-0">
                                    <h2 class="faq__title title-anim">Frequently Asked Questions</h2>
                                    <div class="faq__list">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        What types of businesses can benefit from interactive solutions?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Businesses across all industries can benefit from interactive
                                                            solutions, including e-commerce, education, healthcare, and
                                                            entertainment. Any brand looking to enhance user engagement
                                                            and experience can leverage our services. </p>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="true" aria-controls="collapseTwo">
                                                        How long does it take to develop an interactive application?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p> The development timeline for an interactive application
                                                            depends on its complexity and specific requirements. We work
                                                            closely with clients to establish timelines that meet their
                                                            needs while ensuring quality. </p>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="true" aria-controls="collapseThree">
                                                        What is the cost of your interactive services?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p> The cost of our interactive services varies based on project
                                                            scope and requirements. We offer competitive pricing
                                                            tailored to deliver maximum value for your investment. </p>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                        </div> <!-- accordion -->
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
                                    <h2 class="mt-3">Do you have more questions?</h2>
                                    <div
                                        class="mt-3 w-100 row height-100 d-flex justify-content-center align-items-center">
                                        <div class="col-md-10">
                                            <div class="subscribe-btn position-relative">
                                                <input class="form-control" placeholder="Your email address">
                                                <button class="btn position-absolute">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FAQ area end -->
                <section class="verified-section pb-80">
                    <div class="container text-center">

                        <!-- Title -->
                        <h2 class="verified-title mb-5">
                            VERIFIED <span>BY</span>
                        </h2>

                        <!-- Logos -->
                        <div class="row justify-content-center align-items-center g-4">

                            <div class="col-6 col-sm-4 col-md-2">
                                <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Google Partner"
                                    class="verified-logo img-fluid">
                            </div>

                            <div class="col-6 col-sm-4 col-md-2">
                                <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Meta Business Partner"
                                    class="verified-logo img-fluid">
                            </div>

                            <div class="col-6 col-sm-4 col-md-2">
                                <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Clutch Agency" class="verified-logo img-fluid">
                            </div>

                            <div class="col-6 col-sm-4 col-md-2">
                                <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Top Digital Marketing Company"
                                    class="verified-logo img-fluid">
                            </div>

                            <div class="col-6 col-sm-4 col-md-2">
                                <img src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Sortlist Verified Agency"
                                    class="verified-logo img-fluid">
                            </div>

                        </div>
                    </div>
                </section>

                {{-- @include('frontend.layout.cta') --}}

            </main>

            @include('frontend.layout.footer')
        </div>
    </div>




    <script src="/js/clients.js"></script>
