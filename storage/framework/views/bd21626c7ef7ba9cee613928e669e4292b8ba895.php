<?php $__env->startSection('title'); ?>
     Home | laravel employes App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashbord </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">

                <h3><?php echo e(\App\Models\Employe::count()); ?> </h3>
                <p>Employes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <a href="<?php echo e(url('admin/employes')); ?>" class="small-box-footer"> More info
                    <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\profile\resources\views/home.blade.php ENDPATH**/ ?>