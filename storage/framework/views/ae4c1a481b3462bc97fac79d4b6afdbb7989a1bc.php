<?php $__env->startSection('title'); ?>
     Liste des Stagiaires | laravel stagiaires App
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Liste des Stagiaires  </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">

    <div class="row ">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h4>Stagiaires</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom et Prénom</th>
                                <th>Specialité</th>
                                <th>Date de début</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $stagiaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stagiaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+=1); ?></td>
                                    <td><?php echo e($stagiaire->full_name); ?></td>
                                    <td><?php echo e($stagiaire->depart); ?></td>
                                    <td><?php echo e($stagiaire->hire_date); ?></td>
                                    <td class='d-flex justify-content-center align-items-center'>
                                     <a href="<?php echo e(route('stagiaires.show',$stagiaire->registration_number)); ?> " class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="<?php echo e(route('stagiaires.edit',$stagiaire->registration_number)); ?> " class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form id="<?php echo e($stagiaire->registration_number); ?>" action="<?php echo e(route('stagiaires.destroy',$stagiaire->registration_number)); ?>" method="POST">

                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    </form>

                                    <button type="submit"
                                    onclick="deleteEmp(<?php echo e($stagiaire->registration_number); ?>)"
                                    class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


    <script>
        new DataTable('#myTable', {
        layout: {
        topStart: {

            buttons: ['copyHtml5', 'csvHtml5', 'excelHtml5', 'pdfHtml5', 'printHtml5']
        }
    }
    });
    function deleteEmp(id){
            Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(id).submit();
            Swal.fire({
                title: "Deleted!",
                text: "Trainer has been deleted.",
                icon: "success"
            });
        }
        });

    }
    </script>

<?php $__env->stopSection(); ?>

      <?php if(session()->has('success')): ?>
       <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Stagiaire updated successfully",
               // title: "<?php echo e(session()->get('success')); ?>",
                showConfirmButton: false,
                timer: 2500
        });

       </script>
      <?php endif; ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Documents\laravel9\stagiaire\resources\views/stagiaires/index.blade.php ENDPATH**/ ?>