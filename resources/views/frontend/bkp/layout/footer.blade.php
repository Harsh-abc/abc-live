
	<div class="quick">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-6 col-xs-6">
					<a href="tel:+918433303188"> +91 8433303188 </a>
				</div>
				<div class="col-sm-6 col-xs-6 enquire_now">
					<a href="contact-us.php"> Enquire Now </a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start Footer -->
	<footer id="footer">		
		<div class="container-fluid">
			@include('frontend.layout.footer_menu')
		</div>
	</footer>
</body>
</html>

<script src='https://www.google.com/recaptcha/api.js'></script>	
<script type="text/javascript" src="/js/site.js"></script>


<script>
// jQuery to collapse the navbar on scroll
function collapseNavbar(){$(".inner_nav").offset().top>50?$(".navbar-fixed-top").addClass("top-nav-collapse"):$(".navbar-fixed-top").removeClass("top-nav-collapse")}$(window).scroll(collapseNavbar),$(document).ready(collapseNavbar);
</script>
<script>
$(function(){$("#subscribeform").on("submit",function(e){e.preventDefault(),$.ajax({type:"post",url:"addsubscriber.php",data:$("#subscribeform").serialize(),success:function(e){console.log(e),"success"==$.trim(e)?$("#emailaddErr").text("Successfully Added"):$("#recaptchaErr").text(e)}})})});
</script>

@include('frontend.layout.footer_script')

<script src="/js/cookieconsent.min.js"></script>
<script>
window.addEventListener("load",function(){window.cookieconsent.initialise({palette:{popup:{background:"#383b75"},button:{background:"#f1d600"}},theme:"classic",type:"opt-in",content:{dismiss:"Allow cookies",link:"Learn More",href:"https://www.abcdesigns.in/privacy-policy"}})});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109417895-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-109417895-1');
</script>

<!-- 
<script type="text/javascript">
$("#video_thumb")[0].autoplay = true;
document.getElementById("video_thumb").setAttribute('autoplay', true);
</script>
--> 