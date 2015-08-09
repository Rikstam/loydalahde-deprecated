<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SpringRequest extends Request
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
            'short_description' => 'string|size:200|required',
            'status' => 'required|in:juomakelpoista,ei tietoa,ei juomakelpoista',
            'tested_at' => 'date',
            'latitude' => 'digits:8',
            'longitude' => 'digits:8',
            'visibility' => 'required|boolean',
            'image' => 'image',

        ];
    }
}
