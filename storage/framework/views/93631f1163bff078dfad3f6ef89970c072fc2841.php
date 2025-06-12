<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet_driveNow</title>
    <link href="<?php echo e(asset('img/favicon.ico')); ?>" rel="icon">
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
        
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="registration-form bg-light" style="box-shadow: 5px 10px 10px rgba(0,0,0,0.1);">
            <h2 class="display-4 text-uppercase text-center mb-5">Payment</h2>
            <form method="POST" action="<?php echo e(route('paiement.store')); ?>">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="id_location" value="<?php echo e(request('id_location')); ?>">

                <div class="form-group">
                    <input type="number" class="form-control p-4" name="montant" placeholder="Amount" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control p-4" name="mode_paiement" placeholder="Payment method" required>
                </div>

                <div>
                    <button class="btn py-3 px-5 text-light" type="submit" style="background-color: #75564d;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/addpayments.blade.php ENDPATH**/ ?>