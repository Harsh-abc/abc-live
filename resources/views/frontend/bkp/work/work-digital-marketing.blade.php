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
	<title> Our Work | Website Design Agency Mumbai </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="ABC Designs offers you the complete design, development & marketing approach for your business. Let's get your Business Online Ready!" />
	<meta name="keywords" content="abc designs, website designing, website designing in mumbai, digital marketing company, digital marketing company in mumbai, digital marketing company mumbai">
	<link rel="canonical" href="https://abcdesigns.in/work" />
	
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')

	<div class="workDetails">
        <div class="wrapper-body">	
            <section class="body-wrap clearfix">
				<div class="container">
					<div class="row text-center">
						<h1>Our Works</h1>
						<h5>Wide range of successful digital and print projects.</h5>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<ul class="albumFilter text-center">
								<?php  $url =Request::url(); $split =array();$split = explode("/",$url); $cnt =count($split); if($cnt>=4){$page =$split[3];} else {$page ='';}?>
								<li> <a class="@if($page=='work')active @endif" href="work"> All </a> </li>
								<li> <a class="@if($page=='work-web-design')active @endif" href="work-web-design"> Web Design </a> </li>
								<li> <a class="@if($page=='work-interactive-solutions')active @endif" href="work-interactive-solutions"> Interactive Solutions </a>  </li>
								<li> <a class="@if($page=='work-branding')active @endif" href="work-branding"> Branding </a> </li>
								<li> <a class="@if($page=='work-web-development')active @endif" href="work-web-development"> Web Development </a> </li>
								<li> <a class="@if($page=='work-ecommerce')active @endif" href="work-ecommerce"> E-Commerce </a> </li>
								<li> <a class="@if($page=='work-digital-marketing')active @endif" href="work-digital-marketing"> Digital Marketing </a> </li>
								<li> <a class="@if($page=='work-mobile-app')active @endif" href="work-mobile-app"> Mobile App </a> </li>
							</ul>							
						</div>
					</div> <!-- Row --> 
					
					<div class="row"> 
						<div class="loadr-row text-center col-sm-12" style="padding:160px 0;"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
						<div class="isotope product_listing" id="worklisting">  </div> <!-- Row/Isotope -->
					</div>
				</div>
            </section>
        </div>
    </div>
 

@include('frontend.layout.footer')
<script type="text/javascript" src="/js/api.js"></script>
