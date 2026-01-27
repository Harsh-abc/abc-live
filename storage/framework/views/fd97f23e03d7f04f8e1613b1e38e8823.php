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
					<h2 class="sec-title">Backend Developer</h2>
					<ul class="job__detail-meta">
						<li><span>Location</span> MIDC ANDHERI (E)</li>
						<li><span>Date</span> 15, MAY 2023</li>
						<li><span>Job Type</span> Full Time </li>
					</ul>
					<div class="job__detail-content">
						<h2> Job Description </h2>
						<p> We are looking for talented Laravel, PHP developers to join our team; ability and commitment are more important than the current skill set. We are looking for individuals with the ambition to succeed! <br /> The ideal candidate is a highly resourceful and innovative Laravel developer with extensive experience in the layout, design, and coding of websites specifically in PHP format. You must also possess a strong knowledge of web application development using PHP programming language and MySQL Server databases.  </p>
						
						<p> <strong> TAGS: </strong> PHP Developer, Laravel, MySQL, JavaScript, jQuery, AJAX, Cake PHP, REST APIs </p>
						
						<h2> Responsibilities </h2>
						<ul>
							<li> Extensive experience in PHP, Laravel, AJAX and MySQL. </li>
							<li> Strong SQL skills with the ability to understand, analyse, DB design and write complex SQL queries, and tuning the queries for optimization. </li>
							<li> Good knowledge of CSS3, HTML5, JavaScript, jQuery, Bootstrap. </li>
							<li> Good Knowledge of Cake PHP. </li>
							<li> Good understanding of complete Software Development Lifecycle (SDLC). </li>
							<li> Should be able to understand program flow chart, programming methods and documentation procedure. </li>
							<li> Good in working with API's with knowledge of REST, and SOAP architecture principles. </li>
							<li> Authentication and web security hands-on Experience of working on MVC architecture and integrating third party APIs, Payment gateways. </li>
							<li> REST APIs and Integrations technologies. </li>
						</ul>
						
						<h2>  Skills And Qualifications </h2>
						<ul>
							<li> Minimum 2 years of work experience as a PHP (Laravel) Developer. </li> 
							<li> Ability to translate business requirements into technical specifications. </li> 
							<li> Should be able to understand program flow chart, programming methods and documentation procedure. </li> 
							<li> Participating in a team-oriented environment to develop complex web-based applications. </li> 
							<li> Maintaining existing codebase, to include troubleshooting bugs and adding new features. </li> 
							<li> Work with us to contribute and plan ideas for features and improvements to the old & new projects. </li> 
							<li> Write clean, functional code on the back-end to develop new features, integrations and refine existing ones. </li> 
							<li> Familiarity with JavaScript/HTML5/CSS3. </li> 
							<li> Knowledge of Versioning control systems Git. </li> 
							<li> Good problem-solving skills. </li> 
							<li> Knowledge of Cake PHP will be added advantage. </li> 
							<li> Should have good communication & analytical skill. </li> 
							<li> Creating and maintaining documentation of the work. </li> 
							<li> Responsible for back-end. </li> 
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


      <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
  </div>

<script src="/js/custom-file-input.js"></script>

<!-- Modal 1 -->
	<div class="modal fade" id="application_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel"> Backend Developer </h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
				</div>
				<div class="modal-body">
					<div class="contact__form contact_form"> 
						<form name="contactform" method="post" action="/career-add" enctype="multipart/form-data" id="contactform" onsubmit="loader_load()">
							<?php echo csrf_field(); ?>
							<input type="hidden" name="job_role" value="Backend Developer" />
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
 <?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/career/backend_developer.blade.php ENDPATH**/ ?>