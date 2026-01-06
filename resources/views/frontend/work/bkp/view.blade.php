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
	<title id="pagetitle">   </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<link rel="canonical" href="https://abcdesigns.in/work" />
	
@include('frontend.layout.header')
</head>
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
              </div>
            </div>
          </div>

          <div class="portfolio__detail-thumb">
            <img src="/img/portfolio/bii/banner.jpg" alt="Portfolio Thumbnail" data-speed="auto">
          </div>

          <div class="portfolio__detail-content">
            <div class="container g-0 pt-140">
              <span class="line-3"></span>

              <div class="block-content">
                <div class="row">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <h2 class="portfolio__detail-title title-anim">Build, streamline and
                      evolve together with
                      solution</h2>
                  </div>

                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="portfolio__detail-text">
                      <p>Always ready to push the boundaries, especially when it comes to our own platform, Our
                        analytical
                        eye
                        to create a site that was visually engaging and also optimised for maximum performance. It
                        also
                        perfectly reflects the journey to help it tell a story to increase its understanding and drive
                        action.
                        To create a site that was visually engaging for maximum performance.</p>

                      <ul>
                        <li>+ Brand Development</li>
                        <li>+ UX/UI Design</li>
                        <li>+ Front-end Development</li>
                        <li>+ SVG Animations </li>
                        <li>+ Laravel Development</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="block-gallery">
                <img src="/img/portfolio/bii/1.jpg" alt="Portfolio Image"> 
                <img src="/img/portfolio/bii/2.jpg" alt="Portfolio Image"> 
              </div>

              <div class="block-img-text">
                <img src="/img/portfolio/bii/3.jpg" alt="Portfolio Image"> 
                <img src="/img/portfolio/bii/4.jpg" alt="Portfolio Image"> 
                <p> For those of us who are blessed with good sight. So we seldom consider  it. That’s why going off to  investigate the whys and hows involved is a little like trying to get behind the wind </p>
              </div>

              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                  <div class="portfolio__detail-btns pt-150 pb-150">
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