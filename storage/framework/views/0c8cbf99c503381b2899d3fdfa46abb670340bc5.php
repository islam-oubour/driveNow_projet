<?php if($module->inscription == 1): ?>
<?php if($module->saised == true): ?>
    <?php if(isset($module->note_normale)): ?>
    <td><?php echo e(number_format((float) $module->note_normale, 2, '.', '')); ?></td>
    <?php else: ?>
        <td>-</td>
    <?php endif; ?>


    <?php if(isset($module->note_rattrapage)): ?>
        <td><?php echo e(number_format((float) $module->note_rattrapage, 2, '.', '')); ?></td>
    <?php else: ?>
        <td>-</td>
    <?php endif; ?>

    <?php if(isset($module->note)): ?>
        <td><?php echo e(number_format((float) $module->note, 2, '.', '')); ?></td>
    <?php else: ?>
        <td>-</td>
    <?php endif; ?>

    <?php echo $__env->make('components.resultat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <td>-</td>
    <td>-</td>
    <td>-</td>
<?php endif; ?>

<?php else: ?>
<?php if(isset($module->note_normale)): ?>
<td><?php echo e(number_format((float) $module->note_normale, 2, '.', '')); ?></td>
<?php else: ?>
    <td>-</td>
<?php endif; ?>


<?php if(isset($module->note_rattrapage)): ?>
    <td><?php echo e(number_format((float) $module->note_rattrapage, 2, '.', '')); ?></td>
<?php else: ?>
    <td>-</td>
<?php endif; ?>

<?php if(isset($module->note)): ?>
    <td><?php echo e(number_format((float) $module->note, 2, '.', '')); ?></td>
<?php else: ?>
    <td>-</td>
<?php endif; ?>

<?php echo $__env->make('components.resultat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /var/www/html/test/website/resources/views/components/notes.blade.php ENDPATH**/ ?>