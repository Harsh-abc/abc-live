<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
	<?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div id="smooth-wrapper">
		<div id="smooth-content">
			<main>

				<section class="service__area-2 service-v3 pt-100">
					<div class="container">
						<div class="row pb-100">
							<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
								<div class="sec-title-wrapper">
									<h2 class="sec-title-2 title-anim"> Our Clients </h2>
								</div>
							</div>
						</div>
					</div>
				</section>


				<!-- Brand area start -->
				<section class="brand__area">
					<div class="container g-0 pt-60  pb-130">
						<span class="line-3"></span>
						<div class="row">
							<div class="col-xxl-12">
								<div class="sec-title-wrapper">
									<h2 class="sec-sub-title title-anim">BRANDS</h2>
									<h3 class="sec-title title-anim">We are happy to work with global <br> largest
										brands</h3>
								</div>
							</div>

							<div class="col-xxl-12">
								<div class="d-none loadr text-center"> <img src="/img/loading_2.gif" width="40px"
										class="img-fluid" /> </div>
								<div class="brand__list" id="client_list">
									<!--
							<div class="brand__item fade_bottom"> <img src="/img/clients/abbott.jpg" alt="Abbott"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/amazon_prime.jpg" alt="Amazon Prime"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/audi.jpg" alt="Audi"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/axis_bank.jpg" alt="Axis Bank"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/blue_rise.jpg" alt="Blue Rise"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/celebinas.jpg" alt="Celebinas"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/ciie.jpg" alt="CIIE"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/colors.jpg" alt="Colors"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/cummins.jpg" alt="Cummins"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/dbs.jpg" alt="DBS - Digital Banking Summit"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/deloitte.jpg" alt="Deloitte"class="img-fluid" /> </div>  
							<div class="brand__item fade_bottom"> <img src="/img/clients/dibella.jpg" alt="Dibella"class="img-fluid" /> </div>  
							-->
								</div>
							</div>
						</div>
					</div>
		</div>
		</section>

		<section class="pt-100">
			<?php echo $__env->make('frontend.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</section>

		</main>
		<?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	</div>

	<script src="/js/clients.js"></script><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/clients.blade.php ENDPATH**/ ?>