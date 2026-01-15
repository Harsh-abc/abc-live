@include('frontend.layout.header')

<body>
    @include('frontend.layout.nav')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Blog area start -->
                <section class="blog__area-6 blog__animation blog-page-inner">
                    <div class="g-0 pb-110">

                        <!-- Blog Header Banner -->
                        <div class="row px-1 pb-50 blog-header-banner"
                            style="background-image: url('{{ !empty($blog->banner_image) ? asset($blog->banner_image) : 'https://moz.com/images/blog/banners/04-local-seo-blog-banner-BGs/local-seo-category-blog-banner-BGs-E.png?w=1920&auto=compress%2Cformat&fit=crop&dm=1757708764&s=eaab989823d1473e80127bcf56a0b06f' }}');">
                            <div class="col-lg-7 col-md-12"> 
							@php
        $category = \App\Models\Categories::find($blog->category_id);
    @endphp
                                <h3 class="text-capitalize" style="color: {{ $blog->highlight_color ?? '#ffc107' }}">{{ $category->name }}</h3>
                                <h1 class="text-white">{{ $blog->blog_title }}</h1>
                                <div class="py-2 d-flex gap-4 mt-3">
                                    <div class="text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M22 10H2v9a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3zM7 8a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1m10 0a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1"
                                                opacity=".5" />
                                            <path
                                                d="M19 4h-1v3a1 1 0 0 1-2 0V4H8v3a1 1 0 0 1-2 0V4H5a3 3 0 0 0-3 3v3h20V7a3 3 0 0 0-3-3" />
                                        </svg>
                                        <span class="ms-2">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</span>
										<!-- <span class="ms-2">Jan 15, 2024</span> --!>
                                    </div>
                                    <div class="text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8s8-3.59 8-8s-3.59-8-8-8m4.2 12.2L11 13V7h1.5v5.2l4.5 2.7z"
                                                opacity=".3" />
                                            <path
                                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m.5-13H11v6l5.2 3.2l.8-1.3l-4.5-2.7z" />
                                        </svg>
                                        <span class="ms-2">{{ $blog->time_to_read }} min read</span>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex align-items-center">
                                    <figure class="mb-0 me-2" style="width: 40px;">
                                        <img src="https://www.abcdesigns.in/img/logo/logo_light.png" alt="Logo"
                                            class="w-100 h-100 object-fit-cover rounded-circle">
                                    </figure>
                                    <span class="text-white">Written by: <span style="color: {{ $blog->highlight_color ?? '#ffc107' }}">{{ $blog->post_author }}</span></span>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                                <figure class="mb-0">
                                    <img src="{{ asset($blog->banner_image_1 ?? 'https://moz.com/images/blog/insets/Local-SEO.png?w=1360&h=900&auto=compress%2Cformat&fit=crop&dm=1757710396&s=8a42f69376c6267d1cc2c65929cb88b1') }}"
                 alt="{{ $blog->alt_text_banner_1 ?? $blog->blog_title }}"
                 class="img-fluid rounded">
                                </figure>
                            </div>
                        </div>

                        <!-- MOBILE TOC - Collapsible Accordion (Shows only on mobile/tablet) -->
                        <div class="container-fluid px-5 d-lg-none mt-4">
                            <div class="accordion" id="mobileTocAccordion">
                                <div class="accordion-item border rounded">
                                    <h2 class="accordion-header" id="mobileTocHeading">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#mobileTocContent"
                                            aria-expanded="false" aria-controls="mobileTocContent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" class="me-2">
                                                <line x1="8" y1="6" x2="21" y2="6">
                                                </line>
                                                <line x1="8" y1="12" x2="21" y2="12">
                                                </line>
                                                <line x1="8" y1="18" x2="21" y2="18">
                                                </line>
                                                <line x1="3" y1="6" x2="3.01" y2="6">
                                                </line>
                                                <line x1="3" y1="12" x2="3.01" y2="12">
                                                </line>
                                                <line x1="3" y1="18" x2="3.01" y2="18">
                                                </line>
                                            </svg>
                                            <strong>Table of Contents</strong>
                                        </button>
                                    </h2>
                                    <div id="mobileTocContent" class="accordion-collapse collapse"
                                        aria-labelledby="mobileTocHeading" data-bs-parent="#mobileTocAccordion">
                                        <div class="accordion-body">
                                            <nav class="toc-nav">
                                                <ul class="toc-list list-unstyled mb-0" id="mobile-toc-list">
                                                    <!-- TOC items will be generated by JavaScript -->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BLOG LAYOUT - 3 COLUMNS -->
                        <div class="blog-detail-area px-5 py-5">
                            <div class="blog-layout">

                                <!-- LEFT SIDEBAR - Table of Contents (Desktop Only) -->
                                <aside class="blog-sidebar blog-sticky-left d-none d-lg-block">
                                    <div class="sticky-wrapper">
                                        <div class="sidebar-box toc-sidebar">
                                            <div class="toc-header d-flex align-items-center mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" class="me-2">
                                                    <line x1="8" y1="6" x2="21"
                                                        y2="6"></line>
                                                    <line x1="8" y1="12" x2="21"
                                                        y2="12"></line>
                                                    <line x1="8" y1="18" x2="21"
                                                        y2="18"></line>
                                                    <line x1="3" y1="6" x2="3.01"
                                                        y2="6"></line>
                                                    <line x1="3" y1="12" x2="3.01"
                                                        y2="12"></line>
                                                    <line x1="3" y1="18" x2="3.01"
                                                        y2="18"></line>
                                                </svg>
                                                <h4 class="mb-0">Table of Contents</h4>
                                            </div>
                                            <nav class="toc-nav">
                                                <ul class="toc-list list-unstyled mb-0" id="desktop-toc-list">
                                                    <!-- TOC items will be generated by JavaScript -->
                                                </ul>
                                            </nav>
                                        </div>

                                        <div class="sidebar-box mt-4">
                                            <h4 class="mb-3">Follow Us</h4>
                                            <div class="social-links d-flex gap-2">
                                                <a href="#" class="btn btn-outline-dark btn-sm rounded-circle">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-dark btn-sm rounded-circle">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-dark btn-sm rounded-circle">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-dark btn-sm rounded-circle">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>

                                <!-- CENTER - Main Blog Content -->
                                <article class="blog-center-content" id="blog-content-area">
                                    {{-- Dynamic content from database --}}
                                    {{-- @if ($blog->banner_image)
                                        <div class="blog-banner mb-4">
                                            <img src="{{ asset($blog->banner_image) }}" class="img-fluid"
                                                alt="{{ $blog->blog_title }}">
                                        </div>
                                    @endif

                                    <div class="blog-meta mb-3">
                                        <span class="text-muted">
                                            {{ optional($blog->category)->name ?? 'Uncategorized' }} |
                                            {{ \Carbon\Carbon::parse($blog->publish_date)->format('d M Y') }}
                                        </span>
                                    </div>

                                    <h1 class="blog-title mb-3">{{ $blog->blog_title }}</h1>
                                    <h5 class="blog-author mb-4">{{ $blog->post_author }}</h5>

                                    <div class="blog-content">
                                        {!! $blog->blog_content !!}
                                    </div>

                                    @if (!empty($activeTags))
                                        <div class="blog-tags mt-4">
                                            <strong>Tags:</strong>
                                            @foreach ($activeTags as $tag)
                                                <span class="badge bg-secondary">{{ trim($tag) }}</span>
                                            @endforeach
                                        </div>
                                    @endif --}}
