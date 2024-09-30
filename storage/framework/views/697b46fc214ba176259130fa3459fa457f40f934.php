<?php $__env->startSection('title'); ?>
     Welcome | laravel employes App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="p-2"> Welcome Back </h3>
                </div>
                <div class="card-body">
                    <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(url('/login')); ?>" class="btn btn-outline-primary">
                                Login
                            </a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('admin/home')); ?>" class="btn btn-outline-primary">
                        Home
                    </a>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\profile\resources\views/welcome.blade.php ENDPATH**/ ?>