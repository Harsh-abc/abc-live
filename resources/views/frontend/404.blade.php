@include('frontend.layout.header')

<body>
	@include('frontend.layout.nav')
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
			@include('frontend.layout.footer')
		</div>
	</div>

</body>

</html>
