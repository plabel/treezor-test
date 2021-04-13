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
            'nom' => 'required|string|size:2',
            'prenom' => 'required|string|size:2',
            'email' => 'required|email',
            'date_naissance' => 'required|date',
            'actif' => 'required|boolean',
        ];
    }
}
