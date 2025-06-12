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
            margin-bottom: 10px;
        }
        #info td{
            text-transform: uppercase !important;
        }
        #info strong{
            margin-right: 20px; 
        }
        .info{
            line-height: 12px;
            margin-bottom: 10px
        }
        .table-notes{
            width: 100%;
            margin-bottom: 10px;
        }
        .table-notes,
        .table-notes th,
        .table-notes td {
            border: .5px solid rgb(201, 201, 201);
            border-collapse: collapse;
            font-size: 12px;
        }

        .table-notes td {
            padding: 0 1px;
        }
    </style>
</head>
<body>
            <table style="width: 100%; padding: 0; margin-bottom: 10px">
                <tr>
                    <td style="width: 30%" align="left"><img height="50" src="<?php echo e(public_path('images/logo.png')); ?>" alt=""></td>
                    <td style="margin: 0;padding: 0; vertical-align: bottom">
                        <h2 style="margin-top: 40px;padding: 0;">relevé de notes - LST</h2>
                    </td>

                </tr>
            </table>
    <main>
        <div class="info" style="font-size: 12px;">
            <table style="width: 100%">
                <tr>
                    <td>
                        <table id="info">
                            <tr>
                               <td> CNE/MASSAR </td>
                                <td>: <strong><?php echo e($student['id']); ?></strong></td>
                            </tr>
                            <tr>
                                <td> NOM ET PRÉNOM </td>
                                <td>: <strong><?php echo e($student['nom_prenom_etud_fr']); ?></strong></td>
                            </tr>
                        </table> 
                    </td>
                    <td >
                        <table id="info">
                            <?php if(isset($student['id_filiere'])): ?>
                            <tr>
                                <td> filière </td>
                                <td>: <strong><?php echo e($filiere->intitule); ?> (<?php echo e($student['id_filiere']); ?>)</strong></td>
                            </tr>
                            <?php endif; ?>
                            <?php if(isset($student['id_option'])): ?>
                            <tr>
                                <td> Option </td>
                                <td>: <strong><?php echo e($option->intitule); ?> (<?php echo e($student['id_option']); ?>)</strong></td>
                            </tr>
                            <?php endif; ?>
                        </table> 
                    </td>
                </tr>
            </table>
        </div><!-- End of .info -->
        <div class="content" style="margin: 0 30px">
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S1, 'semestre' => 'S1','moy' =>  $moy[0], 'res' => $res[0], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S2, 'semestre' => 'S2' ,'moy' => $moy[1], 'res' => $res[1], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S3, 'semestre' => 'S3' ,'moy' => $moy[2], 'res' => $res[2], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S4, 'semestre' => 'S4' ,'moy' => $moy[3], 'res' => $res[3], 'dc' => $dc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S5, 'semestre' => 'S5' ,'moy' => $moy[4], 'res' => $res[4], 'dc' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('PDF.layouts.semestre', ['data' => $S6, 'semestre' => 'S6' ,'moy' => $moy[5], 'res' => $res[5], 'dc' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="date" style="margin: 10px 0; direction: rtl">
                Errachidia le : <?php echo e(date('d/m/Y')); ?>

            </div><!-- End of .date -->
        </div><!-- End of .content -->
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\docs\website\resources\views/PDF/globale.blade.php ENDPATH**/ ?>