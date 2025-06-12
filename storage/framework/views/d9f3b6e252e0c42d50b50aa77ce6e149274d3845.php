<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>projet_driveNow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="<?php echo e(asset('assets/img/favicon.ico')); ?>" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <style>
        .registration-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .registration-form h1 {
            color: #75564d;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .registration-form .form-control {
            height: 50px;
            margin-bottom: 15px;
        }
        
        .registration-form .btn-primary {
            background-color:#75564d;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            margin-top: 20px;
        }
        
        .registration-form .btn-primary:hover {
            background-color: #75564d;
        }
        
        .form-row {
            margin-bottom: 15px;
        }

    </style>
</head>
<body>
   <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="registration-form">
            <h1 class="display-4 text-uppercase text-center mb-5">add cars</h1>
            <?php if(session('success')): ?>
                <div class="alert alert-success text-center"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
          <form method="POST" action="<?php echo e(route('cars.store')); ?>" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Matricule" name="Matricule" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-control" name="couleur" required>
                            <option disabled selected>Colors</option>
                            <option value="Bleu">Bleu</option>
                            <option value="Red">Red</option>
                            <option value="Green">Green</option>
                            <option value="Black">Black</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <input type="number" class="form-control" placeholder="Prix" name="prix" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Model" name="Model" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <select class="form-control" name="marque" required>
                        <option disabled selected>Marque</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Renault">Renault</option>
                        <option value="BMW">BMW</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Honda">Honda</option>
                        <option value="Audi">Audi</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <input type="file" class="form-control" name="photo" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <input type="submit" class="btn btn-primary px-5" value="Ajouter" name="ajouter">
                </div>
                <div class="form-group mb-3 text-center">
                    <p><a href="dashboard.php">Tableau de bord</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/addCar.blade.php ENDPATH**/ ?>