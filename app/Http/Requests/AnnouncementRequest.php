<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:100',
            'body' => 'required|string|min:30|max:500',
            'price' => 'required|numeric',
        ];
    }

    public function messages() {

        return [

            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere di minimo 3 caratteri',
            'title.max' => 'Il titolo non deve superare i 100 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere di minimo 30 caratteri',
            'description.max' => 'La descrizione non deve superare 500 caratteri',
            'price.required' => 'Inserisci un prezzo',
            'price.numeric' => 'Devi inserire un valore numerico'
        ];
    }
}
