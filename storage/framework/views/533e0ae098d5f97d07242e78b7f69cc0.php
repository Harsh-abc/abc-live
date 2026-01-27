<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title> Admin : ABC DESIGNS </title>

	<link href="/favicon.ico" type="image/x-icon" rel="icon"/>
	<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"/>

	<link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="/admin/css/style.css" rel="stylesheet"> 
	<link href="/admin/css/colors/default.css" rel="stylesheet">
	<link href="/admin/plugins/select2/css/select2.min.css" rel="stylesheet">

	<!-- Scripts -->
    <script type="text/javascript" src="/admin/js/jquery-2.2.4.min.js"></script>

</head>
<body class="main-body leftmenu">
 
<div id="global-loader" style="display: none;"> <img src="/admin/img/loader.svg" class="loader-img" alt="Loader"> </div>
<!-- Page -->
<div class="page">
	
	<!-- Navigation -->
	<?php $url ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $url1= explode('/', $url);  ?>

    <?php if($url1[3]!='login'): ?>
	<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <?php endif; ?>
	<?php echo $__env->yieldContent('content'); ?>


</div> <!-- Page -->
<a href="#top" id="back-to-top" style="display: none;"><i class="fe fe-arrow-up"></i></a>
<div class="main-navbar-backdrop"></div>

</body>
</html>


<!-- Jquery js-->
<script type="text/javascript" src="/admin/js/popper.min.js"></script>
<script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/admin/plugins/sidemenu/sidemenu.js"></script>
<script type="text/javascript" src="/admin/plugins/sidebar/sidebar.js"></script>
<script type="text/javascript" src="/admin/js/sticky.js"></script>
<script type="text/javascript" src="/admin/js/custom.js"></script>

<!-- <script type="text/javascript" src="/admin/js/index.js"></script> -->
<script type="text/javascript" src="/admin/plugins/select2/js/select2.min.js"></script>
<script type="text/javascript" src="/admin/js/croppie.js"></script>
<script type="text/javascript" src="/admin/js/bootstrap-datepicker.min.js"></script>

<!--
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
 -->
<script>
	$('#sandbox-container input').datepicker({
		autoclose: true,
		format: "yyyy-mm-dd",
		//startDate: "2020-05-25",
		//endDate: "today",
		todayHighlight: true
	});
</script>
<style>
	#upload-demo-i{display:none;}
	#imgid{ height:230px; width:auto; }
	.croppie-container{padding:0px !important;}
	#cke_1_contents{height:500px!important; }
	.uploadimg { position: absolute; top:0; }
	#upload-demo { position: relative; }
	.image-upload > input { visibility:hidden; width:0; height:0; background:transparent; }
	#upload-demo-i { position: absolute; top:0; }
</style>
<?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>