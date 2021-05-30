<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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
            
            'titulo'=>['required', 'max:255'],
            'telefone'=>['required', 'phone', 'max:36'],
        ];
    }

     
    public function messages()
    {
        return [
            'titulo.required' => 'Preencha um titulo',
            'titulo.max' => 'Campo ate 255 caracteres',

            'telefone.required' => 'Preencha um telefone válido',
            'telefone.max' => 'Campo ate 255 caracteres',

        ];
    }
}
