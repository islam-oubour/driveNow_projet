
<?php $__env->startSection('title', 'Modules'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Modules
                        <button onclick="window.print()" class="btn btn-primary btn-sm"><i class="bi bi-printer"></i></button>    
                    </div><!-- End of .d-flex -->
                </div><!-- End of .card-header -->
                <div class="card-body p-0">
                    <table id="examplex" class="table table-striped" style="width:100%">
                        <thead class="table-primary">
                            <tr>
                                <th>Module</th>
                                <th style="width: 150px">Saisie</th>
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
                                    <td style="width: 150px">
                                         <span role="button" title="<?php echo e($module->date_saisie_normale); ?>">✔️ Normale</span> <br>
                                        <?php if($module->au_saisie_rattrapage == fst_au() && $module->session_saisie_rattrapage == fst_small_session()): ?>
                                            <span role="button" title="<?php echo e($module->date_saisie_rattrapage); ?>">✔️ Rattrapage</span>
                                        <?php else: ?>
                                            <span role="button" title="<?php echo e($module->date_saisie_rattrapage); ?>">✖️ Rattrapage</span>
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
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckChecked">Rattrapage</label>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckChecked">Rattrapage</label>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Module</th>
                                <th style="width: 150px">Saisie</th>
                                <th>Affichage</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/modules.blade.php ENDPATH**/ ?>