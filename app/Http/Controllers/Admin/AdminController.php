<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Paiement;
class AdminController extends Controller
{
     
        public function show()
        {
            return view('Admin.login');
        }
        public function payments()

        {
            $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
            
        ];
        $paiements = DB::table('paiement')
            ->join('location', 'paiement.id_location', '=', 'location.id_location')
            ->join('utilisateur as f', 'location.cinutilisateur', '=', 'f.cinutilisateur')
            ->select(
                'paiement.*',
                'f.nomutilisateur',
                'f.prenomutilisateur',
                'location.id_location'
            )
            ->orderBy('paiement.date_paiement', 'desc')
            ->get();

        return view('Admin.payments', compact('paiements', 'stats'));            
        }
        public function User()
        {
            $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
        ];
           $clients = DB::table('utilisateur')
            ->where('Roletilutilisateur', 0)
            ->get();
           return view('Admin.User',  compact('stats', 'clients'));
        }
        public function reservations(){
        $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
        ];

        $reservations = DB::table('location')
            ->join('utilisateur', 'location.cinutilisateur', '=', 'utilisateur.cinutilisateur')
            ->join('voiture', 'location.Matricule', '=', 'voiture.Matricule')
            ->select('location.*', 'utilisateur.nomutilisateur', 'utilisateur.prenomutilisateur', 'voiture.marque', 'voiture.modele')
            ->orderByDesc('location.date_debut')
            ->get();

        $retards = DB::table('location')
            ->join('utilisateur', 'location.cinutilisateur', '=', 'utilisateur.cinutilisateur')
            ->join('voiture', 'location.Matricule', '=', 'voiture.Matricule')
            ->where('location.date_fin', '<', now())
            ->where('location.status', '!=', 'terminé')
            ->select('location.*', 'utilisateur.nomutilisateur', 'utilisateur.prenomutilisateur', 'voiture.marque', 'voiture.modele')
            ->get();

        return view('Admin.reservations', compact('stats', 'reservations', 'retards'));
    }

    public function changeStatus(Request $request)
    {
        $id = $request->query('id');
        $statut = $request->query('statut');

        DB::table('location')->where('id_location', $id)->update(['status' => $statut]);

        return redirect()->route('admin.reservations')->with('success', 'Statut mis à jour avec succès.');
    }

    public function confirmReturn(Request $request)
    {
        $id_location = $request->query('id');
        $date_retour_reel = now()->toDateString();

        $location = DB::table('location')->where('id_location', $id_location)->first();

        if (!$location) {
            return redirect()->route('admin.reservations')->with('error', 'Location non trouvée.');
        }

        $retard_jours = max(0, now()->diffInDays($location->date_fin, false));
        $status = 'terminé';

        DB::table('location')->where('id_location', $id_location)->update([
            'date_retour_reel' => $date_retour_reel,
            'status' => $status,
        ]);

        return redirect()->route('admin.reservations')->with('success', "Retour confirmé avec statut : $status.");
    }
        public function messages()
        {
            $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
        ];
            $messages = DB::table('messages')
                ->orderBy('date_envoi', 'desc')
                ->get();
              return view('Admin.message', compact('stats','messages'));
    
        }  
         public function index()
        {
            $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
        ];
       $derniere_reservations = DB::table('location')
            ->join('utilisateur', 'location.cinutilisateur', '=', 'utilisateur.cinutilisateur')
            ->join('voiture', 'location.Matricule', '=', 'voiture.Matricule')
            ->select('location.*', 'utilisateur.nomutilisateur', 'utilisateur.prenomutilisateur', 'voiture.marque', 'voiture.modele')
            ->get();

        return view('Admin.index', compact('stats', 'derniere_reservations'));
            
        }       
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $client = Client::where('loginutilisateur', $request->login)
                        ->where('Roletilutilisateur', 1) 
                        ->first();

        if ($client && $client->passwordutilisateur === $request->password) {
            Session::put('Admin_id', $client->cinutilisateur);
            Session::put('Admin_prenom', $client->prenomutilisateur);

            return redirect()->route('index');
        } else {
            return back()->with('error', 'Incorrect login or password');
        }
    }

    public function logout()
    {
        Session::forget('Admin_id');
        Session::forget('Admin_prenom');
        return redirect()->route('home');
    }
     public function dashboard()
    {
        $stats = [
            'voitures' => DB::table('voiture')->count(),
            'locations' => DB::table('location')->count(),
            'clients' => DB::table('utilisateur')->where('Roletilutilisateur', 0)->count(),
            'paiements' => DB::table('paiement')->count(),
        ];

        $today = date('Y-m-d');

        $voituresDisponibles = DB::table('voiture as v')
            ->whereNotExists(function ($query) use ($today) {
                $query->select(DB::raw(1))
                      ->from('location as l')
                      ->whereRaw('l.Matricule = v.Matricule')
                      ->where('l.status', '!=', 'annulée')
                      ->whereRaw("'$today' BETWEEN l.date_debut AND l.date_fin");
            })
            ->get();

        return view('Admin.acceuil', compact('stats', 'voituresDisponibles'));
    }
    public function edit($matricule)
    {
        $car = DB::table('Voiture')->where('Matricule', $matricule)->first();
        if (!$car) {
            return redirect()->route('Admin.acceuil')->with('error', 'Voiture non trouvée.');
        }
        return view('Admin.editCar', compact('car'));
    }
     public function update(Request $request, $matricule)
    {


        $car = DB::table('Voiture')->where('Matricule', $matricule)->first();
        if (!$car) {
            return redirect()->route('Admin.acceuil')->with('error', 'Voiture non trouvée.');
        }

        $imagePath = $car->photo;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $imagePath = 'img/' . $filename;
        }

        $updated = DB::table('Voiture')->where('Matricule', $matricule)->update([
            'couleur' => $request->input('couleur'),
            'prix' => $request->input('prix'),
            'modele' => $request->input('Model'),
            'marque' => $request->input('marque'),
            'photo' => $imagePath,
        ]);
        if ($updated) {
            return redirect()->route('acceuil', $request->input('Matricule'))->with('success', 'Modification réussie.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la modification.');
        }
    }
    public function destroy($matricule)
    {
        $deleted = DB::table('Voiture')->where('Matricule', $matricule)->delete();

        if ($deleted) {
            return redirect()->route('acceuil')->with('success', 'Voiture supprimée avec succès.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la suppression.');
        }
    }
        public function create()
    {
        return view('Admin.addCar'); 
    }
    public function store(Request $request)
    {
        
        
        $imagePath = null;
        
            if ($request->hasFile('photo')) { 
                $file = $request->file('photo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img'), $filename); 
                $imagePath = 'img/' . $filename;      
            }

        DB::table('Voiture')->insert([
            'Matricule'  => $request->input('Matricule'),
            'couleur'    => $request->input('couleur'),
            'prix'       => $request->input('prix'),
            'modele'     => $request->input('Model'),
            'marque'     => $request->input('marque'),
            'photo'      => $imagePath,
            'disponible' => 1
        ]);

        return redirect()->route('cars.create')->with('success', 'Voiture ajoutée avec succès.');
    }
    public function showClient($cin)
    {
        $client = DB::table('utilisateur')->where('cinutilisateur', $cin)->first();

        if (!$client) {
            return redirect()->route('User')->with('error', 'Client non trouvé.');
        }

        return view('Admin.show', compact('client'));
    }
    public function destroyClient($cin)
    {
        $client = DB::table('utilisateur')->where('cinutilisateur', $cin)->first();

        if (!$client) {
            return redirect()->route('User')->with('error', 'Client non trouvé.');
        }

        DB::table('utilisateur')->where('cinutilisateur', $cin)->delete();

        return redirect()->route('User')->with('success', 'Client supprimé avec succès.');
    }
    public function editClient($cin)
    {
        $client = DB::table('utilisateur')->where('cinutilisateur', $cin)->first();

        if (!$client) {
            return redirect()->route('client.index')->with('error', 'Client non trouvé.');
        }

        return view('Admin.edit', compact('client'));
    }
    public function updateClient(Request $request, $cin)
    {


        $client = DB::table('utilisateur')->where('cinutilisateur', $cin)->first();

        if (!$client) {
            return redirect()->route('User')->with('error', 'Client non trouvé.');
        }

        DB::table('utilisateur')->where('cinutilisateur', $cin)->update([
            'nomutilisateur' => $request->nomutilisateur,
            'prenomutilisateur' => $request->prenomutilisateur,
            'adresseutilisateur' => $request->adresseutilisateur,
            'villeutilisateur' => $request->villeutilisateur,
            'telutilisateur' => $request->telutilisateur,
            'typeutilisateur' => $request->typeutilisateur,
            'loginutilisateur' => $request->loginutilisateur,
            'passwordutilisateur' => $request->passwordutilisateur,

        ]);

        return redirect()->route('User')->with('success', 'Client modifié avec succès.');
    }
        public function marquerCommeLu($id)
    {
        DB::table('messages')->where('id', $id)->update(['lu' => 1]);
        return response()->noContent(); 
    }
        public function destroyMessage($id)
    {
        DB::table('messages')->where('id', $id)->delete();
        return redirect()
            ->route('messages')
            ->with('success', 'Message supprimé avec succès.');
    }
     public function showContrat($id)
    {
        $location = DB::table('Location as l')
            ->join('utilisateur as u', 'l.cinutilisateur', '=', 'u.cinutilisateur')
            ->join('voiture as v', 'l.Matricule', '=', 'v.Matricule')
            ->join('contrat as c', 'l.numContrat', '=', 'c.numContrat')
            ->where('l.Id_location', $id)
            ->select('l.*', 'u.*', 'v.*', 'c.*')
            ->first();

        if (!$location) {
            abort(404, 'Location introuvable');
        }

        if (Auth::check() && Auth::user()->cinutilisateur !== $location->cinutilisateur) {
            abort(403, 'Accès non autorisé');
        }

        return view('Admin.contrat', compact('location'));
    }
        public function createpayment(Request $request)
    {
        $id_location = $request->query('id_location');
        return view('Admin.addpayments', compact('id_location'));
    }
    public function storepayment(Request $request)
    {

        Paiement::create([
            'date_paiement' => date('Y-m-d'),
            'montant' => $request->montant,
            'mode_paiement' => $request->mode_paiement,
            'id_location' => $request->id_location,
        ]);

        return redirect()->back()->with('success', 'Paiement enregistré avec succès.');
    }

}