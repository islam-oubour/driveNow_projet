
<?php $__env->startSection('title', 'Etudiants'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Recherche
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <!-- hstack-->
                    <form action="<?php echo e(route('etudiants.single')); ?>" method="get">
                        <div class="hstack gap-3">
                            <?php echo csrf_field(); ?>
                            <input name="CNE" class="form-control me-auto" type="text" placeholder="CNE"
                                aria-label="Add your item here...">
                            <button type="submit" class="btn btn-primary">Recherche</button>
                        </div>
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/etudiants/home.blade.php ENDPATH**/ ?>