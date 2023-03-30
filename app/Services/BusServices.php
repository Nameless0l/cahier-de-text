<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Utilisateursagence;
use App\Models\Agence;
use App\Models\agences_users;
use App\Models\Bu;

class BusServices
{
    public function liste_bus()
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $bus = Bu::all();
            return view('liste.liste_bus', compact('bus'));
        } else {
            abort('403');
        }
    }

    public function storebus(Request $request)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $request->validate($request, [
                'codeagence' => 'required',
                'codebus' => 'required',
                'marque' => 'required',
                'places' => 'required'
            ]);
           (new Bu())->create_bus($request);
            return redirect()->back()->with('status', 'bus ajouté avec succès');
        } else {
            abort('403');
        }
    }


    public function activerbus($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $bus = Bu::findOrFail($id);
            $bus->status = 1;
            $bus->update();
            return redirect()->back()->with('status', 'bus activé avec succès');
        } else {
            abort('403');
        }
    }

    public function desactiverbus($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $bus = Bu::findOrFail($id);
            $bus->status = 0;
            $bus->update();
            return redirect()->back()->with('status', 'bus désactivé avec succès');
        } else {
            abort('403');
        }
    }
}
