<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\CommonController; ?>

<!-- ===== ===== --> 
<style>
#imgid { height:auto !important; }
</style>
	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Edit Blog </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Blog Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
						</ol>
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
									<form method="POST" class="row justify-content-md-center" action="/admin/blog/blog-update" enctype="multipart/form-data" >	
										<div class="col-xl-9 col-lg-9 col-md-9">
										<?php echo csrf_field(); ?>	
										<input type="hidden" name="edit_id" value="<?php echo e($blog->id); ?>"/>			 
											<div class="row">
												<div class="col-lg-9 col-md-9 form-group">
													<label>Blog Title : <span>*</span></label>
													<input name="blog_name" value="<?php echo e(($blog->blog_title) ? $blog->blog_title : 'NA'); ?>" required="" class="form-control" placeholder="Blog Title..." maxlength="255" type="text">
												</div>

													<div class="col-lg-9 col-md-9 form-group">
													<label>Auhor : <span>*</span></label>
													<input name="post_author" id="post_author"  value="<?php echo e($blog->post_author); ?>"  required="" class="form-control" placeholder="Blog Title..." onkeypress="ArticleNameurl();" onblur="ArticleNameurl();" type="text">
												</div>
												<div class="col-lg-3 col-md-3 form-group">
													<label>Select Categories </label>
													<select name="category_id" class="custom-select w-100" required="">
														<option value="">-- Select Categories -- </option>
														<?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($item->id); ?>" <?php echo e($item->id == $blog->category_id ? 'selected' : ''); ?>> <?php echo e($item->name); ?>  </option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</select>
												</div>
												<div class="col-lg-12 form-group"> 
													<label>Blog URL : <span>*</span></label>
													<div class="input-group mb-2"> 
														<div class="input-group-prepend"> <div class="input-group-text">https://www.abcdesigns.in/blog/</div> </div>
														<input name="blog_url" value="<?php echo e(($blog->blog_url) ? $blog->blog_url : 'NA'); ?>" required="" class="form-control"  maxlength="255" type="text" id="blog_url">
													</div>
												</div> 												
											</div> 
										<!--	<div class="form-group lg-editor">
												<label for="description">Blog Content </label>
												<textarea name="blog_content" class="form-control content" cols="10" rows="2" id="" placeholder="Description..."><?php echo ($blog->blog_content) ? $blog->blog_content : 'NA'; ?> </textarea> 
											</div> -->
											<div class="form-group lg-editor">
												<textarea name="blog_content" class="form-control" cols="10" rows="2" id="new-editor" placeholder="Description..."><?php echo ($blog->blog_content) ? $blog->blog_content : 'NA'; ?> </textarea>  

											</div>
											<div class="form-group">
												<label> Add Tags </label>
												<select name="tags[]" id="search_tags" multiple data-role="tagsinput" Placeholder="Tag type and enter.." required>
													<?php if(isset($blog->tags)): ?>
														<?php
															$tags = explode(',', $blog->tags);
														?>
														<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?php echo e($tag); ?>"><?php echo e($tag); ?></option>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php endif; ?>
												</select>
											</div>
											<div class="form-group">
												<label>Time To Read (minutes) : <span>*</span></label>
												<input type="number" name="time_to_read" value="<?php echo e($blog->time_to_read ?? ''); ?>" 
													   class="form-control" min="1" placeholder="Enter time to read in minutes" required>
											</div>

												<div class="form-group">
												<label>Highlight Color</label>
												<input
													type="color"
													name="highlight_color"
													value="<?php echo e(old('highlight_color', $blog->highlight_color ?? '#ffa500')); ?>"
												>
												</div>

											<div class="card shade">
												<h5> SEO </h5>
												
												<div class="row">
													<div class="col-md-6 form-group">
														<div class="form-group">
															<label>Page Title : <span>*</span></label>
															<input name="page_title" value="<?php echo e(($blog->page_title) ? $blog->page_title : 'NA'); ?>"  class="form-control" placeholder="Page Title..." maxlength="255" type="text" id="title" required>
															<small> 0 of 70 characters used </small>
														</div>
														<div class="form-group">
															<label>Meta Keywords :</label>
															<input name="meta_keywords" value="<?php echo e(($blog->meta_keywords) ? $blog->meta_keywords : 'NA'); ?>"  class="form-control" placeholder="Meta Keywords..." maxlength="255" type="text" id="meta_keywords">
															<small> 100 to 255 Keywords used </small>
														</div>
													</div> 
													<div class="col-md-6 form-group">
														<label for="BookDescription">Meta Description </label>
														<textarea name="meta_description" class="form-control" cols="10" rows="5" id="meta_description" placeholder="Meta Description..."> <?php echo ($blog->meta_description) ? $blog->meta_description : 'NA'; ?> </textarea>
														<small> 0 of 320 characters used </small>
													</div> 
												</div> 
											</div> <!-- --> 
										</div> <!-- -->
										<div class="col-xl-3 col-lg-3 col-md-3">
											<!-- <div class="form-group">
												<div class="card shade">  
													<label class="text-left"> Upload Image For Blog Content </label> 
													<a href="#" id="AddImage" data-toggle="modal" data-target="#ServerImageModal" class="btn ripple btn-primary">Upload For Blog Content </a>  
												</div>
											</div> --!>
											<div class="form-group">
												<div class="card shade">  
													<div class="image-upload"> 
														<label for="description">Add Blog Thumbnail</label>
														<input type="hidden" name="thumnail" id="thumnail" class="hidden-image-data" required/>
														<center>
															<label for="upload"> 
															
															<img src="<?php echo e(isset($blog->thumb_image) ? $blog->thumb_image : url('/admin/img/no_img_xl.jpg')); ?>" id='imgid' class="text-center img-fluid" style="cursor: pointer" title="Click here to update Image" /> </label>
														</center>
														<small> Image should be below 1mb.</small>
														<input type="file" id="upload" name="thumb_image" class="text-center" data-target="#myModal121" data-toggle="modal" accept="image/*">
														<div id="upload-demo-i" style="cursor: pointer" onclick="editImage()"></div>
													</div>
												</div>
											</div> 

											<div class="col-lg-9 col-md-9 form-group">
													<label>Alt_Text_Thumbnail : <span>*</span></label>
													<input name="Alt_Text_Thumbnail" id="Alt_Text_Thumbnail" value="<?php echo e($blog->Alt_Text_Thumbnail); ?>" required="" class="form-control" placeholder="Alt_Text_Banner" onkeypress="ArticleNameurl();" onblur="ArticleNameurl();" type="text">
												</div>
												
											<div class="form-group">
												<div class="card shade">  
													<div id="choose-thumbnail">
														<label> Choose Banner Image  </label> 
														<div id="img-preview"></div> 
														<input type="file" accept="image/*" id="choose-file" value="" name="banner_image" />
														<label for="choose-file">Choose Banner</label>
														<img src="<?php echo e($blog->banner_image); ?>" class="img-thumbnail" width="200px" height="auto"/>
													</div>
												</div>
											</div> 

												<div class="col-lg-9 col-md-9 form-group">
													<label>Alt_Text_Banner : <span>*</span></label>
													<input name="Alt_Text_Banner" id="Alt_Text_Banner" value="<?php echo e($blog->Alt_Text_Banner); ?>" required="" class="form-control" placeholder="Alt_Text_Banner" onkeypress="ArticleNameurl();" onblur="ArticleNameurl();" type="text">
												</div>
												
												<div class="form-group">
												<div class="card shade">  
													<div id="choose-thumbnail-1">
														<label> Choose Left Banner Image  </label> 
														<div id="img-preview-1"></div> 
														<input type="file" accept="image/*" id="choose-file-1" value="" name="banner_image_1" />
														<label for="choose-file-1">Choose Left Banner</label>
														<img src="<?php echo e($blog->banner_image_1); ?>" class="img-thumbnail" width="200px" height="auto"/>
													</div>
												</div>
											</div> 

												<div class="col-lg-9 col-md-9 form-group">
													<label>Alt_Text_Banner_1 : <span>*</span></label>
													<input name="alt_text_banner_1" id="alt_text_banner_1" value="<?php echo e($blog->alt_text_banner_1); ?>" required="" class="form-control" placeholder="Alt_Text_Banner" onkeypress="ArticleNameurl();" onblur="ArticleNameurl();" type="text">
												</div>

											<div class="form-group">
												<div class="card shade">  
													<label> Publish Date : <?php echo e($blog->publish_date); ?></label>
													<input name="publish_date" value="<?php echo e($blog->publish_date); ?>" class="form-control" type="date" id="publish_date">
												</div>
											</div> 
																
											<input type="hidden" name="edit_banner_image" value="<?php echo e($blog->banner_image); ?>"/>
											<input type="hidden" name="edit_thumb_image" value="<?php echo e($blog->thumb_image); ?>"/>
											<input type="hidden" name="edit_banner_image1" value="<?php echo e($blog->banner_image_1); ?>"/>
											<input type="hidden" name="prv_publish_date" value="<?php echo e($blog->publish_date); ?>"/>
											
											<div class="card shade d-none">
												<div class="form-group">
													<label>Published? </label>
													<select name="is_published" class="custom-select w-100">
														<option value="1" <?php echo e($blog->is_published == 1 ? '' : 'selected'); ?>>Published</option>
														<option value="0" <?php echo e($blog->is_published == 0 ? '' : 'selected'); ?>>Not Published</option>
													</select>
												</div> 
											</div> <!-- --> 
										</div> <!-- --> 
										<div class="col-lg-12">
											<br />
											<div class="submit">
												<input class="btn btn-primary w-100" type="submit" value="Edit Now">  
											</div> 
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
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Croper Model  -->
<div id="myModal121" class="modal fade " role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Blog Thumbnail </h4>
				<button type="button" style=" "class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body text-center">
				<div id="upload-demo" ></div>
				<button class="btn btn-success upload-result" data-dismiss="modal">Crop</button>
			</div>
		</div>
	</div>
