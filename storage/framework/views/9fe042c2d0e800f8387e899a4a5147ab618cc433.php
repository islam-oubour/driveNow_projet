<?php if($module->rachete == 1 || $module->compense == 1): ?>
   			<?php if($module->compense == 1): ?>
                <td><abbr title="Compensé">VC</abbr></td>
			<?php else: ?>
				<td><abbr title="Racheté">RACH</abbr></td>
            <?php endif; ?>

<?php else: ?>
    <?php if($module->inscription == 1): ?>
        <?php if(isset($module->note)): ?>
            <?php if($module->note >= 10): ?>
                <td><abbr title="Validé">V</abbr></td>
            <?php endif; ?>
            <?php if($module->note < 10 && $module->note >= 5 ): ?>
            <td><abbr title="Rattrapage">R</abbr></td>
            <?php endif; ?>
            <?php if($module->note < 5 ): ?>
            <td><abbr title="Non validé">NV</abbr></td>
            <?php endif; ?>
        <?php else: ?>
            <td>-</td>
        <?php endif; ?>
    <?php else: ?>
        <?php if(isset($module->note)): ?>
            <?php if($module->note >= 10): ?>
                <td><abbr title="Validé">V</abbr></td>
            <?php endif; ?>
            <?php if($module->note >= 5 && $module->note <10): ?>
                <td><abbr title="Rattrapage">R</abbr></td>
            <?php endif; ?>
            <?php if($module->note < 5): ?>
                <td><abbr title="Non validé">NV</abbr></td>
            <?php endif; ?>
        <?php else: ?>
            <td>-</td>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/fste-umi/public_html/services/notes/website/resources/views/components/resultat.blade.php ENDPATH**/ ?>