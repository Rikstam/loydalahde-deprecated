<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SpringRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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

            'title' => 'string|required',
            'alias' => 'string',
            'description' => 'string|required',
            'short_description' => 'string|required',
            'status' => 'required|in:juomakelpoista,ei tietoa,ei juomakelpoista',
            'tested_at' => 'date',
            'latitude' => 'digits_between:5,9',
            'longitude' => 'digits_between:5,9',
            'visibility' => 'required|in:0,1',
           // 'image' => 'image',
        ];
    }
}
