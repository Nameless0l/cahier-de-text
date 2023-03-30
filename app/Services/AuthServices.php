<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Utilisateursagence;
use App\Models\Agence;
use App\Models\agences_users;

class AuthServices
{
    public function auth(Request $request)
    {
        $user_agence = agences_users::where('codeutilisateur', '=', $request->codeutilisateur)->where('password', '=', $request->password)->first();
        $Agence = Agence::where('codeagence', '=', $request->codeutilisateur)->where('password', '=', $request->password)->first();
        if ($Agence || $user_agence) {
            
            $user = isset($user_agence->id) ? $user_agence : $Agence;
                $request->session()->put('LoggedUser', $user->id);
                $request->session()->put('user', $user);
                
                return redirect('/index');
        } else {
            return back()->with('fail', 'credentials does not match our recordst');
        }
    }

    public  static function check_auth()
    {
        if(session()->has('LoggedUser')){
            return true;
        } else {
            return false;
        }
    }

    public static function user_auth()
    {
        if(session()->has('LoggedUser')){
            return session()->get('user');
        } else {
            return false;
        }
    }
}
