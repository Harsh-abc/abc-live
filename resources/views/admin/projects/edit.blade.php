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
                                    <form method="POST"
                                        action="{{ url('/admin/project/projects-edit/' . base64_encode($project->id)) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card shade">
                                            @if (session('success'))
                                                <script>
                                                    toastr.success("{{ session('success') }}");
                                                </script>
                                            @endif

                                            {{-- Title --}}
                                            <div class="card shade">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label>Project Title</label>
                                                        <input type="text" name="title" class="form-control"
                                                            value="{{ $project->title ?? '' }}">
                                                    </div>
                                                    {{-- 
                                                    <div class="col-lg-3 col-md-3 form-group">
                                                        <label>Client Name:</label>
                                                        <input name="client" class="form-control" placeholder="Client..."
                                                            maxlength="255" type="text" id="client">
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 form-group">
                                                        <label>Project's Year:</label>
                                                        <input name="year" class="form-control"
                                                            placeholder="Project's Year..." maxlength="255" type="number"
                                                            id="year">
                                                    </div> --}}
                                                </div>
                                            </div>

                                            {{-- Parallax Banner --}}
                                            <div class="form-group">
                                                <label>Choose Banner</label><br>
                                                @if ($project->banner_image)
                                                    <img src="{{ asset($project->banner_image) }}" class="img-fluid mb-2"
                                                        width="100%">
                                                @endif
                                                <input type="file" name="parallax_banner" class="form-control-file">
                                            </div>


                                            <div class="form-group">
                                                <label>1st Heading</label>
                                                <input name="heading_1" value="{{ $project->heading_1 }}"
                                                    class="form-control" placeholder="1st Heading..." maxlength="255"
                                                    type="text" id="heading_1">
                                            </div>

                                            <div class="form-group">
                                                <label for="BookDescription"> 1st Section Description </label>
                                                <textarea name="description" value="{{ $project->description }}" class="form-control content" cols="10"
                                                    rows="2" id="description" placeholder="Description...">{{ $project->description }}</textarea>
                                            </div>



                                            {{-- Tags --}}
                                            <div class="form-group">
                                                <label>Tags</label>
                                                <div class="mb-2">
                                                    @foreach (explode(',', $project->tags ?? '') as $tag)
                                                        @if (trim($tag) !== '')
                                                            <span class="badge badge-primary">{{ trim($tag) }}</span>
                                                        @endif
                                                    @endforeach
                                                </div>

                                                <input type="text" name="tags" class="form-control"
                                                    value="{{ $project->tags }}">
                                            </div>

                                            {{-- Tags_2 --}}
                                            <div class="form-group">
                                                <label>Tags_2</label>
                                                <div class="mb-2">
                                                    @foreach (explode(',', $project->tags_2 ?? '') as $tag2)
                                                        @if (trim($tag2) !== '')
                                                            <span class="badge badge-primary">{{ trim($tag2) }}</span>
                                                        @endif
                                                    @endforeach
                                                </div>

                                                <input type="text" name="tags_2" class="form-control"
                                                    value="{{ $project->tags_2 }}">
                                            </div>




                                            <div class="form-group">
                                                <label>2nd Heading</label>
                                                <input name="heading_2" value="{{ $project->heading_2 }}"
                                                    class="form-control" placeholder="2nd Heading..." maxlength="255"
                                                    type="text" id="heading_2">
                                            </div>



                                            <div class="form-group">
                                                <label for="description_2"> 2nd Section Description </label>
                                                <textarea name="description_2" value="{{ $project->description_2 }}" class="form-control content1" cols="10"
                                                    rows="2" id="description_2" placeholder="Description...">{{ $project->description_2 }}</textarea>
                                            </div>

                                            {{-- Video URL --}}
                                            <div class="form-group">
                                                <label>Video URL</label>
                                                <input type="text" name="video_url" class="form-control"
                                                    value="{{ $project->video_url }}">
                                            </div>

                                            {{-- Media Preview --}}
                                            <div class="form-group">
                                                <label>Preview (Video or Banner)</label>
                                                @if (Str::endsWith($project->video_url, ['.mp4', '.webm', '.mov']))
                                                    <video width="100%" controls muted>
                                                        <source src="{{ asset($project->video_url) }}" type="video/mp4">
                                                    </video>
                                                @elseif ($project->banner_image)
                                                    <img src="{{ asset($project->banner_image) }}" class="img-fluid"
                                                        width="100%">
                                                @endif
                                            </div>

                                            {{-- Horizontal Gallery --}}
                                            <div class="form-group">
                                                <label>Horizontal Image Gallery</label>
                                                <input type="file" name="horizontal_gallery[]"
                                                    class="form-control-file" multiple>

                                                <div class="row mt-2">
                                                    @foreach ($horizontalImages as $image)
                                                        <div class="col-3 mb-2">
                                                            <img src="{{ asset($image->urls) }}"
                                                                class="img-thumbnail w-100" />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            {{-- Vertical Gallery --}}
                                            <div class="form-group">
                                                <label>Vertical Image Gallery</label>
                                                <input type="file" name="vertical_gallery[]" class="form-control-file"
                                                    multiple>

                                                <div class="row mt-2">
                                                    @foreach ($verticalImages as $image)
                                                        <div class="col-3 mb-2">
                                                            <img src="{{ asset($image->urls) }}"
                                                                class="img-thumbnail w-100" />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>


                                            {{-- Status --}}
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>
                                                        Active</option>

                                                    <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary w-100">Update
                                                    Project</button>
                                            </div>

                                        </div>
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


    <link href="/admin/css/richtext.min.css" rel="stylesheet">
    <script src="/admin/js/jquery.richtext.js"></script>
    <script>
        $(document).ready(function() {
            $('.content').richText();
            $('.content1').richText();
            $('form textarea').attr('required', '');
        });
    </script>

    <!-- Multiple Photo  -->
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>

    <script>
        document.getElementById('verfiles').addEventListener('change', handleFileSelect, false);

        function handleFileSelect(evt) {

            var files = evt.target.files;
            var output = document.getElementById("sortableImgThumbnailPreview");

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                    return function(e) {
                        // Render thumbnail.
                        var imgThumbnailElem =
                            "<div class='RearangeBox imgThumbContainer'><div class='IMGthumbnail' ><img  src='" +
                            e.target.result + "'" + "title='" + theFile.name +
                            "'/></div><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>Remove</i></div>";
                        output.innerHTML = output.innerHTML + imgThumbnailElem;
                    };
                })(f);
                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        function removeThumbnailIMG(elm) {
            elm.parentNode.outerHTML = '';
        }
    </script>

    <!-- Tags Input -->
    <link href="/admin/css/tagsinput.css" rel="stylesheet" type="text/css">
    <script src="/admin/js/typeahead.bundle.min.js"></script>
    <script src="/admin/js/tagsinput.js"></script>
@endsection
