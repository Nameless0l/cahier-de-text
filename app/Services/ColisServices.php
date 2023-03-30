

<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Utilisateursagence;
use App\Models\Agence;
use App\Models\agences_users;
use App\Models\Bu;

class ColisServices
{
    public function store_colis(Request $request)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $bus = Bu::all();
            return view('liste.liste_bus', compact('bus'));
        } else {
            abort('403');
        }
    }

   
}