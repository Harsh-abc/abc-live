<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->

<html class="no-js" lang="en"><!--<![endif]-->
<head>
	<title> Offline | Website Design Agency Mumbai </title>
	
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
<body>
@include('frontend.layout.nav')

	<div id="smooth-wrapper">
		<div id="smooth-content">
			<main>
				 <!-- Hero area start -->
				<section class="hero__about offline_page">
				  <div class="container g-0">
					<span class="line-3"></span>
					<div class="row">
						<div class="col-lg-3">
							<div class="hero__about-content">
								<img src="/img/no_internet.jpg" class="img-fluid" />  
							</div>
						</div>
						<div class="col-lg-12">
							<div class=" "> 
								<h1 class="hero-title animation__word_come"> You are currently not connected to any networks </h1>
								<br /> <br /> <br />
							</div>
						</div>
					</div> 
				  </div>
				</section>
				<!-- Hero area end --> 
			</main>
@include('frontend.layout.footer')
		</div>
	</div>
