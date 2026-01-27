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
									<h2 class="sec-title"> Digital Marketing Manager</h2>
									<ul class="job__detail-meta">
										<li><span>Location</span> MIDC ANDHERI (E)</li>
										<li><span>Date</span> 19, AUG 2025</li>
										<li><span>Job Type</span> Full Time </li>
										<li><button class="apply-for-job" data-bs-toggle="modal"
												data-bs-target="#application_form"><span></span> Apply this
												Position
												<i class="fa-solid fa-arrow-right"></i></button> </li>
									</ul>
									<div class="job__detail-content">
										<h2> Job Description </h2>
										<p> ABC Designs is a leading digital marketing, IT solutions, and creative
											agency with 14+ years of expertise in branding, website development, SEO,
											SEM, ORM, and social media management. We partner with clients across
											industries to deliver measurable growth, visibility, and impactful digital
											strategies. <br />
											We are looking for a Digital Marketing Manager with 2+ years of proven
											experience to join our dynamic team and lead our digital campaigns with
											creativity, strategy, and performance-driven focus. </p>


										<h2> Responsibilities </h2>
										<ul>
											<li>Develop, implement, and manage <b>360° digital marketing
													strategies</b> across
												multiple platforms (Google Ads, Meta Ads, LinkedIn Ads, YouTube, etc.)
											</li>
											<li> Driveb <b>SEO, SEM, SMO, and SMM</b>  activities to maximize ROI and
												improve
												brand visibility.
											</li>
											<li>Oversee <b> PPC campaigns, keyword research, competitor analysis, and
													performance tracking.</b> </li>
											<li> Manage and optimize <b>social media channels</b>  (Facebook, Instagram,
												LinkedIn, Twitter, YouTube) for engagement and lead generation.
											</li>
											<li> Create and monitor <b>email marketing campaigns, content strategies,
													and
													influencer collaborations.</b> </li>
											<li>Use <b>Google Analytics, Google Tag Manager, Search Console, and other
													tools</b>  for performance tracking and reporting.</li>
											<li> Collaborate with creative, content, and development teams
												for <b>landing
													pages, ad creatives, and campaign execution.</b> </li>
											<li> Stay updated with the latest <b>digital marketing trends, tools, and
													technologies</b>  to maintain a competitive edge </li>

											<li>Manage ORM (Online Reputation Management) activities by monitoring
												reviews, forums, blogs, and brand mentions. </li>
											<li> Prepare and present <b>monthly performance reports, insights, and
													growth
													strategies</b>  to management and clients. </li>
										</ul>

										<h2>Key Skills And Qualifications </h2>
										<ul>
											<li> Minimum 2+ years of experience in Digital Marketing / Performance
												Marketing / Online Marketing. </li>
											<li> Strong knowledge of SEO, SEM, PPC, Google Ads, Facebook Ads, Instagram
												Ads, LinkedIn Ads, and Display Marketing.</li>
											<li> Hands-on experience in Google Analytics, Google Tag Manager, Search
												Console, SEMrush, Ahrefs, Moz, HubSpot, or similar tools. </li>
											<li> Expertise in content marketing, email campaigns, lead generation, and
												conversion optimization.
											</li>
											<li> Strong understanding of marketing funnels, attribution models
												(first-touch, last-touch, multi-touch), and ROI-driven campaigns. </li>
											<li>Excellent communication, analytical, and project management skills.
											</li>
											<li> Ability to handle multiple campaigns, manage budgets, and deliver
												results under deadlines. </li>
										</ul>

										<h2> Education & Qualifications </h2>
										<ul>
											<li>Bachelor’s degree in Marketing, Business Administration, Mass
												Communication, or related field.</li>
											<li>Certification(s) in Google Ads, SEO, Digital Marketing, HubSpot, or
												Facebook Blueprint will be an added advantage.</li>
										</ul>

										<h2> What We Offer </h2>
										<ul>
											<li>Competitive salary with performance-based incentives.</li>
											<li>Opportunity to work on diverse industries & global brands.</li>
											<li>Creative, collaborative, and growth-focused work environment.</li>
											<li>Professional development and continuous learning opportunities.</li>
										</ul>

										<p> We’re committed to creating the happiest company working for and is proud to
											provide equal opportunity to all. All the qualified applicants will receive
											consideration for employment without regard to race, color, ancestry,
											religion.</p>
									</div>

									<div class="job__apply btn_wrapper">
										<button class="wc-btn-primary btn-hover btn-item" data-bs-toggle="modal"
											data-bs-target="#application_form"><span></span> Apply this <br>Position <i
												class="fa-solid fa-arrow-right"></i></button>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
								<div class="job__detail-sidebar">
									<ul>
										<li><span>Experience</span> 2+ Years Experience</li>
										<li><span>Working Hours</span> 10 AM to 07 PM</li>
										<li><span>Working Days</span> Weekly 6 days (Mon to Sat)</li>
										<li><span>Salary</span> 20k - 35k (Monthly)</li>
										<li><span>Vacancy</span> No of Vacancies: 2</li>
										<!-- <li><span>Deadline</span> 30 AUG 2023</li> -->
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
	<div class="modal fade" id="application_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content career-page-modal">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel"> Digital Marketing </h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="contact__form contact_form">
						<form name="contactform" method="post" action="/career-add" enctype="multipart/form-data"
							id="contactform" onsubmit="loader_load()">
							@csrf
							<input type="hidden" name="job_role" value="Digital Marketing" />
							<div class="row">
								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="text" class="form-control @error('name') is-invalid @enderror"
										id="name" name="name" placeholder="Name" value="{{ old('name') }}"
										required="required">
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="number" class="form-control @error('contact') is-invalid @enderror"
										id="contact" name="contact" placeholder="Phone Number"
										value="{{ old('contact') }}" required="required">
									@error('contact')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="email" class="form-control @error('email') is-invalid @enderror"
										id="email" name="email" placeholder="Email Address" value="{{ old('email') }}"
										required="required">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="location" class="form-control @error('location') is-invalid @enderror"
										id="location" name="location" placeholder="Location"
										value="{{ old('location') }}" required="required">
									@error('location')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-xxl-6 col-xl-6 col-12 form-group fileUpload required">
									<input name="attachment" type="file" id="attachment" name="attachment"
										class="inputfile inputfile-3 upload_file" required="required"
										accept="application/pdf" />
									<label for="attachment"><img src="/img/icons/upload.png" alt="image"><span>Attach
											Your CV&hellip;</span></label>
									@error('attachment')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-12 form-group required">
									<textarea type="textbox" class="form-control" id="message" name="message"
										placeholder="Message..." required></textarea>
									@error('message')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<div class="col-12 form-group required">
									<div class="g-recaptcha" data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5">
									</div>
									<span id="captchaErr" class="error-message"><?php //echo $captchaErr;?></span>
								</div>
								<div class="col-12 form-group required">
									<!-- <input type="submit" name="submit" class="btn btn-dark w-100" value="Submit"> -->
									<div class="form-btn apply-trigger">
										<!-- <button class="wc-btn-primary btn-hover" id="submit"><span></span> Submit <i
												class="fa-solid fa-arrow-right"></i></button> -->
										<button class="apply-for-job" id="submit"><span></span> Apply this
											Position
											<i class="fa-solid fa-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>