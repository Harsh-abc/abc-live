	<div class="main-sidebar main-sidebar-sticky side-menu ps ps--active-y">
		<div class="sidemenu-logo">
			<a class="main-logo" href="#">
				<img src="/img/logo/logo_white.png" class="header-brand-img desktop-logo" alt="logo">
				<img src="/img/logo/logo_white.png" class="header-brand-img icon-logo" alt="logo"> 
			</a>
		</div>
		<div class="main-sidebar-body">
			<?php echo $__env->make('admin.layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
		</div>
		<div class="ps__rail-x" style="left: 0px; top: 0px;">
			<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
		</div>
		<div class="ps__rail-y" style="top: 0px; height: 754px; right: 0px;">
			<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 519px;"></div>
		</div>
	</div>
	<!-- End Sidemenu -->
	
	<?php echo $__env->make('admin.layouts.top_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	
<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>