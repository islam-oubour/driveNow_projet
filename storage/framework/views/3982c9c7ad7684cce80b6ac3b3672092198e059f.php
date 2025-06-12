<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RELEVET GLOBALE</title>
    <style>
        @page  {
            margin: 10px 30px;
        }
        .page-break {
            page-break-after: always;
        }
        h2 {
            margin: 0;
            padding: 0;
            text-transform: uppercase;
        }

        .h-container {
            border-top: 2px solid rgb(77, 77, 77);
            border-bottom: 2px solid rgb(77, 77, 77);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        #info td {
            text-transform: uppercase !important;
        }

        #info strong {
            margin-right: 20px;
        }

        .info {
            line-height: 12px;
            margin-bottom: 20px
        }

        .table-notes {
            width: 100%;
            margin-bottom: 10px;
        }

        .table-notes,
        .table-notes th,
        .table-notes td {
            border: 1px solid gray;
            border-collapse: collapse;
            font-size: 14px;
        }

        .table-notes td {
            padding: 0 1px;
        }
    </style>
</head>

<body>
    <?php $count = 0;?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $count++ ?>
        <div class="container <?php echo e(count($data) - 1 >= $count ? 'page-break' : ''); ?>">
            <table style="width: 100%; padding: 0; margin-bottom: 15px">
                <tr>
                    <td align="left"><img height="50" src="<?php echo e(public_path('images/logo.png')); ?>" alt=""></td>
                </tr>
            </table>
            <table style="width: 100%; padding: 0; margin-bottom: 20px">
                <tr>
                    <td style="margin: 10px 0" align="center">
                        <h2>relevé de notes <br> - DEUST -</h2>
                    </td>
                </tr>
            </table>
            <main>
                <div class="info">
                    <table id="info">
                        <tr>
                            <td> <strong>CNE - MASSAR</strong> </td>
                            <td><strong>: </strong> <?php echo e($student['CNE']); ?></td>
                        </tr>
                        <tr>
                            <td> <strong>NOM ET PRÉNOM</strong> </td>
                            <td><strong>: </strong> <?php echo e($student['Nom']); ?></td>
                        </tr>
                        <?php if(isset($student['id_tronc'])): ?>
                            <tr>
                                <td> <strong>Parcours</strong> </td>
                                <td><strong>: </strong> <?php echo e($student['id_tronc']); ?> (<?php echo e($student['tronc']); ?>)</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div><!-- End of .info -->
                <div class="content">
                    <?php echo $__env->make('deliberation.releves.semestre', ['data' => $student['S1'], 'semestre' => 'S1','moy' =>  $student['Moy-S1'], 'res' => $student['Res-S1'] , 'nb_rat' => $student['R-S1'] ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('deliberation.releves.semestre', ['data' => $student['S2'], 'semestre' => 'S2','moy' =>  $student['Moy-S2'], 'res' => $student['Res-S2'] , 'nb_rat' => $student['R-S2'] ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('deliberation.releves.semestre', ['data' => $student['S3'], 'semestre' => 'S3','moy' =>  $student['Moy-S3'], 'res' => $student['Res-S3'] , 'nb_rat' => $student['R-S3'] ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('deliberation.releves.semestre', ['data' => $student['S4'], 'semestre' => 'S4','moy' =>  $student['Moy-S4'], 'res' => $student['Res-S4'] , 'nb_rat' => $student['R-S4'] ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="date" style="margin: 10px 0; direction: rtl">
                        Errachidia le : <?php echo e(date('d/m/Y')); ?>

                    </div><!-- End of .date -->
                </div><!-- End of .content -->
            </main>
        </div> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/releves/DEUST.blade.php ENDPATH**/ ?>