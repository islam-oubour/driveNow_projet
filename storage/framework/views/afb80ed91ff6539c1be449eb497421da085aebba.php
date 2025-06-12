<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>projet_driveNow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="<?php echo e(asset('assets/img/favicon.ico')); ?>" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="logo">
                <h1>driveNow</h1>
                <p>Admin Panel</p>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo e(route('index')); ?>"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                    <li><a href="<?php echo e(route('acceuil')); ?>"><i class="bi bi-car-front"></i> Manage Cars</a></li>
                    <li><a href="<?php echo e(route('User')); ?>"><i class="fas fa-users"></i> Uers</a></li>
                    <li class="active"><a href="<?php echo e(route('admin.reservations')); ?>"><i class="bi bi-calendar-check"></i> Rentals</a></li>
                    <li><a href="<?php echo e(route('payments')); ?>"><i class="bi bi-credit-card"></i> Payments</a></li>
                    <li><a href="<?php echo e(route('messages')); ?>"><i class="bi bi-envelope"></i> Messages</a></li>
                    <li><a href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="admin-header">
                <h2>Dashboard</h2>
                <div class="admin-profile">
                <?php if(session('Admin_prenom')): ?>
                  <span><?php echo e(session('Admin_prenom')); ?></span>
                  <div class="avatar"><?php echo e(substr(session('Admin_prenom'), 0, 1)); ?> </div>
                <?php else: ?>
                  <span>Admin</span>
                  <div class="avatar">A</div>
                <?php endif; ?>
              </div>
            </header>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon blue">
                       <i class="bi bi-car-front"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Cars</h3>
                        <p class="number"><?php echo e($stats['voitures']); ?></p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Users</h3>
                        <p class="number"><?php echo e($stats['clients']); ?></p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Rentals</h3>
                        <p class="number"><?php echo e($stats['locations']); ?></p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon red">
                      <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Payments</h3>
                        <p class="number"><?php echo e($stats['paiements']); ?></p>
                    </div>
                </div>
            </div>   
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <!-- Réservations -->
   
    <div class="recent-activity">
         <h2> Rentals</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Car</th>
                <th>Dates</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
                <th>Payment</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($res->id_location); ?></td>
                <td><?php echo e($res->prenomutilisateur); ?> <?php echo e($res->nomutilisateur); ?></td>
                <td><?php echo e($res->marque); ?> <?php echo e($res->modele); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($res->date_fin)->format('d/m/Y')); ?> - <?php echo e(\Carbon\Carbon::parse($res->date_fin)->format('d/m/Y')); ?></td>
                <td><?php echo e($res->montant_total); ?> €</td>
                <td>
                    <span class=" text-white badge bg-<?php echo e($res->status == 'confirmé' ? 'success' : ($res->status == 'annulé' ? 'danger' : 'warning')); ?>">
                        <?php echo e($res->status); ?>

                    </span>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-inline">
                            <button class="btn btn-sm btn-secondary dropdown-toggle mr-1" data-bs-toggle="dropdown">
                                Changer statut
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.reservations.changeStatus', ['id' => $res->id_location, 'statut' => 'en attente'])); ?>">En attente</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.reservations.changeStatus', ['id' => $res->id_location, 'statut' => 'confirmé'])); ?>">Confirmé</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('admin.reservations.changeStatus', ['id' => $res->id_location, 'statut' => 'terminé'])); ?>">Terminé</a></li>
                            </ul>
                        </div>

                        <a href="<?php echo e(route('contrat.show', ['id' => $res->id_location])); ?>" class="btn btn-sm btn-info ms-auto" target="_blank">
                            <i class="bi bi-file-earmark-text"></i>
                        </a>
                    </div>
                </td>
                <td class="text-center">
                    <a href="<?php echo e(route('paiement.create', ['id_location' => $res->id_location])); ?>">
                        <i class="fas fa-wallet"></i>
                    </a>
                </td>


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<div class="recent-activity mt-5">
    <!-- Retards -->
    <h2>Delays </h2>
    <table>
        <thead>
            <tr>
                <th>Car</th>
                <th>Start Date</th>
                <th>Expected End Date</th>
                <th>Client</th>
                <th>Late Days</th>
                <th>Action</th>
                <th>Payment</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php $__empty_1 = true; $__currentLoopData = $retards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($row->marque); ?> <?php echo e($row->modele); ?></td>
                <td><?php echo e($row->date_debut); ?></td>
                <td><?php echo e($row->date_fin); ?></td>
                <td><?php echo e($row->prenomutilisateur); ?> <?php echo e($row->nomutilisateur); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($row->date_fin)->diffInDays(now())); ?> days</td>
                <td>
                    <a href="<?php echo e(route('admin.reservations.confirmReturn', ['id' => $row->id_location])); ?>" 
                       class="btn btn-success btn-sm"
                       onclick="return confirm('Confirmer le retour de cette voiture ?')">
                       Confirmer retour
                    </a>
                </td>
                <td class="text-center">
                    <a href="<?php echo e(route('paiement.create', ['id_location' => $res->id_location])); ?>">
                        <i class="fas fa-wallet"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="5">Aucune location en retard.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</main>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/reservations.blade.php ENDPATH**/ ?>