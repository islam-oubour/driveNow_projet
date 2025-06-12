<?php
namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
class AuthController extends Controller
{     
    public function show()
    {
         return view('front.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $client = Client::where('loginutilisateur', $request->login)
                        ->where('Roletilutilisateur', 0)
                        ->first();

        if ($client && $client->passwordutilisateur === $request->password) {
            Session::put('client_id', $client->cinutilisateur);
            Session::put('client_prenom', $client->prenomutilisateur);
            if ($request->filled('redirect')) {
                return redirect($request->redirect); 
            }
        return redirect()->route('home');
        } else {
            return back()->with('error', 'Incorrect login or password');
        }
    }
    public function logout()
    {
        Session::forget('client_id');
        Session::forget('client_prenom');
        return redirect()->route('home');
    }
}
?>