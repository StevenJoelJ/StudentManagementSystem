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

    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
    <div id="app">

        <?php if(auth()->guard()->check()): ?>
            
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">

                    <section id="main-content">
                    <?php echo $__env->yieldContent('content'); ?>
                    </section>
                </div>
            </div>
        </div>


        <!-- jquery vendor -->
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/jquery.nanoscroller.min.js')); ?>"></script>
        <!-- nano scroller -->
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/menubar/sidebar.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/preloader/pace.min.js')); ?>"></script>
        <!-- sidebar -->

        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/scripts.js')); ?>"></script>
        <!-- bootstrap -->

        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/calendar-2/moment.latest.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/calendar-2/pignose.calendar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/calendar-2/pignose.init.js')); ?>"></script>


        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/weather/jquery.simpleWeather.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/weather/weather-init.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/circle-progress/circle-progress.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/circle-progress/circle-progress-init.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/chartist/chartist.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/sparklinechart/jquery.sparkline.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/sparklinechart/sparkline.init.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/owl-carousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('jambasangsang/assets/js/lib/owl-carousel/owl.carousel-init.js')); ?>"></script>
        <!-- scripit init-->
        <script src="<?php echo e(asset('jambasangsang/assets/js/dashboard2.js')); ?>"></script>
        
        <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>