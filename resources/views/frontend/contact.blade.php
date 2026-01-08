@include('sweetalert::alert')	
@include('frontend.layout.header')

<body>
@include('frontend.layout.nav')
	
	
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Contact area start -->
        <section class="contact__area-6">
          <div class="container g-0 pt-120 pb-110">
            <span class="line-3"></span>
            <div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="sec-title-wrapper"> <h2 class="sec-title-2 animation__char_come"> Let’s get in touch </h2> </div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="contact__text">
						<p> Contact us today and unlock the power of digital innovation for your business. </p>
					</div>
				</div>
            </div>
            <div class="row contact__btm">
				<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
					<div class="contact__info">
						<h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>Say Hello</h3>
						<ul> 
							<li><a href="tel:+918433303188">T: +91 84333 03188</a></li>
							<li><a href="tel:+918591079179">T: +918591079179</a></li>
							<li><a href="mailto:info@abcdesigns.in">E: info@abcdesigns.in </a></li>
							<li> D4/1, 2nd Floor, 20th Road, MIDC Central Rd,<br /> Marol MIDC Industry Estate, Near Suncity Hotel, <br /> Andheri East, Mumbai, Maharashtra - 400093.  
							<br /> 
							<a href="https://maps.app.goo.gl/6yKs2dXT5uuqyE3ZA" target="_blank"> <u> View On Google </u> </a> </li>
						</ul>
					</div>
				</div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="contact__form contact_form">
					<form method="post" action="/contact-us" id="contactform1" >
						@csrf
						<div class="row">
							<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
								<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name*" value="{{ old('name') }}" required="required">
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div>
							
							<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
								<input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Contact*" value="{{ old('contact') }}" required="required">
								@error('contact')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div>

							<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email*" value="{{ old('email') }}">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div> 

							<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
								<input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" >
								@error('subject')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div> 
							<div class="col-12 form-group required"> 
								<textarea type="textbox" class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Message*" value="" required>{{ old('message') }}</textarea>
								@error('message')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
								<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
								<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span> 
							</div>
						</div>
						<div class="form-group submit">
							<div class="btn_wrapper">
								<button class="wc-btn-primary btn-hover btn-item" id="submit" ><span></span> Send <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
							</div>
						</div>					
					</form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact area end -->
		<!-- SOFIYAAA -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const forms = document.getElementById("contactform1");
    const submit = document.getElementById("submit");

    forms.addEventListener("submit", function() {
        submit.value = "Sending...";   // Change button text
        submit.disabled = true;        // Disable button
    });

    // Re-enable button if form submission fails or validation blocks it
    forms.addEventListener("ajax:error", function() {
        submit.value = "Submit";
        submit.disabled = false;
    });
});
</script>
      </main>
		@include('frontend.layout.footer')
		</div>
	</div>