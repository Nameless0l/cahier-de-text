<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use App\Models\Agence;
use App\Services\AuthServices;
use App\Services\BusServices;
use Illuminate\Http\Request;

class BusController extends Controller
{


    public function bus(Request $request)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $agences = Agence::all()->pluck('codeagence');
            return view('forms.bus', compact('agences'));
        } else {
            abort('403');
        }
    }

    public function liste_bus()
    {
        return (new BusServices())->liste_bus();
    }

    public function storebus(Request $request)
    {
        
        return (new BusServices())->storebus($request);

    }


    public function editerbus($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $agences = Agence::all();
            $bus = Bu::findOrFail($id);
            return view('editer.editerbus', compact('agences', 'bus'));
        } else {
            abort('403');
        }
    }

    public function modifierbus(Request $request, $id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $this->validate($request, [
                'codeagence' => 'required',
                'codebus' => 'required',
                'marque' => 'required',
                'places' => 'required'

            ]);
            (new bu())->update_bus($id, $request);
            return redirect('/liste_bus')->with('status', 'bus modifié avec succès');
        } else {
            abort('403');
        }
    }
    public function supprimerbus($id)
    {
        if (AuthServices::user_auth()->can('view', Agence::class)) {
            $bus = Bu::findOrFail($id);
            $bus->delete();
            return redirect()->back()->with('status', 'bus supprimé avec succès');
        } else {
            abort('403');
        }
    }

    public function activerbus($id)
    {
        return (new BusServices())->activerbus($id);
    }

    public function desactiverbus($id)
    {
        return (new BusServices())->desactiverbus($id);
    }
}
