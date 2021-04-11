<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilisateurRequest;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function store(StoreUtilisateurRequest $request)
    {
        var_dump($request);
        $utilisateur = Utilisateur::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'date_naissance' => $request->input('date_naissance'),
            'actif' => $request->input('actif'),
        ]);
        var_dump($utilisateur);

        return redirect()->route('utilisateurs.show');
    }
}
