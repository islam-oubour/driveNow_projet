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
        .box {
            width: 15px;
            height: 15px;
            background: red;
            border-radius: 100%;
            text-align: center;
            line-height: 130px;
            animation: animate 2s linear infinite;
            cursor: pointer;
            top: 3px;
            left: 60px;
        }

        .box i {
            color: #fff;
            font-size: 60px;
        }

        @keyframes  animate {
            0% {
                box-shadow: 0 0 0 0 red;
            }

            40% {
                box-shadow: 0 0 0 30px rgba(255, 26, 67, 0);
            }

            80% {
                box-shadow: 0 0 0 30px rgba(255, 206, 67, 0);
            }

            100% {
                box-shadow: 0 0 0 rgba(255, 206, 67, 0);
            }
        }

        .card .table td,
        .card .table th {
            padding: 3px;
            font-size: 14px;
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

        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <tr>
                                <td><strong>Admis DEUST</strong></td>
                                <td>
                                    <?php if($student['admis_DEUST'] == 0): ?>
                                        <span class="me-2">:</span>
                                        Non
                                    <?php else: ?>
                                        <div class="status" style="position: relative">
                                            <span class="me-2">:</span>
                                            Oui
                                            <div class="box" style="position: absolute">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                        </div><!-- End of .status -->
                                    <?php endif; ?>
                                </td>
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
                            <tr>
                                <td><strong>Admis LST</strong></td>
                                <td>
                                    <?php if($student['admis_LST'] == 0): ?>
                                        <span class="me-2">:</span>
                                        Non
                                    <?php else: ?>
                                        <div class="status" style="position: relative">
                                            <span class="me-2">:</span>
                                            Oui
                                            <div class="box" style="position: absolute">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                        </div><!-- End of .status -->
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->

            </div><!-- End of .container -->
        </div>
        <div class="card mt-3 py-5">
            <div class="container">
                <div class="action mb-2 text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi me-2 bi-download"></i> Relevé de notes
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Relevé de notes</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                                aria-controls="home-tab-pane" aria-selected="true">Après les
                                                délibération</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                aria-controls="profile-tab-pane" aria-selected="false">Avant les
                                                délibération</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="row mb-3">
                                                        <?php if(Count($S1) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank" href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S1'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S1</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                        <?php if(Count($S2) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S2'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S2</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->
                                                    <div class="row mb-3">
                                                        <?php if(Count($S3) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S3'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S3</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                        <?php if(Count($S4) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S4'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S4</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->

                                                    <div class="row mb-3">
                                                        <?php if(Count($S5) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S5'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S5</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                        <?php if(Count($S6) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.semestre',['CNE' => $student['id'] ,'semestre' => 'S6'])); ?>">
                                                                    <button style="width: 100%;"
                                                                        class="btn btn-info">S6</button>
                                                                </a>
                                                            </div><!-- End of .col -->
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->

                                                </div><!-- End of .col -->

                                                <div class="col pb-3">
                                                    <a target="_blank" href="<?php echo e(route('releve.DEUST',['CNE' => $student['id']])); ?>">
                                                        <button style="width: 100%; height: 47%" 
                                                            class="btn mb-2 btn-info">DEUST</button>
                                                    </a>
                                                    <a target="_blank" href="<?php echo e(route('releve.LST',['CNE' => $student['id']])); ?>">
                                                        <button style="width: 100%; height: 47%"
                                                            class="btn btn-info">LST</button>
                                                    </a>
                                                </div><!-- End of .col -->
                                            </div><!-- End of .row -->

                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                            aria-labelledby="profile-tab" tabindex="0">
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="row mb-3">
                                                        <?php if(Count($S1) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S1'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S1</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                        <?php if(Count($S2) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S2'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S2</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->
                                                    <div class="row mb-3">
                                                        <?php if(Count($S3) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S3'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S3</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                        <?php if(Count($S4) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S4'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S4</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->
        
                                                    <div class="row mb-3">
                                                        <?php if(Count($S5) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S5'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S5</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                        <?php if(Count($S6) > 0): ?>
                                                            <div class="col">
                                                                <a target="_blank"  href="<?php echo e(route('releve.p.semestre',['CNE' => $student['id'] ,'semestre' => 'S6'])); ?>">
                                                                    <button style="width: 100%;" class="btn btn-danger" >S6</button>
                                                                </a>    
                                                            </div><!-- End of .col --> 
                                                        <?php endif; ?>
                                                    </div><!-- End of .row -->
                                                    
                                                </div><!-- End of .col -->
        
                                                <div class="col pb-3">
                                                    <a target="_blank" href="<?php echo e(route('releve.p.DEUST',['CNE' => $student['id']])); ?>">
                                                        <button style="width: 100%; height: 47%" class="btn btn-danger mb-2" >DEUST</button>
                                                    </a>
                                                    <a target="_blank" href="<?php echo e(route('releve.p.LST',['CNE' => $student['id']])); ?>">
                                                        <button style="width: 100%; height: 47%" class="btn btn-danger" >LST</button>
                                                    </a>
                                                </div><!-- End of .col -->
                                                <p class="text-danger" >* Les relevés de notes de cette section sont provisoires</p>
                                            </div><!-- End of .row -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning"
                                        data-bs-dismiss="modal">Quitter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End of .action -->
                <div class="row">
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S1, 'semestre' => 'S1'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S2, 'semestre' => 'S2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
                <div class="row">
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S3, 'semestre' => 'S3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S4, 'semestre' => 'S4'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
                <div class="row">
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S5, 'semestre' => 'S5'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                    <div class="col col-6">
                        <?php echo $__env->make('layouts.semestre', ['data' => $S6, 'semestre' => 'S6'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
            </div><!-- End of .container -->
        </div><!-- End of .card -->
    </div>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div><!-- End of .container -->
    <script src="<?php echo e(asset('/assets/js/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/main.min.js')); ?>"></script>
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
<?php /**PATH /var/www/html/docs/website/resources/views/home.blade.php ENDPATH**/ ?>