<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Proprio;
use App\Models\TypePersonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     // Méthode pour afficher le formulaire de connexion client
     public function showClientLoginForm()
     {

        $type = TypePersonne::all();
         return view('auth.login-client', compact ('type'));
     }

     // Méthode pour afficher le formulaire de connexion admin
     public function showAdminLoginForm()
     {
         return view('auth.login-admin');
     }

     // Méthode pour afficher le formulaire de connexion vendeur
     public function showProprioLoginForm()
     {
        $type = TypePersonne::all();
         return view('auth.login-proprio', compact ('type'));
     }
}
