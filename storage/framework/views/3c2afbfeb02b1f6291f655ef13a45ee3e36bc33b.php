<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>CHEMISES</title>
    <style>
        body {
            font-size: 22px;
        }

        .page-break {
            page-break-after: always;
        }

        table {
            width: 100% !important;
        }

        .title {
            text-align: center;
            text-decoration: underline;
            text-transform: uppercase;
            margin: 90px 0;
        }

        .info {
            display: table;
            width: fit-content !important;
            margin-left: auto;
        }

        #table_jury strong {
            font-size: 28px;
            margin-top: 30px
        }
    </style>
</head>

<body style="margin: 50px" onload="window.print()">
    <?php $count = 0;?>
    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++ ?>
        <div class="container <?php echo e(count($modules) - 1 >= $count ? 'page-break' : ''); ?>">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="font-size: 100px;margin: 0;"><?php echo e($module->id_module); ?></h1>
                <h2 style="margin: 0; text-transform: uppercase; text-align: right"><?php echo e(fst_session()); ?> <br> <?php echo e(fst_au()); ?></h2>

            </div>
            <h3 style="margin: 0; text-transform: uppercase;"><?php echo e($module->designation); ?></h3>
            <div style="margin-bottom: 60px"></div>

            <?php if(count(responsable_module($module->id_module)) > 0): ?>
                <?php $__currentLoopData = responsable_module($module->id_module); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h2 style="margin: 0; text-transform: uppercase;">Pr. <?php echo e($responsable->nom); ?></h2>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/exportation/PDF/chemises.blade.php ENDPATH**/ ?>