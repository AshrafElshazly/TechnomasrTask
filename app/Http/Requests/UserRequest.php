<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'     => 'required|string|max:100',
            'email'    => 'required|string|email|max:255',
            'phone'    => 'required|numeric|digits:11',
            'password' => 'required|string|min:6',
            'role_id'  => 'required|numeric|digits:1',
            'photo'    => 'required|image|mimes:jpeg,jpg'
        ];
    }
}
