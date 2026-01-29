@extends('admin.layouts.app')
@section('content')
<div class="main-content side-content pt-0">
    <div class="container-fluid">
        <div class="inner-body">
            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5"> Landing Inquiries List </h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Landing Inquiries List</li>
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
                                <div class="col-sm-6"> <label class="main-content-label mb-2">Landing Inquiry Listing </label> </div>
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
                            <div class="table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <tr>
                                        <th style="width:40px">Id</th>
                                        <th class="sort" style="width:120px">Date &amp; Time </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Contact </th>
                                        <th>Services</th>
                                        <th> Message </th>
                                        <th>Source</th>
                                        <th class="text-center sort" style="width:100px"> Status </th>
                                        <th> Actions </th>
                                    </tr>
                                    @foreach($enquiries as $i=>$value)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td> {{ date('d M Y',strtotime($value->created_at))}} <br> <small class="text-muted">{{ date('H:i:A',strtotime($value->created_at))}}</small> </td>
                                        <td> {{$value->name}} </td>
                                        <td> {{$value->email}} </td>
                                        <td> {{$value->contact}}</td>
                                        <td> {{$value->service}}</td>
                                        <td>
                                            <div class="text-box">
                                                <p> {{$value->message}}</p>
                                            </div>
                                        </td>
                                        <td> {{$value->source}}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-primary status-active" title="Change Status"><i class="fa fa-check"></i></a>
                                        </td>
                                        <td class="actions">
                                            <form action="{{ route('landing.enquiry.delete', $value->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this enquiry?')"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn ripple btn-danger" style="display: flex;">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                </table>
                                {{ $enquiries->links() }}

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


@include('admin.layouts.footer')

<script>
    $(".text-box p").text(function(index, currentText) {
        var maxLength = $(this).parent().attr('data-maxlength');
        if (currentText.length >= maxLength) {
            return currentText.substr(0, maxLength) + "...";
        } else {
            return currentText
        }
    });
</script>


@endsection