<?php if($errors->any()): ?>

<div class="row my-4">
    <div class="col-md-6 mx-auto">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php endif; ?>
<?php /**PATH C:\Users\lenovo\Documents\laravel9\profile\resources\views/layouts/alert.blade.php ENDPATH**/ ?>