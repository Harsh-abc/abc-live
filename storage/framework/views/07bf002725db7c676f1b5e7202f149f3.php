<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
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
            <main class="our-work-page">

                <section class="service__area-2 service-v3">
                    <div class="container">
                        
                        <div class="hero__content animation__hero_one">
                            <div class="hero__title-wrapper row">
                                <div class="col-7 d-flex flex-column justify-content-center align-items-start">
                                    <h1 class="hero__title animation__word_come mt-0">Our Works</h1>
                                    <div class="text-anim w-100">
                                        <p class="mt-3 w-100 hero-description">Unlock your digital potential with our
                                            comprehensive range of digital agency
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

                <!-- Blog area start -->
                <section class="blog__area no-pb blog__animation">
                    <div class="container g-0 pt-60 pb-140">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="sec-title-wrapper pb-0">
                                    <h2 class="sec-sub-title">Wide range of successful digital and print projects.</h2>
                                    <h3 class="sec-title">NEW INSIGHT</h3>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <ul class="albumFilter text-center" id="work_menu">
                                    <!--
      <?php $url = Request::url();
      $split = [];
      $split = explode('/', $url);
      $cnt = count($split);
      if ($cnt >= 4) {
          $page = $split[3];
      } else {
          $page = '';
      } ?>
      <li> <a class="<?php if($page == 'work'): ?> active <?php endif; ?>" href="work"> All <span>50</span> </a> </li>
      <li> <a class="<?php if($page == 'work-web-design'): ?> active <?php endif; ?>" href="work-web-design"> UI Design & Development <span>08</span> </a> </li>
      <li> <a class="<?php if($page == 'work-interactive-solutions'): ?> active <?php endif; ?>" href="work-interactive-solutions"> Interactive Solutions <span>60</span> </a>  </li>
      <li> <a class="<?php if($page == 'work-branding'): ?> active <?php endif; ?>" href="work-branding"> Branding <span>25</span> </a> </li>
      <li> <a class="<?php if($page == 'work-web-development'): ?> active <?php endif; ?>" href="work-web-development"> APP Development <span>30</span> </a> </li>
      <li> <a class="<?php if($page == 'work-ecommerce'): ?> active <?php endif; ?>" href="work-ecommerce"> E-Commerce <span>10</span> </a> </li>
      <li> <a class="<?php if($page == 'work-digital-marketing'): ?> active <?php endif; ?>" href="work-digital-marketing"> Digital Marketing <span>03</span> </a>  </li>
      -->
                                </ul>
                            </div>
                        </div>
                        <div class="row work_listing" id="worklisting">
                            <!--
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/1.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/1.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Bharat Inclusion Summit </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/6.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/6.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Mariafe Artacho Del Solar</a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/5.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/5.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Micasa Admire Luxuries </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/8.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/8.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Julius Packiam </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/7.gif" alt="">
         <img class="image-box__item" src="/img/portfolio/7.gif" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Football Game </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/healthconcept_app.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/healthconcept_app.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> APP & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Health Concept </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/2.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/2.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> VIRTUAL REALITY </h4>
      <h5><a href="/work-detail" class="blog__title"> Experience Tetris </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/4.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/4.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> WEB DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> MP Interactive Screen GAME </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/3.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/3.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Sketcher Squad </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <video  id="video_thumb" autoplay loop muted>
          <source src="/img/portfolio/10.mp4" type="video/mp4">
          <source src="/img/portfolio/10.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
         </video>
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Fully Faltoo NFT MTV 2022 </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/9.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/9.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Playtorium </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/11.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/11.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Nasscom NISC 2022 </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/13.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/13.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Tiny Library 2023 - VolumeZero </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/14.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/14.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> India At Cannes 2023 </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <video  id="video_thumb" autoplay loop muted>
          <source src="/img/portfolio/12.mp4" type="video/mp4">
          <source src="/img/portfolio/12.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
         </video>
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
      <h5><a href="/work-detail" class="blog__title"> Cummins Virtual Factor 2022 </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/img/portfolio/15.jpg" alt="">
         <img class="image-box__item" src="/img/portfolio/15.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
      <h5><a href="/work-detail" class="blog__title"> Grace Turnkey Projects </a></h5>
     </article>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
     <article class="blog__item">
      <div class="blog__img-wrapper">
       <a href="/work-detail">
        <div class="img-box">
         <img class="image-box__item" src="/imgs/blog/1/3.jpg" alt="">
         <img class="image-box__item" src="/imgs/blog/1/3.jpg" alt="">
        </div>
       </a>
      </div>
      <h4 class="blog__meta"> MARKETING </h4>
      <h5><a href="/work-detail" class="blog__title"> Product Development </a></h5>
     </article>
    </div>
    -->
                        </div>
                    </div>
                </section>
                <!-- Blog area end -->

            </main>
            <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <script src="/js/work.js"></script>
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/work/index.blade.php ENDPATH**/ ?>