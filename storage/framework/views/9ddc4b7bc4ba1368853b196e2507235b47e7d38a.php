<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.min.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/auth-favicon.ico')); ?>">
    <title>Connexion</title>
</head>

<body>
    <div class="row m-0" style="width: 100%; height: 100vh;">
      <div class="col-12 col-md-6 col-lg-4 p-4">
        <div class="d-flex flex-row align-items-center" style="height: 100%;">
            <div class="col">
                <div class="text-center mb-5">
                    <img class="mb-3" height="60" src="<?php echo e(asset('/assets/images/logo.png')); ?>">
                </div><!-- End of .text-center -->
                <?php if($errors->any()): ?>
                    <div class="alert mb-4  alert-danger alert-dismissible fade show" role="alert">
                        <?php echo e($errors->first()); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <h3 class="my-3 text-dark">Connexion</h3>
                <form action="<?php echo e(route('user.login')); ?>" method="POST" class="my-4">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input name="email" type="text" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="floatingPassword"
                            placeholder="Mot de passe">
                        <label for="floatingPassword">Mot de passe</label>
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </div><!-- End of .text-end -->
                </form>
                <div class="copyright text-center mt-5">
                    <span> FSTE &copy; <?php echo e(date('Y')); ?></span>
                </div>
            </div><!-- End of .col -->
        </div><!-- End of .row -->
    </div><!-- End of .col -->
        <div class="col-12 col-md-6 col-lg-8 p-0 login-image d-none d-md-block">
            <img style="height: 100%; object-fit: cover;" src="<?php echo e(asset('/assets/images/door.jpg')); ?>"
                class="img-fluid">
        </div><!-- End of .col -->

    </div><!-- End of .row -->
    <script src="<?php echo e(asset('/assets/js/main.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/auth/login.blade.php ENDPATH**/ ?>