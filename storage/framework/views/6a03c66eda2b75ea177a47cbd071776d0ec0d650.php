<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>">
    <!-- Libs CSS -->
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <title>PDF</title>
    <style>
        body {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        td,
        tr,
        th,
        thead,
        tfoot,
        tbody {
            border: 1px solid black !important;
        }

        #liste th{
            color: white !important;
        }
        #info td,
        #info tr,
        #info tbody {
            border: none !important;
        }

        td,
        th {
            vertical-align: middle !important;
            padding: 5px !important;
        }

        #liste td,
        #liste th {
            font-size: 12px !important;
        }

        #liste tr:nth-child(even) {
            background-color: #ebebeb !important;
        }
    </style>
</head>

<body onload="window.print()">
    <table id="info" style="width: 100%">
        <tr>
            <td>
                <img height="70" src="https://www.fste-umi.ac.ma/fst/gestion_listes/assets/img/logo.png"
                    alt="">
            </td>
            <td align="right">

                <div class="info text-left my-5" style="width: fit-content">
                    <h1>JURY DE <strong>DEUST ● <?php echo e(fst_au()); ?></strong></h1>
                    <h2>PARCOURS : <strong>MIP</strong> ● SESSION DU <strong>PRINTEMPS</strong></h2>

                </div><!-- End of .info -->

            </td>
        </tr>
    </table>
    <table class="table table-bordered my-3">
        <thead>
            <th>Président</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Local</th>
        </thead>
        <tbody>
            <tr>
                <td><strong>Mohamed OUAADOU</strong></td>
                <td><strong>12/12/2024</strong></td>
                <td><strong>15:60</strong></td>
                <td><strong>Amphi A</strong></td>
            </tr>
        </tbody>
        
    </table>
    <div class="text-center">
        <p>Liste des étudiants classés par ordre de mérite
            Résultat (Admis, Ajourné) et moyenne (décroissante).</p>
    </div><!-- End of .text-center -->
    <table id="liste" class="table table-striped table-bordered" style="width:100%">
        <thead style="background-color: #646464;">
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < 100; $i++): ?>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                </tr>
            <?php endfor; ?>
        </tbody>
        <tfoot style="background-color: #646464;">
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/deliberation/PDF/deliberation.blade.php ENDPATH**/ ?>