
<?php $__env->startSection('title', 'Déliberation'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php if(count($non_insc) > 0): ?>
            <div class="col">
                <div class="alert alert-danger">
                    <?php if(count($non_insc) == 1): ?>
                        <strong>Attention !</strong> l'etudiant <?php echo e($non_insc[0]['id']); ?> n'est pas inscrit veuillez regler
                        le
                        probleme.
                    <?php else: ?>
                        <strong>Attention !</strong> les etudiants
                        <?php $__currentLoopData = $non_insc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($item['id']); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        n'ont pas inscrits veuillez regler le probleme.
                    <?php endif; ?>
                </div><!-- End of .alert -->
            </div><!-- End of .col -->
        <?php endif; ?>
    </div><!-- End of .row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Informations initial
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text">A.U</span>
                                <input type="text" class="form-control" value="<?php echo e(fst_au()); ?>" disabled>
                            </div>
                        </div><!-- End of .col -->
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group-text">Session</span>
                                <input type="text" class="form-control" value="<?php echo e(fst_session()); ?>" disabled>
                            </div>
                        </div><!-- End of .col -->
                    </div><!-- End of .row -->

                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Semestre
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.jury.semestre')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Filiere</span>
                                    <select class="form-select" name="filiere" aria-label="Default select example" required>
                                        <option value="MIP">MIP</option>
                                        <option value="BCG">BCG</option>
                                    </select>
                                </div>
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Semestre</span>
                                    <select class="form-select" name="semestre" aria-label="Default select example" required>
                                        <?php for($i = 1; $i < 7; $i++): ?>
                                            <option value="S<?php echo e($i); ?>">S<?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Président</span>
                                    <input type="text" name="president" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Local</span>
                                    <input type="text" name="local" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="row">
                            <div class="col">
                                <div class="hstack gap-3">
                                    <div class="input-group">
                                        <span class="input-group-text">Type de document</span>
                                        <select class="form-select" name="type" aria-label="Default select example" required>
                                            <option value="N">Normal</option>
                                            <option value="M">Modification</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-check2-square"></i>
                                    </button>
                                </div>
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="text-end">
                        </div><!-- End of .text-end -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card">
                <div class="card-header">
                    DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.jury.DEUST')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Tronc</span>
                                    <select class="form-select" name="tronc">
                                        <option value="MIP">MIP</option>
                                        <option value="BCG">BCG</option>
                                    </select>
                                </div>
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Président</span>
                                    <input type="text" name="president" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Local</span>
                                    <input type="text" name="local" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="text-end">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-check2-square"></i>
                            </button><!-- End of .btn -->
                        </div><!-- End of .text-end -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card">
                <div class="card-header">
                    LST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.jury.LST')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Option</span>
                                    <select class="form-select" name="option">
                                        <option value="TSE">TSE</option>
                                        <option value="MA">MA</option>
                                    </select>
                                </div>
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Président</span>
                                    <input type="text" name="president" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Local</span>
                                    <input type="text" name="local" class="form-control" required>
                                </div>
                                
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="text-end">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-check2-square"></i>
                            </button><!-- End of .btn -->
                        </div><!-- End of .text-end -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/deliberation/home.blade.php ENDPATH**/ ?>