<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ATTESTATIONS APRES LES JURY</title>
    <style>
        .page {
            page-break-after: always;

        }

        .page:last-child {
            page-break-after: unset;
        }

        .mid {
            margin: 20px 33px;
        }

        .content {
            line-height: 30px;
            font-size: 18px;
            line-height: 30px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="page">
            <table style="width: 100%; padding: 0; margin-bottom: 25px">
                <tr>
                    <td align="left"><img height="50" src="<?php echo e(public_path('images/logo.png')); ?>" alt=""></td>
                </tr>
            </table>
            <table style="width: 100%">
                <tr>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black; margin-bottom: 60px"
                        align="center">
                        <h1>ATTESTATION DE RÉUSSITE</h1>
                    </td>
                </tr>
            </table>
            <div class="mid">
                <div class="content" style="margin-top: 60px">
                    Le Doyen de la Faculté des Sciences et Techniques d'Errachidia, atteste que : <br>
                    l'étudiant(e) : <strong><?php echo e(strtoupper($item->nom_prenom_etud_fr)); ?></strong> <br>
                    né(e) le : <strong><?php echo e(date('d/m/Y', strtotime($item->date_naissance_etud))); ?></strong> à <strong><?php echo e($item->ville_naissance_etud); ?></strong> <br>
                    inscrit(e) sous le CNE/MASSAR : <strong><?php echo e($item->id); ?></strong> <br>
                    a obtenu le <strong>Diplome des Études Universitaires en Sciences et Techniques (DEUST)</strong> :<br>
                    Parcours : <strong><?php echo e(str_replace(" ","-",$item->intitule)); ?></strong> (<strong><?php echo e($item->id_tronc); ?></strong>) <br>
                    Année universitaire : <strong><?php echo e($item->au_jury_DEUST); ?></strong> <br>
                    Session : <strong><?php echo e(fst_session()); ?></strong> <br>
                    avec les résultats suivants : <br>
                    <br>
                    <div class="res" style="width: 100% ; text-align: center">
                        Moyenne : <strong><?php echo e(truncate_number($item->moyenne_DEUST)); ?></strong> <br>
                        <?php if($item->moyenne_DEUST >= 10 and $item->moyenne_DEUST < 12): ?>
                            Mention : <strong>Passable</strong>
                        <?php endif; ?>
                        <?php if($item->moyenne_DEUST >= 12 and $item->moyenne_DEUST < 14): ?>
                            Mention : <strong>Assez bien</strong>
                        <?php endif; ?>
                        <?php if($item->moyenne_DEUST >= 14 and $item->moyenne_DEUST < 16): ?>
                            Mention : <strong>Bien</strong>
                        <?php endif; ?>
                        <?php if($item->moyenne_DEUST >= 16): ?>
                            Mention : <strong>Très bien</strong>
                        <?php endif; ?>
                    </div><!-- End of .res -->
    
    
                </div><!-- End of .content -->
                <table style="width: 100%; margin-top: 60px">
                    <tr>
                        <td style="width: 70%">Errachidia, le : <strong><?php echo e(date(date('d/m/Y'), strtotime($item->dn))); ?></strong></td>
                        <td style="margin-top: 20px" align="center">
                            <h3>Le Doyen</h3>
                        </td>
                    </tr>
                </table>    
            </div><!-- End of .mid -->
            <div class="footer"
                style="position: absolute; left: 0 ; bottom: 0;border-top: 1px solid black; padding-top: 20px">
                <small><i>N.B. : La présente attestation n'est délivrée qu'en un seul exemplaire. il appartient à
                        l'étudiant d'en faire des photocopies certifiées conformes</i></small>
            </div><!-- End of .footer -->
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>


</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/attestations/DEUST.blade.php ENDPATH**/ ?>