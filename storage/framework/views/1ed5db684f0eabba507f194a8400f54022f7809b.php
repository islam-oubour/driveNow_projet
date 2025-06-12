<?php $counter = 1; ?>
<?php $__currentLoopData = $data['listeAD']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        
        <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                    <?php echo e($item['CNE']); ?></small>
            </strong><br> <?php echo e($item['Nom']); ?> </td>
        
        <?php $__currentLoopData = $data['modules']['S5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
            <?php else: ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S5']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V-S5']); ?> <br>R :
                <?php echo e($item['R-S5']); ?> <br>N : <?php echo e($item['N-S5']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S5']); ?></td>

        
        <?php $__currentLoopData = $data['modules']['S6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
            <?php else: ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S6']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V-S6']); ?> <br>R :
                <?php echo e($item['R-S6']); ?> <br>N : <?php echo e($item['N-S6']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S6']); ?></td>


        <td  align="center" class="w-xs "><?php echo e($item['Moy_DEUST']); ?></td>
        <td  align="center" class="w-xs "><?php echo e($item['Moy_S5_S6']); ?></td>
        <td  align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
    </tr>

    <?php $counter = $counter + 1; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $data['listeAJ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        
        <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                    <?php echo e($item['CNE']); ?></small>
            </strong><br> <?php echo e($item['Nom']); ?> </td>
        
        <?php $__currentLoopData = $data['modules']['S5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
            <?php else: ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S5']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V-S5']); ?> <br>R :
                <?php echo e($item['R-S5']); ?> <br>N : <?php echo e($item['N-S5']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S5']); ?></td>

        
        <?php $__currentLoopData = $data['modules']['S6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
            <?php else: ?>
                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S6']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V-S6']); ?> <br>R :
                <?php echo e($item['R-S6']); ?> <br>N : <?php echo e($item['N-S6']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S6']); ?></td>


        <td  align="center" class="w-xs "><?php echo e($item['Moy_DEUST']); ?></td>
        <td  align="center" class="w-xs "><?php echo e($item['Moy_S5_S6']); ?></td>
        <td  align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
        <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
    </tr>

    <?php $counter = $counter + 1; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/PDF/components/LST_liste_demo.blade.php ENDPATH**/ ?>