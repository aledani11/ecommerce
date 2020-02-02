<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class users_admin_Update extends FormRequest
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
            'nya' => 'required|max:100|alpha_dash',
            'pass' => 'nullable|confirmed|max:100|min:8|alpha_dash',
            'estado' => ['required', function ($attribute, $value, $fail) {
                if ($value!=='1' && $value!=='0') {
                    $fail('Estado invalido');
                }
            }],
            'nivel' => ['required', function ($attribute, $value, $fail) {
                if ($value!=='1' && $value!=='0') {
                    $fail('Nivel invalido');
                }
            }]
        ];
    }

    public function attributes()
    {
        return [
            'nya' => 'nombre y apellido',
            'pass' => 'contraseña',
            'estado' => 'estado',
            'nivel' => 'nivel',
        ];
    }

    public function messages()
    {
        return [
            'nya.required' => 'Ingrese :attribute',
            'pass.required' => 'Ingrese :attribute',
            'estado.required' => 'Ingrese :attribute',
            'nivel.required' => 'Ingrese :attribute',
            'nya.alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'pass.alpha_dash' => 'La :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'nya.max' => 'En campo :attribute debe contener menos caracteres',
            'pass.confirmed'  => 'Las contraseñas no coinciden',
            'pass.max'  => 'La :attribute es demasiado larga',
            'pass.min'  => 'La :attribute debe contener mas de 8 caracteres',
        ];
    }
}
