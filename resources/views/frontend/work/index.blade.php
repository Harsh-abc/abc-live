@include('frontend.layout.header')

<body>
@include('frontend.layout.nav')
	
	
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>
	  
		<section class="service__area-2 service-v3 pt-100">
			<div class="container">
				<div class="row pb-100"> 
					<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
						<div class="sec-title-wrapper">
							<h2 class="sec-title-2 title-anim"> Our Works </h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		
        <!-- Blog area start -->
        <section class="blog__area no-pb blog__animation">
          <div class="container g-0 pt-60 pb-140">
            <span class="line-3"></span>
            <div class="row">
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
					<div class="sec-title-wrapper pb-0">
						<h2 class="sec-sub-title">Wide range of successful digital and print projects.</h2>
						<h3 class="sec-title">NEW INSIGHT</h3>
					</div>
				</div>
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
					<ul class="albumFilter text-center" id="work_menu">
						<!--
						<?php  $url =Request::url(); $split =array();$split = explode("/",$url); $cnt =count($split); if($cnt>=4){$page =$split[3];} else {$page ='';}?>
						<li> <a class="@if($page=='work')active @endif" href="work"> All <span>50</span> </a> </li>
						<li> <a class="@if($page=='work-web-design')active @endif" href="work-web-design"> UI Design & Development <span>08</span> </a> </li>
						<li> <a class="@if($page=='work-interactive-solutions')active @endif" href="work-interactive-solutions"> Interactive Solutions <span>60</span> </a>  </li>
						<li> <a class="@if($page=='work-branding')active @endif" href="work-branding"> Branding <span>25</span> </a> </li>
						<li> <a class="@if($page=='work-web-development')active @endif" href="work-web-development"> APP Development <span>30</span> </a> </li>
						<li> <a class="@if($page=='work-ecommerce')active @endif" href="work-ecommerce"> E-Commerce <span>10</span> </a> </li>
						<li> <a class="@if($page=='work-digital-marketing')active @endif" href="work-digital-marketing"> Digital Marketing <span>03</span> </a>  </li>
						-->
					</ul>
				</div>
			</div>
			<div class="row work_listing" id="worklisting">
				<!--
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/1.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/1.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Bharat Inclusion Summit </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/6.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/6.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Mariafe Artacho Del Solar</a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/5.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/5.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Micasa Admire Luxuries </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/8.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/8.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Julius Packiam </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/7.gif" alt="">
									<img class="image-box__item" src="/img/portfolio/7.gif" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Football Game </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/healthconcept_app.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/healthconcept_app.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> APP & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Health Concept </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/2.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/2.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> VIRTUAL REALITY </h4>
						<h5><a href="/work-detail" class="blog__title"> Experience Tetris </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/4.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/4.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> WEB DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> MP Interactive Screen GAME </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/3.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/3.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Sketcher Squad </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<video  id="video_thumb" autoplay loop muted>
										<source src="/img/portfolio/10.mp4" type="video/mp4">
										<source src="/img/portfolio/10.ogg" type="video/ogg">
										Your browser does not support HTML5 video.
									</video>
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Fully Faltoo NFT MTV 2022 </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/9.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/9.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Playtorium </a></h5> 
					</article>
				</div> 
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/11.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/11.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Nasscom NISC 2022 </a></h5> 
					</article>
				</div> 
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/13.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/13.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Tiny Library 2023 - VolumeZero </a></h5> 
					</article>
				</div> 
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/14.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/14.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> India At Cannes 2023 </a></h5> 
					</article>
				</div> 
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<video  id="video_thumb" autoplay loop muted>
										<source src="/img/portfolio/12.mp4" type="video/mp4">
										<source src="/img/portfolio/12.ogg" type="video/ogg">
										Your browser does not support HTML5 video.
									</video>
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> INTERACTIVE SOLUTIONS </h4>
						<h5><a href="/work-detail" class="blog__title"> Cummins Virtual Factor 2022 </a></h5> 
					</article>
				</div>
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/img/portfolio/15.jpg" alt="">
									<img class="image-box__item" src="/img/portfolio/15.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> UI DESIGN & DEVELOPMENT </h4>
						<h5><a href="/work-detail" class="blog__title"> Grace Turnkey Projects </a></h5> 
					</article>
				</div> 
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
					<article class="blog__item">
						<div class="blog__img-wrapper">
							<a href="/work-detail">
								<div class="img-box">
									<img class="image-box__item" src="/imgs/blog/1/3.jpg" alt="">
									<img class="image-box__item" src="/imgs/blog/1/3.jpg" alt="">
								</div>
							</a>
						</div>
						<h4 class="blog__meta"> MARKETING </h4>
						<h5><a href="/work-detail" class="blog__title"> Product Development </a></h5> 
					</article>
				</div>
				-->
            </div>
          </div>
        </section>
        <!-- Blog area end -->
		
      </main>
		@include('frontend.layout.footer')
		</div>
	</div>	
<script src="/js/work.js"></script>	
  