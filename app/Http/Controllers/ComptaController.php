<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use App\Models\Reservation;
use App\Services\ColisServices;
use Illuminate\Http\Request;

class ComptaController extends Controller
{
    public function colis()
    {

        return view('colis.compta');
    }

    public function storecolis(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'nom' => 'required',
            'expediteur' => 'required',
            'destinataire' => 'required',
            'ville1' => 'required',
            'ville2' => 'required',
            'telephone1' => 'required',
            'telephone2' => 'required',
            'frais_commission' => 'required'
        ]);

       /*  $colis = new Colis();
        $colis->nombre = $request->input('nombre');
        $colis->nom = $request->input('nom');
        $colis->expediteur = $request->input('expediteur');
        $colis->destinataire = $request->input('destinataire');
        $colis->ville1 = $request->input('ville1');
        $colis->ville2 = $request->input('ville2');
        $colis->telephone1 = $request->input('telephone1');
        $colis->telephone2 = $request->input('telephone2');
        $colis->frais_commission = $request->input('frais_commission');
        $colis->save(); */
        (new ColisServices())->store_colis($request);
        return redirect()->back()->with('status', 'Colis ajouté avec succès');
    }
}