</div>

 
<!-- Import Trumbowyg -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js"></script>
<script>
$('#new-editor').trumbowyg();
</script>

<script>
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
const chooseFile1 = document.getElementById("choose-file-1");
const imgPreview1 = document.getElementById("img-preview-1");

chooseFile1.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile1.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview1.style.display = "block";
      imgPreview1.innerHTML = '<img src="' + this.result + '" />';
    });    
  }
}
</script>


<link href="/admin/css/tagsinput.css" rel="stylesheet" type="text/css">
<script src="/admin/js/typeahead.bundle.min.js"></script> 
<script src="/admin/js/tagsinput.js"></script>
<script src="<?php echo e(asset('/admin/js/croppie.js')); ?>"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 526,
			height: 275,
			type: 'box'
		},
		boundary: {
			width: 546,
			height: 295
		}
	});

	$('#upload').on('change', function() {
		var reader = new FileReader();
		reader.onload = function(e) {
			$uploadCrop.croppie('bind', {
				url: e.target.result
			}).then(function() {
				console.log('jQuery bind complete');
			});
		}
		reader.readAsDataURL(this.files[0]);
	});

	$('.upload-result').on('click', function(ev) {
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function(resp) {
			$('.hidden-image-data').val(resp);
			$("#imgid").show();
			// $("#imgid1").show();
			document.getElementById("imgid").src = resp;
			document.getElementById("save_button").disabled = false;
			// $("#save_button").show();
		});
	});

	function editImage() {
		$("#upload").click();
	}
	// -----------------------------------
</script>


<!-- Add Country -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Add New Categories </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"> 
				<div class="form-group">
					<label> Add Categories </label>
					<input type="text" class="form-control" id="search_categories" value="" placeholder="Type Here..." data-role="tagsinput">
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- Tags Input -->
<script src="/admin/js/common.js"></script>

<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
			
		});
	});	
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>