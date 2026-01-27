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
 
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')

	<div class="workDetails">
        <div class="wrapper-body">	
            <section class="body-wrap clearfix">
				<div class="container">
					<div class="loadr-row text-center row" style="padding:160px 0;"> <img src="/img/loading_2.gif" width="40px" class="img-fluid" /> </div>
					<div class="row project_heading" id="project_heading"> 
						<!--
						<div class="col-md-10 col-sm-9 col-xs-10 wow fadeInRight animated" data-wow-delay="0.2s">
							<h1> Volume Zero </h1>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-2 wow fadeInLeft animated" data-wow-delay="0.2s">
							<div class="back_work">
								<a href="/work" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Work">
									<img src="/img/circle.png" class="img-responsive">
								</a>
							</div>
						</div>
						-->
					</div> 
					<div class="row project_details" id="project_details"> 
					<!--
						<div class="col-md-9 block">
							<div class="wow fadeInUp animated" data-wow-delay="0.2s">
								<img src="/img/work/volzero/1.jpg" alt="Monitor" class="img-responsive center-block">
							</div>
							<div class="wow fadeInUp animated" data-wow-delay="0.3s">
								<img src="/img/work/volzero/2.jpg" alt="Monitor" class="img-responsive center-block">
							</div>							
						</div>
						<div class="col-md-3 wow fadeInLeft animated" data-wow-delay="0.2s">
							<h4> Project Info </h4>
							<p> .</p>
							<hr> 
							<h4>Tools</h4>
							<ul>
								<li> <a href="#"> HTML5 </a> </li>
								<li> <a href="#"> PHP </a> </li>
								<li> <a href="#"> CSS3 </a> </li>
								<li> <a href="#"> JQuery </a> </li>
								<li> <a href="#"> Bootstarp4 </a> </li>
							</ul>
						</div> 
						-->
					</div>
				</div>
            </section>
        </div>
    </div>
 

@include('frontend.layout.footer')
<script type="text/javascript" src="/js/api.js"></script>
