<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ValidaRequest extends FormRequest
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
            'nombre'=>'required|min:3|mac:20',
            'apellidos'=>'regex:/^[a-z]+$/',
            'direc'=>'required',
            'tel'=>'required|numeric',
            'email'=>'required|email',
            'pass'=>'required',
        ];
    }
}
