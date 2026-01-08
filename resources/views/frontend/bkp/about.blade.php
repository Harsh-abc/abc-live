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
	<title> Website Designing in Mumbai | Digital Marketing Company Mumbai </title>
	
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
	<link rel="canonical" href="https://abcdesigns.in/about" />
	
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
                        <h1>About Us</h1>
                        <h5> Committed to QUALITY Committed to YOU ! </h5>                        
					</div>
					<br />
					<div class="row about_details">
						<div class="col-md-8 text-justify wow fadeInLeft" data-wow-delay="0.2s">
							<h3>We are, ABC Designs! </h3>
							<p> </p>
							<p> <strong> ABC Designs </strong> offers you the complete design, development & marketing approach for your business. From planning your business approach to managing a fully functional business online, we have you covered every step of the way. </p>
							<p> Our team of dynamic web designers, developers & digital marketing specialists are driven by creativity & passion to help you realize the digital solutions you've been looking for. </p>
							<p> With more than 6 years of experience behind us, we provide you with business solutions that suit your varying business needs. </p>
							<p> Let's get your Business Online Ready! </p>
						</div>

						<div class="col-md-4 text-justify wow fadeInRight" data-wow-delay="0.2s">
							<h3> Vision </h3>
							<p> Our VISION is to be a one stop portal for all E-commerce and marketing solutions for small and mid size business with affordable price, high quality and great customer care. </p>
							<hr />
							<h3> Mission </h3>
							<p> Our MISSION is to challenge ourselves, as well as our clients, to explore new growth opportunities online and in print that lead to successful and creative brand experiences. </p>
						</div>
					</div>

					<br />

					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="creative_process"> 
								<div class=" wow fadeInUp" data-wow-delay="0.2s">
									<img src="/img/our_creative_process.png" class="img-responsive center-block process" />	
									<div class="about_border"> <img src="/img/border.png" class="img-responsive center-block" /> </div>
									<div class="about_bg">  </div>
								</div>

								<div class="breifing about_process wow fadeInRight" data-wow-delay="0.2s"> 
									<ul class="process_details">
										<li><h2>Briefing</h2></li>
										<li> <p>Understanding the broad requirements <br> and drafting a project outline</p></li>
									</ul>
								</div> 

								<div class="reserch about_process wow fadeInRight" data-wow-delay="0.2s"> 
									<ul class="process_details">
										<li><h2>Research</h2></li>
										<li> <p> Broad research on the task at hand <br>along with competitive analysis</p></li>
									</ul>
								</div> 

								<div class="concept about_process wow fadeInDown" data-wow-delay="0.2s">   
									<ul class="process_details">
										<li> <h2>Conceptualizing</h2></li>
										<li> <p>Brainstorming, generation of ideal concept, <br>sharing ideas with the client</p></li>
									</ul>
								</div> 
								<div class="develop about_process wow fadeInDown" data-wow-delay="0.2s">                
									<ul class="process_details_right">
										<li><h2>Design/Development</h2></li>
										<li> <p>Implementing the conceptualized idea <br>to flow through the desired layout</p></li>
									</ul>
								</div> 
								<div class="feedback about_process wow fadeInLeft" data-wow-delay="0.2s"> 
									<ul class="process_details_right">
										<li><h2>Feedback</h2></li>
										<li> <p>Artwork / Design approval for adherence <br> to specifications set by the client</p></li>
									</ul>                   
								</div> 
								<div class="delivery about_process wow fadeInLeft" data-wow-delay="0.2s"> 
									<ul class="process_details_right">
										<li><h2>Delivery</h2></li>
										<li> <p>Preparation for final output</p></li>
									</ul>
								</div>
							</div> <!-- Creative Process -->
						</div>
					</div> <!-- Row -->
				</div> <!-- Container -->

				

				<!-- About Team -->
				<!--
				<div class="about_team">
					<div class="container">
						<div class="row text-center">
							<h1>Our Team</h1>
							<h5>Our Small Team with Big Ideas</h5>							
							<p class="opnsans topcntc">If creativity spurs you & development interests you then come be part of our team. </p>
						</div> <!-- Row -- >
						<div class="row">
							<div class="team-wrap clearfix">
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="team-dtl clearfix clearfix">
										<div class="team-fig"> <img src="/img/team/shreepad_gawde.jpg" alt="Shripad Gawde"> </div>
										<div class="team-info">
											<h5>Shree </h5>
											<h6>Founder </h6>
											<p class="opnsans"> As the Founder, Business Development Director & IT Maven Shree is essentially the heart & soul of the company.
											With years of experience behind him, he has been the constant factor behind the growth of the company. A gentle soul he goes the extra mile for customer satisfaction every time. </p>
										</div>
									</div>
								</div> <!-- Team COntainer -- >
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="team-dtl clearfix clearfix">
										<div class="team-fig"> <img src="/img/team/sanaullah_khan.jpg" alt="Sanaullah Khan"> </div>
										<div class="team-info">
											<h5>Sanaullah Khan</h5>
											<h6>Front-End Developer </h6>
											<p class="opnsans"> He is the face behind the design & development of innovative & exciting front end websites. With proven knowledge in front end web coding he always keeps the customer first resulting in user friendly, functional & accessible websites. </p>
										</div>
									</div>
								</div> <!-- Team COntainer -- >
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="team-dtl clearfix clearfix">
										<div class="team-fig"> <img src="/img/team/sunil_jaiswar.jpg" alt="Sunil Jaiswar"> </div>
										<div class="team-info">
											<h5>Sunil Jaiswar</h5>
											<h6>SR. Web Developer </h6>
											<p class="opnsans"> Sunil handles web development projects. As a web developer he understands inherently the scope and time each project would involve. His expertise in coding makes development faster & easier for the team.  </p>
										</div>
									</div>
								</div> <!-- Team COntainer -- >
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="team-dtl clearfix clearfix">
										<div class="team-fig"> <img src="/img/team/ajay_narayankar.jpg" alt="Ajay Narayankar"> </div>
										<div class="team-info">
											<h5>Ajay Narayankar</h5>
											<h6>JR. Web Developer </h6>
											<p class="opnsans"> With a quiet demeanor Ajay sets himself apart. His love for coding is undeniable and for all to see. </p>
										</div>
									</div>
								</div> <!-- Team COntainer -- >
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="team-dtl clearfix clearfix">
										<div class="team-fig"> <img src="/img/team/bhumi_patel.jpg" alt="Bhumi Patel"> </div>
										<div class="team-info">
											<h5>Bhumi Patel</h5>
											<h6>JR. Web Developer </h6>
											<p class="opnsans">Bhumi is a problem solver and solution seeker till the end.  Her skills in web development are as good as her smile.  </p>
										</div>
									</div>
								</div> <!-- Team COntainer -- >  
							</div> <!-- Team Wrap -- >
						</div> <!-- Row -- >
					</div> <!-- Container -- >
                </div> <!-- Container -->

				<br />

				<div class="container">
					<div class="row">
						@include('frontend.layout.footer_form')
                    </div> <!-- Row -->
                </div> <!-- Container -->
            </section>
        </div>
    </div>

@include('frontend.layout.footer')