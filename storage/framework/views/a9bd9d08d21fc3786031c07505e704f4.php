<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; ?>
<!-- ===== ===== --> 


	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Blog Categories </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog Categories</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center"> 
							<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#categoriesaddmodal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a> 
							
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
								<div class="row">
									<div class="col-md-6 col-sm-6">
										 
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="d-flex justify-content-end">
											<a href="#" class="btn ripple btn-info" data-toggle="modal" data-target="#sortingModal"> Sorting </a>
										</div>
									</div>
								</div>
								
								<hr />
								
								 
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:50px">Id</th>
											<th class="sort" style="width:120px"> Created At </th>
											<th class="sort">Categories / Sub-categories</th> 
											<th class="text-center sort" style="width:100px"> Status </th>
											<th> Actions </th>
										</tr> 
										<?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td class="text-center"><?php echo e($Categories->firstItem() + $k); ?> </td>
											<td> <?php echo e(date('d M Y',strtotime($item->created_at))); ?><br> <small class="text-muted"><?php echo e(date('H:i:A',strtotime($item->created_at))); ?></small> </td> 
											<td> <?php echo e($item->name); ?></td>
											
											<?php if($item->status == 0): ?>
												<td class="text-center"><a href="blog-categories-status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											<?php else: ?> 
												<td class="text-center"><a href="blog-categories-status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											<?php endif; ?>			
											<td class="actions">
												<a href="#" class="btn ripple btn-info"  onclick="editDetails('<?php echo e($item->id); ?>','<?php echo e($item->name); ?>','<?php echo e($item->status); ?>')" data-toggle="modal" data-target="#subcategorieseditmodal"> Edit  </a> 
												<a onclick="return confirm('Are you sure?')" href="blog-categories-delete/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </a>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</table>
									<?php echo e($Categories->links()); ?>

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


<!-- Add Categories -->
<div class="modal fade" id="categoriesaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Add New Categories </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" class="row justify-content-md-center" action="/admin/blog/category-add" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>									
						<div class="card shade">
							<div class="form-group">
								<label> Category Name : <span>*</span></label>
								<input name="edit_id" value="0" type="hidden"/>
								<input name="type" value="3" type="hidden"/>
								<input name="category_name" value=""  class="form-control" placeholder="Category type and enter..." data-role="tagsinput" maxlength="255" type="text" id="category_name">
							</div>
							<div class="form-group">
								<label>Status </label>
								<select name="is_active" class="custom-select w-100">
									<option value="1">Active</option>
									<option value="0">In Active</option>
								</select>
							</div>
							<div class="submit">
								<input class="btn btn-primary w-100" type="submit" value="Add Now">  
							</div> 
						</div> <!-- --> 
					</div> <!-- -->  
				</form>
			</div> 
		</div>
	</div>
</div>

<!-- Edit Categories -->
<div class="modal fade" id="subcategorieseditmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Edit New Categories </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" class="row justify-content-md-center" action="/admin/blog/category-edit" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>			
						<div class="card shade">
							<div class="form-group area_interest">
								<label> Categories </label>
								<select name="category_id[]" id="multiple-checkboxes"  class="custom-select w-100" multiple="multiple">
									<?php $__currentLoopData = $Category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($item->id); ?>"> <?php echo e($item->name); ?> </option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
								</select>
							</div>
							<div class="form-group">
								<label> Category Name : <span>*</span></label>
								<input name="edit_id" id="edit_id" value="0" type="hidden"/>
								<input name="type" value="3" type="hidden"/>
								<input name="edit_category_name" value=""  class="form-control" placeholder="Category type and enter..." maxlength="255" type="text" id="edit_category_name">
							</div>
							<div class="form-group">
								<label>Status </label>
								<select name="is_active_edit" class="custom-select w-100">
									<option value="1">Active</option>
									<option value="0">In Active</option>
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
<!-- Add Sub Categories -->


<!-- Sorting Data -->
<div class="modal fade" id="sortingModal" tabindex="-1" aria-labelledby="sortingModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="sortingModalLabel">Sorting Categories Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul id="changeTableDate">
					<?php $__currentLoopData = $Category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="p-2 tableRow" width="20px" data-id="<?php echo e($item->id); ?>"><span class="mr-2"><?php echo e($item->category_order); ?> </span> <?php echo e($item->name); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
				<br/>
				<div class="modal-footer">
					<input type='button' class="btn btn-info btn-submit" value='Reload' id='reload' />
				</div>
			</div> 
		</div>
	</div>
</div>
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link href="/admin/css/tagsinput.css" rel="stylesheet" type="text/css">
<script src="/admin/js/typeahead.bundle.min.js"></script> 
<script src="/admin/js/tagsinput.js"></script>

 
<link href="/admin/css/select2.min.css" rel="stylesheet" />
<script src="/admin/js/select2.min.js"></script>
 
<script type="text/javascript">
/*
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
		  enableFiltering: true,
		  enableCaseInsensitiveFiltering: true,
		  maxHeight: 250
        });
    });
	*/
	$(".js-select2").select2({
		closeOnSelect : false,
		placeholder : "Placeholder",
		allowHtml: true,
		allowClear: true,
		tags: true // создает новые опции на лету
	});
</script>
 
<script>
	// Categories fatch dynamic
	var Categories = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: '<?php echo e(url("category-fetch")); ?>',
			filter: function(list) {
			return $.map(list, function(categoriesname) {
				return { name: categoriesname }; });
			}
		}
		});
		Categories.initialize();

		$('#category_name').tagsinput({
		typeaheadjs: {
			name: 'categoryname',
			displayKey: 'name',
			valueKey: 'name',
			source: Categories.ttAdapter()
		}
	});


	function editDetails(id,name,status){
		document.getElementById('edit_id').value = id;
		document.getElementById('edit_category_name').value = name;
		document.getElementById('is_active_edit').value = status;
	}
</script>

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">
	$(document).ready(function () {
		var dropIndex;
		$("#changeTableDate").sortable({
				update: function(event, ui) { 
					dropIndex = ui.item.index();
			}
		});

		$('#reload').click(function (e) {
			var categoryIdsArray = [];
			$('.tableRow').each(function (index) {
					var dataid = $(this).attr('data-id');
					categoryIdsArray.push(dataid);
			});
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "/admin/blog/blog-category-sort",
					data: {
					order: categoryIdsArray,
					_token: "<?php echo e(csrf_token()); ?>"
				},
				success: function(response) {
					if (response.status == "success") {
						console.log(response.message);
						location.reload();
					} else {
						console.log(response.message);
					}
				}
			});
		});
	});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/admin/blog/categories.blade.php ENDPATH**/ ?>