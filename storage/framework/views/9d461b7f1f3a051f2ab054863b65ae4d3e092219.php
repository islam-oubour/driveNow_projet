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
                    <li><a href="<?php echo e(route('admin.reservations')); ?>"><i class="bi bi-calendar-check"></i> Rentals</a></li>
                    <li><a href="<?php echo e(route('payments')); ?>"><i class="bi bi-credit-card"></i> Payments</a></li>
                    <li class="active"><a href="<?php echo e(route('messages')); ?>"><i class="bi bi-envelope"></i> Messages</a></li>
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
        <h2>Customer Messages</h2>

                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($msg->nom); ?></td>
                            <td><?php echo e($msg->email); ?></td>
                            <td><?php echo e($msg->sujet); ?></td>
                            <td><?php echo e(date('d/m/Y H:i', strtotime($msg->date_envoi))); ?></td>
                            <td>
                                <span class="badge bg-<?php echo e($msg->lu ? 'success' : 'warning'); ?>">
                                    <?php echo e($msg->lu ? 'Lu' : 'Non lu'); ?>

                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalMessage<?php echo e($msg->id); ?>">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <form action="<?php echo e(route('messages.destroy', $msg->id)); ?>"
                                    method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="modalMessage<?php echo e($msg->id); ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo e($msg->id); ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel<?php echo e($msg->id); ?>">
                                            Message de <?php echo e($msg->nom); ?>

                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Email :</strong> <?php echo e($msg->email); ?></p>
                                        <p><strong>Sujet :</strong> <?php echo e($msg->sujet); ?></p>
                                        <p><strong>Date :</strong> <?php echo e(date('d/m/Y H:i', strtotime($msg->date_envoi))); ?></p>
                                        <hr>
                                        <p><?php echo nl2br(e($msg->message)); ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <form id="luForm<?php echo e($msg->id); ?>" action="<?php echo e(route('messages.lu', ['id' => $msg->id])); ?>" method="POST" target="hiddenIframe" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo e($msg->email); ?>" class="btn btn-primary"  onclick="event.preventDefault();  document.getElementById('luForm<?php echo e($msg->id); ?>').submit();  window.open(this.href, '_blank');">
                                        Ouvrir dans Gmail
                                        </a>
                                        <iframe name="hiddenIframe" style="display: none;"></iframe>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
             </div>
          </div>          
        </main>
    </div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/Admin/message.blade.php ENDPATH**/ ?>