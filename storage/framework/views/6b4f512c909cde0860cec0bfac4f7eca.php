<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; 

$urls_list = CommonController::UrlsList();
?>

<!-- ===== ===== --> 

	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Edit Page </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Search Engine Listing</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit Page</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							<a href="/admin/seo/add-url" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> Add New SEO URL </a> 
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
								<div class="">
									<form method="POST" class="row justify-content-md-center" action="/admin/seo/editStore" 
									enctype="multipart/form-data" >	
										<div class="col-xl-9 col-lg-9 col-md-9">
										<?php echo csrf_field(); ?>		
										<input name="edit_id" value="<?php echo e(($edit_data->id) ? $edit_data->id : ''); ?>"type="hidden" id="edit_id" >							
											<div class="card shade">
												<div class="row">
													<div class="col-lg-12 col-md-12 form-group">
														<label>Page Urls List : <span>*</span></label>
														<select name="url_id" class="form-control w-100" id="urls_list" onchange="getPageName(this)" required>
															<?php $__currentLoopData = $urls_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($item->id); ?>" data-id="<?php echo e($item->urls); ?>" <?php echo e($edit_data->url_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->page_name); ?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-5 col-md-5 form-group">
														<label> Page Name </label>
														<input name="page_name" value="<?php echo e(($edit_data->page_name) ? $edit_data->page_name : ''); ?>"  class="form-control" placeholder="Page Name..." type="text" id="page_name" readonly>
													</div> 
													<div class="col-lg-7 col-md-7 form-group">
														<label>Page URL : <span>*</span></label>
														<div class="input-group mb-2">
															<div class="input-group-prepend"> <div class="input-group-text">https://www.abcdesigns.in/</div> </div>
															<input name="page_url" value="<?php echo e(($edit_data->urls) ? $edit_data->urls : ''); ?>" required="" class="form-control"  maxlength="255" type="text" id="page_url" readonly>
														</div>
													</div>
												</div>												
												<div class="row">
													<div class="col-lg-12 col-md-5 form-group">
														<label>Page Title/Meta  : <span>*</span></label>
														<input name="page_title" value="<?php echo e(($edit_data->title) ? $edit_data->title : ''); ?>"  class="form-control" placeholder="Page Title..." maxlength="255" type="text" id="title">
													</div>
												</div>
												<div class="form-group">
													<label>Meta Keywords : <span>*</span></label>
													<input name="meta_keywords" value="<?php echo e(($edit_data->meta_keywords) ? $edit_data->meta_keywords : ''); ?>"  class="form-control" placeholder="Meta Keywords..." maxlength="255" type="text" id="meta_keywords">
													
												</div> 
												<div class="form-group">
													<label for="BookDescription">Meta Description </label>
													<textarea name="meta_description" class="form-control" cols="10" rows="2" id="meta_description" placeholder="Meta Description..."> <?php echo e(($edit_data->meta_description) ? $edit_data->meta_description : ''); ?></textarea>
													
												</div> 
												<div class="form-group meta_tag_script">
													<label for="meta_tag_script">Meta tags (HTML) </label>
													<textarea name="meta_tag_script" class="form-control" cols="10" rows="4" id="meta_tag_script" placeholder="Meta tags script..."><?php echo ($edit_data->meta_tag_script) ? $edit_data->meta_tag_script : ''; ?> </textarea>
													<small> Paste Your Tags here only html Tags </small> 
												</div> 
												<div class="form-group meta_tag_script">
													<label for="meta_tag_script_header">Meta Script (JS Script) </label>
													<textarea name="meta_tag_script_header" class="form-control" cols="10" rows="10" id="meta_tag_script_header" placeholder="Meta tags script...">
														<?php echo ($edit_data->script_header) ? $edit_data->script_header : ''; ?> </textarea>
													<small> Paste Your Tags With < script > Tags </small> 
												</div>
												<div class="form-group">
													<label>Status </label>
													<select name="is_active" class="custom-select w-100">
														<option value="1" <?php echo e($edit_data->status == 1 ? 'selected' : ''); ?>>Active</option>
														<option value="0" <?php echo e($edit_data->status == 0 ? 'selected' : ''); ?>>In Active</option>
													</select>
												</div>
												<div class="submit">
													<input class="btn btn-primary w-100" type="submit" value="Edit Now">  
												</div> 
											</div> <!-- --> 
										</div> <!-- -->  
									</form> 
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

<!-- ===== ===== --> 
<!--
<link href="/admin/css/select2.min.css" rel="stylesheet" />
<script src="/admin/js/select2.min.js"></script>
-->
<script>
    $(document).ready(function() {
		$('#urls_list').select2();
	});

	function getPageName(sel) {
		var page_name = sel.options[sel.selectedIndex].text
		var page_url = $('#urls_list').find(':selected').attr('data-id')
		$('#page_name').val(page_name);
		$('#page_url').val(page_url);
	}
	</script>
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/seo/edit.blade.php ENDPATH**/ ?>