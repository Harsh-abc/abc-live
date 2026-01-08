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
                        <h2 class="main-content-title tx-24 mg-b-5"> Projects </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <!--	<a href="#" class="btn btn-white btn-icon-text my-2 mr-2" data-toggle="modal" data-target="#exampleModal"> <i class="fe fe-folder-plus mr-2"></i> Add New Categories </a>-->
                            <a href="/admin/projects/projects-add" class="btn btn-white btn-icon-text my-2 mr-2"> <i
                                    class="fe fe-folder-plus mr-2"></i> Add New Page </a>
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
                                    <div class="col-md-6 col-sm-6">
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
                                                <li class="page-item"> <a class="page-link" href="#"
                                                        aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <hr />

                                <div class="table-responsive">
                                    <table class="table table-bordered mg-b-0">
                                        <tr>
                                            <th style="width:50px">Id</th>
                                            <th class="sort" style="width:120px">Created At</th>
                                            <th style="width:100px">Photo</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th class="text-center" style="width:60px">Status</th>
                                            <th>Actions</th>
                                        </tr>

                                        @foreach ($projects as $project)
                                            <tr>
                                                <td class="text-center">{{ $project->id }}</td>
                                                <td>
                                                    {{ $project->created_at->format('d M Y') }} <br>
                                                    <small
                                                        class="text-muted">{{ $project->created_at->format('h:i:A') }}</small>
                                                </td>

                                                <td>
                                                    @if (Str::endsWith($project->video_url, ['.mp4', '.mov', '.webm']))
                                                        <video width="100px" loop muted autoplay playsinline>
                                                            <source src="{{ asset($project->video_url) }}" type="video/mp4">
                                                        </video>
                                                    @else
                                                        <img src="{{ asset($project->banner_image) }}" class="img-fluid" />
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($project->tags)
                                                        @foreach (explode(',', $project->tags) as $tag)
                                                            <span class="badge badge-primary">{{ trim($tag) }}</span>
                                                        @endforeach
                                                    @endif
                                                </td>

                                                <td>{{ $project->title }}</td>

                                                <td class="text-center">
                                                    <a href="{{ url('/admin/cms/status/' . ($project->status ? 0 : 1) . '/' . base64_encode($project->id)) }}"
                                                        class="btn btn-primary status-active" title="Change Status">
                                                        <i class="fa {{ $project->status ? 'fa-check' : 'fa-times' }}"></i>
                                                    </a>
                                                </td>

                                                <td class="actions">
                                                    <a href="#" class="btn ripple btn-info" data-toggle="modal"
                                                        data-target="#editModal{{ $project->id }}">
                                                        Edit Thumbnail
                                                    </a>


                                                <a href="{{ url('/admin/project/listings/edit/' . base64_encode($project->id)) }}" class="btn ripple btn-info">Edit</a>

                                                    <a href="{{ url('/admin/projects/projects-view/' . $project->id) }}"
                                                        class="btn ripple btn-warning">View</a>
                                                    <a href="{{ url('/admin/projects/projects-details/' . $project->id) }}"
                                                        class="btn ripple btn-success">Add Details</a>
                                                    <a onclick="return confirm('Are you sure?')"
                                                        href="{{ url('/admin/projects/delete/' . $project->id) }}"
                                                        class="btn ripple btn-danger"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="editModal{{ $project->id }}" tabindex="-1"
                                                aria-labelledby="modalLabel{{ $project->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-md modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel{{ $project->id }}">
                                                                Edit Landing Page Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span>&times;</span></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ url('/admin/project/projects-update/' . $project->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('POST')


																     <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" name="title"
                                                                        value="{{ $project->title }}"
                                                                        class="form-control">
                                                                </div>


                                                                <!-- Tags -->
                                                                <div class="form-group">
                                                                    <label>Tags</label>
                                                                    <input type="text" name="tags"
                                                                        value="{{ $project->tags }}"
                                                                        class="form-control">
                                                                </div>

                                                                <!-- Banner Image Upload -->
                                                                <div class="form-group">
                                                                    <label>Banner Image</label>
                                                                    <div class="mb-2">
                                                                        @if ($project->banner_image)
                                                                            <img src="{{ asset($project->banner_image) }}"
                                                                                class="img-fluid" width="100%">
                                                                        @endif
                                                                    </div>
                                                                    <input type="file" name="banner_image"
                                                                        class="form-control-file">
                                                                </div>

                                                                <!-- Video URL -->
                                                                <div class="form-group">
                                                                    <label>Video URL</label>
                                                                    <input type="text" name="video_url"
                                                                        value="{{ $project->video_url }}"
                                                                        class="form-control">
                                                                </div>

                                                                <!-- Media Preview -->
                                                                <div class="form-group">
                                                                    <label>Preview ( Banner / Video)</label>
                                                                    <div class="mb-2">
                                                                        @if (Str::endsWith($project->video_url, ['.mp4', '.mov', '.webm']))
                                                                            <video width="100%" controls muted loop
                                                                                autoplay>
                                                                                <source
                                                                                    src="{{ asset($project->video_url) }}"
                                                                                    type="video/mp4">
                                                                                Your browser does not support the video tag.
                                                                            </video>
                                                                        @elseif ($project->banner_image)
                                                                            <img src="{{ asset($project->banner_image) }}"
                                                                                class="img-fluid" width="100%">
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </table>
                                </div>

                                <div class="">
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






    @include('admin.layouts.footer')




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
