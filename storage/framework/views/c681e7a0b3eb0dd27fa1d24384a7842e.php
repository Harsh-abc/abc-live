<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; 
$url = url('/');
?>
<!-- ===== ===== --> 


	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Seo Pages </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Seo</li>
							<li class="breadcrumb-item active" aria-current="page">Seo Pages</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							<!--
								<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a>
							-->
							<a href="/admin/seo/add" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> Add New SEO Tags </a>
							<!--<a href="/admin/seo/add-url" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> Add New SEO URL </a> -->
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
							<div class="card-body pt-0">
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:50px">Id</th>
											<th style="width:110px"> Created At </th> 
											<th>Page Name</th>  
											<th>Language</th>  
											<th> URL </th>    
											<th> Meta Title </th> 
											<!--											
											<th> Meta Keywords </th>  
											<th> Meta Description </th> 
											-->
											<th class="text-center" style="width:60px"> Status </th>
											<th style="width:190px"> Actions </th>
										</tr> 
										<?php $__currentLoopData = $seo_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td class="text-center"><?php echo e($k+1); ?> </td>
											<td> <?php echo e(($item->created_at) ? date('Y-m-d',strtotime($item->created_at)) : ''); ?><br>  <small class="text-muted"><?php echo e(($item->created_at) ? date('H:i:A',strtotime($item->created_at)) : ''); ?></small>  </td> 
											<?php
												if ($item->language == "en") {
													$lang = "English";
												} else if ($item->language == "es"){
													$lang = "Spanish";
												} else if ($item->language == "ar"){
													$lang = "Arabic";
												} else if ($item->language == "sw"){
													$lang = "Swahili";
												} else if ($item->language == "fr"){
													$lang = "French";
												} else{
													$lang = "NA";
												}
											?>
											<td> <?php echo e($item->page_name); ?></td>
											<td class="language_badge">
												
												<span class="badge bg-primary"><?php echo e($lang); ?></span> 
												<!--<span class="badge bg-primary">Spanish</span> 
												<span class="badge bg-primary">Arabic</span> 
												<span class="badge bg-primary">Swahili</span> 
												<span class="badge bg-primary">French</span> -->
											</td>
											<td> 
												<?php if($item->urls == '/'): ?>
												<a href="/" target="_blank"><?php echo e($url); ?></a>
												<?php else: ?>
												<a href="/<?php echo e($item->urls); ?>" target="_blank"><?php echo e($url); ?>/<?php echo e($item->urls); ?></a>
												<?php endif; ?>
											</td>  
											<td> <?php echo e($item->title); ?> </td>
											
											<?php if($item->status == 0): ?> 
												<td><a href="seo/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											<?php else: ?> 
												<td> <a href="seo/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											<?php endif; ?>
											<td class="actions">
												<a href="/admin/seo/edit/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-info"> Edit  </a>
												<!--
												<a href="/admin/seo/view" class="btn ripple btn-info"> View  </a>
												-->
												<!--
												<a href="#" class="btn ripple btn-info" onclick="view_details('<?php echo e($item->page_name); ?>', '<?php echo e($item->urls); ?>', '<?php echo e($item->title); ?>', '<?php echo e($item->meta_keywords); ?>', '<?php echo e($item->meta_description); ?>')"  data-toggle="modal" data-target="#exampleModal"> View </a>
												-->
												<a onclick="return confirm('Are you sure?')" href="/admin/seo/delete/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr> 
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</table>
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
<!-- End Main Content-->


<!-- Add Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> View Page Seo </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered mg-b-0">
					<tr>  
						<th> Page Name </th> 
						<td id="page_name">  </td> 
					</tr>
					<tr>  
						<th> Page URL </th>
						<td> <a href="/" id="page_url"> </a>  </td>   
					</tr>
					<tr> 
						<th> Meta Title </th>
						<td id="meta_title">  </td>  
					</tr>
					<tr> 
						<th> Meta Description </th>
						<td id="meta_desc"> </td>  
					</tr>
					<tr> 
						<th> Meta Keyword  </th>
						<td id="meta_keywords"> </td>  
					</tr> 
				</table>
			</div> 
		</div>
	</div>
</div>


<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<script>
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#blah').attr('src', e.target.result);
			document.getElementById("cober_iamge_data").value =e.target.result;
		};
		reader.readAsDataURL(input.files[0]);
	}
} 


function view_details(page_name,urls,title,meta_keywords,meta_description){
	var page_url = document.getElementById('page_url');
	page_url.href = urls;
	page_url.innerText = urls;
	document.getElementById("page_name").innerText = page_name;
	document.getElementById("meta_title").innerText = title;
	document.getElementById("meta_keywords").innerText = meta_keywords;
	document.getElementById("meta_desc").innerText = meta_description;

}
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/seo/listing.blade.php ENDPATH**/ ?>