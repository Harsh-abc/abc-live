<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
	<?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<style>
		.footer__area {
			display: none;
		}

		.error__content img {
			width: 400px;
		}
	</style>

	<div id="smooth-wrapper">
		<div id="smooth-content">
			<main>
				<!-- Error page start -->
				<section class="error__page">
					<div class="container">
						<span class="line-3"></span>
						<div class="row">
							<div class="col-xxl-12">
								<div class="error__content">
									<img src="/img/404.jpg" alt="Page not found">
									<h2>Sorry! page did not found</h2>
									<p>The page you are looking for doesn't exist or has been moved</p>
									<div class="btn_wrapper">
										<a href="/" class="wc-btn-primary btn-hover btn-item"><span></span> Back to
											<br>Homepage <i class="fa-solid fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Error page end -->
			</main>
			<?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>

</body>

</html>
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/frontend/404.blade.php ENDPATH**/ ?>