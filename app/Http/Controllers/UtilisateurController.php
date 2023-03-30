<?php

namespace App\Http\Controllers;

use App\Models\agences_users;
use Illuminate\Http\Request;
use App\Services\AuthServices;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function utilisateur()
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            return view('forms.utilisateur');
        } else {
            abort('403');
        }
    }

    public function liste_utilisateur()
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {

            $user = agences_users::all();
            return view('liste.liste_utilisateur', compact('user'));
        } else {
            abort('403');
        }
    }

    public function storeuser(Request $request)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $request->validate([
                'nom' => 'required',
                'codeutilisateur' => 'required|unique:agences_users',
                'password' => 'required|min:5|max:12|unique:agences_users',
                'telephone' => 'required',
                'ville' => 'required',
                'role' => 'required',
                'email' => 'required'
            ]);
            $utilisateur = new agences_users();
            $utilisateur->name = $request->nom;
            $utilisateur->codeutilisateur = $request->codeutilisateur;
            $utilisateur->password = $request->password;
            $utilisateur->email = $request->email;
            $utilisateur->telephone = $request->telephone;
            $utilisateur->ville = $request->ville;
            $utilisateur->role = $request->role;
            $save = $utilisateur->save();
            return redirect()->back()->with('status', 'Operation sucessfully');
        } else {
            abort('403');
        }
    }

    public function editeruser($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $user = agences_users::findOrFail($id);
            return view('editer.editeruser', compact('user'));
        } else {
            abort('403');
        }
    }

    public function modifieruser(Request $request, $id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $request->validate([
                'nom' => 'required',
                'codeutilisateur' => 'required',
                'password' => 'required|min:5|max:12',
                'telephone' => 'required',
                'ville' => 'required',
                'role' => 'required',
            ]);

            $utilisateur = agences_users::findOrFail($id);
            $utilisateur->nom = $request->nom;
            $utilisateur->codeutilisateur = $request->codeutilisateur;
            $utilisateur->password = $request->password;
            $utilisateur->telephone = $request->telephone;
            $utilisateur->ville = $request->ville;
            $utilisateur->role = $request->role;
            $utilisateur->update();
            return redirect()->back()->with('status', 'utilisateur céé avec succès');
        } else {
            abort('403');
        }
    }

    public function supprimeruser($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $voyage = agences_users::findOrFail($id);
            $voyage->delete();
            return redirect()->back()->with('status', 'produit supprimé avec succès');
        } else {
            abort('403');
        }
    }
}
