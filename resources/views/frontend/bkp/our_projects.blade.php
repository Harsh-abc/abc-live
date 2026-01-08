@include('frontend.layout.header')
<style>
.social-links  { display:none !important; }
</style>
	<main class="tourog-page">
		<div class="inner_banner" style="background:url(/img/innerbanner/about.jpg) no-repeat">
			<div class="container">		
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title wow fadeIn" data-splitting>
							<h2> OUR PROJECTS </h2>
						</div>
					</div>
				</div>
			</div>
			<img src="img/innerbanner/about.jpg" class="img-fluid" />
			<div id="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
								<li class="breadcrumb-item"><a href="#">Projects </a></li>
							</ol>
						</div>
					</div>
				</div>
			</div> 
		</div> 
		
		<section id="country" class="content-section">
			<div class="container pattern_bg">
				<div class="row">
					<div class="col-lg-12">
						<div class="carousel">
							<div class="carousel_content text-center" id="project_list">
							@foreach($projects as $i=>$value)	
								<div class="item"> 
									<a href="{{$value->image}}" data-fancybox="gallery" data-caption=" ">
										<img src="{{$value->image}}" class="img-fluid" />
										<h4> {{$value->title}} </h4>
									</a>
								</div> <!-- -->
								@endforeach		

								
							</div>
							<div class="carousel_nav">
								<a href="#" class="nav nav-left"> <img src="/img/prev.png" class="img-fluid" /></a>
								<a href="#" class="nav nav-right"> <img src="/img/next.png"  class="img-fluid" /></a>
							</div>
						</div>		
					</div>		
				</div> <!-- Row -->
			</div>
		</section> 
	</main>

@include('frontend.layout.footer')

<link rel="stylesheet" href="/css/jquery.fancybox.min.css" type="text/css">
<script src="/js/jquery.fancybox.min.js"></script>
<script>
// Fancybox Config
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});
</script>

<script src="/js/jquery.transit.min.js"></script> 
<script>
	(function() {
	  var carouselContent, carouselIndex, carouselLength, firstClone, firstItem, isAnimating, itemWidth, lastClone, lastItem;
	  carouselContent = $(".carousel_content");
	  carouselIndex = 0;
	  carouselLength = carouselContent.children().length;
	  isAnimating = false;
	  itemWidth = 100 / carouselLength;
	  firstItem = $(carouselContent.children()[0]);
	  lastItem = $(carouselContent.children()[carouselLength - 1]);
	  firstClone = null;
	  lastClone = null;
	  carouselContent.css("width", carouselLength * 100 + "%");
	  carouselContent.transition({
		x: "" + (carouselIndex * -itemWidth) + "%"
	  }, 0);
	  $.each(carouselContent.children(), function() {
		return $(this).css("width", itemWidth + "%");
	  });

	  $(".nav-left").on("click", function(e) {
		  e.preventDefault();
		if (isAnimating) {
		  return;
		}
		isAnimating = true;
		carouselIndex--;
		if (carouselIndex === -1) {
		  lastItem.prependTo(carouselContent);
		  carouselContent.transition({
			x: "" + ((carouselIndex + 2) * -itemWidth) + "%"
		  }, 0);
		  return carouselContent.transition({
			x: "" + ((carouselIndex + 1) * -itemWidth) + "%"
		  }, 1000, "easeInOutExpo", function() {
			carouselIndex = carouselLength - 1;
			lastItem.appendTo(carouselContent);
			carouselContent.transition({
			  x: "" + (carouselIndex * -itemWidth) + "%"
			}, 0);
			return isAnimating = false;
		  });
		} else {
		  return carouselContent.transition({
			x: "" + (carouselIndex * -itemWidth) + "%"
		  }, 1000, "easeInOutExpo", function() {
			return isAnimating = false;
		  });
		}
	  });

	  $(".nav-right").on("click", function(e) {
		   e.preventDefault();
		if (isAnimating) {
		  return;
		}
		isAnimating = true;
		carouselIndex++;
		return carouselContent.transition({
		  x: "" + (carouselIndex * -itemWidth) + "%"
		}, 1000, "easeInOutExpo", function() {
		  isAnimating = false;
		  if (firstClone) {
			carouselIndex = 0;
			carouselContent.transition({
			  x: "" + (carouselIndex * -itemWidth) + "%"
			}, 0);
			firstClone.remove();
			firstClone = null;
			carouselLength = carouselContent.children().length;
			itemWidth = 100 / carouselLength;
			carouselContent.css("width", carouselLength * 100 + "%");
			$.each(carouselContent.children(), function() {
			  return $(this).css("width", itemWidth + "%");
			});
			return;
		  }
		  if (carouselIndex === carouselLength - 1) {
			carouselLength++;
			itemWidth = 100 / carouselLength;
			firstClone = firstItem.clone();
			firstClone.addClass("clone");
			firstClone.appendTo(carouselContent);
			carouselContent.css("width", carouselLength * 100 + "%");
			$.each(carouselContent.children(), function() {
			  return $(this).css("width", itemWidth + "%");
			});
			return carouselContent.transition({
			  x: "" + (carouselIndex * -itemWidth) + "%"
			}, 0);
		  }
		});
	  });

	}).call(this);
</script>
