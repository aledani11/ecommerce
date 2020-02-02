<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class register_adminStore extends FormRequest
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
            'email' => 'required|unique:admins|max:100|email:rfc,dns',
            'pass' => 'required|confirmed|max:100|min:8|alpha_dash',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'correo electronico',
            'nya' => 'nombre y apellido',
            'pass' => 'contraseña',
        ];
    }

    public function messages()
    {
        return [
            'nya.required' => 'Ingrese :attribute',
            'email.required' => 'Ingrese :attribute',
            'pass.required' => 'Ingrese :attribute',
            'nya.alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'pass.alpha_dash' => 'La :attribute solo puede contener letras, números, guiones y guiones bajos.',
            'nya.max' => 'En campo :attribute debe contener menos caracteres',
            'email.unique'  => ':attribute ya registrado',
            'email.max'  => 'El :attribute debe contener menos caracteres',
            'email.email'  => 'El :attribute no es valido',
            'pass.confirmed'  => 'Las contraseñas no coinciden',
            'pass.max'  => 'La :attribute es demasiado larga',
            'pass.min'  => 'La :attribute debe contener mas de 8 caracteres',
        ];
    }
}
