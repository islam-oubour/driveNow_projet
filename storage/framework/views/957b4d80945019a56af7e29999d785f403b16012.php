<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        
        <td class="w-lg"><strong><small><?php echo e($key + 1); ?> -
                    <?php echo e($item['CNE']); ?></small>
            </strong><br> <?php echo e($item['Nom']); ?> </td>
        
        <?php $__currentLoopData = $modules['S5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S5']); ?></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S5']); ?></td>

        
        <?php $__currentLoopData = $modules['S6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Moy-S6']); ?></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res-S6']); ?></td>

        <td  align="center" class="w-xs "><?php echo e($item['Moy_DEUST']); ?></td>
        <td  align="center" class="w-xs "><?php echo e($item['Moy_S5_S6']); ?></td>
        <td  align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
        <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/exportation/LST_liste_demo.blade.php ENDPATH**/ ?>