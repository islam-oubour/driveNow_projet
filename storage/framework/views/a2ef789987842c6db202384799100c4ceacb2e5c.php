<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>BILAN DE MODIFICATION</title>
    <style>

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
            margin: 70px 0;
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
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($item) > 0): ?>
        <?php $count++ ?>
        <div class="container <?php echo e(count($data) - 1 >= $count ? 'page-break' : ''); ?>">
            <table>
                <tr>
                    <td>
                        <img height="70" src="https://www.fste-umi.ac.ma/fst/docs/assets/img/logo.png" alt="">
                    </td>
                    <td>
                        <div class="info">

                            Jury : <strong>DEUST</strong> <br>
                            A.U. : <strong><?php echo e(fst_au()); ?></strong> <br>
                            Session : <strong><?php echo e(fst_session()); ?></strong>
                        </div><!-- End of .x -->
                    </td>
                </tr>
            </table>
            <h2 class="title">Liste de modifications - <?php echo e($key); ?></h2>
            <table border="1" id="table_jury" style="font-size: 16px ; margin-top: 10px">
                <thead>
                    <th scope="col">CNE</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Module</th>
                    <th scope="col">Spécialité</th>
                    <th scope="col">Anc. Note</th>
                    <th scope="col">Nov. Note</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($etudiant['id_etudiant']); ?></td>
                            <td><?php echo e($etudiant['nom_prenom_etud_fr']); ?></td>
                            <td><?php echo e($etudiant['id_module']); ?></td>
                            <td><?php echo e($etudiant['specialite']); ?></td>
                            <td><?php echo e($etudiant['note_avant_rach']); ?></td>
                            <td><?php echo e($etudiant['note']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                
            </table>
            <table style="margin-top: 50px">
                <tr>
                    <td colspan="3" align="right"> <br> Errachidia, le <strong><?php echo e(date('d/m/Y')); ?></strong> </td>
                </tr>
            </table>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/rachetage/bilan_DEUST.blade.php ENDPATH**/ ?>