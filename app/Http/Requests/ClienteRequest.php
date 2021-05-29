<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome'=>'required',
            'email'=>'required',
            'endereco'=>'required'
        ];

        
    }

    

    
    public function messages()
    {
        return [
            'nome.required' => 'Preencha um nome',
            'nome.max' => 'Campo ate 255 caracteres',

            'email.required' => 'E-mail valido',
            'email.email' => 'E-mail valido',
            'email.max' => 'Campo ate 255 caracteres',

            'endereco.max' => 'Campo ate 255 caracteres',
            'endereco.required' => 'Preencha um endereço',
        ];
    }
}
