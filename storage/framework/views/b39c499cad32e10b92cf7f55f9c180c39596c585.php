
<?php $__env->startSection('title', 'Exportation'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card mb-3 border">
                <div class="card-header">
                    Nombre des inscrits par module
                </div><!-- End of .card-header -->
                <div class="card-body">
                    
                    <form target="_blank" action="<?php echo e(route('exportation.inscrits.module')); ?>" method="get">
                        <div class="hstack gap-3">
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card mb-3 border">
                <div class="card-header">
                    Liste des respensables par module
                </div><!-- End of .card-header -->
                <div class="card-body">
                    
                    <form target="_blank" action="<?php echo e(route('exportation.respensables.module')); ?>" method="get">
                        <div class="hstack gap-3">
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card mb-3 border">
                <div class="card-header">
                    Canva diplomes LST (S1 -> S6)
                </div><!-- End of .card-header -->
                <div class="card-body">
                    
                    <form target="_blank" action="<?php echo e(route('exportation.canva.diplomes.lst.full')); ?>" method="get">
                        <div class="hstack gap-3">
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="card border">
        <div class="card-header">
            Canva des diplômes
        </div><!-- End of .card-header -->
        <div class="card-body">
            
            <form target="_blank" action="<?php echo e(route('exportation.canva.diplomes')); ?>" method="get">
                <div class="hstack gap-3">
                    <select class="form-select" name="niveau" aria-label="Default select example">
                        <option value="DEUST">DEUST</option>
                        <option value="LST">LST</option>
                    </select>
                    <button class="btn btn-primary" type="submit">
                        Generer
                    </button>
                </div><!-- End of .hstack -->
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
    <div class="card border mt-3">
        <div class="card-header">
            CANVA NI (LST)
        </div><!-- End of .card-header -->
        <div class="card-body">
            <form target="_blank" action="<?php echo e(route('exportation.canva.ni.lst')); ?>" method="get">
                <div class="hstack gap-3">
                    <select class="form-select" name="au" aria-label="Default select example">
                        <?php for($i = date('Y'); $i > 2010; $i--): ?>
                            <option value="<?php echo e($i - 1); ?>-<?php echo e($i); ?>">
                                <?php echo e($i - 1); ?>-<?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                    <button class="btn btn-primary" type="submit">
                        Generer
                    </button>
                </div><!-- End of .hstack -->
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
    <div class="card border mt-3">
        <div class="card-header">
            Etat des admis (DEUST)
        </div><!-- End of .card-header -->
        <div class="card-body">
            <form target="_blank" action="<?php echo e(route('exportation.etat.admis.DEUST')); ?>" method="get">
                <div class="hstack gap-3">
                    <select class="form-select" name="tronc" aria-label="Default select example">
                        <option value="MIP">MIP</option>
                        <option value="BCG">BCG</option>
                    </select>
                    <select class="form-select" name="session" aria-label="Default select example">
                        <option value="A">Automne</option>
                        <option value="P">Printemps</option>
                    </select>
                    <select class="form-select" name="ordre" aria-label="Default select example">
                        <option value="A">Alphabétique</option>
                        <option value="N">Moynne Déc</option>
                    </select>
                    <select class="form-select" name="au" aria-label="Default select example">
                        <?php for($i = date('Y'); $i > 2010; $i--): ?>
                            <option value="<?php echo e($i - 1); ?>-<?php echo e($i); ?>">
                                <?php echo e($i - 1); ?>-<?php echo e($i); ?>

                            </option>
                        <?php endfor; ?>
                    </select>
                    <button class="btn btn-primary" type="submit">
                        Generer
                    </button>
                </div><!-- End of .hstack -->
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
    <div class="card border mt-3">
        <div class="card-header">
            Etat des admis (LST)
        </div><!-- End of .card-header -->
        <div class="card-body">
            <form target="_blank" action="<?php echo e(route('exportation.etat.admis.LST')); ?>" method="get">
                <div class="hstack gap-3">
                    <select class="form-select" name="option" aria-label="Default select example">
                        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option->id); ?>"><?php echo e($option->id); ?> - <?php echo e($option->intitule); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <select class="form-select" name="session" aria-label="Default select example">
                        <option value="A">Automne</option>
                        <option value="P">Printemps</option>
                    </select>
                    <select class="form-select" name="ordre" aria-label="Default select example">
                        <option value="A">Alphabétique</option>
                        <option value="N">Moynne Déc</option>
                    </select>
                    <select class="form-select" name="au" aria-label="Default select example">
                        <?php for($i = date('Y'); $i > 2010; $i--): ?>
                            <option value="<?php echo e($i - 1); ?>-<?php echo e($i); ?>">
                                <?php echo e($i - 1); ?>-<?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                    <button class="btn btn-primary" type="submit">
                        Generer
                    </button>
                </div><!-- End of .hstack -->
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
    <div class="row">
        <div class="col">
            <div class="card border mt-3">
                <div class="card-header">
                    Liste globale des inscrits DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('exportation.inscrits.global.DEUST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="tronc" aria-label="Default select example">
                                <option value="MIP">MIP</option>
                                <option value="BCG">BCG</option>

                            </select>
                            <select class="form-select" name="semestre" aria-label="Default select example">
                                <?php for($i = 1; $i < 7; $i++): ?>
                                    <option value="S<?php echo e($i); ?>">S<?php echo e($i); ?></option>
                                <?php endfor; ?>
                            </select>
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card border mt-3">
                <div class="card-header">
                    Liste globale des inscrits S5
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('exportation.inscrits.global.S5')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="filiere" aria-label="Default select example">
                                <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($filiere->id); ?>"><?php echo e($filiere->intitule); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col">
            <div class="card border mt-3">
                <div class="card-header">
                    Liste globale des inscrits S6
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('exportation.inscrits.global.LST')); ?>" method="get">
                        <div class="hstack gap-3">
                            <select class="form-select" name="option" aria-label="Default select example">
                                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option->id); ?>"><?php echo e($option->intitule); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <button class="btn btn-primary" type="submit">
                                Generer
                            </button>
                        </div><!-- End of .hstack -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/exportation/exportation.blade.php ENDPATH**/ ?>