
<?php $__env->startSection('title', 'Demandes'); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">

        <?php echo $__env->make('components.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col">
            <div class="card">
                <ul class="nav nav-line-bottom nav-example mb-3" id="pills-tabTwo" role="tablist">
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link active">Generale</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a href="#" class="nav-link">Non rachetage</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a href="#" class="nav-link">Non compensation</a>
                    </li>
                </ul>
                <?php if(\Session::has('list_err')): ?>
                    <div class="container">
                        <div class="alert container alert-danger d-flex justify-content-between">
                            Un erreur s'est produite
                            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal"
                                data-bs-target="#list_errModal">
                                Afficher
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="list_errModal" tabindex="-1" aria-labelledby="list_errModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="list_errModalLabel">Liste des erreurs</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td>CNE</td>
                                                    <td>NOM</td>
                                                    <td>MODULE</td>
                                                    <td>ERREUR</td>
                                                </tr>
                                                <?php $__currentLoopData = \Session::get('list_err'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($item['CNE']); ?></td>
                                                        <td><?php echo e($item['Nom']); ?></td>
                                                        <td><?php echo e($item['MODULE']); ?></td>
                                                        <td><?php echo e($item['Erreur']); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End of .alert -->
                    </div><!-- End of .container -->
                <?php endif; ?>
                <div class="container d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info me-3 text-white" data-bs-toggle="modal"
                        data-bs-target="#ajoutModal">
                        Ajouter
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ajoutModal" tabindex="-1" aria-labelledby="ajoutModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="ajoutModalLabel">Confirmation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="<?php echo e(route('deliberation.demandes.ajouter')); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="alert alert-info">
                                            La liste doit contient les champs suivants [CNE | Module]
                                        </div><!-- End of .alert -->
                                        <div class="my-3">
                                            <label for="exampleFormControlInput1" class="form-label">Liste</label>
                                            <input type="file" class="form-control" name="liste"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php if($demandes_invalides[0]->nb > 0): ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#suppressionModal">
                            Supprimer les demandes invalides
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="suppressionModal" tabindex="-1" aria-labelledby="suppressionModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="suppressionModalLabel">Confirmation</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes vous sure de vouloir supprimer <?php echo e($demandes_invalides[0]->nb); ?> demandes ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <form action="<?php echo e(route('deliberation.demandes.delete')); ?>" method="get">
                                            <button type="submit" class="btn btn-primary">Confirmer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- End of .d-flex -->
                <div class="my-5">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>CNE</th>
                                <th>MODULE</th>
                                <th>TYPE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $demandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $demande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($demande->id_etudiant); ?></td>
                                    <td><?php echo e($demande->id_module); ?></td>
                                    <?php if($demande->demande_non_comp == 1): ?>
                                        <td> <span class="badge bg-primary">DNC</span></td>
                                    <?php else: ?>
                                        <td> <span class="badge bg-secondary">DNR</span></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- End of .m-5 -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/demandes/demandes.blade.php ENDPATH**/ ?>