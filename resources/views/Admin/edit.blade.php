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
        .registration-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
            <div class="registration-form bg-light " style=" box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);">
                <h1 class="display-4 text-uppercase text-center mb-5">modification</h1>
                <form action="{{ route('client.update', $client->cinutilisateur) }}" method="POST">
                        @csrf
                        @method('PUT')
                     <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="cin" name="cinutilisateur" value="{{ $client->cinutilisateur }}"  required>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="nomutilisateur" class="form-control" value="{{ $client->nomutilisateur }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                         <input type="text" name="prenomutilisateur" class="form-control" value="{{ $client->prenomutilisateur }}" required>
                        </div>
                         <div class="col-md-6">
                         <input type="text" name="adresseutilisateur" class="form-control" value="{{ $client->adresseutilisateur }}">
                        </div>                        
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                           <input type="text" name="telutilisateur" class="form-control" value="{{ $client->telutilisateur }}">
                        </div>
                        <div class="col-md-6">
                           <input type="text" name="villeutilisateur" class="form-control" value="{{ $client->villeutilisateur }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                           <input type="email" name="loginutilisateur" class="form-control" value="{{ $client->loginutilisateur }}" required>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="password" name="passwordutilisateur" value="{{ $client->passwordutilisateur }}" required>
                        </div>
                    </div>
                    <div class="form-row"> 
                        <select class="form-control" name="typeutilisateur" required>
                            <option value="{{ $client->typeutilisateur }}">{{ $client->typeutilisateur }}</option>
                            <option value="Personal">Personal</option>
                            <option value="Business">Busines</option>
                        </select>              
                    </div>
                    <input type="submit" name="modifier" value="modifier" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>