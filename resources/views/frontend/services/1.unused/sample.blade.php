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
	<title> Website Designing, Web Development & Digital Marketing Services Mumbai </title>
	
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
                  <h2 class="sec-title animation__char_come">Web and mobile development</h2>
                </div>
              </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="development__wrapper">
                  <div class="development__content">
                    <p>Every decision we make needs to answer the million-dollar question: how will this benefit our partner’s goal best? We work to develop solutions</p>
                    <p>We like to be different, in the same way that every mission is different. Every project is an opportunity to create result that will help you</p>
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
                  <h2 class="sec-title title-anim">We replace unreliable wirefreme and expensive agencies for one of the  best organized layer.</h2>
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
                  <p>Receive your design within a few business days, and be updated on the process. Everything you need for a digitally driven brand. Defined proposition. Conceptual realisation. Logo, type, look, feel,  tone, movement, content - we've got it covered.</p>
                  <p>Getting your brand message out there. We create dynamic campaign creative that engages audiences,  wherever they are most talented. Bring your brand to life, communicate your value proposition with agile setup across creativity.</p>
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
                  <h2 class="faq__title title-anim">Product making for friendly users</h2>

                  <div class="faq__list">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Design should enrich our day
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that
                              builds brands. Through a process of iteration and prototyping design interfaces that
                              bring joy to people</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bring their individual experience and creative
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>This is the second item's accordion body. It is hidden by default, until the
                              collapse plugin adds the appropriate classes that we use to style each element. These
                              classes
                              control the overall appearance, as well as the showing and hiding via CSS transitions.
                              You can
                              modify any of this with custom CSS or overriding our default variables.</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Human centred design to challenges
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that
                              builds brands. Through a process of iteration and prototyping design interfaces that
                              bring joy to people</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Design should enrich our day
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that
                              builds brands. Through a process of iteration and prototyping design interfaces that
                              bring joy to people</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Developing core web applications
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that
                              builds brands. Through a process of iteration and prototyping design interfaces that
                              bring joy to people</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FAQ area end -->


        <!-- CTA area start -->
        <section class="pt-100">
			@include('frontend.layout.cta')
		</section>
        <!-- CTA area end -->

      </main>

		@include('frontend.layout.footer')

    </div>
  </div>
