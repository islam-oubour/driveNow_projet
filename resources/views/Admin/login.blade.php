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
</head>
<body>
<div class="container-fluid py-5 px-lg-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="bg-light mb-4" style="padding: 30px; box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);">
                <div class="text-center mb-4">
                    <h2 class="text-dark">Log In</h2>
                    <p class="text-muted">Access your DriveNow Admin area</p>
                </div>
                <form method="POST" action="{{ route('Admin') }} ">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email" class="text-dark">Email</label>
                        <input type="email" class="form-control p-4 bg-white" id="email" placeholder="Email" name="login" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="text-dark">Password</label>
                        <input type="password" class="form-control p-4 bg-white" placeholder="password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" required>
                            <label class="form-check-label text-muted" for="remember">Remember me</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-block py-3 text-light" style="background-color: #75564d;" value="Se connecter" name="connecter">
                </form>
            </div>
        </div>
    </div>
</div>
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
</html>