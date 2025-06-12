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
        body {
            font-family: 'Arial', sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .contract-header {
            border-bottom: 2px solid #007bff;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .contract-header h4 {
            margin-top: 10px;
            color: #007bff;
            font-size: 22px;
        }

        .contract-header img {
            max-height: 60px;
        }

        .contract-section {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.6;
        }

        .signature-area {
            margin-top: 40px;
        }

        .signature-area .col-md-6 {
            width: 48%;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }

        .signature-line {
            margin-top: 40px;
            border-top: 1px solid #333;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .print-button {
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 15px;
            border-radius: 5px;
            text-decoration: none;
            margin: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn i {
            margin-right: 5px;
        }

        @media print {
            .print-button {
                display: none;
            }

            body {
                background: white;
            }

            .container {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="contract-container">
        <!-- En-tête -->
        <div class="contract-header text-center">
            <img src="{{ asset('assets/img/LOGO.png') }}" alt="Logo">
            <h4>CONTRAT DE LOCATION</h4>
            <p>N° {{ $location->numContrat }} - Date: {{ \Carbon\Carbon::parse($location->dateEtablissement)->format('d/m/Y') }}</p>
        </div>

        <!-- Parties -->
        <div class="contract-section">
            <p><strong>Entre :</strong> Société <strong>driveNow</strong>, sise à Errachidia,</p>
            <p><strong>Et :</strong> {{ $location->typeutilisateur == 'entreprise' ? 'La société' : 'M./Mme' }}
                <strong>{{ $location->nomutilisateur }} {{ $location->prenomutilisateur }}</strong>,
                CIN/RC : {{ $location->cinutilisateur }},
                à {{ $location->villeutilisateur }}.
            </p>
        </div>

        <!-- Véhicule -->
        <div class="contract-section">
            <p><strong>Véhicule :</strong> {{ $location->marque }} {{ $location->modele }},
                Immatriculation : {{ $location->Matricule }},
                Couleur : {{ $location->couleur }}.
            </p>
        </div>

        <!-- Dates -->
        <div class="contract-section">
            <p><strong>Durée :</strong> du {{ \Carbon\Carbon::parse($location->date_debut)->format('d/m/Y') }}
                au {{ \Carbon\Carbon::parse($location->date_fin)->format('d/m/Y') }}.
            </p>
        </div>

        <!-- Prix -->
        <div class="contract-section">
            <p><strong>Montant :</strong> {{ $location->montant_total }} DH</p>
            <p><strong>Paiement :</strong> {{ $location->status }}</p>
        </div>

        <!-- Signatures -->
        <div class="signature-area row mt-4 text-center">
            <div class="col-md-6">
                <p>Fait à {{ $location->villeutilisateur }}, le {{ now()->format('d/m/Y') }}</p>
                <p>Client</p>
                <div class="signature-line"></div>
            </div>
            <div class="col-md-6">
                <p>Pour driveNow</p>
                <div class="signature-line"></div>
            </div>
        </div>

        <!-- Impression -->
        <div class="text-center print-button">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="bi bi-printer"></i> Imprimer le contrat
            </button>
                <a href="{{ route('admin.reservations') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Retour aux réservations
                </a>

        </div>
    </div>
</div>
</body>
</html>