@include('frontend.layout.header')

<body>
@include('frontend.layout.nav')
  
  
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Portfolio area start -->
        <section class="portfolio__detail">
			<div class="portfolio__detail-top">
				<div class="container g-0 pt-110 pb-130">
					<span class="line-3"></span> 
					<div class="row"> 
						<div class="col-sm-12 d-none loadr-row text-center"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
					</div>
					<div class="row" id="first_section">
						<!--
						<div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
							<div class="sec-title-wrapper">
								<h2 class="sec-title animation__char_come"> Bharat Inclusion Summit</h2>
							</div>
						</div>
						<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
							<div class="portfolio__detail-info">
								<ul>
									<li>Category <a href="#"> INTERACTIVE SOLUTIONS </a></li>
									<li>Client <span>STEPONE</span></li>
									<li>Start Date <span>02 Mar 2023</span></li>
									<li>Handover <span>05 Mar 2023</span></li>
								</ul>
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
			
			<!--
			<div class="portfolio__detail-thumb" id="sec_sction">
				<img src="/img/portfolio/bii/banner.jpg" alt="Portfolio Thumbnail" data-speed="auto">
			</div>
			-->
			<div class="d-none loadr-row text-center"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
			<div class="special" id="sec_section"  data-scrollax-parent="true">
				<!--<img src="/img/portfolio/bii/banner.jpg" alt="Portfolio Thumbnail" data-speed="auto"> -->
			</div>

			<div class="portfolio__detail-content">
				<div class="container g-0 pt-140">
					<span class="line-3"></span> 
					<div class="block-content">
						<div class="d-none loadr-row text-center"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
						<div class="row" id="third_section">
							<!--
							<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
								<h2 class="portfolio__detail-title title-anim"> Build, streamline and evolve together with solution</h2>
							</div>

							<div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
								<div class="portfolio__detail-text">
									<p>Always ready to push the boundaries, especially when it comes to our own platform, Our analytical eye to create a site that was visually engaging and also optimised for maximum performance. It also perfectly reflects the journey to help it tell a story to increase its understanding and drive action. To create a site that was visually engaging for maximum performance.</p>
									<ul>
										<li>+ Brand Development</li>
										<li>+ UX/UI Design</li>
										<li>+ Front-end Development</li>
										<li>+ SVG Animations </li>
										<li>+ Laravel Development</li>
									</ul>
								</div>
							</div>
							-->
						</div>
					</div> 
					
					<div class="row justify-content-lg-center hero__about-row project_video">
						<div class="col-lg-11">
							<div class="hero__about-video"> 
								<video loop muted autoplay playsinline id="banner_video">
									<!-- <source src="/img/portfolio/bii/event.mp4" type="video/mp4"> -->
								</video>
							</div>
							
						</div>
					</div>
					
					<div class="block-content second_content"> 
						<div class="row" id="third_ section"> 
							<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-5">
								<h2 class="portfolio__detail-title title-anim"> Build, streamline and evolve together with solution</h2>
							</div>

							<div class="col-xxl-8 col-xl-7 col-lg-7 col-md-7">
								<div class="portfolio__detail-text">
									<p> We sought to create an engaging and user-friendly experience through intuitive navigation, interactive features, and accessible design elements. </p>
									
									<p> Our design team created a visually appealing and intuitive interface that prioritized ease of use and accessibility. We ensured clear content organization, legible typography, and high contrast to cater to users with varying abilities. </p> 
								</div> 
							</div>
						</div>
					</div> 
					
					
					<div class="d-none loadr-row text-center"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
					<div class="block-gallery" id="forth_section">
						<!--
						<img src="/img/portfolio/bii/1.jpg" alt="Portfolio Image"> 
						<img src="/img/portfolio/bii/2.jpg" alt="Portfolio Image"> 
						-->
					</div> 
					
					<div class="d-none loadr-row text-center"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
					<div class="block-img-text" id="fifth_section">
						<!--
						<img src="/img/portfolio/bii/3.jpg" alt="Portfolio Image"> 
						<img src="/img/portfolio/bii/4.jpg" alt="Portfolio Image"> 
						
						<p> For those of us who are blessed with good sight. So we seldom consider  it. That’s why going off to  investigate the whys and hows involved is a little like trying to get behind the wind </p> 
						-->
					</div>

					<div class="row">
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<div class="portfolio__detail-btns pt-150 pb-150" id="third_section">
								<a href="#" class="wc-btn-primary btn-hover"><span></span> Prev Work</a>
								<a href="#" class="wc-btn-primary btn-hover"><span></span> Next Work</a>
							</div>
						</div>
					</div>
				</div>
			</div>

        </section>
        <!-- Portfolio area end -->

      </main>

		@include('frontend.layout.footer')

    </div>
  </div>
 
<script src="/js/work_details.js"></script> 
<script type='text/javascript' src='https://iprodev.github.io/Scrollax.js/assets/js/smoothscroll.js'></script>
<script type='text/javascript' src='https://iprodev.github.io/Scrollax.js/lib/scrollax.min.js'></script>
 