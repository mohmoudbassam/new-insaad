<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create user');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => "required|string|min:3|max:141",
            "last_name"  => "required|string|min:3|max:141",
            'email'                 => 'required|email|unique:users',
            'role'                  => 'required|string',
            'password'              => 'required|confirmed|min:6|confirmed|regex:/^[a-zA-Z0-9!$#%]+$/',
            'image'                 => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ];
    }

}
