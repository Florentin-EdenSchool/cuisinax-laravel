<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypePlatRequest extends FormRequest
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
            'libelle_type_plat' => ['required', 'string', 'max:10', 'min:3', 'unique:type_plats'],
        ];
    }
}
