<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - driveNow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.admin-container {
    display: flex;
    min-height: 100vh;
    background-color: #f5f7fa;
}
.sidebar {
    width: 250px !important;
    background-color: #2B2E4A !important;
    color: white !important;
    padding: 20px 0 !important;
}

.sidebar .logo {
    text-align: left !important;
    padding: 20px !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.sidebar .logo h1 {
    font-size: 1.5rem !important;
    margin-bottom: 5px !important;
    color: white !important;
    padding-left: 10px !important;
}

.sidebar .logo p {
    font-size: 0.8rem !important;
    color: rgba(255, 255, 255, 0.7) !important;
    padding-left: 10px !important;
}

.sidebar nav ul {
    list-style: none !important;
    margin-top: 20px !important;
    padding-left: 0 !important;
}

.sidebar nav ul li {
    margin: 5px 0 !important;
}

.sidebar nav ul li a {
    display: flex !important;
    align-items: center !important;
    padding: 12px 20px 12px 25px !important;
    color: #ecf0f1 !important;
    text-decoration: none !important;
    transition: all 0.3s !important;
    background-color: transparent !important;
    border: none !important;
}

.sidebar nav ul li a:hover {
    background-color: #34495e !important;
    color: #ecf0f1 !important;
}

.sidebar nav ul li a i {
    margin-right: 10px !important;
    width: 20px !important;
    text-align: center !important;
}

.sidebar nav ul li.active a {
    background-color: #F4F5F8 !important;
    color: #2B2E4A !important;
}
.main-content {
    flex: 1;
    padding: 20px;
}
.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
}
.admin-profile {
    display: flex;
    align-items: center;
}
.admin-profile span {
    margin-right: 10px;
}
.avatar {
    width: 40px;
    height: 40px;
    background-color: #2B2E4A;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.stat-card {
    background-color: white;
    padding: 20px;
    display: flex;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}
.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    color: white;
    font-size: 1.2rem;
}
.stat-icon.blue { background-color:#75564d;}
.stat-icon.green { background-color:#75564d;}
.stat-icon.orange { background-color:#75564d;}
.stat-icon.red { background-color :#75564d;}
.stat-info h3 {
    font-size: 0.9rem;
    color: #7f8c8d;
    margin-bottom: 5px;
}
.stat-info .number {
    font-size: 1.5rem;
    font-weight: bold;
}
.recent-activity {
    background-color: white;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}
.recent-activity h3 {
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #eee;
}
table th {
    background-color: #f8f9fa;
    font-weight: 600;
    color: #2c3e50;
}
.badge {
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 500;
}
.badge.loan { background-color: #d4edda; color: #155724; }
.badge.return { background-color: #d1ecf1; color: #0c5460; }
.badge.reserve { background-color: #fff3cd; color: #856404; }
@media (max-width: 768px) {
    .admin-container {
        flex-direction: column;
    }
    .sidebar {
        width: 100%;
    }
    .stats-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .stats-grid {
        grid-template-columns: 1fr;
};
}
#succes{ 
  color:green;   
}
#danger{
color:red;
}
/* CSS */
.add-car-btn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background-color: #2B2E4A; /* vert */
  color: white;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: background-color 0.3s, transform 0.2s;
  text-decoration: none;
  z-index: 1000;
}
.add-car-btn:hover {
  transform: scale(1.1);
}

    </style>
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
        <h2 class="mb-4">Customer Messages</h2>

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
                    <tbody>
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
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/Admin/message.blade.php ENDPATH**/ ?>