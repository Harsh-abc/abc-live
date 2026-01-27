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
					<h2 class="sec-title"> Graphic Designer </h2>
					<ul class="job__detail-meta">
						<li><span>Location</span> MIDC ANDHERI (E)</li>
						<li><span>Date</span> 15, MAY 2023</li>
						<li><span>Job Type</span> Full Time </li>
					</ul>
					<div class="job__detail-content">
						<h2> Job Description </h2>
						<p> As a Graphic Designer, you ll collaborate with other designers and analysts in the team. You ll be responsible for building documents from scratch or from a template, infographics and other advertising or pitch book collateral focused on fresh, informed design perspectives that are aligned with a specific brand. You ll combine a commitment to creating accurate collateral with a deep understanding of how to conceptualize, communicate, build and execute your ideas. You will be helping to formulate and execute improvement initiatives on the design and creative capabilities of the team through sharing of best practices and training. <br /> 
						Our ideal candidate will be excited about a fast-paced culture and love this type of work but should also obsess over making it even better. S/he should be a remarkable creative; a deeply motivated designer, a data-driven decision-maker, and a human-centered problem solver. S/he should inspire other designers and execute progressive ideas with laser focus. </p>
						 
						
						<h2> Responsibilities </h2>
						<ul>
							<li> Understand client brand in and out, attend regular calls with clients (internal and external) to understand their requests. </li>
							<li> Present insight-driven designs and concepts internally and externally. </li>
							<li> Research-based on the client brief and present new ideas. </li>
							<li> Work on minimal turnaround documents based in InDesign and PowerPoint. </li>
							<li> Brainstorm and execute projects with other designers and art directors with the aim of enhancing the creative and design skillsets of the department. </li>
							<li> Designing graphic content, illustrations, and infographics. </li>
							<li> Managing graphic designs from conception to delivery. </li>
							<li> Generating fresh concepts. </li>
							<li> Ensuring brand consistency throughout various marketing projects. </li>
							<li> Liaising between the marketing and design teams to ensure deadlines are met. </li>
							<li> Keeping up-to-date with industry developments. </li>
						</ul>
						
						<h2>  Skills And Qualifications </h2>
						<ul>
							<li> Bachelor’s degree in graphic design, art, or similar discipline </li>
							<li> Exceptional creativity and innovative design skills </li>
							<li> 2 year’s experience (academic and professional) with design software, including Illustrator, Photoshop, coral draw, after effects, InDesign etc. </li>
							<li> Proven experience with graphic design, with a strong portfolio of work </li>
							<li> Excellent communication and presentation skills </li>
							<li> Organizational and time-management skills for meeting deadlines in a fast-paced environment </li>
							<li> Knowledge of Wordpress and content management systems a plus. </li>
							<li> Photography experience and proficiency with photo-editing software. </li>
							<li> Update and maintain internal databases of designs, photography, and video. </li>
							<li> Manage the design and uploading process of all project material, understanding best practices for using a content management system. </li> 
							<li> Use trend intelligence and an understanding of the current and historical business and market to design and execute specific classifications </li> 
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
					<li><span>Working Hours</span> 10 AM to 07 PM</li>
					<li><span>Working Days</span> Weekly 6 days (Mon to Sat)</li>
					<li><span>Salary</span> 20k - 35k (Monthly)</li>
					<li><span>Vacancy</span> No of Vacancies: 2</li>
					<!-- <li><span>Deadline</span> 25 August 2025</li> -->
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
					<h5 class="modal-title" id="staticBackdropLabel"> Graphic Designers </h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
				</div>
				<div class="modal-body">
					<div class="contact__form contact_form"> 
						<form name="contactform" method="post" action="/career-add" enctype="multipart/form-data" id="contactform" onsubmit="loader_load()">
							<?php echo csrf_field(); ?>
							<input type="hidden" name="job_role" value="Graphic Designer" />
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
 <?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/career/graphic_designer.blade.php ENDPATH**/ ?>