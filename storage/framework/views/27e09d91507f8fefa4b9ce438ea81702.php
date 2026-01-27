<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; ?>
<!-- ===== ===== --> 


	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Blog Tags</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog Tags</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center"> 
							<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" onclick="addDetails()" data-toggle="modal" data-target="#TagsModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Tags </a> 
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
											<th class="sort" style="width:120px"> Created At </th>
											<th class="sort">Tags</th> 
											<th class="text-center sort" style="width:100px"> Status </th>
											<th> Actions </th>
										</tr> 
										<?php $__currentLoopData = $Tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td class="text-center"><?php echo e($Tags->firstItem() + $k); ?> </td>
											<td> <?php echo e(date('d M Y',strtotime($item->created_at))); ?><br> <small class="text-muted"><?php echo e(date('H:i:A',strtotime($item->created_at))); ?></small> </td> 
											<td> <?php echo e($item->name); ?></td>
											
											<?php if($item->status == 0): ?>
												<td class="text-center"><a href="blog-tag-status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											<?php else: ?> 
												<td class="text-center"><a href="blog-tag-status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											<?php endif; ?>			
											<td class="actions">
												<a href="#" class="btn ripple btn-info" 
   onclick="editDetails(<?php echo e($item->id); ?>, '<?php echo e(addslashes($item->name)); ?>', '<?php echo e($item->status); ?>')" 
   data-toggle="modal" data-target="#TagsModalEdit"> 
   Edit  
</a>

												<a onclick="return confirm('Are you sure?')" href="blog-tag-delete/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</table>
									<?php echo e($Tags->links()); ?>

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>


<!-- Add Tags -->
<div class="modal fade" id="TagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title ModalLabel"> Add New Tags </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" id="formAddEdit" class="row justify-content-md-center" action="/admin/blog/tags-add" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>		
					<input name="tag_id" type="hidden" id="tag_id" value="0">
						<div class="card shade">
							<div class="form-group">
								<label> Tags Name : <span>*</span></label>
								
								<input id="search_tags" name="tags" data-role="tagsinput" class="form-control input-sm tagsInput typeahead" type="text" placeholder="Tags type and enter..." value="" required>

							</div>
							<div class="form-group">
								<label>Status </label>
								<select name="is_active" id="is_active" class="custom-select w-100">
									<option value="1">Active</option>
									<option value="0">In Active</option>
								</select>
							</div>
							<div class="submit">
								<input class="btn btn-primary w-100" id="submit" type="submit" value="Add Now">  
							</div> 
						</div> <!-- --> 
					</div> <!-- -->  
				</form>
			</div> 
		</div>
	</div>
</div>


<div class="modal fade" id="TagsModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title ModalLabel"> Edit Tags </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" id="formAddEdit" class="row justify-content-md-center" action="/admin/blog/tags-edit" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>		
					<input name="tag_id" type="hidden" id="tag_edit_id" value="0">
						<div class="card shade">
							<div class="form-group">
								<label> Tags Name : <span>*</span></label>
								<select name="tags[]" id="search_edit_tags" multiple data-role="tagsinput" placeholder="Tags Name..."> 

								</select>
							</div>
							<div class="form-group">
								<label>Status </label>
								<select name="is_active" id="is_active_edit" class="custom-select w-100">
									<option value="1">Active</option>
									<option value="0">In Active</option>
								</select>
							</div>
							<div class="submit">
								<input class="btn btn-primary w-100" id="submit" type="submit" value="Add Now">  
							</div> 
						</div> <!-- --> 
					</div> <!-- -->  
				</form>
			</div> 
		</div>
	</div>
</div>


<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link href="/admin/css/tagsinput.css" rel="stylesheet" type="text/css">
<script src="/admin/js/typeahead.bundle.min.js"></script> 
<script src="/admin/js/tagsinput.js"></script>
<script src="/admin/js/bloodhound.min.js"></script>
<script>
	
	function addDetails(){		
		document.getElementById('tag_id').value = 0;
		document.getElementById('search_tags').value = '';
		document.getElementById('is_active').value = 1;
		document.getElementById('submit').value = 'Add Now';
	}
function editDetails(id, name, status) {
    // Split comma-separated tag names (if multiple) into array
    let tags = name.split(',');

    // Clear previous tags
    $('#search_edit_tags').tagsinput('removeAll');

    // Add tags to the input
    tags.forEach(function(tag) {
        $('#search_edit_tags').tagsinput('add', tag.trim());
    });

    // Set other values
    document.getElementById('tag_edit_id').value = id;
    document.getElementById('is_active_edit').value = status;
    document.getElementById('submit').value = 'Edit Now';
}

// Tags fatch dynamic
var Tags = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: '<?php echo e(url("tag-fetch")); ?>',
			filter: function(list) {
			return $.map(list, function(tags) {
				return { name: tags }; });
			}
		}
		});
		Tags.initialize();
		$('#search_tags').tagsinput({
		typeaheadjs: {
			name: 'tags',
			displayKey: 'name',
			valueKey: 'id',
			source: Tags.ttAdapter()
		}
	});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/blog/tags.blade.php ENDPATH**/ ?>