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
	<title> Contact Us - ABC Designs </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="Work with one of the Best Websites Designing, Web Development Company based in Mumbai, India, ABC Designs." />
	<meta name="keywords" content="abc designs, contact, website designing, web development, web designing company">
	<link rel="canonical" href="https://abcdesigns.in/contact-us" />
	
@include('frontend.layout.header')
</head>
<style>
	footer { margin-top:0px; }
</style>
<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')

	<div class="workDetails">
        <div class="wrapper-body">
            <section class="body-wrap clearfix">
				<div class="container">
					<div class="row text-center wow fadeInUp" data-wow-delay="0.2s">
						<h1>Contact Us</h1>
						<h5>And send your queries or ask for quote</h5>
					</div>	
					<br />
					<div class="row contact_bg">
						<div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
							<div class="">	
								<h3> Get In Touch </h3>
								<p> Please fill out the information below. Alternatively, you may call or send us an email using our contact details. <br />
								Asterisks (*) indicate fields to complete this transaction.</p>       	
							</div>
							<div class="row contact_form">
								<form name="contactform"  method="post" action="/contacts" id="contactform" onSubmit="return validatePopUpForm(this)">
									@csrf
									<div class="">
										<div class="form-group required">
											<label for="name">Name</label>
											<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name..." value="{{ old('name') }}" required="required">
											@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>
										
										<div class="form-group required">
											<label for="contact">Contact</label>
											<input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Contact..." value="{{ old('contact') }}" required="required">
											@error('contact')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>

										<div class="form-group required">
											<label for="email">Email-ID</label>
											<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email..." value="{{ old('email') }}" required="required">
											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div> 
										<div class="form-group required">
											<label for="message">Your Message</label>
											<textarea type="textbox" class="form-control" id="message" name="message" placeholder="Message" value="" required></textarea>
											@error('place')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>
										<div class="form-group required"> 
											<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
											<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span> 
										</div>
									</div>
									<div class="form-group submit">
										<input type="submit" name="submit" class="btn btn-dark w-100" value="Submit">
									</div>					
								</form>
							</div>
						</div> <!--  -->
						<div class="col-md-6 col-sm-12 contact_details wow fadeInLeft" data-wow-delay="0.2s">
							<div class="row info">
								<div class="col-lg-12">
									<h3> Contact Information </h3>
								</div>
								<div class="col-sm-12">
									<h4> <span><i class="fa fa-home"></i></span> Address : </h4>
									<p> <strong> Abc Designs </strong> <br />
									405, 4th Floor, Akruti Arcade, <span class="brake"> </span>
									Near Azad Nagar Metro Station,<span class="brake"> </span>
									J P Road, Andheri West,<span class="brake"> </span>
									Mumbai - 400053.</p>
									<hr />
									<h4> <span><i class="fa fa-phone"></i></span> Call us for any Query : </h4>
									<p>  022 6699 9339 </p>
									<hr />
									<h4> <span><i class="fa fa-envelope-o"></i></span> Send us email for any Information : </h4>
									<p> <a href="mailto:info@abcdesigns.in"> info@abcdesigns.in </a>  </p>
									<hr />
								</div>
								<div class="col-md-12 col-sm-6 contact_social">
									<h4> Social :</h4>
									<a href="https://www.facebook.com/abcdesigns.in" target="_blank" class="facebok" data-toggle="tooltip" data-placement="top" title="Facebook">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a href="https://twitter.com/abcdesignsindia" class="twitter" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>	
									<a href="https://www.linkedin.com/in/abcdesignsindia" class="linkedin" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkedin">  <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
									<a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram">  <i class="fa fa-instagram" aria-hidden="true"></i> </a>
									<a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube">  <i class="fa fa-youtube" aria-hidden="true"></i> </a>
								</div>
							</div> <!-- Row -->	
						</div> <!--  -->
					</div><!-- row -->
					<br />					
				</div>
				<br />

				<div class="map wow fadeInDown" data-wow-delay="0.2s">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5476364468295!2d72.8328810149896!3d19.127491087058406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63cda53a215%3A0xce3a539607655c97!2sABC+Designs!5e0!3m2!1sen!2sin!4v1503563284207" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 					
				</div>
            </section>
        </div>
    </div>
 
@include('frontend.layout.footer')

 