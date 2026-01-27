<?php $__env->startSection('content'); ?>

<!-- ===== ===== --> 

	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Career </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Career</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							 
						</div>
					</div>
				</div>
				<!-- End Page Header --> 
				<!--Row-->
				<div class="row row-sm">
					<div class="col-sm-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-header border-bottom-0">
								<div class="row">			
									<div class="col-sm-6"> <label class="main-content-label mb-2"> Career Inquiry </label> </div>
									<div class="col-sm-6">
										<?php if($message = Session::get('error')): ?>
											<div class="alert alert-danger">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong><?php echo e($message); ?></strong>
											</div>
										<?php endif; ?>

										<?php if($message = Session::get('success')): ?>
											<div class="alert alert-success alert-block">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong><?php echo e($message); ?></strong>
											</div>
										<?php endif; ?>
									</div>
								</div> 
							</div>
							<hr />
							<div class="card-body pt-0">
								<div class="table-responsive career_table">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:40px">Id</th>
											<th style="width:110px">Date &amp; Time </th> 
											<th> Name </th>  
											<th style="width:150px"> Contact </th> 
											<th> Location </th> 
											<th> Resume </th>  
											<th> Message  </th>  
											<th style="width:140px"> Actions </th> 
										</tr> 

										<?php $__currentLoopData = $Careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td><?php echo e($Careers->firstItem() + $k); ?> </td>	
											<td> <?php echo e(date('Y M d',strtotime($item->created_at))); ?> <br>  <small class="text-muted"><?php echo e(date('H:i a',strtotime($item->created_at))); ?></small>  </td>									
											<td> <?php echo e($item->name); ?> </td>  
											<td>
												<a href="email:<?php echo e($item->email); ?>"> <?php echo e($item->email); ?> </a> <hr />
												<a href="tel:<?php echo e($item->contact); ?>"> <?php echo e($item->contact); ?> </a>
											</td> 
											<td> <?php echo e($item->location); ?> </td> 
											<td> <?php echo e($item->job_role); ?> <hr /> <a href="/img/career/<?php echo e($item->attachment); ?>" download> Resume </a> </td>
											<td> <div class="text-box" data-maxlength="150"> <p> <?php echo e($item->message); ?> </p></div></td> 
										<td class="actions">
	<a href="#" 
	   class="btn ripple btn-warning viewCareer"
	   data-toggle="modal"
	   data-target="#exampleModal"
	   data-name="<?php echo e($item->name); ?>"
	   data-email="<?php echo e($item->email); ?>"
	   data-contact="<?php echo e($item->contact); ?>"
	   data-location="<?php echo e($item->location); ?>"
	   data-message="<?php echo e($item->message); ?>"
	   data-resume="<?php echo e(url('/img/career/' . $item->attachment)); ?>"
	>
		View
	</a>

	<a onclick="return confirm('Are you sure?')" 
	   href="/admin/career/delete/<?php echo e(base64_encode($item->id)); ?>" 
	   class="btn ripple btn-danger">
		<i class="fa fa-trash" aria-hidden="true"></i>
	</a>
</td>

										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									</table>
									<?php echo e($Careers->links()); ?>

								</div>
							</div>
						</div>
					</div>
					<!-- col end -->
				</div>
				<!-- Row end -->
			</div>
		</div>
	</div>	

<script>
$(document).ready(function() {
	$('.viewCareer').on('click', function () {
		$('#modal-name').text($(this).data('name'));
		$('#modal-email').text($(this).data('email'));
		$('#modal-contact').text($(this).data('contact'));
		$('#modal-location').text($(this).data('location'));
		$('#modal-message').text($(this).data('message'));
		$('#modal-resume').attr('href', $(this).data('resume'));
	});
});
</script>


<!-- End Main Content-->

<!-- ===== ===== --> 

<!-- Career Details -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inquiry</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr><th>Name</th><td><span id="modal-name"></span></td></tr>
					<tr><th>Email</th><td><span id="modal-email"></span></td></tr>
					<tr><th>Contact</th><td><span id="modal-contact"></span></td></tr>
					<tr><th>Location</th><td><span id="modal-location"></span></td></tr>
					<tr><th>Resume</th><td><a id="modal-resume" href="#" target="_blank" download>Download Resume</a></td></tr>
					<tr><th>Message</th><td><span id="modal-message"></span></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>



<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<script>
$(".text-box p").text(function(index, currentText) {
  var maxLength = $(this).parent().attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  } 
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/career.blade.php ENDPATH**/ ?>