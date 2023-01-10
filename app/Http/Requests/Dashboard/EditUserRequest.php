<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update user') || $this->user == auth()->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => "required_without:password|string|min:3|max:141",
            'email'      => ['required_without:password', 'email', Rule::unique('users')->ignore($this->user, 'id')],
            'oldPassword'   => 'required_with:password',
            'password'   => 'nullable|min:6|confirmed',
            'image'      => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'role'       => 'required|string',

        ];
    }
}
