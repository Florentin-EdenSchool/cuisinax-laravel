<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'libelle_plat' => ['required', 'string', 'max:15', 'min:3', 'unique:plats'],
            'poids' => ['required', 'number', 'max:10000', 'min:1'],
            'prix' => ['required', 'string', 'max:1000', 'min:3'],
            'id_origine' => ['required'],
            'id_type_nourriture' => ['required'],
            'id_type_plat' => ['required'],
        ];
    }
}
