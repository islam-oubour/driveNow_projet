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
                Informations
            </div><!-- End of .card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col col-6 col-md-3 mb-2">
                        <strong><small>MASSAR/CNE - CNI</small></strong> <br>
                        M1325456212 - U192452
                    </div><!-- End of .col -->
                    <div class="col col-6 col-md-3 mb-2">
                        <strong><small>Nom</small></strong> <br>
                        Mohamed OUAADOU
                    </div><!-- End of .col -->
                    <div class="col col-6 col-md-3 mb-2">
                        <strong><small>Date de naissance</small></strong> <br>
                        18/09/1999
                    </div><!-- End of .col -->
                    <div class="col col-6 col-md-3 mb-2">
                        <strong><small>Tronc</small></strong> <br>
                        MIP
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
            </div><!-- End of .card-body -->
        </div><!-- End of .card -->
        <div class="card mt-3">
            <form action="" method="post">

            </form>
            <div class="card-header">
                Choix
            </div><!-- End of .card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col col-12 col-md-4 mb-2">
                        <label class="form-label">Choix 1</label>
                        <select name="C1" class="form-select" id="C1">
                            <option value="_"></option>
                            <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($filiere->id); ?>"><?php echo e($filiere->intitule); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><!-- End of # -->
                    </div><!-- End of .col -->
                    <div class="col col-12 col-md-4 mb-2">
                        <label class="form-label">Choix 2</label>
                        <select name="C2" class="form-select" id="C2">
                            <option value="_"></option>

                            <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($filiere->id); ?>"><?php echo e($filiere->intitule); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><!-- End of # -->
                    </div><!-- End of .col -->
                    <div class="col col-12 col-md-4 mb-2">
                        <label class="form-label">Choix 3</label>
                        <select name="C3" class="form-select" id="C3">
                            <option value="_"></option>

                            <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($filiere->id); ?>"><?php echo e($filiere->intitule); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><!-- End of # -->
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
            </div><!-- End of .card-body -->
            <div class="card-footer">
                <div class="text-end">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger">
                        Danger modal
                    </a>
                </div><!-- End of .text-end -->
                <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-danger"></div>
                            <div class="modal-body text-center p-4">
                                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                                    <path d="M12 9v4" />
                                    <path d="M12 17h.01" />
                                </svg>
                                <h3>Êtes vous sûr de vouloir continuer ?</h3>
                                <div class="text-muted">Apres la confirmation, aucune modification ne sera possible.</div>
                            </div>
                            <div class="modal-body">
                                <div class="text-muted">1. <span id="C1_output"></span></div>
                                <div class="text-muted">2. <span id="C2_output"></span></div>
                                <div class="text-muted">3. <span id="C3_output"></span></div>
                            </div><!-- End of .modal-body -->
                            <div class="modal-footer">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                                Annuler
                                            </a></div>
                                        <div class="col"><a href="#" class="btn btn-danger w-100"
                                                data-bs-dismiss="modal">
                                                Confirmer
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End of .card-footer -->
        </div><!-- End of .card -->
        <div class="card card-md mt-3">
            <div class="card-stamp card-stamp-lg">
                <div class="card-stamp-icon bg-success">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount-check">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h3 class="h1">C'est bon !</h3>
                        <div class="markdown text-muted">
                            Votre opération a été effectuée avec succès. <br> Voici votre choix :
                        </div>
                        <br>
                        <ol>
                            <li>Text</li>
                            <li>Text</li>
                            <li>Text</li>
                        </ol>
                        <div class="mt-3">
                            <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank"
                                rel="noopener">Imprimer le reçu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-header -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\STARTING_APP_V2\website\resources\views/Orientation/home.blade.php ENDPATH**/ ?>