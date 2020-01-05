<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerStore extends FormRequest
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
            'email' => 'required|unique:customer|max:100',
            'direccion' => 'nullable|max:100',
            'pass' => 'required|confirmed|max:100|min:8|alpha_dash',
            'tel' => 'required|max:100|alpha_dash',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'correo electronico',
            'nya' => 'nombre y apellido',
            'pass' => 'contraseña',
            'tel' => 'telefono',
        ];
    }

    public function messages()
    {
        return [
            'nya.required' => 'Ingrese :attribute',
            'email.required' => 'Ingrese :attribute',
            'pass.required' => 'Ingrese :attribute',
            'tel.required' => 'Ingrese :attribute',
            'nya.alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'pass.alpha_dash' => 'La :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'tel.alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'nya.max' => 'En campo :attribute debe contener menos caracteres',
            'email.unique'  => ':attribute ya registrado',
            'email.max'  => 'El :attribute debe contener menos caracteres',
            'direccion.max'  => 'El :attribute debe contener menos caracteres',
            'pass.confirmed'  => 'Las contraseñas no coinciden',
            'pass.max'  => 'La :attribute es demasiado larga',
            'pass.min'  => 'La :attribute es demasiado corta',
            'tel.max'  => 'El :attribute debe contener menos caracteres',
        ];
    }
}
