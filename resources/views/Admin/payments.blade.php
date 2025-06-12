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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>
        <div class="admin-container">

<aside class="sidebar">
    <div class="logo">
        <h1>driveNow</h1>
        <p>Administration</p>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><a href="{{ route('acceuil') }}"><i class="bi bi-car-front"></i> Manage Cars</a></li>
            <li><a href="{{ route('User') }}"><i class="fas fa-users"></i> Uers</a></li>
            <li><a href="{{ route('admin.reservations') }}"><i class="bi bi-calendar-check"></i> Rentals</a></li>
            <li class="active"><a href="{{ route('payments') }}"><i class="bi bi-credit-card"></i> Payments</a></li>
            <li><a href="{{ route('messages') }}"><i class="bi bi-envelope"></i> Messages</a></li>
            <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </nav>
</aside>
        <main class="main-content">
            <header class="admin-header">
                <h2>Dashboard</h2>
                <div class="admin-profile">
                @if(session('Admin_prenom'))
                  <span>{{session('Admin_prenom')}}</span>
                  <div class="avatar">{{substr(session('Admin_prenom'), 0, 1)}} </div>
                @else
                  <span>Admin</span>
                  <div class="avatar">A</div>
                @endif
              </div>
            </header>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon blue">
                       <i class="bi bi-car-front"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Cars</h3>
                        <p class="number">{{ $stats['voitures'] }}</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Users</h3>
                        <p class="number">{{ $stats['clients'] }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Rentals</h3>
                        <p class="number">{{ $stats['locations'] }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon red">
                      <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Payments</h3>
                        <p class="number">{{ $stats['paiements'] }}</p>
                    </div>
                </div>
            </div>   
            <div class="recent-activity">
                <h2>Payments</h2>
                <table>
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Rental ID</th>
                                <th>Amount</th>
                                <th>Method</th>
                            </tr>
                    </thead>
                    <tbody class="text-dark">
                            @forelse($paiements as $paiement)
                            <tr>
                                <td>{{ $paiement->id_paiement }}</td>
                                <td>{{ \Carbon\Carbon::parse($paiement->date_paiement)->format('d/m/Y H:i') }}</td>
                                <td>{{ $paiement->prenomutilisateur }} {{ $paiement->nomutilisateur }}</td>
                                <td>{{ $paiement->id_location }}</td>
                                <td>{{ $paiement->montant }} €</td>
                                <td>{{ $paiement->mode_paiement }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">Aucune paiement</td>
                            </tr>
                            @endforelse
                    </tbody>
                </table>
            </div>             
        </main>
    </div>
</body>
</html>