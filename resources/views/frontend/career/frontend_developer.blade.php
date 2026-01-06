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
							<h2 class="sec-title-2 title-anim"> Career </h2>
						</div>
					</div>
				</div>
			</div>
		</section>
 
        <!-- Job detail start -->
        <section class="job__detail">
          <div class="container g-0 pb-110">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-8">
                <div class="job__detail-wrapper">
					<h2 class="sec-title">Frontend Developer</h2>
					<ul class="job__detail-meta">
						<li><span>Location</span> MIDC ANDHERI (E)</li>
						<li><span>Date</span> 15, MAY 2023</li>
						<li><span>Job Type</span> Full Time </li>
					</ul>
					<div class="job__detail-content">
						<h2> Job Description </h2>
						<p> We are looking for an HTML Developer who is motivated to combine the art of design with the art of programming. Responsibilities will include translation of the UI/UX design wireframes to actual code that will produce visual elements of the application. You will work with the UI/UX designer and bridge the gap between graphical design and technical implementation, taking an active role on both sides and defining how the application looks as well as how it works. </p>
						
						<h2> Responsibilities </h2>
						<ul>
							<li> 2+ years of experience in UI development. </li>
							<li> Highly skilled in front end languages/libraries and frameworks such as HTML, CSS, Bootstrap, JavaScript, AJAX, Three.js,  jQuery, Angular/React </li>
							<li> Professional written and interpersonal skill </li>
							<li> Develop new user-facing features. </li>
							<li> Build reusable code and libraries for future use. </li>
							<li> Ensure the technical feasibility of UI/UX designs. </li>
							<li> Optimize application for maximum speed and scalability. </li>
							<li> Assure that all user input is validated before submitting it to the back-end. </li>
							<li> Cooperating with the back-end developer in the process of building the RESTful API. </li>
							<li> A minimum of 1+ years of experience in any JavaScript framework like Angular or React. </li>
							<li> Collaborate with other team members and stakeholders. </li>
							<li> Maintain and improve the company website. </li>
							<li> Work in multidisciplinary teams with other professionals such as back-end developers. </li>
							<li> Build high-quality mock-ups and design different prototypes. </li>
							<li> Provide high-quality graphics and visual elements. </li>
							<li> Optimize our web applications for maximum speed. </li>
							<li> Design mobile-based features. </li>
							<li> Always stay consistent with our brand guidelines. </li>
							<li> Get feedback from users and customers. </li>
							<li> Make suggestions for better solutions to problems. </li>
						</ul>
						
						<h2> Skills And Qualifications </h2>
						<ul>
							<li> Proficient understanding of web mark up, including HTML5, CSS3 </li>
							<li> Basic understanding of server-side CSS pre-processing platforms, such as LESS and SASS </li>
							<li> Proficient understanding of client-side scripting and JavaScript frameworks, including jQuery & Three.js </li>
							<li> Good knowledge of Photoshop and Adobe XD, Figma. </li>
							<li> Proficient understanding of cross-browser compatibility issues and ways to work around them. </li>
							<li> Proficient understanding of code versioning tools, such as Git / Bit Bucket </li>
							<li> Good understanding of SEO principles and ensuring that applications will adhere to them. </li> 
						</ul> 
						
						<p> We’re committed to creating the happiest company working for and is proud to provide equal opportunity to all. All the qualified applicants will receive consideration for employment without  regard to race, color, ancestry, religion.</p>
					</div>

					<div class="job__apply btn_wrapper">
						<button class="wc-btn-primary btn-hover btn-item" data-bs-toggle="modal" data-bs-target="#application_form"><span></span> Apply this <br>Position <i class="fa-solid fa-arrow-right"></i></button>
					</div>  
                </div>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
				<div class="job__detail-sidebar">
				<ul>
					<li><span>Experience</span> 2+ Years Experience</li>
					<li><span>Working Hours</span> 10 AM to 06 PM</li>
					<li><span>Working Days</span> Weekly 6 days (Mon to Sat)</li>
					<li><span>Salary</span> 20k - 35k (Monthly)</li>
					<li><span>Vacancy</span> No of Vacancies: 2</li>
					<li><span>Deadline</span> 03 July 2023</li>
				</ul>
				</div>
              </div>
            </div>
          </div>
        </section>
        <!-- Job detail end -->


      </main> 


      @include('frontend.layout.footer')

    </div>
  </div>

<script src="/js/custom-file-input.js"></script>

	<!-- Modal 1 -->
	<div class="modal fade" id="application_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel"> Frontend Developer </h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
				</div>
				<div class="modal-body">
					<div class="contact__form contact_form"> 
						<form name="contactform" method="post" action="/career-add" enctype="multipart/form-data" id="contactform" onsubmit="loader_load()">
							@csrf
							<input type="hidden" name="job_role" value="Frontend Developer" />
							<div class="row"> 
								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required="required">
									@error('name')
										<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div> 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" placeholder="Phone Number" value="{{ old('contact') }}" required="required">
									@error('contact')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>	 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required="required">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div> 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="location" class="form-control @error('location') is-invalid @enderror" id="location" name="location" placeholder="Location" value="{{ old('location') }}" required="required">
									@error('location')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>  
								
								<div class="col-xxl-6 col-xl-6 col-12 form-group fileUpload required">  
									<input name="attachment" type="file" id="attachment" name="attachment" class="inputfile inputfile-3 upload_file"  required="required" accept="application/pdf"/>
									<label for="attachment"><img src="/img/icons/upload.png" alt="image"><span>Attach Your CV&hellip;</span></label>
									@error('attachment')
										<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div> 

								<div class="col-12 form-group required"> 
									<textarea type="textbox" class="form-control" id="message" name="message" placeholder="Message..." required ></textarea>
									@error('message')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div> 

								<div class="col-12 form-group required"> 
									<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
									<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span>
								</div>
								<div class="col-12 form-group required"> 
								   <!-- <input type="submit" name="submit" class="btn btn-dark w-100" value="Submit"> --> 
									<div class="form-btn apply-trigger">
										<button class="wc-btn-primary btn-hover" id="submit"><span></span> Submit <i class="fa-solid fa-arrow-right"></i></button>
									</div>
								</div> 
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
	</div>
 