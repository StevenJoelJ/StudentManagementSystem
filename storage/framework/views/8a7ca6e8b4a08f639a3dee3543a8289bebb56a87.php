<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span> <?php echo e(str_replace('_', ' ', config('app.name', 'Jambasangsang'))); ?></span></a></div>
                <li class="label"><?php echo e(__('Main')); ?></li>
                <li class="<?php echo e(Route::has('home') ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>"><i class="ti-home"></i> <?php echo e(__('Dashboard')); ?> </a>
                </li>

                <li class="label"><?php echo e(__('HR')); ?></li>
                <li><a href="app-event-calender.html"><i class="fa fa-users"></i> <?php echo e(__('Users')); ?> </a></li>
                <li><a href="app-email.html"><i class="fa fa-graduation-cap"></i> <?php echo e(__('Admission')); ?></a></li>
                <li><a href="<?php echo e(route('academics')); ?>"><i class="fa fa-pencil"></i> <?php echo e(__('Academic')); ?></a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-clock-o"></i> <?php echo e(__('Class Routine')); ?></a></li>
                <li class="label"><?php echo e(__('Features')); ?></li>
                <li><a href="app-profile.html"><i class="fa fa-book"></i> <?php echo e(__('Library')); ?></a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-calendar"></i> <?php echo e(__('Attendance')); ?></a></li>
                <li><a href="app-widget-card.html"><i class="fa fa-bus"></i> <?php echo e(__('School Bus')); ?></a></li>
                <li class="label"><?php echo e(__('Finance')); ?></li>
                <li><a href="form-basic.html"><i class="fa fa-money"></i> <?php echo e(__('Accountant')); ?> </a></li>
                <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> <?php echo e(__('Reports')); ?> </a></li>
                <li class="label"><?php echo e(__('Settings')); ?></li>
                <li><a href="../documentation/index.html"><i class="fa fa-gear"></i> <?php echo e(__('School Settings')); ?></a></li>
                <li><a href="../documentation/index.html"><i class="fa fa-gears"></i> <?php echo e(__('General Settings')); ?></a></li>
                <li><a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i>
                        <span><?php echo e(__('Logout')); ?></span>
                    </a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>