<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Chauffeur;
use App\Services\AuthServices;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    public function chauffeur()
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $agences = Agence::all()->pluck('codeagence');
            return view('forms.chauffeur', compact('agences'));
        } else {
            abort('403');
        }
    }

    public function liste_chauffeur()
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $chauffeur = Chauffeur::all();
            return view('liste.liste_chauffeur', compact('chauffeur'));
        } else {
            abort('403');
        }
    }


    public function storechauffeur(Request $request)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $this->validate($request, [
                'codeagence' => 'required',
                'name' => 'required',
                'permis' => 'required'
            ]);
            $chauffeur = new Chauffeur();
            $chauffeur->codeagence = $request->input('codeagence');
            $chauffeur->name = $request->input('name');
            $chauffeur->permis = $request->input('permis');
            $chauffeur->status = 1;
            $chauffeur->save();
            return redirect()->back()->with('status', 'chauffeur ajouté avec succès');
        } else {
            abort('403');
        }
    }


    public function editerchauffeur($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $agences = Agence::all();
            $chauffeur = Chauffeur::findOrFail($id);
            return view('editer.editerchauffeur', compact('agences', 'chauffeur'));
        } else {
            abort('403');
        }
    }

    public function modifierchauffeur(Request $request, $id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $this->validate($request, [
                'codeagence' => 'required',
                'name' => 'required',
                'permis' => 'required'
            ]);

            $chauffeur = Chauffeur::findOrFail($id);
            $chauffeur->codeagence = $request->input('codeagence');
            $chauffeur->name = $request->input('name');
            $chauffeur->permis = $request->input('permis');
            $chauffeur->update();
            return redirect('/liste_chauffeur')->with('status', 'chauffeur modifié avec succès');
        } else {
            abort('403');
        }
    }
    public function supprimerchauffeur($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $chauffeur = Chauffeur::findOrFail($id);
            $chauffeur->delete();
            return redirect()->back()->with('status', 'chauffeur supprimé avec succès');
        } else {
            abort('403');
        }
    }

    public function activerchauffeur($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $chauffeur = Chauffeur::findOrFail($id);
            $chauffeur->status = 1;
            $chauffeur->update();
            return redirect()->back()->with('status', 'chauffeur activé avec succès');
        } else {
            abort('403');
        }
    }

    public function desactiverchauffeur($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $chauffeur = Chauffeur::findOrFail($id);
            $chauffeur->status = 0;
            $chauffeur->update();
            return redirect()->back()->with('status', 'chauffeur désactivé avec succès');
        } else {
            abort('403');
        }
    }
}
