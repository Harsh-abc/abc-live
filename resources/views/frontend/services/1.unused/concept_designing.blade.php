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
	<title> Concept Designing - Website Designing, Web Development & Digital Marketing Services Mumbai </title>
	
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
<?php
	// Fetch the current page URL
	$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>">
	
@include('frontend.layout.header')
</head>
<body>
@include('frontend.layout.nav')
  
   <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Development area start -->
        <section class="development__area">
          <div class="container g-0 pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="sec-title-wrapper">
                  <h4 class=" animation__char_come">Concept Designing:</h4>
                  <h2 class="sec-title animation__char_come">  Transforming Ideas into Reality</h2>
                </div>
              </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="development__wrapper">
                  <div class="development__content">
                    <p> <strong> Ideation and Conceptualization: </strong> <br /> We start by understanding the client's vision, goals, and target audience. Through brainstorming sessions and in-depth discussions, we capture the essence of the concept and outline its core features. .</p>
					
                    <p> <strong> Sketching and Visualization: </strong> <br /> Using both traditional and digital tools, we create sketches and illustrations to translate the abstract concept into visual representations. Our designers meticulously craft every detail, exploring various angles, shapes, and forms to bring clarity to the design.  </p>
                  </div> 
                </div>
              </div>
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="development__img">
                  <img src="/img/service/dev-1.jpg" alt="Development Image" data-speed="auto">
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="development__img">
                  <img src="/img/service/dev-2.jpg" alt="Development Image">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Development area end -->


        <!-- Workflow area start -->
        <section class="workflow__area-6">
          <div class="container g-0 pb-130">
            <div class="line-3"></div>
            <div class="workflow__wrapper-6">
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="workflow__slide-6">
                    <h6 class="workflow__title-6">Planning and <br>sketching</h6>
                    <p>Modern and unique design practically point of view, it risks not meeting the huge expectations
                    </p>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="workflow__slide-6">
                    <h6 class="workflow__title-6">Team <br>working</h6>
                    <p>Modern and unique design practically point of view, it risks not meeting the huge expectations
                    </p>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="workflow__slide-6">
                    <h6 class="workflow__title-6">Flowchart and <br>wireframe</h6>
                    <p>Modern and unique design practically point of view, it risks not meeting the huge expectations
                    </p>
                  </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="workflow__slide-6">
                    <h6 class="workflow__title-6">User experience <br>Testing</h6>
                    <p>Modern and unique design practically point of view, it risks not meeting the huge expectations
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Workflow area end -->


        <!-- Service detail area start -->
        <section class="service__detail">
          <div class="container g-0 pb-140">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim"> Unlocking Infinite Possibilities through Innovative Digital Solutions: Empowering Your Digital Transformation Journey.</h2>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="service__detail-circle">
                  <span></span>
                </div>
              </div>
              <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9">
                <div class="service__detail-img">
                  <img src="/img/service/service-detail.png" alt="Service detail image">
                  <img src="/img/icons/shape-6.png" alt="Service shape image" class="sd-shape">
                </div>
                <div class="service__detail-content">
                  <p> <strong> User Experience Design: </strong> <br /> Great design is not just about aesthetics; it's about creating an exceptional user experience. We place a strong emphasis on ergonomics, usability, and intuitive interactions when designing concepts. Through user-centered design principles, we ensure that the end product seamlessly integrates into the lives of its users, enhancing their daily experiences.</p>
				  
                  <p> <strong> Visualization and Presentation: </strong> <br /> We bring our concepts to life through realistic renderings, animations, and virtual simulations. These visualizations provide clients with a clear understanding of the final product's appearance and functionality, allowing them to make informed decisions. Additionally, we create compelling presentations to effectively communicate the concept's unique value proposition, ensuring stakeholders are aligned and enthusiastic about the design. </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service detail area end -->


        <!-- FAQ area start -->
        <section class="faq__area">
          <div class="container g-0 pb-140">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="faq__img">
                  <img src="/img/faq.jpg" alt="FAQ Image" data-speed="auto">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="faq__content">
                  <h2 class="faq__title title-anim"> Just give us ideas, we are here to help you out.</h2>
					
					<p> At ABC Designs, our concept designing expertise enables us to transform abstract ideas into visually captivating and functional designs. By combining creativity, technical prowess, and a deep understanding of user needs, we deliver concepts that resonate with audiences, inspire innovation, and drive business success. </p>
					<br />
					<p> Whether you're a startup, an established company, or an individual with a visionary idea, we are committed to working closely with you to turn your concept into reality. Contact us today and let us bring your imagination to life. </p>
                  
				  
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FAQ area end -->


        <!-- CTA area start -->
        <section class="pt-30">
			@include('frontend.layout.cta')
		</section>
        <!-- CTA area end -->

      </main>

		@include('frontend.layout.footer')

    </div>
  </div>
