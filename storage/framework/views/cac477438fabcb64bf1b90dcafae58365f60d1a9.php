<div class="col-md-12 cpl-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="vtabs customvtab">
                <ul class="nav nav-tabs tabs-horizontal" role="tablist">
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "levels" ? 'active' : ''); ?>" href="<?php echo e(route('levels.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Levels')); ?></span> </a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "grades" ? 'active' : ''); ?>"  href="<?php echo e(route('grades.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Grades')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "classes" ? 'active' : ''); ?>"  href="<?php echo e(route('classes.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Classes')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "shifts" ? 'active' : ''); ?>"  href="<?php echo e(route('shifts.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Shifts')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "subjects" ? 'active' : ''); ?>"  href="<?php echo e(route('subjects.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Subjects')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "sections" ? 'active' : ''); ?>"  href="<?php echo e(route('sections.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Sections')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "times" ? 'active' : ''); ?>"  href="<?php echo e(route('times.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Time slot')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "days" ? 'active' : ''); ?>"  href="<?php echo e(route('days.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Days')); ?></span></a> </li>
                    <li class="nav-item"> <a class="nav-link <?php echo e(Request::segment('3') == "sessions" ? 'active' : ''); ?>"  href="<?php echo e(route('sessions.index')); ?>" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down"><?php echo e(_('Sessions')); ?></span></a> </li>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/admins/academics/header.blade.php ENDPATH**/ ?>