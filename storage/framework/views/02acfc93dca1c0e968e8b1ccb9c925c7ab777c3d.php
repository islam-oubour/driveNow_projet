
<?php $__env->startSection('title', 'Listes'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        Liste
                        <a href="<?php echo e(route('listes.PFE')); ?>">
                            <button class="btn btn-secondary text-white btn-sm" ><i class="bi me-2 bi-download"></i> PFE</button>
                        </a>
                    </div><!-- End of .D-FLIC -->
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        Cette section permet de modifier les colonnes x et y pour chaque étudiant.
                    </div><!-- End of .alert -->
                    <form action="<?php echo e(route('listes.semestre')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="hstack gap-3">
                            <div class="input-group">
                                <span class="input-group-text">Semestre</span>
                                <select class="form-select" name="semestre" aria-label="Default select example" required>
                                    <?php for($i = 1; $i < 7; $i++): ?>
                                        <option value="S<?php echo e($i); ?>">S<?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check2-square"></i>
                            </button>
                        </div>
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/listes/home.blade.php ENDPATH**/ ?>