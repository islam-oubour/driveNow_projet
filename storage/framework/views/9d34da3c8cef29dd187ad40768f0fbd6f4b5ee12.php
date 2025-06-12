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
        <style>
        .reservation-container {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        .car-image {
            transition: transform 0.3s;
        }
        .car-image:hover {

        }
        .form-control {
            height: 50px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #75564d;
            box-shadow: 0 0 0 0.2rem rgba(117, 86, 77, 0.25);
        }
        .btn-reserver {
            background-color: #75564d;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-reserver:hover {
            background-color: #75564d;
            color: white;
            transform: translateY(-2px);
        }
        .price-display {
            font-size: 24px;
            font-weight: 700;
            color: #75564d;
            margin: 20px 0;
        }
        .detail-item {
            margin-bottom: 15px;
            font-size: 16px;
        }
        .detail-item i {
            color: #75564d;
            margin-right: 10px;
            width: 20px;
        }
        .avatar {
            background-color: #fff;
            color: #2B2E4A;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-left: 10px;
            font-weight: bold;
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
            <div class="container pt-5 pb-3">
                <div class="reservation-container">
                    <h1 class="display-4 text-uppercase text-center mb-5" style="color: #2B2E4A;">
                        Réserver <span style="color: #75564d;"><?php echo e($car->marque); ?> <?php echo e($car->modele); ?></span>
                    </h1>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img src="<?php echo e(asset($car->photo)); ?>" class="img-fluid car-image" alt="<?php echo e($car->marque); ?> <?php echo e($car->modele); ?>">

                            <div class="mt-4 text-center">
                                <div class="price-display">Prix: <?php echo e($car->prix); ?> DH / jour</div>

                                <div class="detail-item">
                                    <i class="fa fa-car"></i>
                                    <span>Année: <?php echo e($car->annee); ?></span>
                                </div>
                                <div class="detail-item">
                                    <i class="fa fa-cogs"></i>
                                    <span>Transmission: <?php echo e($car->transmission); ?></span>
                                </div>
                                <div class="detail-item">
                                    <i class="fa fa-road"></i>
                                    <span>Kilométrage: <?php echo e($car->kilometrage); ?> km</span>
                                </div>
                            </div>
                        </div>
                         <?php if(!empty($pickup_date)): ?>
                                <form method="POST" >
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="date_debut">Start Date</label>
                                        <input type="date" class="form-control" id="date_debut" name="date_debut" required value="<?php echo e($pickup_date); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_fin"> End Date</label>
                                        <input type="date" class="form-control" id="date_fin" name="date_fin" required value="<?php echo e($drop_date); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="lieu_prise">Pickup Location</label>
                                        <input class="form-control" id="lieu_prise" name="lieu_prise" value="<?php echo e($pickup_location); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="lieu_retour">Drop-off Location</label>
                                        <input class="form-control" id="lieu_retour" name="lieu_retour" value="<?php echo e($drop_location); ?>" readonly>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-reserver">
                                            <i class="fa fa-check-circle mr-2"></i> Confirm your reservation
                                        </button>
                                    </div>
                                </form>
                            <?php else: ?>
                            <div class="col-lg-6">
                                <?php if($success): ?>
                                    <div class="alert alert-success">✅ Votre réservation a bien été enregistrée !</div>
                                <?php elseif($error): ?>
                                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                                <?php endif; ?>
                                <form method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="date_debut">Date de début</label>
                                        <input type="date" class="form-control" id="date_debut" name="date_debut" required min="<?php echo e(date('Y-m-d')); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date_fin">Date de fin</label>
                                        <input type="date" class="form-control" id="date_fin" name="date_fin" required min="<?php echo e(date('Y-m-d')); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="lieu_prise">Lieu de prise en charge</label>
                                        <select class="form-control" id="lieu_prise" name="lieu_prise" required>
                                            <option value="errachidia">Errachidia</option>
                                            <option value="midelt">Midelt</option>
                                            <option value="Gare">Gare</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="lieu_retour">Lieu de retour</label>
                                        <select class="form-control" id="lieu_retour" name="lieu_retour" required>
                                            <option value="errachidia">Errachidia</option>
                                            <option value="midelt">Midelt</option>
                                            <option value="Gare">Gare</option>
                                        </select>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-reserver">
                                            <i class="fa fa-check-circle mr-2"></i> Confirmer la réservation
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <?php endif; ?>                        
                    </div>
                </div>
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
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-1.jpg')); ?>" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-2.jpg')); ?>" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-3.jpg')); ?>" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-4.jpg')); ?>" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-5.jpg')); ?>" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="<?php echo e(asset('img/gallery-6.jpg')); ?>" alt=""></a>
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
    <script src="<?php echo e(asset('assets/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\projet_driveNow\resources\views/front/book.blade.php ENDPATH**/ ?>