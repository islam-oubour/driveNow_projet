<?php if(Count($data) > 0): ?>
<div class="semestre mb-5">
    <div class="container">
        <h3 class="fst-title"><?php echo e($semestre); ?></h3>
    </div><!-- End of .container -->
    <div class="table-responsive">
        <table class="table table-bordered table-notes">
            <thead class="table-success">
                <td align="center">Code</td>
                <td>Designation</td>
                <td>Note</td>
                <td>Résultat</td>
            </thead>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td align="center"> <abbr
                            title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                    </td>
                    <td><?php echo e(ucfirst(strtolower($module->designation))); ?></td>
                    <?php if(isset($module->note)): ?>
                        <td><?php echo e(number_format((float) $module->note, 4, '.', '')); ?>

                        </td>
                    <?php else: ?>
                        <td>-</td>
                    <?php endif; ?>
                    <?php if($module->note < 10): ?>
                        <td>-</td>
                    <?php endif; ?>
                    <?php if($module->note >= 10 && $module->note < 12): ?>
                    <td>P</td>
                    <?php endif; ?>
                    <?php if($module->note >= 12 && $module->note < 14): ?>
                        <td>A.B</td>
                    <?php endif; ?>
                    <?php if($module->note >= 14 && $module->note < 16): ?>
                    <td>B</td>
                    <?php endif; ?>
                    <?php if($module->note >= 16): ?>
                    <td>T.B</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td align="right" colspan="2" >Moyenne : </td>
                <td >X</td>
                <td >X</td>
            </tr>
            <tr>
                <td align="right" colspan="2" >Résultat : </td>
                <td class="table-success" align="center" colspan="2"  >X</td>
            </tr>
        </table>
    </div><!-- End of .table-responsive -->
</div><!-- End of .semestre -->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\docs\website\resources\views/layouts/semestre.blade.php ENDPATH**/ ?>