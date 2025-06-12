<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link href="<?php echo e(asset('/dist/css/tabler.min.css?1684106062')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/css/custom.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('/dist/js/tabler.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\STARTING_APP_V2\website\resources\views/lt/app.blade.php ENDPATH**/ ?>