<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Voiture; 
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
   public function index()
    {
        $voitures = voiture::all(); 
        return view('front.home', compact('voitures'));
    }
    public function about()
    {
         $voitures = voiture::all(); 
        return view('front.about', compact('voitures'));
    }
        public function signUp()
    {
        return view('front.signUp');
    }
    public function contact()
    {
        $voitures = voiture::all(); 
        return view('front.contact', compact('voitures'));
    }
    public function services()
    {
        $voitures = voiture::all(); 
        return view('front.services', compact('voitures'));
    }
    public function car()
    {
        $voitures = voiture::all(); 
        return view('front.cars', compact('voitures'));
    }
    public function bookings()
    {
        if (!session()->has('client_id')) {
            return redirect()->route('login.client');
        }

        $clientId = Session::get('client_id');
        $locations = Location::with(['voiture', 'contrat'])
            ->where('cinutilisateur', $clientId)
            ->orderByDesc('date_debut')
            ->get();

        return view('front.carRental', compact('locations'));
    }
    public function book(Request $request, $car_id)
    {
        $car = DB::table('voiture')->where('Matricule', $car_id)->first();
        if (!$car) {
            return redirect()->route('cars')->with('error', 'Car not found.');
        }
        $error = null;
        $success = false;
        if ($request->isMethod('post')) {
            $date_debut = $request->date_debut;
            $date_fin = $request->date_fin;
            $lieu_prise = $request->lieu_prise;
            $lieu_retour = $request->lieu_retour;

            $jours = (strtotime($date_fin) - strtotime($date_debut)) / (60 * 60 * 24);

            if ($jours <= 0) {
                $error = '❌ The rental duration must be at least 1 day.';
            } else {
                $montant_total = $jours * $car->prix;
                $client_id = Session::get('client_id');
                $typeContrat = 'Standard';
                $dateEtablissement = date('Y-m-d');
                $conflict = DB::table('location')
                    ->where('Matricule', $car_id)
                    ->whereIn('status', ['en attente', 'confirmé', 'retardé'])
                    ->where(function ($query) use ($date_debut, $date_fin) {
                        $query->whereBetween('date_debut', [$date_debut, $date_fin])
                            ->orWhereBetween('date_fin', [$date_debut, $date_fin])
                            ->orWhereRaw('? BETWEEN date_debut AND date_fin', [$date_debut])
                            ->orWhereRaw('? BETWEEN date_debut AND date_fin', [$date_fin]);
                    })
                    ->exists();

                if ($conflict) {
                    $error = '❌ This car is already booked for that period.';
                } else {
                    $numContrat = DB::table('contrat')->insertGetId([
                        'typeContrat' => $typeContrat,
                        'dateEtablissement' => $dateEtablissement,
                        'cinetutilisateur' => $client_id,
                    ]);
                    DB::table('location')->insert([
                        'montant_total' => $montant_total,
                        'date_debut' => $date_debut,
                        'date_fin' => $date_fin,
                        'status' => 'en attente',
                        'numContrat' => $numContrat,
                        'Matricule' => $car_id,
                        'cinutilisateur' => $client_id,
                        'lieu_prise' => $lieu_prise,
                        'lieu_retour' => $lieu_retour,
                    ]);

                    $success = true;
                }
            }
        }

        return view('front.book', compact('car', 'error', 'success'));
    }
    public function search(Request $request)
    {
    $pickup_location = $request->pickup_location;
    $drop_location = $request->drop_location;
    $pickup_date = $request->pickup_date;
    $drop_date = $request->drop_date;
    $Matricule = $request->Matricule;

    $car = voiture::where('Matricule', $Matricule)->first();

    return view('front.book', compact(
        'pickup_location',
        'drop_location',
        'pickup_date',
        'drop_date',
        'car'
    ));
   }   
    public function createAccount(Request $request)
    {
        if ($request->isMethod('post')) {

            $client = new Client();
            $client->cinutilisateur = $request->cinUtilisateur;
            $client->nomutilisateur = $request->nomUtilisateur;
            $client->prenomutilisateur = $request->prenomUtilisateur;
            $client->adresseutilisateur = $request->adresseUtilisateur;
            $client->villeutilisateur = $request->villeUtilisateur;
            $client->telutilisateur = $request->telUtilisateur;
            $client->typeutilisateur = $request->typeUtilisateur;
            $client->loginutilisateur = $request->loginUtilisateur;
            $client->passwordutilisateur = $request->passwordUtilisateur;
            $client->Roletilutilisateur = 0;
            $client->save();

            return redirect()->route('signUp')->with('success', "Registration successful");
        }

        return view('front.signUp');
    }    
    public function store(Request $request)
    {


        $saved = DB::table('messages')->insert([
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet' => $request->Subject,
            'message' => $request->Message,
            'date_envoi' => now()->toDateString(),
            'lu' => 0,
        ]);

        if ($saved) {
            return redirect()->back()->with('success', 'Message sent successfully !');
        } else {
            return redirect()->back()->with('error', 'Error while sending');
        }
    }
    
}
?>