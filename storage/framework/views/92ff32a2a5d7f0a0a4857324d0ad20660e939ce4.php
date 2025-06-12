<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>projet_driveNow</title>
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
                        <a class="text-white px-3" href="<?php echo e(route('signUp')); ?>">Sign up</a>
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
                        <a href="<?php echo e(route('carRental')); ?>" class="nav-item nav-link">Car Rental</a>
                    <?php endif; ?>
                        <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Pickup Location</option>
                    <option value="errachidia">errachidia</option>
                    <option value="midelt">midelt</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Drop Location</option>
                    <option value="errachidia">errachidia</option>
                    <option value="midelt">midelt</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Drop Date">
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Select A Car</option>
                </select>
            </div>          
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-block mb-3" type="submit" style="height: 50px; background-color: #75564d; color: #ffffff;">Search</button>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact</h6>
        </div>
    </div>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px; box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);">
                        <?php if(session('success')): ?>
                            <div class='alert alert-success'><?php echo e(session('success')); ?></div>
                        <?php elseif(session('error')): ?>
                            <div class='alert alert-danger'><?php echo e(session('error')); ?></div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('contact.send')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" name="nom" placeholder="Your Name" required>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Subject" name="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" name="Message" required></textarea>
                            </div>
                            <div>
                                <button class="btn py-3 px-5 text-light" type="submit" style="background-color: #75564d;">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px; background-color: #75564d;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-dark flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Head Office</h5>
                                <p class="text-dark">Errachidia</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-dark flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Branch Office</h5>
                                <p class="text-dark"> Midelt</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-dark flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Customer Service</h5>
                                <p class="text-dark">customer@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-dark flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Return & Refund</h5>
                                <p class="m-0 text-dark">refund@gamil.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px; ">
        <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>errachidia</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+212 6 37 56 67 76 </p>
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
                    <a class="text-body mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2 "></i>Home</a>
                    <a class="text-body mb-2" href="about.php"><i class="fa fa-angle-right text-white mr-2"></i>About</a>
                    <a class="text-body mb-2" href="service.php"><i class="fa fa-angle-right text-white mr-2"></i>Services</a>
                    <a class="text-body mb-2" href="car.php"><i class="fa fa-angle-right text-white mr-2"></i>Cars</a>
                    <a class="text-body" href="contact.php"><i class="fa fa-angle-right text-white mr-2"></i>contact</a>
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
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html><?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/front/contact.blade.php ENDPATH**/ ?>