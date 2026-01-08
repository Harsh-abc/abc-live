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
	<title> Web Designing and Web Development Company in Mumbai | Website Design Agency Mumbai </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="ABC Designs is an Innovative, Professional Website Designing & Web Development Company based in Mumbai, India. We focused on growing your brand online." />
	<meta name="keywords" content="abc designs, website designing company in mumbai, web development company in mumbai, web designing company, website design agency, professional website designing company in mumbai">
	<link rel="canonical" href="https://abcdesigns.in/" />

@include('frontend.layout.social')
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
body { overflow:hidden !important; }
</style>
 

<div class="page-wrap">
    <div class="homep wrapper clearfix" id="home-menu">	
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="logo-container" data-menuanchor="mainPage">
						<a href="#mainPage" class="main-logo">
							<img src="/img/logo-mobile.png" alt="Abc Logo" class="logo-mobile">
							<img src="/img/logo_light.png" alt="Abc Logo" class="light">
							<img src="/img/logo_dark.png" alt="Abc Logo" class="dark">
						</a>

						<div class="footer_social">
							<a href="https://www.facebook.com/abcdesigns.in" target="_blank" class="facebok" data-toggle="tooltip" data-placement="top" title="Like us on Facebook">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/abcdesignsindia" class="twitter" target="_blank" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> 
							<a href="https://www.instagram.com/abcdesignsin" class="instagram" target="_blank" data-toggle="tooltip" data-placement="top" title="Follow us on Instagram">  <i class="fa fa-instagram" aria-hidden="true"></i> </a>
							<a href="https://www.linkedin.com/in/abcdesignsindia" class="linkedin" target="_blank" data-toggle="tooltip" data-placement="top" title="Follow us on Linkedin">  <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
						</div>
					</div>

					<div class="content">
						<div class="menu-container clearfix">
							<nav class="navbars">
								<a class="button-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
								<div class="overlay"></div>
								<div class="nav-menu">									
									<h6>Abc Designs</h6>									
									<p>Committed to YOU Committed to QUALITY</p>
									<ul class="navbar-wrapper" id="menu">
										@include('frontend.layout.nav')
									</ul>
									<a class="close-btn"> <img src="/img/icons/cross.png" alt="Close"> </a>
								</div>
							</nav>
						</div>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div> <!-- Header -->

		

		<section class="section home" data-role="column" id="sectionHome">
			<div class="temp_line"> </div>
			<div class="container">
				<div class="row">
					<div class="wrapper-text" id="home-mouse">
						<div class="main-pic parallaxHome" data-speed="50"> <img src="/img/home/bulb.png" alt="bulb"> </div>
						<div class="inner-pic parallaxHome" data-speed="80"> <img src="/img/home/bulbs.png" alt="bulb"> </div>
						<div class="inner-inner-pic parallaxHome" data-speed="30"> <img src="/img/home/pc.gif" alt="Desk"> </div>
						<div class="inner-inner-pic parallaxHome" data-speed="50"> <img src="/img/home/pattern.png" alt="Pattern"> </div>
						<div class="home_intro parallaxHome" data-speed="30">
							<h3> We Are, </h3>
							<h1 class="bubbles"> <span> ABC</span> Designs! </h1>
							<!--<p> We create digital products that make people's lives easier. </p>-->
							<p class=""> Committed to YOU Committed to QUALITY </p>
							<span class="line"> </span>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- Home -->

		<section class="section about about-menu" data-role="column" id="about_page">
			<div class="temp_line"> </div>
			<div class="container">
				<div class="row">
					<div class="about-figCaption">
						<h3>We <span>are</span></h3>
						<h5><span>Committed to YOU </span>Committed to QUALITY</h5>
						<p> ABC Designs offers you the complete design, development & marketing approach for your business. From planning your business approach to managing a fully functional business online, we have you covered every step of the way. <br />
						Our team of dynamic web designers, developers & digital marketing specialists are driven by creativity & passion to help you realize the digital solutions you've been looking for.</p>
						<div class="clear"></div>
						<br />
						<a href="/about" title="About Us" class="team-btn btn btn-orange">View More</a>
					</div>

					<div class="about-fig" id="about-mouse">
						<div class="main-fig parallax" data-speed="20"> <img src="/img/about/vr_bg.jpg" alt="About" class="main-img">
							<div class="inner-fig parallax" data-speed="40"> <img src="/img/about/vr.png" alt="About"> </div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- About -->

			

		<section class="section service" data-role="column" data-section-name="service-main">
			<div class="temp_line"> </div>
			<div class="mainService">
				<div class="container">
					<div class="row">
						<div class="service-figcaption">
							<h3>Services</h3>
							<a href="/services" title="Interactive Solutions" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>Interactive Solutions</h6>
									<!--<p>We design to create, elevate and enhance brands & products.</p>-->
								</div>
								<div class="service-cnctfig"> <img src="/img/service/concept_designing.png" alt="Concept Designing Services"> </div>
							</a>
							<a href="/services" title="Web Design &amp; Development Services" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>Web Design & Development</h6>
									<!-- <p>Your website is the first step to your online business and we make it a lasting impression.</p>-->
								</div>
								<div class="service-cnctfig"> <img src="/img/service/webdesign_development.png" alt="Website Design and Development Services"> </div>
							</a>
							<a href="/services" title="E Commerce Development Services" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>E-Commerce Development</h6>
								</div>
								<div class="service-cnctfig"> <img src="/img/service/ecommerce.png" alt="E Commerce Development Services"> </div>
							</a>
							<a href="/services" title="Social Media Services" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>Social Media</h6>
								</div>

								<div class="service-cnctfig"> <img src="/img/service/social_media.png" alt="Social Media Services"> </div>
							</a>
							<a href="/services" title="Search Engine Optimization Services" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>Search Engine Optimization</h6>
								</div>
								<div class="service-cnctfig"> <img src="/img/service/seo.png" alt="Search Engine Optimization Services"> </div>
							</a>
							<a href="/services" title="Email Marketing" class="service-cnct clearfix">
								<div class="service-cnctfigcaption">
									<h6>Email Marketing</h6>
								</div>
								<div class="service-cnctfig"> <img src="/img/service/email_marketing.png" alt="Email Marketing"> </div>
							</a>
							<div class="clear"> </div>
							<br />
							<a href="/services" title="View More" class="services-btn btn btn-orange">View More</a>
						</div>
						<div class="service-fig">
							<div class="service-mainfig"> <img src="/img/service/laptop.png" alt="Laptop Image">
								<div class="service-inner fig1"> <img src="/img/service/food.png" alt="Food Image"> </div>
								<div class="service-inner fig2"> <img src="/img/service/camera.png" alt="Camera Image"> </div>
								<div class="service-inner fig3"> <img src="/img/service/headphone.png" alt="Headphone Image"> </div>
								<div class="service-inner fig4"> <img src="/img/service/glasses.png" alt="Glasses Image"> </div>
								<div class="service-inner fig5"> <img src="/img/service/juice.png" alt="Juice Image"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- Services -->

		<section class="section work" data-role="column" data-section-name="work-main">
			<div class="temp_line"> </div>
			<div class="workmainpage">
				<div class="container">
					<div class="row">
						<div class="work-figcaption col-md-4 col-sm-12">
							<h3>Our <span>Works</span></h3>
							<h5>best of our portfolio </h5>
							<p>Our passion shows in our Work! <br />A  Wide range of successful digital and print projects. </p>
							<a href="/work" title="Our Work" class="work-btn btn btn-orange">View More</a>
						</div>

						<div class="work-fig col-md-8 col-sm-12">
							<div class="grid row clearfix">
								<div class="grid-item_left col-md-5 col-sm-5 col-xs-6">
									<div class="grid-item-height1">
										<video width="100%" id="video_thumb" poster="assets/img/work/brl/brl_thumb.jpg"  muted autoplay loop>
											<source src="/img/home/brl.mp4" type="video/mp4">
											<source src="/img/home/brl.ogg" type="video/ogg">
											Your browser does not support HTML5 video.
										</video>
										
									</div>
									<div class="grid-item-height2">
										<video width="100%" poster="assets/img/work/wash_dry/wash_thumb.jpg" muted autoplay loop>
											<source src="/img/home/wash.mp4" type="video/mp4">
											<source src="/img/home/wash.ogg" type="video/ogg">
											Your browser does not support the video tag.
										</video>
										<img src="/img/home/2.jpg" alt="Julius Packiam" class="img-responsive">
									</div>
								</div>
								<div class="grid-item_right col-md-6 col-sm-6 col-xs-6">
									<!--
									<div class="grid-item-width1">
										<img src="/img/content/service3.jpg" alt="image" class="item_01" />
										<img src="/img/content/service4.jpg" alt="image" class="item_02" >
									</div>
									-->
									<div class="grid-item-width3"> 
										<img src="/img/home/1.jpg" alt="image" title="Julius Packiam" class="img-responsive" />
									</div>
									<div class="wow fadeInUp" data-wow-delay="0.2s" title="App Development">
																		
									</div>
									<div class="grid-item-width2">
										<video width="100%"  id="video_thumb" poster="assets/img/work/unilever_thumb.jpg"  muted autoplay loop>
											<source src="/img/home/unilever_case_studies.mp4" type="video/mp4">
											<source src="/img/home/unilever_case_studies.ogg" type="video/ogg">
											Your browser does not support HTML5 video.
										</video>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section> <!-- Work -->

		<section class="section jointeam" data-role="column" id="join-mains" data-section-name="join-main">
			<div class="temp_line"> </div>
			<div class="container">
				<div class="row">
					<div class="jointeam-figcaption">
						<h3>Join<span>Team</span></h3>
						<h5>If creativity spurs you & development interests you then come be part of our team.</h5>
						<p>Our Small Team with Big Ideas</p>
						<a href="/about" title="About Us" class="team-btn btn btn-orange">View More</a>
					</div>
					<div class="jointeam-fig"> <img src="/img/team/jacket.png" alt="image" id="swingJacket" class="animated custswing"> </div>
				</div>
			</div>
		</section> <!-- Join Team -->

		<section class="section contact" data-role="column" id="contact-mains" data-section-name="contact-main">
			<div class="temp_line"> </div>
			<div class="container">
				<div class="row">
					<div class="contact-figc">
						<h3>Contact </h3>
						<h5>send your queries<span>or ask for quote</span></h5>
						<p>Please fill out the information. Alternatively, you may call or send us an email using our contact details. .</p>
						<a href="/career" title="Career at ABC Designs" class="workus">
							<div class="workus-info">
								<h4>Wanna work with us?</h4>
								<p class="opnsans">Write to us or submit our query form.</p>
							</div>
							<div class="workus-img"> <img src="/img/icons/contact-query.png" alt="image"> </div>
						</a>
					</div>
					<div class="contact-fig">
						<!--
						<div class="map-wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5476364468295!2d72.8328810149896!3d19.127491087058406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63cda53a215%3A0xce3a539607655c97!2sABC+Designs!5e0!3m2!1sen!2sin!4v1503563284207" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						-->
						<form name="contactform"  method="post" action="#" id="contactform">
							<div class="row">
								<div class="col-md-6 form-group">
									<div class="required">
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required="required">
									</div>
								</div>

								<div class="col-md-6 form-group">
									<div class="required">
										<input type="text" class="form-control" id="contact" name="contact" placeholder="Phone Number" value="" required="required">
									</div>				
								</div>
								<div class="clear"></div>
								<div class="col-md-12 form-group">
									<div class="required">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="" required="required">
									</div>
								</div>

								<div class="col-md-12 form-group">
									<div class="required">
										<textarea type="textbox" class="form-control" id="message" name="message" rows="4" placeholder="Message" value="" required/></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-6 required">
										<!--<p><img src="captcha" width="120" height="30" border="1" alt="CAPTCHA"></p>
										<p><input type="text" size="6" maxlength="5" name="captcha" value="" id="captcha"><br>
										<small>copy the digits from the image into this box</small></p>-->
										<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
										<span id="captchaErr" class="error-message"> </span>
									</div>

									<div class="col-sm-6 required home_submit">
										 <input type="submit" name="submit" class="btn btn-orange" value="Submit Now">
									</div>					
								</div>					
							</div>					
							<div class="clear"> </div>
						</form>
					</div>
				</div>
			</div>
			<footer id="footer" class="h_footer" style="margin-top:0px;">
				<div class="container-fluid wow fadeInUp" data-wow-delay="0.2s">
					@include('frontend.layout.footer_menu')
				</div>
			</footer>
		</section> <!-- Contact --> 
	</div> <!-- homep wrapper -->	
