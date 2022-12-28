<?php $__env->startPush('style'); ?>

<link href="<?php echo e(asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')); ?>" rel="stylesheet" />

<?php $__env->stopPush(); ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header" >
            <a class="btn btn-primary btn-sm btn-flat" href="<?php echo e(route( 'levels.create' )); ?>">Create New Level</a>
        </div>
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>$320,800</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>


<?php $__env->startPush('script'); ?>
    <!-- scripit init-->
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('jambasangsang/assets/js/lib/data-table/datatables-init.js')); ?>"></script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/admins/levels/table.blade.php ENDPATH**/ ?>