
<?php $__env->startSection('title', 'Actions'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mb-3">
        <div class="col">
            <div class="card" style="border-radius: .5rem .5rem 0 0">
                <ul class="nav nav-line-bottom nav-example" id="pills-tabTwo" role="tablist">
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Listes</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link active">Convocations</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Attestations</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Releves</a>
                    </li>
                </ul>
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row">
        <div class="col col-4">
            <!-- Button trigger modal -->
            <div class="card">
                <div class="card-header">
                    COMPENSATION
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="vstack">
                        <div class="alert alert-info">
                            Compenser les modules compensable
                        </div><!-- End of .alert -->
                        <a href="<?php echo e(route('deliberation.comp')); ?>">
                            <button type="button" class="btn btn-primary">
                                Forcer la compensation
                            </button>
                        </a>
                    </div><!-- End of .hstack -->

                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-4">
            <div class="card">
                <div class="card-header">
                    ADMIS DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="vstack">
                        <div class="alert alert-info">
                            Etudiants admis après la modification des notes de DEUST
                        </div><!-- End of .alert -->
                        <a href="<?php echo e(route('deliberation.admis.DEUST')); ?>">
                            <button type="button" class="btn btn-primary">
                                Liste des admis aprés les deliberation de DEUST
                            </button>
                        </a>
                    </div><!-- End of .hstack -->
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-4">
            <div class="card">
                <div class="card-header">
                    ADMIS LST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="vstack">
                        <div class="alert alert-info">
                            Etudiants admis après la modification des notes de DEUST
                        </div><!-- End of .alert -->
                        <a href="<?php echo e(route('deliberation.admis.LST')); ?>">
                            <button type="button" class="btn btn-primary">
                                Liste des admis aprés les deliberation de Feliere
                            </button>
                        </a>
                    </div><!-- End of .hstack -->
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col col-4">
            <div class="card">
                <div class="card-header">
                    ADMIS DEUST PDF
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="vstack">
                        <a target="_blank" href="<?php echo e(route('deliberation.admis.DEUST.PDF',['sig'=> 0])); ?>">
                            <button type="button" class="btn btn-primary">
                                ADMIS DEUST PDF
                            </button>
                        </a>
                        <a target="_blank" href="<?php echo e(route('deliberation.admis.DEUST.PDF',['sig'=> 1])); ?>">
                            <button type="button" class="btn btn-primary">
                                ADMIS DEUST PDF Avec Signature
                            </button>
                        </a>
                    </div><!-- End of .hstack -->
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-4">
            <div class="card">
                <div class="card-header">
                    ADMIS LST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <div class="vstack">
                        <a target="_blank" href="<?php echo e(route('deliberation.admis.LST.PDF',['sig'=> 0])); ?>">
                            <button type="button" class="btn btn-primary">
                                ADMIS LST PDF
                            </button>
                        </a>
                        <a target="_blank" href="<?php echo e(route('deliberation.admis.LST.PDF',['sig'=> 1])); ?>">
                            <button type="button" class="btn btn-primary">
                                ADMIS LST PDF Avec Signature
                            </button>
                        </a>
                    </div><!-- End of .hstack -->
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Importation des admis (DEUST)
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form action="<?php echo e(route('deliberation.import.admis.DEUST')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="hstack gap-3">
                            <input type="date" name="date_jury" class="form-control">
                            <input type="file" name="liste" class="form-control">
                            <button class="btn btn-outline-primary" type="submit">Importer</button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Importation des admis (LST)
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form action="<?php echo e(route('deliberation.import.admis.LST')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="hstack gap-3">
                            <input type="date" name="date_jury" class="form-control">
                            <input type="file" name="liste" class="form-control">
                            <button class="btn btn-outline-primary" type="submit">Importer</button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col col-6">
            <div class="card">
                <div class="card-header">
                    RELEVES DES NOTES DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.releves.DEUST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="tronc" aria-label="Default select example">
                                <option value="MIP">MIP</option>
                                <option value="BCG">BCG</option>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-6">
            <div class="card">
                <div class="card-header">
                    ATTESTATIONS DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.attestation.DEUST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="tronc" aria-label="Default select example">
                                <option value="MIP">MIP</option>
                                <option value="BCG">BCG</option>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row mt-3">
        <div class="col col-6">
            <div class="card">
                <div class="card-header">
                    RELEVES DES NOTES LST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.releves.LST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="option" aria-label="Default select example">
                                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->id); ?>"><?php echo e($option->id); ?> - <?php echo e($option->intitule); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-6">
            <div class="card">
                <div class="card-header">
                    ATTESTATIONS LST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.attestation.LST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="option" aria-label="Default select example">
                                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->id); ?>"><?php echo e($option->id); ?> - <?php echo e($option->intitule); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button type="submit" class="btn btn-primary">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/actions.blade.php ENDPATH**/ ?>