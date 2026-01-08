@extends('admin.layouts.app')
@section('content')

<!-- ===== ===== --> 

	<div class="main-content side-content pt-0">
		<div class="container-fluid">
			<div class="inner-body">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5"> Career </h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Career</li>
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
									<div class="col-sm-6"> <label class="main-content-label mb-2"> Career Inquiry </label> </div>
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
							<hr />
							<div class="card-body pt-0">
								<div class="table-responsive career_table">
									<table class="table table-bordered mg-b-0">
										<tr> 
											<th style="width:40px">Id</th>
											<th style="width:110px">Date &amp; Time </th> 
											<th> Name </th>  
											<th style="width:150px"> Contact </th> 
											<th> Location </th> 
											<th> Resume </th>  
											<th> Message  </th>  
											<th style="width:140px"> Actions </th> 
										</tr> 

										@foreach ($Careers as $k=>$item)
										<tr> 
											<td>{{$Careers->firstItem() + $k}} </td>	
											<td> {{date('Y M d',strtotime($item->created_at))}} <br>  <small class="text-muted">{{date('H:i a',strtotime($item->created_at))}}</small>  </td>									
											<td> {{$item->name}} </td>  
											<td>
												<a href="email:{{$item->email}}"> {{$item->email}} </a> <hr />
												<a href="tel:{{$item->contact}}"> {{$item->contact}} </a>
											</td> 
											<td> {{$item->location}} </td> 
											<td> {{$item->job_role}} <hr /> <a href="/img/career/{{$item->attachment}}" download> Resume </a> </td>
											<td> <div class="text-box" data-maxlength="150"> <p> {{$item->message}} </p></div></td> 
										<td class="actions">
	<a href="#" 
	   class="btn ripple btn-warning viewCareer"
	   data-toggle="modal"
	   data-target="#exampleModal"
	   data-name="{{ $item->name }}"
	   data-email="{{ $item->email }}"
	   data-contact="{{ $item->contact }}"
	   data-location="{{ $item->location }}"
	   data-message="{{ $item->message }}"
	   data-resume="{{ url('/img/career/' . $item->attachment) }}"
	>
		View
	</a>

	<a onclick="return confirm('Are you sure?')" 
	   href="/admin/career/delete/{{ base64_encode($item->id) }}" 
	   class="btn ripple btn-danger">
		<i class="fa fa-trash" aria-hidden="true"></i>
	</a>
</td>

										</tr>
										@endforeach
										
									</table>
									{{ $Careers->links() }}
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

<script>
$(document).ready(function() {
	$('.viewCareer').on('click', function () {
		$('#modal-name').text($(this).data('name'));
		$('#modal-email').text($(this).data('email'));
		$('#modal-contact').text($(this).data('contact'));
		$('#modal-location').text($(this).data('location'));
		$('#modal-message').text($(this).data('message'));
		$('#modal-resume').attr('href', $(this).data('resume'));
	});
});
</script>


<!-- End Main Content-->

<!-- ===== ===== --> 

<!-- Career Details -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inquiry</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr><th>Name</th><td><span id="modal-name"></span></td></tr>
					<tr><th>Email</th><td><span id="modal-email"></span></td></tr>
					<tr><th>Contact</th><td><span id="modal-contact"></span></td></tr>
					<tr><th>Location</th><td><span id="modal-location"></span></td></tr>
					<tr><th>Resume</th><td><a id="modal-resume" href="#" target="_blank" download>Download Resume</a></td></tr>
					<tr><th>Message</th><td><span id="modal-message"></span></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>



@include('admin.layouts.footer')
 
<script>
$(".text-box p").text(function(index, currentText) {
  var maxLength = $(this).parent().attr('data-maxlength');
  if(currentText.length >= maxLength) {
    return currentText.substr(0, maxLength) + "...";
  } else {
    return currentText
  } 
});
</script>


@endsection
