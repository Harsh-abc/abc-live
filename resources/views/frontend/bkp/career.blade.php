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
	<title> Careers Opportunities - ABC Designs </title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'>
	<meta name="theme-color" content="#c90208" />
	
	<link rel="icon" type="image/png" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/favicon.ico" />
	
	<meta name="description" content="Wanna work with us? Simple post your resume or fill out the information on ABC Designs." />
	<meta name="keywords" content="abc designs, careers, life at abc designs, career at abc designs">
	<link rel="canonical" href="https://abcdesigns.in/career" />
	
@include('frontend.layout.header')
</head>

<body class="one-home-page" id="allwrap">
<!-- Inner Menu -->
@include('frontend.layout.inner_nav')

	<div class="workDetails">
        <div class="wrapper-body">	
            <section class="body-wrap clearfix">
				<div class="container">
					<div class="row text-center wow fadeInUp" data-wow-delay="0.2s">
						<h1>Career</h1>
						<h5>Wanna work with us?</h5>
					</div>	
					<br />
					<div class="row contact_bg">
						<div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
							<div class="">	
								<p> Please fill out the information below. Alternatively, you may call or send us an email using our contact details. <br />
								Asterisks (*) indicate fields to complete this transaction.</p> 
							</div>
						</div>

						<div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
							<div class="row contact_form">
								<form name="contactform"  method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="contactform">

									<div class="form-group">
										<div class="col-lg-12 required">
											<label for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php //echo $name;?>" required="required">
											<span id="nameErr"  class="error-message"><?php //echo $nameErr;?></span>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 required">
											<label for="phone">Contact</label>
											<input type="text" class="form-control" id="contact" name="contact" placeholder="Phone Number" value="<?php //echo $contact;?>" required="required">
											<span id="contactErr" class="error-message"><?php //echo $contactErr;?></span>									
										</div>					
									</div>

									<div class="form-group">
										<div class="col-lg-12 required">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php //echo $email;?>" required="required">
											<span id="emailErr" class="error-message"><?php //echo $emailErr;?></span>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 required">
											<label for="location">Location</label>
											<input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?php //echo $location;?>" required="required">
											<span class="error-message"><?php //echo $locationErr;?></span>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 fileUpload required">
											<input name="attachment" type="file" id="attachment" class="inputfile inputfile-3 upload_file"  required="required" />
											<label for="attachment"><img src="/img/icons/upload.png" alt="image"><span>Attach Your CV&hellip;</span></label>
											<span class="error-message"><?php //echo $attachmentErr;?></span>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 required">
											<label> Message : <span class="red">*</span></label>
											<textarea type="textbox" class="form-control" id="message" name="message" placeholder="Message" required/> <?php //echo $message_text;?> </textarea>
											<span id="messageErr" class="error-message"><?php //echo $messageErr;?></span>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 required">
											<!--<p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
											<p><input type="text" size="6" maxlength="5" name="captcha" value="" id="captcha"><br>
											<small>copy the digits from the image into this box</small></p>-->
											<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
											<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span>
										</div>
									</div>
									<div class="form-group submit">
										<div class="col-lg-12">
										   <input type="submit" name="submit" class = "btn btn-default" value="Submit">
										</div>
									</div>	
									<div class="clear"> </div>
								</form>
							</div>
						</div> <!--  -->
						<div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
							<br />
							<img src="/img/career.png" class="img-responsive center-block" alt=""/>	
						</div> <!--  -->
					</div><!-- row -->
					<br />	
				</div>
            </section>
        </div>
    </div>
 
@include('frontend.layout.footer')

<script src="/js/custom-file-input.js"></script>