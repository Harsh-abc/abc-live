<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="">
    <?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========== LOADER - Place immediately after body ========== -->
    <div id="page-loader" class="loader-wrapper">
        <div class="loader-content">
            <!-- Replace with your company logo -->
            <div class="logo-container">
                <img src="/img/abc-loader.webp" alt="Company Logo" class="loader-logo">
            </div>

            <!-- Spinner animation around/below logo -->
            <div class="spinner"></div>

            

            <!-- Optional: Progress bar -->
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>
    <!-- ========== END LOADER ========== -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="career-page">

                <section class="service__area-2 service-v3 pb-80">
                    <div class="container">
                        
                        <div class="hero__content animation__hero_one">
                            <div class="hero__title-wrapper row">
                                <div class="col-7 d-flex flex-column justify-content-center align-items-start">
                                    <h1 class="hero__title animation__word_come mt-0">Join our team & let's work together</h1>
                                    <div class="text-anim w-100">
                                        <p class="mt-3 w-100 hero-description">Unlock your digital potential with our comprehensive range of digital agency
                                        services, tailored to drive growth and success for your business.</p>
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
                                            <span id="captchaErr" class="error-message"><?php //echo $captchaErr;
                                            ?></span>
                                        </div>
                                        <div class="form-group submit">
                                            <input type="submit" id="submitBtns" class="btn btn-dark w-100"
                                                value="Submit">
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
                </section>


                <!-- Career gallery start -->
                <section class="career__gallery">
                    <div class="container g-0 pt-80 pb-80">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <ul>
                                    <li>Future</li>
                                    <li>Community</li>
                                    <li>Honor</li>
                                </ul>
                                <p> At ABC Designs, we are passionate about creating exceptional digital experiences
                                    that drive success
                                    for our clients. If you are looking for a dynamic and innovative work environment
                                    where you can
                                    unleash your creativity, collaborate with talented professionals, and make a real
                                    impact, then you've
                                    come to the right place. </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="career__gallery-img"> <img src="/img/office/IMG_6555.webp" alt="Career" />
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="career__gallery-img img-anim"> <img src="/img/office/IMG_6559.webp"
                                        alt="Career" data-speed="auto" /> </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="career__gallery-img"> <img src="/img/office/IMG_6560.webp" alt="Career" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Career gallery end -->

                <section class="marquee-container-wrapper">
                    <div class="pause-indicator" id="pauseIndicator">Paused</div>

                    <!-- Marquee Left to Right -->
                    <div class="marquee-section">
                        <div class="marquee-wrapper">
                            <div class="marquee-container" id="marquee-ltr">
                                <div class="marquee-content">
                                    <div class="marquee-item">
                                        <img src="/img/office/001.webp"  class="w-100 h-100 object-fit-contain" alt="Image 1">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/002.webp"  class="w-100 h-100 object-fit-contain" alt="Image 2">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/003.webp"  class="w-100 h-100 object-fit-contain" alt="Image 3">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/004.webp"  class="w-100 h-100 object-fit-contain" alt="Image 4">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/005.webp"  class="w-100 h-100 object-fit-contain" alt="Image 5">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/006.webp"  class="w-100 h-100 object-fit-contain" alt="Image 6">
                                    </div>
                                     <div class="marquee-item">
                                        <img src="/img/office/007.webp"  class="w-100 h-100 object-fit-contain" alt="Image 7">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/008.webp"  class="w-100 h-100 object-fit-contain" alt="Image 8">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/009.webp"  class="w-100 h-100 object-fit-contain" alt="Image 9">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marquee Right to Left -->
                    <div class="marquee-section">
                        <div class="marquee-wrapper">
                            <div class="marquee-container" id="marquee-rtl">
                                <div class="marquee-content">
                                    <div class="marquee-item">
                                        <img src="/img/office/010.webp" class="w-100 h-100 object-fit-contain"  alt="Image 10">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/011.webp" class="w-100 h-100 object-fit-contain"  alt="Image 11">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/012.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/013.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/014.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/015.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/016.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/017.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                    <div class="marquee-item">
                                        <img src="/img/office/018.webp" class="w-100 h-100 object-fit-contain"  alt="Image 12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Career area start -->
                <section class="job__area pt-130 pb-150" id="job_list">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title title-anim">We're Currently hiring</h2>
                                </div>
                            </div>
                            
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 mt-5">
                                <div class="faq__content px-0 pt-0">
                                    <div class="faq__list">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="job__item w-100">
                                                            <p class="job__no">01</p>
                                                            <h3 class="job__title">Digital Marketing</h3>
                                                            <h4 class="job__open">(02 Open Roles)</h4>
                                                            <div class="job__link"><span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Businesses across all industries can benefit from interactive
                                                            solutions, including e-commerce, education, healthcare, and
                                                            entertainment. Any brand looking to enhance user engagement
                                                            and experience can leverage our services. </p>

                                                        <ul>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                        </ul>

                                                        <div class="my-3">
                                                            <a href="#contact-form"
                                                                class="blog__btn border rounded-pill cus-url-btn me-4">
                                                                Read More <span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="true" aria-controls="collapseTwo">
                                                        <div class="job__item w-100">
                                                            <p class="job__no">02</p>
                                                            <h3 class="job__title">Frontend</h3>
                                                            <h4 class="job__open">(02 Open Roles)</h4>
                                                            <div class="job__link"><span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Businesses across all industries can benefit from interactive
                                                            solutions, including e-commerce, education, healthcare, and
                                                            entertainment. Any brand looking to enhance user engagement
                                                            and experience can leverage our services. </p>

                                                        <ul>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                        </ul>

                                                        <div class="my-3">
                                                            <a href="#contact-form"
                                                                class="blog__btn border rounded-pill cus-url-btn me-4">
                                                                Read More <span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="true" aria-controls="collapseThree">
                                                       <div class="job__item w-100">
                                                            <p class="job__no">03</p>
                                                            <h3 class="job__title">Content Writing</h3>
                                                            <h4 class="job__open">(02 Open Roles)</h4>
                                                            <div class="job__link"><span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>Businesses across all industries can benefit from interactive
                                                            solutions, including e-commerce, education, healthcare, and
                                                            entertainment. Any brand looking to enhance user engagement
                                                            and experience can leverage our services. </p>

                                                        <ul>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                            <li> Strong understanding of digital marketing concepts and
                                                                best practices. </li>
                                                            <li> Experience with SEO, SEM, social media marketing, email
                                                                marketing, and content
                                                                marketing. </li>
                                                            <li> Proficiency in using digital marketing tools and
                                                                platforms such as Google Analytics,
                                                                Google Ads, Facebook Ads Manager, and email marketing
                                                                software. </li>
                                                            <li> Ability to analyze data and metrics to measure the
                                                                effectiveness of campaigns and make
                                                                data-driven decisions. </li>
                                                        </ul>

                                                        <div class="my-3">
                                                            <a href="#contact-form"
                                                                class="blog__btn border rounded-pill cus-url-btn me-4">
                                                                Read More <span><i
                                                                        class="fa-solid fa-arrow-right"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- -->
                                        </div> <!-- accordion -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Career area end -->


                <!-- Career benifit area start -->
                <!-- <section class="career__benefits">
          <div class="container g-0 pt-140">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-7 col-xl-7 col-lg-7">
                <ul class="career__benefits-list">
                  <li>Vacation & Paid <br>Time Off</li>
                  <li>Work-life <br> Integration</li>
                  <li>Maternity/Paternity <br>Benefits</li>
                  <li>Personal <br> Career Growth</li>
                  <li>Learning & <br>Development</li>
                  <li>Healthy <br> Food & Snacks</li>
                </ul>
              </div>
              <div class="col-xxl-5 col-xl-5 col-lg-5">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">Global Perks & Benefits</h2>
                  <p> We believe that work should be both rewarding and enjoyable. That's why we offer competitive
                    compensation packages, flexible work arrangements, and a supportive work-life balance. We celebrate
                    our achievements together, whether it's through team outings, social events, or simply taking a
                    moment to acknowledge each other's accomplishments. </p>
                </div>
              </div>
            </div>
          </div>
        </section> -->
                <!-- Career benifit area end -->




                <!-- Career benifit area start -->
                <section class="career__benefits">
                    <div class="container g-0 pb-90">
                        <span class="line-3"></span>

                        <div class="row justify-content-center contact__btm" id="contact-form">
                            <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-9">
                                <div class="sec-title-wrapper text-center">
                                    <h2 class="sec-title-2 animation__char_come">Wanna work with us?</h2>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 pt-100">
                                <div class="contact__form contact_form">
                                    <form name="contactform" method="post" action="/career-add"
                                        enctype="multipart/form-data" id="contactform" onsubmit="loader_load()">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="name" name="name" placeholder="Name"
                                                    value="<?php echo e(old('name')); ?>" required="required">
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
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                

                                                <input type="number"
                                                    class="form-control <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="contact" name="contact" placeholder="Phone Number"
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
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                <input type="email"
                                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="email" name="email" placeholder="Email Address"
                                                    value="<?php echo e(old('email')); ?>" required="required">
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
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                <input type="location"
                                                    class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="location" name="location" placeholder="Location"
                                                    value="<?php echo e(old('location')); ?>" required="required">
                                                <?php $__errorArgs = ['location'];
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
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                <select class="form-select" name="job_role">
                                                    <option selected> Select Job Role </option>
                                                    <option value="UI/UX Designer"> UI/UX Designer </option>
                                                    <option value="Frontend Developer">Frontend Developer </option>
                                                    <option value="Backend Developer"> Backend Developer </option>
                                                    <option value="App Developer"> App Developer </option>
                                                    <option value="Graphic Designer"> Graphic Designer </option>
                                                    <option value="Other"> Other </option>
                                                </select>
                                                <?php $__errorArgs = ['job_role'];
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
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-12 form-group fileUpload required">
                                                <input name="attachment" type="file" id="attachment"
                                                    name="attachment" class="inputfile inputfile-3 upload_file"
                                                    required="required" accept="application/pdf" />
                                                <label for="attachment"><img src="/img/icons/upload.png"
                                                        alt="image"><span>Attach Your
                                                        CV&hellip;</span></label>
                                                <?php $__errorArgs = ['attachment'];
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
                                            </div>

                                            <div class="col-12 form-group required">
                                                <textarea type="textbox" class="form-control" id="message" name="message" placeholder="Message..." required></textarea>
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
                                            </div>

                                            <div class="col-12 form-group required">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
                                                <span id="captchaErr" class="error-message"><?php //echo $captchaErr;
                                                ?></span>
                                            </div>
                                            <div class="col-12 form-group required">
                                                <!-- <input type="submit" name="submit" class="btn btn-dark w-100" value="Submit"> -->
                                                <div class="btn_wrapper">
                                                    <button class="wc-btn-primary btn-hover btn-item"
                                                        id="submit"><span></span> Send <br>Messages
                                                        <i class="fa-solid fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Career benifit area end -->


            </main>


            <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

    <script src="/js/custom-file-input.js"></script>
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/career/index.blade.php ENDPATH**/ ?>