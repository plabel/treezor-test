<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilisateurRequest;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function store(StoreUtilisateurRequest $request)
    {
        $utilisateur = Utilisateur::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'date_naissance' => $request->input('date_naissance'),
            'actif' => $request->input('actif'),
        ]);

        return redirect()->route('utilisateurs.show',["id" => $utilisateur->id]);
    }
}
