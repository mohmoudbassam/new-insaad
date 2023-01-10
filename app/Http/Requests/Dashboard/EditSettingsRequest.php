<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update setting');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'settings.site_logo' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048',
            'settings.site_logo_dark' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048',
            'settings.site_favicon' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048'

        ];
    }



}
