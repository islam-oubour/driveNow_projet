
<?php $__env->startSection('title', 'Affectation des étudiants'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Affectation d'option (filière -> option)
        </div><!-- End of .card-header -->
        <form action="<?php echo e(route('affectation.option')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="alert alert-info">
                    Migrer les nouveaux étudiants (LST) vers leurs options.
                </div><!-- End of .alert -->
                <?php if(count($etudiants_sans_option) > 0): ?>
                    <div class="alert alert-danger">
                        Nb des etudiants non affecté par filiere
                        <table class="table">
                            <tr>
                                <?php $__currentLoopData = $etudiants_sans_option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($item->id_filiere); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                                <?php $__currentLoopData = $etudiants_sans_option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($item->nb); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </table>
                    </div><!-- End of .alert -->
                <?php endif; ?>

                <div class="hstack gap-3">
                    <select class="form-select" name="filiere" required aria-label="Default select example">
                        <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($filiere->id); ?>"><?php echo e($filiere->intitule); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <select class="form-select" name="option" required aria-label="Default select example">
                        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="option-<?php echo e($option->id_filiere); ?>" value="<?php echo e($option->id); ?>">
                                <?php echo e($option->intitule); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <button type="submit" class="btn btn-primary">
                        Affecter
                    </button>
                </div><!-- End of .hstack -->
            </div><!-- End of .card-body -->
        </form>
    </div><!-- End of .card -->
    <div class="card my-3">
        <div class="card-header">
            Migration vers la session de printemps 
        </div><!-- End of .card-header -->
        <form action="<?php echo e(route('affectation.p')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="alert alert-info">
                    Overture des modules de printemps pour les nouveaux étudiants (S2 - S4 - S6)
                </div><!-- End of .alert -->

                <div class="hstack gap-3">
                    <select class="form-select" name="niveau" required aria-label="Default select example">
                            <option value="DEUST">DEUST</option>
                            <option value="LST">LST</option>
                    </select>
                    <button type="submit" class="btn btn-primary">
                        Affecter
                    </button>
                </div><!-- End of .hstack -->
            </div><!-- End of .card-body -->
        </form>
    </div><!-- End of .card -->
    <div class="card my-3">
        <div class="card-header">
            Inscription au modules en masse 
        </div><!-- End of .card-header -->
        <form action="<?php echo e(route('affectation.masse')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="alert alert-info">
                    Les champs 'CNE' , 'MODULE' sont obligatoires.
                </div><!-- End of .alert -->

                <div class="hstack gap-3">
                    <input type="file" name="liste" class="form-control">
                    <button type="submit" class="btn btn-primary">
                        Affecter
                    </button>
                </div><!-- End of .hstack -->
            </div><!-- End of .card-body -->
        </form>
    </div><!-- End of .card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/affectation/affectation.blade.php ENDPATH**/ ?>