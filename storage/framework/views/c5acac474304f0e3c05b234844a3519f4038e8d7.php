<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RELEVET GLOBALE</title>
    <style>
        @page  { margin: 10px 30px; }
        h2{
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
        #info td{
            text-transform: uppercase !important;
        }
        #info strong{
            margin-right: 20px; 
        }
        .info{
            line-height: 12px;
            margin-bottom: 20px
        }
        .table-notes{
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
                    <td><strong>: </strong> <?php echo e($student['id']); ?></td>
                </tr>
                <tr>
                    <td> <strong>NOM ET PRÉNOM</strong> </td>
                    <td><strong>: </strong> <?php echo e($student['nom_prenom_etud_fr']); ?></td>
                </tr>
                <?php if(isset($student['id_tronc'])): ?>
                <tr>
                    <td> <strong>Parcours</strong> </td>
                     <td><strong>: </strong> <?php echo e($tc); ?> (<?php echo e($student['id_tronc']); ?>)</td>
                </tr>
                <?php endif; ?>
            </table> 
        </div><!-- End of .info -->
        <div class="content">
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S1, 'semestre' => 'S1','moy' =>  $moy[0], 'res' => $res[0], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S2, 'semestre' => 'S2' ,'moy' => $moy[1], 'res' => $res[1], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S3, 'semestre' => 'S3' ,'moy' => $moy[2], 'res' => $res[2], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S4, 'semestre' => 'S4' ,'moy' => $moy[3], 'res' => $res[3], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="date" style="margin: 10px 0; direction: rtl">
                Errachidia le : <?php echo e(date('d/m/Y')); ?>

            </div><!-- End of .date -->
        </div><!-- End of .content -->
    </main>
</body>
</html><?php /**PATH D:\Program files\xampp\htdocs\docs\website\resources\views/PDF/rDEUST.blade.php ENDPATH**/ ?>