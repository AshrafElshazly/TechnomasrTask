<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

    public function rules()
    {
        return [
                'field'       => 'required',
                'password'    => 'required|string|min:6'
        ];   
    }

    public function messages()
    {
        return [
            'field.required' => 'The email or phone field is required.',
        ];
    }
}
