<?php
$page = basename($_SERVER['SCRIPT_NAME']);
$page = str_replace('','',$page);
$page = str_replace('.php','',$page);

$page_head = $page;
$page_head = str_replace('_',' ',$page_head);
$page_head =str_replace('.php','',$page_head);
$page_head = ucwords($page_head);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->

<html class="no-js" lang="en"><!--<![endif]-->
<head>
	<title> ACP Panels | ACP Sheets | Aluminium Composite Panel Supplier | VIVA ACP </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	

@include('frontend.layout.header')
</head>
<body class="video_start">
@include('frontend.layout.nav')
	<!--
	<div class="page-loader">
		<div class="clock" id="clock"> </div>
		<video id="loading-video" autoplay muted>
			<source src="/video/intro.mp4" type="video/mp4">
			<source src="/video/intro.ogg" type="video/ogg">
			Your browser does not support HTML5 video.
		</video>
	</div>
	-->
<div id="smooth-wrapper">
    <div id="smooth-content">
		<main>
			<!-- Hero area start -->
			<!--
			<section class="hero__area" style="height:100vh;">
				<div class="hero__about-video"> 
					<div class="hero_videotext d-none"> <h1> Unleash Your Creativity with ACP Sheets </h1> </div> 
					<video loop muted autoplay playsinline>
						<source src="/video/intro.mp4" type="video/mp4">
					</video>
                </div>
			</section>
			-->
			<section class="hero__area-2 main_banner">
				<div class="hero__inner-2">
					<div class="sec-title-wrapper">
						<h2 class="sec-title-3 bg-shape"> Unleash Your <br /> Creativity </h2>
						<h2 class="sec-title-3">With <br /> ACP Sheets</h2>
					</div>
					<div class="hero__text-2">
						<p> The Perfect Fusion of Strength and Aesthetics. Transforming Architecture with Durable and Stylish ACP Sheets.</p>
						<div class="hero__button btn_wrapper">
							<a href="service.html" class="wc-btn-pink btn-hover btn-item"><span></span> Explore <br>our services <i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="hero2-shape">
					<img src="/img/arrow-long.png" alt="BG Shape">
				</div> 
				<video loop muted autoplay playsinline>
					<source src="/video/intro.mp4" type="video/mp4">
				</video>
			</section> 
			<!-- Hero area end -->
			
			<!-- hero -->
			<section class="hero__area-4 sp-x" style="padding-top:0px;">
				<div class="hero__content-8 pt-42">
					<h2 class="sec-title-4 sec-title-5 animation__char_come"> One Stop  SOLUTION <img src="/img/shape.png" alt="shape"></h2>
					<h2 class="sec-title-4 animation__char_come"> FOR ALL YOUR <span> FACADE CLADDING NEEDS</span></h2>
					<div class="scroll-wrapper">
						<div class="scroll-down"> <span>scroll</span> <img src="/img/scrolldown.svg" alt="Scroll Down"> </div>
						
						<p class="discription hero__text-animation">
							VIVA is a renowned aluminium composite panel (ACP Sheets) manufacturer and supplier in India, which brings elegance to the exterior and interior design. Being pioneers in the field of ACP sheets, we have what it takes to turn your dream into reality. <br /> <br />
							
							Since its inception in 2003, VIVA has given the power of choice to architects and designers all over the world with a wide range of collections in hues, patterns, series, and textures. <br /> <br />
							
							The testimony of our roaring success lies in the fact that in a trice, VIVA’s ACP Panels has acquired the top 3 ranks amongst its other worthy competitors.
							<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
						</p>
						
					</div>
				</div> 
			</section> 
			<!-- /hero -->
			
			<div class="portfolio__big" style="padding-bottom:0px !important;">
				<div class="portfolio__big-inner" style="background-image: url(img/bg_2.jpg);"> </div>
			</div>
			 
			<div class="work__area-8"> 
				<div class="row pt-60">
					<div class="swiper roll__slider2">
						<div class="swiper-wrapper roll__wrapper">
							<div class="swiper-slide"> <h2 class="rollslide_title-1">Selected <span>Work</span></h2> </div>
							<div class="swiper-slide"> <h2 class="rollslide_title-1">Selected <span>Work</span></h2> </div>
						</div>
					</div>
				</div> 

				<div class="workitems sp-x pt-140">
					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="1">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> <img src="/img/work-01.jpg" alt="image"> </div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Thappys <span>Arcade</span></h4>
									<p> Mumbai, Maharastra - 2019  <br /> 
									Shade Used: VA-487 & VA-582 <br />
									Specifications: 3mm |  Quantity: 3000 Sq.Mtr
									</p>
								</div>
							</a>
						</div>
					</div>

					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="1.2">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> <img src="/img/work-02.jpg" alt="image"> </div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Design <span>CONCEPT</span></h4>
									<p> Natre, New York <br> - 2019</p>
								</div>
							</a>
						</div>
					</div> 
					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="1">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> <img src="/img/works/18.jpg" alt="image"> </div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Thappys <span>Arcade</span></h4>
									<p> Mumbai, Maharastra - 2019  <br /> 
									Shade Used: VA-487 & VA-582 <br />
									Specifications: 3mm |  Quantity: 3000 Sq.Mtr
									</p>
								</div>
							</a>
						</div>
					</div>

					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="1.2">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> <img src="/img/works/2.gif" alt="image"> </div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Design <span>CONCEPT</span></h4>
									<p> Natre, New York <br> - 2019</p>
								</div>
							</a>
						</div>
					</div> 
					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="2">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> <img src="/img/works/21.jpg" alt="image"> </div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Fresh <span>Edge</span></h4>
									<p>Natre, New York <br> - 2019</p>
								</div>
							</a>
						</div>
					</div>
					<div class="work8 fade_bottom_3">
						<div class="work8__inner" data-speed="1">
							<a href="#" class="wc-tilt">
								<div class="work8__thumb"> 
									<!-- <img src="/img/works/21.jpg" alt="image"> -->
									<video loop muted autoplay playsinline>  <source src="/img/works/29.mp4" type="video/mp4"> </video> 
								</div>
								<div class="work8__content tilt">
									<h4 class="work8__content__title">Dhoner <span>Artery</span></h4>
									<p>Natre, New York <br>  - 2019</p>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="work8__btn">
							<a href="#" class="blog__btn about_btn"> view all works <span> <i class="fa-solid fa-arrow-right"></i></span> </a>
						</div>
					</div>
				</div>
			</div>
			<!-- /work 8 -->
			
			<!-- Portfolio area start -->
        <section class="portfolio__area-6">
          <div class="container line pt-100 pb-140">
            <span class="line-3"></span>
            <div class="zi-9">
              <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                  <div class="sec-title-wrapper portfolio__title-wrap-6">
                    <div class="">
                      <h2 class="sec-sub-title animation__char_come">Featured</h2>
                      <h3 class="sec-title animation__char_come_long">Work</h3>
                      <p>View the full case study of our recent featured and awesome works that we created for our
                        clients.
                      </p>
                    </div>
                    <div class="portfolio__pagination-6">
                      <span class="portfolio__current">01</span> / 0<span class="portfolio__total"></span>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6">
                  <div class="portfolio__wrapper-6">
                    <div class="portfolio__list-6">
                      <div class="portfolio__item-6" data-portfitem="1">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/1.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="2">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/2.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="3">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/3.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="4">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/4.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="5">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/5.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="6">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/6.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="7">
                        <a href="portfolio-details.html">
                          <img src="/img/portfolio/6/7.jpg" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->
			
			<div class="about__img-2 pb-130 mb-0">
				<img src="/img/bg_1.jpg" alt="About Image" data-speed="0.2">
			</div>
			
			<!-- Brand area start -->
			<section class="brand__area d-none">
				<div class="container g-0 pb-130">
					<span class="line-3"></span>
					<div class="row">
						<div class="col-xxl-12">
							<div class="sec-title-wrapper">
								<h2 class="sec-sub-title title-anim">Internation Brands</h2>
								<h3 class="sec-title title-anim">We are happy to work with global <br> largest brands</h3>
							</div>
						</div> 
						<div class="col-xxl-12"> 
							<div class="brand__list" id="home_client_list"> 
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/1.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/2.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/3.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/4.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/5.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/6.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/3.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/4.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/5.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/6.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/1.png" alt="Brand Logo"> </div>
								<div class="brand__item fade_bottom"> <img src="/imgs/brand/2.png" alt="Brand Logo"> </div> 
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Brand area end -->  

			<!-- Roll area start -->
			<section class="roll__area">
				<div class="swiper roll__slider">
					<div class="swiper-wrapper roll__wrapper">
						<div class="swiper-slide roll__slide"> <h2> We Transform Brands.</h2> </div> 
						<div class="swiper-slide roll__slide"> <h2> We Transform Brands.</h2> </div> 
						<div class="swiper-slide roll__slide"> <h2> We Transform Brands.</h2> </div> 
						<div class="swiper-slide roll__slide"> <h2> We Transform Brands.</h2> </div> 
					</div>
				</div>
			</section>
			<!-- Roll area end -->
			
			<!-- Workflow area start -->
			<section class="workflow__area-3">
				<div class="workflow__wrapper-3">
					<div class="choose-wrapper wf_panel">
						<div class="container">
							<div class="row">
								<div class="col-xxl-12">
									<div class="choose-title-wrapper"> <h2 class="choose-title title-anim">why <br> choose us</h2> </div>
								</div>
							</div>
						</div>
					</div> 
					<div class="research__area wf_panel pt-150">
						<div class="container inner_content">
							<div class="row">
								<div class="col-xxl-6 col-xl-6 col-lg-6">
									<div class="sec-title-wrapper">
										<h2 class="sec-sub-title">why <br>choose us</h2>
										<h3 class="sec-title">REMARKABLE MANUFACTURING PROCESSES</h3>
										<p> With over two decades of experience backing our success in the ACP sheet industry, our ultimate aim has always been customer satisfaction. </p>
									</div>
									<ul class="research__tools">
										<li><a href="#">Google</a></li>
										<li><a href="#">pinterest</a></li>
										<li><a href="#">Instagram</a></li>
									</ul>
								</div>
								<div class="col-xxl-6 col-xl-6 col-lg-6">
									<div class="research__list">
										<div class="research__item">
											<div class="research__number"> <span> 60% </span>  </div>
											<div class="research__info">
												<h4 class="research__title"> Unrivaled Quality </h4>
												<p> We ensure that each of our ACP sheet reflects the passion and skill we spent years developing & perfecting.  </p>
											</div>
										</div> 
										<div class="research__item">
											<div class="research__number"> <span> 95% </span> </div>
											<div class="research__info">
												<h4 class="research__title"> Technical Guidance & Support </h4>
												<p> Our in-house technical department comprises architects, engineers, & planners who are always ready to make your project a dream come true by providing unconditional technical support. </p>
											</div>
										</div> 
										<div class="research__item">
											<div class="research__number"> <span> 70% </span> </div>
											<div class="research__info">
												<h4 class="research__title"> Strong Distributor Network </h4>
												<p> Our 500 dealer network and 18 warehouses across all the major cities of India, South East Asia, Middle East & Africa help us cater to the needs of our domestic & global clients. </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<div class="counter__area-3 wf_panel">
						<div class="container">
							<div class="row">
								<div class="col-xxl-12">
									<div class="sec-title-wrapper"> <h2 class="sec-sub-title pb-0">Why <br>Choose Us</h2> </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
									<div class="counter__wrapper-3">
										<div class="counter__item-3">
											<h2 class="counter__number">7M</h2>
											<p>With a production capacity of 7 million m2 per annum. </p>
										</div>
										<div class="counter__item-3">
											<h2 class="counter__number">10</h2>
											<p>10 top-notch Korean ACP manufacturing machines</p>
										</div>
										<div class="counter__item-3">
											<h2 class="counter__number">300+</h2>
											<p>300+ vibrant ACP shades in different colours & textures.</p>
										</div>
										<div class="counter__item-3">
											<h2 class="counter__number">500</h2>
											<p>500 stockists combined with 18 warehouses across India</p>
										</div>
									</div>
								</div>
								<div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
									<div class="counter__img-3"> <img src="/img/counter-3.png" alt="Counter Image"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="cta__area-3 wf_panel">
				  <div class="container pt-150 pb-150">
					<div class="row">
					  <div class="col-xxl-12">
						<div class="cta__content-3">
						  <p class="cta__sub-title-2">Have you project in mind?</p>
						  <h2 class="cta__title-2">Let’s make something great together!</h2>
						  <div class="btn_wrapper">
							<a href="contact.html" class="wc-btn-black btn-hover btn-item"><span></span>Contact <br>with
							  us <i class="fa-solid fa-arrow-right"></i></a>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>   
				</div>
			</section>
			<!-- Workflow area end -->  
      </main> 
		@include('frontend.layout.footer')
    </div>
  </div>
