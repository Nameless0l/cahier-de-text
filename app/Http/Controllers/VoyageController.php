<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use App\Models\Agence;
use App\Models\Voyage;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function voyage(){
    if(session()->has('LoggedUser')){
        $bus = Bu::where('status', 1)->get()->pluck('codebus');
        $agences = Agence::all()->pluck('codeagence');
        $chauffeurs = Chauffeur::where('status', 1)->get()->pluck('name');
        return view('forms.voyage', compact('bus', 'agences', 'chauffeurs'));
    }else{
        return view('login');
    }
    }

    public function liste_voyage(){
        if(session()->has('LoggedUser')){
        $voyages = Voyage::all();
        return view('liste.liste_voyage', compact('voyages'));
    }else{
        return view('login');
    }
    }
    public function storevoyages(Request $request)
    {
        $this->validate($request, [
            'codeagence' => 'required',
            'depart' => 'required',
            'destination' => 'required',
            'codebus' => 'required',
            'chauffeur' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'places' => 'required',
            'jour' => 'required',
            'heure' => 'required',
        ]);
         $voyages = new Voyage();
         $voyages->codeagence = $request->input('codeagence');
         $voyages->depart = $request->input('depart');
         $voyages->destination = $request->input('destination');
         $voyages->codebus = $request->input('codebus');
         $voyages->chauffeur = $request->input('chauffeur');
         $voyages->categorie = $request->input('categorie');
         $voyages->prix = $request->input('prix');
         $voyages->places = $request->input('places');
         $voyages->jour = $request->input('jour');
         $voyages->heure = $request->input('heure');
         $voyages->save();
         return redirect()->back()->with('status', 'voyage céé avec succès');
    }

    public function editervoyage($id)
    {
        if(session()->has('LoggedUser')){
        $bus = Bu::where('status', 1)->get();
        $agences = Agence::all();
        $chauffeurs = Chauffeur::where('status', 1)->get();
        $voyages = Voyage::findOrFail($id);
        return view('editer.editervoyage', compact('bus', 'agences', 'chauffeurs', 'voyages'));
    }else{
        return view('login');
    }
    }

    public function modifiervoyage(Request $request, $id)
    {
        
        $this->validate($request, [
            'codeagence' => 'required',
            'depart' => 'required',
            'destination' => 'required',
            'codebus' => 'required',
            'chauffeur' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'places' => 'required',
            'jour' => 'required',
            'heure' => 'required',
        ]);
         $voyages = Voyage::findOrFail($id);
         $voyages->codeagence = $request->input('codeagence');
         $voyages->depart = $request->input('depart');
         $voyages->destination = $request->input('destination');
         $voyages->codebus = $request->input('codebus');
         $voyages->chauffeur = $request->input('chauffeur');
         $voyages->categorie = $request->input('categorie');
         $voyages->prix = $request->input('prix');
         $voyages->places = $request->input('places');
         $voyages->jour = $request->input('jour');
         $voyages->heure = $request->input('heure');
         $voyages->update();
         return redirect('/liste_voyage')->with('status', 'voyage modifié avec succès');
    }

    public function supprimervoyage($id)
    {
        $voyage = Voyage::findOrFail($id);
        $voyage->delete();
        return redirect()->back()->with('status', 'produit supprimé avec succès');
    }



    public function voyage1(){
        $bus = Bu::where('status', 1)->get()->pluck('codebus');
        $agences = Agence::all()->pluck('codeagence');
        $chauffeurs = Chauffeur::where('status', 1)->get()->pluck('name');
        return view('user1.voyage', compact('bus', 'agences', 'chauffeurs'));
    }

    public function liste_voyage1(){
        $voyages = Voyage::all();
        return view('user1.liste_voyage', compact('voyages'));
    }
    public function storevoyages1(Request $request)
    {
        $this->validate($request, [
            'codeagence' => 'required',
            'depart' => 'required',
            'destination' => 'required',
            'codebus' => 'required',
            'chauffeur' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'places' => 'required',
            'jour' => 'required',
            'heure' => 'required',
        ]);
         $voyages = new Voyage();
         $voyages->codeagence = $request->input('codeagence');
         $voyages->depart = $request->input('depart');
         $voyages->destination = $request->input('destination');
         $voyages->codebus = $request->input('codebus');
         $voyages->chauffeur = $request->input('chauffeur');
         $voyages->categorie = $request->input('categorie');
         $voyages->prix = $request->input('prix');
         $voyages->places = $request->input('places');
         $voyages->jour = $request->input('jour');
         $voyages->heure = $request->input('heure');
         $voyages->save();
         return redirect()->back()->with('status', 'voyage céé avec succès');
    }

    public function editervoyage1($id)
    {
        $bus = Bu::where('status', 1)->get()->pluck('codebus');
        $agences = Agence::all()->pluck('codeagence');
        $chauffeurs = Chauffeur::where('status', 1)->get()->pluck('name');
        $voyages = Voyage::findOrFail($id);
        return view('user1.editer.editervoyage', compact('bus', 'agences', 'chauffeurs', 'voyages'));
    }

    public function modifiervoyage1(Request $request, $id)
    {
        
        $this->validate($request, [
            'codeagence' => 'required',
            'depart' => 'required',
            'destination' => 'required',
            'codebus' => 'required',
            'chauffeur' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'places' => 'required',
            'jour' => 'required',
            'heure' => 'required',
        ]);
         $voyages = Voyage::findOrFail($id);
         $voyages->codeagence = $request->input('codeagence');
         $voyages->depart = $request->input('depart');
         $voyages->destination = $request->input('destination');
         $voyages->codebus = $request->input('codebus');
         $voyages->chauffeur = $request->input('chauffeur');
         $voyages->categorie = $request->input('categorie');
         $voyages->prix = $request->input('prix');
         $voyages->places = $request->input('places');
         $voyages->jour = $request->input('jour');
         $voyages->heure = $request->input('heure');
         $voyages->update();
         return redirect('user1.liste_voyage')->with('status', 'voyage modifié avec succès');
    }

    public function supprimervoyage1($id)
    {
        $voyage = Voyage::findOrFail($id);
        $voyage->delete();
        return redirect()->back()->with('status', 'produit supprimé avec succès');
    }

    
}

