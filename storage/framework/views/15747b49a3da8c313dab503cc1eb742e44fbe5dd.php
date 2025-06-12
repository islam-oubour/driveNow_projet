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
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
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
                        <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo e(route('services')); ?>" class="nav-item nav-link">Services</a>
                        <a href="<?php echo e(route('cars')); ?>" class="nav-item nav-link">Cars</a>
                    <?php if(session('client_prenom')): ?>
                        <a href="<?php echo e(route('carRental')); ?>" class="nav-item nav-link">Car Rental</a>
                    <?php endif; ?>
                        <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link">Contact</a>
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
    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./assets/img/carousel-1.jpg" alt="Image" width="602px" height="700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Rental Cars In Your Location</h1>
                            <?php if(session('client_prenom')): ?>
                                    <a href="<?php echo e(route('cars')); ?>" class="btn py-md-3 px-md-5 mt-2" style="background-color: #75564d; color: #ffffff;">Reserve Now</a>
                            <?php else: ?>
                                    <a href="<?php echo e(route('login.client')); ?>" class="btn py-md-3 px-md-5 mt-2" style="background-color: #75564d; color: #ffffff;">Reserve Now</a>
                            <?php endif; ?>                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./assets/img/carousel-2.jpg" alt="Image" width="602px" height="700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Quality Cars with Unlimited Miles</h1>
                            <?php if(session('client_prenom')): ?>
                                    <a href="<?php echo e(route('cars')); ?>" class="btn py-md-3 px-md-5 mt-2" style="background-color: #75564d; color: #ffffff;">Reserve Now</a>
                            <?php else: ?>
                                    <a href="<?php echo e(route('login.client')); ?>" class="btn py-md-3 px-md-5 mt-2" style="background-color: #75564d; color: #ffffff;">Reserve Now</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span style="color: #75564d;">driveNow</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="./assets/img/cars3.png" alt="">
                    <p class='text-dark'>In a fast-paced world, DriveNow gives you the freedom to move without the hassle. Whether you need a car for a quick trip around the city or a long road adventure, our platform offers a wide selection of modern vehicles to suit your needs.

                        With our user-friendly interface and flexible rental options, you can book your car anytime, from anywhere. DriveNow combines convenience, quality, and competitive pricing to make your car rental experience smoother than ever.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">>
            <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px; background-color: #75564d">
                                <i class="fa fa-2x fa-taxi text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-dark mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Rental</h4>
                        <p class="m-0">We offer reliable and comfortable car rentals tailored to your travel needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px; background-color: #F4F5F8">
                                <i class="fa fa-2x fa-money-check-alt text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Financing</h4>
                        <p class="m-0">Flexible and easy financing options to help you buy your car with confidence.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center ml-n4" style="width: 80px; height: 80px; background-color: #75564d;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-dark mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Inspection</h4>
                        <p class="m-0">Thorough and professional inspections to ensure your vehicle’s safety and quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 mb-4" style="color: #ffffff;">50% OFF</h1>
                    <h1 class="text-uppercasemb-4" style="color: #ffffff;">Special Offer For New Members</h1>
                    <p class="mb-4" >Only for Sunday from 1st Jan to 30th Jan 2045</p>
                    <a class="btn mt-2 py-3 px-5" href="" style="background-color: #75564d; color: #ffffff;">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
            <div class="row">
                <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                            <img class="img-fluid mb-4" src="<?php echo e(asset($voiture->photo)); ?>" alt="">
                            <h4 class="text-uppercase mb-4"> <?php echo e($voiture->marque); ?></h4>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-secondary mr-1"></i>
                                    <span> <?php echo e($voiture->annee); ?></span>
                                </div>
                                <div class="px-2 border-left border-right">
                                    <i class="fa fa-cogs text-secondary mr-1"></i>
                                    <span><?php echo e($voiture->transmission); ?></span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-secondary mr-1"></i>
                                    <span><?php echo e($voiture->kilometrage); ?></span>
                                </div>
                            </div>
                            <?php if(session('client_prenom')): ?>
                                <a class="btn px-3" href="<?php echo e(route('book', ['car_id' => $voiture->Matricule])); ?>"  style="background-color: #2B2E4A; color: #ffffff;">
                                    $<?php echo e($voiture->prix); ?>/Day
                                </a>
                            <?php else: ?>
                                <a class="btn px-3" href="<?php echo e(route('login.client')); ?>" style="background-color: #2B2E4A; color: #ffffff;">
                                    $<?php echo e($voiture->prix); ?>/Day
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 d-flex align-items-center justify-content-between" style="height: 350px; background-color: #F4F5F8; color: #2B2E4A;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="./assets/img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase mb-3" style="color: #2B2E4A;">Want to be driver?</h3>
                            <p class="mb-4">Drive with us and earn anytime, anywhere. Join now!</p>
                            <a class="btn btn-secondary py-2 px-4" href="<?php echo e(route('cars')); ?>">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 d-flex align-items-center justify-content-between" style="height: 350px; background-color: #2B2E4A; color: #F4F5F8">
                        <div class="text-left">
                            <h3 class="text-uppercase mb-3" style="color:#F4F5F8; ">Looking for a car?</h3>
                            <p class="mb-4">Find the perfect ride with us — easy, fast, and reliable!</p>
                            <a class="btn btn-light py-2 px-4" href="<?php echo e(route('cars')); ?>">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="./assets/img/banner-right.png" alt="">
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
                        <a href=""><img class="w-100" src="./assets/img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="./assets/img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="./assets/img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="./assets/img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="./assets/img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="./assets/img/gallery-6.jpg" alt=""></a>
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
    <!-- JavaScript -->
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

</html>
<?php /**PATH C:\Users\PC-ISLAM\Desktop\website\resources\views/front/home.blade.php ENDPATH**/ ?>