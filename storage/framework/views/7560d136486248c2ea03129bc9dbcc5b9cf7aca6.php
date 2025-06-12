<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Voiture</title>
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .registration-form {
            background-color: #fff;
            box-shadow:  0px 0px 8px rgba(0, 0, 0, 0.2); /* ظل ناعم */
            padding: 40px;
            max-width: 800px;
            margin: 40px auto;
        }
        .registration-form h1 {
            color: #75564d;
            margin-bottom: 30px;
            text-align: center;
        }
        .registration-form .form-control {
            height: 50px;
            margin-bottom: 15px;
            background-color: #F4F5F8;
            border: none;
        }
        .registration-form .btn-primary {
            background-color: #75564d;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            margin-top: 20px;
        }
        .registration-form .btn-primary:hover {
            background-color: #5e493c;
        }
        .alert {
            max-width: 800px;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="registration-form">
                <h1 class="display-4 text-uppercase">Modifier Voiture</h1>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success text-center"><?php echo e(session('success')); ?></div>
                    <?php elseif(session('error')): ?>
                        <div class="alert alert-danger text-center"><?php echo e(session('error')); ?></div>
                    <?php endif; ?>
                 <form method="POST" action="<?php echo e(route('cars.update', $car->Matricule)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Matricule" name="Matricule" value="<?php echo e(old('Matricule', $car->Matricule)); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" name="couleur" required>
                                <option value="<?php echo e(old('couleur', $car->couleur)); ?>"><?php echo e(old('couleur', $car->couleur)); ?></option>
                                <option value="Bleu">Bleu</option>
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Black">Black</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" name="prix" class="form-control" placeholder="Prix" value="<?php echo e(old('prix', $car->prix)); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                           <input type="text" name="Model" class="form-control" placeholder="Model" value="<?php echo e(old('Model', $car->modele)); ?>" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control" name="marque" required>
                            <option value="<?php echo e(old('marque', $car->marque)); ?>"><?php echo e(old('marque', $car->marque)); ?></option>
                            <option value="Toyota">Toyota</option>
                            <option value="Renault">Renault</option>
                            <option value="BMW">BMW</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Honda">Honda</option>
                            <option value="Audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="form-group mb-3 text-center">
                        <input type="submit" class="btn btn-primary px-5" value="Modifier" name="modifier">
                    </div>
                    <div class="form-group mb-3 text-center">
                        <p><a href="acceuil.php">Tableau de bord</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/Admin/editCar.blade.php ENDPATH**/ ?>