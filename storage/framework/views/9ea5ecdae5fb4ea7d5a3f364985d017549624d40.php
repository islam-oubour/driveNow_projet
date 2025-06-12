        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand " href="<?php echo e(route('home')); ?>">
                    <img height="60" src="<?php echo e(asset('assets/images/ens-logo.svg')); ?>" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item" onclick="showLoader()">
                        <?php if($tab == 'home'): ?>
                            <a class="nav-link active " href="<?php echo e(route('home')); ?>">
                                <i class="bi me-3 bi-columns-gap"></i> Accueil
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                                <i class="bi me-3 bi-columns-gap"></i> Accueil
                            </a>
                        <?php endif; ?>

                    </li>


                    <!-- Nav item title -->
                    <li  class="nav-item">
                        <div class="navbar-heading">Layouts & Pages</div>
                    </li>

                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'etudiants'): ?>
                            <a class="nav-link active " href="<?php echo e(route('etudiants')); ?>">
                                <i class="bi me-3 bi-people-fill"></i> Etudiants
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('etudiants')); ?>">
                                <i class="bi me-3 bi-people"></i> Etudiants
                            </a>
                        <?php endif; ?>
                    </li>
                    <!-- Nav item title -->
                    <li onclick="showLoader()" class="nav-item">
                        <div class="navbar-heading">Déliberation</div>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'deliberation'): ?>
                            <a class="nav-link active " href="<?php echo e(route('deliberation')); ?>">
                                <i class="bi me-3 bi-list-columns"></i> Déliberation
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('deliberation')); ?>">
                                <i class="bi me-3 bi-list-columns"></i> Déliberation
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'modules'): ?>
                            <a class="nav-link active " href="<?php echo e(route('deliberation.modules')); ?>">
                                <i class="bi me-3 bi-journal-check"></i> Etat de modules
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('deliberation.modules')); ?>">
                                <i class="bi me-3 bi-journal-check"></i> Etat de modules
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'demandes'): ?>
                            <a class="nav-link active " href="<?php echo e(route('deliberation.demandes')); ?>">
                                <i class="bi me-3 bi-file-earmark-excel-fill"></i> Demandes
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('deliberation.demandes')); ?>">
                                <i class="bi me-3 bi-file-earmark-excel"></i> Demandes
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'affectation'): ?>
                            <a class="nav-link active " href="<?php echo e(route('affectation.affectation')); ?>">
                                <i class="bi me-3 bi-person-check-fill"></i> Affectation
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('affectation.affectation')); ?>">
                                <i class="bi me-3 bi-person-check"></i> Affectation
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'reserve'): ?>
                            <a class="nav-link active " href="<?php echo e(route('reserve')); ?>">
                                <i class="bi me-3 bi-file-earmark-excel-fill"></i> Reserve
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('reserve')); ?>">
                                <i class="bi me-3 bi-file-earmark-excel"></i> Reserve
                            </a>
                        <?php endif; ?>
                    </li>
                    <!-- Nav item title -->
                    <li class="nav-item">
                        <div class="navbar-heading">Données</div>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'listes'): ?>
                            <a class="nav-link active " href="<?php echo e(route('listes')); ?>">
                                <i class="bi me-3 bi-list-check"></i> Listes
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('listes')); ?>">
                                <i class="bi me-3 bi-list-check"></i> Listes
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'stats'): ?>
                            <a class="nav-link active " href="<?php echo e(route('stats')); ?>">
                                <i class="bi me-3 bi-graph-up-arrow"></i> Statistiques
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('stats')); ?>">
                                <i class="bi me-3 bi-graph-up-arrow"></i> Statistiques
                            </a>
                        <?php endif; ?>
                    </li>
                    <li onclick="showLoader()" class="nav-item">
                        <?php if($tab == 'exportation'): ?>
                            <a class="nav-link active " href="<?php echo e(route('exportation')); ?>">
                                <i class="bi me-3 bi-download"></i> Exportation
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(route('exportation')); ?>">
                                <i class="bi me-3 bi-download"></i> Exportation
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>

            </div>
        </nav>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/components/sidebar.blade.php ENDPATH**/ ?>