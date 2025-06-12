<?php $counter = 1; ?>
<?php $__currentLoopData = $data['listeAD']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item['demande'] == 0): ?>
        <tr>
            
            <td rowspan="2" class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
        <tr class="col-bg">
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>

        </tr>
    <?php else: ?>
        <tr>
            
            <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
    <?php endif; ?>

    <?php $counter = $counter + 1; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $data['listeAC']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item['demande'] == 0): ?>
        <tr>
            
            <td rowspan="2" class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
        <tr class="col-bg">
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>

        </tr>
    <?php else: ?>
        <tr>
            
            <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
    <?php endif; ?>

    <?php $counter = $counter + 1; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $data['listeAJ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item['demande'] == 0): ?>
        <tr>
            
            <td rowspan="2" class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td rowspan="2" align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td rowspan="2" align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
        <tr class="col-bg">
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>
            <td align="center">________</td>

        </tr>
    <?php else: ?>
        <tr>
            
            <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                        <?php echo e($item['CNE']); ?></small>
                </strong><br> <?php echo e($item['Nom']); ?> </td>
            
            <?php $__currentLoopData = $data['modules']['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S1']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S1']); ?> <br>R :
                    <?php echo e($item['R-S1']); ?> <br>N : <?php echo e($item['N-S1']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S1']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S2']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S2']); ?> <br>R :
                    <?php echo e($item['R-S2']); ?> <br>N : <?php echo e($item['N-S2']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S2']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S3']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S3']); ?> <br>R :
                    <?php echo e($item['R-S3']); ?> <br>N : <?php echo e($item['N-S3']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S3']); ?></td>

            
            <?php $__currentLoopData = $data['modules']['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                <?php else: ?>
                    <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td align="center" class="w-xs"><?php echo e($item['Moy-S4']); ?></td>
            <td align="center" class="w-xs"><small>V : <?php echo e($item['V-S4']); ?> <br>R :
                    <?php echo e($item['R-S4']); ?> <br>N : <?php echo e($item['N-S4']); ?></small></td>
            <td align="center" class="w-xs"><?php echo e($item['Res-S4']); ?></td>


            <td align="center" class="w-xs col-bg"><?php echo e($item['Moy']); ?></td>
            <td align="center" class="w-xs col-bg"><small>V : <?php echo e($item['V']); ?> <br>R :
                    <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
            <td align="center" class="w-xs col-bg"><?php echo e($item['Res']); ?></td>
        </tr>
    <?php endif; ?>

    <?php $counter = $counter + 1; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/PDF/components/DEUST_liste_demo.blade.php ENDPATH**/ ?>