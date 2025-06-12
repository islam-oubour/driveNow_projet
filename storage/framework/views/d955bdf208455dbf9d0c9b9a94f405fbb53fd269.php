<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php echo e(env('APP_NAME')); ?> - <?php echo $__env->yieldContent('page-title'); ?></title>
  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet" />
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

<body>
  <!-- <script src="./dist/js/demo-theme.min.js?1684106062"></script> -->
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href=".">
            HELLO
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
              aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./dist/img/avatar.png)"></span>
              <div class="d-none d-xl-block ps-2">
                
                <div class="mt-1 small text-muted">MIP</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php echo $__env->make('Components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-wrapper">
      <div class="page-header d-print-none">
        <?php echo $__env->yieldContent('page-header'); ?>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <?php echo $__env->yieldContent('page-body'); ?>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl text-center">
            Faculté des Sciences et Techniques, Errachidia <br>
            ORIENTATION V1.0 © 2023 
        </div>
      </footer>
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js?1684106062" defer></script>
  <script src="./dist/js/app.js"></script>
</body>

</html><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\STARTING_APP_V2\website\resources\views/layouts/app.blade.php ENDPATH**/ ?>