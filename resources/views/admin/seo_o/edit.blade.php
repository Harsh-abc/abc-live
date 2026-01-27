@extends('admin.layouts.app')
@section('content')
<?php use App\Http\Controllers\CommonController; ?>

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
									<form method="POST" class="row justify-content-md-center" action="/admin/seo/editStore" 
									enctype="multipart/form-data" >	
										<div class="col-xl-9 col-lg-9 col-md-9">
										@csrf		
										<input name="edit_id" value="{{($edit_data->id) ? $edit_data->id : ''}}"type="hidden" id="edit_id" >							
											<div class="card shade">
												<div class="row">
													<div class="col-lg-5 col-md-5 form-group">
														<label> Page Name </label>
														<select name="page_id" class="custom-select w-100" required="">
															<option value="">-- Select Page -- </option>
															<option value="1" {{ $edit_data->page_id == 1 ? 'selected' : '' }}> Home </option> 
															<option value="2" {{ $edit_data->page_id == 2 ? 'selected' : '' }}> About </option> 
															<option value="3" {{ $edit_data->page_id == 3 ? 'selected' : '' }}> Work </option> 
															<option value="4" {{ $edit_data->page_id == 4 ? 'selected' : '' }}> Services </option> 
															<option value="5" {{ $edit_data->page_id == 5 ? 'selected' : '' }}> Career </option> 
															<option value="6" {{ $edit_data->page_id == 6 ? 'selected' : '' }}> Contact </option> 
														</select>
													</div> 
													<div class="col-lg-7 col-md-7 form-group">
														<label>Page URL : <span>*</span></label>
														<div class="input-group mb-2"> `
															<div class="input-group-prepend"> <div class="input-group-text">https://abcdesigns.in/</div> </div>
															<input name="page_url" value="{{($edit_data->urls) ? $edit_data->urls : ''}}" required="" class="form-control"  maxlength="255" type="text" id="page_url" >
														</div> 
													</div>
												</div> 
												<div class="form-group">
													<label>Page Title : <span>*</span></label>
													<input name="page_title" value="{{($edit_data->title) ? $edit_data->title : ''}}"  class="form-control" placeholder="Page Title..." maxlength="255" type="text" id="title">
													{{-- <small> 0 of 70 characters used </small> --}}
												</div>
												<div class="form-group">
													<label>Meta Keywords : <span>*</span></label>
													<input name="meta_keywords" value="{{($edit_data->meta_keywords) ? $edit_data->meta_keywords : ''}}"  class="form-control" placeholder="Meta Keywords..." maxlength="255" type="text" id="meta_keywords">
													{{-- <small> 100 to 255 Keywords used </small> --}}
												</div> 
												<div class="form-group">
													<label for="BookDescription">Meta Description </label>
													<textarea name="meta_description" class="form-control" cols="10" rows="2" id="meta_description" placeholder="Meta Description..."> {{($edit_data->meta_description) ? $edit_data->meta_description : ''}}</textarea>
													{{-- <small> 0 of 320 characters used </small> --}}
												</div> 

												<div class="form-group meta_tag_script">
													<label for="meta_tag_script">Meta tags </label>
													<textarea name="meta_tag_script" class="form-control" cols="10" rows="10" id="meta_tag_script" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags here only html Tags </small> 
												</div>

												<div class="form-group meta_tag_script">
													<label for="meta_tag_script">Meta Script (Header) </label>
													<textarea name="meta_tag_script_header" class="form-control" cols="10" rows="10" id="meta_tag_script" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags With < script > Tags </small> 
												</div>

												<div class="form-group meta_tag_script">
													<label for="meta_tag_script">Meta Script (Footer) </label>
													<textarea name="meta_tag_script" class="form-control" cols="10" rows="10" id="meta_tag_script_footer" placeholder="Meta tags script..."> </textarea>
													<small> Paste Your Tags With < script > Tags </small> 
												</div>
												 
												<div class="form-group">
													<label>Status </label>
													<select name="is_active" class="custom-select w-100">
														<option value="1" {{ $edit_data->status == 1 ? 'selected' : '' }}>Active</option>
														<option value="0" {{ $edit_data->status == 0 ? 'selected' : '' }}>In Active</option>
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
 
@include('admin.layouts.footer')

@endsection
