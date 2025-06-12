<?php if($module->rachete == 1): ?>
    <td><abbr title="Racheté">RACH</abbr></td>
<?php else: ?>
    <?php if($module->inscription == 1): ?>
        <?php if(isset($module->note)): ?>
            <?php if(isset($module->note_rattrapage)): ?>
                <?php if($module->note_rattrapage >= 10): ?>
                    <td><abbr title="Validé">V</abbr></td>
                <?php else: ?>
                    <td><abbr title="Non validé">NV</abbr></td>
                <?php endif; ?>
            <?php else: ?>
                <?php if($module->note_normale >= 10): ?>
                    <td><abbr title="Validé">V</abbr></td>
                <?php else: ?>
                    <?php if($module->note_normale >= 5): ?>
                        <td><abbr title="Rattrapage">R</abbr></td>
                    <?php else: ?>
                        <td><abbr title="Non validé">NV</abbr></td>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php else: ?>
            <td>-</td>
        <?php endif; ?>
    <?php else: ?>
        <?php if(isset($module->note)): ?>
            <?php if($module->note >= 10): ?>
                <td><abbr title="Validé">V</abbr></td>
            <?php else: ?>
                <td><abbr title="Non">NV</abbr></td>
            <?php endif; ?>
        <?php else: ?>
            <td>-</td>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/html/test/website/resources/views/components/resultat.blade.php ENDPATH**/ ?>