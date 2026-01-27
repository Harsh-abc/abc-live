<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSRF Token -->

    <meta name="csrf-token" content="UmM818niDbZHZMiKEHvgnPCqKkXfnRnoCYVjT8er">
    <title> Admin </title>

    <link href="/favicon.ico" type="image/x-icon" rel="icon" />
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style css-->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/colors/default.css" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="/admin/js/jquery-3.1.1.min.js"></script>
<style>
.header-brand-img { width:50%; margin-top:6px; }
.form-control { height: 45px; }
.ripple { margin-top:10px; padding:10px 15px; border-radius:4px; }
.signpages .row-sm { box-shadow: 0px 25px 20px -20px rgba(0, 0, 0, 0.45); }
.form-group .form-control, .form-group .custom-select { height: 40px; border-radius:4px; }
form input:checked+label:before, .form input:checked+label:before { top:2px; }
</style>
</head>

<body class="main-body leftmenu">


    <div class="page main-signin-wrapper">
        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details" style="display:flex !important; align-items:center;">
                            <div class="mt-5 p-2 w-100 pos-absolute" style="margin-top:0px !important;left:0px;">
                                <img src="/img/logo_white.png" class="header-brand-img mb-4 d-block mx-auto" alt="logo">
                                <div class="clearfix"></div> 
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-0 pb-0">
                                        <img src="/admin/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                        <div class="clearfix"></div> 
					
                                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <h5 class="text-left mb-2">Signin to Your Account</h5>
                                            <p class="mb-4 text-muted tx-13 ml-0 text-left"></p>
                                            <div class="form-group text-left">
                                                <label>Email</label>
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
												<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<span class="invalid-feedback" role="alert"> <strong><?php echo e($message); ?></strong> </span>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password"> 
												<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<span class="invalid-feedback" role="alert"> <strong><?php echo e($message); ?></strong> </span>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
											<div class="form-group text-left">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
													<label class="form-check-label" for="remember"> <?php echo e(__('Remember Me')); ?>  </label>
												</div>
											</div>
											<div class="form-group text-left">
												<button type="submit" class="btn ripple btn-main-primary btn-block"> <?php echo e(__('Login')); ?> </button>
												<br />
												<div class="text-center">
													<?php if(Route::has('password.request')): ?>
														<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
															<?php echo e(__('Forgot Your Password?')); ?>

														</a>
													<?php endif; ?>
												</div>
											</div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page -->




    <div class="main-navbar-backdrop"></div>
</body>

<!-- ===== ===== -->
<?php /**PATH /opt/bitnami/apache/htdocs/abcdesigns_2025/resources/views/auth/login.blade.php ENDPATH**/ ?>