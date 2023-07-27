<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:20|min:1|unique:Productos',
            'cantidad' => 'required|numeric|max:100|min:1',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido.',
            'max' => 'El campo :attribute no puede tener más de :max caracteres.',
            'min' => 'El campo :attribute no puede tener menos de :min caracteres.',
            'unique' => 'El campo :attribute ya existe.',
            'numeric' => 'El campo :attribute debe ser numérico.',
            'nombre.required' => 'El campo nombre es requerido.', //personalizar mensaje de error (campo nombre + regla required)
        ];
    }
}
