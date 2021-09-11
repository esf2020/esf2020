<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EndRequest extends FormRequest
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
            'designation' => 'required|min:2|alpha',
            'marque' => 'required|min:2|alpha',
            'quantites' => 'required',
            'observation' => 'required',
            'categorie_id' =>'required',
            /** mvt */
            'datemvt' => 'required',
            'typemvt' => 'required',
            'organe' => 'required|min:4',
            'responsable'=>'required|min:4|alpha',
            /** details */
            'materiel_id'=>'required',
            'nserie'=>'required',
            'datefin'=>'required',
            'mvt_id'=> 'required',
            'categorie'=>'required'
        ];
    }
}
