<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rut' => 'required|max:12',
            'razon_social' => 'required|max:100',
            'nombre_comercial' => 'required|max:100',
            'direccion' => 'max:100',
            'ciudad' => 'max:50',
            'comuna' => 'max:50',
            'giro' => 'max:100',
            'fono' => 'max:30',
            'fax' => 'max:30',
            'email_sii' => 'max:100',
            'contacto' => 'max:100',
            'email_contacto' => 'max:100',
            'sitio_web' => 'max:100',
        ];
    }
    
    public function messages()
    {
        return [
            'rut.required' => 'Campo RUT es requerido.',
            'razon_social.max:100' => 'Largo requerido 100 caracteres.',
            'nombre_comercial.max:100' => 'Largo requerido 100',
            'direccion.max:100' => 'Largo requerido 100',
            'ciudad.max:50' => 'Largo requerido 50',
            'comuna.max:50' => 'Largo requerido 50',
            'giro.max:100' => 'Largo requerido 100',
            'fono.max:30' => 'Largo requerido 30',
            'fax.max:30' => 'Largo requerido 30',
            'email_sii.max:100' => 'Largo requerido 100',
            'contacto.max:100' => 'Largo requerido 100',
            'email_contacto.max:100' => 'Largo requerido 100',
            'sitio_web.max:100' => 'Largo requerido 100',
        ];
    }    
}
