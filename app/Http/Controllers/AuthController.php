<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Proprio;
use App\Models\TypePersonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{// Gestion de la connexion du proprio
    public function login_proprio(Request $request)
    {
        $request->validate([
            'numero_telephone' => 'required|exists:proprios,numero_telephone',
            'type_id' => 'required|exists:types_personnes,id',
        ]);

        $proprio = Proprio::where('numero_telephone', $request->numero_telephone)->first();

        // Vérifier si le type de proprio correspond
        if ($proprio->type_id != $request->type_id) {
            return back()->withErrors(['type_id' => 'Type de proprio incorrect.'])->withInput();
        }

        return ('ok'); // Vous pouvez rediriger vers votre tableau de bord ou une autre route
    }

    // Déconnexion du proprio
    public function logout_proprio()
    {
        Auth::logout();
        return redirect()->route('proprio.login');
    }


    // Méthode pour afficher le formulaire de connexion admin
    public function showAdminLoginForm()
    {
        return view('auth.login-admin');
    }

    // Méthode pour afficher le formulaire de connexion proprio
    public function showProprioLoginForm()
    {
        $type = TypePersonne::all();
        return view('auth.login-proprio', compact('type'));
    }
}
