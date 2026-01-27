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
						<h3 class="sec-title">News insignt</h3>
					</div>
				</div>
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
					<ul class="albumFilter text-center" id="work_menu"> 
					</ul>
				</div>
			</div>
			<div class="row work_listing" id="worklisting">
				 
            </div>
          </div>
        </section>
        <!-- Blog area end -->
		
      </main>
		<?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>	
<script src="/js/work.js"></script>	
  <?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/work/digital_marketing.blade.php ENDPATH**/ ?>