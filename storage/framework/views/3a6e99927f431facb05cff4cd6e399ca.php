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
					<h2 class="sec-title"> Performance Marketing Intern </h2>
					<ul class="job__detail-meta">
						<li><span>Location</span> MIDC ANDHERI (E)</li>
						<li><span>Date</span> 06, March 2025</li>
						<li><span>Job Type</span> Internship (Full-time/Part-time </li>
					</ul>
					<div class="job__detail-content">
						<h2> About ABC Designs </h2>  
						<p> ABC Designs is a creative digital agency passionate about helping brands grow through innovative design, web development, and powerful marketing strategies. We are seeking a driven and detail-oriented <strong>Performance Marketing Intern</strong> to join our dynamic team and assist in executing impactful paid marketing campaigns. </p> 

						<h2> Key Responsibilities </h2>
						<ul>
							<li> <strong> Campaign Management:</strong> Assist in planning, launching, and optimizing paid advertising campaigns across platforms like Google Ads, Facebook Ads, Instagram, and LinkedIn.   </li>
							<li> <strong> Keyword & Audience Research: </strong>  Conduct keyword research, competitor analysis, and audience segmentation to enhance targeting.  </li> 
							<li> <strong> Ad Copy & Creatives: </strong>  Collaborate with the design and content teams to craft compelling ad copy, visuals, and landing pages.  </li> 
							<li> <strong> Data Analysis: </strong>  Monitor and analyze campaign performance metrics (CTR, CPC, ROAS, etc.) and generate insightful reports.  </li> 
							<li> <strong> Budget Management: </strong>  Help track and manage ad budgets to ensure efficient spending and ROI optimization.   </li>
							<li> <strong> A/B Testing: </strong>  Conduct split tests on ads, landing pages, and CTAs to determine what resonates best with the audience.  </li> 
							<li> <strong> SEO & SEM Support: </strong>  Assist with on-page and off-page SEO strategies to complement paid campaigns.  </li> 
							<li> <strong> Market Trends & Insights: </strong>  Stay updated on industry trends, platform updates, and best practices to bring fresh ideas to the table. </li>
						</ul>  

						

						<h2> Requirements </h2>  

						<ul>
							<li>  <strong> Education: </strong>  Pursuing or recently completed a degree in Marketing, Business, Digital Media, or a related field.  </li> 
							<li> <strong> Skills: </strong>  Basic understanding of PPC, Google Ads, Facebook Business Manager, and Google Analytics.  </li> 
							<li> <strong> Tools: </strong>  Familiarity with tools like Google Keyword Planner, SEMrush, or Ahrefs (bonus points if you’ve used them!).   </li>
							<li> <strong> Analytical Mindset: </strong>  Love for data and the ability to translate numbers into actionable insights. </li>  
							<li> <strong> Creative Thinking: </strong>  Willingness to brainstorm and contribute ideas for ad creatives and campaign strategies.   </li>
							<li> <strong> Proactive Attitude: </strong>  A self-starter who’s eager to learn, experiment, and take ownership of tasks.  </li>
						</ul> 

						

						<h2> What You’ll Gain: </h2> 

						<ul>
							<li> <strong> Hands-On Experience: </strong>  Real-world exposure to end-to-end performance marketing processes.   </li>
							<li> <strong> Mentorship: </strong>  Guidance from experienced marketers and industry experts.   </li>
							<li> <strong> Career Growth: </strong>  Opportunities to transition into a full-time role based on performance.   </li>
							<li> <strong> Portfolio Building: </strong>  A chance to contribute to live campaigns and build a solid portfolio of marketing achievements. </li>
						</ul>  

 
						<h2>  How to Apply </h2> 
						<p> Send your resume, a brief cover letter, and any relevant project work or portfolios to *[Your Email/HR Contact]* with the subject line <strong>Application for Performance Marketing Intern – ABC Designs.</strong> </p>
 
						 
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
					<li><span>Salary</span> 10k - 25k (Monthly)</li>
					<li><span>Vacancy</span> No of Vacancies: 2</li>
					<li><span>Deadline</span> 03 April 2025</li>
				</ul>
				</div>
              </div>
            </div>
          </div>
        </section>
        <!-- Job detail end -->


      </main> 


      <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
  </div>

<script src="/js/custom-file-input.js"></script>

<!-- Modal 1 -->
	<div class="modal fade" id="application_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel"> Performance Marketing Intern </h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
				</div>
				<div class="modal-body">
					<div class="contact__form contact_form"> 
						<form name="contactform" method="post" action="/career-add" enctype="multipart/form-data" id="contactform" onsubmit="loader_load()">
							<?php echo csrf_field(); ?>
							<input type="hidden" name="job_role" value="Performance Marketing Intern" />
							<div class="row"> 
								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>" required="required">
									<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
										<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required">
									<input type="number" class="form-control <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="contact" name="contact" placeholder="Phone Number" value="<?php echo e(old('contact')); ?>" required="required">
									<?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
											<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>	 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required="required">
									<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
											<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 

								<div class="col-xxl-6 col-xl-6 col-12 form-group required"> 
									<input type="location" class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="location" name="location" placeholder="Location" value="<?php echo e(old('location')); ?>" required="required">
									<?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
											<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>  
								
								<div class="col-xxl-6 col-xl-6 col-12 form-group fileUpload required">  
									<input name="attachment" type="file" id="attachment" name="attachment" class="inputfile inputfile-3 upload_file"  required="required" accept="application/pdf" />
									<label for="attachment"><img src="/img/icons/upload.png" alt="image"><span>Attach Your CV&hellip;</span></label>
									<?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
										<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 

								<div class="col-12 form-group required"> 
									<textarea type="textbox" class="form-control" id="message" name="message" placeholder="Message..." required ></textarea>
									<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span class="invalid-feedback" role="alert">
											<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
 <?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/career/performance_marketing_intern.blade.php ENDPATH**/ ?>