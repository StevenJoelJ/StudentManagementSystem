<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(str_replace('_', ' ', config('app.name', 'Jambasangsang'))); ?></title>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/calendar2/pignose.calendar.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/chartist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/themify-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/owl.carousel.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/owl.theme.default.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/weather-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/menubar/sidebar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/lib/helper.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('jambasangsang/assets/css/style.css')); ?>" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span><?php echo e(__('Login')); ?></span></a>
                        </div>
                        <div class="login-form">
                            <h4><?php echo e(str_replace('_', ' ', config('app.name', 'Jambasangsang'))); ?> <?php echo e(__('Login')); ?></h4>
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label><?php echo e(__('Email Address')); ?></label>
                                    <input id="email" type="email" placeholder="Email" class="form-control <?php $__errorArgs = ['email'];
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(__('Password')); ?></label>
                                    <input id="password" type="password" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <?php echo e(__('Remember Me')); ?>

									</label>
                                    <label class="pull-right">
										<?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                    <?php endif; ?>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/auth/login.blade.php ENDPATH**/ ?>