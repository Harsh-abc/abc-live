<?php
use App\Http\Controllers\CommonController;

$CommonHeaderTag = CommonController::FetchHeaderTag();
$currentUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = Request::path();
$seodata = CommonController::SeoDetails($url);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <title>
        {{ isset($seodata->title) ? strip_tags($seodata->title) : 'Web Designing and Web Development Company in Mumbai | Website Design Agency Mumbai' }}
    </title>

    <!-- Basic Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#c90208">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 month">

    <!-- SEO -->
    <meta name="description"
          content="{{ isset($seodata) ? $seodata->meta_description : 'ABC Designs is an Innovative, Professional Website Designing & Web Development Company based in Mumbai, India.' }}">
    <meta name="keywords"
          content="{{ isset($seodata) ? strip_tags($seodata->meta_keywords) : 'abc designs, website designing company in mumbai, web development company in mumbai' }}">

    <link rel="canonical" href="https://abcdesigns.in/">

    <!-- Open Graph -->
    <meta property="og:site_name" content="https://abcdesigns.in/">
    <meta property="og:title" content="Web Designing and Web Development Company in Mumbai">
    <meta property="og:description" content="ABC Designs is an Innovative Website Designing Company in Mumbai.">
    <meta property="og:url" content="https://abcdesigns.in/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://abcdesigns.in/img/display_latest.jpg">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.ico">

    <!-- Google Fonts (NON-BLOCKING – Lighthouse Safe) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload"
          as="style"
          href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap"
          onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap">
    </noscript>

    <!-- Critical CSS (Minimal) -->
    <style>
        .ajax-loader {
            visibility: hidden;
            background-color: rgba(255,255,255,0.7);
            position: fixed;
            inset: 0;
            z-index: 9999;
        }
        .ajax-loader img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <link rel="stylesheet" href="/css/loader.css">
    <!-- Main CSS (Non render-blocking) -->
    <link rel="preload"
          href="/css/master.css?ver=0.1"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/css/master.css?ver=0.1">
    </noscript>

    <!-- TrustPilot (Async) -->
    <script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

    <!-- Dynamic Header Tags -->
    @if (count($CommonHeaderTag) > 0)
        @foreach ($CommonHeaderTag as $CHT)
            {!! $CHT->tag_description !!}
        @endforeach
    @endif

</head>
