<?php $__env->startSection('title', 'Modification de notes'); ?>
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
        <?php echo $__env->make('components.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    Etudiant
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form action="<?php echo e(route('deliberation.rachetage.modification')); ?>" method="get">
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Etudiant</span>
                                    <input type="text" name="CNE" class="form-control" required>
                                </div>
                            </div><!-- End of .col-6 -->
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Module</span>
                                    <input type="text" name="module" class="form-control" required>
                                </div>
                            </div><!-- End of .col-6 -->
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nov Note</span>
                                    <input type="text" name="note" class="form-control" required>
                                </div>
                            </div><!-- End of .col-6 -->
                            <div class="col-3">
                                <select class="form-select" name="jury" aria-label="Default select example">
                                    <option value="S">SEMESTRE</option>
                                    <option value="D">DEUST</option>
                                    <option value="L">LST</option>
                                </select>
                            </div><!-- End of .col-6 -->
                        </div><!-- End of .row -->
                        <div class="row">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Confirmer
                                </button>
                            </div><!-- End of .text-end -->
                        </div><!-- End of .row -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Historique

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(route('deliberation.rachetage.bilan', ['jury' => 'S'])); ?>"
                                        class="dropdown-item" href="#">Semestre</a></li>
                                <li><a href="<?php echo e(route('deliberation.rachetage.bilan', ['jury' => 'D'])); ?>"
                                        class="dropdown-item" href="#">DEUST</a></li>
                                <li><a href="<?php echo e(route('deliberation.rachetage.bilan', ['jury' => 'L'])); ?>"
                                        class="dropdown-item" href="#">LST</a></li>
                            </ul>
                        </div>
                    </div><!-- End of .d-flex -->
                </div><!-- End of .card-header -->
                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">CNE</th>
                                <th scope="col">Module</th>
                                <th scope="col">Anc. Note</th>
                                <th scope="col">Nov. Note</th>
                                <th scope="col">Jury</th>
                                <?php for($i = 1; $i < 7; $i++): ?>
                                    <th scope="col">S<?php echo e($i); ?></th>
                                <?php endfor; ?>
                                <th scope="col">DEUST</th>
                                <th scope="col">LST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($item['CNE']); ?> <br> <?php echo e($item['Nom']); ?></th>
                                    <td><?php echo e($item['Module']); ?></td>
                                    <td><?php echo e($item['A_Note']); ?></td>
                                    <td><?php echo e($item['N_Note']); ?></td>
                                    <td>x</td>

                                    <?php if($item['R-S1'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S1']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S1']); ?></td>
                                    <?php endif; ?>

                                    <?php if($item['R-S2'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S2']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S2']); ?></td>
                                    <?php endif; ?>
                                    <?php if($item['R-S3'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S3']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S3']); ?></td>
                                    <?php endif; ?>

                                    <?php if($item['R-S4'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S4']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S4']); ?></td>
                                    <?php endif; ?>



                                    <?php if($item['R-S5'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S5']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S5']); ?></td>
                                    <?php endif; ?>

                                    <?php if($item['R-S6'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-S6']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-S6']); ?></td>
                                    <?php endif; ?>

                                    <?php if($item['R-DEUST'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-DEUST']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-DEUST']); ?></td>
                                    <?php endif; ?>

                                    <?php if($item['R-LST'] == true): ?>
                                        <td class="table-success"><?php echo e($item['N-LST']); ?></td>
                                    <?php else: ?>
                                        <td class="table-danger"><?php echo e($item['N-LST']); ?></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/rachetage/rachetage.blade.php ENDPATH**/ ?>