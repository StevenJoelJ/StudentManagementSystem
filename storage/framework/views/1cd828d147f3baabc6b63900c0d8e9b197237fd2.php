
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="level_name"><?php echo e(_('Level Name')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-4">
        <input type="text" class="form-control" id="level_name" name="level_name" placeholder="<?php echo e(_('Enter a level name..')); ?>">
    </div>
    <label class="col-md-2 col-form-label" for="level_status"><?php echo e(_('Level Status')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-4">
        <select name="level_status" id="level_status" class="form-control">
            <option value=""><?php echo e(_('Select')); ?></option>
            <option value="1"><?php echo e(_('Active')); ?></option>
            <option value="0"><?php echo e(_('Inactive')); ?></option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="description"><?php echo e(_('Description')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-8">
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="<?php echo e(_('Enter Description')); ?>"></textarea>
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-8 ml-auto">
        <button type="submit" class="btn btn-primary"><?php echo e(_('Submit')); ?></button>
    </div>
</div>
                                  <?php /**PATH C:\Users\User\Desktop\laravel-8-sms-2022-main\resources\views/admins/levels/field.blade.php ENDPATH**/ ?>