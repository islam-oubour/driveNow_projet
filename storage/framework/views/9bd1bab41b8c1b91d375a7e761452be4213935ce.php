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
        <p>Administration</p>
    </div>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('index')); ?>"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="<?php echo e(route('acceuil')); ?>"><i class="bi bi-car-front"></i> Manage Cars</a></li>
            <li><a href="<?php echo e(route('User')); ?>"><i class="fas fa-users"></i> Uers</a></li>
            <li><a href="<?php echo e(route('admin.reservations')); ?>"><i class="bi bi-calendar-check"></i> Rentals</a></li>
            <li class="active"><a href="<?php echo e(route('payments')); ?>"><i class="bi bi-credit-card"></i> Payments</a></li>
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
            <div class="recent-activity">
                <h2>Payments</h2>
                <table>
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Rental ID</th>
                                <th>Amount</th>
                                <th>Method</th>
                            </tr>
                    </thead>
                    <tbody class="text-dark">
                            <?php $__empty_1 = true; $__currentLoopData = $paiements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paiement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($paiement->id_paiement); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($paiement->date_paiement)->format('d/m/Y H:i')); ?></td>
                                <td><?php echo e($paiement->prenomutilisateur); ?> <?php echo e($paiement->nomutilisateur); ?></td>
                                <td><?php echo e($paiement->id_location); ?></td>
                                <td><?php echo e($paiement->montant); ?> €</td>
                                <td><?php echo e($paiement->mode_paiement); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6">Aucune paiement</td>
                            </tr>
                            <?php endif; ?>
                    </tbody>
                </table>
            </div>             
        </main>
    </div>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/payments.blade.php ENDPATH**/ ?>