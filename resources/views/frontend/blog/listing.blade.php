@include('frontend.layout.header')

<body>
    @include('frontend.layout.nav')


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="overflow-hidden">
                <!-- Blog area start -->
                <section class="blog__area-6 blog__animation">
                    <div class="container g-0 pt-110 pb-110">
                        <div class="row pb-50">
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 animation__char_come">We always think</h2>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                                <div class="blog__text">
                                    <p>Crafting new bright brands, unique visual systems and digital experience focused
                                        on a wide range of original collabs. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-50 blog_trending_topic">
                            <div class="col-xxl-12">
                                <h5> Explore Trending Topics </h5>
                                <br />
                                @if($categories->count())
                                <ul class="d-flex blog-category-tabs">
                                    <li>
                                        <a href="javascript:void(0)" class="active" data-id="all">
                                            All
                                        </a>
                                    </li>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="javascript:void(0)" data-id="{{ $category->id }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>

                        <div class="row reset-grid blog_listing" id="blogListing">

                            @foreach ($Blogs as $blog)
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 blog-item"
                                data-category="{{ $blog->category_id }}">
                                <article class="blog__item">
                                    <div class="blog__img-wrapper">
                                        <a href="{{ url('/blog/' . $blog->blog_url) }}">
                                            <div class="img-box">
                                                <img class="image-box__item" src="{{ asset($blog->thumb_image) }}"
                                                    alt="{{ $blog->blog_title }}" />
                                                <img class="image-box__item" src="{{ asset($blog->thumb_image) }}"
                                                    alt="{{ $blog->blog_title }}" />
                                            </div>
                                        </a>
                                    </div>
                                    @php
                                    $category = \App\Models\Categories::find($blog->category_id);
                                    @endphp
                                    <h4 class="blog__meta">
                                        <a href="{{ url('/blog/' . $blog->blog_url) }}">
                                            {{ $category->name  ?? '' }}
                                            {{ $blog->post_author ?? '' }}
                                        </a>
                                        . {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                                    </h4>
                                    <h5>
                                        <a href="{{ url('/blog/' . $blog->blog_url) }}" class="blog__title">
                                            {{ $blog->blog_title }}
                                        </a>
                                    </h5>
                                    <p>
                                        {{ Str::limit(strip_tags($blog->blog_content), 250, '...') }}

                                    </p>

                                    <div class="mt-3">
                                        <a href="{{ url('/blog/' . $blog->blog_url) }}" class="blog__btn border rounded-pill cus-url-btn float-end me-4">
                                            Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </article>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- Blog area end -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {

                        document.querySelectorAll('.blog-category-tabs a').forEach(tab => {
                            tab.addEventListener('click', function() {

                                // active state
                                document.querySelectorAll('.blog-category-tabs a')
                                    .forEach(el => el.classList.remove('active'));
                                this.classList.add('active');

                                let selectedCategory = this.dataset.id; // ✅ FIXED
                                let blogs = document.querySelectorAll('.blog-item');

                                blogs.forEach(blog => {
                                    if (selectedCategory === 'all' ||
                                        blog.dataset.category === selectedCategory) {
                                        blog.style.display = '';
                                    } else {
                                        blog.style.display = 'none';
                                    }
                                });
                            });
                        });

                    });
                </script>

                <!-- -->
                <section class="pt-100">
                    @include('frontend.layout.cta')
                </section>

            </main>
            @include('frontend.layout.footer')
        </div>
    </div>