<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class centroDisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cd_codigo' => 'required|integer',
            'cd_direccion' => 'required',
            'cd_telefono' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'el campo :attribute es requerido',
            'integer' => 'el campo :attribute debe ser un numero entero',
            'numeric' => 'el campo :attribute debe ser un numero',
            'exists' => 'el campo :attribute debe existir en nuestro sistema',
            'boolean' => 'el campo :attribute debe ser un valor booleano',
            'required_unless' => 'el campo :attribute es requerido condicionalmente',
            'required_with_all' => 'el campo :attribute es requerido condicionalmente',
            'required_with' => 'el campo :attribute es requerido condicionalmente',
            'required_if' => 'el campo :attribute es requerido condicionalmente',
            'string' => 'el campo :attribute debe ser de tipo string',
            'unique' => 'el campo :attribute debe ser unico en nuestro sistema',
            'max' => 'el campo :attribute supera el largo maximo permitido',
            'array' => 'el campo :attribute debe ser de tipo array'
        ];
    }
}
