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
	<title> Website Designing, Web Development & Digital Marketing Services Mumbai </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="ABC Designs offers one stop solution includes website designing, web development & digital marketing services and many more." />
	<meta name="keywords" content="abc designs, website designing, website designing in mumbai, digital marketing services, digital marketing services in mumbai, digital marketing services mumbai">
	<link rel="canonical" href="https://www.abcdesigns.in/services" />
	
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')


	<div class="serviceDetails">
		<div class="wrapper-body">
			<section class="body-wrap clearfix">
				<div class="container">
					<div class="row text-center wow fadeInUp" data-wow-delay="0.2s">
						<h1>Services</h1></div>
					<div class="row">
						<div class="figure-holder clearfix text-justify">
							<a class="fig-h1 wow fadeInLeft" data-wow-delay="0.2s">
								<div>
									<div class="branding">
										<div class="move"> <img src="/img/service/concept_designing.png" alt="Concept Designing"> </div>
									</div>
								</div>
								<div>
									<h5>Concept Designing</h5>
									<p class="opnsans"> <strong> We design to create, elevate and enhance brands & products. </strong>
										<br/>We help brands tell their stories in creative and meaningful ways. We ensure that your brand reflects the core message and connects effectively with the target market. Our concepts lead the way and give direction for your design decisions. </p>
								</div>
							</a>
							<a class="fig-h1 wow fadeInRight" data-wow-delay="0.2s">
								<div>
									<div class="webdesign_development">
										<div class="move"> <img src="/img/service/webdesign_development.png" alt="Web Design & Development"> </div>
									</div>
								</div>
								<div>
									<h5>Web Design & Development </h5>
									<p class="opnsans"> <strong> Your website is the first step to your online business and we make it a lasting impression. </strong>
										<br/>Our design team creates websites that work & give you the edge in a crowded online market .We work hard to create websites that not only look good but also deliver at the same time. </p>
								</div>
							</a>
							<div class="clear"> </div>
							<a class="fig-h1 wow fadeInLeft" data-wow-delay="0.2s">
								<div>
									<div class="coding">
										<div class="move"> <img src="/img/service/ecommerce.png" alt="E-Commerce Development"> </div>
									</div>
								</div>
								<div>
									<h5> E-Commerce Development </h5>
									<p class="opnsans"> <strong> We offer you optimum solutions to run e-commerce shops successfully. </strong>
										<br/>We do E-commerce that involves exchange of money online through payment gateways of which we have a sound knowledge. With experience in all the areas of importance we can give your site the required leverage. </p>
								</div>
							</a>
							<a class="fig-h1 wow fadeInRight" data-wow-delay="0.2s">
								<div>
									<div class="marketing">
										<div class="move"> <img src="/img/service/social_media.png" alt="Social Media"> </div>
									</div>
								</div>
								<div>
									<h5>Social Media </h5>
									<p class="opnsans"> <strong> Social media for us is not merely about creating a presence for your business online but building lasting relationships. </strong>
										<br/>We acquire quality attention and traffic for a product, brand and/ or service via the use of business relevant & valuable social media platforms. Our social media campaigns are aligned to fulfill your business objectives. </p>
								</div>
							</a>
							<div class="clear"> </div>
							<a class="fig-h1 wow fadeInLeft" data-wow-delay="0.2s">
								<div>
									<div class="branding">
										<div class="move"> <img src="/img/service/seo.png" alt="Search Engine Optimization (SEO)"> </div>
									</div>
								</div>
								<div>
									<h5>Search Engine Optimization (SEO)</h5>
									<p class="opnsans"> <strong> We are here to understand your business audience to drive more traffic to your websites & get real results.</strong>
										<br/>Our SEO services ensure search engines like Google, Bing and Yahoo rank your website high for your chosen industry keywords. Thus ensuring your target audience has easy access to your website. </p>
								</div>
							</a>
							<a class="fig-h1 wow fadeInRight" data-wow-delay="0.2s">
								<div>
									<div class="design">
										<div class="move"> <img src="/img/service/email_marketing.png" alt=" Email Marketing"> </div>
									</div>
								</div>
								<div>
									<h5> Email Marketing </h5>
									<p class="opnsans"> <strong> We are here to build best practice Email Marketing programs for your business. </strong>
										<br/>We promote products and services via email for customers in a bid to increase sales. We offer firms a valuable opportunity to touch customers and prospects with useful and actionable information. </p>
								</div>
							</a>
							<div class="clear"> </div>
							<a class="fig-h1 wow fadeInLeft" data-wow-delay="0.2s">
								<div>
									<div class="marketing">
										<div class="move"> <img src="/img/service/mobile_technologies.png" alt="Mobile Technologies"> </div>
									</div>
								</div>
								<div>
									<h5> Mobile Technologies </h5>
									<p class="opnsans"> <strong> We use Mobile technologies to increase productivity & profitability of your Business. </strong>
										<br/>We always be up to date with all digital trends, as mobiles are growing stronger day by day. We believe in building mobile sites that will deliver easy reading, navigation and interaction for your site visitors. </p>
								</div>
							</a>
							<a class="fig-h1 wow fadeInRight" data-wow-delay="0.2s">
								<div>
									<div class="design">
										<div class="move"> <img src="/img/service/online_marketing.png" alt="Online Marketing"> </div>
									</div>
								</div>
								<div>
									<h5> Online Marketing </h5>
									<p class="opnsans"> <strong> We make you a powerful brand. </strong>
										<br/>We do Online Marketing that includes a wider range of marketing elements than traditional business marketing due to the extra channels and marketing mechanisms available on the Internet. </p>
								</div>
							</a>
							<div class="clear"> </div>
							<a class="fig-h1 wow fadeInLeft" data-wow-delay="0.2s">
								<div>
									<div class="graphic_design">
										<div class="move"> <img src="/img/service/graphic_design.png" alt="Graphic Designing"> </div>
									</div>
								</div>
								<div>
									<h5> Graphic Designing </h5>
									<p class="opnsans"> <strong> We produce the most Creative Solutions </strong>
										<br/>We hold experience and abilities in the Designing field, our approach to design is always based on achieving an objective. Graphic Designing is a tool to gain awareness and recognition for your business. </p>
								</div>
							</a>
							<a class="fig-h1 wow fadeInRight" data-wow-delay="0.2s">
								<div>
									<div class="branding">
										<div class="move"> <img src="/img/service/print_media.png" alt="Print Media"> </div>
									</div>
								</div>
								<div>
									<h5>Print Media</h5>
									<p class="opnsans"> <strong> We do Print Media - not just Newspapers & Magazines.</strong>
										<br/>We do Print Media that involves type based designs using words attractively to convey a message. We appreciate paper's tangible value as much as we do the words printed upon it. </p>
								</div>
							</a>
							<div class="clear"> </div>
						</div>
						<div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.2s"><a href="/work" class="our_work"> View Our Work </a></div>
					</div>
					<div class="row">
						@include('frontend.layout.footer_form')
					</div>
				</div>
			</section>
		</div>
	</div>

 

@include('frontend.layout.footer')