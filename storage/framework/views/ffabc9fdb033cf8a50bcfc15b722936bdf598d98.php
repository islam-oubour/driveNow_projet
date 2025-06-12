<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version  1.0.0-beta19
* @link  https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="./dist/css/notyf.min.css" rel="stylesheet" />
    <style>
        @import  url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="./dist/js/notyf.min.js"></script>
    <?php if($errors->any()): ?>
        <script>
            var notyf = new Notyf({
                duration: 10000,
                position: {
                    x: 'right',
                    y: 'top',
                }
            });
            notyf.error('<?php echo e($errors->first()); ?>');
        </script>
    <?php endif; ?>


    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="./dist/img/logo.png"
                        height="60" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 mb-4">Connectez-vous à votre compte</h2>
                    <form action="<?php echo e(route('login.submit')); ?>" method="post" autocomplete="off">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control <?php echo e($errors->any() ? 'is-invalid' : ''); ?>"
                                        name="email" placeholder="M13XXXXXXX" autocomplete="on">
                                </div>
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control <?php echo e($errors->any() ? 'is-invalid' : ''); ?>"
                                        name="password" autocomplete="on">
                                </div>
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input">
                                        <span class="form-check-label">Remember me on this device</span>
                                    </label>
                                </div>
                            </div><!-- End of .col -->
                        </div><!-- End of .row -->
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Connexion</button>
                        </div>
                    </form>
                </div>
              </div>
              <div class="text-center text-secondary mt-3">
                  Don't have account yet? <a href="<?php echo e(route('register')); ?>" tabindex="-1">Register</a>
              </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\STARTING_APP_V2\website\resources\views/Auth/login.blade.php ENDPATH**/ ?>