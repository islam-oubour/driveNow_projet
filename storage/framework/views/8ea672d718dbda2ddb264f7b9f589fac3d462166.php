<?php if(Count($data) > 0): ?>
<div class="semestre mb-5">
    <div class="table-responsive">
        <table class="table rn_table table-bordered table-notes">
            <thead style="background-color: rgb(226, 226, 226)">
                <td style="width: 18px" align="center" rowspan="<?php echo e(count($data) + 3); ?>" ><strong><?php echo e($semestre); ?></strong></td>
                <td style="width: 75px" align="center"><strong>A.U.</strong></td>
                <td style="width: 50px" align="center"><strong>CODE</strong></td>
                <td><strong>DESIGNATION</strong></td>
                <td style="width: 48px" align="center" ><strong>NOTE</strong></td>
                <td style="width: 120px" align="center" ><strong>RÉSULTAT</strong></td>
            </thead>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td align="center" ><?php echo e($module['au']); ?></td>
                        <?php if($module['note'] <10): ?>
                        <td align="center"><?php echo e($module['module']); ?>*</abbr>
                        <?php else: ?>
                        <td align="center"><?php echo e($module['module']); ?></abbr>
                        <?php endif; ?>
                    </td>
                    <?php if($module['note'] <10): ?>
                    		<td><?php echo e($module['designation']); ?>*</td>
                    <?php else: ?>
                    		<td><?php echo e($module['designation']); ?></td>
                    <?php endif; ?>
                    <?php if(isset($module['note'])): ?>
                        <td align='center' ><?php echo e($module['note']); ?>

                        </td>
                    <?php else: ?>
                        <td align='center' >-</td>
                    <?php endif; ?>
                    <?php if($module['note'] < 10): ?>
                        <td align='center' >-</td>
                    <?php endif; ?>
                    <?php if($module['note'] >= 10 && $module['note'] < 12): ?>
                    <td align='center' >Passable</td>
                    <?php endif; ?>
                    <?php if($module['note'] >= 12 && $module['note'] < 14): ?>
                        <td align='center' >Assez bien</td>
                    <?php endif; ?>
                    <?php if($module['note'] >= 14 && $module['note'] < 16): ?>
                    <td align='center' >Bien</td>
                    <?php endif; ?>
                    <?php if($module['note'] >= 16): ?>
                    <td align='center' >Très bien</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr style="border: none">
                <td style="border: none" align="right" colspan="3" >Moyenne : </td>
                <td style="background-color: rgb(226, 226, 226)" align='center' ><strong><?php echo e($moy); ?></strong></td>
                    <?php if($moy< 10): ?>
                        <td style="background-color: rgb(226, 226, 226)" align='center' ><strong>-</strong></td>
                    <?php endif; ?>
                    <?php if($moy >= 10 && $moy < 12): ?>
                    <td style="background-color: rgb(226, 226, 226)" align='center' ><strong>Passable</strong></td>
                    <?php endif; ?>
                    <?php if($moy >= 12 && $moy < 14): ?>
                        <td style="background-color: rgb(226, 226, 226)" align='center' ><strong>Assez bien</strong></td>
                    <?php endif; ?>
                    <?php if($moy >= 14 && $moy < 16): ?>
                    <td style="background-color: rgb(226, 226, 226)" align='center' ><strong>Bien</strong></td>
                    <?php endif; ?>
                    <?php if($moy >= 16): ?>
                    <td style="background-color: rgb(226, 226, 226)" align='center' ><strong>Très bien</strong></td>
                    <?php endif; ?>
            </tr>
            <tr style="border: none">
                <?php if($nb_rat > 0): ?>
                    <td style="border: none;" align="right" colspan="3" > <span style="margin-right: 160px">* Module validé par compensation </span> Résultat : </td>
                <?php else: ?>
                    <td style="border: none;" align="right" colspan="3" >Résultat : </td>
                <?php endif; ?>
                <?php if($res != 'AD'): ?>
                    <td style="background-color: rgb(226, 226, 226)" class="table-success" align="center" colspan="2"  ><strong>Validé par compensation</strong></td>
                <?php else: ?>
                    <td style="background-color: rgb(226, 226, 226)" class="table-success" align="center" colspan="2"  ><strong>Validé</strong></td>
                <?php endif; ?>
                
            </tr>
        </table>
    </div><!-- End of .table-responsive -->
</div><!-- End of .semestre -->
<?php endif; ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/releves/semestre.blade.php ENDPATH**/ ?>