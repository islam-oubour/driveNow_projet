<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>test</title>
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

<body>
    <?php $count = 0;?>
    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++ ?>
        <div class="container <?php echo e(count($members) - 1 >= $count ? 'page-break' : ''); ?>">
            <table>
                <tr>
                    <td>
                        <img height="70" src="https://www.fste-umi.ac.ma/fst/docs/assets/img/logo.png" alt="">
                    </td>
                    <td>
                        <div class="info">
                            <?php if($member['Semestre'] < 'S5'): ?>
                                    Parcours : <strong><?php echo e($member['TFO']); ?></strong> <br>
                            <?php else: ?>
                                <?php if($member['Semestre'] == 'S5'): ?>
                                    Filiere : <strong><?php echo e($member['TFO']); ?></strong> <br>
                                <?php else: ?>
                                    Option : <strong><?php echo e($member['TFO']); ?></strong> <br>
                                <?php endif; ?>
                            <?php endif; ?>
                            A.U. : <strong><?php echo e(fst_au()); ?></strong> <br>
                            Session : <strong><?php echo e(fst_session()); ?></strong>
                        </div><!-- End of .x -->
                    </td>
                </tr>
            </table>
            <h2 class="title">convocation pour les <br> jurys de semestre - <?php echo e($member['Semestre']); ?></h2>
            <h3 style="text-transform: uppercase">Pr. <?php echo e($member['Nom']); ?>

                <?php echo e($member['President'] == 1 ? '(Président de jury)' : ''); ?></h3> <br>
            <i>Le doyen de la FSTE a l'honneur de vous informer que vous êtes conviés pour les jurys de semestre ci-dessous :</i>

            <table id="table_jury" style="margin-top: 50px">
                <tr>
                    <td>
                        Jury <br>
                        <strong><?php echo e($member['Semestre']); ?></strong>

                    </td>
                    <td>
                        Module <br>
                        <strong><?php echo e($member['Module']); ?></strong>
                    </td>
                    </td>
                    <td>
                        Résponsable <br>
                        <strong>Oui</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"> <br></td>
                </tr>
                <tr>
                    <td>
                        Date <br>
                        <strong><?php echo e(date('d/m/Y', strtotime($info['date']))); ?></strong>

                    </td>
                    <td>
                        Heure <br>
                        <strong><?php echo e(date('H:i', strtotime($info['date']))); ?></strong>
                    </td>
                    </td>
                    <td>
                        Local <br>
                        <strong><?php echo e($member['Local']); ?></strong>
                    </td>
                </tr>
            </table>
            <table style="margin-top: 80px">
                <tr>
                    <td colspan="3" align="right"> <br> Errachidia, le <strong><?php echo e(date('d/m/Y')); ?></strong> </td>
                </tr>
            </table>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/convocations/conv_semestre.blade.php ENDPATH**/ ?>