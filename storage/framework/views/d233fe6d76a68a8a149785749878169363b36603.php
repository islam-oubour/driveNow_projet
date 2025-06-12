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
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Connexion</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/notyf.min.css" rel="stylesheet" />
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet"/>
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
  <body  class=" d-flex flex-column">
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
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./dist/img/logo.png" height="60" alt=""></a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 mb-4">Connexion</h2>
            <form action="<?php echo e(route('home')); ?>" method="get" autocomplete="off">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">MASSAR/CNE</label>
                    <input type="text" name="CNE" class="form-control" placeholder="M13XXXXXXX" autocomplete="on">
                  </div>  
                </div><!-- End of .col -->  
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">CIN</label>
                    <input type="text" name="CIN" class="form-control" placeholder="U19XXXX" autocomplete="on">
                  </div>  
                </div><!-- End of .col -->  
              </div><!-- End of .row -->
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Date de naissance</label>
                    <input type="date" name="DN" class="form-control"  autocomplete="on">
                  </div>  
                </div><!-- End of .col -->  
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Année de bac</label>
                    <input type="text" name="AB" class="form-control" placeholder="2017" autocomplete="on">
                  </div>  
                </div><!-- End of .col -->  
              </div><!-- End of .row -->
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Connexion</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1684106062" defer></script>
    <script src="./dist/js/demo.min.js?1684106062" defer></script>
  </body>
</html><?php /**PATH /home/fste-umi/public_html/services/affichage/website/resources/views/login.blade.php ENDPATH**/ ?>