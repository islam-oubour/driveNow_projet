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
    <title>JURY - SEMESTRE - <?php echo e($info['semestre']); ?> - <?php echo e($info['filiere']); ?> - MOD</title>
    <style>
        td {
            color: black !important;
        }

        @media  print {
            a[href]:after {
                content: none !important;
            }
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

        .col-bg {
            background-color: #ebebeb !important;
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

        .b-none {
            border: none !important;
        }
    </style>
</head>

<body onload="">

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
            <h1>JURY DE <strong>SEMESTRE</strong>
            </h1>
            <h2>SEMESTRE : <strong><?php echo e($info['semestre']); ?></strong> <br>
                <?php if($info['semestre'] == 'S5' || $info['semestre'] == 'S6'): ?>
                    <?php if($info['semestre'] == 'S5'): ?>
                        FILIERE : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION
                        :<strong><?php echo e(strtoupper(fst_session())); ?></strong>
                    <?php else: ?>
                        OPTION : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION
                        :<strong><?php echo e(strtoupper(fst_session())); ?></strong>
                    <?php endif; ?>
                <?php else: ?>
                    PARCOURS : <strong><?php echo e($info['filiere']); ?></strong> <br> SESSION :
                    <strong><?php echo e(strtoupper(fst_session())); ?></strong>
                <?php endif; ?>
                <br> ANNE UNIVERSITAIRE : <strong><?php echo e(fst_au()); ?></strong>
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
                        <thead>
                            <tr>
                                <th>Prof.</th>
                                <th>Module</th>
                                <th>Emargement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i = 0; $i < count($info['membres'])/2; $i++): ?>
                                <tr>
                                    <td><?php echo e($info['membres'][$i]['nom']); ?></td>
                                    <td><small><?php echo e($info['membres'][$i]['code_module']); ?></small> <br> <?php echo e($info['membres'][$i]['designation_module']); ?></td>
                                    <td></td>
                                </tr>
                            <?php endfor; ?>

                        </tbody>
                    </table>
                </div><!-- End of .col -->
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Prof.</th>
                                <th>Module</th>
                                <th>Emargement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i = count($info['membres'])/2; $i < count($info['membres']); $i++): ?>
                                <tr>
                                    <td><?php echo e($info['membres'][$i]['nom']); ?></td>
                                    <td><small><?php echo e($info['membres'][$i]['code_module']); ?></small> <br> <?php echo e($info['membres'][$i]['designation_module']); ?></td>
                                    <td></td>
                                </tr>
                            <?php endfor; ?>

                        </tbody>
                    </table>
                </div><!-- End of .col -->
            </div><!-- End of .row -->
        </div><!-- End of .s -->
    <?php endif; ?>

    <div class="text-center mt-3">
        <p>Liste des étudiants classés par ordre de mérite
            Résultat (Admis, Ajourné) et moyenne (décroissante).</p>
    </div><!-- End of .text-center -->
    <table id="liste" class="table table-bordered" style="width:100%">
        <thead style="background-color: #646464;">
            <tr>
                <th class="w-lg">Etudiant</th>
                <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th class="w-sm"><?php echo e($module); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th class="w-xs">Moy</th>
                <th class="w-xs">MV</th>
                <th class="w-xs">Rés</th>
                <th colspan="3">Signature</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php $__currentLoopData = $data['listeAD']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item['demande'] == 0): ?>
                    <tr>
                        <td class="w-lg" rowspan="2"><strong><small><?php echo e($counter); ?> -
                                    <?php echo e($item['CNE']); ?> </small>
                            </strong><br> <?php echo e($item['Nom']); ?> </td>
                        <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                            <?php else: ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td align="center" class="w-xs" rowspan="2"><?php echo e($item['Moy']); ?></td>
                        <td align="center" class="w-xs" rowspan="2"><small>V : <?php echo e($item['V']); ?> <br>R :
                                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
                        <td align="center" class="w-xs" rowspan="2"><?php echo e($item['Res']); ?></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr class="col-bg">
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                                    <?php echo e($item['CNE']); ?> </small>
                            </strong><br> <?php echo e($item['Nom']); ?> </td>
                        <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                            <?php else: ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td align="center" class="w-xs"><?php echo e($item['Moy']); ?></td>
                        <td align="center" class="w-xs"><small>V : <?php echo e($item['V']); ?> <br>R :
                                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
                        <td align="center" class="w-xs"><?php echo e($item['Res']); ?></td>
                        <td align="center" colspan="3">* L'étudiant a deposé une demande de non compensation et/ou
                            non rachttage</td>
                    </tr>
                <?php endif; ?>

                <?php $counter = $counter + 1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $data['listeAJ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item['demande'] == 0): ?>
                    <tr>
                        <td class="w-lg" rowspan="2"><strong><small><?php echo e($counter); ?> -
                                    <?php echo e($item['CNE']); ?> </small>
                            </strong><br> <?php echo e($item['Nom']); ?> </td>
                        <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                            <?php else: ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td align="center" class="w-xs" rowspan="2"><?php echo e($item['Moy']); ?></td>
                        <td align="center" class="w-xs" rowspan="2"><small>V : <?php echo e($item['V']); ?> <br>R :
                                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
                        <td align="center" class="w-xs" rowspan="2"><?php echo e($item['Res']); ?></td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr class="col-bg">
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center">________</td>
                        <td align="center"></td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td class="w-lg"><strong><small><?php echo e($counter); ?> -
                                    <?php echo e($item['CNE']); ?> </small>
                            </strong><br> <?php echo e($item['Nom']); ?> </td>
                        <?php $__currentLoopData = $data['modules']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(fst_demande_module($item['CNE'], $module) == true): ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?>*</td>
                            <?php else: ?>
                                <td align="center" class="w-sm"><?php echo e($item[$module]); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td align="center" class="w-xs"><?php echo e($item['Moy']); ?></td>
                        <td align="center" class="w-xs"><small>V : <?php echo e($item['V']); ?> <br>R :
                                <?php echo e($item['R']); ?> <br>N : <?php echo e($item['N']); ?></small></td>
                        <td align="center" class="w-xs"><?php echo e($item['Res']); ?></td>
                        <td align="center" colspan="3">* L'étudiant a deposé une demande de non compensation et/ou
                            non rachttage</td>
                    </tr>
                <?php endif; ?>

                <?php $counter = $counter + 1; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
        
    </table>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/PDF/deliberation_semestre.blade.php ENDPATH**/ ?>