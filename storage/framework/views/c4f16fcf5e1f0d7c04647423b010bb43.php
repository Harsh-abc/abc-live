<?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->make('frontend.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Blog area start -->
                <section class="blog__area-6 blog__animation">
                    <div class="container g-0 pt-110 pb-110">
                        <div class="row pb-50">
                            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                                <div class="sec-title-wrapper">
                                    <h2 class="sec-title-2 animation__char_come">We always <br>think</h2>
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

                            <?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                    <article class="blog__item">
                                        <div class="blog__img-wrapper">
                                            <a href="<?php echo e(url('/blog/' . $blog->blog_url)); ?>">
                                                <div class="img-box">
                                                    <img class="image-box__item" src="<?php echo e(asset($blog->thumb_image)); ?>"
                                                        alt="<?php echo e($blog->blog_title); ?>" />
                                                    <img class="image-box__item" src="<?php echo e(asset($blog->thumb_image)); ?>"
                                                        alt="<?php echo e($blog->blog_title); ?>" />
                                                </div>
                                            </a>
                                        </div>
                                        <h4 class="blog__meta">
                                            <a href="<?php echo e(url('/blog/' . $blog->blog_url)); ?>">
                                                <?php echo e(optional($blog->category)->name ?? 'Category'); ?>

                                                <?php echo e($blog->post_author ?? ''); ?>

                                            </a>
                                            . <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d M Y')); ?>

                                        </h4>
                                        <h5>
                                            <a href="<?php echo e(url('/blog/' . $blog->blog_url)); ?>" class="blog__title">
                                                <?php echo e($blog->blog_title); ?>

                                            </a>
                                        </h5>
                                        <a href="<?php echo e(url('/blog/' . $blog->blog_url)); ?>" class="blog__btn">
                                            Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </a>
                                    </article>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            
                        </div>
                    </div>
                </section>
                <!-- Blog area end -->



                <!-- -->
                <section class="pt-100">
                    <?php echo $__env->make('frontend.layout.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>

            </main>
            <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/frontend/blog/listing.blade.php ENDPATH**/ ?>