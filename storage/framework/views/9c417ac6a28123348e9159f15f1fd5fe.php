<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
?>

<body>
	<?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<style>
		/* .footer__area {
			display: none;
		} */

		.error__content img {
			width: 400px;
		}

		<?php if ($path == "/thanks"): ?>
		.footer__top {
			display: none !important;
		}

		<?php endif; ?>
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
									<img src="/img/thanks.png" class="img-fluid mx-auto d-block" />
									<h2>Thank You for Reaching Out!</h2>
									<p> We appreciate your inquiry. One of our representatives will get back to you
										shortly. </p>


									<div class="redirecting">
										<div id="countdown">10</div>
										<p> Redirecting to Home Page...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Error page end -->
				<?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</main>
		</div>
	</div>

</body>

</html>

<script>
	$(document).ready(function () {
		let countdown = 10;
		const timer = setInterval(function () {
			countdown--;
			$('#countdown').text(countdown);
			if (countdown <= 0) {
				clearInterval(timer);
				window.location.href = "/"; // Replace with your home page URL
			}
		}, 1000);
	});
</script><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/thanks.blade.php ENDPATH**/ ?>