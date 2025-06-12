<div class="card">
    <div class="card-header bg-white">
        <div class="d-flex justify-content-between align-items-center">
            <?php echo e($semestre); ?>

            <div class="btn btn-primary btn-sm">
                <i class="bi bi-printer"></i>
            </div><!-- End of .btn -->
        </div><!-- End of .d-flex -->
    </div><!-- End of .card-header -->
    <div class="card-body p-0">
        <table class="table table-stripped m-0">
            <thead class="table-light">
                <tr>
                    <th></th>
                    <th scope="col">Module</th>
                    <th align="center">
                        <div class="text-center">Normale</div>
                    </th>
                    <th align="center">
                        <div class="text-center">Rattrapage</div>
                    </th>
                    <th align="center">
                        <div class="text-center">Finale</div>
                    </th>
                    <th align="center">
                        <div class="text-center">Résultat</div>
                    </th>
                    <th align="center">
                        <div class="text-center">Mention</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($item->inscription == 1): ?>
                            <td><i class="bi text-success bi-circle-fill"></i></td>
                        <?php else: ?>
                            <td><i class="bi text-light bi-circle-fill"></i></td>
                        <?php endif; ?>
                        <td><strong><small><?php echo e($item->id_module); ?></small></strong> <br> <?php echo e($item->designation); ?>

                        </td>
                        <td align="center">
                            <?php echo e(fst_format_note($item->note_normale)); ?> <br>
                            <?php if(fst_absence($item->absence_normale, $item->note_normale) == 'P'): ?>
                                <span class="badge bg-success">P</span>
                            <?php else: ?>
                                <?php if(fst_absence($item->absence_normale, $item->note_normale) == 'A'): ?>
                                    <span class="badge bg-danger">A</span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td align="center">
                            <?php echo e(fst_format_note($item->note_rattrapage)); ?> <br>
                            <?php if(fst_absence($item->absence_rattrapage, $item->note_rattrapage) == 'P'): ?>
                                <span class="badge bg-success">P</span>
                            <?php else: ?>
                                <?php if(fst_absence($item->absence_rattrapage, $item->note_rattrapage) == 'A'): ?>
                                    <span class="badge bg-danger">A</span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <td align="center">
                            <?php echo e(fst_format_note($item->note)); ?>

                        </td>
                        <td align="center"><?php echo e(fst_etat_module($item->note)); ?></td>
                        <td align="center"><?php echo e(fst_small_mention($item->note)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td align="right" colspan="4">Moyenne :</td>
                    <td align="center" class="table-light"><?php echo e(fst_moy_semestre($CNE, $semestre)); ?></td>
                    <?php if(fst_res_semestre($CNE, $semestre) == 'V'): ?>
                        <td align="center" class="table-success">V</td>
                    <?php else: ?>
                        <td align="center" class="table-danger">NV</td>
                    <?php endif; ?>
                    <td align="center" class="table-light"><?php echo e(fst_small_mention(fst_moy_semestre($CNE, $semestre))); ?>

                    </td>
                </tr>
            </tbody>
        </table>
    </div><!-- End of .card-body -->
</div><!-- End of .card -->
 <?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/etudiants/components/semestre.blade.php ENDPATH**/ ?>