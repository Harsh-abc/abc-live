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
						<h2 class="main-content-title tx-24 mg-b-5"> Seo Pages </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Seo</li>
							<li class="breadcrumb-item active" aria-current="page">Seo Pages</li>
						</ol>
					</div>
					<div class="d-flex">
						<div class="justify-content-center">
						<!--	<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a>-->
							<a href="/admin/seo/add" class="btn btn-white btn-icon-text my-2 mr-2"> <i class="fe fe-folder-plus mr-2"></i> Add New SEO Tags </a>
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
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:50px">Id</th>
											<th style="width:110px"> Created At </th> 
											<th>Page Name</th>  
											<th> URL </th>  
											<th> Meta Title </th>  
											<th> Meta Description </th> 
											<th class="text-center" style="width:60px"> Status </th>
											<th style="width:190px"> Actions </th>
										</tr> 
										@foreach ($seo_data as $k=>$item)
										<tr> 
											<td class="text-center">{{$k+1}} </td>
											<td> {{ ($item->created_at) ? date('Y-m-d',strtotime($item->created_at)) : '' }}<br>  <small class="text-muted">{{ ($item->created_at) ? date('H:i:A',strtotime($item->created_at)) : '' }}</small>  </td> 
											<td> {{$item->title}} </td>
											<td> <a href="/{{$item->urls}}"> {{$item->urls}}</a> </td> 
											<td>{{$item->meta_keywords}} </td> 
											<td>{{$item->meta_description}} </td>  
											@if($item->status == 0) 
												<td><a href="seo/status/{{base64_encode($item->status)}}/{{base64_encode($item->id)}}" class="btn btn-danger status_inactive" title="Change Status"><i class='fa fa-times'></i></a> </td>
											@else 
												<td> <a href="seo/status/{{base64_encode($item->status)}}/{{base64_encode($item->id)}}" class="btn btn-primary status-active" title="Change Status"><i class='fa fa-check'></i></a> </td>
											@endif
											<td class="actions">
												<a href="/admin/seo/edit/{{base64_encode($item->id)}}" class="btn ripple btn-info"> Edit  </a>
												<a href="#" class="btn ripple btn-info" onclick="view_details('{{$item->category_id}}', '{{$item->urls}}', '{{$item->title}}', '{{$item->meta_keywords}}', '{{$item->meta_description}}')"  data-toggle="modal" data-target="#exampleModal"> View </a>
												<a onclick="return confirm('Are you sure?')" href="/admin/seo/delete/{{base64_encode($item->id)}}" class="btn ripple btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
											</td>
										</tr> 
										@endforeach
									</table>
								</div>
								{{-- <div class="">
									<nav aria-label="Page navigation example">
									  <ul class="pagination justify-content-end mb-0">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									  </ul>
									</nav>
								</div> --}}
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


function view_details(category_id,urls,title,meta_keywords,meta_description){
	var page_url = document.getElementById('page_url');
	page_url.href = urls;
	page_url.innerText = urls;

	document.getElementById("meta_title").innerText = title;
	document.getElementById("meta_keywords").innerText = meta_keywords;
	document.getElementById("meta_desc").innerText = meta_description;
	
	if(category_id == 1){
		document.getElementById("page_name").innerText = 'Home';
	}else if(category_id == 2){
		document.getElementById("page_name").innerText = 'About';
	}else if(category_id == 3){
		document.getElementById("page_name").innerText = 'Work';
	}else if(category_id == 4){
		document.getElementById("page_name").innerText = 'Services';
	}else if(category_id == 5){
		document.getElementById("page_name").innerText = 'Career';
	}else{
		document.getElementById("page_name").innerText = 'Contact';
	}

}
</script>


@endsection
