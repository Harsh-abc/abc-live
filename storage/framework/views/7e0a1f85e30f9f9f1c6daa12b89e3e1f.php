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
							<li class="breadcrumb-item active" aria-current="page">Seo URL</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							<!--
								<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a>
							-->
							<a href="/admin/seo" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> On page SEO Tags </a>
							<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#AddModal"> <i class="fe fe-folder-plus mr-2"></i> Add SEO URL Lising  </a>
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
											<th> URL </th>     
											<th class="text-center" style="width:60px"> Status </th>
											<th style="width:190px"> Actions </th>
										</tr> 
									
										<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td class="text-center"><?php echo e($k+1); ?> </td>
											<td> <?php echo e(($item->created_at) ? date('Y-m-d',strtotime($item->created_at)) : ''); ?><br>  <small class="text-muted"><?php echo e(($item->created_at) ? date('H:i:A',strtotime($item->created_at)) : ''); ?></small>  </td> 
											<td> <?php echo e($item->page_name); ?></td> 
											<td> 
												<?php if($item->urls == '/'): ?>
												<a href="/" target="_blank"><?php echo e($url); ?></a>
												<?php else: ?>
												<a href="/<?php echo e($item->urls); ?>" target="_blank"><?php echo e($url); ?>/<?php echo e($item->urls); ?></a>
												<?php endif; ?>
											</td>  
											
											<?php if($item->status == 0): ?> 
												<td><a href="/admin/seo/url/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											<?php else: ?> 
												<td> <a href="/admin/seo/url/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											<?php endif; ?>
											<td class="actions">
												<a href="/admin/seo/url/edit/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-info"> Edit  </a> 
												<a onclick="return confirm('Are you sure?')" href="/admin/seo/url/delete/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
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


<!-- Edit FAQ -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="EditModalLabel"> SEO URL </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" class="row justify-content-md-center" action="/admin/seo/url/store" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>						 
						<div class="form-group">
							<label> Page Name </label>
							<input name="page_name" value=""  class="form-control" placeholder="Page Name..." type="text" id="page_name">
						</div> 
						<div class="form-group">
							<label>Page URL : <span>*</span></label>
							<div class="input-group mb-2"> 
								<div class="input-group-prepend"> <div class="input-group-text">https://www.abcdesigns.in/</div> </div>
								<input name="page_url" value="" required="" class="form-control"  maxlength="255" type="text" id="page_url">
							</div>
						</div>	
						<div class="form-group">
							<label>Status </label>
							<select name="is_active" id="is_active" class="custom-select w-100">
								<option value="1">Active</option>
								<option value="0">In Active</option>
							</select>
						</div>
						<div class="submit">
							<input class="btn btn-primary w-100" type="submit" value="ADD NOW">  
						</div>   
					</div> <!-- -->  
				</form>
			</div> 
		</div>
	</div>
</div>


<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/seo/url_listing.blade.php ENDPATH**/ ?>