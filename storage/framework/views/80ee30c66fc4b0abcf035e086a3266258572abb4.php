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
        td{
            text-transform: uppercase !important;
        }
    </style>
    <title>listes</title>
</head>
<body>
    <div class="container">
        <div style="flex-direction: row;" class="container card body-card p-3 my-4 d-flex justify-content-between align-items-center rounded">  
            <img height="60" src="<?php echo e(asset('/assets/images/logo.png')); ?>" alt="" srcset="">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                <button class="btn btn-danger" >Quitter</button>
            </a>
        </div>

        <div class="card mt-3 py-5">
            <div class="container">
                <table class="table table-bordered">
                    <tr>
                        <td>CODE</td>
                        <td>designation</td>
                        <td>semestre</td>
                        <td>Session</td>
                        <td>T/F/O</td>
                        <td>nombre des etudiants</td>
                        <td>Liste (EXCEL)</td>
                    </tr>
                    <tr>
                        <td><?php echo e($module['id']); ?></td>
                        <td><?php echo e($module['designation']); ?></td>
                        <td><?php echo e($module['semestre']); ?></td>
                        <td>Normale</td>
                        <td><?php echo e($module['specialite']); ?></td>
                        <td><?php echo e(count($data)); ?></td>
                        <td>
                            <a href="<?php echo e(route('download',['module' => $module['id'] ])); ?>">
                                <button class="btn btn-sm btn-success text-white" >Telecharger</button>    
                            </a>    
                        </td>
                    </tr>
                </table>
            </div><!-- End of .container -->
        </div>
    
        <div class="card my-3 py-5">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>CNE</th>
                            <th>Nom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($etudiant->id_etudiant); ?></td>
                            <td><?php echo e($etudiant->nom_prenom_etud_fr); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                    <thead class="thead-dark">
                        <tr>
                            <th>CNE</th>
                            <th>Nom</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
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
</html><?php /**PATH /var/www/html/listes/website/resources/views/list.blade.php ENDPATH**/ ?>