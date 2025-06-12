<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTE GLOBALE INSC <?php echo e($info['option']); ?></title>
    <style>
        @page  {
            thead {
                display: table-header-group;
            }

            tfoot {
                display: table-footer-group;
            }

            margin: 50px;
            size: A4 portrait;

            @bottom-right {
                content: '<?php echo e($info['option_full']); ?>  -  ' counter(page) ' / ' counter(pages);
            }
        }

        @media  print {
            body * {
                -webkit-print-color-adjust: exact !important;
            }

        }

        footer {
            z-index: 999;
            position: fixed;
            bottom: 18px;
            right: 150px;
            height: 50px;
        }

        .table-head {
            background-color: #c4c4c4 !important
        }

        #res tr:nth-child(odd) {
            background-color: #ebebeb;
        }

        .h-container {
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        table {
            page-break-inside: auto;
        }

        table tr {
            page-break-inside: auto;
        }

        table tr td {
            page-break-inside: auto;
        }


        .last {
            display: flex;
            flex-direction: column;
            align-items: end;
            margin-bottom: 15px;
        }

        #res,
        #res th,
        #res td {
            border: 1px solid gray;
            border-collapse: collapse;
        }

        #res td {
            padding: 1px 10px;
        }

        #res,
        #stat {
            width: 100%;
            margin-bottom: 40px;
        }

        .line {
            margin: 10px 0;
            border-bottom: 1px solid gray;
            width: 250px
        }
    </style>
</head>

<body>
    <header> 
        <div class="h-container">
            <table style="width: 100%">
                <tr>
                    <td align="left" style="padding: 10px 0"><img height="60"
                            src="https://www.fste-umi.ac.ma/fst/gestion_listes/assets/img/logo.png" alt=""></td>
                </tr>
            </table>
        </div><!-- End of .container -->
    </header>
    <div class="i-container" style="text-transform: uppercase;margin-top: 20px">
        <div>
            <h2 style="margin: 2px 0">Liste globale des inscrits</h2>
            <h3 style="margin: 2px 0">OPTION : <?php echo e($info['option_full']); ?> </h3>
        </div>
        <table style="width: 100%">
            <tr>
                <td>
                    <div class="first">
                    </div><!-- End of .first -->
                </td>
                <td align="right">
                    <div class="first">
                        <b>
                            A.U. : <?php echo e(fst_au()); ?> <br>
                        </b>
                    </div><!-- End of .first -->
                </td>
            </tr>
        </table>

    </div><!-- End of .i-container -->
    <div class="content">
        <table id="res" style='text-transform: uppercase;font-size: 12px; margin-top: 30px'>
            <thead>
                <tr>
                    <td colspan="13"  align="center"><?php echo e($info['option']); ?> - <?php echo e(fst_au()); ?> - <?php echo e(fst_session()); ?></td>
                </tr>
                <tr>
                    <td rowspan="2"><b>N°</b></td>
                    <td rowspan="2"><b>CNE</b></td>
                    <td rowspan="2"><b>Nom</b></td>
                    <td align="center" colspan="6"><b>S5</b></td>
                    <td align="center" colspan="4"><b>S6</b></td>
                </tr>
                <tr class="table-head">

                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th align="center"><b><?php echo e($module->id); ?></b></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($etudiant['CNE']); ?></td>
                        <td><?php echo e($etudiant['Nom']); ?></td>
                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($etudiant[$module->id] == true): ?>
                                <td align="center"> <span style="font-family: DejaVu Sans;">✔</span></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr class="table-head">
                    <th><b>N°</b></th>
                    <th><b>CNE</b></th>
                    <th><b>Nom</b></th>
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th align="center"><b><?php echo e($module->id); ?></b></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tfoot>
        </table>
    </div><!-- End of .ttb -->

</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/exportation/PDF/inscrits_globale_LST.blade.php ENDPATH**/ ?>