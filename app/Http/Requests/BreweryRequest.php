<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {  
        //no tenemos la seguridad incrementada todavia asi que vamos a poner return true por ahora
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'cuerpo' => 'required|min:10',
            'place' => 'required|max:40' //no poner coma despues del ultimo campo en un array
        ];
    }
    public function messages(){
        return[
            'title' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'El nombre de la cervecería tiene que tener mas de 5 caracteres.'
            ],
            'cuerpo' => [
                'required' => 'Este campo es obligatorio',
                'min' => 'El campo tiene que tener más de 10 caracteres.'
            ],

            'place' => [
                'required' => 'Este campo es obligatorio',
                'max' => 'El campo no puede tener mas de 40 posiciones'
            ]
        ];
    }
}
