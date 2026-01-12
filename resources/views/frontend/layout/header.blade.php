<?php use App\Http\Controllers\CommonController;
$CommonHeaderTag = CommonController::FetchHeaderTag();
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = Request::path();

$seodata = CommonController::SeoDetails($url);
  
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->

<head>
	<title>
		{{(isset($seodata->title)) ? strip_tags($seodata->title) : 'Web Designing and Web Development Company in Mumbai | Website Design Agency Mumbai'}}
	</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />

	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />

	<meta name="description"
		content="{{(isset($seodata)) ? $seodata->meta_description : 'ABC Designs is an Innovative, Professional Website Designing & Web Development Company based in Mumbai, India. We focused on growing your brand online.'}}" />
	<meta name="keywords"
		content="{{(isset($seodata)) ? strip_tags($seodata->meta_keywords) : 'abc designs, website designing company in mumbai, web development company in mumbai, web designing company, website design agency, professional website designing company in mumbai'}}">


	<meta property="og:site_name" content="https://abcdesigns.in/" />
	<meta property="og:title"
		content="Web Designing and Web Development Company in Mumbai | Website Design Agency Mumbai" />
	<meta property="og:description"
		content="ABC Designs is an Innovative, Professional Website Designing & Web Development Company based in Mumbai, India. We focused on growing your brand online." />
	<meta property="og:url" content="https://abcdesigns.in/">
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://abcdesigns.in/img/display_latest.jpg">








	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 month">
	<link rel="canonical" href="https://abcdesigns.in/">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<!-- include('sweetalert::alert') -->
	<link rel="stylesheet" href="/css/master.css?ver=0.1">

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->
	<style>
		.ajax-loader {
			visibility: hidden;
			background-color: rgba(255, 255, 255, 0.7);
			position: absolute;
			z-index: +100 !important;
			width: 100%;
			height: 100vh;
		}

		.ajax-loader img {
			position: relative;
			top: 50%;
			left: 50%;
		}
	</style>


	@if(count($CommonHeaderTag) > 0)
		@foreach ($CommonHeaderTag as $CHT)
			{!! $CHT->tag_description !!}

		@endforeach
	@endif
</head>