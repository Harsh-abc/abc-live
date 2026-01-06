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
						<h2 class="main-content-title tx-24 mg-b-5"> Header Tags </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">SEO</li>
							<li class="breadcrumb-item active" aria-current="page"> Header Tags</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
						<!--	<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a>-->
							<a href="/admin/seo/header-tagsadd" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> Add New Tags </a>
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
								<div class="row">
									<div class="col-md-6 col-sm-6">
										 
									</div>
									{{-- <div class="col-md-6 col-sm-6">
										<nav aria-label="Page navigation example">
										  <ul class="pagination justify-content-end mt-0 mb-0">
											<li class="page-item">
											  <a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
												<span class="sr-only">Previous</span>
											  </a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"> <a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
												<span class="sr-only">Next</span>
											  </a>
											</li>
										  </ul>
										</nav>
									</div> --}}
								</div>
								<hr /> 

								<div class="table-responsive">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:50px">Id</th>
											<th style="width:110px"> Created At </th> 
											<th> Page Name</th>  
											<th> URL </th>  
											<th> Tags Title </th>  
											<th> Tags Description </th> 
											<th class="text-center" style="width:60px"> Status </th>
											<th style="width:190px"> Actions </th>
										</tr> 

										@foreach ($HeaderSeo as $k=>$item)
										<tr> 
											<td class="text-center">{{$HeaderSeo->firstItem() + $k}} </td>
											<td> {{ ($item->created_at) ? date('Y-m-d',strtotime($item->created_at)) : '' }}<br>  <small class="text-muted">{{ ($item->created_at) ? date('H:i:A',strtotime($item->created_at)) : '' }}</small>  </td> 
 
											<td> {{$item->page_name}} </td>
											<td> <a href="{{$item->url}}"> {{$item->url}}</a> </td> 
											<td>  {{$item->tag_title}} </td> 
											<td>  {{$item->tag_description}}</td>
											@if($item->status == 0) 
												<td><a href="seo-headertag/status/{{base64_encode($item->status)}}/{{base64_encode($item->id)}}" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											@else 
												<td> <a href="seo-headertag/status/{{base64_encode($item->status)}}/{{base64_encode($item->id)}}" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											@endif
											<td class="actions">
												<a href="/admin/seo/header-tagsedit/{{base64_encode($item->id)}}" class="btn ripple btn-info"> Edit  </a>
												<a href="#" class="btn ripple btn-info"  data-toggle="modal" data-target="#exampleModal"> View </a>
												<a onclick="return confirm('Are you sure?')" href="/admin/seo/header-seo-delete/{{base64_encode($item->id)}}" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr>
										@endforeach
										{{ $HeaderSeo->links() }}

										{{-- <tr> 
											<td class="text-center">2 </td>
											<td> 28 Apr 2023 <br>  <small class="text-muted">10:36:AM</small>  </td> 
											<td> About </td>
											<td> <a href="/"> /about</a> </td> 
											<td> Google Tag Manager </td> 
											<td>   </td> 
											<td class="text-center"> 
												<a href="/admin/cms/status/0/MTY=" class="btn btn-primary status-active" title="Change Status"><i class="fa fa-check"></i></a>
											</td>
											<td class="actions">
												<a href="/admin/seo/header-tagsedit" class="btn ripple btn-info"> Edit  </a>
												<a href="#" class="btn ripple btn-info"  data-toggle="modal" data-target="#exampleModal"> View </a>
												<a onclick="return confirm('Are you sure?')" href="#" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr> 
										<tr> 
											<td class="text-center">2 </td>
											<td> 28 Apr 2023 <br>  <small class="text-muted">10:36:AM</small>  </td> 
											<td> About </td>
											<td> <a href="/"> /about</a> </td> 
											<td> Facebook Pixel Code </td> 
											<td>   </td> 
											<td class="text-center"> 
												<a href="/admin/cms/status/0/MTY=" class="btn btn-primary status-active" title="Change Status"><i class="fa fa-check"></i></a>
											</td>
											<td class="actions">
												<a href="/admin/seo/header-tagsedit" class="btn ripple btn-info"> Edit  </a>
												<a href="#" class="btn ripple btn-info"  data-toggle="modal" data-target="#exampleModal"> View </a>
												<a onclick="return confirm('Are you sure?')" href="#" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr> 
										<tr> 
											<td class="text-center">2 </td>
											<td> 28 Apr 2023 <br>  <small class="text-muted">10:36:AM</small>  </td> 
											<td> About </td>
											<td> <a href="/"> /about</a> </td> 
											<td> Schema </td> 
											<td>   </td> 
											<td class="text-center"> 
												<a href="/admin/cms/status/0/MTY=" class="btn btn-primary status-active" title="Change Status"><i class="fa fa-check"></i></a>
											</td>
											<td class="actions">
												<a href="/admin/seo/header-tagsedit" class="btn ripple btn-info"> Edit  </a>
												<a href="#" class="btn ripple btn-info"  data-toggle="modal" data-target="#exampleModal"> View </a>
												<a onclick="return confirm('Are you sure?')" href="#" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr>  --}}
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
				<h5 class="modal-title" id="exampleModalLabel"> Page Name </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered mg-b-0">
					<tr>  
						<th> Page Name </th> 
						<td> About </td> 
					</tr>
					<tr>  
						<th> Page URL </th>
						<td> <a href="/"> /about</a>  </td>  
					</tr>
					<tr> 
						<th> Tags Title </th>
						<td> Google Analytics </td>  
					</tr>
					<tr> 
						<th> Tags Description </th>
						<td>  </td>  
					</tr>  
				</table>
			</div> 
		</div>
	</div>
</div>


@include('admin.layouts.footer')
 
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
</script>


@endsection
