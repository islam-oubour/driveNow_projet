<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>">
    <!-- Libs CSS -->
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <title>ETAT - ADMIS - <?php echo e($info['tronc']); ?> - <?php echo e($info['au']); ?> - <?php echo e($info['session']); ?></title>
    <style>
        body {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
        td {
            color: black !important;
        }
        .page-break {
            page-break-after: always;
        }
        td,
        tr,
        th,
        thead,
        tfoot,
        tbody {
            border: .2px solid rgb(99, 99, 99) !important;
        }

        #liste th {
            color: white !important;
        }

        #info td,
        #info tr,
        #info tbody {
            border: none !important;
        }

        td,
        th {
            vertical-align: middle !important;
            padding: 1px !important;
        }

        #liste td,
        #liste th {
            font-size: 8px !important;
        }

        .b-none {
            border: none !important;
        }

        .w-xs {
            width: 40px !important;
        }

        .w-xs {
            width: 40px !important;
        }

        .w-sm {
            width: 60px !important;
        }

        .w-lg {
            width: 150px !important;
        }
        .col-bg {
            background-color: #ebebeb !important;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="first-page">
        <table id="info" style="width: 100%">
            <tr>
                <td>
                    <img height="70" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="">
                    
                </td>
                <td align="right">
                </td>
            </tr>
        </table>

        <div class="info text-left my-5" style="width: 100%; margin-top: 120px !important;">
            <h1 class="text-center">ETAT DES ADMIS <strong>DEUST</strong>
            </h1>
            <p class="text-center">(Aprés les déliberations)</p>
            <h2 class="text-center">
                SESSION : <strong><?php echo e($info['session']); ?></strong> // A.U. : <strong><?php echo e($info['au']); ?></strong> <br>
                PARCOURS : <strong><?php echo e($info['tronc']); ?></strong> <br> 
            </h2>
        </div><!-- End of .info -->
    </div><!-- End of .page-break -->
    <div class="text-center">
        <p>Liste des étudiants classés par ordre alphabétique.</p>
    </div><!-- End of .text-center -->
    <table id="liste" class="table table-bordered" style="width:100%">
        <thead style="background-color: #646464;">
            <tr>
                <th class="w-lg" rowspan="2">Etudiant</th>
                <th class="w-lg text-center" colspan="8">S1</th>
                <th class="w-lg text-center" colspan="8">S2</th>
                <th class="w-lg text-center" colspan="8">S3</th>
                <th class="w-lg text-center" colspan="8">S4</th>
                <th class="w-lg text-center" colspan="2">Res</th>
            
            </tr>
            <tr>
                
                <?php $__currentLoopData = $modules['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white text-center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white text-center">Moy</td>
                <td class="w-xs text-white text-center">Rés</td>

                
                <?php $__currentLoopData = $modules['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white text-center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white text-center">Moy</td>
                <td class="w-xs text-white text-center">Rés</td>

                
                <?php $__currentLoopData = $modules['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white text-center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white text-center">Moy</td>
                <td class="w-xs text-white text-center">Rés</td>

                
                <?php $__currentLoopData = $modules['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white text-center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white text-center">Moy</td>
                <td class="w-xs text-white text-center">Rés</td>

                
                <td class="w-xs text-white text-center">Moy</td>
                <td class="w-xs text-white text-center">Rés</td>


            </tr>
        </thead>
        <tbody>
            <?php echo $__env->make('exportation/DEUST_liste_demo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tbody>
        <tfoot style="background-color: #646464;color: white">

            <tr>
                <th class="w-lg" rowspan="2">Etudiant</th>

                
                <?php $__currentLoopData = $modules['S1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="w-sm text-center"><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th class="w-xs text-center">Moy</th>
                <th class="w-xs text-center">Rés</th>

                
                <?php $__currentLoopData = $modules['S2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="w-sm text-center"><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th class="w-xs text-center">Moy</th>
                <th class="w-xs text-center">Rés</th>

                
                <?php $__currentLoopData = $modules['S3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="w-sm text-center"><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th class="w-xs text-center">Moy</th>
                <th class="w-xs text-center">Rés</th>

                
                <?php $__currentLoopData = $modules['S4']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="w-sm text-center"><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th class="w-xs text-center">Moy</th>
                <th class="w-xs text-center">Rés</th>

                
                <th class="w-xs text-center">Moy</th>
                <th class="w-xs text-center">Rés</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/exportation/etat_admis_DEUST.blade.php ENDPATH**/ ?>