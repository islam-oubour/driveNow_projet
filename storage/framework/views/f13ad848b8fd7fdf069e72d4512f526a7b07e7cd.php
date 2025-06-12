<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo e(route('client.update', $client->cinutilisateur)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label>Nom :</label>
        <input type="text" name="nomutilisateur" class="form-control" value="<?php echo e($client->nomutilisateur); ?>" required>
    </div>

    <div class="form-group">
        <label>Prénom :</label>
        <input type="text" name="prenomutilisateur" class="form-control" value="<?php echo e($client->prenomutilisateur); ?>" required>
    </div>

    <div class="form-group">
        <label>Email :</label>
        <input type="email" name="loginutilisateur" class="form-control" value="<?php echo e($client->loginutilisateur); ?>" required>
    </div>

    <div class="form-group">
        <label>Téléphone :</label>
        <input type="text" name="telutilisateur" class="form-control" value="<?php echo e($client->telutilisateur); ?>">
    </div>

    <div class="form-group">
        <label>Adresse :</label>
        <input type="text" name="adresseutilisateur" class="form-control" value="<?php echo e($client->adresseutilisateur); ?>">
    </div>

    <div class="form-group">
        <label>Ville :</label>
        <input type="text" name="villeutilisateur" class="form-control" value="<?php echo e($client->villeutilisateur); ?>">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
</form> 
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/Admin/edit.blade.php ENDPATH**/ ?>