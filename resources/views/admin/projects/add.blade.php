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
                        <h2 class="main-content-title tx-24 mg-b-5"> Add Project </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Project Listing</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Project</li>
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

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="POST" class="row justify-content-md-center"
                                        action="/admin/project/projects-add/post" enctype="multipart/form-data">
                                        <div class="col-xl-9 col-lg-9 col-md-9">
                                            @csrf
                                            <div class="card shade">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 form-group">
                                                        <label> Select Category </label>
                                                        <select name="category_id" class="custom-select w-100"
                                                            required="">
                                                            <option value="">-- Select Category -- </option>
                                                            <option value="1"> UI Design & Development </option>
                                                            <option value="2"> Interactive Solutions </option>
                                                            <option value="3"> Branding </option>
                                                            <option value="4"> App Development </option>
                                                            <option value="5"> E-Commerce </option>
                                                            <option value="6"> Digital Marketing </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 form-group">
                                                        <label>Project Title : <span>*</span></label>
                                                        <input name="title" value="" class="form-control"
                                                            placeholder="Page Title..." maxlength="255" type="text"
                                                            id="title">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 form-group" id="choose-thumbnail">
                                                        <label> Choose Thumbnail - Image </label> <br />
                                                        <input type="file" accept="image/*" id="choose-file"
                                                            name="banner_image" />
                                                        <label for="choose-file">Choose Thumbnail</label>
                                                        <div id="img-preview"></div>
                                                    </div>
                                                    <div class="col-md-6 form-group" id="choose-vdothumbnail">
                                                        <label> Choose Thumbnail - Video </label> <br />
                                                        <div class="relative">
                                                            <input id="file-input" type="file" accept="video/*"
                                                                name="choose-video" />
                                                            <label for="choose-video">Choose Video </label>
                                                        </div>
                                                        <video id="video" mute></video>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status </label>
                                                    <select name="status" class="custom-select w-100">
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


    <script>
        const chooseFile = document.getElementById("choose-file");
        const imgPreview = document.getElementById("img-preview");

        chooseFile.addEventListener("change", function() {
            getImgData();
        });

        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function() {
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

            reader.onload = function(e) {
                videoSource.setAttribute('src', e.target.result);
                video.appendChild(videoSource);
                $('#video').addClass('hklhk');
                video.load();
                video.play();
            };

            reader.onprogress = function(e) {
                console.log('progress: ', Math.round((e.loaded * 100) / e.total));
            };

            reader.readAsDataURL(files[0]);
        });
    </script>




@endsection
