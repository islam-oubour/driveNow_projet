<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>projet_driveNow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
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
            box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);
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
            <div class="registration-form bg-light">
                <h1 class="display-4 text-uppercase text-center mb-5">Create Your Account</h1>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success text-center">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <form method="POST" action="<?php echo e(route('createAccount')); ?>">
                 <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" name="cinUtilisateur" class="form-control" placeholder=" National ID (CIN)" value="<?php echo e(old('cinUtilisateur')); ?>" required>
                         </div>
                        <div class="col-md-6">
                           <input type="text" name="nomUtilisateur" class="form-control" placeholder="Last Name" value="<?php echo e(old('nomUtilisateur')); ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="text" name="prenomUtilisateur" class="form-control" placeholder="First Name" value="<?php echo e(old('prenomUtilisateur')); ?>" required>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="adresseUtilisateur" class="form-control" placeholder="Address" value="<?php echo e(old('adresseUtilisateur')); ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="text" name="villeUtilisateur" class="form-control" placeholder="City" value="<?php echo e(old('villeUtilisateur')); ?>" required>
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="telUtilisateur" class="form-control" placeholder="Phone Number" value="<?php echo e(old('telUtilisateur')); ?>" required>
                       </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                           <input type="password" name="passwordUtilisateur" class="form-control" placeholder="Password" required minlength="8">
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="loginUtilisateur" class="form-control" placeholder="Login Utilisateur" value="<?php echo e(old('loginUtilisateur')); ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="password" name="passwordUtilisateur_confirmation" class="form-control" placeholder="Confirm Password" required minlength="8">
                        </div>
                        <div class="col-md-6" >
                            <select name="typeUtilisateur" class="form-control" required>
                                <option value="" disabled selected>Type Utilisateur</option>
                                <option value="Personal" <?php echo e(old('typeUtilisateur') == 'Personal' ? 'selected' : ''); ?>>Personal</option>
                                <option value="Business" <?php echo e(old('typeUtilisateur') == 'Business' ? 'selected' : ''); ?>>Busines</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">I agree to the <a href="#">Terms and Conditions</a></label>
                    </div>
                    <input type="submit" name="createAccount" value="Create Account" class="btn btn-primary">
                    <p class="text-center mt-3">Already have an account? <a href="<?php echo e(route('login.client')); ?>">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/front/signUp.blade.php ENDPATH**/ ?>