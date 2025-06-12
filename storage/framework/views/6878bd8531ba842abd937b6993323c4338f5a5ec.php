<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
        <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        .container {
             max-width: 700px; 
             margin: 40px auto; 

            }
        .table th {
             width: 200px;
             }
        .badge-success {
             background-color: #28a745;
             }
        .badge-danger {
             background-color: #dc3545; 
            }

        th{
            background-color: #2B2E4A;
            color:white;
        }
    </style>
</head>
<body>
  <div class="container" style="max-width:700px; margin-top:40px;">
    <h2 class="mb-4">📋 Détails du client</h2>
    <table class="table table-bordered">
        <tr><th style="width:200px; background-color:#2B2E4A; color:white;">CIN</th><td><?php echo e($client->cinutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Nom</th><td><?php echo e($client->nomutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Prénom</th><td><?php echo e($client->prenomutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Email</th><td><?php echo e($client->loginutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Téléphone</th><td><?php echo e($client->telutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Adresse</th><td><?php echo e($client->adresseutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Ville</th><td><?php echo e($client->villeutilisateur); ?></td></tr>
        <tr><th style="background-color:#2B2E4A; color:white;">Type de compte</th><td><?php echo e($client->typeutilisateur); ?></td></tr>
    </table>
    <a href="<?php echo e(route('User')); ?>" class="btn btn-secondary">⬅ Retour</a>
    <a href="<?php echo e(route('client.edit', $client->cinutilisateur)); ?>" class="btn btn-success">
    Modifier
    </a>
    <form action="<?php echo e(route('client.destroy', $client->cinutilisateur)); ?>" method="POST" style="display:inline-block;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger"
        onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
        Supprimer
    </button>
</form>
</div>  
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/show.blade.php ENDPATH**/ ?>