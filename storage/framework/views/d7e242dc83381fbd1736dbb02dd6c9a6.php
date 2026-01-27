<?php $__env->startSection('content'); ?>

<!-- ===== ===== --> 


		<div class="main-content side-content pt-0">
			<div class="container-fluid">
				<div class="inner-body">
					<!-- Page Header -->
					<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
							</ol>
						</div>
						<div class="d-flex">
						
						</div>
					</div>
					<!-- End Page Header -->
					<!--Row-->
					<div class="row row-sm">
						<div class="col-sm-12 col-lg-12 col-xl-8">
							<!--Row-->
							<div class="row row-sm  mt-lg-4">
								<div class="col-sm-12 col-lg-12 col-xl-12">
									<div class="card bg-primary custom-card card-box">
										<div class="card-body p-4">
											<div class="row align-items-center">
												<div class="offset-xl-4 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
													<h4 class="d-flex mb-3"> <span class="font-weight-bold text-white"> Hi, Admin  Should be here!</span> </h4>
													<p class="tx-white-7 mb-1">You have <b class="text-warning"><?php echo e($TodayEnquiries); ?></b> New Inquiries. </p>
												</div> <img src="/admin/img/pngs/work3.png" alt="user-img">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Row -->
							<!--Row-->
							<div class="row row-sm">
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
									<div class="card custom-card">
										<div class="card-body">
											<div class="card-item">
												<div class="card-item-icon card-icon">
													<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3"></path>
														<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path>
													</svg>
												</div>
												<div class="card-item-title mb-2">
													<label class="main-content-label tx-13 font-weight-bold mb-1">Total Enquiries</label>
												</div>
												<div class="card-item-body">
													<div class="card-item-stat">
														<h4 class="font-weight-bold"><?php echo e($EnquiriesCount); ?></h4>
														<small><b class="text-success">Include All </b> </small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
									<div class="card custom-card">
										<div class="card-body">
											<div class="card-item">												
												<div class="card-item-icon card-icon">
													<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
														<g>
															<rect height="14" opacity=".3" width="14" x="5" y="5"></rect>
															<g>
																<rect fill="none" height="24" width="24"></rect>
																<g>
																	<path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"></path>
																	<rect height="5" width="2" x="7" y="12"></rect>
																	<rect height="10" width="2" x="15" y="7"></rect>
																	<rect height="3" width="2" x="11" y="14"></rect>
																	<rect height="2" width="2" x="11" y="10"></rect>
																</g>
															</g>
														</g>
													</svg>
												</div>
												<div class="card-item-title mb-2">
													<label class="main-content-label tx-13 font-weight-bold mb-1">Total Careers</label></div>
												<div class="card-item-body">
													<div class="card-item-stat">
														<h4 class="font-weight-bold"><?php echo e($careersCount); ?> </h4> <small><b class="text-success"> </b> Include All</small> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card custom-card">
										<div class="card-body">
											<div class="card-item">
												<div class="card-item-icon card-icon">
													<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
														<path d="M0 0h24v24H0V0z" fill="none"></path>
														<path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z" opacity=".3"></path>
														<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"></path>
													</svg>
												</div>
												<div class="card-item-title  mb-2">
													<label class="main-content-label tx-13 font-weight-bold mb-1">Today's Career</label></div>
												<div class="card-item-body">
													<div class="card-item-stat">
														<h4 class="font-weight-bold"><?php echo e($Todaycareers); ?></h4> <small><b class="text-danger"> </b> Include All</small> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End row-->
							<!--row-->
							<div class="row row-sm">
								<!-- col end -->
								<div class="col-lg-12">
									<div class="card custom-card mg-b-20">
										<div class="card-body">
											<div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
												<div>
													<label class="main-content-label mb-2">Latest Inquiries</label> <span class="d-block tx-12 mb-3 text-muted">Stay updated with the most recent questions, topics, and discussions that have caught attention.</span>
												</div>
											</div>
											<div class="table-responsive tasks">
												<table class="table card-table table-vcenter mb-0  border">
													<thead>
														<tr>
															<th class="wd-lg-15p">Name</th>
															<th class="wd-lg-15p">Contact</th>
															<th class="">Email</th>
															<th class="">Message</th>
														</tr>
													</thead>
													<tbody>
														<?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<tr>
															<td class=" "> <?php echo e($item->name); ?> 
																<p class="mb-0 tx-11 text-muted" style="line-height:normal;"> <?php echo e(($item->created_at) ? date('d M Y',strtotime($item->created_at)) : ''); ?> <small class="text-muted d-block"><?php echo e(($item->created_at) ? date('H:s:i',strtotime($item->created_at)) : ''); ?></small> </p> 
															 </td>
															<td class=""> <?php echo e($item->contact); ?> </td>
															<td class=" "> <a href="mailto:<?=$item->email?>"> <?php echo e($item->email); ?> </a> </td>
															<td><p class="mb-0 max-width"><?php echo e($item->message); ?></p></td>
														</tr>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- col end -->
							</div>
							<!-- Row end -->
						</div>
						<!-- col end -->
						<div class="col-sm-12 col-lg-12 col-xl-4 mt-xl-4">
							<div class="card custom-card">
								<div class="card-body">
									<div class="row row-sm">
										<div class="col-6">
											<div class="card-item-title">
												<br />
												<label class="main-content-label tx-13 font-weight-bold mb-2">Total Subscriber</label>
												<span class="d-block tx-12 mb-0 text-muted"> </span>
											</div>
											<p class="tx-24 mt-2"><b class="text-primary"><?php echo e($SubscribesCount); ?>  </b></p>
										</div>
										<div class="col-6"> <img src="/admin/img/pngs/work.png" alt="image" class="best-emp"> </div>
									</div>
								</div>
							</div>
							<div class="card custom-card card-dashboard-calendar pb-0 career_table">
								<label class="main-content-label mb-2 pt-1">Recent CAREERS</label>
								<span class="d-block tx-12 mb-2 text-muted">Projects where development work is on completion</span>
								<table class="table table-hover m-b-0 transcations mt-2">
									<tbody>
										<?php $__currentLoopData = $Careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td style="width:40px;"> <?php echo e($k+1); ?> </td>
											<td>
												<div class="d-inline-block">
													<h6 class="mb-2 tx-15 font-weight-semibold"> <?php echo e($item->name); ?>  </h6>
													<p class="mb-0 tx-11 text-muted" style="line-height:normal;"> <?php echo e(($item->created_at) ? date('d M Y',strtotime($item->created_at)) : ''); ?> <small class="text-muted d-block"><?php echo e(($item->created_at) ? date('H:s:i',strtotime($item->created_at)) : ''); ?></small> </p>
												</div>
											</td>
											<td class="text-right"> <?php echo e($item->job_role); ?>  <hr /> <a href="/img/career/<?php echo e($item->attachment); ?>" download> Resume </a> </td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- col end -->
					</div>
					<!-- Row end -->
				</div>
			</div>
		</div>	
	<!-- End Main Content-->
 
<!-- ===== ===== --> 

<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--
<script type="text/javascript" src="/admin/plugins/chart.js/Chart.bundle.min.js"></script>
<script type="text/javascript" src="/admin/plugins/peity/jquery.peity.min.js"></script>
<script type="text/javascript" src="/admin/plugins/raphael/raphael.min.js"></script>
<script type="text/javascript" src="/admin/plugins/morris.js/morris.min.js"></script>
<script type="text/javascript" src="/admin/js/circle-progress.min.js"></script>
<script type="text/javascript" src="/admin/js/chart-circle.js"></script>
--> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>