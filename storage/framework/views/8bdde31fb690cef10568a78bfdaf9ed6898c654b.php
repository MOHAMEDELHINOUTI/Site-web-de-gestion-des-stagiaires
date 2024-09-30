<?php $__env->startSection('title'); ?>
Voir Un Stagiaire | laravel Stagaire App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Voir Un Stagiaire  </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
    <?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4><?php echo e($employe->full_name); ?></h4>
                    </div>
                    <hr>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                        <a href="<?php echo e(route('work.certificate',$employe->registration_number)); ?>" class="btn btn-outline-danger">
                            Certification de Stage
                        </a>
                    </div>

                        </div>
                        <div class="card-body">

                        <div class="form-group mb-3" > <label for="fullname">Numéro d'enregistrement</label>
                        <input type="text" disabled class="form-control" name="registration_number" placeholder="Numéro d'enregistrement"
                        value="<?php echo e($employe->registration_number); ?>">
                        </div>

                        <div class="form-group mb-3" > <label for="fullname">Nom Complet</label>
                            <input type="text" disabled class="form-control" name="full_name" placeholder="Fullname"
                            value="<?php echo e($employe->full_name); ?>">
                            </div>

                        <div class="form-group mb-3" > <label for="fullname">Spécialité</label>
                                <input type="text" disabled class="form-control" name="depart" placeholder="Spécialité"
                                value="<?php echo e($employe->depart); ?>">
                                </div>

                        <div class="form-group mb-3" > <label for="hire_date">Date de Début</label>
                        <input type="date" disabled class="form-control" name="hire_date" placeholder="Date de Début"
                        value="<?php echo e($employe->hire_date); ?>">
                        </div>

                        <div class="form-group mb-3" > <label for="phone">Phone</label>
                        <input type="tel" disabled class="form-control" name="phone" placeholder="Phone"
                        value="<?php echo e($employe->phone); ?>">
                         </div>

                         <div class="form-group mb-3" > <label for="adress">Adress</label>
                            <input type="text" disabled class="form-control" name="adress" placeholder="Adress"
                            value="<?php echo e($employe->adress); ?>">
                             </div>

                        <div class="form-group mb-3" > <label for="adress">City</label>
                                <input type="text" disabled class="form-control" name="city" placeholder="City"
                                value="<?php echo e($employe->city); ?>">
                         </div>

           </div>
        </div>
   </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\profile\resources\views/employes/show.blade.php ENDPATH**/ ?>