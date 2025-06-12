<?php $__env->startSection('page-title', 'Acceuil'); ?>
<?php $__env->startSection('page-header'); ?>
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <?php echo e($etudiant['id']); ?>

                </div>
                <h2 class="page-title">
                    <?php echo e($etudiant['nom_prenom_fr']); ?>

                </h2>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-body'); ?>
    <div class="container-xl d-flex flex-column justify-content-center">
        <div class="card my-3">
            <div class="card-header p-0">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>NOTE >= 10</th>
                            <th>NOTE < 10</th>
                            <th>ABS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-primary">
                            <td>Validé</td>
                            <td>Rattrapage</td>
                            <td>Non validé</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- End of .card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th align="center">Module</th>
                                <th align="center">NORM</th>
                                <th align="center">RATT</th>
                                <th align="center">NOTE</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><span class="badge bg-green me-2"></span><?php echo e($module->id_module); ?> <br>
                                        <?php echo e($module->designation); ?></td>
                                    <?php if(isset($module->note_normale) && $module->affichage_normale == 1): ?>
                                        <?php if($module->absence_normale): ?>
                                            <td align="center">ABS</td>
                                        <?php else: ?>
                                            <td align="center"><?php echo e($module->note_normale); ?>

                                                (<?php echo e($module->note_normale >= 10 ? 'V' : 'R'); ?>) </td>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <td align="center">-</td>
                                    <?php endif; ?>

                                    <?php if(isset($module->note_rattrapage) && $module->affichage_rattrapage == 1): ?>
                                        <?php if($module->absence_rattrapage): ?>
                                            <td align="center">ABS</td>
                                        <?php else: ?>
                                            <td align="center"><?php echo e($module->note_rattrapage); ?>

                                                (<?php echo e($module->note_rattrapage >= 10 ? 'V' : 'NV'); ?>) </td>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <td align="center">-</td>
                                    <?php endif; ?>

                                    <?php if(isset($module->note) && $module->affichage_normale == 1 && $module->affichage_rattrapage == 1): ?>
                                        <td align="center"><?php echo e($module->note); ?></td>
                                    <?php else: ?>
                                        <td align="center">-</td>
                                    <?php endif; ?>
                                    <?php if(!isset($module->note) || $module->affichage_normale == 0 || $module->affichage_rattrapage == 0): ?>
                                        <td align="center">-</td>
                                    <?php else: ?>
                                        <?php if($module->note >= 10): ?>
                                            <td align="center">V</td>
                                        <?php else: ?>
                                            <td align="center">NV</td>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- End of .card-body -->

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fste-umi/public_html/services/affichage/website/resources/views/home.blade.php ENDPATH**/ ?>