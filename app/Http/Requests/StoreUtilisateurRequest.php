<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUtilisateurRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email|unique:App\Models\Utilisateur,email',
            'date_naissance' => 'required|date',
            'actif' => 'required|boolean',
        ];
    }
}
