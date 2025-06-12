
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>projet_driveNow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
                    @if(session('client_prenom'))
                        <a class="text-white px-3" href="{{ route('client.logout') }}">
                            <div style="display: inline;">Logout</div>
                            <i class="fas fa-sign-out-alt" style="margin-left: 5px;"></i>
                        </a>
                        <span class="text-white">Welcome, {{ session('client_prenom') }}</span>
                        <div class="avatar">{{ strtoupper(substr(session('client_prenom'), 0, 1)) }}</div>
                    @else
                        <a class="text-white px-3" href="{{ route('login.client') }}">Sign in</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="{{ route('signUp') }}">Sign up</a>
                    @endif
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
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link active">Services</a>
                        <a href="{{ route('cars') }}" class="nav-item nav-link">Cars</a>
                    @if(session('client_prenom'))
                        <a href="{{ route('carRental') }}" class="nav-item nav-link">Car Rental</a>
                    @endif
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Search Start -->
<form method="GET" action="{{ route('cars') }}">
    @csrf
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select name="pickup_location" class="custom-select px-4 mb-3" style="height: 50px;" required>
                    <option selected>Pickup Location</option>
                    <option value="errachidia">Errachidia</option>
                    <option value="midelt">Midelt</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select name="drop_location" class="custom-select px-4 mb-3" style="height: 50px;" required>
                    <option selected>Drop Location</option>
                    <option value="errachidia">Errachidia</option>
                    <option value="midelt">Midelt</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="date" name="pickup_date" class="form-control p-4 mb-3" placeholder="Pickup Date" required/>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <input type="date" name="drop_date" class="form-control p-4 mb-3" placeholder="Drop Date" required/>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select name="car_type" class="custom-select px-4 mb-3" style="height: 50px;" required>
                    <option selected>Select A Car</option>
                    @foreach($voitures as $voiture)
                    <option value="{{ $voiture->marque }}">{{ $voiture->marque }}</option>
                   @endforeach
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-block mb-3" type="submit" style="height: 50px; background-color: #75564d; color: #ffffff;">Search</button>
            </div>
        </div>
    </div>
</form>
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Service</h6>
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
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-2.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-3.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-4.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-5.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('img/gallery-6.jpg') }}" alt=""></a>
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
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
