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
                    <li class="active"><a href="<?php echo e(route('acceuil')); ?>"><i class="bi bi-car-front"></i> Manage Cars</a></li>
                    <li><a href="<?php echo e(route('User')); ?>"><i class="fas fa-users"></i> Uers</a></li>
                    <li><a href="<?php echo e(route('admin.reservations')); ?>"><i class="bi bi-calendar-check"></i> Rentals</a></li>
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
            <div class="recent-activity">
                <h2>Cars</h2>
                <table>
                        <thead>
                            <tr>
                                <th>License Plate</th>
                                <th>Color</th>
                                <th>Photo</th>
                                <th>Model</th>
                                <th>Available</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <?php $__empty_1 = true; $__currentLoopData = $voituresDisponibles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($voiture->Matricule); ?></td>
                                <td><?php echo e($voiture->couleur); ?></td>
                                <td><img src="<?php echo e(asset($voiture->photo)); ?>" alt="Photo" width="100"></td>
                                <td><?php echo e($voiture->modele); ?></td>
                                <td>
                                <span class="badge bg-success text-white">
                                 yes
                                </span>
                                </td>    
                                <td>
                                <a href="<?php echo e(route('cars.edit', $voiture->Matricule)); ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="<?php echo e(route('cars.delete', $voiture->Matricule)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cette voiture ?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6">Aucune voiture disponible.</td>
                            </tr>
                            <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
<!-- Bouton Ajouter -->
<a href="<?php echo e(route('cars.create')); ?>" class="add-car-btn" title="Ajouter une voiture">
  <i class="fa-solid fa-plus"></i>
</a>

</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/acceuil.blade.php ENDPATH**/ ?>