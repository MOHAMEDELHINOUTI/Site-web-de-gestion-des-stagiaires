<?php $__env->startSection('title'); ?>
Editer Un Stagiaire | laravel Stagaire App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editer Un Stagiaire  </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
    <?php echo $__env->make('layouts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Editer Un Stagiaire</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('employes.update',$employe->registration_number)); ?>"
                         class="mt-3" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group mb-3" > <label for="fullname">Numéro d'enregistrement</label>
                        <input type="text" class="form-control" name="registration_number" placeholder="Numéro d'enregistrement"
                        value="<?php echo e(old('registration_number',$employe->registration_number)); ?>">
                        </div>

                        <div class="form-group mb-3" > <label for="fullname">Nom Complet</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Fullname"
                            value="<?php echo e(old('full_name',$employe->full_name)); ?>">
                            </div>

                        <div class="form-group mb-3" > <label for="fullname">Spécialité</label>
                                <input type="text" class="form-control" name="depart" placeholder="Spécialité"
                                value="<?php echo e(old('depart',$employe->depart)); ?>">
                                </div>

                        <div class="form-group mb-3" > <label for="hire_date">Date de Début</label>
                        <input type="date" class="form-control" name="hire_date" placeholder="Date de Début"
                        value="<?php echo e(old('hire_date',$employe->hire_date)); ?>">
                        </div>

                        <div class="form-group mb-3" > <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"
                        value="<?php echo e(old('phone',$employe->phone)); ?>">
                         </div>

                         <div class="form-group mb-3" > <label for="adress">Adress</label>
                            <input type="text" class="form-control" name="adress" placeholder="Adress"
                            value="<?php echo e(old('adress',$employe->adress)); ?>">
                             </div>

                        <div class="form-group mb-3" > <label for="adress">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City"
                                value="<?php echo e(old('city',$employe->city)); ?>">
                         </div>
                         <div class="form-froup">
                            <button type="submit" class="btn btn-primary">
                                    Submit
                            </button>
                         </div>

                    </form>
                </div>
           </div>
        </div>
   </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\profile\resources\views/employes/edit.blade.php ENDPATH**/ ?>