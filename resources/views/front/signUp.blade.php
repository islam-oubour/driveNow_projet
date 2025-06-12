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
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .registration-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .registration-form h1 {
            color: #75564d;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .registration-form .form-control {
            height: 50px;
            margin-bottom: 15px;
        }
        
        .registration-form .btn-primary {
            background-color:#75564d;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            margin-top: 20px;
        }
        
        .registration-form .btn-primary:hover {
            background-color: #75564d;
        }
        
        .form-row {
            margin-bottom: 15px;
        }
        
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

        <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="registration-form bg-light">
                <h1 class="display-4 text-uppercase text-center mb-5">Create Your Account</h1>
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="POST" action="{{ route('createAccount') }}">
                 @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" name="cinUtilisateur" class="form-control" placeholder=" National ID (CIN)" value="{{ old('cinUtilisateur') }}" required>
                         </div>
                        <div class="col-md-6">
                           <input type="text" name="nomUtilisateur" class="form-control" placeholder="Last Name" value="{{ old('nomUtilisateur') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="text" name="prenomUtilisateur" class="form-control" placeholder="First Name" value="{{ old('prenomUtilisateur') }}" required>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="adresseUtilisateur" class="form-control" placeholder="Address" value="{{ old('adresseUtilisateur') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="text" name="villeUtilisateur" class="form-control" placeholder="City" value="{{ old('villeUtilisateur') }}" required>
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="telUtilisateur" class="form-control" placeholder="Phone Number" value="{{ old('telUtilisateur') }}" required>
                       </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                           <input type="password" name="passwordUtilisateur" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="loginUtilisateur" class="form-control" placeholder="Login Utilisateur" value="{{ old('loginUtilisateur') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                          <input type="password" name="passwordUtilisateur_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="col-md-6" >
                            <select name="typeUtilisateur" class="form-control" required>
                                <option value="" disabled selected>Type Utilisateur</option>
                                <option value="Personal" {{ old('typeUtilisateur') == 'Personal' ? 'selected' : '' }}>Personal</option>
                                <option value="Business" {{ old('typeUtilisateur') == 'Business' ? 'selected' : '' }}>Busines</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">I agree to the <a href="#">Terms and Conditions</a></label>
                    </div>
                    <input type="submit" name="createAccount" value="Create Account" class="btn btn-primary">
                    <p class="text-center mt-3">Already have an account? <a href="{{ route('login.client') }}">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
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