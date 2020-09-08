<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
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
            'username'  => 'required',
            'password'  => 'required',
            'name'      => 'required',
            'company'      => 'required',
            'contact'      => 'required',
        ];
    }

    public function messages(){

        return [
            'username.required'  => "Username is required.",
            'password.required'  => "password is required.",
            'name.required'      => "name is required.",
            'company.required'   => "company is required.",
            'contact.required'   => "contact is required.",
        ];
    }
}
