<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilisateurRequest;
use App\Http\Requests\UpdateUtilisateurRequest;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function destroy($id)
    {
        Utilisateur::destroy($id);

        return redirect()->route('utilisateurs.index');
    }

    public function store(StoreUtilisateurRequest $request)
    {
        $utilisateur = Utilisateur::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'date_naissance' => $request->input('date_naissance'),
            'actif' => $request->input('actif'),
        ]);

        return redirect()->route('utilisateurs.show', [$utilisateur]);
    }

    public function update(UpdateUtilisateurRequest $request, $id)
    {
        $utilisateur = Utilisateur::find($id);

        if ($request->input('nom')) {
            $utilisateur->nom = $request->input('nom');
        }
        if ($request->input('prenom')) {
            $utilisateur->prenom = $request->input('prenom');
        }
        if ($request->input('email')) {
            $utilisateur->email = $request->input('email');
        }
        if ($request->input('date_naissance')) {
            $utilisateur->date_naissance = $request->input('date_naissance');
        }
        if ($request->input('actif')) {
            $utilisateur->actif = $request->input('actif');
        }

        if ($utilisateur->isDirty()) {
            $utilisateur->save();
        }

        return redirect()->route('utilisateurs.show', [$utilisateur]);
    }

    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);

        return view('show', ['utilisateur' => $utilisateur]);
    }

    public function edit($id)
    {
        $utilisateur = Utilisateur::find($id);

        return view('edit', ['utilisateur' => $utilisateur]);
    }

    public function index()
    {
        $utilisateurs = Utilisateur::all();

        return view('index', ['utilisateurs' => $utilisateurs]);
    }
}
