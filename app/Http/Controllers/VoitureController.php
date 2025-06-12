<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
   public function index()
    {
        $voitures = voiture::all(); 
        return view('voitures.index', compact('voitures'));
    }
}
