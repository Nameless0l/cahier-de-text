<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use App\Models\Agence;
use App\Models\Voyage;
use App\Models\Chauffeur;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Utilisateursagence;
use App\Services\AuthServices;
use Illuminate\Support\Facades\Auth;

class AgenceController extends Controller
{
    public function index(){
        
        $voyages = Voyage::count();
        $reservations = Reservation::count();
        $bus = Bu::count();
        $chauffeurs = Chauffeur::count();
        return view('index', compact('voyages', 'reservations', 'bus', 'chauffeurs'));
        
    }

    
    public function login()
    {
        return view('login');        
    }

    public function check(Request $request)
    {
        
        try {
            $request->validate([
                'codeutilisateur' => 'required',
                'password' => 'required'
            ]);
            
            return (new AuthServices)->auth($request);    
        } catch (\Throwable $th) {
            
            return back()->with('fail', 'Error, refresh and try again');
        }
        
        
    }



   public function logout()
   {
    
    session()->pull('LoggedUser');
    return redirect('/');
    
   }



    
    public function liste_reservation()
    {
        
        $reservation = Reservation::where('etat', 0)->get();
        return view('reservations.liste_reservation', compact('reservation'));
    
    }

    




    

    public function imprimer()
    {
        if(session()->has('LoggedUser')){
        $reservation = Reservation::where('etat', 1)->get();
        return view('reservations.liste_reservation', compact('reservation')); 
    }else{
        return view('login');
    }
    }


    public function reservation()
    {
        $bus = Bu::where('status', 1)->get()->pluck('codebus');
        return view('reservations.reservation', compact('bus'));
    }


    public function storereservation(Request $request)
    {
        $request->validate(
            [
                'codebus' => 'required',
                'categorie' => 'required',
                'destination' => 'required',
                'prix' => 'required',
                'cni' => 'required', 
                'telephone' => 'required', 
                'voyageur' => 'required'
            ]);

            $reservation = new Reservation;
            $reservation->codebus = $request->codebus;
            $reservation->categorie = $request->categorie;
            $reservation->destination = $request->destination;
            $reservation->prix = $request->prix;
            $reservation->cni = $request->cni;
            $reservation->telephone = $request->telephone;
            $reservation->voyageur = $request->voyageur;
            $reservation->agence = 'agence';
            $reservation->depart = 'depart';
            $reservation->jour = 'jour';
            $reservation->heure = 'heure';
            $reservation->username='username';
            $reservation->date_reservation = 'date_reservation';
            $reservation->heure_reservation = 'jour_reservation';
            $reservation->etat = 0;
            $reservation->save();
            return redirect()->back()->with('status', 'reservation ajouté avec succès');
        
    }

    public function cocher($id)
    {

        $reservation = Reservation::find($id);
        $reservation->etat = 1;
        $reservation->update();
        return redirect()->back();
    }


    public function decocher($id)
    {
        $reservation = Reservation::find($id);
        $reservation->etat = 0;
        $reservation->update();
        return redirect()->back();
    }

    
    public function validation()
    {
        $reservation = Reservation::where('etat', 1)->get();
        return view('liste.validation', compact('reservation'));
    }
    
    
        
}