<style>
.blog-content-inner ul {
    list-style-type: disc !important;
    padding-left: 24px;
    margin-bottom: 16px;
}

.blog-content-inner ol {
    list-style-type: decimal !important;
    padding-left: 24px;
    margin-bottom: 16px;
}

.blog-content-inner li {
    margin-bottom: 8px;
}

.blog-content-inner li::marker {
    color: #000;
}
</style>
                                    <!-- Static content for demonstration -->
                                    <div class="blog-content-inner ck-content">
									{!! $blog->blog_content !!}

                                       <!-- <h2>Help! My Google Business Profile Local Search Visibility is Dropping</h2>
                                        <p>Managing a Google Business Profile (GBP) that is suddenly not driving the
                                            leads
                                            or traffic it once did can be stressful. A loss of ranking in Google Maps
                                            can
                                            feel mysterious, but visibility drops usually have identifiable triggers.
                                            With
                                            the right sequence of analysis and fixes, you can recover.</p>
                                        <p>This guide will walk you through a systematic diagnostic framework that you
                                            can
                                            use to confirm if it's a real ranking drop versus normal fluctuation. If
                                            it's a
                                            real ranking drop that needs to be corrected, this guide will help you:</p>
                                        <ul>
                                            <li>
                                                <p>Either rule out or confirm common profile issues</p>
                                            </li>
                                            <li>
                                                <p>Determine the root cause</p>
                                            </li>
                                            <li>
                                                <p>Identify the solution</p>
                                            </li>
                                            <li>
                                                <p>Show how to implement the solution(s).</p>
                                            </li>
                                        </ul>

                                        <h2>Step 1: Confirm and Quantify the Ranking Drop</h2>
                                        <p>Before diving into fixes, you need to verify that there's actually a problem
                                            and understand its scope.</p>

                                        <h3>Review your Google Maps performance metrics in Google Business Profile
                                            Insights</h3>
                                        <p>You can obviously identify a ranking drop by comparing ranking grids over
                                            time,
                                            but the first true sign of a ranking drop that's causing a real-world issue
                                            is a
                                            decrease in calls coming from the business profile. You'll need to review
                                            your
                                            call data to see if calls coming from the business profile are down
                                            month-over-month AND year-over-year (important for seasonality).</p>
                                        <p>If you do not have dedicated call tracking for your business listing (which
                                            you ABSOLUTELY
                                            should), you can use the call data in the Google Business Profile Insights
                                            tab
                                            as a directional dataset. Insights only show calls made from mobile devices
                                            and
                                            are based on just tapping on the button, versus a placed call, so you are
                                            not
                                            seeing "true" call data if you rely on Insights only.</p>

                                        <h2>Step 2: Check Google Analytics and Google Search Console</h2>
                                        <p>Google Analytics will have better click data than GBP insights, so make sure
                                            to
                                            review your GA4 data. However, to segment only GBP traffic out in GA4,
                                            you'll
                                            need to already be using UTM codes on your GBP links.</p>
                                        <p>If you notice clicks to the website are down from GBP, this is another sign
                                            that rankings may have dropped.</p>

                                        <h2>Step 3: Analyze Your Competition</h2>
                                        <p>Understanding what your competitors are doing can provide valuable insights
                                            into why your rankings may have changed.</p>
                                        <p>Look at their recent reviews, posts, and any changes to their business
                                            information. Sometimes a competitor's improvement can affect your relative
                                            position.</p>

                                        <h2>Step 4: Review Recent Changes to Your Profile</h2>
                                        <p>Think about any recent changes you've made to your Google Business Profile.
                                            Even small modifications can sometimes trigger ranking fluctuations.</p>
                                        <p>Common changes that can affect rankings include:</p>
                                        <ul>
                                            <li>
                                                <p>Business name modifications</p>
                                            </li>
                                            <li>
                                                <p>Category changes</p>
                                            </li>
                                            <li>
                                                <p>Address updates</p>
                                            </li>
                                            <li>
                                                <p>Phone number changes</p>
                                            </li>
                                        </ul>

                                        <h2>Step 5: Check for Google Algorithm Updates</h2>
                                        <p>Google regularly updates its algorithms, and these updates can significantly
                                            impact local search rankings.</p>
                                        <p>Stay informed about recent Google updates and assess whether the timing
                                            correlates with your ranking drop.</p>

                                        <h2>Step 6: Audit Your NAP Consistency</h2>
                                        <p>NAP (Name, Address, Phone) consistency across the web is crucial for local
                                            SEO. Inconsistencies can confuse search engines and hurt your rankings.</p>
                                        <p>Check major directories and citation sources to ensure your business
                                            information matches exactly.</p>

                                        {{-- <h2>Conclusion and Next Steps</h2> --}}
                                        <p>Recovering from a Google Maps ranking drop requires patience and systematic
                                            troubleshooting. By following the steps outlined in this guide, you can
                                            identify the root cause and implement effective solutions.</p>
                                        <p>Remember that SEO is a long-term game, and consistent effort will yield
                                            results over time.</p> --!>
                                    </div>
                                </article>

                                <!-- RIGHT SIDEBAR - Form & Recent Posts -->
                                <aside class="blog-sidebar blog-sticky-right">
                                    <div class="sticky-wrapper">
                                        <div class="sidebar-box">
                                            <h4 class="">Schedule a Callback</h4>
                                            <form method="post" action="/contact-us" id=""
                                                class="blog-form-row mt-3">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-floating">
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
                                                        <textarea type="textbox" class="form-control border-dark @error('message') is-invalid @enderror" id="message"
                                                            name="message" placeholder="Message*" value="" required>{{ old('message') }}</textarea>
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
                                    </div>
                                </aside>

                            </div>
                        </div>
    <section class="related-blogs pt-5">
        <div class="container">
            <h3 class="mb-3">Latest Blogs</h3>
