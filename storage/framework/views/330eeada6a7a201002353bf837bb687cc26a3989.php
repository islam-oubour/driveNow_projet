<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>test</title>
    <style>
        body {
            font-size: 16px;
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
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++ ?>
        <div class="container <?php echo e(count($data) - 1 >= $count ? 'page-break' : ''); ?>">
            <table>
                <tr>
                    <td>
                        <img height="70" src="https://www.fste-umi.ac.ma/fst/docs/assets/img/logo.png" alt="">
                    </td>
                    <td>
                        <div class="info">
                            Tronc : <strong><?php echo e($key); ?></strong> <br>
                            A.U. : <strong><?php echo e(fst_au()); ?></strong> <br>
                            Session : <strong><?php echo e(fst_session()); ?></strong>
                        </div><!-- End of .x -->
                    </td>
                </tr>
            </table>
            <div class="title" style="margin-top: 40px">
                <h3>Liste des etudiants admis <br> DEUST - <?php echo e($key); ?> </h3>  
                <small>(Liste par ordre alphabétique)</small>   
            </div><!-- End of .title -->
            <table border="1" style="margin-top: 40px ">
                <thead>
                    <th>N°</th>
                    <th>CNE</th>
                    <th>Nom</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($etudiant->id); ?></td>
                            <td><?php echo e($etudiant->nom_prenom_etud_fr); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
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
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/admis/admis_DEUST.blade.php ENDPATH**/ ?>