</div> <!-- Page-Wrap -->

	<div class="quick">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-6 col-xs-6"> <a href="tel:+918433303188"> +91 8433303188 </a> </div>
				<div class="col-sm-6 col-xs-6 enquire_now"> <a href="/contact-us"> Enquire Now </a> </div>
			</div>
		</div>
	</div>


</body>
</html>
<!-- For What's App Chat -->
<!-- <script async data-id="15722" src="https://cdn.widgetwhats.com/script.min.js"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109417895-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-109417895-1');
</script>

<!-- Javascript -->
<script type="text/javascript" src="/js/custom.js"></script>
<!--
<script type="text/javascript" src="/js/vendor.js"></script>
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
-->
<script>
// Created for an Articles on:
// https://www.html5andbeyond.com/bubbling-text-effect-no-canvas-required/

jQuery(document).ready(function($){
 
    // Define a blank array for the effect positions. This will be populated based on width of the title.
    var bArray = [];
    // Define a size array, this will be used to vary bubble sizes
    var sArray = [4,6,8,10];
 
    // Push the header width values to bArray
    for (var i = 0; i < $('.bubbles').width(); i++) {
        bArray.push(i);
    }
     
    // Function to select random array element
    // Used within the setInterval a few times
    function randomValue(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }
 
    // setInterval function used to create new bubble every 350 milliseconds
    setInterval(function(){
         
        // Get a random size, defined as variable so it can be used for both width and height
        var size = randomValue(sArray);
        // New bubble appeneded to div with it's size and left position being set inline
        // Left value is set through getting a random value from bArray
        $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
         
        // Animate each bubble to the top (bottom 100%) and reduce opacity as it moves
        // Callback function used to remove finsihed animations from the page
        $('.individual-bubble').animate({
            'bottom': '100%',
            'opacity' : '-=0.7'
        }, 3000, function(){
            $(this).remove()
        }
        );
 
 
    }, 350);
 
});
</script>

<script src="/js/cookieconsent.min.js"></script>
<!--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
-->
<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
		"popup": {
		  "background": "#383b75"
		},
		"button": {
		  "background": "#f1d600"
		}
	  },
	  "theme": "classic",
	  "type": "opt-in",
	  "content": {
		"dismiss": "Allow cookies",
		"link": "Learn More",
		"href": "https://www.abcdesigns.in/privacy-policy"
	  }
	})});
</script>
<script>
    $(function () {
        $('#subscribeform').on('submit', function (e) {
			e.preventDefault();
			$.ajax({
				type: 'post',
				url: '/addsubscriber',
				data: $('#subscribeform').serialize(),
				success: function (response) {
					console.log(response);
					if($.trim(response) == 'success'){
						$("#emailaddErr").text("Successfully Added");
					} else {
						$("#recaptchaErr").text(response);
					}
				}
			});
        });
    });
</script>
