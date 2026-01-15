<footer class="footer__area">
	<div class="footer__top">
		<div class="container footer-line"></div>
		<img src="/img/footer_new.png" alt="Footer Image" data-speed="0.75">
	</div>
	<div class="footer__btm">
		<div class="container">
			<div class="row footer__row">
				<div class="col-xxl-12">
					<div class="footer__inner">
						<div class="footer__widget">
							<img class="footer__logo" src="/imgs/logo/logo_light.png" alt="Footer Logo">
							<p> ABC Designs offers you the complete design, development & marketing approach for your
								business. From planning your business approach to managing a fully functional business
								online.</p>
							<ul class="footer__social">
								<!-- <li><a href="https://www.facebook.com/abcdesigns.in/"><span><i class="fa-brands fa-facebook-f"></i></span></a></li> -->
								<li><a href="https://www.instagram.com/abcdesigns.in/"><span><i
												class="fa-brands fa-instagram"></i></span></a></li>
								<!-- <li><a href="https://x.com/abcdesignsindia/"><span><i class="fa-brands fa-twitter"></i></span></a></li> -->
								<li><a href="https://www.linkedin.com/in/abcdesignsindia/"><span><i
												class="fa-brands fa-linkedin"></i></span></a></li>
							</ul>
						</div>

						<div class="footer__widget-2">
							<h2 class="footer__widget-title">Information</h2>
							<ul class="footer__link">
								<li><a href="/">Home</a></li>
								<li><a href="/about">About Company</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/works">Our Work</a></li>
								<li><a href="/clients">Clients</a></li>
								<li><a href="/career">Career</a></li>
								<li><a href="/contact-us">Contact</a></li>
							</ul>
						</div>

						<div class="footer__widget-3">
							<h2 class="footer__widget-title">Contact Us</h2>
							<ul class="footer__contact">
								<li><a href="tel:+918433303188"> +91 84333 03188 </a></li>
								<li><a href="tel:+918591079179"> +91 85910 79179 </a></li>
								<li><a href="mailto:info@abcdesigns.in"> info@abcdesigns.in </a></li>
								<li>
									D4/1, 2nd Floor, 20th Road, MIDC Central Rd, Marol MIDC Industry Estate, Near
									Suncity Hotel, Andheri East, Mumbai, Maharashtra - 400093.
									<br />
									<a href="https://maps.app.goo.gl/6yKs2dXT5uuqyE3ZA" target="_blank"> <u> View On
											Google </u> </a>
								</li>
								<!-- <li style="margin-right:20px;">
									<div class="trustpilot-widget" data-locale="en-US"
										data-template-id="56278e9abfbbba0bdcd568bc"
										data-businessunit-id="68d3d6ac3839e04f85ec2415" data-style-height="52px"
										data-style-width="100%" data-token="68811fad-954f-4a4f-ab9b-35d1b151467d">
										<a href="https://www.trustpilot.com/review/abcdesigns.in" target="_blank"
											rel="noopener">Trustpilot</a>
									</div>

								</li> -->
							</ul>
						</div>

						<div class="footer__widget-4">
							<h2 class="project-title">Have a project in your mind?</h2>
							<!-- <div class="btn_wrapper">
								  <a href="/contact-us" class="wc-btn-primary btn-hover btn-item"><span></span> Contact us <i class="fa-solid fa-arrow-right"></i></a>
								</div>
								<h3 class="contact-time">09 : 00 AM - 07 : 00 PM</h3>
								<h4 class="contact-day">Monday - Saturday</h4> -->
							<div class="">
								<!-- <div class="img_container">
                                                <img src="/img/logo_light.png" alt="" class="img-fluid">
                                            </div> -->
								<form method="post" action="/contact-us" id="contactform"
									>
									@csrf
									<div class="form-row">
										<div class="form-floating mb-3">
											<input type="text" class="form-control @error('name') is-invalid @enderror"
												id="name" name="name" placeholder="Name*" value="{{ old('name') }}">
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label for="name">Name</label>
										</div>
									</div>
									<div class="form-row row d-flex ">
										<div class="form-floating mb-3 col-md-12">
											<input type="email"
												class="form-control @error('email') is-invalid @enderror" id="email"
												name="email" placeholder="Email" value="{{ old('email') }}">
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label for="email">Email*</label>
										</div>
										<div class="form-floating mb-3 col-md-12">
											<input type="number" minlength="10" maxlength="12"
												class="form-control @error('contact') is-invalid @enderror" id="contact"
												name="contact" placeholder="Contact*" value="{{ old('contact') }}"
												required="required">
											@error('contact')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label for="contact">Contact*</label>
										</div>
									</div>
									<!-- <div class="form-row">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="subject"
                                                            placeholder="name@example.com">
                                                        <label for="subject">Subject</label>
                                                    </div>
                                                </div> -->
									<div class="form-row">
										<div class="form-floating mb-3">
											<textarea type="textbox"
												class="form-control @error('message') is-invalid @enderror" id="message"
												name="message" placeholder="Message*" value=""
												required>{{ old('message') }}</textarea>
											@error('message')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label for="subject">Message</label>
										</div>
									</div>
									<div class="col-xxl-6 col-xl-6 col-12 form-group required">
										<div class="g-recaptcha"
											data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
										<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span>
									</div>
									<div class="form-group submit">
										<input type="submit" id="submitBtn" class="btn btn-dark w-100 submitBtn" value="Submit">
									</div>
								</form>
							</div>
						</div>

						<div class="footer__copyright">
							<p> <a href="/terms-conditions"> Terms & Conditions </a> | <a href="/privacy-policy">
									Privacy Policy </a> </p>
							<p>
								&copy;
								<script>document.write(new Date().getFullYear())</script> <a
									href="https://abcdesigns.in" target="_blank">ABC DESIGNS</a> All Rights Reserved.
							</p>
						</div>

						<div class="footer__subscribe">
							<form action="/subscribes" method="post">
								@csrf
								<input type="email" name="email" placeholder="Enter your email">
								<button type="submit" class="subs-btn"><i class="fa-solid fa-paper-plane"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="/js/app.js"></script>


</body class="dir-rtl">

</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109417895-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() { dataLayer.push(arguments); }
	gtag('js', new Date());
	gtag('config', 'UA-109417895-1');
</script>


<script>
document.addEventListener("DOMContentLoaded", function() {
    // Select all forms named 'contactform'
    const forms = document.querySelectorAll("form#contactform");

    forms.forEach(form => {
        const submitBtn = form.querySelector(".submitBtn");

        form.addEventListener("submit", function(e) {
            e.preventDefault(); // stop immediate submission

            // Change button text and disable
            submitBtn.value = "Sending...";
            submitBtn.disabled = true;

            // Give browser a tiny delay to render before submitting
            setTimeout(() => {
                form.submit(); // continue actual submission
            }, 50); // 50ms is enough
        });
    });
});
</script>


