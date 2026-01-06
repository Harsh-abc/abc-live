@extends('admin.layouts.app')
@section('content')
<?php use App\Http\Controllers\CommonController; ?>

<style>
.meta_keywords { }
.meta_keywords input { min-height:45px; }
</style>
<!-- ===== ===== --> 

	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Add Page </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Search Engine Listing</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Page</li>
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
									<div class="col-sm-6">
										@if ($message = Session::get('error'))
											<div class="alert alert-danger">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong>{{ $message }}</strong>
											</div>
										@endif

										@if ($message = Session::get('success'))
											<div class="alert alert-success alert-block">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong>{{ $message }}</strong>
											</div>
										@endif
									</div>
								</div> 
							</div> 
							<div class="card-body pt-0">
								<div class="">
									<form method="POST" class="row justify-content-md-center" action="/admin/seo/store" 
									enctype="multipart/form-data" >	
										<div class="col-xl-9 col-lg-9 col-md-9">
										@csrf									
											<div class="card shade">
												<div class="row">
													<div class="col-lg-5 col-md-5 form-group">
														<label> Page Name </label>
														<select name="page_id" class="custom-select w-100" required="">
															<option value="" selected disabled>-- Select Page -- </option>
															<option value="1"> Home </option> 
															<option value="2"> About </option> 
															<option value="3"> Work </option> 
															<option value="4"> Services </option> 
															<option value="5"> Career </option> 
															<option value="6"> Contact </option> 
														</select>
													</div> 
													<div class="col-lg-7 col-md-7 form-group">
														<label>Page URL : <span>*</span></label>
														<div class="input-group mb-2"> 
															<div class="input-group-prepend"> <div class="input-group-text">https://abcdesigns.in/</div> </div>
															<input name="page_url" value="" required="" class="form-control"  maxlength="255" type="text" id="page_url" >
														</div> 
													</div>
												</div> 
												<div class="form-group">
													<label>Meta/Page Title : <span>*</span></label>
													<input name="page_title" value=""  class="form-control" placeholder="Page Title..." maxlength="255" type="text" id="title">
													<small> 0 of 70 characters used </small>
												</div>
												<div class="form-group meta_keywords">
													<label>Meta Keywords : </label>
													<!--
													<input name="meta_keywords" value=""  class="form-control" placeholder="Meta Keywords..." maxlength="255" type="text" id="meta_keywords">
													-->
													<input type="text" placeholder="Meta Keywords..." value="" data-role="tagsinput">
													<small> 100 to 255 Keywords used </small>
												</div> 
												<div class="form-group">
													<label for="BookDescription">Meta Description </label>
													<textarea name="meta_description" class="form-control" cols="10" rows="2" id="meta_description" placeholder="Meta Description..."> </textarea>
													<small> 0 of 320 characters used </small>
												</div> 
												<div class="form-group meta_tag_script">
													<label for="meta_tag_script">Meta tags </label>
													<textarea name="meta_tag_script" class="form-control" cols="10" rows="10" id="meta_tag_script" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags here only html Tags </small> 
												</div>

												<div class="form-group meta_tag_script">
													<label for="meta_tag_script_header">Meta Script (Header) </label>
													<textarea name="meta_tag_script_header" class="form-control" cols="10" rows="10" id="meta_tag_script_header" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags With < script > Tags </small> 
												</div>

												<div class="form-group meta_tag_script">
													<label for="meta_tag_script_footer">Meta Script (Footer) </label>
													<textarea name="meta_tag_script_footer" class="form-control" cols="10" rows="10" id="meta_tag_script_footer" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags With < script > Tags </small> 
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
					<!-- col end -->
				</div>
				<!-- Row end -->
			</div>
		</div>
	</div>	
<!-- End Main Content-->

<!-- ===== ===== --> 
 
@include('admin.layouts.footer')


<!-- Tags Input -->
<link href="/admin/css/tagsinput.css" rel="stylesheet" type="text/css">
<script src="/admin/js/typeahead.bundle.min.js"></script> 
<script src="/admin/js/tagsinput.js"></script>
 

<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});

	});
	});	

	// Categories fatch dynamic
	var Categories = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: '{{url(" ")}}',
			filter: function(list) {
			return $.map(list, function(categoriesname) {
				return { name: categoriesname }; });
			}
		}
		});
		Categories.initialize();

		$('#search_categories').tagsinput({
		typeaheadjs: {
			name: 'categoryname',
			displayKey: 'name',
			valueKey: 'name',
			source: Categories.ttAdapter()
		}
	});

	// Tags fatch dynamic
	var Tags = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: '{{url(" ")}}',
			filter: function(list) {
			return $.map(list, function(tagsname) {
				return { name: tagsname }; });
			}
		}
		});
		Tags.initialize();

		$('#search_tags').tagsinput({
		typeaheadjs: {
			name: 'tagsname',
			displayKey: 'name',
			valueKey: 'id',
			source: Tags.ttAdapter()
		}
	});
</script>


<!-- ===== ===== --> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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
@endsection
