<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/custom.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/dataTables.bootstrap5.min.css')); ?>">
    <style>
        td {
            text-transform: uppercase !important;
        }

        .info-table td {
            width: 50% !important;
            height: fit-content !important;
            padding: 5px !important;
            <div class="container">
        }

        .fst-title::before {
            content: '';
            position: absolute;
            height: 40px;
            width: 40px;
            background-color: #1680a53d;
            border-radius: 100%;
            top: -10px;
            left: -10px;
            <div class="container">
        }

        .logo {
            height: 50px;
        }

        .fst-title {
            position: relative;
        }
    </style>
    <title>FSTE - Archive des notes</title>
</head>

<body>
    <div class="container">

        <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="card mt-3 py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table info-table">
                            <tr>
                                <td><strong>CNE</strong></td>
                                <td> <span class="me-2">:</span> <?php echo e($student['id']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Nom</strong> </td>
                                <td> <span class="me-2">:</span> <?php echo e($student['nom_prenom_etud_fr']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>SEXE</strong></td>
                                <td> <span class="me-2">:</span> <?php echo e($student['sexe_etudiant']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Date de naissance</strong></td>
                                <td> <span class="me-2">:</span>
                                    <?php echo e(date('d/m/Y', strtotime($student['date_naissance_etud']))); ?></td>
                            </tr>
                        </table>
                    </div><!-- End of .col -->
                    <div class="col">
                        <table class="table info-table">
                            <tr>
                                <td><strong>Semestre</strong></td>
                                <td> <span class="me-2">:</span> <?php echo e($student['semestre']); ?></td>

                            </tr>
                            <tr>
                                <td><strong>TRONC</strong></td>
                                <?php if(isset($student['id_tronc'])): ?>
                                    <td> <span class="me-2">:</span> <?php echo e($student['id_tronc']); ?></td>
                                <?php else: ?>
                                    <td> <span class="me-2">:</span> -</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td><strong>FILIERE</strong></td>
                                <?php if(isset($student['id_filiere'])): ?>
                                    <td> <span class="me-2">:</span> <?php echo e($student['id_filiere']); ?></td>
                                <?php else: ?>
                                    <td> <span class="me-2">:</span> -</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td><strong>OPTION</strong></td>
                                <?php if(isset($student['id_option'])): ?>
                                    <td> <span class="me-2">:</span> <?php echo e($student['id_option']); ?></td>
                                <?php else: ?>
                                    <td> <span class="me-2">:</span> -</td>
                                <?php endif; ?>
                            </tr>

                        </table>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->

            </div><!-- End of .container -->
        </div>

        <div class="card my-3 py-5">
            <?php if(Count($S1) > 0): ?>
                <div class="semestre mb-5">
                    <div class="container">
                        <h1 class="fst-title">S1</h1>
                    </div><!-- End of .container -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-notes">
                            <thead class="table-primary">
                                <td align="center">CODE</td>
                                <td>designation</td>

                                <td>normale</td>
                                <td>rattrapage</td>
                                <td>note</td>
                                <td></td>
                            </thead>
                            <?php $__currentLoopData = $S1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($module->note >= 10): ?>
                                    <tr class="table-success">
                                    <?php else: ?>
                                        <?php if($module->rachete == 1): ?>
                                    <tr class="table-success">
                                    <?php else: ?>
                                    <tr>
                                <?php endif; ?>
                            <?php endif; ?>
                            <td align="center"> <abbr
                                    title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                                <?php if($module->inscription == 1): ?>
                                    <br> <span class="badge bg-success">overt</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($module->designation); ?></td>

                            <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>

    <?php if(Count($S2) > 0): ?>
        <div class="semestre mb-5">
            <div class="container">
                <h1 class="fst-title">S2</h1>
            </div><!-- End of .container -->
            <div class="table-responsive">
                <table class="table table-bordered table-notes">
                    <thead class="table-primary">
                        <td align="center">CODE</td>
                        <td>designation</td>

                        <td>normale</td>
                        <td>rattrapage</td>
                        <td>note</td>
                        <td></td>
                    </thead>
                    <?php $__currentLoopData = $S2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($module->note >= 10): ?>
                            <tr class="table-success">
                            <?php else: ?>
                                <?php if($module->rachete == 1): ?>
                            <tr class="table-success">
                            <?php else: ?>
                            <tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php if($module->inscription == 1): ?>
                            <br> <span class="badge bg-success">overt</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($module->designation); ?></td>


                    <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>

    <?php if(Count($S3) > 0): ?>
        <div class="semestre mb-5">
            <div class="container">
                <h1 class="fst-title">S3</h1>
            </div><!-- End of .container -->
            <div class="table-responsive">
                <table class="table table-bordered table-notes">
                    <thead class="table-primary">
                        <td align="center">CODE</td>
                        <td>designation</td>

                        <td>normale</td>
                        <td>rattrapage</td>
                        <td>note</td>
                        <td></td>

                    </thead>
                    <?php $__currentLoopData = $S3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($module->note >= 10): ?>
                            <tr class="table-success">
                            <?php else: ?>
                                <?php if($module->rachete == 1): ?>
                            <tr class="table-success">
                            <?php else: ?>
                            <tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php if($module->inscription == 1): ?>
                            <br> <span class="badge bg-success">overt</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($module->designation); ?></td>


                    <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>

    <?php if(Count($S4) > 0): ?>
        <div class="semestre mb-5">
            <div class="container">
                <h1 class="fst-title">S4</h1>
            </div><!-- End of .container -->
            <div class="table-responsive">
                <table class="table table-bordered table-notes">
                    <thead class="table-primary">
                        <td align="center">CODE</td>
                        <td>designation</td>

                        <td>normale</td>
                        <td>rattrapage</td>
                        <td>note</td>
                        <td></td>

                    </thead>
                    <?php $__currentLoopData = $S4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($module->note >= 10): ?>
                            <tr class="table-success">
                            <?php else: ?>
                                <?php if($module->rachete == 1): ?>
                            <tr class="table-success">
                            <?php else: ?>
                            <tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php if($module->inscription == 1): ?>
                            <br> <span class="badge bg-success">overt</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($module->designation); ?></td>


                    <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>

    <?php if(Count($S5) > 0): ?>
        <div class="semestre mb-5">
            <div class="container">
                <h1 class="fst-title">S5</h1>
            </div><!-- End of .container -->
            <div class="table-responsive">
                <table class="table table-bordered table-notes">
                    <thead class="table-primary">
                        <td align="center">CODE</td>
                        <td>designation</td>

                        <td>normale</td>
                        <td>rattrapage</td>
                        <td>note</td>
                        <td></td>

                    </thead>
                    <?php $__currentLoopData = $S5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($module->note >= 10): ?>
                            <tr class="table-success">
                            <?php else: ?>
                                <?php if($module->rachete == 1): ?>
                            <tr class="table-success">
                            <?php else: ?>
                            <tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php if($module->inscription == 1): ?>
                            <br> <span class="badge bg-success">overt</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($module->designation); ?></td>


                    <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>

    <?php if(Count($S6) > 0): ?>
        <div class="semestre mb-5">
            <div class="container">
                <h1 class="fst-title">S6</h1>
            </div><!-- End of .container -->
            <div class="table-responsive">
                <table class="table table-bordered table-notes">
                    <thead class="table-primary">
                        <td align="center">CODE</td>
                        <td>designation</td>

                        <td>normale</td>
                        <td>rattrapage</td>
                        <td>note</td>
                        <td></td>

                    </thead>
                    <?php $__currentLoopData = $S6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($module->note >= 10): ?>
                            <tr class="table-success">
                            <?php else: ?>
                                <?php if($module->rachete == 1): ?>
                            <tr class="table-success">
                            <?php else: ?>
                            <tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <td align="center"> <abbr title="<?php echo e($module->designation); ?>"><?php echo e($module->id_module); ?></abbr>
                        <?php if($module->inscription == 1): ?>
                            <br> <span class="badge bg-success">overt</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($module->designation); ?></td>
                    <?php echo $__env->make('components.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div><!-- End of .table-responsive -->
    </div><!-- End of .semestre -->
    <?php endif; ?>
    </div>

    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div><!-- End of .container -->
    <script src="<?php echo e(asset('/assets/js/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                lengthMenu: [1000, 500, 200, 100, 50, 30],
                aaSorting: [],
            });
            var box = document.getElementById("example_wrapper");
            box.firstChild.style.marginBottom = "30px"
            box.lastChild.style.marginTop = "30px"

        });
    </script>
</body>

</html>
<?php /**PATH /var/www/html/test/website/resources/views/home.blade.php ENDPATH**/ ?>