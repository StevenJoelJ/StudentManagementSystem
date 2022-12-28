<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1><?php echo e(Str::ucfirst(__($title))); ?></h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    <?php if(Route::has('home')): ?>
                    <li class="breadcrumb-item active"><?php echo e(Str::ucfirst(__(Request::segment(1)))); ?></li>
                    <?php else: ?>
                    <li class="breadcrumb-item"><a href="#"><?php echo e(Str::ucfirst(__($param1))); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e(Str::ucfirst(__($param2))); ?></li>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/layouts/bread_crumb.blade.php ENDPATH**/ ?>