<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUtilisateurRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'string|min:2',
            'prenom' => 'string|min:2',
            'email' => 'email',
            'date_naissance' => 'date',
        ];
    }
}
