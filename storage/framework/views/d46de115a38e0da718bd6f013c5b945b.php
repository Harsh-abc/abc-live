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

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="main-service-page">

                <!-- Service area start -->
                <section class="service__area-2 service-v3">
                    <div class="container">
                        
                        <div class="hero__content animation__hero_one">
                            <div class="hero__title-wrapper row">
                                <div class="col-7 d-flex flex-column justify-content-center align-items-start">
                                    <h1 class="hero__title animation__word_come mt-0">Elevate Your Online Presence with Stunning Web Experiences</h1>
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

                <section class="service__area-3 service-v3 pb-80">
                    <div class="container">
                        <div class="row pt-4">
                            <div class="col-xxl-12">
                                <div class="service__list-2 animation__service-2">
                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Professional Website Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3><a href="/website-design-and-development"
                                                    class="service__title-2">Website Design & Development</a></h3>

                                            <p> In today's digital world, the need for engaging and interactive
                                                experiences has never been greater. At ABC Designs, we specialize in
                                                providing tailored <b>interactive solutions</b> that captivate users and
                                                elevate brands. </p>

                                            <a href="/website-design-and-development" class="service_view"> View
                                                Details </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Custom Business Website Design-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3><a href="/app-design-and-development" class="service__title-2">App
                                                    Design & Development</a></h3>

                                            <p> We are passionate about creating exceptional web experiences that make a
                                                lasting impact. Our web design and development services combine
                                                cutting-edge technology, creativity, and user-centric design principles
                                                to build websites that not only look stunning but also drive results.
                                            </p>

                                            <a href="/app-design-and-development" class="service_view"> View
                                                Details </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Ecommerce Website Design & Development-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3><a href="/ui-ux-design" class="service__title-2">UI/UX Design</a></h3>

                                            <p> We specialize in creating robust and user-friendly e-commerce solutions
                                                that empower businesses to thrive in the digital marketplace. Our
                                                e-commerce development services combine cutting-edge technology,
                                                strategic planning, and a deep understanding of user behavior to build
                                                seamless and engaging online shopping experiences. </p>

                                            <a href="/ui-ux-design" class="service_view"> View
                                                Details </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Redesign & Modernization-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3 class=""><a href="/digital-marketing-services"
                                                    class="service__title-3">Digital Marketing Services</a></h3>
                                            <p> In today's digital age, social media has become an integral part of any
                                                successful marketing strategy. We specialize in harnessing the power of
                                                social media to help businesses build strong online communities, drive
                                                engagement, and amplify their brand influence. Our social media services
                                                encompass strategic planning, content creation, community management,
                                                and data-driven insights. </p>

                                            <a href="/digital-marketing-services" class="service_view"> View Details
                                            </a>
                                        </div>
                                    </div>

                                    <div class="service__item-2">
                                        <div>
                                            <img src="/img/icons/icon_Website Maintenance & Support-.webp"
                                                alt="Service Icon" class="w-75 h-75 obj-fit-contain mb-3">
                                            <h3 class=""><a href="/branding-and-creative-design"
                                                    class="service__title-2">Branding & Creative Design</a> </h3>
                                            <p> In the highly competitive digital landscape, having a strong online
                                                presence is essential for businesses to succeed. We specialize in Search
                                                Engine Optimization (SEO), a strategic approach that helps businesses
                                                improve their website's visibility in search engine results. </p>

                                            <a href="/branding-and-creative-design" class="service_view"> View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--
        <section class="service__area-3 service-v4 pb-150 d-none">
          <div class="container">
            <div class="row">
    <div class="col-xx-12">
     <div class="service__list-3">
      <div class="service__item-3 service_animation">
       <h3><a href="/services/interactive-solutions" class="service__title-3"> Interactive  <br />Solutions </a></h3>
       <div class="service__content-3">
        <p> <strong> We design to create, elevate and enhance brands & products. </strong> <br />
        In today's digital world, the need for engaging and interactive experiences has never been greater. At ABC Designs, we specialize in providing tailored <b>interactive solutions</b> that captivate users and elevate brands. Our approach combines cutting-edge technology with creative design to create experiences that not only attract attention but also foster lasting connections. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/interactive-solutions" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/1.jpg);"></div>
      </div>
     
      <div class="service__item-3 service_animation">
       <h3><a href="/services/webdesign-&-development" class="service__title-3"> Web Design & Development </a></h3>
       <div class="service__content-3">
        <p> <strong> Your website is the first step to your online business and we make it a lasting impression. </strong> <br />
        We are passionate about creating exceptional web experiences that make a lasting impact. Our web design and development services combine cutting-edge technology, creativity, and user-centric design principles to build websites that not only look stunning but also drive results.</p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/webdesign-&-development" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>

       <div class="service__hover-3" style="background-image: url(imgs/service/3/1.jpg);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3><a href="/services-detail" class="service__title-3 ">E-Commerce <br>Development</a></h3>
       <div class="service__content-3">
        <p> <strong> We offer you optimum solutions to run e-commerce shops successfully. </strong> <br />
        We specialize in creating robust and user-friendly e-commerce solutions that empower businesses to thrive in the digital marketplace. Our e-commerce development services combine cutting-edge technology, strategic planning, and a deep understanding of user behavior to build seamless and engaging online shopping experiences. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/ecommerce-development" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i> </a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/2.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services/social-media" class="service__title-3"> Social Media </a></h3>
       <div class="service__content-3">
        <p> <strong> Social media for us is not merely about creating a presence for your business online but building lasting relationships. </strong> <br />
        In today's digital age, social media has become an integral part of any successful marketing strategy. We specialize in harnessing the power of social media to help businesses build strong online communities, drive engagement, and amplify their brand influence. Our social media services encompass strategic planning, content creation, community management, and data-driven insights. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3 ">
        <div class="btn_wrapper">
         <a href="/services/social-media" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i> </a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/3.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services/search-engine-optimization" class="service__title-3"> SEO <small>( Search Engine Optimization )</small>  </a> </h3>
       <div class="service__content-3">
        <p> <strong> We are here to understand your business audience to drive more traffic to your websites & get real results. </strong> <br />
        In the highly competitive digital landscape, having a strong online presence is essential for businesses to succeed. We specialize in Search Engine Optimization (SEO), a strategic approach that helps businesses improve their website's visibility in search engine results. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/search-engine-optimization" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services/search-engine-marketing" class="service__title-3"> SEM <small>( Search Engine Marketing )</small>  </a> </h3>
       <div class="service__content-3">
        <p> <strong> We are here to understand your business audience to drive more traffic to your websites & get real results. </strong> <br />
        In the highly competitive digital landscape, having a strong online presence is essential for businesses to succeed. We specialize in Search Engine Optimization (SEO), a strategic approach that helps businesses improve their website's visibility in search engine results. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/search-engine-marketing" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services/content-writing" class="service__title-3"> Content <br /> Writing   </a> </h3>
       <div class="service__content-3">
        <p> <strong> We are here to understand your business audience to drive more traffic to your websites & get real results. </strong> <br />
        In the highly competitive digital landscape, having a strong online presence is essential for businesses to succeed. We specialize in Search Engine Optimization (SEO), a strategic approach that helps businesses improve their website's visibility in search engine results. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/content-writing" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>
      <!--
      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services-detail" class="service__title-3"> Email <br /> Marketing </a> </h3>
       <div class="service__content-3">
        <p> <strong> We are here to build best practice Email Marketing programs for your business. </strong> <br />
        In today's digital world, email marketing remains one of the most effective and efficient channels for businesses to engage with their audience, nurture leads, and drive conversions. We specialize in email marketing strategies that are tailored to the unique needs and goals of our clients.</p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/email-marketing" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services-detail" class="service__title-3"> Mobile <br /> Technologies </a> </h3>
       <div class="service__content-3">
        <p> <strong> We use Mobile technologies to increase productivity & profitability of your Business. </strong> <br />
        In today's fast-paced and mobile-centric world, businesses need to adapt and leverage mobile technologies to stay ahead of the competition. We specialize in developing innovative mobile solutions that enable businesses to connect with their audience, streamline operations, and drive growth. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/mobile-technologies" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services-detail" class="service__title-3"> Online <br /> Marketing </a> </h3>
       <div class="service__content-3">
        <p> <strong> We make you a powerful brand. </strong> <br />
        In today's digital age, online marketing has become an indispensable tool for businesses to reach their target audience, drive brand awareness, and accelerate growth. We specialize in online marketing strategies that deliver measurable results and maximize return on investment (ROI).</p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/online-marketing" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>
      -- >
      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services/api-development-and-integration" class="service__title-3"> API Development <br /> and  Integration </a> </h3>
       <div class="service__content-3">
        <p> <strong> We produce the most Creative Solutions </strong> <br />
        We specialize in graphic designing, an art form that combines creativity, technical expertise, and strategic thinking to create visually stunning and impactful designs. Our graphic design services encompass a wide range of visual communication solutions, including branding, logo design, print design, digital graphics, and more. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/api-development-and-integration" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>
      
      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services-detail" class="service__title-3"> Graphic <br /> Designing </a> </h3>
       <div class="service__content-3">
        <p> <strong> We produce the most Creative Solutions </strong> <br />
        We specialize in graphic designing, an art form that combines creativity, technical expertise, and strategic thinking to create visually stunning and impactful designs. Our graphic design services encompass a wide range of visual communication solutions, including branding, logo design, print design, digital graphics, and more. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/graphic-designing" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>

      <div class="service__item-3 service_animation">
       <h3 class=""><a href="/services-detail" class="service__title-3"> Print Media </a> </h3>
       <div class="service__content-3">
        <p> <strong> We do Print Media - not just Newspapers & Magazines. </strong> <br />
        Print media continues to be a powerful and tangible medium for businesses to connect with their audience in a meaningful and lasting way. At [Company Name], we specialize in print media solutions that combine creative design, strategic messaging, and high-quality production. From brochures and magazines to packaging and signage, our print media services are designed to captivate audiences, communicate brand value, and leave a lasting impression. </p>
        <ul class="">
         <li>+ Logo Design</li>
         <li>+ Advertisement</li>
         <li>+ Promotion</li>
        </ul>
       </div>
       <div class="service__btn-3">
        <div class="btn_wrapper">
         <a href="/services/print-media" class="wc-btn-black btn-hover btn-item"><span></span> Details <i class="fa-solid fa-arrow-right"></i></a>
        </div>
       </div>
       <div class="service__hover-3" style="background-image: url(imgs/service/3/4.png);"></div>
      </div>
      
      <div class="service3__img-wrap"> <div class="service3__img"></div> </div>
     </div>
    </div>
            </div>
          </div>
        </section>
  -->
                <!-- Service area end -->



                <!-- CTA area start -->
                
                <!-- CTA area end -->

            </main>

            <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/services/index.blade.php ENDPATH**/ ?>