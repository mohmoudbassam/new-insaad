<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'ar.image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000',
            'en.image' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
            'tr.image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000',
        ];
    }

}
