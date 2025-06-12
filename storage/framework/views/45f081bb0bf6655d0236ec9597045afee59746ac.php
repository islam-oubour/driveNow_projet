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
    <title>JURY - LST - <?php echo e($option['id']); ?> - MOD</title>
    <style>
        td {
            color: black !important;
        }
        body {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
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
        th, thead td, tfoot td{
            border: 1px solid white !important;
        }
        .members-table td{
            padding: 5px !important;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="page-break first-page">
        <table id="info" style="width: 100%">
            <tr>
                <td>
                    <img height="70" src="https://www.fste-umi.ac.ma/fst/gestion_listes/assets/img/logo.png"
                        alt="">
                </td>
                <td align="right">
                </td>
            </tr>
        </table>

        <div class="info text-left my-5" style="width: 100%; margin-top: 120px !important;">
            <h1>JURY DE <strong>FILIERE</strong>
            </h1>
            <h2>
                    FILIERE : <strong><?php echo e($option['id_filiere']); ?> - <?php echo e($option['filiere']); ?></strong> <br> 
                    OPTION : <strong><?php echo e($option['id']); ?> - <?php echo e($option['intitule']); ?></strong> <br> 
                    SESSION : <strong><?php echo e(strtoupper(fst_session())); ?></strong>
                <br> A.U. : <strong><?php echo e(fst_au()); ?></strong>
            </h2>
        </div><!-- End of .info -->

        <table id="hd" class="b-none" style="width: 100%;font-size: 12px !important">
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
                        <table  style="width: 100%">
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
    </div><!-- End of .page-break -->

    <?php if(count($info['membres']) > 0): ?>
        <div class="page-break first-page" style="margin-top: 100px !important;font-size: 12px !important">
            <div class="text-center">
                Membres de jury
            </div><!-- End of .text-center -->
            <br>
            <div class="row">
                <div class="col">
                    <table class="table">
                            <tr>
                                <td>Prof.</td>
                                <td>Module</td>
                                <td>Emargement</td>
                            </tr>
                            <?php for($i = 0; $i < count($info['membres'])/2; $i++): ?>
                                <tr>
                                    <td><?php echo e($info['membres'][$i]['nom']); ?></td>
                                    <td><small><?php echo e($info['membres'][$i]['code_module']); ?></small> <br> <?php echo e($info['membres'][$i]['designation_module']); ?></td>
                                    <td></td>
                                </tr>
                            <?php endfor; ?>
                    </table>
                </div><!-- End of .col -->
                <div class="col">
                    <table class="table">
                            <tr>
                                <td>Prof.</td>
                                <td>Module</td>
                                <td>Emargement</td>
                            </tr>

                        
                            <?php for($i = count($info['membres'])/2; $i < count($info['membres']); $i++): ?>
                                <tr>
                                    <td><?php echo e($info['membres'][$i]['nom']); ?></td>
                                    <td><small><?php echo e($info['membres'][$i]['code_module']); ?></small> <br> <?php echo e($info['membres'][$i]['designation_module']); ?></td>
                                    <td></td>
                                </tr>
                            <?php endfor; ?>

        
                    </table>
                </div><!-- End of .col -->
            </div><!-- End of .row -->
        </div><!-- End of .s -->
    <?php endif; ?>

    <div class="text-center">
        <p>Liste des étudiants classés par ordre de mérite
            Résultat (Admis, Ajourné) et moyenne (décroissante).</p>
    </div><!-- End of .text-center -->
    <table id="liste" class="table table-bordered" style="width:100%">
        <thead style="background-color: #646464;">
            <tr>
                <th class="w-lg" rowspan="3">Etudiant</th>
                <th class="w-lg" align="center" colspan="9">S5</th>
                <th class="w-lg" align="center" colspan="7">S6</th>
                <th class="w-lg" align="center" colspan="5">Res</th>
                <th class="" align="center" colspan="3" rowspan="3">Signature</th>
            </tr>
            <tr>
                
                <?php $__currentLoopData = $data['modules']['S5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td rowspan="2" class="w-sm text-white" align="center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td rowspan="2" class="w-xs text-white" align="center">Moy</td>
                <td rowspan="2" class="w-xs text-white" align="center">MV</td>
                <td rowspan="2" class="w-xs text-white" align="center">Rés</td>

                
                <?php $__currentLoopData = $data['modules']['S6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td rowspan="2" class="w-sm text-white" align="center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td rowspan="2" class="w-xs text-white" align="center">Moy</td>
                <td rowspan="2" class="w-xs text-white" align="center">MV</td>
                <td rowspan="2" class="w-xs text-white" align="center">Rés</td>


                
                <td colspan="3" class="w-xs text-white" align="center">Moy</td>
                <td rowspan="2" class="w-xs text-white" align="center">MV</td>
                <td rowspan="2" class="w-xs text-white" align="center">Rés</td>
            </tr>
            <tr>
                <td class="w-xs text-white"  align="center">DEUST</td>
                <td class="w-xs text-white"  align="center">S5/S6</td>
                <td class="w-xs text-white"  align="center">LST</td>
            </tr>
        </thead>
        <tbody>
            <?php echo $__env->make('deliberation/PDF/components/LST_liste', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </tbody>
        <tfoot style="background-color: #646464;color: white">

            <tr>
                <td class="w-sm text-white">Etudiant</td>
                
                <?php $__currentLoopData = $data['modules']['S5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white" align="center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white" align="center">Moy</td>
                <td class="w-xs text-white" align="center">MV</td>
                <td class="w-xs text-white" align="center">Rés</td>

                
                <?php $__currentLoopData = $data['modules']['S6']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="w-sm text-white" align="center"><?php echo e($module); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="w-xs text-white" align="center">Moy</td>
                <td class="w-xs text-white" align="center">MV</td>
                <td class="w-xs text-white" align="center">Rés</td>


                
                <td colspan="3" align="center" class="w-xs text-white">Moy</td>
                <td class="w-xs text-white" align="center">MV</td>
                <td class="w-xs text-white" align="center">Rés</td>
                <td class="text-white"  colspan="3">Signature</td>

            </tr>
        </tfoot>
    </table>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/PDF/deliberation_LST.blade.php ENDPATH**/ ?>