<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class crearIngresoRequest extends FormRequest
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

    public function rules()
    {
        return [
            'ingre_fecha' => 'nullable',
            'ingre_centro_distribucion' => 'required|exists:centrodistribucions,id',
            'medicamentos' => 'array|required',
            'medicamentos.*.id_medicamento' => 'required|exists:medicamentos,id|distinct',
            'medicamentos.*.cantidad' => 'required|integer|gt:0',

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
