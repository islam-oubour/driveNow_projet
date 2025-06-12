<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/auth-favicon.ico')); ?>">
    <title>Connexion</title>
</head>

<body>
    <main>

        <!-- Section -->
        <section style="height: 100vh; background-image: url(<?php echo e(asset('/assets/img/pattern.jpg')); ?>)" class="vh-lg-100 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image">
                    <div class="col-12 d-flex align-items-center justify-content-center" style="flex-direction: column">
                        <div class="text-center">
                            <div class="fste-logo py-3 mb-4">
                                <img height="70"  src="<?php echo e(asset('/assets/img/logo.png')); ?>" alt="">    

                            </div><!-- End of .fste-logo -->
                            <?php if($errors->any()): ?>
                            <div class="alert mb-4  alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e($errors->first()); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div style="border-top: #007fa4 5px solid !important;height:410px ; background-image: url(<?php echo e(asset('/assets/img/bg.png')); ?>)" class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">

                            <form action="<?php echo e(route('user.login')); ?>" method="POST" class="mt-4">
                                <?php echo csrf_field(); ?>
                                <h3>Connexion</h3>
                                <!-- Form -->
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Nom d'utilisateur</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"></path>
                                                  </svg>
                                            </span>
                                            <input type="text" placeholder="Nom d'utilisateur" class="form-control"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password">Mot de passe</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                                  </svg>
                                            </span>
                                            <input type="password" placeholder="Mot de passe" name="password" class="form-control"

                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="<?php echo e(asset('/assets/js/main.min.js')); ?>"></script>
</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\gestion_sim\website\resources\views/auth/login.blade.php ENDPATH**/ ?>