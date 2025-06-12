
<?php $__env->startSection('title', 'Statistiques'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Liste
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        Cette section permet de modifier les colonnes x et y pour chaque étudiant.
                    </div><!-- End of .alert -->
                    <form action="<?php echo e(route('stats.action1')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="hstack gap-3">
                            <input class="form-control me-auto" type="file" name="liste" placeholder="liste">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i></button>
                        </div>
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <ul class="nav nav-line-bottom nav-example mb-3" id="pills-tabTwo" role="tablist">
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link active">Design</a>
                    </li>
                </ul>
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/stats/home.blade.php ENDPATH**/ ?>