<?php if(Count($data) > 0): ?>
<div class="semestre mb-5">
    <div class="table-responsive">
        <table class="table table-bordered table-notes">
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
                    <td align="center" ><?php echo e($module->au); ?></td>
                        <?php if($res == 2 and $module->note <10): ?>
                        <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?>*</abbr>
                        <?php else: ?>
                        <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php endif; ?>
                    </td>
                    <?php if($res == 2 and $module->note <10): ?>
                    <td><?php echo e(ucfirst(strtolower($module->designation))); ?>*</td>
                    <?php else: ?>
                    <td><?php echo e(ucfirst(strtolower($module->designation))); ?></td>
                    <?php endif; ?>
                    <?php if(isset($module->note)): ?>
                        <td align='center' ><?php echo e(number_format((float)floor( $module->note * 100) / 100, 2, '.', '')); ?>

                        </td>
                    <?php else: ?>
                        <td align='center' >-</td>
                    <?php endif; ?>
                    <?php if($module->note < 10): ?>
                        <td align='center' >-</td>
                    <?php endif; ?>
                    <?php if($module->note >= 10 && $module->note < 12): ?>
                    <td align='center' >Passable</td>
                    <?php endif; ?>
                    <?php if($module->note >= 12 && $module->note < 14): ?>
                        <td align='center' >Assez bien</td>
                    <?php endif; ?>
                    <?php if($module->note >= 14 && $module->note < 16): ?>
                    <td align='center' >Bien</td>
                    <?php endif; ?>
                    <?php if($module->note >= 16): ?>
                    <td align='center' >Très bien</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr style="border: none">
                <td style="border: none" align="right" colspan="3" >Moyenne : </td>
                <td style="background-color: rgb(226, 226, 226)" align='center' ><strong><?php echo e(number_format((float)floor($moy * 100) / 100, 2, '.', '')); ?></strong></td>
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
                <?php if($res == 2): ?>
                    <td style="border: none;" align="right" colspan="3" > <span style="margin-right: 160px">* Module validé par compensation </span> Résultat : </td>
                <?php else: ?>
                    <td style="border: none;" align="right" colspan="3" >Résultat : </td>
                <?php endif; ?>
                <?php if($res == 0): ?>
                    <?php if($dc == true): ?>
                    
                    <td style="background-color: rgb(226, 226, 226)" class="table-success" align="center" colspan="2"  ><strong>Validé par compensation</strong></td>
                    <?php else: ?>
                        <td style="background-color: rgb(226, 226, 226)" class="table-success" align="center" colspan="2"  ><strong>Non validé</strong></td>
                    <?php endif; ?>
                <?php else: ?>
                    <td style="background-color: rgb(226, 226, 226)" class="table-success" align="center" colspan="2"  ><strong>Validé</strong></td>
                <?php endif; ?>
                
            </tr>
        </table>
    </div><!-- End of .table-responsive -->
</div><!-- End of .semestre -->
<?php endif; ?><?php /**PATH /home/fste-umi/public_html/fst/docs/website/resources/views/PDF/layouts/semestre.blade.php ENDPATH**/ ?>