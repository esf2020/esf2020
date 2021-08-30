<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class matRequest extends FormRequest
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
          //
            'designation' => 'required',
            'marque' => 'required',
            'quantites' => 'required',
            'observation' => 'required',
            'categorie_id' =>'required',
            /** mvt */
            
            /** details */
            'materiel_id'=>'required',
            'nserie'=>'required',
            'datefin'=>'required',
            'mvt_id'=> 'required'
        ];
    }
}