<div class="row reset-grid blog_listing">

                             @foreach ($relatedBlogs as $rBlog)
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                    <article class="blog__item">
                                        <div class="blog__img-wrapper">
                                            <a href="{{ url('/blog/' . $rBlog->blog_url) }}">
                                                <div class="img-box">
                                                    <img class="image-box__item" src="{{ asset($rBlog->thumb_image) }}"
                                                        alt="{{ $rBlog->blog_title }}" />
                                                    <img class="image-box__item" src="{{ asset($rBlog->thumb_image) }}"
                                                        alt="{{ $rBlog->blog_title }}" />
                                                </div>
                                            </a>
                                        </div>
										@php
        $category = \App\Models\Categories::find($rBlog->category_id);
    @endphp
                                        <h4 class="blog__meta">
                                            <a href="{{ url('/blog/' . $rBlog->blog_url) }}">
                                                {{ $category->name  ?? '' }}
                                                {{ $rBlog->post_author ?? '' }}
                                            </a>
                                            . {{ \Carbon\Carbon::parse($rBlog->created_at)->format('d M Y') }}
                                        </h4>
                                        <h5>
                                            <a href="{{ url('/blog/' . $rBlog->blog_url) }}" class="blog__title">
                                                {{ $rBlog->blog_title }}
                                            </a>
                                        </h5>
                                        <p>
                                            {{ Str::limit(strip_tags($rBlog->blog_content), 250, '...') }}

                                        </p>

                                        <div class="mt-3">
                                            <a href="{{ url('/blog/' . $rBlog->blog_url) }}" class="blog__btn border rounded-pill cus-url-btn float-end me-4">
                                                Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </article>

                                </div>
                            @endforeach
                           
                        </div>
        </div>
    </section>
                    </div>
                </section>
                <!-- Blog area end -->

                {{-- <section class="pt-100">
                    @include('frontend.layout.cta')
                </section> --}}
                <section class="pt-100">
                    @include('frontend.layout.cta')
                </section>

            </main>
            @include('frontend.layout.footer')
        </div>
    </div>

    <!-- TOC & Sticky JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ========================================
            // DYNAMIC TABLE OF CONTENTS GENERATOR
            // ========================================

            const blogContent = document.getElementById('blog-content-area');
            const desktopTocList = document.getElementById('desktop-toc-list');
            const mobileTocList = document.getElementById('mobile-toc-list');

            if (!blogContent) return;

            // Find all h2 headings in blog content
            const headings = blogContent.querySelectorAll('h2');

            if (headings.length === 0) {
                // Hide TOC if no headings found
                const tocSidebar = document.querySelector('.toc-sidebar');
                const mobileAccordion = document.getElementById('mobileTocAccordion');
                if (tocSidebar) tocSidebar.style.display = 'none';
                if (mobileAccordion) mobileAccordion.style.display = 'none';
                return;
            }

            // Function to generate safe ID from text
            function generateId(text) {
                return text
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '') // Remove special characters
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/-+/g, '-') // Replace multiple hyphens with single
                    .substring(0, 50); // Limit length
            }

            // Function to create TOC item HTML
            function createTocItem(heading, id, index) {
                const li = document.createElement('li');
                li.className = 'toc-item';

                const a = document.createElement('a');
                a.href = '#' + id;
                a.className = 'toc-link';
                a.setAttribute('data-target', id);
                a.innerHTML = `<span class="toc-number">${index + 1}.</span> ${heading.textContent}`;

                li.appendChild(a);
                return li;
            }

            // Track used IDs to prevent duplicates
            const usedIds = new Set();

            // Process each heading
            headings.forEach((heading, index) => {
                // Generate base ID
                let baseId = generateId(heading.textContent);
                let uniqueId = baseId;
                let counter = 1;

                // Ensure unique ID
                while (usedIds.has(uniqueId)) {
                    uniqueId = `${baseId}-${counter}`;
                    counter++;
                }

                usedIds.add(uniqueId);

                // Set ID on heading
                heading.id = uniqueId;
                heading.classList.add('toc-heading');

                // Create TOC items for both desktop and mobile
                if (desktopTocList) {
                    desktopTocList.appendChild(createTocItem(heading, uniqueId, index));
                }
                if (mobileTocList) {
                    mobileTocList.appendChild(createTocItem(heading, uniqueId, index));
                }
            });

            // ========================================
            // SMOOTH SCROLL FUNCTIONALITY
            // ========================================

            const headerOffset = 120; // Adjust based on your fixed header height

            function smoothScrollTo(targetId) {
                const targetElement = document.getElementById(targetId);
                if (!targetElement) return;

                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile accordion after clicking
                const mobileAccordion = document.getElementById('mobileTocContent');
                if (mobileAccordion && mobileAccordion.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(mobileAccordion);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            }

            // Add click handlers to all TOC links
            document.querySelectorAll('.toc-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    smoothScrollTo(targetId);

                    // Update URL hash without jumping
                    history.pushState(null, null, '#' + targetId);
                });
            });

            // ========================================
            // ACTIVE STATE ON SCROLL (Scroll Spy)
            // ========================================

            function updateActiveState() {
                const scrollPosition = window.scrollY + headerOffset + 50;

                let currentActive = null;

                headings.forEach(heading => {
                    const headingTop = heading.offsetTop;
                    const headingBottom = headingTop + heading.offsetHeight;

                    if (scrollPosition >= headingTop) {
                        currentActive = heading.id;
                    }
                });

                // Update active class on TOC links
                document.querySelectorAll('.toc-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-target') === currentActive) {
                        link.classList.add('active');
                    }
                });
            }

            // Throttle scroll event for performance
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                if (scrollTimeout) {
                    window.cancelAnimationFrame(scrollTimeout);
                }
                scrollTimeout = window.requestAnimationFrame(function() {
                    updateActiveState();
                });
            }, {
                passive: true
            });

            // Initial call
            updateActiveState();

            // ========================================
            // STICKY SIDEBAR FUNCTIONALITY
            // ========================================

            function isDesktop() {
                return window.innerWidth >= 992;
            }

            const leftSidebar = document.querySelector('.blog-sticky-left .sticky-wrapper');
            const rightSidebar = document.querySelector('.blog-sticky-right .sticky-wrapper');
            const blogLayout = document.querySelector('.blog-layout');

            let leftOriginalWidth, rightOriginalWidth;

            function initSticky() {
                if (!isDesktop()) {
                    // Reset on mobile
                    [leftSidebar, rightSidebar].forEach(sidebar => {
                        if (sidebar) {
                            sidebar.style.position = '';
                            sidebar.style.top = '';
                            sidebar.style.width = '';
                        }
                    });
                    return;
                }

                if (leftSidebar) leftOriginalWidth = leftSidebar.parentElement.offsetWidth;
                if (rightSidebar) rightOriginalWidth = rightSidebar.parentElement.offsetWidth;
            }

            function handleSticky() {
                if (!isDesktop() || !blogLayout) return;

                const layoutRect = blogLayout.getBoundingClientRect();
                const layoutTop = layoutRect.top;
                const layoutBottom = layoutRect.bottom;

                // Process left sidebar
                if (leftSidebar) {
                    const sidebarHeight = leftSidebar.offsetHeight;

                    if (layoutTop <= headerOffset && layoutBottom > sidebarHeight + headerOffset) {
                        leftSidebar.style.position = 'fixed';
                        leftSidebar.style.top = headerOffset + 'px';
                        leftSidebar.style.width = leftOriginalWidth + 'px';
                    } else if (layoutBottom <= sidebarHeight + headerOffset) {
                        leftSidebar.style.position = 'absolute';
                        leftSidebar.style.top = (blogLayout.offsetHeight - sidebarHeight) + 'px';
                        leftSidebar.style.width = leftOriginalWidth + 'px';
                    } else {
                        leftSidebar.style.position = 'relative';
                        leftSidebar.style.top = '0';
                        leftSidebar.style.width = '100%';
                    }
                }

                // Process right sidebar
                if (rightSidebar) {
                    const sidebarHeight = rightSidebar.offsetHeight;

                    if (layoutTop <= headerOffset && layoutBottom > sidebarHeight + headerOffset) {
                        rightSidebar.style.position = 'fixed';
                        rightSidebar.style.top = headerOffset + 'px';
                        rightSidebar.style.width = rightOriginalWidth + 'px';
                    } else if (layoutBottom <= sidebarHeight + headerOffset) {
                        rightSidebar.style.position = 'absolute';
                        rightSidebar.style.top = (blogLayout.offsetHeight - sidebarHeight) + 'px';
                        rightSidebar.style.width = rightOriginalWidth + 'px';
                    } else {
                        rightSidebar.style.position = 'relative';
                        rightSidebar.style.top = '0';
                        rightSidebar.style.width = '100%';
                    }
                }
            }

            // Initialize
            initSticky();

            // Event listeners
            window.addEventListener('scroll', handleSticky, {
                passive: true
            });
            window.addEventListener('resize', function() {
                initSticky();
                handleSticky();
            });

            // Initial call
            handleSticky();

        });
    </script>
</body>