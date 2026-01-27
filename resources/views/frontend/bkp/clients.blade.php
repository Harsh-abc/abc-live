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
	<title> Our Clients - ABC Designs </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="ABC Designs has over 6 years of experience in offering result driven solutions. Take a look on our fastest growing client list." />
	<meta name="keywords" content="abc designs, clients">
	<link rel="canonical" href="https://abcdesigns.in/clients" />
	
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')

	<div class="serviceDetails">
        <div class="wrapper-body">
            <section class="body-wrap clearfix">
				<div class="container">
					<div class="row text-center about_heading wow fadeInUp" data-wow-delay="0.2s">
                        <h1>Our Clients</h1>
                        <h5>  </h5> 
					</div>

					<br />

					<div class="row clients_page text-center">
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/raymond.jpg" alt="Raymond" title="Raymond" />
								<h4> Raymond </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/park_avenue.jpg" alt="Park Avenue" title="Park Avenue" />
								<h4> Park Avenue </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/unilever.jpg" alt="Unilever" title="Unilever" />
								<h4> Unilever </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/google.jpg" alt="Google" title="Google" />
								<h4> Google </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/facebook.jpg" alt="Facebook" title="Facebook" />
								<h4> Facebook </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/godrej.jpg" alt="Godrej" title="Godrej" />
								<h4> Godrej </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/celebinas.jpg" alt="Celebinas" title="Celebinas" />
								<h4> Celebinas </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/abbott.jpg" alt="Abbott" title="Abbott" />
								<h4> Abbott </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/deloitte.jpg" alt="Deloitte" title="Deloitte" />
								<h4> Deloitte </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/dibella.jpg" alt="Dibella" title="Dibella" />
								<h4> Dibella </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/icici_prudential.jpg" alt="ICICI Prudential" title="ICICI Prudential" />
								<h4> ICICI Prudential </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/radio_city.jpg" alt="Radio City" title="Radio City" />
								<h4> Radio City </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/audi.jpg" alt="Audi" title="Audi" />
								<h4> Audi </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/mahindra.jpg" alt="Mahindra" title="Mahindra" />
								<h4> Mahindra </h4>
							</div>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/nexon.jpg" alt="Nexon" title="Nexon" />
								<h4> Nexon </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/blue_rise.jpg" alt="Blue Rise" title="Blue Rise" />
								<h4> Blue Rise </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/renault.jpg" alt="Renault" title="Renault" />
								<h4> Renault </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/skoda.jpg" alt="Skoda" title="Skoda" />
								<h4> Skoda </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/volume_zero.jpg" alt="Volume Zero" title="Volume Zero" />
								<h4> Volume Zero </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/wash_n_dry.jpg" alt="Wash N Dry" title="Wash N Dry" />
								<h4> Wash N Dry </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/volkswagen.jpg" alt="Volkswagen" title="Volkswagen" />
								<h4> Volkswagen </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/glamgals.jpg" alt="Glamgals" title="Glamgals" />
								<h4> Glamgals </h4>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 wow fadeInUp" data-wow-delay="0.5s">
							<div class="thumbnail">
								<img src="/img/clients/hri_healthcare.jpg" alt="HRI Healthcare" title="HRI Healthcare" />
								<h4> HRI Healthcare </h4>
							</div>
						</div>
					</div> <!-- Row -->
				</div> <!-- Container -->

				

				<div class="container">
					<div class="row">
                        @include('frontend.layout.footer_form')
                    </div> <!-- Row -->
                </div> <!-- Container -->
            </section>
        </div>
    </div>
	 
						
 

@include('frontend.layout.footer')