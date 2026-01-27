<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
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
      <main>

        <!-- Hero area start -->
        <section class="hero__about">
          <div class="container g-0">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="hero__about-content">
                  <h1 class="hero-title animation__word_come">Empowering Businesses with Innovative Digital Solutions.
                  </h1>
                  <div class="hero__about-info">
                    <div class="hero__about-btn">
                      <div class="btn_wrapper">
                        <a href="#" class="wc-btn-primary btn-hover btn-item"><span></span> Trends & <br> technology <i
                            class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="hero__about-text title-anim">
                      <p> Our success lies in our commitment to excellence, collaboration, and staying ahead of the
                        curve. We continuously invest in staying up-to-date with the latest industry trends,
                        technologies, and best practices. Our story takes beginning in 2012</p>
                    </div>
                    <!--
							<div class="hero__about-award">
								<img src="/imgs/about/award.png" alt="Best Studio Award">
							</div>
							-->
                  </div>
                </div>
              </div>
            </div>
            <!--
            <div class="row hero__about-row">
              <div class="col-xxl-12">
                <div class="hero__about-video">
                  <video loop muted autoplay playsinline>
                    <source src="/video/video.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
			-->
          </div>
        </section>
        <!-- Hero area end -->


        <!-- Story area start -->
        <section class="story__area">
          <div class="container g-0 pt-40">
            <span class="line-3"></span>
            <div class="sec-title-wrapper">
              <div class="from-text">from <span>2012</span></div>

              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <h2 class="sec-sub-title title-anim">Digital Studio</h2>
                  <h3 class="sec-title title-anim">Our story</h3>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                  <div class="story__text">
                    <h4> We are, ABC Designs! </h4>
                    <p> Our journey began 13 years ago with a vision to empower businesses and organizations with
                      innovative digital solutions that drive growth and success in the ever-evolving digital landscape.
                      As a dedicated digital agency specializing in web design and development, we have grown into a
                      trusted partner for businesses of all sizes, helping them navigate the complexities of the digital
                      world and achieve their goals. </p>

                    <p> From the very beginning, our focus has been on creating exceptional web experiences that
                      captivate audiences and deliver tangible results. Our talented team of designers, developers, and
                      digital strategists brings together a wealth of expertise, creativity, and technical know-how to
                      deliver bespoke digital solutions that are tailored to each client's unique needs. </p>

                    <p> Throughout the years, we have had the privilege of working with a diverse range of clients
                      across industries, gaining invaluable insights and expanding our capabilities. From startups
                      looking to establish a strong online presence to established enterprises seeking to elevate their
                      digital strategy, we have continuously honed our skills to meet the evolving demands of the
                      digital landscape. </p>


                  </div>
                </div>

              </div>
            </div>
            <div class="row pb-100">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="story__img-wrapper">
                  <img src="/img/office/IMG_6555.webp" alt="Story Thumbnail" class="w-100">
                </div>
              </div>
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="story__img-wrapper img-anim">
                  <img src="/img/office/IMG_6559.webp" alt="Story Thumbnail" data-speed="auto">
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="story__img-wrapper">
                  <img src="/img/office/IMG_6560.webp" alt="Story Thumbnail" class="w-100">
                </div>
              </div>
              <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="story__img-wrapper">
                  <img src="/img/story/3.jpg" alt="Story Thumbnail">
                  <img src="/img/story/4.jpg" alt="Story Thumbnail">
                </div>
              </div> -->
            </div>
          </div>
        </section>
        <!-- Story area end -->


        <!-- Counter area start -->
        <section class="counter__area d-none">
          <div class="container g-0 pb-140 pt-140">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-12">
                <div class="counter__wrapper-2 counter_animation">
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">25k</h2>
                    <p>Project <br>completed</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">8k</h2>
                    <p>Happy <br>customers</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">15</h2>
                    <p>Years <br>experiences</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">98</h2>
                    <p>Awards <br>achievement</p>
                    <span class="counter__border"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter area end -->


        <!-- Team area start -->
        <section class="team__area pt-140 pb-140 d-none">
          <div class="sec-title-wrapper">
            <h2 class="sec-sub-title title-anim">Our Team</h2>
            <h3 class="sec-title title-anim">How we work</h3>
          </div>


          <div class="swiper team__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/3.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Shree</h4>
                    <h5 class="team__member-role">Founder & CEO</h5>
                  </div>
                </a>
              </div>
              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/2.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Jyoti</h4>
                    <h5 class="team__member-role"> Admin, HR</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/1.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Sanaullah Khan</h4>
                    <h5 class="team__member-role">FrontEnd Developer, Project Manager</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/3.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name"> Zakir Shaikh </h4>
                    <h5 class="team__member-role">BackEnd Developer, Devops</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/1.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Chaitanya</h4>
                    <h5 class="team__member-role"> Junior UI Developer </h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/1.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Priyesh</h4>
                    <h5 class="team__member-role"> Junior BackEnd Developer </h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/4.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name"> Ashwini </h4>
                    <h5 class="team__member-role"> Graphic Designer</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/2.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name"> Sriniwas</h4>
                    <h5 class="team__member-role"> Graphic Designer & Video Editor</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="team-details.html">
                  <img src="/imgs/team/3.jpg" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name">Rakesh</h4>
                    <h5 class="team__member-role"> Junior Graphic Designer</h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Team area end -->

      </main>
      <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
  </div><?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/about.blade.php ENDPATH**/ ?>