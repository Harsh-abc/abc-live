
	<!-- Main Header-->
	<div class="main-header side-header sticky sticky-pin" style="margin-bottom: -64px;">
		<div class="container-fluid">
			<div class="main-header-left"> <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a> </div>		
			
			<div class="main-header-right"> 
				<div class="dropdown d-md-flex">
					<a class="nav-link icon full-screen-link" href=""> <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i> <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i> </a>
				</div> 
				<div class="dropdown main-profile-menu">
					<a class="d-flex" href=""> <span class="main-img-user"><img alt="avatar" src="/admin/img/users/1.jpg"></span> </a>
					<div class="dropdown-menu">
						<div class="header-navheading pb-0">
							<h6 class="main-notification-title">ABC DESIGNS</h6>
							<hr />
						</div>
						
						<a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						   <i class="fe fe-power"></i> <?php echo e(__('Logout')); ?>

						</a>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
							<?php echo csrf_field(); ?>
						</form> 
					</div>
				</div> 
			</div>
		</div>
	</div>
	 
	<!-- End Main Header-->

	<?php /**PATH D:\wamp64\www\abcdesigns_2025\abcdesigns_2025\resources\views/admin/layouts/top_header.blade.php ENDPATH**/ ?>