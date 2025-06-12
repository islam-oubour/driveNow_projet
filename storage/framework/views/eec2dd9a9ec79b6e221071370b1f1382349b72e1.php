<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>driveNow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
        <style>
         body {
            font-family: 'Rubik', sans-serif;
        }
        
        .navbar-brand img {
            transition: transform 0.3s;
        }
        
        .navbar-brand:hover img {
            transform: scale(1.05);
        }
        
        .reservation-header {
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
        }
        
        .new-reservation-btn {
            background-color:  #75564d;
            color: white;
            padding: 10px 20px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }
        
        .new-reservation-btn:hover {
            background-color: #63473d;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .new-reservation-btn i {
            margin-right: 8px;
        }
        
        .reservation-card {
            border: none;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin-bottom: 25px;
        }
        
        .reservation-card:hover {
            transform: translateY(-5px);
        }
        
        .car-img-container {
            height: 180px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .car-img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .car-title {
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
            color:  #2B2E4A;
            margin-bottom: 10px;
        }
        
        .reservation-detail {
            margin-bottom: 8px;
            font-size: 14px;
        }
        
        .reservation-detail i {
            color:  #75564d;
            width: 20px;
            text-align: center;
            margin-right: 8px;
        }
        
        .status-badge {
            padding: 5px 10px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 30px;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .no-reservations {
            text-align: center;
            padding: 50px 0;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .no-reservations-icon {
            font-size: 50px;
            color: #adb5bd;
            margin-bottom: 20px;
        }
        
        .avatar {
            background-color: #fff;
            color:  #2B2E4A;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-left: 10px;
            font-weight: bold;
        }
        
        .back-to-top {
            background-color: #75564d;
        }
        
        .back-to-top:hover {
            background-color: #63473d;
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-3 px-lg-5 d-none d-lg-block" style="background-color: #2B2E4A;">
         <div class="row justify-content-end">
            <div class="col-auto">
                <div class="d-inline-flex align-items-center">
                    <?php if(session('client_prenom')): ?>
                        <a class="text-white px-3" href="<?php echo e(route('client.logout')); ?>">
                            <div style="display: inline;">Logout</div>
                            <i class="fas fa-sign-out-alt" style="margin-left: 5px;"></i>
                        </a>
                        <span class="text-white">Welcome, <?php echo e(session('client_prenom')); ?></span>
                        <div class="avatar"><?php echo e(strtoupper(substr(session('client_prenom'), 0, 1))); ?></div>
                    <?php else: ?>
                        <a class="text-white px-3" href="<?php echo e(route('login.client')); ?>">Sign in</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Sign Up</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 pl-3 pl-lg-5" style="background-color: #F4F5F8;">
                <a href="" class="navbar-brand">
                    <img src="LOGO.png" alt="" width="170px">
                </a>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link ">Home</a>
                        <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo e(route('services')); ?>" class="nav-item nav-link">Services</a>
                        <a href="<?php echo e(route('cars')); ?>" class="nav-item nav-link">Cars</a>
                    <?php if(session('client_prenom')): ?>
                        <a href="<?php echo e(route('carRental')); ?>" class="nav-item nav-link active">Car Rental</a>
                    <?php endif; ?>
                        <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="reservation-header text-center">
                <h1 class="display-4 text-uppercase mb-3">My Bookings</h1>
                <a href="<?php echo e(route('cars')); ?>" class="new-reservation-btn">
                    <i class="fas fa-plus"></i> New Reservation
                </a>
            </div>

            <?php if($locations->isEmpty()): ?>
                <div class="no-reservations text-center">
                    <i class="far fa-calendar-times fa-4x mb-3"></i>
                    <h3>No reservations found</h3>
                    <p class="text-muted">You haven't made any reservations yet.</p>
                </div>
            <?php else: ?>
                <div class="row">
                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6">
                            <div class="reservation-card card mb-4">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <div class="car-img-container">
                                            <img src="../assets/<?php echo e($location->voiture->photo); ?>" class="car-img" alt="<?php echo e($location->voiture->marque); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="car-title"><?php echo e($location->voiture->marque); ?> <?php echo e($location->voiture->modele); ?></h5>

                                            <div class="reservation-detail">
                                                <i class="far fa-calendar-alt"></i>
                                                <strong>From:</strong> <?php echo e($location->date_debut); ?>

                                            </div>
                                            <div class="reservation-detail">
                                                <i class="far fa-calendar-check"></i>
                                                <strong>To:</strong> <?php echo e($location->date_fin); ?>

                                            </div>
                                            <div class="reservation-detail">
                                                <i class="fas fa-money-bill-wave"></i>
                                                <strong>Total:</strong> <?php echo e($location->montant_total); ?> DH
                                            </div>
                                            <div class="reservation-detail">
                                                <i class="fas fa-file-contract"></i>
                                                <strong>Contract:</strong> <?php echo e($location->contrat->typeContrat ?? 'N/A'); ?>

                                            </div>
                                            <div class="mt-2">
                                                <?php if($location->status == 'confirmé'): ?>
                                                    <span class="badge badge-success"><?php echo e($location->status); ?></span>
                                                <?php elseif($location->status == 'en attente'): ?>
                                                    <span class="badge badge-warning text-dark"><?php echo e($location->status); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-secondary"><?php echo e($location->status); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Errachidia</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+212 6 37 56 67 76</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>driveNow@example.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 mb-2">
                <h4 class="text-uppercase text-light mb-4">Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-body mb-2" href="about.php"><i class="fa fa-angle-right text-white mr-2"></i>About</a>
                    <a class="text-body mb-2" href="service.php"><i class="fa fa-angle-right text-white mr-2"></i>Services</a>
                    <a class="text-body mb-2" href="car.php"><i class="fa fa-angle-right text-white mr-2"></i>Cars</a>
                    <a class="text-body" href="contact.php"><i class="fa fa-angle-right text-white mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="../assets/img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Subscribe to our newsletter to receive the latest updates, special offers, and news directly in your inbox.</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-light text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>We respect your privacy and never share your information.</i>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="" class="btn btn-lg btn-dark bg-dark btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/front/carRental.blade.php ENDPATH**/ ?>