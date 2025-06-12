<?php if($module->inscription == 1): ?>
<?php if($module->saised == true): ?>
    <?php if(isset($module->note_normale)): ?>
    <td><?php echo e(number_format((float) $module->note_normale, 2, '.', '')); ?></td>
    <?php else: ?>
        <td>-</td>
    <?php endif; ?>


    <?php if(isset($module->note_rattrapage)): ?>
        <?php if($module->date_saisie_normale > $module->date_saisie_rattrapage): ?>
            <td>-</td>
        <?php else: ?>
            <td><?php echo e(number_format((float) $module->note_rattrapage, 2, '.', '')); ?></td>
        <?php endif; ?>

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
        <?php if(($module->date_saisie_normale > $module->date_saisie_rattrapage) && $module->au_saisie_normale != $module->au_saisie_normale): ?>
            <td>-</td>
        <?php else: ?>
        	<?php if($module->note_normale >= 10): ?>
            	<td>-</td>
        	<?php else: ?>
            	<td><?php echo e(number_format((float) $module->note_rattrapage, 2, '.', '')); ?></td>
        	<?php endif; ?>
        <?php endif; ?>
<?php else: ?>
    <td>-</td>
<?php endif; ?>

<?php if(isset($module->note)): ?>
    <td><?php echo e(number_format((float) $module->note, 2, '.', '')); ?></td>
<?php else: ?>
    <td>-</td>
<?php endif; ?>

<?php echo $__env->make('components.resultat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/fste-umi/public_html/services/notes/website/resources/views/components/notes.blade.php ENDPATH**/ ?>