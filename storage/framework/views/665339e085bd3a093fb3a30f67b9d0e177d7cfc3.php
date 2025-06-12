<?php $__env->startSection('page-title', 'Acceuil'); ?>
<?php $__env->startSection('page-header'); ?>
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Dashboard
                </h2>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-body'); ?>
    <div class="container-xl d-flex flex-column justify-content-center">
        <div class="card mt-3">
            <div class="card-header">
                Home
            </div><!-- End of .card-header -->
            <div class="card-body">
                Hello you are in !
                This is the home page.
            </div><!-- End of .card-body -->
        </div><!-- End of .card -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ene\website\resources\views/home.blade.php ENDPATH**/ ?>