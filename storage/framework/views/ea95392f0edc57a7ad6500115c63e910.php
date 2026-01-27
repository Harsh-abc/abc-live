<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; ?>

<!-- ===== ===== --> 



	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Blog </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog Pages</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
							<a href="/admin/blog/blog-add" class="btn btn-white btn-icon-text my-2 mr-2"><i class="fe fe-folder-plus mr-2"></i> Add New Blog </a>
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
										<ul class="subsubsub mb-0">
											   
										</ul>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="d-flex justify-content-end">
											<a href="#" class="btn ripple btn-info" data-toggle="modal" data-target="#sortingModal"> Sorting </a>
										</div>
									</div>
								</div>
								
								<hr />

								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered mg-b-0" id="data-table">
										<thead>
											<tr> 
												<th style="width:50px">Id</th>
												<th class="sort" style="width:120px"> Created At </th>
												<th class="sort">Categories</th>  
												<th class="sort">Blog Title</th>  
												<th> Blog Url </th>  
												<th> Is Banner </th>  
												<th> Is Popular </th>  
												<th class="text-center sort" style="width:100px"> Is Publish </th>
												<th> Actions </th>
											</tr> 
										</thead>
										<tbody>
											<?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td class="text-center"><?php echo e($k+1); ?> </td>													
												<td> <?php echo e(date('Y-m-d',strtotime($item->created_at))); ?> <br/> <small class="text-muted"><?php echo e(date('H:i a',strtotime($item->created_at))); ?></small> </td> 													
												<?php
													$category = CommonController::FetchOneCategory($item->category_id);
												?>
												<td> <?php echo e($category); ?> </td>
												<td style="white-space: normal !important; word-wrap: break-word;"> <?php echo e($item->blog_title); ?> </td>
												<td style="white-space: normal !important; word-wrap: break-word;"> <a href="/blog/view/<?php echo e($item->blog_url); ?>" target="_blank"> <?php echo e($item->blog_url); ?> </a> </td> 
												
												<td class="text-center">
													<?php if($item->is_banner == 0): ?> 
													<a  href="/admin/blog/bannerStatus/<?php echo e(base64_encode($item->is_banner)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
													<?php else: ?> 
													<a  href="/admin/blog/bannerStatus/<?php echo e(base64_encode($item->is_banner)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
													<?php endif; ?>
												</td>
												<td class="text-center">
													<?php if($item->is_popular == 0): ?> 
													<a  href="/admin/blog/popularStatus/<?php echo e(base64_encode($item->is_popular)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
													<?php else: ?> 
													<a  href="/admin/blog/popularStatus/<?php echo e(base64_encode($item->is_popular)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
													<?php endif; ?>
												</td>
												<td class="text-center">
													<?php if($item->status == 0): ?> 
													<a  href="/admin/blog/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
													<?php else: ?> 
													<a  href="/admin/blog/status/<?php echo e(base64_encode($item->status)); ?>/<?php echo e(base64_encode($item->id)); ?>" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
													<?php endif; ?>
												</td>						
												<td class="actions">
													<div class="btn-group">
														<a href="/admin/blog/blog-edit/<?php echo e(base64_encode($item->id)); ?>" class="btn ripple btn-info"> Edit  </a>
														<div class="dropdown">
															<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"> <i class="fa fa-chevron-down" aria-hidden="true"></i>  </button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenu2"> 
																
																<a href="/admin/blog/blog-delete/<?php echo e(base64_encode($item->id)); ?>" onclick="return confirm('Are you sure?')"> Delete </a> 																
															</div>
														</div>
													</div> 
												</td>
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
		</div>
	</div>	
<!-- End Main Content-->

<!-- Add Categories -->
<div class="modal fade" id="categoriesmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								<input name="type" value="3" type="hidden"/>
								<input name="category_name" value=""  class="form-control" placeholder="Category Name..." maxlength="255" type="text" id="category_name">
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

<!-- Add Tags -->
<div class="modal fade" id="TagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Add New Tags </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" class="row justify-content-md-center" action="/admin/blog/tags-add" enctype="multipart/form-data" >	
					<div class="col-xl-12 col-lg-12 col-md-12">
					<?php echo csrf_field(); ?>									
						<div class="card shade">
							<div class="form-group">
								<label> Tags Name : <span>*</span></label>
								<input name="tags_name" value=""  class="form-control" placeholder="Tags Name..." maxlength="255" type="text" id="tags_name">
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

<!-- Sorting Data -->
<div class="modal fade" id="sortingModal" tabindex="-1" aria-labelledby="sortingModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="sortingModalLabel">Sorting Table Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul id="changeTableDate">
					<?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="p-2 tableRow" width="20px" data-id="<?php echo e($item->id); ?>"><span class="m-2"><?php echo e($item->blog_order); ?> </span><img src="<?php echo e(($item->thumb_image != null) ? $item->thumb_image : '<img src="/admin/img/no_img_xl.jpg" />'); ?>" height="50px" width="70px" /> <?php echo e($item->blog_title); ?></li>
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
/*
$(document).ready(function() {
  var table = $("#data-table").DataTable({
    bSort: true,
    bFilter: true,
	stateSave: true,
    iDisplayStart: 0,
    iDisplayLength: 10,
    sPaginationType: "full_numbers",
    sDom: "Rfrtlip",
	"lengthChange": false
  });

  $('#cmsearch').on('keyup', function() {
    table.search(this.value).draw();
  });
});
*/
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

// ------------------------------
const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview.style.display = "block";
      imgPreview.innerHTML = '<img src="' + this.result + '" />';
    });    
  }
}
</script>

<script>
const input = document.getElementById('file-input');
const video = document.getElementById('video');
const videoSource = document.createElement('source');

input.addEventListener('change', function() {
  const files = this.files || [];

  if (!files.length) return;
  
  const reader = new FileReader();

  reader.onload = function (e) {
    videoSource.setAttribute('src', e.target.result);
    video.appendChild(videoSource);
	$('#video').addClass('hklhk');
    video.load();
    video.play();
  };
  
  reader.onprogress = function (e) {
    console.log('progress: ', Math.round((e.loaded * 100) / e.total));
  };
  
  reader.readAsDataURL(files[0]);
});

</script>
<script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script type="text/javascript">

	$(document).ready(function () {
		var dropIndex;
		$("#changeTableDate").sortable({
				update: function(event, ui) { 
					dropIndex = ui.item.index();
			}
		});

		$('#reload').click(function (e) {
			var blogIdsArray = [];
			$('.tableRow').each(function (index) {
					var dataid = $(this).attr('data-id');
					blogIdsArray.push(dataid);
			});
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "/admin/blog/blog-sort",
					data: {
					order: blogIdsArray,
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/admin/blog/listing.blade.php ENDPATH**/ ?>