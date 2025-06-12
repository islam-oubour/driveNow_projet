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
                <p>Admin Panel</p>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('index') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                    <li><a href="{{ route('acceuil') }}"><i class="bi bi-car-front"></i> Manage Cars</a></li>
                    <li><a href="{{ route('User') }}"><i class="fas fa-users"></i> Uers</a></li>
                    <li><a href="{{ route('admin.reservations') }}"><i class="bi bi-calendar-check"></i> Rentals</a></li>
                    <li><a href="{{ route('payments') }}"><i class="bi bi-credit-card"></i> Payments</a></li>
                    <li class="active"><a href="{{ route('messages') }}"><i class="bi bi-envelope"></i> Messages</a></li>
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
        <h2>Customer Messages</h2>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach($messages as $msg)
                        <tr>
                            <td>{{ $msg->nom }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->sujet }}</td>
                            <td>{{ date('d/m/Y H:i', strtotime($msg->date_envoi)) }}</td>
                            <td>
                                <span class="badge bg-{{ $msg->lu ? 'success' : 'warning' }}">
                                    {{ $msg->lu ? 'Lu' : 'Non lu' }}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalMessage{{ $msg->id }}">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <form action="{{ route('messages.destroy', $msg->id) }}"
                                    method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="modalMessage{{ $msg->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $msg->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel{{ $msg->id }}">
                                            Message de {{ $msg->nom }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Email :</strong> {{ $msg->email }}</p>
                                        <p><strong>Sujet :</strong> {{ $msg->sujet }}</p>
                                        <p><strong>Date :</strong> {{ date('d/m/Y H:i', strtotime($msg->date_envoi)) }}</p>
                                        <hr>
                                        <p>{!! nl2br(e($msg->message)) !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <form id="luForm{{ $msg->id }}" action="{{ route('messages.lu', ['id' => $msg->id]) }}" method="POST" target="hiddenIframe" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $msg->email }}" class="btn btn-primary"  onclick="event.preventDefault();  document.getElementById('luForm{{ $msg->id }}').submit();  window.open(this.href, '_blank');">
                                        Ouvrir dans Gmail
                                        </a>
                                        <iframe name="hiddenIframe" style="display: none;"></iframe>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
             </div>
          </div>          
        </main>
    </div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>