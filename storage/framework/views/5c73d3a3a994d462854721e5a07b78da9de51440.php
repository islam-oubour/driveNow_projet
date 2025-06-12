<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Voitures</title>
</head>
<body>
    <h1>Liste des Voitures</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <!-- زيدي الأعمدة حسب جدولك الحقيقي -->
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($voiture->id); ?></td>
                    <td><?php echo e($voiture->marque ?? '-'); ?></td>
                    <td><?php echo e($voiture->modele ?? '-'); ?></td>
                    <td><?php echo e($voiture->annee ?? '-'); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/voitures/index.blade.php ENDPATH**/ ?>