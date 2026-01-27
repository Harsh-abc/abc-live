<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="">
    
    <?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========== LOADER - Place immediately after body ========== -->
    <div id="page-loader" class="loader-wrapper">
        <div class="loader-content">
            <!-- Replace with your company logo -->
            <div class="logo-container">
                <img src="https://abcdesigns.in/img/logo/logo_light.png" alt="Company Logo" class="loader-logo">
            </div>

            <!-- Spinner animation around/below logo -->
            <div class="spinner"></div>

            <!-- Optional: Loading text -->
            <p class="loading-text">Loading<span class="dots"></span></p>

            <!-- Optional: Progress bar -->
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>
    <!-- ========== END LOADER ========== -->
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
            <main class="main-service-page">

                <!-- Service area start -->
                
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
                                                    <h1 class="hero__title animation__word_come mb-1">Branding &
                                                        Creative Design That Builds Strong, Memorable Brands</h1>
                                                    <div class="text-anim w-100">
                                                        <p class="mt-5 w-100 hero-description">We create impactful
                                                            branding and creative designs that help businesses stand
                                                            out, connect emotionally with their audience, and build
                                                            long-term brand recognition.</p>
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
                                                        <?php echo csrf_field(); ?>
                                                        <div class="form-row">
                                                            <div class="form-floating mb-3">
                                                                <input type="text"
                                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    id="name" name="name" placeholder="Name*"
                                                                    value="<?php echo e(old('name')); ?>">
                                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($message); ?></strong>
                                                                    </span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <label for="name">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row row d-flex ">
                                                            <div class="form-floating mb-3 col-md-6">
                                                                <input type="email"
                                                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    id="email" name="email" placeholder="Email"
                                                                    value="<?php echo e(old('email')); ?>">
                                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($message); ?></strong>
                                                                    </span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <label for="email">Email*</label>
                                                            </div>
                                                            <div class="form-floating mb-3 col-md-6">
                                                                <input type="number" minlength="10" maxlength="12"
                                                                    class="form-control <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    id="contact" name="contact" placeholder="Contact*"
                                                                    value="<?php echo e(old('contact')); ?>" required="required">
                                                                <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($message); ?></strong>
                                                                    </span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                                <textarea type="textbox" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="message" name="message"
                                                                    placeholder="Message*" value="" required><?php echo e(old('message')); ?></textarea>
                                                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($message); ?></strong>
                                                                    </span>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                <a href="/branding/branding-solutions" class="service__title-2">
                                                    Branding Solutions
                                                </a>
                                            </h3>

                                            <p>
                                                Our branding solutions help businesses define a clear identity and
                                                build a strong market presence. <br>
                                                We focus on brand strategy, visual identity, and consistent
                                                communication to create recognizable, trustworthy brands aligned
                                                with your values and long-term goals.
                                            </p>

                                            <a href="/branding/branding-solutions" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/branding/logo-design" class="service__title-2">
                                                    Logo Design
                                                </a>
                                            </h3>

                                            <p>
                                                A logo is the foundation of your brand identity. Our logo design
                                                services focus on creating unique, memorable, and versatile logos. <br>
                                                We design logos that work seamlessly across digital platforms,
                                                print materials, and marketing campaigns.
                                            </p>

                                            <a href="/branding/logo-design" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/branding/social-media-creatives" class="service__title-2">
                                                    Social Media Creatives
                                                </a>
                                            </h3>

                                            <p>
                                                We design eye-catching social media creatives that boost engagement
                                                and strengthen brand presence across platforms. <br>
                                                From posts and stories to ads and banners, our designs stay
                                                consistent with your brand guidelines and campaign goals.
                                            </p>

                                            <a href="/branding/social-media-creatives" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/branding/design-animation" class="service__title-2">
                                                    Design & Animation
                                                </a>
                                            </h3>

                                            <p>
                                                Our design and animation services bring ideas to life through motion
                                                graphics, explainer videos, and animated visuals. <br>
                                                We create animations that simplify complex messages, enhance
                                                storytelling, and elevate brand communication.
                                            </p>

                                            <a href="/branding/design-animation" class="service_view">
                                                View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3>
                                                <a href="/branding/marketing-creatives" class="service__title-2">
                                                    Marketing Creatives
                                                </a>
                                            </h3>

                                            <p>
                                                We create high-impact marketing creatives designed to support
                                                digital campaigns, ads, and promotions. <br>
                                                From banners and ad creatives to promotional designs, our visuals
                                                are conversion-focused and optimized for multiple platforms.
                                            </p>

                                            <a href="/branding/marketing-creatives" class="service_view">
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
                                    <h3 class="sec-title title-anim">We Create Powerful Visuals Using Industry-Leading
                                        Design Tools
                                    </h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="serv_tech_list" id="">

                                    <!-- Adobe Photoshop -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/adobe.webp" title="Adobe Photoshop"
                                            alt="Adobe Photoshop" class="img-fluid w-50">
                                    </div>

                                    <!-- Adobe Illustrator -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/illustrator.webp" title="Adobe Illustrator"
                                            alt="Adobe Illustrator" class="img-fluid w-50">
                                    </div>

                                    <!-- Adobe InDesign -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/indesign.webp" title="Adobe InDesign"
                                            alt="Adobe InDesign" class="img-fluid w-50">
                                    </div>

                                    <!-- Figma -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/figma.webp" title="Figma" alt="Figma"
                                            class="img-fluid w-50">
                                    </div>

                                    <!-- Adobe After Effects -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/after-effects.webp" title="Adobe After Effects"
                                            alt="Adobe After Effects" class="img-fluid w-50">
                                    </div>

                                    <!-- Adobe Premiere Pro -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/premiere-pro.webp" title="Adobe Premiere Pro"
                                            alt="Adobe Premiere Pro" class="img-fluid w-50">
                                    </div>

                                    <!-- Blender -->
                                    <div class="brand__item fade_bottom">
                                        <img src="/img/technology/blender.webp" title="Blender" alt="Blender"
                                            class="img-fluid w-50">
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
                                                        What does branding and creative design include?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Our branding and creative design services include brand
                                                            identity
                                                            development, logo design, social media creatives, marketing
                                                            creatives, and animation to ensure a consistent and
                                                            impactful
                                                            brand presence.
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
                                                        Do you offer branding for startups and established businesses?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We work with startups, SMEs, and enterprises, tailoring
                                                            branding solutions based on business stage, target audience,
                                                            and long-term goals.
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
                                                        Can you redesign an existing brand or logo?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Absolutely. We provide brand refresh and logo redesign
                                                            services
                                                            to modernize visual identity while preserving brand
                                                            recognition
                                                            and consistency.
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
                                                        Do you follow brand guidelines while designing creatives?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. All creatives are designed strictly according to your
                                                            brand guidelines to ensure visual consistency across
                                                            platforms,
                                                            campaigns, and marketing materials.
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
                                                        Can you design creatives for digital ads and social media?
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. We design conversion-focused creatives for social media
                                                            ads,
                                                            digital campaigns, promotions, banners, and paid marketing
                                                            initiatives.
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
                                                        Do you provide animation and motion graphics?
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            Yes. Our design and animation services include explainer
                                                            videos,
                                                            motion graphics, animated creatives, and visual storytelling
                                                            assets to enhance brand communication.
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
                                                        Why choose ABC Designs for branding & creative design?
                                                    </button>
                                                </h2>
                                                <div id="collapseSeven" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>
                                                            ABC Designs blends strategic thinking, creative excellence,
                                                            and design expertise to deliver visually compelling branding
                                                            that builds trust, recognition, and long-term brand recall.
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
                                    <?php if(session('success')): ?>
                                        <p class="text-success mt-2"><?php echo e(session('success')); ?></p>
                                    <?php endif; ?>

                                    <h2 class="mt-3 text-center">Do you have more questions?</h2>
                                    <form id="subscribeForm" method="POST" action="<?php echo e(route('Subscribes.store')); ?>">
                                        <?php echo csrf_field(); ?>
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

                

            </main>

            <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <script src="/js/clients.js"></script>
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/services/branding_and_creative_design.blade.php ENDPATH**/ ?>