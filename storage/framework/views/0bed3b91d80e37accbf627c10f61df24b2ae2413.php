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
    <title>JURY - SEMESTRE - <?php echo e($info['semestre']); ?> - <?php echo e($info['filiere']); ?> - AFF</title>
    <style>
        @media  print {
            a[href]:after {
                content: none !important;
            }
        }
        td {
            color: black !important;
        }
        body {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        td,
        tr,
        th,
        thead,
        tfoot,
        tbody {
            border: 1px solid black !important;
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
            padding: 5px !important;
        }

        #liste td,
        #liste th {
            font-size: 12px !important;
        }

        #liste tr:nth-child(even) {
            background-color: #ebebeb !important;
        }

        .w-120 {
            width: 120px !important;
        }

        .w-60 {
            width: 40px !important;
        }
        .w-70 {
            width: 105px !important;
        }
        .w-150 {
            width: 150px !important;
        }

        .col-bg {
            background-color: #a7a7a7 !important;
        }

        .b-none {
            border: none !important;
        }

        .capitalize {
            text-transform: capitalize !important;
        }
    </style>
</head>

<body onload="">
    <table id="info" style="width: 100%">
        <tr>
            <td>
                <img height="70" src="https://www.fste-umi.ac.ma/fst/gestion_listes/assets/img/logo.png"
                    alt="">
            </td>
            <td align="right">

                <div class="info text-left my-5" style="width: fit-content">
                    <h3>JURY DE <strong>SEMESTRE ● <?php echo e($info['semestre']); ?> ● <?php echo e(fst_small_au(fst_au())); ?></strong></h3>
                    <?php if($info['semestre'] == 'S5' || $info['semestre'] == 'S6'): ?>
                        <?php if($info['semestre'] == 'S5'): ?>
                            <h4>FILIERE : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION
                                :<strong><?php echo e(strtoupper(fst_session())); ?></strong>
                            <?php else: ?>
                                <h4>OPTION : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION
                                    :<strong><?php echo e(strtoupper(fst_session())); ?></strong>
                        <?php endif; ?>
                    <?php else: ?>
                        <h4>PARCOURS : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION : <strong><?php echo e(strtoupper(fst_session())); ?></strong>
                    <?php endif; ?>
                    </h4>

                </div><!-- End of .info -->

            </td>
        </tr>
    </table>
    <table id="hd" class="b-none" style="width: 100%;font-size: 10px !important">
        <tbody class="b-none">
            <tr class="b-none">
                <td class="b-none">
                    <table style="width: 100%">
                        <tr>
                            <td>Local</td>
                            <td><strong><?php echo e($info['local']); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Date et Heure</td>
                            <td><strong><?php echo e(date('d/m/Y - H:i:s', strtotime($info['date']))); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Président</td>
                            <td><strong><?php echo e($info['president']); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Signature</td>
                            <td class="p-0">

                                <table class="b-none" style="visibility: hidden !important">
                                    <tbody class="b-none" style="border-bottom: 1px solid black !important">
                                        <tr class="b-none">
                                            <td class="b-none">x</td>
                                        </tr>
                                        <tr class="b-none">
                                            <td class="b-none">x</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="b-none">
                    <table style="width: 100%">
                        <tr>
                            <td>Admis</td>
                            <td><strong><?php echo e(count($data['listeAD'])); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Admis par compensation</td>
                            <td><strong>-</strong></td>
                        </tr>
                        <tr>
                            <td>Total admis</td>
                            <td><strong><?php echo e(count($data['listeAD'])); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Ajourné</td>
                            <td><strong><?php echo e(count($data['listeAJ'])); ?></strong></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><strong><?php echo e(count($data['listeAD']) + count($data['listeAJ'])); ?></strong></td>
                        </tr>
                    </table>
                </td>

            </tr>
        </tbody>
    </table>
    <div class="text-center mt-3">
        <p>Liste des étudiants classés par ordre de mérite
            Résultat (Admis, Ajourné) et moyenne (décroissante).</p>
    </div><!-- End of .text-center -->
    <table id="liste" class="table table-striped table-bordered" style="width:100%">
        <thead style="background-color: #646464;">
            <tr>
                <th>CNE</th>
                <th>Nom</th>
                <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th>SM</th>
                <th>Moy</th>
                <th>Rés</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php $__currentLoopData = $data['listeAD']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class=""><strong><small><?php echo e($counter); ?> - <?php echo e($item['CNE']); ?></small></td>
                    <td class=" capitalize"><small><?php echo e(strtolower($item['Nom'])); ?></small></td>
                    <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td align="center" class="w-60"><?php echo e($item[$module]); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <td align="center" class="w-70"><small>V : <?php echo e($item['V']); ?> | R :
                            <?php echo e($item['R']); ?> | N : <?php echo e($item['N']); ?></small></td>
                    <td align="center" class=""><?php echo e($item['Moy']); ?></td>
                    <td align="center" class=""><?php echo e($item['Res']); ?></td>
                </tr>
                <?php $counter = $counter + 1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $data['listeAJ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class=""><strong><small><?php echo e($counter); ?> - <?php echo e($item['CNE']); ?></small></td>
                <td class=" capitalize"><small><?php echo e(strtolower($item['Nom'])); ?></small></td>
                <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td align="center" class="w-60"><?php echo e($item[$module]); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td align="center" class="w-70"><small>V : <?php echo e($item['V']); ?> | R :
                        <?php echo e($item['R']); ?> | N : <?php echo e($item['N']); ?></small></td>
                <td align="center" class=""><?php echo e($item['Moy']); ?></td>
                <td align="center" class=""><?php echo e($item['Res']); ?></td>
            </tr>
                <?php $counter = $counter + 1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
    </table>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/PDF/deliberation_semestre_demo.blade.php ENDPATH**/ ?>