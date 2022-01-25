<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return date('d') === '24';
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return 
            [
                //'name' => 'required|exists:users',//exists e unique para verificações na Base de Dados
                //'age' => 'required|numeric|unique:users,age'
                'name' => 'required',
                'age' => 'required'
            ]//
        ;
    }
}
