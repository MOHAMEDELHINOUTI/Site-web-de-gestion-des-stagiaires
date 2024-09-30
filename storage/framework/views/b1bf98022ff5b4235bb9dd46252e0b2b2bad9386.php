<?php $__env->startSection('title', 'Stagiaires Management System | '.$stagiaire->fullname); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Certificate of Internship
                    </h3>
                </div>
                <div class="card-body">
                    <p class="lead">
                        This is to certify that <b><?php echo e($stagiaire->fullname); ?></b> is presently trainee with me in the following :
                    </p>
                    <p class="lead">
                        <b><?php echo e($stagiaire->depart); ?></b> departement.
                    </p>
                    <p class="lead">
                        Their employment began on <b><?php echo e($stagiaire->hire_date); ?></b>
                    </p>
                    <p class="lead">
                        This Certification is being issued upon the request of <b><?php echo e($stagiaire->fullname); ?></b> for whatever legal purpose it may serve.
                    </p>
                    <p class="lead">
                        Issued on <b><?php echo e(\Carbon\Carbon::today()->toDateString()); ?></b> at <b><?php echo e(\Carbon\Carbon::now()->toTimeString()); ?></b>
                    </p>
                    <p class="m-5">
                        ___________
                        ___________
                    </p>
                    <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3" onclick="document.getElementById('printPageButton').style.display = 'none';window.print();" class="btn btn-md btn-primary mr-2 mb-2">
                        <i class="fas fa-print"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\stagiaire\resources\views/stagiaires/certificate-request.blade.php ENDPATH**/ ?>