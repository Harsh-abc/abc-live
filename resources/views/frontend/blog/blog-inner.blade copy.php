@include('frontend.layout.header')

<body class="">
    @include('frontend.layout.nav')

    <!-- ========== LOADER - Place immediately after body ========== -->
    <div id="page-loader" class="loader-wrapper">
        <div class="loader-content">
            <!-- Replace with your company logo -->
            <div class="logo-container">
                <img src="/img/abc-loader.webp" alt="Company Logo" class="loader-logo">
            </div>

            <!-- Spinner animation around/below logo -->
            <div class="spinner"></div>

            {{-- Optional: Loading text
            <p class="loading-text">Loading<span class="dots"></span></p> --}}

            <!-- Optional: Progress bar -->
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>
    </div>
    <!-- ========== END LOADER ========== -->


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Blog area start -->
                <section class="blog__area-6 blog__animation">
                    <div class="px-5 g-0 pt-110 pb-110">
                        <div class="row px-5 pb-50">
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
                        <div class="row px-5 pb-50 blog_trending_topic">
                            <div class="col-xxl-12">
                                <h5> Explore Trending Topics </h5>
                                <br />
                                <ul class="d-flex">
                                    <li> <a href=""> Technology </a> </li>
                                    <li> <a href=""> Business </a> </li>
                                    <li> <a href=""> Management </a> </li>
                                    <li> <a href=""> Startups </a> </li>
                                    <li> <a href=""> Digital Marketing </a> </li>
                                    <li> <a href=""> Web Designs </a> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row reset-grid blog_listing">
                            <section class="blog-detail-area py-5">
                                <div class="px-5 ">
                                    <div class="row">
                                        <div class="col-9 pe-5 border-end">
                                            <article class="blog-detail">
                                                {{-- Banner Image --}}
                                                @if ($blog->banner_image)
                                                    <div class="blog-banner mb-4">
                                                        <img src="{{ asset($blog->banner_image) }}" class="img-fluid"
                                                            alt="{{ $blog->blog_title }}">
                                                    </div>
                                                @endif

                                                {{-- Meta --}}
                                                <div class="blog-meta mb-3">
                                                    <span class="text-muted">
                                                        {{ optional($blog->category)->name ?? 'Uncategorized' }} |
                                                        {{ \Carbon\Carbon::parse($blog->publish_date)->format('d M Y') }}
                                                    </span>
                                                </div>

                                                {{-- Title --}}
                                                <h1 class="blog-title mb-3">{{ $blog->blog_title }}</h1>
                                                <h5 class="blog-title mb-3">{{ $blog->post_author }}</h5>


                                                {{-- Content --}}
                                                <div class="blog-content">
                                                    {!! $blog->blog_content !!}
                                                </div>

                                                {{-- Tags --}}
                                                @if (!empty($activeTags))
                                                    <div class="blog-tags mt-4">
                                                        <strong>Tags:</strong>
                                                        @foreach ($activeTags as $tag)
                                                            <span class="badge bg-secondary">{{ trim($tag) }}</span>
                                                        @endforeach
                                                    </div>
                                                @endif

                                            </article>
                                        </div>
                                        <div class="col-3 ps-5">
                                            <div>
                                                <h2>Schedule a Callback</h2>
                                                {{-- <form action="#" method="post">

                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="pwd"
                                                            placeholder="Enter name" name="name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" id="pwd"
                                                            placeholder="Enter phone number" name="phone">
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="Enter email" name="email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <select id="disabledSelect" class="form-select">
                                                            <option>Purpose</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form> --}}
                                                <form method="post" action="/contact-us" id="" class="blog-form-row mt-5">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-floating mb-3">
                                                            <input type="text"
                                                                class="form-control border-dark @error('name') is-invalid @enderror"
                                                                id="name" name="name" placeholder="Name*"
                                                                value="{{ old('name') }}">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="name">Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row row d-flex ">
                                                        <div class="form-floating mb-3 col-md-12">
                                                            <input type="email"
                                                                class="form-control border-dark @error('email') is-invalid @enderror"
                                                                id="email" name="email" placeholder="Email"
                                                                value="{{ old('email') }}">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="email">Email*</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-12">
                                                            <input type="number" minlength="10" maxlength="12"
                                                                class="form-control border-dark @error('contact') is-invalid @enderror"
                                                                id="contact" name="contact" placeholder="Contact*"
                                                                value="{{ old('contact') }}" required="required">
                                                            @error('contact')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="contact">Contact*</label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-row">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="subject"
                                                                placeholder="name@example.com">
                                                            <label for="subject">Subject</label>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-row">
                                                        <div class="form-floating mb-3">
                                                            <textarea type="textbox" class="form-control border-dark @error('message') is-invalid @enderror" id="message" name="message"
                                                                placeholder="Message*" value="" required>{{ old('message') }}</textarea>
                                                            @error('message')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="subject">Message</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-6 col-12 form-group required">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6Le627sUAAAAAIHEu5jf2bYOoaOIkuO_dOC2NJd5"></div>
                                                        <span id="captchaErr"
                                                            class="error-message"><?php //echo $captchaErr;
                                                            ?></span>
                                                    </div>
                                                    <div class="form-group submit">
                                                        <input type="submit" id="submitBtn"
                                                            class="btn btn-dark w-100 submitBtn" value="Submit">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="mt-5">
                                                <h2>Recent Posts</h2>
                                                <ul class="blog-recent-posts mb-3 list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{-- @foreach ($Blogs as $blog)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
            <article class="blog__item">
                <div class="blog__img-wrapper">
                    <a href="{{ url('/blogs/' . $blog->blog_url) }}">
                        <div class="img-box">
                            <img class="image-box__item" src="{{ asset($blog->thumb_image) }}" alt="{{ $blog->blog_title }}" />
                            <img class="image-box__item" src="{{ asset($blog->thumb_image) }}" alt="{{ $blog->blog_title }}" />
                        </div>
                    </a>
                </div>
                <h4 class="blog__meta">
                    <a href="{{ url('/blogs/' . $blog->blog_url) }}">
                        {{ optional($blog->category)->name ?? 'Category' }}
                    </a>
                    . {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                </h4>
                <h5>
                    <a href="{{ url('/blogs/' . $blog->blog_url) }}" class="blog__title">
                        {{ $blog->blog_title }}
                    </a>
                </h5>
                <a href="{{ url('/blogs/' . $blog->blog_url) }}" class="blog__btn">
                    Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </article>
        </div>
    @endforeach --}}


                            {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
							<article class="blog__item">
								<div class="blog__img-wrapper">
									<a href="/blogs/blog-details">
										<div class="img-box">
											<img class="image-box__item" src="/img/blogs/2.jpg" alt="Blog Thumbnail" />
											<img class="image-box__item" src="/img/blogs/2.jpg" alt="BLog Thumbnail" />
										</div>
									</a>
								</div>
								<h4 class="blog__meta"><a href="/blogs/blog-details">SEO </a> . 15 Feb 2025</h4>
								<h5><a href="blog-details.html" class="blog__title">Top 10 Off-Page SEO Strategies to Boost Your Website in 2025</a></h5>
								<a href="/blogs/blog-details" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
							</article>
						</div> <!-- -->
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
							<article class="blog__item">
								<div class="blog__img-wrapper">
									<a href="/blogs/blog-details">
										<div class="img-box">
											<img class="image-box__item" src="/img/blogs/3.jpg" alt="Blog Thumbnail" />
											<img class="image-box__item" src="/img/blogs/3.jpg" alt="BLog Thumbnail" />
										</div>
									</a>
								</div>
								<h4 class="blog__meta"><a href="/blogs/blog-details">SEO </a> . 15 Feb 2025</h4>
								<h5><a href="blog-details.html" class="blog__title">Top 10 Off-Page SEO Strategies to Boost Your Website in 2025</a></h5>
								<a href="/blogs/blog-details" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
							</article>
						</div> <!-- -->
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
							<article class="blog__item">
								<div class="blog__img-wrapper">
									<a href="/blogs/blog-details">
										<div class="img-box">
											<img class="image-box__item" src="/img/blogs/4.jpg" alt="Blog Thumbnail" />
											<img class="image-box__item" src="/img/blogs/4.jpg" alt="BLog Thumbnail" />
										</div>
									</a>
								</div>
								<h4 class="blog__meta"><a href="/blogs/blog-details">SEO </a> . 15 Feb 2025</h4>
								<h5><a href="blog-details.html" class="blog__title">Top 10 Off-Page SEO Strategies to Boost Your Website in 2025</a></h5>
								<a href="/blogs/blog-details" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
							</article>
						</div> <!-- -->
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
							<article class="blog__item">
								<div class="blog__img-wrapper">
									<a href="/blogs/blog-details">
										<div class="img-box">
											<img class="image-box__item" src="/img/blogs/5.jpg" alt="Blog Thumbnail" />
											<img class="image-box__item" src="/img/blogs/5.jpg" alt="BLog Thumbnail" />
										</div>
									</a>
								</div>
								<h4 class="blog__meta"><a href="/blogs/blog-details">SEO </a> . 15 Feb 2025</h4>
								<h5><a href="blog-details.html" class="blog__title">Top 10 Off-Page SEO Strategies to Boost Your Website in 2025</a></h5>
								<a href="/blogs/blog-details" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
							</article>
						</div> <!-- -->
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
							<article class="blog__item">
								<div class="blog__img-wrapper">
									<a href="/blogs/blog-details">
										<div class="img-box">
											<img class="image-box__item" src="/img/blogs/6.jpg" alt="Blog Thumbnail" />
											<img class="image-box__item" src="/img/blogs/6.jpg" alt="BLog Thumbnail" />
										</div>
									</a>
								</div>
								<h4 class="blog__meta"><a href="/blogs/blog-details">SEO </a> . 15 Feb 2025</h4>
								<h5><a href="blog-details.html" class="blog__title">Top 10 Off-Page SEO Strategies to Boost Your Website in 2025</a></h5>
								<a href="/blogs/blog-details" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
							</article>
						</div> <!-- -->  --}}
                        </div>
                    </div>
                </section>
                <!-- Blog area end -->



                <!-- -->
                <section class="pt-100">
                    @include('frontend.layout.cta')
                </section>

            </main>
            @include('frontend.layout.footer')
        </div>
    </div>
