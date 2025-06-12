
<?php $__env->startSection('title', 'Modules'); ?>
<?php $__env->startSection('content'); ?>
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
                    Modules
                </div><!-- End of .card-header -->
                <div class="card-body px-0">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead class="table-primary">
                            <tr>
                                <th>Module</th>
                                <th>Normale</th>
                                <th>Rattrapage</th>
                                <th>Affichage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <h4 class="m-0"><?php echo e($module->id); ?></h4>
                                        <?php echo e($module->designation); ?> <br>
                                        <strong><?php echo e($module->specialite); ?> - <?php echo e($module->semestre); ?></strong>
                                    </td>
                                    <td align="left">
                                        <?php echo e(date('d/m/Y', strtotime($module->date_saisie_normale))); ?>

                                        
                                        <br>
                                        <strong><?php echo e(fst_small_au($module->au_saisie_normale)); ?> - <?php echo e($module->session_saisie_normale); ?> -
                                            ✅</strong>
                                    </td>
                                    <td align="left">
                                        <?php echo e(date('d/m/Y', strtotime($module->date_saisie_rattrapage))); ?>

                                        <br>
                                        <?php if($module->au_saisie_rattrapage == fst_au() && $module->session_saisie_rattrapage == fst_small_session()): ?>
                                            <strong><?php echo e(fst_small_au($module->au_saisie_rattrapage)); ?> - <?php echo e($module->session_saisie_rattrapage); ?> - ✅ </strong>
                                        <?php else: ?>
                                            <strong><?php echo e(fst_small_au($module->au_saisie_rattrapage)); ?> - <?php echo e($module->session_saisie_rattrapage); ?></strong>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <?php if($module->affichage_normale): ?>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Normale</label>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Normale</label>
                                            <?php endif; ?>

                                            <br>
                                            <?php if($module->affichage_rattrapage): ?>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Rattrapage</label>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Rattrapage</label>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/deliberation/modules.blade.php ENDPATH**/ ?>